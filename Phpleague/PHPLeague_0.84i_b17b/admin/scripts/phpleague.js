$(function() {
	$('input:submit, input:button', '.content').button();
	$('a', '.Cadre').button();
	$('caption a').button();
	$('.radio').buttonset();
	$('button', '.content').button({
		icons: {
			primary: 'ui-icon-help'
		},
		text: false
	});

	$('a', '.Back').button({
		icons: {
			primary: 'ui-icon-triangle-1-w'
		},
		text: true
	});
	
	$('a', '.DeleteRight').button({
		icons: {
			primary: 'ui-icon-grip-dotted-vertical',
			secondary: 'ui-icon-trash'
		},
		text: true
	});

	$('a', '.DeleteLeft').button({
		icons: {
			primary: 'ui-icon-trash',
			secondary: 'ui-icon-grip-dotted-vertical'
		},
		text: true
	});

	$('a', '.User').button({
		icons: {
			primary: 'ui-icon-person'
		},
		text: true
	});

	$('a', '.Temps').button({
		icons: {
			primary: 'ui-icon-clock'
		},
		text: true
	});

	$('button', '.Search').button({
		icons: {
			primary: 'ui-icon-search'
		},
		text: true
	});

	$('a[rel$="external"]').click(function(){
		this.target = "_blank";
	});

	$('#formEquipCrea1').validate();
	$('#formEquipCrea2').validate();
	$('#formEquipModif1').validate();
	$('#formEquipModif2').validate();
	$('#formEquipSupp1').validate();
	$('#formEquipSupp2').validate();
	$('#formClassCrea').validate();
	$('#formClassSupp').validate();
	$('#formRensGestCrea').validate();
	$('#formRensGestSupp').validate();
	$('#formRensEdit').validate();
	$('#formRensInsert').validate();
	$('#formRensSuppr').validate();

	$('.crdateheure').mask('99/99/9999 99:99');
});