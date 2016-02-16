<!DOCTYPE html>
<html lang="ruRU">
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="../img/favicon.ico"></link>
	<title>ПОТАПУШИН В.С.|TO.DO.LIST</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
	<script type="text/javascript" src="../js/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="../js/todolist.js"></script>
</head>
<body>
		<?
 include 'php/config.php';
?>
	<p class="headtxt">TO DO LIST</p>
	<!--Блок вывода задач-->
	
				<?
 include 'php/getevents.php';
?>
	<!--Блок ввода задачи-->
	<div class="content round shadow">
		<form align = 'center'>
			<textarea class='todoinput' id="text" rows="10" cols="10"></textarea>
			
			<input class="tododate" type="date" id="deadline">
			<input class="todobtn" type="submit" name="submit">
		</form>
		<p id='err_text' class='red'></p>
	</div>
</body>
</html>