<?
global $arParams;
$arParams['TITLE'] = 'Регистрация';
$arParams['HIDE_AUTH'] = true;
?>

<?require_once($_SERVER['DOCUMENT_ROOT'].'/markup/header.php');?>
<div class="content without-background">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h2>Регистрация</h2>
				<form action="" class="js-form-validate">
					<div class="registration-form ">
						<div class="animated-input success">
							  <input type="text" name="companyName" class="question" id="companyName" required autocomplete="off" value="Piksel" />
							  <label for="companyName"><span>Наименование компании</span></label>
						</div>
						<div class="animated-input">
							  <input type="text" name="website" class="question" id="website" required autocomplete="off" />
							  <label for="website"><span>Сайт</span></label>
						</div>
						<div class="animated-input">
							  <input type="text" name="email" class="question" id="email" required autocomplete="off" />
							  <label for="email"><span>E-mail</span></label>
						</div>
						<div class="animated-input">
							  <input type="text" name="phone" aria-type='phone' class="question" id="phone" required autocomplete="off" data-mask="+7 (999) 999-99-99" />
							  <label for="phone"><span>Телефон</span></label>
						</div>
						<div class="animated-input">
							  <input type="text" name="secondName" class="question" id="secondName" required autocomplete="off" />
							  <label for="secondName"><span>Фамилия</span></label>
						</div>
						<div class="animated-input">
							  <input type="text" name="firstName" class="question" id="firstName" required autocomplete="off" />
							  <label for="firstName"><span>Имя</span></label>
						</div>
						<div class="animated-input">
							  <input type="text" name="patronymicName" class="question" id="patronymicName" required autocomplete="off" />
							  <label for="patronymicName"><span>Отчество</span></label>
						</div>

						<div class="therm custom-control custom-checkbox mr-sm-2">
							<input id="therm" type="checkbox" name="therm"  class="custom-control-input" id="customControlAutosizing" checked>
							<a href="https://free-lines.ru/include/personal-information.php" target="_blank"><label class="custom-control-label" >Согласие на обработку персональной <br> информации</label></a>
						</div>

						<div class="registration-form-footer">
							<input type="submit" value="Зарегистрироваться" class="btn btn-pink js-form-send" disabled>
							<div class="registration-form-footer-links">
								<a href="#" class="registration-form-gray-link">У Вас уже есть аккаунт?</a>
								<a href="#" class="registration-form-pink-link">Войти</a>
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-7 registration-wide-image">
				<div class="registration-floating-block">Создайте учетную запись<br>и начните рассчитывать<br>Ваши услуги</div>
			</div>
		</div>
	</div>
</div>
<?require_once($_SERVER['DOCUMENT_ROOT'].'/markup/footer.php');?>