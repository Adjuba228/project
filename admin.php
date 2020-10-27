<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body style="background-image: url(fon.jpg);">
	<form action="insert.php" method="GET">
		<div class="col-8 mx-auto row bg-secondary" style="height: 75px">
		<div class="col-10 row  mx-auto">
			<div class="col-2  ">
				<img src="ava.svg" class="w-50">
			</div>
			<div class="col-2">
				<input type="" name="" placeholder="Поиск" class="mt-3">
			</div>
			<div class="col-6 row">
				<a href="admin.php" class="font-weight-bold ml-5 mt-3">Admin</a>
				<a href="index.php" class="font-weight-bold ml-5 mt-3">Главная</a>
				<a href="1.php" class="font-weight-bold ml-5 mt-3">О нас</a>
				<a href="2.php" class=" font-weight-bold ml-5 mt-3">Отзывы</a>

			</div>
			<div class="col-2  row ">
				<img src="6.svg" class="w-50 rounded-circle">
				<img src="7.svg" class="w-50 rounded-circle">
		
			</div>
		</div>
	</div>
	</div>
		
		<div class="row bg-secondary col-8 mx-auto" style="height: 400px">
			<div class="col-12 row">
				<h1 class="mx-auto">Добро пожаловать на мой сайт!</h1>
				<div class="col-10 row">
					<h2 class="mx-auto">Название</h2>
					<input type="" name="name" placeholder="Товар" style="width: 800px">
				</div>
				<div class="col-10 row">
					<h2 class="mx-auto">Описание</h2>
					<input type="" name="text" placeholder="Описание" style="width: 800px" class="ml-2">
				</div>
				<div class="col-10 row">
					<h2 class="mx-auto">Стоимость</h2>
					<input type="" name="count" placeholder="Стоимость" style="width: 800px">
				</div>
				<div class="col-10 row ">
					<h2 class="mx-auto">Фото</h2>
					<input type="" name="img" placeholder="Фото" style="width: 800px">
				</div>
				<div class="col-8 row">
					<button class="btn  bg-primary " style="margin-left: 320px">Создать пост</button>
				</div>
			</div>
		</div>
	</form>
</body>
</html>