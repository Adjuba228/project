<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-image: url(fon.jpg);">
	<?php
		$con = mysqli_connect("127.0.0.1","root","","proekt");
		$q = mysqli_query($con,"SELECT * FROM site");
		$result1 = $q->fetch_assoc();
		$result2 = $q->fetch_assoc();
		$result3 = $q->fetch_assoc();
		$result4 = $q->fetch_assoc();
		$result5 = $q->fetch_assoc();
		$result6 = $q->fetch_assoc();
		

	?>
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
	<div class="col-8 row bg-secondary mx-auto" style="height: 600px">
		<div class="col-8  mx-auto row " style="height: 600px">
			<div class="col-8 ">
				<h1 class="text text-monospace">
					Мой собственный интернет магазин
				</h1>
				<img src="10.svg" class="w-100" style="margin-right: 150px">
			</div>
			<div class="col-4 ">
				<img src="1.svg" class="w-100">
				<h1 class="text-monospace">Здесь находятся вещи , которые я бы хотел приобрести</h1>
			</div>
		</div>
	</div>
	<div class="col-8 bg-secondary mx-auto" style="height: 2100px">
		<div class="col-12  row" style="height: 550px">
			<div class="col-4 ">
			<?php 
				echo "<h3 class = 'text-monospace'>".$result1["name"]."</h3>";
				echo "<p class = 'text-monospace'>".$result1["text"]."</p>";
				echo "<h2 class = 'text-monospace'>".$result1["count"]."</h2>";
				echo "<img src='".$result1["img"]."' class = 'w-100'>";		 
			?>
			<button class="btn bg-primary">Купить</button>
			</div>
			<div class="col-4 ">
			<?php
				echo "<h3 class = 'text-monospace'>".$result2["name"]."</h3>";
				echo "<p class = 'text-monospace'>".$result2["text"]."</p>";
				echo "<h2 class = 'text-monospace'>".$result2["count"]."</h2>";
				echo "<img src='".$result2["img"]."' class = 'w-50'>";		
			?>
			<button class="btn bg-primary">Купить</button>
			</div>
			<div class="col-4 ">
				<?php
					echo "<h3 class = 'text-monospace'>".$result3["name"]."</h3>";
					echo "<p class = 'text-monospace'>".$result3["text"]."</p>";
					echo "<h2 class = 'text-monospace'>".$result3["count"]."</h2>";
					echo "<img src='".$result3["img"]."' class = 'w-100'>";	

				?>
				<button class="btn bg-primary mx-auto">Купить</button>
			</div>
		</div>
		<div class="col-12  row mt-5" style="height: 700px">
			<div class="col-4 " style="height: 700px">
				<?php
					
					echo "<h3 class = 'text-monospace'>".$result4["name"]."</h3>";
					echo "<p class = 'text-monospace'>".$result4["text"]."</p>";
					echo "<h2 class = 'text-monospace'>".$result4["count"]."</h2>";
					echo "<img src='".$result4["img"]."' class = 'w-100'>";	

				?>
				<button class="btn bg-primary mx-auto">Купить</button>
			</div>
			<div class="col-4 ">
				<?php
					echo "<h3 class = 'text-monospace'>".$result5["name"]."</h3>";
					echo "<p class = 'text-monospace'>".$result5["text"]."</p>";
					echo "<h2 class = 'text-monospace'>".$result5["count"]."</h2>";
					echo "<img src='".$result5["img"]."' class = 'w-100'>";	

				?>
				<button class="btn bg-primary mx-auto">Купить</button>
			</div>
			<div class="col-4 ">
				<?php
					echo "<h3 class = 'text-monospace'>".$result6["name"]."</h3>";
					echo "<p class = 'text-monospace'>".$result6["text"]."</p>";
					echo "<h2 class = 'text-monospace'>".$result6["count"]."</h2>";
					echo "<img src='".$result6["img"]."' class = 'w-100'>";	

				?>
			</div>
		</div>
		</div>
	</div>
	
</body>
</html>