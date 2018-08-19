<?global $arParams?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?=$arParams['TITLE']?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/animated-input.css">
	<link rel="stylesheet" href="assets/css/validate.css">
	<link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">	
	<link rel="stylesheet" href="assets/css/datatables.min.css">
	<link rel="stylesheet" href="assets/css/jquery.arcticmodal-0.3.css">
	<link rel="stylesheet" href="assets/css/chosen.min.css">				
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	<div class="header-wrapper">
		<div class="container">
			<div class="row header">
				<div class="col-md-6 col-sm-6 col-xs-12 logo-block">
					<a href="#"><div class="logo"></div></a>
					<!-- <p class="header-slogan">Мы считаем, вы зарабатываете</p> -->
				</div>
				<?if($arParams['HIDE_AUTH'] != true) {?>
					<div class="col-md-6 col-sm-6 col-xs-12 auth-block <?= $arParams['HIDE_AUTH'] ? 'hidden' : ''?>">
						<a href="#"><i class="user-icon"></i><span>Александр Длиннофамильевский</span></a>
						<a href="javascript:;"><i class="arrow-down"></i>
							<ul class="dropdown-menu">
								<li><a href="">Личный кабинет</a></li>
								<li><a href="">Строка 2</a></li>
								<li><a href="">Строка 3</a></li>
							</ul>
						</a>
					</div>
				<? } ?>
			</div>
		</div>
	</div>