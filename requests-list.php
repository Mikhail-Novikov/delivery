<?
global $arParams;
$arParams['TITLE'] = 'Заявки список';
?>

<?require_once($_SERVER['DOCUMENT_ROOT'].'/markup/header.php');?>
<div class="pink-header-line">
	<div class="container">
		<h1>Заявки список:</h1>
		<ul class="nav nav-tabs">
			<li><a href="personal-data.php">Персональные данные</a></li>
			<li><a href="calculations-list.php">Расчеты</a></li>
			<li class="active"><a href="request-page.php">Заявки</a></li>
			<li><a href="calculate-page.php">Рассчитать перевозку</a></li>
		</ul>
	</div>
</div>
<div class="container">
	<div class="filter-block">
		<form action="/">
			<div class="row">
				<div class="col-md-6">
					<select class="calculator-select">
						<option selected disabled>Страна-Откуда </option>
						<option value="1">Значение 1</option>
						<option value="2">Значение 2</option>
						<option value="1">Значение 3</option>
						<option value="2">Значение 4</option>				
					</select>
				</div>
				<div class="col-md-6">
					<select class="calculator-select">
						<option selected disabled>Страна-Куда</option>
						<option value="1">Значение 1</option>
						<option value="2">Значение 2</option>
						<option value="1">Значение 3</option>
						<option value="2">Значение 4</option>				
					</select>
				</div>				
				<div class="col-md-6">
					<select class="calculator-select">
						<option selected disabled>Город-Откуда </option>
						<option value="1">Значение 1</option>
						<option value="2">Значение 2</option>
						<option value="1">Значение 3</option>
						<option value="2">Значение 4</option>				
					</select>
				</div>					
				<div class="col-md-6">
					<select class="calculator-select">
						<option selected disabled>Город-Куда</option>
						<option value="1">Значение 1</option>
						<option value="2">Значение 2</option>
						<option value="1">Значение 3</option>
						<option value="2">Значение 4</option>				
					</select>
				</div>
				<div class="col-xs-12 text-right text-sm-center ">
					<input type="text" id="dateCreateField" class="filter-input js-datepicker" placeholder="Дата создания">
					<input type="text" id="calcNumberField" class="filter-input" placeholder="Номер расчета">
					<input type="submit" value="Поиск" class="btn btn-yellow mt-sm-25 ml-sm-0">					

				</div>
			</div>
		</form>
	</div>
	<h2 class="with-line transparent"><span>Список заявок</span></h2>
</div>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="table-responsive">
					<div class="stripped-table red-cells-on-hover" style="min-width: 940px;">

						<table class="js-table-sort table-responsive " style="width: 100%;" >
							<thead>
								<tr class="table-row table-header-row" style="margin-top: 20px;">
							
									<th style="width: 10%" class="table-heading">Номер рассчета</th>
									<th style="width: 11%" class="table-heading">Суммарная стоимость</th>
									<th style="width: 9%;" class="table-heading">Откуда</th>
									<th style="width: 8%;" class="table-heading">Куда</th>
									<th style="width: 8%;" class="table-heading">Товар</th>
									<th style="width: 10%" class="table-heading">Тип<br>доставки</th>
									<th style="width: 8%;" class="table-heading">Вес</th>
									<th style="width: 8%;" class="table-heading">Объем</th>
									<th style="width: 13%;" class="table-heading">Идентификатор</th>
									<th style="width: 10%" class="table-heading">Дата создания</th>
								
								</tr>
							</thead>
							<tbody class="table-body gray-table-container">


								<?for($i = 0; $i < 20; $i++){?>
									<tr class="table-row">
										<td style="width: 10%" class="table-cell">
										<p><?=$i?></p></td>
										<td style="width: 11%" class="table-cell"><p>1</p></td>
										<td style="width: 9%" class="table-cell"><p>Москва</p></td>
										<td style="width: 8%" class="table-cell"><p>Милан</p></td>
										<td style="width: 8%" class="table-cell"><p><?=$i?></p></td>
										<td style="width: 10%" class="table-cell"><p>Авиа</p></td>
										<td style="width: 8%" class="table-cell"><p>45</p></td>
										<td style="width: 8%" class="table-cell"><p>3</p></td>
										<td style="width: 13%" class="table-cell"><p>3</p></td>
										<td style="width: 10%" class="table-cell"><p>21.06.2018</p></td>
									</tr>
								<? } ?>
							</tbody>
						</table>


					</div>
				</div>
				<div class="row">

					<div class="col-md-6 text-center text-md-left">
						<a href="javascript:;" class="btn-excel">Выгрузить в excel</a>
					</div>					
					<div class="col-sm-6 table-footer-button mt-25">
						<a href="javascript:;" class="btn btn-pink">Рассчитать перевозку</a>
					</div>									

				</div>			
			</div>
		</div>
	</div>
</div>

<?require_once($_SERVER['DOCUMENT_ROOT'].'/markup/footer.php');?>