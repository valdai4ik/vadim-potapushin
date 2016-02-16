<?
	include '../php/config.php';

	$id = $_POST['id'];

	if ($id != "") {
 
	$query = "DELETE FROM  events WHERE  id = '$id'";
	$result = mysql_query($query) or die ("<p>ошибка запроса</p>");
	}
?>