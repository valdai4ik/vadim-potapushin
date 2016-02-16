<?
	include '../php/config.php';

	$text = $_POST['text'];
    $date = $_POST['deadline'];

	if ($text != "" & $date != "" ) {
 
	$query = "INSERT INTO events (`text`, `deadline`, `added` ) VALUES ('$text', '$date', NOW())";
	$result = mysql_query($query) or die ("<p>ошибка запроса</p>");
	}

?>