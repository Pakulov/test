<?php include '/classes/connect.php';
	$add_order = $_pdo->prepare('INSERT INTO orders (date_order, date_order_end, name_order, price_order, phone_number, order_status) VALUE (:date_order, :date_order_end, :name_order, :price_order, :phone_number, :order_status)');

	if(isset($_POST['add_order'])){
		if($_POST['add_order']=='true'){

		}
	}
?>
<html>
<head>
	<meta charset='utf-8'>
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>project_01</title>

	<!--css links-->
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" type="text/css" href="">

</head>
<body>
	<div id="header">
		<h4>Тестовая страница проекта project_01</h4>
	</div>
	<div id="content">
		<button>Добавить input tag</button>
		<a href="#" id="clicky">link</a>
	</div>
	<div id="footer">
		<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>

	</div>

<!--jQuery js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<!--add/remove tag-->
<script>
	//$(document).ready(function() {
		$('#clicky').on('click', function () {
			$('#clicky').replaceWith('<input type="text" id="clickx">');
		});
		$('button').on('click', function () {
			$('#clickx').replaceWith('<a href="#" id="clicky">link</a>');
			$('button').after('<input type="button" id="df">');
		});
		$('#df').on('click', function () {
			alert();
		});
	//})
</script>

</body>
</html>