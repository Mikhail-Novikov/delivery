<?
global $arParams;
$arParams['TITLE'] = 'Персональная информация';
?>

<?require_once($_SERVER['DOCUMENT_ROOT'].'/markup/header.php');?>
<div class="pink-header-line">
	<div class="container">
		<h1>Персональная информация:</h1>
		<ul class="nav nav-tabs">
			<li class="active"><a href="personal-data.php">Персональные данные</a></li>
			<li><a href="calculate-page.php">Расчеты</a></li>
			<li><a href="request-page.php">Заявки</a></li>
			<li><a href="calculate-page.php">Рассчитать перевозку</a></li>
		</ul>
	</div>
</div>
<div class="content">
	<hr class="line-under-tabs">
	<div class="container">
			<div class="row blue-gradient-container">
				<div class="col-md-4 col-sm-4 col-xs-12 personal-data-block">
					<ul class="dotted-list">
						<li><span class="dotted-list-title">Компания</span><span class="dotted-list-value">Red look</span></li>
						<li><span class="dotted-list-title">Дата создания</span><span class="dotted-list-value">21.07.2018</span></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 personal-data-block">
					<ul class="dotted-list">
						<li><span class="dotted-list-title">Фамилия</span><span class="dotted-list-value">Иванов</span></li>
						<li><span class="dotted-list-title">Имя</span><span class="dotted-list-value">Иван</span></li>
						<li><span class="dotted-list-title">Отчество</span><span class="dotted-list-value">Иваныч</span></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 personal-data-block">
					<ul class="dotted-list">
						<li><span class="dotted-list-title">E-mail</span><span class="dotted-list-value">hello@redlook.com</span></li>
						<li><span class="dotted-list-title">Телефон</span><span class="dotted-list-value">+7 910 44 66</span></li>
					</ul>
				</div>
				<div class="col-md-12 text-right">
					<a href="javascript:;" onclick="javascript:;" class="btn-change">Изменить</a>
				</div>				
			</div>
			<div class="row">
				<a href="javascript:;" onclick="javascript:;" class="btn btn-pink">Рассчитать перевозку</a>
			</div>
		</div>
	</div>
</div>
<?require_once($_SERVER['DOCUMENT_ROOT'].'/markup/footer.php');?>