<?php
	
	$file = 'todo.txt';
	$content = file($file);
	if($_GET['show'] == 'OK')
	{	
	echo "<font color = \"#C71585\"> <font size = \"4pt\"> Список: </font> </font> ";
		foreach ($content as $string)
		{ 	
			echo "<font color = \"#C71585\"> <font size = \"4pt\"> <li> $string </li> </font> </font> " ;
			
		}
	}

	else if($_GET['add'] == 'OK' && !empty($_GET['what']))
	{
		$current = file_get_contents($file);
		$current .= $_GET['what']."\n";//записываем в конец выбранное значение
		file_put_contents($file, $current);
		$content[count($content)] = $_GET['what']."\n";//добавляем новое значение в массив
		echo "<font size = \"4pt\"> <font color = \"#DC143C	\"> Добавлено </font> </font>";
	}
	else if($_GET['del'] == 'OK')
	{
		$num = $_GET['num'];
		echo "<font size = \"4pt\"> <font color = \"#DC143C	\"> Удалено: $content[$num]</font> </font>"; 
		unset($content[$num]); //удаляем элемент массива
		file_put_contents($file, implode("", $content)); //перезаписываем файл без удаленного элемента
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todo list</title>
	<style>
		p{
			font-size: 17pt;
			font-weight: bold;
			font-style: italic;
			font-family:"Monotype Corsiva";
		}
		.b{
			background: #DDA0DD;
			font-size: 14pt;
			width: 45px;
			height: 32px;
			font-family: "AR DELANEY";
			
		}
		.s{
			height: 27px;
			font-family:"Comic Sans MS";
			font-size: 11pt;

		}
	</style>
	
</head>
<body text="#000080" bgcolor = "#B0C4DE">
	<form method="GET">
		<p> Добавить: <input name="what" class = "s"></p>
		<input type="submit" class = "b" name="add" value="OK" /> 
	</form>
	<form method="GET">
		<p>Посмотреть</p>
		<input type="submit" class ="b" name="show" value="OK" /> 
	</form>
	<form method="GET">
		<p>Удалить: </p>
		<select name="num" class = "s">
  	<?php
  	foreach($content as $num => $string)
	{?>
		<option value="<?= $num ?>"  > <?= $string ?></option>
		
	<?php 
	} ?>
		</select>
	  <input type="submit" class ="b" name="del" value="OK" />
	</form>
</body>
</html>