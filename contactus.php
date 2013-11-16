<body bgcolor="#000000">
<?php
include 'top.php';
include 'bottom.php';
echo '
<div id="Layer5" style="position:absolute; width:555px; height:303px; z-index:5; left: 25px; top: 195px;">
<div style="float:left" ><img src="dh.gif" /></div><table cellpadding="0" cellspacing="0" align="center" width="300">
	<tr>
	<td ><font color="#FF6633"><b>
<div id="processing" style="float:right" ></div></b></font>
	<div id="container">
<form action="vars.php" method="post">
	
	
	
	<label for="textinput"><b>Email Address:</b></label><br />
	<input type="text" id="textinput" name="textinput" class="textinput" maxlength="25" /><br /><br />
		<br /><br />
	<label for="textareainput"><b>Comments:</b></label><br />
	<textarea id="textareainput" name="textareainput" class="textarea"></textarea><br />
	<br />
	<input type="button" value="Submit" class="buttonSubmit" onclick="sendemail();" />
	
	<div id="stylesheetTest"> </div>
</form>

</div>
</td>
</tr>
</table>
	</div>

</body>';

?>


