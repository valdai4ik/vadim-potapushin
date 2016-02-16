<?

include 'php/config.php';

$result = mysql_query("SELECT text, added, id, deadline
FROM  `events` 
WHERE 1 ");
if (!$result) {
    die('Неверный запрос: ' . mysql_error());
}

while($row = mysql_fetch_array($result))
{
	echo ("<div class='content round shadow'>");
		echo ("<div>");
			echo ("<div class='added'>");
				echo ("<p>Добавлено: {$row['added']} </p>");
			echo ("</div>");
			echo ("<a class='done' id='{$row['id']}'></a>");
			echo ("<div class='todoevents'>");
			echo ("<p>{$row['text']}</p>");
			echo ("</div>");
			echo ("<div class='cooldown'>");
				echo ("<p>DEADLINE:  {$row['deadline']} </p>");
			echo ("</div>");
		echo ("</div>");
	echo ("</div>");
}

?>