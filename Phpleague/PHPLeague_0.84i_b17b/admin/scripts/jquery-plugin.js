jQuery.cookie = function (key, value, options) {

    // key and value given, set cookie...
    if (arguments.length > 1 && (value === null || typeof value !== "object")) {
        options = jQuery.extend({}, options);

        if (value === null) {
            options.expires = -1;
        }

        if (typeof options.expires === 'number') {
            var days = options.expires, t = options.expires = new Date();
            t.setDate(t.getDate() + days);
        }

        return (document.cookie = [
            encodeURIComponent(key), '=',
            options.raw ? String(value) : encodeURIComponent(String(value)),
            options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
            options.path ? '; path=' + options.path : '',
            options.domain ? '; domain=' + options.domain : '',
            options.secure ? '; secure' : ''
        ].join(''));
    }

    // key and possibly options given, get cookie...
    options = value || {};
    var result, decode = options.raw ? function (s) { return s; } : decodeURIComponent;
    return (result = new RegExp('(?:^|; )' + encodeURIComponent(key) + '=([^;]*)').exec(document.cookie)) ? decode(result[1]) : null;
};




/*
	Masked Input plugin for jQuery
	Copyright (c) 2007-2009 Josh Bush (digitalbush.com)
	Licensed under the MIT license (http://digitalbush.com/projects/masked-input-plugin/#license) 
	Version: 1.2.2 (03/09/2009 22:39:06)
*/
(function($) {
	var pasteEventName = ($.browser.msie ? 'paste' : 'input') + ".mask";
	var iPhone = (window.orientation != undefined);

	$.mask = {
		//Predefined character definitions
		definitions: {
			'9': "[0-9]",
			'a': "[A-Za-z]",
			'*': "[A-Za-z0-9]"
		}
	};

	$.fn.extend({
		//Helper Function for Caret positioning
		caret: function(begin, end) {
			if (this.length == 0) return;
			if (typeof begin == 'number') {
				end = (typeof end == 'number') ? end : begin;
				return this.each(function() {
					if (this.setSelectionRange) {
						this.focus();
						this.setSelectionRange(begin, end);
					} else if (this.createTextRange) {
						var range = this.createTextRange();
						range.collapse(true);
						range.moveEnd('character', end);
						range.moveStart('character', begin);
						range.select();
					}
				});
			} else {
				if (this[0].setSelectionRange) {
					begin = this[0].selectionStart;
					end = this[0].selectionEnd;
				} else if (document.selection && document.selection.createRange) {
					var range = document.selection.createRange();
					begin = 0 - range.duplicate().moveStart('character', -100000);
					end = begin + range.text.length;
				}
				return { begin: begin, end: end };
			}
		},
		unmask: function() { return this.trigger("unmask"); },
		mask: function(mask, settings) {
			if (!mask && this.length > 0) {
				var input = $(this[0]);
				var tests = input.data("tests");
				return $.map(input.data("buffer"), function(c, i) {
					return tests[i] ? c : null;
				}).join('');
			}
			settings = $.extend({
				placeholder: "_",
				completed: null
			}, settings);

			var defs = $.mask.definitions;
			var tests = [];
			var partialPosition = mask.length;
			var firstNonMaskPos = null;
			var len = mask.length;

			$.each(mask.split(""), function(i, c) {
				if (c == '?') {
					len--;
					partialPosition = i;
				} else if (defs[c]) {
					tests.push(new RegExp(defs[c]));
					if(firstNonMaskPos==null)
						firstNonMaskPos =  tests.length - 1;
				} else {
					tests.push(null);
				}
			});

			return this.each(function() {
				var input = $(this);
				var buffer = $.map(mask.split(""), function(c, i) { if (c != '?') return defs[c] ? settings.placeholder : c });
				var ignore = false;  			//Variable for ignoring control keys
				var focusText = input.val();

				input.data("buffer", buffer).data("tests", tests);

				function seekNext(pos) {
					while (++pos <= len && !tests[pos]);
					return pos;
				};

				function shiftL(pos) {
					while (!tests[pos] && --pos >= 0);
					for (var i = pos; i < len; i++) {
						if (tests[i]) {
							buffer[i] = settings.placeholder;
							var j = seekNext(i);
							if (j < len && tests[i].test(buffer[j])) {
								buffer[i] = buffer[j];
							} else
								break;
						}
					}
					writeBuffer();
					input.caret(Math.max(firstNonMaskPos, pos));
				};

				function shiftR(pos) {
					for (var i = pos, c = settings.placeholder; i < len; i++) {
						if (tests[i]) {
							var j = seekNext(i);
							var t = buffer[i];
							buffer[i] = c;
							if (j < len && tests[j].test(t))
								c = t;
							else
								break;
						}
					}
				};

				function keydownEvent(e) {
					var pos = $(this).caret();
					var k = e.keyCode;
					ignore = (k < 16 || (k > 16 && k < 32) || (k > 32 && k < 41));

					//delete selection before proceeding
					if ((pos.begin - pos.end) != 0 && (!ignore || k == 8 || k == 46))
						clearBuffer(pos.begin, pos.end);

					//backspace, delete, and escape get special treatment
					if (k == 8 || k == 46 || (iPhone && k == 127)) {//backspace/delete
						shiftL(pos.begin + (k == 46 ? 0 : -1));
						return false;
					} else if (k == 27) {//escape
						input.val(focusText);
						input.caret(0, checkVal());
						return false;
					}
				};

				function keypressEvent(e) {
					if (ignore) {
						ignore = false;
						//Fixes Mac FF bug on backspace
						return (e.keyCode == 8) ? false : null;
					}
					e = e || window.event;
					var k = e.charCode || e.keyCode || e.which;
					var pos = $(this).caret();

					if (e.ctrlKey || e.altKey || e.metaKey) {//Ignore
						return true;
					} else if ((k >= 32 && k <= 125) || k > 186) {//typeable characters
						var p = seekNext(pos.begin - 1);
						if (p < len) {
							var c = String.fromCharCode(k);
							if (tests[p].test(c)) {
								shiftR(p);
								buffer[p] = c;
								writeBuffer();
								var next = seekNext(p);
								$(this).caret(next);
								if (settings.completed && next == len)
									settings.completed.call(input);
							}
						}
					}
					return false;
				};

				function clearBuffer(start, end) {
					for (var i = start; i < end && i < len; i++) {
						if (tests[i])
							buffer[i] = settings.placeholder;
					}
				};

				function writeBuffer() { return input.val(buffer.join('')).val(); };

				function checkVal(allow) {
					//try to place characters where they belong
					var test = input.val();
					var lastMatch = -1;
					for (var i = 0, pos = 0; i < len; i++) {
						if (tests[i]) {
							buffer[i] = settings.placeholder;
							while (pos++ < test.length) {
								var c = test.charAt(pos - 1);
								if (tests[i].test(c)) {
									buffer[i] = c;
									lastMatch = i;
									break;
								}
							}
							if (pos > test.length)
								break;
						} else if (buffer[i] == test[pos] && i!=partialPosition) {
							pos++;
							lastMatch = i;
						} 
					}
					if (!allow && lastMatch + 1 < partialPosition) {
						input.val("");
						clearBuffer(0, len);
					} else if (allow || lastMatch + 1 >= partialPosition) {
						writeBuffer();
						if (!allow) input.val(input.val().substring(0, lastMatch + 1));
					}
					return (partialPosition ? i : firstNonMaskPos);
				};

				if (!input.attr("readonly"))
					input
					.one("unmask", function() {
						input
							.unbind(".mask")
							.removeData("buffer")
							.removeData("tests");
					})
					.bind("focus.mask", function() {
						focusText = input.val();
						var pos = checkVal();
						writeBuffer();
						setTimeout(function() {
							if (pos == mask.length)
								input.caret(0, pos);
							else
								input.caret(pos);
						}, 0);
					})
					.bind("blur.mask", function() {
						checkVal();
						if (input.val() != focusText)
							input.change();
					})
					.bind("keydown.mask", keydownEvent)
					.bind("keypress.mask", keypressEvent)
					.bind(pasteEventName, function() {
						setTimeout(function() { input.caret(checkVal(true)); }, 0);
					});

				checkVal(); //Perform initial check for existing values
			});
		}
	});
})(jQuery);



/*
 * jQuery validation plug-in 1.7
 *
 * http://bassistance.de/jquery-plugins/jquery-plugin-validation/
 * http://docs.jquery.com/Plugins/Validation
 *
 * Copyright (c) 2006 - 2008 Jörn Zaefferer
 *
 * $Id: jquery.validate.js 6403 2009-06-17 14:27:16Z joern.zaefferer $
 *
 * Dual licensed under the MIT and GPL licenses:
 *   http://www.opensource.org/licenses/mit-license.php
 *   http://www.gnu.org/licenses/gpl.html
 */

(function($) {

$.extend($.fn, {
	// http://docs.jquery.com/Plugins/Validation/validate
	validate: function( options ) {

		// if nothing is selected, return nothing; can't chain anyway
		if (!this.length) {
			options && options.debug && window.console && console.warn( "nothing selected, can't validate, returning nothing" );
			return;
		}

		// check if a validator for this form was already created
		var validator = $.data(this[0], 'validator');
		if ( validator ) {
			return validator;
		}
		
		validator = new $.validator( options, this[0] );
		$.data(this[0], 'validator', validator); 
		
		if ( validator.settings.onsubmit ) {
		
			// allow suppresing validation by adding a cancel class to the submit button
			this.find("input, button").filter(".cancel").click(function() {
				validator.cancelSubmit = true;
			});
			
			// when a submitHandler is used, capture the submitting button
			if (validator.settings.submitHandler) {
				this.find("input, button").filter(":submit").click(function() {
					validator.submitButton = this;
				});
			}
		
			// validate the form on submit
			this.submit( function( event ) {
				if ( validator.settings.debug )
					// prevent form submit to be able to see console output
					event.preventDefault();
					

				function handle() {
					if ( validator.settings.submitHandler ) {
						if (validator.submitButton) {
							// insert a hidden input as a replacement for the missing submit button
							var hidden = $("<input type='hidden'/>").attr("name", validator.submitButton.name).val(validator.submitButton.value).appendTo(validator.currentForm);
						}
						validator.settings.submitHandler.call( validator, validator.currentForm );
						if (validator.submitButton) {
							// and clean up afterwards; thanks to no-block-scope, hidden can be referenced
							hidden.remove();
						}
						return false;
					}
					return true;
				}
					
				// prevent submit for invalid forms or custom submit handlers
				if ( validator.cancelSubmit ) {
					validator.cancelSubmit = false;
					return handle();
				}
				if ( validator.form() ) {
					if ( validator.pendingRequest ) {
						validator.formSubmitted = true;
						return false;
					}
					return handle();
				} else {
					validator.focusInvalid();
					return false;
				}
			});
		}
		
		return validator;
	},
	// http://docs.jquery.com/Plugins/Validation/valid
	valid: function() {
        if ( $(this[0]).is('form')) {
            return this.validate().form();
        } else {
            var valid = true;
            var validator = $(this[0].form).validate();
            this.each(function() {
				valid &= validator.element(this);
            });
            return valid;
        }
    },
	// attributes: space seperated list of attributes to retrieve and remove
	removeAttrs: function(attributes) {
		var result = {},
			$element = this;
		$.each(attributes.split(/\s/), function(index, value) {
			result[value] = $element.attr(value);
			$element.removeAttr(value);
		});
		return result;
	},
	// http://docs.jquery.com/Plugins/Validation/rules
	rules: function(command, argument) {
		var element = this[0];
		
		if (command) {
			var settings = $.data(element.form, 'validator').settings;
			var staticRules = settings.rules;
			var existingRules = $.validator.staticRules(element);
			switch(command) {
			case "add":
				$.extend(existingRules, $.validator.normalizeRule(argument));
				staticRules[element.name] = existingRules;
				if (argument.messages)
					settings.messages[element.name] = $.extend( settings.messages[element.name], argument.messages );
				break;
			case "remove":
				if (!argument) {
					delete staticRules[element.name];
					return existingRules;
				}
				var filtered = {};
				$.each(argument.split(/\s/), function(index, method) {
					filtered[method] = existingRules[method];
					delete existingRules[method];
				});
				return filtered;
			}
		}
		
		var data = $.validator.normalizeRules(
		$.extend(
			{},
			$.validator.metadataRules(element),
			$.validator.classRules(element),
			$.validator.attributeRules(element),
			$.validator.staticRules(element)
		), element);
		
		// make sure required is at front
		if (data.required) {
			var param = data.required;
			delete data.required;
			data = $.extend({required: param}, data);
		}
		
		return data;
	}
});

// Custom selectors
$.extend($.expr[":"], {
	// http://docs.jquery.com/Plugins/Validation/blank
	blank: function(a) {return !$.trim("" + a.value);},
	// http://docs.jquery.com/Plugins/Validation/filled
	filled: function(a) {return !!$.trim("" + a.value);},
	// http://docs.jquery.com/Plugins/Validation/unchecked
	unchecked: function(a) {return !a.checked;}
});

// constructor for validator
$.validator = function( options, form ) {
	this.settings = $.extend( true, {}, $.validator.defaults, options );
	this.currentForm = form;
	this.init();
};

$.validator.format = function(source, params) {
	if ( arguments.length == 1 ) 
		return function() {
			var args = $.makeArray(arguments);
			args.unshift(source);
			return $.validator.format.apply( this, args );
		};
	if ( arguments.length > 2 && params.constructor != Array  ) {
		params = $.makeArray(arguments).slice(1);
	}

	if ( params.constructor != Array ) {
		params = [ params ];
	}
	$.each(params, function(i, n) {
		source = source.replace(new RegExp("\\{" + i + "\\}", "g"), n);
	});
	return source;
};

$.extend($.validator, {
	
	defaults: {
		messages: {},
		groups: {},
		rules: {},
		errorClass: "error",
		validClass: "valid",
		errorElement: "label",
		focusInvalid: true,
		errorContainer: $( [] ),
		errorLabelContainer: $( [] ),
		onsubmit: true,
		ignore: [],
		ignoreTitle: false,
		onfocusin: function(element) {
			this.lastActive = element;
				
			// hide error label and remove error class on focus if enabled
			if ( this.settings.focusCleanup && !this.blockFocusCleanup ) {
				this.settings.unhighlight && this.settings.unhighlight.call( this, element, this.settings.errorClass, this.settings.validClass );
				this.errorsFor(element).hide();
			}
		},
		onfocusout: function(element) {
			if ( !this.checkable(element) && (element.name in this.submitted || !this.optional(element)) ) {
				this.element(element);
			}
		},
		onkeyup: function(element) {
			if ( element.name in this.submitted || element == this.lastElement ) {
				this.element(element);
			}
		},
		onclick: function(element) {
			// click on selects, radiobuttons and checkboxes
			if ( element.name in this.submitted )
				this.element(element);
			// or option elements, check parent select in that case
			else if (element.parentNode.name in this.submitted)
				this.element(element.parentNode);
		},
		highlight: function( element, errorClass, validClass ) {
			$(element).addClass(errorClass).removeClass(validClass);
		},
		unhighlight: function( element, errorClass, validClass ) {
			$(element).removeClass(errorClass).addClass(validClass);
		}
	},

	// http://docs.jquery.com/Plugins/Validation/Validator/setDefaults
	setDefaults: function(settings) {
		$.extend( $.validator.defaults, settings );
	},

	messages: {
		required: "This field is required.",
		remote: "Please fix this field.",
		email: "Please enter a valid email address.",
		url: "Please enter a valid URL.",
		date: "Please enter a valid date.",
		dateISO: "Please enter a valid date (ISO).",
		number: "Please enter a valid number.",
		digits: "Please enter only digits.",
		creditcard: "Please enter a valid credit card number.",
		equalTo: "Please enter the same value again.",
		accept: "Please enter a value with a valid extension.",
		maxlength: $.validator.format("Please enter no more than {0} characters."),
		minlength: $.validator.format("Please enter at least {0} characters."),
		rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
		range: $.validator.format("Please enter a value between {0} and {1}."),
		max: $.validator.format("Please enter a value less than or equal to {0}."),
		min: $.validator.format("Please enter a value greater than or equal to {0}.")
	},
	
	autoCreateRanges: false,
	
	prototype: {
		
		init: function() {
			this.labelContainer = $(this.settings.errorLabelContainer);
			this.errorContext = this.labelContainer.length && this.labelContainer || $(this.currentForm);
			this.containers = $(this.settings.errorContainer).add( this.settings.errorLabelContainer );
			this.submitted = {};
			this.valueCache = {};
			this.pendingRequest = 0;
			this.pending = {};
			this.invalid = {};
			this.reset();
			
			var groups = (this.groups = {});
			$.each(this.settings.groups, function(key, value) {
				$.each(value.split(/\s/), function(index, name) {
					groups[name] = key;
				});
			});
			var rules = this.settings.rules;
			$.each(rules, function(key, value) {
				rules[key] = $.validator.normalizeRule(value);
			});
			
			function delegate(event) {
				var validator = $.data(this[0].form, "validator"),
					eventType = "on" + event.type.replace(/^validate/, "");
				validator.settings[eventType] && validator.settings[eventType].call(validator, this[0] );
			}
			$(this.currentForm)
				.validateDelegate(":text, :password, :file, select, textarea", "focusin focusout keyup", delegate)
				.validateDelegate(":radio, :checkbox, select, option", "click", delegate);

			if (this.settings.invalidHandler)
				$(this.currentForm).bind("invalid-form.validate", this.settings.invalidHandler);
		},

		// http://docs.jquery.com/Plugins/Validation/Validator/form
		form: function() {
			this.checkForm();
			$.extend(this.submitted, this.errorMap);
			this.invalid = $.extend({}, this.errorMap);
			if (!this.valid())
				$(this.currentForm).triggerHandler("invalid-form", [this]);
			this.showErrors();
			return this.valid();
		},
		
		checkForm: function() {
			this.prepareForm();
			for ( var i = 0, elements = (this.currentElements = this.elements()); elements[i]; i++ ) {
				this.check( elements[i] );
			}
			return this.valid(); 
		},
		
		// http://docs.jquery.com/Plugins/Validation/Validator/element
		element: function( element ) {
			element = this.clean( element );
			this.lastElement = element;
			this.prepareElement( element );
			this.currentElements = $(element);
			var result = this.check( element );
			if ( result ) {
				delete this.invalid[element.name];
			} else {
				this.invalid[element.name] = true;
			}
			if ( !this.numberOfInvalids() ) {
				// Hide error containers on last error
				this.toHide = this.toHide.add( this.containers );
			}
			this.showErrors();
			return result;
		},

		// http://docs.jquery.com/Plugins/Validation/Validator/showErrors
		showErrors: function(errors) {
			if(errors) {
				// add items to error list and map
				$.extend( this.errorMap, errors );
				this.errorList = [];
				for ( var name in errors ) {
					this.errorList.push({
						message: errors[name],
						element: this.findByName(name)[0]
					});
				}
				// remove items from success list
				this.successList = $.grep( this.successList, function(element) {
					return !(element.name in errors);
				});
			}
			this.settings.showErrors
				? this.settings.showErrors.call( this, this.errorMap, this.errorList )
				: this.defaultShowErrors();
		},
		
		// http://docs.jquery.com/Plugins/Validation/Validator/resetForm
		resetForm: function() {
			if ( $.fn.resetForm )
				$( this.currentForm ).resetForm();
			this.submitted = {};
			this.prepareForm();
			this.hideErrors();
			this.elements().removeClass( this.settings.errorClass );
		},
		
		numberOfInvalids: function() {
			return this.objectLength(this.invalid);
		},
		
		objectLength: function( obj ) {
			var count = 0;
			for ( var i in obj )
				count++;
			return count;
		},
		
		hideErrors: function() {
			this.addWrapper( this.toHide ).hide();
		},
		
		valid: function() {
			return this.size() == 0;
		},
		
		size: function() {
			return this.errorList.length;
		},
		
		focusInvalid: function() {
			if( this.settings.focusInvalid ) {
				try {
					$(this.findLastActive() || this.errorList.length && this.errorList[0].element || [])
					.filter(":visible")
					.focus()
					// manually trigger focusin event; without it, focusin handler isn't called, findLastActive won't have anything to find
					.trigger("focusin");
				} catch(e) {
					// ignore IE throwing errors when focusing hidden elements
				}
			}
		},
		
		findLastActive: function() {
			var lastActive = this.lastActive;
			return lastActive && $.grep(this.errorList, function(n) {
				return n.element.name == lastActive.name;
			}).length == 1 && lastActive;
		},
		
		elements: function() {
			var validator = this,
				rulesCache = {};
			
			// select all valid inputs inside the form (no submit or reset buttons)
			// workaround $Query([]).add until http://dev.jquery.com/ticket/2114 is solved
			return $([]).add(this.currentForm.elements)
			.filter(":input")
			.not(":submit, :reset, :image, [disabled]")
			.not( this.settings.ignore )
			.filter(function() {
				!this.name && validator.settings.debug && window.console && console.error( "%o has no name assigned", this);
			
				// select only the first element for each name, and only those with rules specified
				if ( this.name in rulesCache || !validator.objectLength($(this).rules()) )
					return false;
				
				rulesCache[this.name] = true;
				return true;
			});
		},
		
		clean: function( selector ) {
			return $( selector )[0];
		},
		
		errors: function() {
			return $( this.settings.errorElement + "." + this.settings.errorClass, this.errorContext );
		},
		
		reset: function() {
			this.successList = [];
			this.errorList = [];
			this.errorMap = {};
			this.toShow = $([]);
			this.toHide = $([]);
			this.currentElements = $([]);
		},
		
		prepareForm: function() {
			this.reset();
			this.toHide = this.errors().add( this.containers );
		},
		
		prepareElement: function( element ) {
			this.reset();
			this.toHide = this.errorsFor(element);
		},
	
		check: function( element ) {
			element = this.clean( element );
			
			// if radio/checkbox, validate first element in group instead
			if (this.checkable(element)) {
				element = this.findByName( element.name )[0];
			}
			
			var rules = $(element).rules();
			var dependencyMismatch = false;
			for( method in rules ) {
				var rule = { method: method, parameters: rules[method] };
				try {
					var result = $.validator.methods[method].call( this, element.value.replace(/\r/g, ""), element, rule.parameters );
					
					// if a method indicates that the field is optional and therefore valid,
					// don't mark it as valid when there are no other rules
					if ( result == "dependency-mismatch" ) {
						dependencyMismatch = true;
						continue;
					}
					dependencyMismatch = false;
					
					if ( result == "pending" ) {
						this.toHide = this.toHide.not( this.errorsFor(element) );
						return;
					}
					
					if( !result ) {
						this.formatAndAdd( element, rule );
						return false;
					}
				} catch(e) {
					this.settings.debug && window.console && console.log("exception occured when checking element " + element.id
						 + ", check the '" + rule.method + "' method", e);
					throw e;
				}
			}
			if (dependencyMismatch)
				return;
			if ( this.objectLength(rules) )
				this.successList.push(element);
			return true;
		},
		
		// return the custom message for the given element and validation method
		// specified in the element's "messages" metadata
		customMetaMessage: function(element, method) {
			if (!$.metadata)
				return;
			
			var meta = this.settings.meta
				? $(element).metadata()[this.settings.meta]
				: $(element).metadata();
			
			return meta && meta.messages && meta.messages[method];
		},
		
		// return the custom message for the given element name and validation method
		customMessage: function( name, method ) {
			var m = this.settings.messages[name];
			return m && (m.constructor == String
				? m
				: m[method]);
		},
		
		// return the first defined argument, allowing empty strings
		findDefined: function() {
			for(var i = 0; i < arguments.length; i++) {
				if (arguments[i] !== undefined)
					return arguments[i];
			}
			return undefined;
		},
		
		defaultMessage: function( element, method) {
			return this.findDefined(
				this.customMessage( element.name, method ),
				this.customMetaMessage( element, method ),
				// title is never undefined, so handle empty string as undefined
				!this.settings.ignoreTitle && element.title || undefined,
				$.validator.messages[method],
				"<strong>Warning: No message defined for " + element.name + "</strong>"
			);
		},
		
		formatAndAdd: function( element, rule ) {
			var message = this.defaultMessage( element, rule.method ),
				theregex = /\$?\{(\d+)\}/g;
			if ( typeof message == "function" ) {
				message = message.call(this, rule.parameters, element);
			} else if (theregex.test(message)) {
				message = jQuery.format(message.replace(theregex, '{$1}'), rule.parameters);
			}			
			this.errorList.push({
				message: message,
				element: element
			});
			
			this.errorMap[element.name] = message;
			this.submitted[element.name] = message;
		},
		
		addWrapper: function(toToggle) {
			if ( this.settings.wrapper )
				toToggle = toToggle.add( toToggle.parent( this.settings.wrapper ) );
			return toToggle;
		},
		
		defaultShowErrors: function() {
			for ( var i = 0; this.errorList[i]; i++ ) {
				var error = this.errorList[i];
				this.settings.highlight && this.settings.highlight.call( this, error.element, this.settings.errorClass, this.settings.validClass );
				this.showLabel( error.element, error.message );
			}
			if( this.errorList.length ) {
				this.toShow = this.toShow.add( this.containers );
			}
			if (this.settings.success) {
				for ( var i = 0; this.successList[i]; i++ ) {
					this.showLabel( this.successList[i] );
				}
			}
			if (this.settings.unhighlight) {
				for ( var i = 0, elements = this.validElements(); elements[i]; i++ ) {
					this.settings.unhighlight.call( this, elements[i], this.settings.errorClass, this.settings.validClass );
				}
			}
			this.toHide = this.toHide.not( this.toShow );
			this.hideErrors();
			this.addWrapper( this.toShow ).show();
		},
		
		validElements: function() {
			return this.currentElements.not(this.invalidElements());
		},
		
		invalidElements: function() {
			return $(this.errorList).map(function() {
				return this.element;
			});
		},
		
		showLabel: function(element, message) {
			var label = this.errorsFor( element );
			if ( label.length ) {
				// refresh error/success class
				label.removeClass().addClass( this.settings.errorClass );
			
				// check if we have a generated label, replace the message then
				label.attr("generated") && label.html(message);
			} else {
				// create label
				label = $("<" + this.settings.errorElement + "/>")
					.attr({"for":  this.idOrName(element), generated: true})
					.addClass(this.settings.errorClass)
					.html(message || "");
				if ( this.settings.wrapper ) {
					// make sure the element is visible, even in IE
					// actually showing the wrapped element is handled elsewhere
					label = label.hide().show().wrap("<" + this.settings.wrapper + "/>").parent();
				}
				if ( !this.labelContainer.append(label).length )
					this.settings.errorPlacement
						? this.settings.errorPlacement(label, $(element) )
						: label.insertAfter(element);
			}
			if ( !message && this.settings.success ) {
				label.text("");
				typeof this.settings.success == "string"
					? label.addClass( this.settings.success )
					: this.settings.success( label );
			}
			this.toShow = this.toShow.add(label);
		},
		
		errorsFor: function(element) {
			var name = this.idOrName(element);
    		return this.errors().filter(function() {
				return $(this).attr('for') == name;
			});
		},
		
		idOrName: function(element) {
			return this.groups[element.name] || (this.checkable(element) ? element.name : element.id || element.name);
		},

		checkable: function( element ) {
			return /radio|checkbox/i.test(element.type);
		},
		
		findByName: function( name ) {
			// select by name and filter by form for performance over form.find("[name=...]")
			var form = this.currentForm;
			return $(document.getElementsByName(name)).map(function(index, element) {
				return element.form == form && element.name == name && element  || null;
			});
		},
		
		getLength: function(value, element) {
			switch( element.nodeName.toLowerCase() ) {
			case 'select':
				return $("option:selected", element).length;
			case 'input':
				if( this.checkable( element) )
					return this.findByName(element.name).filter(':checked').length;
			}
			return value.length;
		},
	
		depend: function(param, element) {
			return this.dependTypes[typeof param]
				? this.dependTypes[typeof param](param, element)
				: true;
		},
	
		dependTypes: {
			"boolean": function(param, element) {
				return param;
			},
			"string": function(param, element) {
				return !!$(param, element.form).length;
			},
			"function": function(param, element) {
				return param(element);
			}
		},
		
		optional: function(element) {
			return !$.validator.methods.required.call(this, $.trim(element.value), element) && "dependency-mismatch";
		},
		
		startRequest: function(element) {
			if (!this.pending[element.name]) {
				this.pendingRequest++;
				this.pending[element.name] = true;
			}
		},
		
		stopRequest: function(element, valid) {
			this.pendingRequest--;
			// sometimes synchronization fails, make sure pendingRequest is never < 0
			if (this.pendingRequest < 0)
				this.pendingRequest = 0;
			delete this.pending[element.name];
			if ( valid && this.pendingRequest == 0 && this.formSubmitted && this.form() ) {
				$(this.currentForm).submit();
				this.formSubmitted = false;
			} else if (!valid && this.pendingRequest == 0 && this.formSubmitted) {
				$(this.currentForm).triggerHandler("invalid-form", [this]);
				this.formSubmitted = false;
			}
		},
		
		previousValue: function(element) {
			return $.data(element, "previousValue") || $.data(element, "previousValue", {
				old: null,
				valid: true,
				message: this.defaultMessage( element, "remote" )
			});
		}
		
	},
	
	classRuleSettings: {
		required: {required: true},
		email: {email: true},
		url: {url: true},
		date: {date: true},
		dateISO: {dateISO: true},
		dateDE: {dateDE: true},
		number: {number: true},
		numberDE: {numberDE: true},
		digits: {digits: true},
		creditcard: {creditcard: true}
	},
	
	addClassRules: function(className, rules) {
		className.constructor == String ?
			this.classRuleSettings[className] = rules :
			$.extend(this.classRuleSettings, className);
	},
	
	classRules: function(element) {
		var rules = {};
		var classes = $(element).attr('class');
		classes && $.each(classes.split(' '), function() {
			if (this in $.validator.classRuleSettings) {
				$.extend(rules, $.validator.classRuleSettings[this]);
			}
		});
		return rules;
	},
	
	attributeRules: function(element) {
		var rules = {};
		var $element = $(element);

		
		for (method in $.validator.methods) {
			var value = $element.attr(method);
			if (value) {
				rules[method] = value;
			}
		}
		
		// maxlength may be returned as -1, 2147483647 (IE) and 524288 (safari) for text inputs
		if (rules.maxlength && /-1|2147483647|524288/.test(rules.maxlength)) {
			delete rules.maxlength;
		}
		
		return rules;
	},
	
	metadataRules: function(element) {
		if (!$.metadata) return {};
		
		var meta = $.data(element.form, 'validator').settings.meta;
		return meta ?
			$(element).metadata()[meta] :
			$(element).metadata();
	},
	
	staticRules: function(element) {
		var rules = {};
		var validator = $.data(element.form, 'validator');
		if (validator.settings.rules) {
			rules = $.validator.normalizeRule(validator.settings.rules[element.name]) || {};
		}
		return rules;
	},
	
	normalizeRules: function(rules, element) {
		// handle dependency check
		$.each(rules, function(prop, val) {
			// ignore rule when param is explicitly false, eg. required:false
			if (val === false) {
				delete rules[prop];
				return;
			}
			if (val.param || val.depends) {
				var keepRule = true;
				switch (typeof val.depends) {
					case "string":
						keepRule = !!$(val.depends, element.form).length;
						break;
					case "function":
						keepRule = val.depends.call(element, element);
						break;
				}
				if (keepRule) {
					rules[prop] = val.param !== undefined ? val.param : true;
				} else {
					delete rules[prop];
				}
			}
		});
		
		// evaluate parameters
		$.each(rules, function(rule, parameter) {
			rules[rule] = $.isFunction(parameter) ? parameter(element) : parameter;
		});
		
		// clean number parameters
		$.each(['minlength', 'maxlength', 'min', 'max'], function() {
			if (rules[this]) {
				rules[this] = Number(rules[this]);
			}
		});
		$.each(['rangelength', 'range'], function() {
			if (rules[this]) {
				rules[this] = [Number(rules[this][0]), Number(rules[this][1])];
			}
		});
		
		if ($.validator.autoCreateRanges) {
			// auto-create ranges
			if (rules.min && rules.max) {
				rules.range = [rules.min, rules.max];
				delete rules.min;
				delete rules.max;
			}
			if (rules.minlength && rules.maxlength) {
				rules.rangelength = [rules.minlength, rules.maxlength];
				delete rules.minlength;
				delete rules.maxlength;
			}
		}
		
		// To support custom messages in metadata ignore rule methods titled "messages"
		if (rules.messages) {
			delete rules.messages;
		}
		
		return rules;
	},
	
	// Converts a simple string to a {string: true} rule, e.g., "required" to {required:true}
	normalizeRule: function(data) {
		if( typeof data == "string" ) {
			var transformed = {};
			$.each(data.split(/\s/), function() {
				transformed[this] = true;
			});
			data = transformed;
		}
		return data;
	},
	
	// http://docs.jquery.com/Plugins/Validation/Validator/addMethod
	addMethod: function(name, method, message) {
		$.validator.methods[name] = method;
		$.validator.messages[name] = message != undefined ? message : $.validator.messages[name];
		if (method.length < 3) {
			$.validator.addClassRules(name, $.validator.normalizeRule(name));
		}
	},

	methods: {

		// http://docs.jquery.com/Plugins/Validation/Methods/required
		required: function(value, element, param) {
			// check if dependency is met
			if ( !this.depend(param, element) )
				return "dependency-mismatch";
			switch( element.nodeName.toLowerCase() ) {
			case 'select':
				// could be an array for select-multiple or a string, both are fine this way
				var val = $(element).val();
				return val && val.length > 0;
			case 'input':
				if ( this.checkable(element) )
					return this.getLength(value, element) > 0;
			default:
				return $.trim(value).length > 0;
			}
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/remote
		remote: function(value, element, param) {
			if ( this.optional(element) )
				return "dependency-mismatch";
			
			var previous = this.previousValue(element);
			if (!this.settings.messages[element.name] )
				this.settings.messages[element.name] = {};
			previous.originalMessage = this.settings.messages[element.name].remote;
			this.settings.messages[element.name].remote = previous.message;
			
			param = typeof param == "string" && {url:param} || param; 
			
			if ( previous.old !== value ) {
				previous.old = value;
				var validator = this;
				this.startRequest(element);
				var data = {};
				data[element.name] = value;
				$.ajax($.extend(true, {
					url: param,
					mode: "abort",
					port: "validate" + element.name,
					dataType: "json",
					data: data,
					success: function(response) {
						validator.settings.messages[element.name].remote = previous.originalMessage;
						var valid = response === true;
						if ( valid ) {
							var submitted = validator.formSubmitted;
							validator.prepareElement(element);
							validator.formSubmitted = submitted;
							validator.successList.push(element);
							validator.showErrors();
						} else {
							var errors = {};
							var message = (previous.message = response || validator.defaultMessage( element, "remote" ));
							errors[element.name] = $.isFunction(message) ? message(value) : message;
							validator.showErrors(errors);
						}
						previous.valid = valid;
						validator.stopRequest(element, valid);
					}
				}, param));
				return "pending";
			} else if( this.pending[element.name] ) {
				return "pending";
			}
			return previous.valid;
		},

		// http://docs.jquery.com/Plugins/Validation/Methods/minlength
		minlength: function(value, element, param) {
			return this.optional(element) || this.getLength($.trim(value), element) >= param;
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/maxlength
		maxlength: function(value, element, param) {
			return this.optional(element) || this.getLength($.trim(value), element) <= param;
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/rangelength
		rangelength: function(value, element, param) {
			var length = this.getLength($.trim(value), element);
			return this.optional(element) || ( length >= param[0] && length <= param[1] );
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/min
		min: function( value, element, param ) {
			return this.optional(element) || value >= param;
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/max
		max: function( value, element, param ) {
			return this.optional(element) || value <= param;
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/range
		range: function( value, element, param ) {
			return this.optional(element) || ( value >= param[0] && value <= param[1] );
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/email
		email: function(value, element) {
			// contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
			return this.optional(element) || /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i.test(value);
		},
	
		// http://docs.jquery.com/Plugins/Validation/Methods/url
		url: function(value, element) {
			// contributed by Scott Gonzalez: http://projects.scottsplayground.com/iri/
			return this.optional(element) || /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(value);
		},
        
		// http://docs.jquery.com/Plugins/Validation/Methods/date
		date: function(value, element) {
			return this.optional(element) || !/Invalid|NaN/.test(new Date(value));
		},
	
		// http://docs.jquery.com/Plugins/Validation/Methods/dateISO
		dateISO: function(value, element) {
			return this.optional(element) || /^\d{4}[\/-]\d{1,2}[\/-]\d{1,2}$/.test(value);
		},
	
		// http://docs.jquery.com/Plugins/Validation/Methods/number
		number: function(value, element) {
			return this.optional(element) || /^-?(?:\d+|\d{1,3}(?:,\d{3})+)(?:\.\d+)?$/.test(value);
		},
	
		// http://docs.jquery.com/Plugins/Validation/Methods/digits
		digits: function(value, element) {
			return this.optional(element) || /^\d+$/.test(value);
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/creditcard
		// based on http://en.wikipedia.org/wiki/Luhn
		creditcard: function(value, element) {
			if ( this.optional(element) )
				return "dependency-mismatch";
			// accept only digits and dashes
			if (/[^0-9-]+/.test(value))
				return false;
			var nCheck = 0,
				nDigit = 0,
				bEven = false;

			value = value.replace(/\D/g, "");

			for (var n = value.length - 1; n >= 0; n--) {
				var cDigit = value.charAt(n);
				var nDigit = parseInt(cDigit, 10);
				if (bEven) {
					if ((nDigit *= 2) > 9)
						nDigit -= 9;
				}
				nCheck += nDigit;
				bEven = !bEven;
			}

			return (nCheck % 10) == 0;
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/accept
		accept: function(value, element, param) {
			param = typeof param == "string" ? param.replace(/,/g, '|') : "png|jpe?g|gif";
			return this.optional(element) || value.match(new RegExp(".(" + param + ")$", "i")); 
		},
		
		// http://docs.jquery.com/Plugins/Validation/Methods/equalTo
		equalTo: function(value, element, param) {
			// bind to the blur event of the target in order to revalidate whenever the target field is updated
			// TODO find a way to bind the event just once, avoiding the unbind-rebind overhead
			var target = $(param).unbind(".validate-equalTo").bind("blur.validate-equalTo", function() {
				$(element).valid();
			});
			return value == target.val();
		}
		
	}
	
});

// deprecated, use $.validator.format instead
$.format = $.validator.format;

})(jQuery);

// ajax mode: abort
// usage: $.ajax({ mode: "abort"[, port: "uniqueport"]});
// if mode:"abort" is used, the previous request on that port (port can be undefined) is aborted via XMLHttpRequest.abort() 
(function($) {
	var ajax = $.ajax;
	var pendingRequests = {};
	$.ajax = function(settings) {
		// create settings for compatibility with ajaxSetup
		settings = $.extend(settings, $.extend({}, $.ajaxSettings, settings));
		var port = settings.port;
		if (settings.mode == "abort") {
			if ( pendingRequests[port] ) {
				pendingRequests[port].abort();
			}
			return (pendingRequests[port] = ajax.apply(this, arguments));
		}
		return ajax.apply(this, arguments);
	};
})(jQuery);

// provides cross-browser focusin and focusout events
// IE has native support, in other browsers, use event caputuring (neither bubbles)

// provides delegate(type: String, delegate: Selector, handler: Callback) plugin for easier event delegation
// handler is only called when $(event.target).is(delegate), in the scope of the jquery-object for event.target 
(function($) {
	// only implement if not provided by jQuery core (since 1.4)
	// TODO verify if jQuery 1.4's implementation is compatible with older jQuery special-event APIs
	if (!jQuery.event.special.focusin && !jQuery.event.special.focusout && document.addEventListener) {
		$.each({
			focus: 'focusin',
			blur: 'focusout'	
		}, function( original, fix ){
			$.event.special[fix] = {
				setup:function() {
					this.addEventListener( original, handler, true );
				},
				teardown:function() {
					this.removeEventListener( original, handler, true );
				},
				handler: function(e) {
					arguments[0] = $.event.fix(e);
					arguments[0].type = fix;
					return $.event.handle.apply(this, arguments);
				}
			};
			function handler(e) {
				e = $.event.fix(e);
				e.type = fix;
				return $.event.handle.call(this, e);
			}
		});
	};
	$.extend($.fn, {
		validateDelegate: function(delegate, type, handler) {
			return this.bind(type, function(event) {
				var target = $(event.target);
				if (target.is(delegate)) {
					return handler.apply(target, arguments);
				}
			});
		}
	});
})(jQuery);



// MSDropDown - jquery.dd.js
// author: Marghoob Suleman - Search me on google
// Date: 12th Aug, 2009
// Version: 2.3 {date: 12 June 2010}
// Revision: 28
// web: www.giftlelo.com | www.marghoobsuleman.com
/*
// msDropDown is free jQuery Plugin: you can redistribute it and/or modify
// it under the terms of the either the MIT License or the Gnu General Public License (GPL) Version 2
*/
;(function($) {
   var msOldDiv = ""; 
   var dd = function(element, options)
   {
		var sElement = element;
		var $this =  this; //parent this
		var options = $.extend({
			height:120,
			visibleRows:7,
			rowHeight:23,
			showIcon:true,
			zIndex:9999,
			mainCSS:'dd',
			useSprite:false,
			onInit:'',
			style:''
		}, options);
		this.ddProp = new Object();//storing propeties;
		var selectedValue = "";
		var actionSettings ={};
		actionSettings.insideWindow = true;
		actionSettings.keyboardAction = false;
		actionSettings.currentKey = null;
		var ddList = false;
		var config = {postElementHolder:'_msddHolder', postID:'_msdd', postTitleID:'_title',postTitleTextID:'_titletext',postChildID:'_child',postAID:'_msa',postOPTAID:'_msopta',postInputID:'_msinput', postArrowID:'_arrow', postInputhidden:'_inp'};
		var styles = {dd:options.mainCSS, ddTitle:'ddTitle', arrow:'arrow', ddChild:'ddChild', ddTitleText:'ddTitleText', disabled:.30, ddOutOfVision:'ddOutOfVision'};
		var attributes = {actions:"focus,blur,change,click,dblclick,mousedown,mouseup,mouseover,mousemove,mouseout,keypress,keydown,keyup", prop:"size,multiple,disabled,tabindex"};
		this.onActions = new Object();
		var elementid = $(sElement).attr("id");
		var inlineCSS = $(sElement).attr("style");
		options.style += (inlineCSS==undefined) ? "" : inlineCSS;
		var allOptions = $(sElement).children();
		ddList = ($(sElement).attr("size")>0 || $(sElement).attr("multiple")==true) ? true : false;
		if(ddList) {options.visibleRows = $(sElement).attr("size");};
		var a_array = {};//stores id, html & value etc
		
	var getPostID = function (id) {
		return elementid+config[id];
	};
	var getOptionsProperties = function (option) {
		var currentOption = option;
		var styles = $(currentOption).attr("style");
		return styles;
	};
	var matchIndex = function (index) {
		var selectedIndex = $("#"+elementid+" option:selected");
		if(selectedIndex.length>1) {
			for(var i=0;i<selectedIndex.length;i++) {
				if(index == selectedIndex[i].index) {
					return true;
				};
			};
		} else if(selectedIndex.length==1) {
			if(selectedIndex[0].index==index) {
				return true;
			};
		};
		return false;
	};
	var createA = function(currentOptOption, current, currentopt, tp) {
		var aTag = "";
		//var aidfix = getPostID("postAID");
		var aidoptfix = (tp=="opt") ? getPostID("postOPTAID") : getPostID("postAID");		
		var aid = (tp=="opt") ? aidoptfix+"_"+(current)+"_"+(currentopt) : aidoptfix+"_"+(current);
		var arrow = "";
		var clsName = "";
		if(options.useSprite!=false) {
		 clsName = ' '+options.useSprite+' '+currentOptOption.className;
		} else {
		 arrow = $(currentOptOption).attr("title");
		 arrow = (arrow.length==0) ? "" : '<img src="'+arrow+'" align="absmiddle" /> ';																 
		};
		//console.debug("clsName "+clsName);
		var sText = $(currentOptOption).text();
		var sValue = $(currentOptOption).val();
		var sEnabledClass = ($(currentOptOption).attr("disabled")==true) ? "disabled" : "enabled";
		a_array[aid] = {html:arrow + sText, value:sValue, text:sText, index:currentOptOption.index, id:aid};
		var innerStyle = getOptionsProperties(currentOptOption);
		if(matchIndex(currentOptOption.index)==true) {
		 aTag += '<a href="javascript:void(0);" class="selected '+sEnabledClass+clsName+'"';
		} else {
		aTag += '<a  href="javascript:void(0);" class="'+sEnabledClass+clsName+'"';
		};
		if(innerStyle!==false && innerStyle!==undefined) {
		aTag +=  " style='"+innerStyle+"'";
		};
		aTag +=  ' id="'+aid+'">';
		aTag += arrow + '<span class="'+styles.ddTitleText+'">' +sText+'</span></a>';
		return aTag;
	};
	var createATags = function () {
		var childnodes = allOptions;
		if(childnodes.length==0) return "";
		var aTag = "";
		var aidfix = getPostID("postAID");
		var aidoptfix = getPostID("postOPTAID");
		childnodes.each(function(current){
								 var currentOption = childnodes[current];
								 //OPTGROUP
								 if(currentOption.nodeName == "OPTGROUP") {
								  	aTag += "<div class='opta'>";
									 aTag += "<span style='font-weight:bold;font-style:italic; clear:both;'>"+$(currentOption).attr("label")+"</span>";
									 var optChild = $(currentOption).children();
									 optChild.each(function(currentopt){
															var currentOptOption = optChild[currentopt];
															 aTag += createA(currentOptOption, current, currentopt, "opt");
															});
									 aTag += "</div>";
									 
								 } else {
									 aTag += createA(currentOption, current, "", "");
								 };
								 });
		return aTag;
	};
	var createChildDiv = function () {
		var id = getPostID("postID");
		var childid = getPostID("postChildID");
		var sStyle = options.style;
		sDiv = "";
		sDiv += '<div id="'+childid+'" class="'+styles.ddChild+'"';
		if(!ddList) {
			sDiv += (sStyle!="") ? ' style="'+sStyle+'"' : ''; 
		} else {
			sDiv += (sStyle!="") ? ' style="border-top:1px solid #c3c3c3;display:block;position:relative;'+sStyle+'"' : ''; 
		}
		sDiv += '>';		
		return sDiv;
	};

	var createTitleDiv = function () {
		var titleid = getPostID("postTitleID");
		var arrowid = getPostID("postArrowID");
		var titletextid = getPostID("postTitleTextID");
		var inputhidden = getPostID("postInputhidden");
		var sText = "";
		var arrow = "";
		if(document.getElementById(elementid).options.length>0) {
			sText = $("#"+elementid+" option:selected").text();
			arrow = $("#"+elementid+" option:selected").attr("title");
		};
		//console.debug("sObj	 "+sObj.length);
		arrow = (arrow.length==0 || arrow==undefined || options.showIcon==false || options.useSprite!=false) ? "" : '<img src="'+arrow+'" align="absmiddle" /> ';
		var sDiv = '<div id="'+titleid+'" class="'+styles.ddTitle+'"';
		sDiv += '>';
		sDiv += '<span id="'+arrowid+'" class="'+styles.arrow+'"></span><span class="'+styles.ddTitleText+'" id="'+titletextid+'">'+arrow + '<span class="'+styles.ddTitleText+'">'+sText+'</span></span></div>';
		return sDiv;
	};
	var applyEventsOnA = function() {
		var childid = getPostID("postChildID");
			$("#"+childid+ " a.enabled").bind("click", function(event) {
														 event.preventDefault();
														 manageSelection(this);
														 if(!ddList) {
															 $("#"+childid).unbind("mouseover");
															 setInsideWindow(false);															 
															 var sText = (options.showIcon==false) ? $(this).text() : $(this).html();
															 //alert("sText "+sText);
															  setTitleText(sText);
															  //$this.data("dd").close();
															  $this.close();
														 };
														 setValue();
														 //actionSettings.oldIndex = a_array[$($this).attr("id")].index;
														 });		
	};
	var createDropDown = function () {
		var changeInsertionPoint = false;
		var id = getPostID("postID");
		var titleid = getPostID("postTitleID");
		var titletextid = getPostID("postTitleTextID");
		var childid = getPostID("postChildID");
		var arrowid = getPostID("postArrowID");
		var iWidth = $("#"+elementid).width();
		iWidth = iWidth+2;//it always give -2 width; i dont know why
		var sStyle = options.style;
		if($("#"+id).length>0) {
			$("#"+id).remove();
			changeInsertionPoint = true;
		};
		var sDiv = '<div id="'+id+'" class="'+styles.dd+'"';
		sDiv += (sStyle!="") ? ' style="'+sStyle+'"' : '';
		sDiv += '>';
		//create title bar
		sDiv += createTitleDiv();
		//create child
		sDiv += createChildDiv();
		sDiv += createATags();
		sDiv += "</div>";
		sDiv += "</div>";
		if(changeInsertionPoint==true) {
			var sid =getPostID("postElementHolder");
			$("#"+sid).after(sDiv);
		} else {
			$("#"+elementid).after(sDiv);
		};
		if(ddList) {
			var titleid = getPostID("postTitleID");	
			$("#"+titleid).hide();
		};
		
		$("#"+id).css("width", iWidth+"px");
		$("#"+childid).css("width", (iWidth-2)+"px");
		if(allOptions.length>options.visibleRows) {
			var margin = parseInt($("#"+childid+" a:first").css("padding-bottom")) + parseInt($("#"+childid+" a:first").css("padding-top"));
			var iHeight = ((options.rowHeight)*options.visibleRows) - margin;
			$("#"+childid).css("height", iHeight+"px");
		} else if(ddList) {
			var iHeight = $("#"+elementid).height();
			$("#"+childid).css("height", iHeight+"px");
		};
		//set out of vision
		if(changeInsertionPoint==false) {
			setOutOfVision();
			addRefreshMethods(elementid);
		};
		if($("#"+elementid).attr("disabled")==true) {
			$("#"+id).css("opacity", styles.disabled);
		};
		applyEvents();
		//add events
		//arrow hightlight
		$("#"+titleid).bind("mouseover", function(event) {
												  hightlightArrow(1);
												  });
		$("#"+titleid).bind("mouseout", function(event) {
												  hightlightArrow(0);
												  });
			//open close events
		applyEventsOnA();
		$("#"+childid+ " a.disabled").css("opacity", styles.disabled);
		if(ddList) {
			$("#"+childid).bind("mouseover", function(event) {if(!actionSettings.keyboardAction) {
																 actionSettings.keyboardAction = true;
																 $(document).bind("keydown", function(event) {
																									var keyCode = event.keyCode;	
																									actionSettings.currentKey = keyCode;
																									if(keyCode==39 || keyCode==40) {
																										//move to next
																										event.preventDefault(); event.stopPropagation();
																										next();
																										setValue();
																									};
																									if(keyCode==37 || keyCode==38) {
																										event.preventDefault(); event.stopPropagation();
																										//move to previous
																										previous();
																										setValue();
																									};
																									  });
																 
																 }});
		};
		$("#"+childid).bind("mouseout", function(event) {setInsideWindow(false);$(document).unbind("keydown");actionSettings.keyboardAction = false;actionSettings.currentKey=null;});
		$("#"+titleid).bind("click", function(event) {
											  setInsideWindow(false);
												if($("#"+childid+":visible").length==1) {
													$("#"+childid).unbind("mouseover");
												} else {
													$("#"+childid).bind("mouseover", function(event) {setInsideWindow(true);});
													//alert("open "+elementid + $this);
													//$this.data("dd").openMe();
													$this.open();
												};
											  });
		$("#"+titleid).bind("mouseout", function(evt) {
												 setInsideWindow(false);
												 });
		if(options.showIcon && options.useSprite!=false) {
			setTitleImageSprite();
		};
	};
	var getByIndex = function (index) {
		for(var i in a_array) {
			if(a_array[i].index==index) {
				return a_array[i];
			};
		};
		return -1;
	};
	var manageSelection = function (obj) {
		var childid = getPostID("postChildID");
		if(!ddList) {
			$("#"+childid+ " a.selected").removeClass("selected");
		}; 
		var selectedA = $("#"+childid + " a.selected").attr("id");
		if(selectedA!=undefined) {
			var oldIndex = (actionSettings.oldIndex==undefined || actionSettings.oldIndex==null) ? a_array[selectedA].index : actionSettings.oldIndex;
		};
		if(obj && !ddList) {
			$(obj).addClass("selected");
		};	
		if(ddList) {
			var keyCode = actionSettings.currentKey;
			if($("#"+elementid).attr("multiple")==true) {
				if(keyCode == 17) {
					//control
						actionSettings.oldIndex = a_array[$(obj).attr("id")].index;
						$(obj).toggleClass("selected");
					//multiple
				} else if(keyCode==16) {
					$("#"+childid+ " a.selected").removeClass("selected");
					$(obj).addClass("selected");
					//shift
					var currentSelected = $(obj).attr("id");
					var currentIndex = a_array[currentSelected].index;
					for(var i=Math.min(oldIndex, currentIndex);i<=Math.max(oldIndex, currentIndex);i++) {
						$("#"+getByIndex(i).id).addClass("selected");
					}
				} else {
					$("#"+childid+ " a.selected").removeClass("selected");
					$(obj).addClass("selected");
					actionSettings.oldIndex = a_array[$(obj).attr("id")].index;
				};
			} else {
					$("#"+childid+ " a.selected").removeClass("selected");
					$(obj).addClass("selected");
					actionSettings.oldIndex = a_array[$(obj).attr("id")].index;				
			};
			//isSingle
		};		
	};
	var addRefreshMethods = function (id) {
		//deprecated
		var objid = id;
		document.getElementById(objid).refresh = function(e) {
			 $("#"+objid).msDropDown(options);
		};
	};
	var setInsideWindow = function (val) {
		actionSettings.insideWindow = val;
	};
	var getInsideWindow = function () {
		return actionSettings.insideWindow;
	};
	var applyEvents = function () {
		var mainid = getPostID("postID");
		var actions_array = attributes.actions.split(",");
		for(var iCount=0;iCount<actions_array.length;iCount++) {
			var action = actions_array[iCount];
			//var actionFound = $("#"+elementid).attr(action);
			var actionFound = has_handler(action);//$("#"+elementid).attr(action);
			//console.debug(elementid +" action " + action , "actionFound "+actionFound);
			if(actionFound==true) {
				switch(action) {
					case "focus": 
					$("#"+mainid).bind("mouseenter", function(event) {
													   document.getElementById(elementid).focus();
													   //$("#"+elementid).focus();
													   });
					break;
					case "click": 
					$("#"+mainid).bind("click", function(event) {
													   //document.getElementById(elementid).onclick();
													   $("#"+elementid).trigger("click");
													   });
					break;
					case "dblclick": 
					$("#"+mainid).bind("dblclick", function(event) {
													   //document.getElementById(elementid).ondblclick();
													   $("#"+elementid).trigger("dblclick");
													   });
					break;
					case "mousedown": 
					$("#"+mainid).bind("mousedown", function(event) {
													   //document.getElementById(elementid).onmousedown();
													   $("#"+elementid).trigger("mousedown");
													   });
					break;
					case "mouseup": 
					//has in close mthod
					$("#"+mainid).bind("mouseup", function(event) {
													   //document.getElementById(elementid).onmouseup();
													   $("#"+elementid).trigger("mouseup");
													   //setValue();
													   });
					break;
					case "mouseover": 
					$("#"+mainid).bind("mouseover", function(event) {
													   //document.getElementById(elementid).onmouseover();													   
													   $("#"+elementid).trigger("mouseover");
													   });
					break;
					case "mousemove": 
					$("#"+mainid).bind("mousemove", function(event) {
													   //document.getElementById(elementid).onmousemove();
													   $("#"+elementid).trigger("mousemove");
													   });
					break;
					case "mouseout": 
					$("#"+mainid).bind("mouseout", function(event) {
													   //document.getElementById(elementid).onmouseout();
													   $("#"+elementid).trigger("mouseout");
													   });
					break;					
				};
			};
		};
		
	};
	var setOutOfVision = function () {
		var sId = getPostID("postElementHolder");
		$("#"+elementid).after("<div class='"+styles.ddOutOfVision+"' style='height:0px;overflow:hidden;position:absolute;' id='"+sId+"'></div>");
		$("#"+elementid).appendTo($("#"+sId));
	};
	var setTitleText = function (sText) {
		var titletextid = getPostID("postTitleTextID");
		$("#"+titletextid).html(sText);		
	};
	var next = function () {
		var titletextid = getPostID("postTitleTextID");
		var childid = getPostID("postChildID");
		var allAs = $("#"+childid + " a.enabled");
		for(var current=0;current<allAs.length;current++) {
			var currentA = allAs[current];
			var id = $(currentA).attr("id");
			if($(currentA).hasClass("selected") && current<allAs.length-1) {
				$("#"+childid + " a.selected").removeClass("selected");
				$(allAs[current+1]).addClass("selected");
				//manageSelection(allAs[current+1]);
				var selectedA = $("#"+childid + " a.selected").attr("id");
				if(!ddList) {
					var sText = (options.showIcon==false) ? a_array[selectedA].text : a_array[selectedA].html;
					setTitleText(sText);
				};
				if(parseInt(($("#"+selectedA).position().top+$("#"+selectedA).height()))>=parseInt($("#"+childid).height())) {
					$("#"+childid).scrollTop(($("#"+childid).scrollTop())+$("#"+selectedA).height()+$("#"+selectedA).height());
				};
				break;
			};
		};
	};
	var previous = function () {
		var titletextid = getPostID("postTitleTextID");
		var childid = getPostID("postChildID");
		var allAs = $("#"+childid + " a.enabled");
		for(var current=0;current<allAs.length;current++) {
			var currentA = allAs[current];
			var id = $(currentA).attr("id");
			if($(currentA).hasClass("selected") && current!=0) {
				$("#"+childid + " a.selected").removeClass("selected");
				$(allAs[current-1]).addClass("selected");				
				//manageSelection(allAs[current-1]);
				var selectedA = $("#"+childid + " a.selected").attr("id");
				if(!ddList) {
					var sText = (options.showIcon==false) ? a_array[selectedA].text : a_array[selectedA].html;
					setTitleText(sText);
				};
				if(parseInt(($("#"+selectedA).position().top+$("#"+selectedA).height())) <=0) {
					$("#"+childid).scrollTop(($("#"+childid).scrollTop()-$("#"+childid).height())-$("#"+selectedA).height());
				};
				break;
			};
		};
	};
	var setTitleImageSprite = function() {
		if(options.useSprite!=false) {
			var titletextid = getPostID("postTitleTextID");
			var sClassName = document.getElementById(elementid).options[document.getElementById(elementid).selectedIndex].className;
			if(sClassName.length>0) {
				var childid = getPostID("postChildID");
				var id = $("#"+childid + " a."+sClassName).attr("id");
				var backgroundImg = $("#"+id).css("background-image");
				var backgroundPosition = $("#"+id).css("background-position");
				var paddingLeft = $("#"+id).css("padding-left");
				if(backgroundImg!=undefined) {
					$("#"+titletextid).find("."+styles.ddTitleText).attr('style', "background:"+backgroundImg);
				};
				if(backgroundPosition!=undefined) {
					$("#"+titletextid).find("."+styles.ddTitleText).css('background-position', backgroundPosition);
				};
				if(paddingLeft!=undefined) {
					$("#"+titletextid).find("."+styles.ddTitleText).css('padding-left', paddingLeft);	
				};
				$("#"+titletextid).find("."+styles.ddTitleText).css('background-repeat', 'no-repeat');				
				$("#"+titletextid).find("."+styles.ddTitleText).css('padding-bottom', '2px');
			};
		};		
	};
	var setValue = function () {
		//alert("setValue "+elementid);
		var childid = getPostID("postChildID");
		var allSelected = $("#"+childid + " a.selected");
		if(allSelected.length==1) {
			var sText = $("#"+childid + " a.selected").text();
			var selectedA = $("#"+childid + " a.selected").attr("id");
			if(selectedA!=undefined) {
				var sValue = a_array[selectedA].value;
				document.getElementById(elementid).selectedIndex = a_array[selectedA].index;
			};
			//set image on title if using sprite
			if(options.showIcon && options.useSprite!=false)
				setTitleImageSprite();
		} else if(allSelected.length>1) { 
			var alls = $("#"+elementid +" > option:selected").removeAttr("selected");
			for(var i=0;i<allSelected.length;i++) {
				var selectedA = $(allSelected[i]).attr("id");
				var index = a_array[selectedA].index;
				document.getElementById(elementid).options[index].selected = "selected";
			};
		};
		//alert(document.getElementById(elementid).selectedIndex);
		var sIndex = document.getElementById(elementid).selectedIndex;
		$this.ddProp["selectedIndex"]= sIndex;
		//alert("selectedIndex "+ $this.ddProp["selectedIndex"] + " sIndex "+sIndex);
	};
	var has_handler = function (name) {
		// True if a handler has been added in the html.
		if ($("#"+elementid).attr("on" + name) != undefined) {
			return true;
		};
		// True if a handler has been added using jQuery.
		var evs = $("#"+elementid).data("events");
		if (evs && evs[name]) {
			return true;
		};
		return false;
	};
	var checkMethodAndApply = function () {
		var childid = getPostID("postChildID");
		if(has_handler('change')==true) {
			//alert(1);
			var currentSelectedValue = a_array[$("#"+childid +" a.selected").attr("id")].text;
			if(selectedValue!=currentSelectedValue){
				$("#"+elementid).trigger("change");
			};
		};
		if(has_handler('mouseup')==true) {
			$("#"+elementid).trigger("mouseup");
		};
		if(has_handler('blur')==true) { 
			$(document).bind("mouseup", function(evt) {
												   $("#"+elementid).focus();
												   $("#"+elementid)[0].blur();
												   setValue();
												   $(document).unbind("mouseup");
												});
		};
	};
	var hightlightArrow = function(ison) {
		var arrowid = getPostID("postArrowID");
		if(ison==1)
			$("#"+arrowid).css({backgroundPosition:'0 100%'});
		else 
			$("#"+arrowid).css({backgroundPosition:'0 0'});
	};
	var setOriginalProperties = function() {
		//properties = {};
		//alert($this.data("dd"));
		for(var i in document.getElementById(elementid)) {
			if(typeof(document.getElementById(elementid)[i])!='function' && document.getElementById(elementid)[i]!==undefined && document.getElementById(elementid)[i]!==null) {
				$this.set(i, document.getElementById(elementid)[i], true);//true = setting local properties
			};
		};
	};
	var setValueByIndex = function(prop, val) {
			if(getByIndex(val) != -1) {
				document.getElementById(elementid)[prop] = val;
				var childid = getPostID("postChildID");
				$("#"+childid+ " a.selected").removeClass("selected");
				$("#"+getByIndex(val).id).addClass("selected");
				var sText = getByIndex(document.getElementById(elementid).selectedIndex).html;
				setTitleText(sText);				
			};
	};
	var addRemoveFromIndex = function(i, action) {
		if(action=='d') {
			for(var key in a_array) {
				if(a_array[key].index == i) {
					delete a_array[key];
					break;
				};
			};
		};
		//update index
		var count = 0;
		for(var key in a_array) {
			a_array[key].index = count;
			count++;
		};
	};
	/************* public methods *********************/
	this.open = function() {
		if(($this.get("disabled", true) == true) || ($this.get("options", true).length==0)) return;
		var childid = getPostID("postChildID");
		if(msOldDiv!="" && childid!=msOldDiv) { 
			$("#"+msOldDiv).slideUp("fast");
			$("#"+msOldDiv).css({zIndex:'0'});
		};
		if($("#"+childid).css("display")=="none") {
			//selectedValue = a_array[$("#"+childid +" a.selected").attr("id")].text;
			$(document).bind("keydown", function(event) {
													var keyCode = event.keyCode;											
													if(keyCode==39 || keyCode==40) {
														//move to next
														event.preventDefault(); event.stopPropagation();
														next();
													};
													if(keyCode==37 || keyCode==38) {
														event.preventDefault(); event.stopPropagation();
														//move to previous
														previous();
													};
													if(keyCode==27 || keyCode==13) {
														//$this.data("dd").close();
														$this.close();
														setValue();
													};
													if($("#"+elementid).attr("onkeydown")!=undefined) {
															document.getElementById(elementid).onkeydown();
														};														
													   });
			$(document).bind("keyup", function(event) {
													if($("#"+elementid).attr("onkeyup")!=undefined) {
														//$("#"+elementid).keyup();
														document.getElementById(elementid).onkeyup();
													};												 
												 });

					$(document).bind("mouseup", function(evt){
															if(getInsideWindow()==false) {
															//alert("evt.target: "+evt.target);
															 //$this.data("dd").close();
															 $this.close();
															};
														 });													  
			$("#"+childid).css({zIndex:options.zIndex});
			$("#"+childid).slideDown("fast", function() {
													  if($this.onActions["onOpen"]!=null) {
														  eval($this.onActions["onOpen"])($this);
													  };
													  });
		if(childid!=msOldDiv) {
			msOldDiv = childid;
		};
		};
	};
	this.close = function() {
				var childid = getPostID("postChildID");
				$(document).unbind("keydown");
				$(document).unbind("keyup");
				$(document).unbind("mouseup");
				$("#"+childid).slideUp("fast", function(event) {
															checkMethodAndApply();
															$("#"+childid).css({zIndex:'0'});
															if($this.onActions["onClose"]!=null) {
														  		eval($this.onActions["onClose"])($this);
													  		};
															});
		
	};
	this.selectedIndex = function(i) {
		$this.set("selectedIndex", i);
	};
	//update properties
	this.set = function(prop, val, isLocal) {
		//alert("- set " + prop + " : "+val);
		if(prop==undefined || val==undefined) throw {message:"set to what?"}; 
		$this.ddProp[prop] = val;
		if(isLocal!=true) { 
			switch(prop) {
				case "selectedIndex":
					setValueByIndex(prop, val);
				break;
				case "disabled":
					$this.disabled(val, true);
				break;
				case "multiple":
					document.getElementById(elementid)[prop] = val;
					ddList = ($(sElement).attr("size")>0 || $(sElement).attr("multiple")==true) ? true : false;	
					if(ddList) {
						//do something
						var iHeight = $("#"+elementid).height();
						var childid = getPostID("postChildID");
						$("#"+childid).css("height", iHeight+"px");					
						//hide titlebar
						var titleid = getPostID("postTitleID");
						$("#"+titleid).hide();
						var childid = getPostID("postChildID");
						$("#"+childid).css({display:'block',position:'relative'});
						applyEventsOnA();
					}
				break;
				case "size":
					document.getElementById(elementid)[prop] = val;
					if(val==0) {
						document.getElementById(elementid).multiple = false;
					};
					ddList = ($(sElement).attr("size")>0 || $(sElement).attr("multiple")==true) ? true : false;	
					if(val==0) {
						//show titlebar
						var titleid = getPostID("postTitleID");
						$("#"+titleid).show();
						var childid = getPostID("postChildID");
						$("#"+childid).css({display:'none',position:'absolute'});
						var sText = "";
						if(document.getElementById(elementid).selectedIndex>=0) {
							var aObj = getByIndex(document.getElementById(elementid).selectedIndex);
							sText = aObj.html;
							manageSelection($("#"+aObj.id));
						}; 
						setTitleText(sText);
					} else {
						//hide titlebar
						var titleid = getPostID("postTitleID");
						$("#"+titleid).hide();
						var childid = getPostID("postChildID");
						$("#"+childid).css({display:'block',position:'relative'});						
					};
				break;
				default:
				try{
					//check if this is not a readonly properties
					document.getElementById(elementid)[prop] = val;
				} catch(e) {
					//silent
				};				
				break;
			};
		};
		//alert("get " + prop + " : "+$this.ddProp[prop]);
		//$this.set("selectedIndex", 0);
	};
	this.get = function(prop, forceRefresh) {
		if(prop==undefined && forceRefresh==undefined) {
			//alert("c1 : " +$this.ddProp);
		 	return $this.ddProp;
		};
		if(prop!=undefined && forceRefresh==undefined) {
			//alert("c2 : " +$this.ddProp[prop]);
			return ($this.ddProp[prop]!=undefined) ? $this.ddProp[prop] : null;
		};
		if(prop!=undefined && forceRefresh!=undefined) {
			//alert("c3 : " +document.getElementById(elementid)[prop]);
			return document.getElementById(elementid)[prop];
		};
	};
	this.visible = function(val) {
		var id = getPostID("postID");
		if(val==true) {
			$("#"+id).show();
		} else if(val==false) {
			$("#"+id).hide();
		} else {
			return $("#"+id).css("display");
		};
	};
	this.add = function(opt, index) {
		var objOpt = opt;
		var sText = objOpt.text;
		var sValue = (objOpt.value==undefined || objOpt.value==null) ? sText : objOpt.value;
		var img = (objOpt.title==undefined || objOpt.title==null) ? '' : objOpt.title;
		var i = (index==undefined || index==null) ? document.getElementById(elementid).options.length : index;
		document.getElementById(elementid).options[i] = new Option(sText, sValue);
		if(img!='') document.getElementById(elementid).options[i].title = img;
		//check if exist
		var ifA = getByIndex(i);
		if(ifA != -1) {
			//replace
			var aTag = createA(document.getElementById(elementid).options[i], i, "", "");
			$("#"+ifA.id).html(aTag);
			//a_array[key]
		} else {
			var aTag = createA(document.getElementById(elementid).options[i], i, "", "");
			//add
			var childid = getPostID("postChildID");
			$("#"+childid).append(aTag);
			applyEventsOnA();
		};
	};	
	this.remove = function(i) {
		document.getElementById(elementid).remove(i);
		if((getByIndex(i))!= -1) { $("#"+getByIndex(i).id).remove();addRemoveFromIndex(i, 'd');};
		//alert("a" +a);
		if(document.getElementById(elementid).length==0) {
			setTitleText("");
		} else {
			var sText = getByIndex(document.getElementById(elementid).selectedIndex).html;
			setTitleText(sText);
		};
		$this.set("selectedIndex", document.getElementById(elementid).selectedIndex);
	};
	this.disabled = function(dis, isLocal) {
		document.getElementById(elementid).disabled = dis;
		//alert(document.getElementById(elementid).disabled);
		var id = getPostID("postID");
		if(dis==true) {
			$("#"+id).css("opacity", styles.disabled);
			$this.close();
		} else if(dis==false) {
			$("#"+id).css("opacity", 1);
		};
		if(isLocal!=true) {
			$this.set("disabled", dis);
		};
	};
	//return form element
	this.form = function() {
		return (document.getElementById(elementid).form == undefined) ? null : document.getElementById(elementid).form;
	};
	this.item = function() {
		//index, subindex - use arguments.length
		if(arguments.length==1) {
			return document.getElementById(elementid).item(arguments[0]);
		} else if(arguments.length==2) {
			return document.getElementById(elementid).item(arguments[0], arguments[1]);
		} else {
			throw {message:"An index is required!"};
		};
	};
	this.namedItem = function(nm) {
		return document.getElementById(elementid).namedItem(nm);
	};
	this.multiple = function(is) {
		if(is==undefined) {
			return $this.get("multiple");
		} else {
			$this.set("multiple", is);
		};
		
	};
	this.size = function(sz) {
		if(sz==undefined) {
			return $this.get("size");
		} else {
			$this.set("size", sz);
		};		
	};	
	this.addMyEvent = function(nm, fn) {
		$this.onActions[nm] = fn;
	};
	this.fireEvent = function(nm) {
		eval($this.onActions[nm])($this);
	};
	//end 
	var updateCommonVars = function() {
		$this.set("version", $.msDropDown.version);
		$this.set("author", $.msDropDown.author);
	};
	var init = function() {
		//create wrapper
		createDropDown();
		//update propties
		//alert("init");
		setOriginalProperties();
		updateCommonVars();
		if(options.onInit!='') {
			eval(options.onInit)($this);
		};
		
	};
	init();
	};
	//static
	$.msDropDown = {
		version: 2.3,
		author: "Marghoob Suleman",
		create: function(id, opt) {
			return $(id).msDropDown(opt).data("dd");
		}
	};
	$.fn.extend({
	        msDropDown: function(options)
	        {
	            return this.each(function()
	            {
	               //if ($(this).data('dd')) return; // need to comment when using refresh method - will remove in next version
	               var mydropdown = new dd(this, options);
	               $(this).data('dd', mydropdown);
	            });
	        }
	    });
		   
})(jQuery);