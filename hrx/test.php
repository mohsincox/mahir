<body>

<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("cms", $conn)
or die ('Database not found ' . mysql_error() );

$sql = "select id, email from users";
$rs = mysql_query($sql, $conn)
or die ('Problem with query' . mysql_error());

//$options= '<option value="0">Choose</option>';

while ($row=mysql_fetch_array($rs)) {
$id=$row["id"];
$name=$row["email"];
$options="<OPTION VALUE='" . $id . "'>" . $name ."</option>";
}

?>

<form method="GET" action="task8.php"  >

Choose name:<select name="cars">
<option value="volvo"><?php echo $options;?></option>

 
</select>

<p><input type="submit" name="submit" value="Save Data"/>&nbsp;<input type="reset" value="Clear Form" />

</form>