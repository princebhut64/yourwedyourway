<?php
include('../connection.php');
$category_id = $_POST["category_id"];
// print_r($category_id);
// exit;
$sql = "select * from subcategory where cid='" . $category_id . "'";
$q = mysql_query($sql) or die(mysql_error() . $sql);
?>
<option value="">Select SubCategory</option>
<?php
while($row = mysqli_fetch_array($q)) {
?>
<option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
<?php
}
?>