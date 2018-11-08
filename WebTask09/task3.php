<html>
	<head>
		<style>
			.cards{display:flex;flex-wrap:wrap;width:700px;margin-left:auto;margin-right:auto;}
			.cards .card{width:250px;border:1px solid red;border-radius:5px;display:flex;margin:10px;}
			.menu {display:block;width:700px;margin-left:auto;margin-right:auto;}
			.card .title{font-size:20px;font-weight:bold;}
			.card .price{color:green;}
			.card .description{display:flex;flex-direction:column;}
			.card .price{flex-grow:1;}
			.card .year{font-weight:bold;font-size:18px;}
		</style>
	</head>
	<body>

		<div class="cards">
			
			
		</div>
		<div class="menu">
			<a href="task3.php">Home</a>|
			<a href="task3.php?maker=Toyota">Toyota</a>|
			<a href="task3.php?maker=BMW">BMW</a>|
			<a href="task3.php?maker=Audi">Audi</a>|
			<a href="task3.php?maker=Lada">Lada</a>
		</div>
		<div class="menu">
			<a href="task3.php?year=old">Old cars (More than 7 years)</a>|<a href="task3.php?price=expensive">Expensive cars (more than 20.000$)</a>
		</div>
	</body>
</html>