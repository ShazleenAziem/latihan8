<?php
$crtable = "";
if ($_POST) {
    $crtable .= '<table border="1">';
    for ($i = 0; $i < $_POST["line"]; $i++) {
        $crtable .= "<tr>";
        for ($j = 0; $j < $_POST["colunn"]; $j++) {
            $crtable .= '<td width="50">&nbsp;</td>';
        }
        $crtable .= "</tr>";
    }
    $crtable .= "</table>";
}
?>
<form action="" method="post">
	<table border="0" width="200">
		<tr>
			<td width="80"><label>Width:</label></td>
			<td width="120"><input type="text" name="colunn"></td>
		</tr>
		<tr>
			<td><label>Height:</label></td>
			<td><input type="text" name="line"></td>
		</tr>
		<tr>
			<td colspan="2" align="right">
				<input type="submit" value="Create Table">
			</td>
		</tr>
	</table>
</form>
<br/>
<br/>

<?php echo $crtable;
?>