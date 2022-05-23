<!DOCTYPE html>
<html lang="en">
<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

	<title>Low Roar</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<link rel="shortcut icon" href="images/icon.png">

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/icons/fontawesome/css/style.css">
	<link rel="stylesheet" href="js/vendors/slick/slick.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="js/vendors/swipebox/css/swipebox.min.css">
	<link rel="stylesheet" href="css/style.css">
    
	<link rel="stylesheet" title="skin4" href="css/skin.css"/>

</head>
<body id="low_roar-radio">

<?php require("php/header2.php");?>
	
<?php require("php/search.php");?>

<div class="page_header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="wow fadeInUp" data-wow-duration=".8s">Все альбомы</h2>
				<ul class="bread-crumb wow fadeInUp" data-wow-duration="1.3s">
					<li><a href="./low_roar-radio-home.php">Главная</a><span>/</span></li>
					<li>Все альбомы</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="album-content wow fadeInUp" data-wow-duration="1s">
	<div class="container">
		<ul class="gallery-item-filter list-inline" data-option-key="filter">
			<li><a class="active" href="#filter" data-option-value="*">Все</a></li>
			<li><a href="#" data-option-value=".new">По дате</a></li>
			<li><a href="#" data-option-value=".popular">Популярные</a></li>
		</ul>
		<?php require("php/albums.php");?>
		<ul class="item-paging list-inline wow fadeInUpBig" data-wow-duration="1s" data-option-key="filter">
			<li class="active"><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">Следующая страница</a></li>
		</ul>
	</div>
</div>

<?php require("php/footer.php");?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/vendors/wow.min.js"></script>
<script src="js/vendors/slick/slick.min.js"></script>
<script src="js/vendors/tweecool.js"></script>
<script src="js/vendors/audio.js"></script>
<script src="js/vendors/jquery.countdown.min.js"></script>
<script src="js/vendors/swipebox/js/jquery.swipebox.min.js"></script>
<script src="js/vendors/jquery.easing.min.js"></script>
<script src="js/main.js"></script>
<script src="js/vendors/isotope/isotope.pkgd.js"></script>
<script src="js/vendors/isotope/main.js"></script>

</body>
</html>
