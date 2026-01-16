<!--
<table width="800" border="1">
  <tr> 
    <td width="18" height="26">&nbsp;</td>
    <td width="75" height="26">OCC</td>
    <td width="38" height="26">&nbsp;</td>
    <td width="38" height="26">&nbsp;</td>
    <td width="42" height="26">&nbsp;</td>
    <td width="41" height="26">&nbsp;</td>
    <td width="47" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="41" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="40" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="48" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="20" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="63" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="40" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="42" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="56" height="26" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr> 
    <td width="18" height="26">&nbsp;</td>
    <td width="75" height="26">&nbsp;</td>
    <td width="38" height="26">ffr</td>
    <td width="38" height="26">site</td>
    <td width="42" height="26">&nbsp;</td>
    <td width="41" height="26">&nbsp;</td>
    <td width="47" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="41" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="40" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="48" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="20" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="51" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="63" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="40" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="42" height="26" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="56" height="26" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="18">&nbsp;</td>
    <td width="75">Honneur</td>
    <td width="38">&nbsp;</td>
    <td width="38">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="47" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="20">&nbsp;</td>
    <td width="51">Reserve</td>
    <td width="63">Honneur</td>
    <td width="40">&nbsp;</td>
    <td width="42">&nbsp;</td>
    <td width="56">&nbsp;</td>
  </tr>
  <tr> 
    <td width="18">167</td>
    <td width="75">Poule 1</td>
    <td width="38"> 
      <div align="center"> 
        <?php echo $fedffr1;?>
      </div>
    </td>
    <td width="38"> 
      <?php echo $persofed141;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr1-$persofed141;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">190</td>
    <td width="51">Poule 1</td>
    <td width="63"> 
      <div align="center"> 
        <?php echo $fedffr1;?>
      </div>
    </td>
    <td width="40"> 
      <?php echo $persofed141;?>
      <div align="center"></div>
    </td>
    <td width="42" bgcolor="#00ff33"> </td>
    <td width="56" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr> 
    <td width="18">168</td>
    <td width="75">Poule 2</td>
    <td width="38"> 
      <?php echo $fedffr2;?>
      <div align="center"></div>
    </td>
    <td width="38"> 
      <?php echo $persofed142;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr2-$persofed142;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">191</td>
    <td width="51">Poule 2</td>
    <td width="63"> 
      <?php echo $fedffr2;?>
      <div align="center"></div>
    </td>
    <td width="40"> 
      <?php echo $persofed142;?>
      <div align="center"></div>
    </td>
    <td width="42" bgcolor="#00ff33"> </td>
    <td width="56" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr> 
    <td width="18">169</td>
    <td width="75" height="22">Poule 3</td>
    <td width="38" height="22"> 
      <?php echo $fedffr3;?>
      <div align="center"></div>
    </td>
    <td width="38" height="22"> 
      <?php echo $persofed143;?>
      <?php 
   		$aa = $fedffr3-$persofed143;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
      <div align="center"></div>
    <td width="42" bgcolor="#00ff33" height="22"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#ff0000" height="22" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="47" bgcolor="#FFFFFF" height="22" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" height="22" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" height="22" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" height="22" >&nbsp;</td>
    <td width="20">192</td>
    <td width="51" height="22">Poule 3</td>
    <td width="63" height="22"> 
      <?php echo $fedffr3;?>
      <div align="center"></div>
    </td>
    <td width="40" height="22"> 
      <?php echo $persofed143;?>
      <?php 
   		$aa = $fedffr3-$persofed143;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
      <div align="center"></div>
    <td width="42" bgcolor="#00ff33" height="22"> </td>
    <td width="56" bgcolor="#ff0000" height="22" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  <tr> 
    <td width="18">170</td>
    <td width="75" height="26">Poule 4</td>
    <td width="38" height="26"> 
      <?php echo $fedffr4;?>
      <div align="center"></div>
    </td>
    <td width="38" height="26"> 
      <?php echo $persofed144;?>
      <?php 
   		$aa = $fedffr4-$persofed144;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
      <div align="center"></div>
    <td width="42" bgcolor="#00ff33" height="26"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#ff0000" height="26" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="47" bgcolor="#FFFFFF" height="26" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" height="26" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" height="26" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" height="26" >&nbsp;</td>
    <td width="20">193</td>
    <td width="51" height="26">Poule 4</td>
    <td width="63" height="26"> 
      <?php echo $fedffr4;?>
      <div align="center"></div>
    </td>
    <td width="40" height="26"> 
      <?php echo $persofed144;?>
      <?php 
   		$aa = $fedffr4-$persofed144;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
      <div align="center"></div>
    <td width="42" bgcolor="#00ff33" height="26"></td>
    <td width="56" bgcolor="#ff0000" height="26" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="18">&nbsp;</td>
    <td width="75">Promotion</td>
    <td width="38"> 
      <div align="center"></div>
    </td>
    <td width="38"> 
      <div align="center"></div>
    </td>
    <td width="42">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="47" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="20">&nbsp;</td>
    <td width="51">R&eacute;serve</td>
    <td width="63"> 
      <div align="center">Promotion</div>
    </td>
    <td width="40"> 
      <div align="center"></div>
    </td>
    <td width="42">&nbsp;</td>
    <td width="56">&nbsp;</td>
  </tr>
  <tr> 
    <td width="18">171</td>
    <td width="75">Poule 1</td>
    <td width="38"> 
      <?php echo $fedffr5;?>
      <div align="center"></div>
    </td>
    <td width="38"> 
      <?php echo $persofed151;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr5-$persofed151;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">194</td>
    <td width="51">Poule 1</td>
    <td width="63"> 
      <?php echo $fedffr5;?>
      <div align="center"></div>
    </td>
    <td width="40"> 
      <?php echo $persofed151;?>
      <div align="center"></div>
    </td>
    <td width="42" bgcolor="#00ff33"> </td>
    <td width="56" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr> 
    <td width="18">172</td>
    <td width="75">Poule 2</td>
    <td width="38"> 
      <?php echo $fedffr6;?>
      <div align="center"></div>
    </td>
    <td width="38"> 
      <?php echo $persofed152;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr6-$persofed152;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">195</td>
    <td width="51">Poule 2</td>
    <td width="63"> 
      <?php echo $fedffr6;?>
      <div align="center"></div>
    </td>
    <td width="40"> 
      <?php echo $persofed152;?>
      <div align="center"></div>
    </td>
    <td width="42" bgcolor="#00ff33"> </td>
    <td width="56" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr> 
    <td width="18">173</td>
    <td width="75">Poule 3</td>
    <td width="38"> 
      <?php echo $fedffr7;?>
      <div align="center"></div>
    </td>
    <td width="38"> 
      <?php echo $persofed153;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr7-$persofed153;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">196</td>
    <td width="51">Poule 3</td>
    <td width="63"> 
      <?php echo $fedffr7;?>
      <div align="center"></div>
    </td>
    <td width="40"> 
      <?php echo $persofed153;?>
      <div align="center"></div>
    </td>
    <td width="42" bgcolor="#00ff33"> </td>
    <td width="56" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr> 
    <td width="18">174</td>
    <td width="75">Poule 4</td>
    <td width="38"> 
      <?php echo $fedffr8;?>
      <div align="center"></div>
    </td>
    <td width="38"> 
      <?php echo $persofed154;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr8-$persofed154;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">197</td>
    <td width="51">Poule 4</td>
    <td width="63"> 
      <?php echo $fedffr8;?>
      <div align="center"></div>
    </td>
    <td width="40"> 
      <?php echo $persofed154;?>
      <div align="center"></div>
    </td>
    <td width="42" bgcolor="#00ff33"> </td>
    <td width="56" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr> 
    <td width="18" bgcolor="#FFFF00">&nbsp;</td>
    <td width="75" bgcolor="#FFFF00">S1</td>
    <td width="38" bgcolor="#FFFF00">&nbsp;</td>
    <td width="38" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42" bgcolor="#FFFF00"></td>
    <td width="41" bgcolor="#FFFF00" >&nbsp;</td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20" bgcolor="#FFFF00">&nbsp;</td>
    <td width="51" bgcolor="#FFFF00">R&eacute;serve</td>
    <td width="63" bgcolor="#FFFF00">S1</td>
    <td width="40" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42" bgcolor="#FFFF00"></td>
    <td width="56" bgcolor="#FFFF00" >&nbsp;</td>
  </tr>
  <tr> 
    <td width="18">175</td>
    <td width="51">Poule 1</td>
    <td width="38"> 
      <?php echo $fedffr9;?>
      <div align="center"></div>
    </td>
    <td width="38"> 
      <?php echo $persofed155;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr9-$persofed155;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">198</td>
    <td width="51">Poule 1</td>
    <td width="63"> 
      <?php echo $fedffr9;?>
      <div align="center"></div>
    </td>
    <td width="40"> 
      <?php echo $persofed155;?>
      <div align="center"></div>
    </td>
    <td width="42" bgcolor="#00ff33"> </td>
    <td width="56" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr> 
    <td width="18">176</td>
    <td width="51">Poule 2</td>
    <td width="38"> 
      <?php echo $fedffr10;?>
      <div align="center"></div>
    </td>
    <td width="38"> 
      <?php echo $persofed156;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr10-$persofed156;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">199</td>
    <td width="51">Poule 2</td>
    <td width="63"> 
      <?php echo $fedffr10;?>
      <div align="center"></div>
    </td>
    <td width="40"> 
      <?php echo $persofed156;?>
      <div align="center"></div>
    </td>
    <td width="42" bgcolor="#00ff33"> </td>
    <td width="56" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr> 
    <td width="18">177</td>
    <td width="51">Poule 3</td>
    <td width="38"> 
      <?php echo $fedffr11;?>
      <div align="center"></div>
    </td>
    <td width="38"> 
      <?php echo $persofed157;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr11-$persofed157;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">200</td>
    <td width="51">Poule 3</td>
    <td width="63"> 
      <?php echo $fedffr11;?>
      <div align="center"></div>
    </td>
    <td width="40"> 
      <?php echo $persofed157;?>
      <div align="center"></div>
    </td>
    <td width="42" bgcolor="#00ff33"> </td>
    <td width="56" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr> 
    <td width="18">178</td>
    <td width="51">Poule 4</td>
    <td width="38"> 
      <?php echo $fedffr12;?>
      <div align="center"></div>
    </td>
    <td width="38"> 
      <?php echo $persofed158;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr12-$persofed158;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20">201</td>
    <td width="51">Poule 4</td>
    <td width="63"> 
      <?php echo $fedffr12;?>
      <div align="center"></div>
    </td>
    <td width="40"> 
      <?php echo $persofed158;?>
      <div align="center"></div>
    </td>
    <td width="42" bgcolor="#00ff33"> </td>
    <td width="56" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr bgcolor="#FFFF00"> 
    <td width="18">&nbsp;</td>
    <td width="75">2me serie</td>
    <td width="38"> 
      <div align="center"></div>
    </td>
    <td width="38"> 
      <div align="center"></div>
    </td>
    <td width="42">&nbsp;</td>
    <td width="41">&nbsp;</td>
    <td width="47" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="20" bgcolor="#FFFF00">&nbsp;</td>
    <td width="51" bgcolor="#FFFF00">3/4me s&eacute;rie</td>
    <td width="63" bgcolor="#FFFF00">&nbsp;</td>
    <td width="40" bgcolor="#FFFF00">&nbsp;</td>
    <td width="42" bgcolor="#FFFF00">&nbsp;</td>
    <td width="56" bgcolor="#FFFF00">&nbsp;</td>
  </tr>
  <tr> 
    <td width="18">179</td>
    <td width="75">Poule 1</td>
    <td width="38"> 
      <?php echo $fedffr13;?>
      <div align="center"></div>
    </td>
    <td width="38"> 
      <?php echo $persofedNE161;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr13-$persofedNE161;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20" bgcolor="#FFFFFF" >183</td>
    <td width="51">Poule 1</td>
    <td width="63"> 
      <?php echo $fedffr9;?>
      <div align="center"></div>
    </td>
    <td width="40"> 
      <?php echo $persofed155;?>
      <div align="center"></div>
    </td>
    <td width="42" bgcolor="#00ff33"> </td>
    <td width="56" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr> 
    <td width="18">180</td>
    <td width="75">Poule 2</td>
    <td width="38"> 
      <?php echo $fedffr14;?>
      <div align="center"></div>
    </td>
    <td width="38"> 
      <?php echo $persofedNE162;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr14-$persofedNE162;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20" bgcolor="#FFFFFF" >184</td>
    <td width="51">Poule 2</td>
    <td width="63"> 
      <?php echo $fedffr10;?>
      <div align="center"></div>
    </td>
    <td width="40"> 
      <?php echo $persofed156;?>
      <div align="center"></div>
    </td>
    <td width="42" bgcolor="#00ff33"> </td>
    <td width="56" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr> 
    <td width="18">181</td>
    <td width="75">Poule 3</td>
    <td width="38"> 
      <?php echo $fedffr15;?>
      <div align="center"></div>
    </td>
    <td width="38"> 
      <?php echo $persofedNE163;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr15-$persofedNE163;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20" bgcolor="#FFFFFF" >185</td>
    <td width="51">Poule 3</td>
    <td width="63"> 
      <?php echo $fedffr11;?>
      <div align="center"></div>
    </td>
    <td width="40"> 
      <?php echo $persofed157;?>
      <div align="center"></div>
    </td>
    <td width="42" bgcolor="#00ff33"> </td>
    <td width="56" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr> 
    <td width="18">182</td>
    <td width="75">Poule 4</td>
    <td width="38"> 
      <?php echo $fedffr16;?>
      <div align="center"></div>
    </td>
    <td width="38"> 
      <?php echo $persofedNE164;?>
      <div align="center"></div>
    </td>
    <?php 
   		$aa = $fedffr16-$persofedNE164;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#00ff33"> </td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20" bgcolor="#FFFFFF" >186</td>
    <td width="51">Poule 4</td>
    <td width="63"> 
      <?php echo $fedffr12;?>
      <div align="center"></div>
    </td>
    <td width="40"> 
      <?php echo $persofed158;?>
      <div align="center"></div>
    </td>
    <td width="42" bgcolor="#00ff33"> </td>
    <td width="56" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr> 
    <td width="18" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="75" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="38" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="38" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr17-$persofedNE165;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20" bgcolor="#FFFFFF" >187</td>
    <td width="51">Poule 5</td>
    <td width="63"> 
      <?php echo $fedffr10;?>
      <div align="center"></div>
    </td>
    <td width="40"> 
      <?php echo $persofed156;?>
      <div align="center"></div>
    </td>
    <td width="42" bgcolor="#00ff33"> </td>
    <td width="56" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr> 
    <td width="18" bgcolor="#FFFFFF" height="24">&nbsp;</td>
    <td width="75" bgcolor="#FFFFFF" height="24">&nbsp;</td>
    <td width="38" bgcolor="#FFFFFF" height="24">&nbsp;</td>
    <td width="38" bgcolor="#FFFFFF" height="24">&nbsp;</td>
    <?php 
   		$aa = $fedffr18-$persofedNE166;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#FFFFFF" height="24"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#FFFFFF" height="24" >&nbsp;</td>
    <td width="47" bgcolor="#FFFFFF" height="24" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" height="24" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" height="24" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" height="24" >&nbsp;</td>
    <td width="20" bgcolor="#FFFFFF" height="24" >188</td>
    <td width="51" height="24">Poule 6</td>
    <td width="63"> 
      <?php echo $fedffr11;?>
      <div align="center"></div>
    </td>
    <td width="40"> 
      <?php echo $persofed157;?>
      <div align="center"></div>
    </td>
    <td width="42" bgcolor="#00ff33"> </td>
    <td width="56" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr> 
    <td width="18" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="75" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="38" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="38" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr19-$persofedNE167;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20" bgcolor="#FFFFFF" >189</td>
    <td width="51">Poule 7</td>
    <td width="63"> 
      <?php echo $fedffr12;?>
      <div align="center"></div>
    </td>
    <td width="40"> 
      <?php echo $persofed158;?>
      <div align="center"></div>
    </td>
    <td width="42" bgcolor="#00ff33"> </td>
    <td width="56" bgcolor="#ff0000" > 
      <div align="center"><font color="#FF0000" align="center" face="Arial, Helvetica, sans-serif"> 
        <font color="#000000"> 
        <?php echo $aa;?>
        </font></font> </div>
    </td>
    <?php
	  	}
	  	?>
  </tr>
  <tr> 
    <td width="18" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="75" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="38" bgcolor="#FFFFFF">&nbsp;</td>
    <td width="38" bgcolor="#FFFFFF">&nbsp;</td>
    <?php 
   		$aa = $fedffr20-$persofedGS161;
	  	//echo $aa;
    if ($aa == 0) 
   		{
	 	?>
    <td width="42" bgcolor="#FFFFFF"></td>
    <?php 
	 	}
	  else 
	 	{
	  	?>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="47" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="41" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="48" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="20" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="51" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="63" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="40" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="42" bgcolor="#FFFFFF" >&nbsp;</td>
    <td width="56" bgcolor="#FFFFFF" >&nbsp;</td>
    <?php
	  	}
	  	?>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

-->