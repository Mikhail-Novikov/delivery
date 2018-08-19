<?
global $arParams;
$arParams['TITLE'] = 'Страница заявки';
?>

<?require_once($_SERVER['DOCUMENT_ROOT'].'/markup/header.php');?>
<div class="pink-header-line">
	<div class="container">
		<h1>Страница заявки:</h1>
		<ul class="nav nav-tabs">
			<li><a href="personal-data.php">Персональные данные</a></li>
			<li><a href="calculate-page.php">Расчеты</a></li>
			<li class="active"><a href="request-page.php">Заявки</a></li>
			<li><a href="calculate-page.php">Рассчитать перевозку</a></li>
		</ul>
	</div>
</div>
<div class="content without-padding">
	<div class="container">
		<h2 class="with-line"><span>Список услуг</span></h2>
		<div class="row">
			<div class="col-md-5">
				<div class="table-row table-header-row">
					<span class="table-heading" style="width: 200px;">Параметры груза</span>
					<span class="table-heading" style="width: 180px;">Заявленные</span>
					<span class="table-heading" style="width: 110px;">Фактические</span>
				</div>
				<div class="flat-table blue-gradient-container">
    				<div class="table-body">
						<div class="table-row">
							<span class="table-cell" style="width: 200px;">Длина</span>
							<span class="table-cell" style="width: 180px;">1 м</span>
							<span class="table-cell" style="width: 110px;">1 м</span>
						</div>
						<div class="table-row">
							<span class="table-cell">Вес</span>
							<span class="table-cell">1 кг</span>
							<span class="table-cell">1 кг</span>
						</div>
						<div class="table-row">
							<span class="table-cell">Ширина</span>
							<span class="table-cell">1 м</span>
							<span class="table-cell">1 м</span>
						</div>
						<div class="table-row">
							<span class="table-cell">Мест</span>
							<span class="table-cell">20</span>
							<span class="table-cell">20</span>
						</div>
						<div class="table-row">
							<span class="table-cell">Высота</span>
							<span class="table-cell">1 м</span>
							<span class="table-cell">1 м</span>
						</div>
						<div class="table-row">
							<span class="table-cell">Упаковка</span>
							<span class="table-cell">Паллета</span>
							<span class="table-cell">Паллета</span>
						</div>
						<div class="table-row">
							<span class="table-cell">Объем</span>
							<span class="table-cell">3 м<sup>3</sup></span>
							<span class="table-cell">3 м<sup>3</sup></span>
						</div>
						<div class="table-row">
							<span class="table-cell">Особенности<br>груза</span>
							<span class="table-cell">нет</span>
							<span class="table-cell">нет</span>
						</div>
				    </div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="stripped-table">
					<div class="table-row table-header-row">
						<span style="width: 39%;" class="table-heading">Услуга</span>
						<span style="width: 20%;" class="table-heading">Стоимость<br>план</span>
						<span style="width: 20%;" class="table-heading">Стоимость<br>факт</span>
						<span style="width: 10%;" class="table-heading">Валюта</span>
					</div>
					<div class="gray-table-container over-y">
						<div class="table-responsive" style="max-height: 378px;">
							<div class="gray-table-background">
								<div class="table-body">
									<?for($i = 0; $i < 10; $i++){?>
										<div class="table-row">
											<span style="width: 40%;" class="table-cell">Доставка сборного груза</span>
											<span style="width: 20%;" class="table-cell">1000</span>
											<span style="width: 20%;" class="table-cell">1000</span>
											<span style="width: 10%;" class="table-cell">RUB</span>
										</div>
									<? } ?>
								</div>
							</div>
						</div>
					</div>
					<div class="request-page-footer-sum">
						<span>Итого в USD: <strong>1 000</strong></span> <span>Итого в RUB: <strong>1 500</strong></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="content without-padding gray-background">
	<div class="container">
		<h2 class="with-line"><span>Движение заявки</span></h2>
		<div class="row">
			<div class="col-md-4">
				<div class="flat-table blue-gradient-container" style="margin-top: 50px;">
    				<div class="table-body">
						<div class="table-row">
							<span class="table-cell" style="width: 220px;">Откуда</span>
							<span class="table-cell" style="width: 140px;">Москва Россия</span>
						</div>
						<div class="table-row">
							<span class="table-cell">Куда</span>
							<span class="table-cell">Милан Италия</span>
						</div>
						<div class="table-row">
							<span class="table-cell">Тип перевозки</span>
							<span class="table-cell">Генеральная</span>
						</div>
						<div class="table-row">
							<span class="table-cell">Способ доставки</span>
							<span class="table-cell">Авто</span>
						</div>
						<div class="table-row">
							<span class="table-cell">Тип доставки</span>
							<span class="table-cell">Авто</span>
						</div>
				    </div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="stripped-table">
					<div style="margin-top: 10px; margin-bottom: -25px;" class="table-row table-header-row">
						<span style="width: 37%;" class="table-heading">Транспорт</span>
						<span style="width: 20%;" class="table-heading">Склад</span>
						<span style="width: 20%;" class="table-heading">Статус</span>
						<span style="width: 20%;" class="table-heading">Дата</span>
					</div>
					<div class="gray-table-container over-y">
						<div class="table-responsive" style="max-height: 284px;">
							<div class="table-body">
								<?for($i = 0; $i < 10; $i++){?>
									<div class="table-row">
										<span style="width: 37%;" class="table-cell">5659 УГ</span>
										<span style="width: 20%;"class="table-cell">Рига</span>
										<span style="width: 20%;"class="table-cell"><span class="table-red-value">Загружена</span></span>
										<span style="width: 20%;"class="table-cell">21.06.2018</span>
									</div>
								<? } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">	
			<div class="col-xs-12 text-right text-sm-center mt-25 mb-25">
				<a href="/requests-list.php" class="btn btn-pink">Все заявки</a>
				
			</div>
		</div>
	</div>
</div>

<?require_once($_SERVER['DOCUMENT_ROOT'].'/markup/footer.php');?>