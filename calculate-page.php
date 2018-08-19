<?
global $arParams;
$arParams['TITLE'] = 'Рассчитать перевозку';
?>

<?require_once($_SERVER['DOCUMENT_ROOT'].'/markup/header.php');?>
<div class="calculator-background">
	<div class="pink-header-line pink-header-line--gray transparent">
		<div class="container">
			<h1>Расчет:</h1>
			<ul class="nav nav-tabs">
				<li><a href="personal-data.php">Персональные данные</a></li>
				<li><a href="calculate-page.php">Расчеты</a></li>
				<li><a href="request-page.php">Заявки</a></li>
				<li class="active"><a href="calculate-page.php">Рассчитать перевозку</a></li>
			</ul>
		</div>
	</div>
	<div id="app" class="content">
		<form class="form-content container" action="">
			<div class="row">
				
				<div class="calculator-white-container">


					<div class="col-md-3">
						<h2 class="nowrap">Параметры груза:</h2>
					</div>
					<div class="col-md-9">
						<label class="calculate-tag-label">
							<input class="calculate-checkbox" type="radio" value="general" v-model="type_delivery">
							<span class="calculate-checkbox-custom"></span>
							<span class="calculate-label">Генеральная перевозка</span>
						</label>
						<label class="calculate-tag-label">
							<input class="calculate-checkbox" type="radio" value="assemb" v-model="type_delivery">
							<span class="calculate-checkbox-custom"></span>
							<span class="calculate-label">Сборная перевозка</span>
						</label>                
					</div>
					<div class="clearfix"></div>

					<div id="goods" class="col-md-6 col-xs-12">
						<div class="calculator-line without-cross">
							<i class="calculator-weight"></i>
							<div class="calculator-input-container">							
								<input type="number" class="calculator-input" placeholder="Вес" name='base_weight' v-model.number="base_weight">
								<input type="number" class="calculator-input" placeholder="Мест" name='base_places' v-model.number='base_places'>
								<input type="number" class="calculator-input" placeholder="Объем" name='base_volume' v-model.number='base_volume'>
							</div>
						</div>
						<div class="calculator-line">
							<i class="calculator-ruller"></i>
							<div class="calculator-input-container">							
								<input type="number" class="calculator-input" placeholder="Длина" name='base_length' v-model.number="base_length">
								<i class="calculator-cross"></i>
								<input type="number" class="calculator-input" placeholder="Ширина" name='base_width' v-model.number="base_width">
								<i class="calculator-cross"></i>
								<input type="number" class="calculator-input" placeholder="Высота" name='base_height' v-model.number="base_height">
							</div>
						</div>

					</div>
					<div class="col-md-6 col-xs-12">
						<div class="calculator-line">
							<i class="calculator-package"></i>
							<select class="calculator-select js-select" name='prop_pack'>
								<option selected disabled>Упаковка</option>
								<option value="1">Упаковка 1</option>
								<option value="2">Упаковка 2</option>
								<option value="3">Упаковка 3</option>
								<option value="4">Упаковка 4</option>								
							</select>
							<i class="calculator-pricetag"></i>
							<select class="calculator-select js-select" name='prop_goods'>
								<option selected disabled>Товар</option>
								<option value="1">Значение 1</option>
								<option value="2">Значение 2</option>
							</select>
						</div>
						<div class="calculator-line  without-cross rb">
							<div class="">
								<input type="text" class="calculator-input rb" placeholder="Особенности груза">
								<input type="text" class="calculator-input rb" placeholder="Стоимость по инвойсу">

								<select class="calculator-select currency js-select" name='prop_currency'>
									<option selected >$</option>
									<option value="1">R</option>
									<option value="2">EUR</option>
								</select>
							</div>														
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-12 col-xs-12 calculator-white-container">
					<h2>Параметры перевозки:</h2>
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<select class="calculator-select-bordered chosen js-select-param">
								<option selected disabled>Таможня назначение</option>
								<option value="1">Назначение 1</option>
								<option value="1">Назначение 2</option>
								<option value="1">Назначение 3</option>
								<option value="1">Назначение 4</option>								
								<option value="1">Назначение 5</option>
							</select>
						</div>
						<div class="col-sm-6 col-xs-12">
							<select class="calculator-select-bordered chosen js-select-param">
								<option selected disabled>Тип доставки</option>
								<option value="1">Доставка 1</option>
								<option value="1">Доставка 2</option>
								<option value="1">Доставка 3</option>
								<option value="1">Доставка 4</option>


							</select>
						</div>
					</div>
					<h2 style="margin-top: 69px;">Маршрут:</h2>
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<select class="calculator-select-machroute chosen chosen-machroute js-select-param">
								<option selected disabled>Пункт отправления</option>
								<option value="1">Значение 1</option>
								<option value="2">Значение 2</option>
							</select>
						</div>
						<div class="col-sm-6 col-xs-12">
							<select class="calculator-select-machroute chosen chosen-machroute js-select-param">
								<option selected disabled>Пункт назначения</option>
								<option value="1">Значение 1</option>
								<option value="2">Значение 2</option>
							</select>
						</div>
					</div>
					<div class="calculator-bottom-button">
						<a href="#" class="btn btn-yellow btn-calculator w-100 js-open-notready-window">Не готов подтвердить</a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-xs-11">
						
						<div class="calculator-white-blue-container">
							<div class="tab-content">
								<div id="home" class="tab-pane fade in active">
									<h2 style="margin-bottom: 0px;">Расчет:</h2>
									<div class="table-responsive" style="max-width: 100%">
										<div class="calculator-dashed-table">
											<div class="table-row table-heading">
												<span class="table-cell"></span>
												<span class="table-cell"></span>
												<span class="table-cell">Стоимость:</span>
												<span class="table-cell">Дней:</span>
											</div>
											<div class="table-row" data-trigger="truck">
												<span class="table-cell"><i class="calcualtion-truck"></i></span>
												<span class="table-cell">АВТО</span>
												<span style="text-align: center;" class="table-cell">150</span>
												<span style="text-align: center;" class="table-cell">7</span>
											</div>
											<div class="table-row" data-trigger="train">
												<span class="table-cell"><i class="calcualtion-train"></i></span>
												<span class="table-cell">Ж/Д</span>
												<span style="text-align: center;" class="table-cell">1000</span>
												<span style="text-align: center;" class="table-cell">20</span>
											</div>
											<div class="table-row" data-trigger="ship">
												<span class="table-cell"><i class="calcualtion-ship"></i></span>
												<span class="table-cell">МОРЕ</span>
												<span style="text-align: center;" class="table-cell">200</span>
												<span style="text-align: center;"class="table-cell">20</span>
											</div>
											<div class="table-row" data-trigger="plane">
												<span class="table-cell"><i class="calcualtion-plane"></i></span>
												<span class="table-cell">АВИА</span>
												<span style="text-align: center;" class="table-cell">В разработке</span>
												<span style="text-align: center;" class="table-cell"></span>
											</div>
										</div>
									</div>
									<div class="calculator-table-footer">
										<a href="javascript:;"><i class="print-icon"></i></a>
										<a href="javascript:;" class="btn btn-pink btn-calculator-pink js-open-infocargo-window">Подтвердить заявку</a>
									</div>
								</div>
								<div id="truck" class="tab-pane fade">
									<div class="table-responsive" style="max-width: 100%">
										<div class="calculator-dashed-table flat">
											<div class="table-row table-heading">
												<span class="table-cell"></span>
												<span class="table-cell"></span>
												<span class="table-cell">Стоимость:</span>
												<span class="table-cell">Дней:</span>
											</div>
											<div class="table-row">
												<span class="table-cell"><i class="calcualtion-truck"></i></span>
												<span style="color: #ff3366; font-weight: 600;" class="table-cell">НАЗЕМ</span>
												<span style="text-align: center;color: #ff3366;font-weight: 600;" class="table-cell">1000</span>
												<span style="text-align: center;color: #ff3366;font-weight: 600;" class="table-cell">20</span>
											</div>
											<div class="table-row">
												<span class="table-cell"></span>
												<span class="table-cell">Услуга 1</span>
												<span style="text-align: center;" class="table-cell">200</span>
												<span style="text-align: center;"class="table-cell">20</span>
											</div>
											<div class="table-row">
												<span class="table-cell"></span>
												<span class="table-cell">Услуга 1</span>
												<span style="text-align: center;" class="table-cell">200</span>
												<span style="text-align: center;"class="table-cell">20</span>
											</div>
											<div class="table-row">
												<span class="table-cell"></span>
												<span class="table-cell">Услуга 1</span>
												<span style="text-align: center;" class="table-cell">200</span>
												<span style="text-align: center;"class="table-cell">20</span>
											</div>
											<div class="table-row">
												<span class="table-cell"></span>
												<span class="table-cell">Услуга 1</span>
												<span style="text-align: center;" class="table-cell">200</span>
												<span style="text-align: center;"class="table-cell">20</span>
											</div>
										</div>
									</div>
									<div class="calculator-table-footer">
										<a href="javascript:;"><i class="print-icon"></i></a>
										<a href="javascript:;" class="btn btn-pink btn-calculator-pink js-open-infocargo-window">Подтвердить заявку</a>
									</div>
								</div>
								<div id="train" class="tab-pane fade">
									<div class="table-responsive" style="max-width: 100%">
										<div class="calculator-dashed-table flat">
											<div class="table-row table-heading">
												<span class="table-cell"></span>
												<span class="table-cell"></span>
												<span class="table-cell">Стоимость:</span>
												<span class="table-cell">Дней:</span>
											</div>
											<div class="table-row">
												<span class="table-cell"><i class="calcualtion-train"></i></span>
												<span style="color: #ff3366; font-weight: 600;" class="table-cell">Ж/Д</span>
												<span style="text-align: center;color: #ff3366;font-weight: 600;" class="table-cell">1000</span>
												<span style="text-align: center;color: #ff3366;font-weight: 600;" class="table-cell">20</span>
											</div>
											<div class="table-row">
												<span class="table-cell"></span>
												<span class="table-cell">Услуга 1</span>
												<span style="text-align: center;" class="table-cell">200</span>
												<span style="text-align: center;"class="table-cell">20</span>
											</div>
											<div class="table-row">
												<span class="table-cell"></span>
												<span class="table-cell">Услуга 1</span>
												<span style="text-align: center;" class="table-cell">200</span>
												<span style="text-align: center;"class="table-cell">20</span>
											</div>
											<div class="table-row">
												<span class="table-cell"></span>
												<span class="table-cell">Услуга 1</span>
												<span style="text-align: center;" class="table-cell">200</span>
												<span style="text-align: center;"class="table-cell">20</span>
											</div>
											<div class="table-row">
												<span class="table-cell"></span>
												<span class="table-cell">Услуга 1</span>
												<span style="text-align: center;" class="table-cell">200</span>
												<span style="text-align: center;"class="table-cell">20</span>
											</div>
										</div>
									</div>
									<div class="calculator-table-footer">
										<a href="javascript:;"><i class="print-icon"></i></a>
										<a href="javascript:;" class="btn btn-pink btn-calculator-pink js-open-infocargo-window">Подтвердить заявку</a>
									</div>
								</div>
								<div id="ship" class="tab-pane fade">
									<div class="table-responsive" style="max-width: 100%">
										<div class="calculator-dashed-table flat">
											<div class="table-row table-heading">
												<span class="table-cell"></span>
												<span class="table-cell"></span>
												<span class="table-cell">Стоимость:</span>
												<span class="table-cell">Дней:</span>
											</div>
											<div class="table-row">
												<span class="table-cell"><i class="calcualtion-ship"></i></span>
												<span style="color: #ff3366; font-weight: 600;" class="table-cell">МОРЕ</span>
												<span style="text-align: center;color: #ff3366;font-weight: 600;" class="table-cell">1000</span>
												<span style="text-align: center;color: #ff3366;font-weight: 600;" class="table-cell">20</span>
											</div>
											<div class="table-row">
												<span class="table-cell"></span>
												<span class="table-cell">Услуга 1</span>
												<span style="text-align: center;" class="table-cell">200</span>
												<span style="text-align: center;"class="table-cell">20</span>
											</div>
											<div class="table-row">
												<span class="table-cell"></span>
												<span class="table-cell">Услуга 1</span>
												<span style="text-align: center;" class="table-cell">200</span>
												<span style="text-align: center;"class="table-cell">20</span>
											</div>
											<div class="table-row">
												<span class="table-cell"></span>
												<span class="table-cell">Услуга 1</span>
												<span style="text-align: center;" class="table-cell">200</span>
												<span style="text-align: center;"class="table-cell">20</span>
											</div>
											<div class="table-row">
												<span class="table-cell"></span>
												<span class="table-cell">Услуга 1</span>
												<span style="text-align: center;" class="table-cell">200</span>
												<span style="text-align: center;"class="table-cell">20</span>
											</div>
										</div>
									</div>
									<div class="calculator-table-footer">
										<a href="javascript:;"><i class="print-icon"></i></a>
										<a href="javascript:;" class="btn btn-pink btn-calculator-pink js-open-infocargo-window">Подтвердить заявку</a>
									</div>
								</div>
								<div id="plane" class="tab-pane fade">
									<div class="table-responsive" style="max-width: 100%">
										<div class="calculator-dashed-table flat">
											<div class="table-row table-heading">
												<span class="table-cell"></span>
												<span class="table-cell"></span>
												<span class="table-cell">Стоимость:</span>
												<span class="table-cell">Дней:</span>
											</div>
											<div class="table-row">
												<span class="table-cell"><i class="calcualtion-plane"></i></span>
												<span style="color: #ff3366; font-weight: 600;" class="table-cell">ВОЗДУХ</span>
												<span style="text-align: center;color: #ff3366;font-weight: 600;" class="table-cell">1000</span>
												<span style="text-align: center;color: #ff3366;font-weight: 600;" class="table-cell">20</span>
											</div>
											<div class="table-row">
												<span class="table-cell"></span>
												<span class="table-cell">Услуга 1</span>
												<span style="text-align: center;" class="table-cell">200</span>
												<span style="text-align: center;"class="table-cell">20</span>
											</div>
											<div class="table-row">
												<span class="table-cell"></span>
												<span class="table-cell">Услуга 1</span>
												<span style="text-align: center;" class="table-cell">200</span>
												<span style="text-align: center;"class="table-cell">20</span>
											</div>
											<div class="table-row">
												<span class="table-cell"></span>
												<span class="table-cell">Услуга 1</span>
												<span style="text-align: center;" class="table-cell">200</span>
												<span style="text-align: center;"class="table-cell">20</span>
											</div>
											<div class="table-row">
												<span class="table-cell"></span>
												<span class="table-cell">Услуга 1</span>
												<span style="text-align: center;" class="table-cell">200</span>
												<span style="text-align: center;"class="table-cell">20</span>
											</div>
										</div>
									</div>
									<div class="calculator-table-footer">
										<a href="javascript:;"><i class="print-icon"></i></a>
										<a href="javascript:;" class="btn btn-pink btn-calculator-pink js-open-infocargo-window">Подтвердить заявку</a>
									</div>
								</div>
							</div>
						</div>

						<div class="calculator-floating-block">
							<a class="calcualtor-floating-button home" style="display: none;" data-hover-target="home" data-toggle="tab" href="#home"></a>
							<a class="calcualtor-floating-button cyan" data-hover-target="truck" data-toggle="tab" href="#truck"><i class="calcualtion-truck-white"></i></a>
							<a href="#train" class="calcualtor-floating-button pink" data-hover-target="train" data-toggle="tab"><i class="calcualtion-train-white"></i></a>
							<a href="#ship" class="calcualtor-floating-button yellow" data-hover-target="ship" data-toggle="tab"><i class="calcualtion-ship-white"></i></a>
							<a href="#plane" class="calcualtor-floating-button magenta" data-hover-target="plane" data-toggle="tab"><i class="calcualtion-plane-white"></i></a>
						</div>
						
					</div>

				</div>
			</div>
		</form>
	</div>
</div>

<!-- форма информация о грузе -->
<div class="hidden">
	<div class="box-modal js-modal-infocargo">
		<div class="box-modal_close arcticmodal-close"><img src="assets/img/close.png"></div>
			<h2 class="text-center">Информация о грузе</h2>

				<form class="js-form-validate">
					<div class="wrap-border">
						<p class="title">Укажите данные о поставщике:</p>
							<input type="text" class="modal-input big" placeholder="Наименование предприятия">
						<div class="clearfix mb-25">

							<select class="calculator-select-machroute chosen chosen-machroute js-select-param">
								<option selected disabled>Страна</option>
								<option value="1">Значение 1</option>
								<option value="2">Значение 2</option>
							</select>

								<div class="form-valid">
									<input type="text" class="modal-input mid" placeholder="Город" name="city">
									<span>Поле не заполнено</span>
								</div>

								<div class="form-valid">
									<input type="text" class="modal-input mid" placeholder="Провинция">
									<span>Поле не заполнено</span>
								</div>

								<div class="form-valid">								
									<input type="text" class="modal-input mid" placeholder="Улица" name="street">
									<span>Поле не заполнено</span>
								</div>	

								<div class="form-valid">
									<input type="text" class="modal-input small" placeholder="Дом" name="home">	
									<span>Поле не заполнено</span>
								</div>
						</div>
						
						<div class="clearfix mid-modal-block mb-25">

							<div class="mmb-l">
								<p class="title">Контакты представителя поставщика:</p>	
								<div class="form-valid">
									<input type="text" class="modal-input big" placeholder="Имя" name="nic">
									<span>Поле не заполнено</span>
								</div>

								<div class="form-valid">								
									<input type="text" class="modal-input mid" placeholder="Телефон"  data-mask="+7 (999) 999-99-99"  aria-type='phone' name="phone">
									<span>Поле не заполнено</span>
								</div>

								<div class="form-valid">
									<input type="text" class="modal-input mid" placeholder="email" name="email">	
									<span>Поле не заполнено</span>
								</div>

							</div>
							<div class="mmb-r">
								<p class="text-left title">Получатель согласно инвойсу:</p>	

								<div class="form-valid">														
									<input type="text" class="modal-input big" placeholder="Имя"  name="nic_enterprise">	
									<span>Поле не заполнено</span>
								</div>
							</div>

						</div>

						<p class="title">Параметры груза:</p>
						<div class="calculator-line">
							<i class="calculator-ruller"></i>
							<div class="calculator-input-container">	

								<div class="form-valid">													
									<input type="text" class="calculator-input" placeholder="Длина" name="cargo_length">
									<span>Поле не заполнено</span>
								</div>
								<i class="calculator-cross"></i>
								<div class="form-valid">									
								<input type="text" class="calculator-input" placeholder="Ширина" name="cargo_width">
									<span>Поле не заполнено</span>
								</div>

								<i class="calculator-cross"></i>
								<div class="form-valid">								
									<input type="text" class="calculator-input" placeholder="Высота" name="cargo_height">
									<span>Поле не заполнено</span>
								</div>

							</div>
						</div>


					</div>
					<div class="modal-info">
						<span class="text-warning">Параметры не соответствуют типу транспорта:</span> 
						<a href="/markup/calculate-page.php" class="btn btn-gray ">Изменить на странице расчета</a>
						<a href="/markup/calculate-page.php" class="btn btn-gray icon-back">Вернуться в калькулятор</a>

					</div>
					<div class="text-center mt-25">
					<button type="submit" class="btn btn-pink btn-calculator-pink">Подтвердить завку</button></div>
				</form>	
	</div>	
		<!-- форма Не готов подтвердить -->
	<div class="box-modal js-modal-notready">
		<div class="box-modal_close arcticmodal-close"><img src="assets/img/close.png"></div>

			<form class="form-notready js-form-validate">
				<h2 class="text-center">Не готов подтвердить</h2>
				<p class="title text-center mb-25">Выберите причину, по которой вы не готовы подтвердить заявку:</p>

				<div class="form-notready-wrap">
					<label class="calculate-tag-label">
						<input class="calculate-checkbox" type="checkbox" name="notready[]" value='notready1' required>
						<span class="calculate-checkbox-custom"></span>
						<span class="calculate-label">груз не готов </span>
					</label>
					<label class="calculate-tag-label">
						<input class="calculate-checkbox" type="checkbox" name="notready[]" value='notready2' required>
						<span class="calculate-checkbox-custom"></span>
						<span class="calculate-label">дорого</span>
					</label>
					<label class="calculate-tag-label">
						<input class="calculate-checkbox" type="checkbox" name="notready[]" value='notready3' required>
						<span class="calculate-checkbox-custom"></span>
						<span class="calculate-label">убрать услугу</span>
					</label>
					<label class="calculate-tag-label">
						<input class="calculate-checkbox" type="checkbox" name="notready[]" value='notready4' required>
						<span class="calculate-checkbox-custom"></span>
						<span class="calculate-label">добавить услугу</span>
					</label>
					<label class="calculate-tag-label">
						<input class="calculate-checkbox" type="checkbox" name="notready[]" value='notready5' required>
						<span class="calculate-checkbox-custom"></span>
						<span class="calculate-label">сроки не устраивают</span>
					</label>

					<p class="reason">Пожалуйста, укажите хотя бы одну причину<p>

					<p class="title mt-25 mb-25">Если вам необходима помощь в работе с системой или консультация 
свяжитесь с вашим менеджером:</p>

					<div class="form-valid">
						<input type="text" class="modal-input mid" placeholder="Имя" name="notready_nic">
						<span>Поле не заполнено</span>
					</div>
					<div class="form-valid">					
						<input type="text" class="modal-input mid" placeholder="Телефон" data-mask="+7 (999) 999-99-99"  aria-type='phone' name="notready_phone">
						<span>Поле не заполнено</span>
					</div>	
					<div class="form-valid">
						<input type="text" class="modal-input mid" placeholder="email" name="notready_email" >
						<span>Поле не заполнено</span>
					</div>	
				</div>
				<div class="text-center mt-25">
				<button type="submit" class="btn btn-pink btn-calculator-pink js-btn-notready">Сохранить</button></div>

			</form>
	</div>		

				
</div>
	
<?require_once($_SERVER['DOCUMENT_ROOT'].'/markup/footer.php');?>