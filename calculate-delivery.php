<?
global $arParams;
$arParams['TITLE'] = 'Страница расчета';
?>

<?require_once($_SERVER['DOCUMENT_ROOT'].'/markup/header.php');?>
<div class="pink-header-line">
	<div class="container">
		<h1>Страница расчета:</h1>
		<ul class="nav nav-tabs">
			<li><a href="personal-data.php">Персональные данные</a></li>
			<li class="active"><a href="calculate-page.php">Расчеты</a></li>
			<li><a href="request-page.php">Заявки</a></li>
			<li><a href="calculate-page.php">Рассчитать перевозку</a></li>
		</ul>
	</div>
</div>
<div class="content without-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-12">
				<div class="table-row table-header-row">
					<span class="table-heading">Параметры груза</span>
					<span class="table-heading"></span>
				</div>
				<div class="flat-table blue-gradient-container">
    				<div class="table-body">
						<div class="table-row">
							<span class="table-cell" style="width: 250px;">Длина</span>
							<span class="table-cell" style="width: 120px;">1 м</span>
						</div>
						<div class="table-row">
							<span class="table-cell">Вес</span>
							<span class="table-cell">1 кг</span>
						</div>
						<div class="table-row">
							<span class="table-cell">Ширина</span>
							<span class="table-cell">1 м</span>
						</div>
						<div class="table-row">
							<span class="table-cell">Мест</span>
							<span class="table-cell">20</span>
						</div>
						<div class="table-row">
							<span class="table-cell">Высота</span>
							<span class="table-cell">1 м</span>
						</div>
						<div class="table-row">
							<span class="table-cell">Упаковка</span>
							<span class="table-cell">Паллета</span>
						</div>
						<div class="table-row">
							<span class="table-cell">Объем</span>
							<span class="table-cell">3 м<sup>3</sup></span>
						</div>
						<div class="table-row">
							<span class="table-cell">Особенности<br>груза</span>
							<span class="table-cell">нет</span>
						</div>
				    </div>
				</div>

				<!-- next table in column -->
				<div class="flat-table blue-gradient-container">
    				<div class="table-body">
						<div class="table-row">
							<span class="table-cell" style="width: 250px;">Откуда</span>
							<span class="table-cell" style="width: 120px;">Москва</span>
						</div>
						<div class="table-row">
							<span class="table-cell">Куда</span>
							<span class="table-cell">Милан</span>
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
			<div class="col-md-8 col-sm-12">
				<div class="stripped-table">
					<div class="table-row table-header-row" style="margin-top: 20px;margin-bottom: -25px">
						<span style="width: 50%" class="table-heading">Услуга</span>
						<span style="width: 25%" class="table-heading">Стоимость</span>
						<span style="width: 10%" class="table-heading">Валюта</span>
					</div>
					<div class="gray-table-container over-y">
						<div class="table-responsive" style="height: 516px;">
							<div class="table-body">
								<div class="table-row">
									<span style="width: 50%" class="table-cell">Доставка сборного груза</span>
									<span style="width: 25%" class="table-cell">1000</span>
									<span style="width: 10%" class="table-cell">RUB</span>
								</div>
								<div class="table-row">
									<span style="width: 50%" class="table-cell">Суммарная стоимость перевозки груза из Росиии в Китай на грузовом судне</span>
									<span style="width: 25%" class="table-cell">1000</span>
									<span style="width: 10%" class="table-cell">RUB</span>
								</div>
								<div class="table-row">
									<span style="width: 50%" class="table-cell">Доставка сборного груза</span>
									<span style="width: 25%" class="table-cell">1000</span>
									<span style="width: 10%" class="table-cell">RUB</span>
								</div>
							</div>
						</div>
					</div>
					<div class="request-page-footer-sum">
						<span>Итого в USD: <strong>1 000</strong></span> <span>Итого в RUB: <strong>1 500</strong></span>
					</div>
				</div>
				<div class="table-footer-button row">
					<div class="col-sm-5 text-sm-left text-center mb-25">
						<a href="javascript:;" class="btn btn-pink nowrap js-open-request-window">Создать заявку</a>
					</div>	
								
					<div class="col-sm-7 text-sm-right">
						<a href="javascript:;" class="btn btn-pink nowrap">Изменить параметры и пересчитать</a>
					</div>	


				</div>
			</div>

			<div class="g-hidden">
				<div class="box-modal js-modal-request">
					<div class="box-modal_close arcticmodal-close">закрыть</div>
						

							<h2 class="text-center">Порядок работы</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				


							  	<div class="form-check mt-25 mb-25">
								  <input class="form-check-input" type="checkbox" value="" id="Check">
								  <label class="form-check-label" for="Check">
								    Согласен с порядком работы
								  </label>
								</div>	

							<button class="btn btn-yellow btn-sm disabled js-open-offer-window">Продолжить</button>							  

					</div>

				<div class="box-modal js-modal-offer">
					<div class="box-modal_close arcticmodal-close">закрыть</div>
						

							<h2 class="text-center">Офферта</h2>
							<p class="mb-25">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				

							<button class="btn btn-yellow btn-sm js-go-request">Продолжить</button>							  

					</div>					
			</div>

		</div>
	</div>
</div>

<?require_once($_SERVER['DOCUMENT_ROOT'].'/markup/footer.php');?>