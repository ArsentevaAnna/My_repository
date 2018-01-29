<?php
	if($_GET['name'] == 'text')
	{
		header('Content-Type: text/html');
		echo "Hello, Text!";
	}
	else if($_GET['name'] == 'json')
	{
	$data = [ 'Hello'=> 'JSON !'];
	$data1 = ['My name' => 'Anya'];
		header('Content-Type: application/json');
		echo json_encode($data); 
		echo json_encode($data1); 

	}
	else if($_GET['name'] == 'xml')
	{
		header('Content-type: application/xml');
		echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
		echo " <response> ";
		echo "<form> ";
		echo " Hello, XML ! ";
		echo "</form>";
		echo " <day> ";
		echo " 30 ";		
		echo " </day> ";
		echo "<month>";
		echo " ЯНВАРЬ";
		echo "</month>";
		echo "<year>";
		echo "2018"; 
		echo "</year>";		
		echo "</response> ";
	}
	
	else echo 'Пусто!';
	?>