$(function() {

	//стилизация форм

		$(".js-select").chosen({
			disable_search: true,
			width: false,
			inherit_select_classes: false,
		});	
		$(".js-select-param").chosen({
			disable_search: true,
			width: false,
			inherit_select_classes: true,
		});		

	// откроем окно Не готов подтвердить
	$('.js-open-notready-window').click(function() {
		$('.js-modal-notready').arcticmodal({
			//afterClose: resetForm			
		});	
	});
	// откроем окно с информацией о грузе
	$('.js-open-infocargo-window').click(function() {
		$('.js-modal-infocargo').arcticmodal({
			//afterClose: resetForm
		});	
	});
	// откроем окно с порядком работы
	$('.js-open-request-window').click(function() {
		$('.js-modal-request').arcticmodal();	
	});
	// откроем окно с оффертой	
	$('.js-open-offer-window').click(function() {
		$('.js-modal-request').arcticmodal('close');
		$('.js-modal-offer').arcticmodal({
			afterClose: function(){
				// вернём в исхоное состояние кнопку подтверждения
		  		$('.js-modal-request').find('.form-check-input').prop('checked', false);
		  		$('.js-modal-request').find('.btn').addClass('disabled');
			},
		});	
	});	
	// закроем окно после прочтения порядка работы и офферты
	$('.js-go-request').click(function() {
		$('.js-modal-offer').arcticmodal('close');	
	});	
	// запрет прочтения офферты без ознакомления с порядеком работы
	$('.js-modal-request').find('.form-check-input').on('click', function() {
		console.log('click');
		if ($(this).prop("checked")) {
			console.log('checked');
			$('.js-modal-request').find('.btn').removeClass('disabled');
		} else {
			$('.js-modal-request').find('.btn').addClass('disabled');
		}
	});

	// сортировка значений в таблице по клику
	var table =	$('.js-table-sort').DataTable({
		"sDom": '<"top"r>rt<"sort-table-bottom"p><"clear">',
		fnDrawCallback: function() {
	    	$("#dateCreateField").datetimepicker();
		},
		language: {
			"processing": "Подождите...",
			"search": "Поиск:",
			"lengthMenu": "Показать _MENU_ записей",
			"info": "Записи с _START_ до _END_ из _TOTAL_ записей",
			"infoEmpty": "Записи с 0 до 0 из 0 записей",
			"infoFiltered": "(отфильтровано из _MAX_ записей)",
			"infoPostFix": "",
			"loadingRecords": "Загрузка записей...",
			"zeroRecords": "Записи отсутствуют.",
			"emptyTable": "В таблице отсутствуют данные",
			"paginate": {
			"first": "Первая",
			"previous": "Предыдущая",
			"next": "Следующая",
			"last": "Последняя"
			}
		}
	});
	// делегировали поиск в поле НОМЕР РАСЧЁТА по первому столбцу
	$('#calcNumberField').keyup(function(){
	      table.column(0).search($(this).val()).draw() ;
	})
	// делегировали поиск в поле ДАТА СОЗДАНИЯ
	$('#dateCreateField').keyup(function(){
	      table.search($(this).val()).draw() ;
	})


	// календарик для поля ДАТА СОЗДАНИЯ
	$.datetimepicker.setLocale('ru');
    var dp = $('.js-datepicker').datetimepicker({
    	format: 'd.m.Y',
    	lang: 'ru',
    	timepicker: false,
    	onSelectDate: function(){
		  table.search($('#dateCreateField').val()).draw() ;
		},
	});

	$("input[aria-type='phone']").mask("+7 (999) 999-9999");
		
	$('.calcualtor-floating-button').hover(
		function()
		{
			var line_name = $(event.target).data('hover-target');
			if(line_name != undefined)
			{
				$('.calculator-dashed-table .table-row[data-trigger="'+line_name+'"]').addClass('hover');
			}
		},
		function()
		{
			$('.calculator-dashed-table .table-row').removeClass('hover');
		}
	);

	$('.calcualtor-floating-button i').hover(
		function()
		{
			var line_name = $(event.target).parent().data('hover-target');
			if(line_name != undefined)
			{
				$('.calculator-dashed-table .table-row[data-trigger="'+line_name+'"]').addClass('hover');
			}
		},
		function()
		{
			$('.calculator-dashed-table .table-row').removeClass('hover');
		}
	);

	$('.calcualtor-floating-button').on('click', function(event){
		var hoverTarget = $(event.target).data('hover-target');
		if(hoverTarget == undefined)
		{
			hoverTarget = $(event.target).parent().data('hover-target');
		}
		if(hoverTarget == $('.tab-content .active').attr('id'))
		{
			$('.calcualtor-floating-button.home').click();
			event.stopPropagation();
			return false;
		}
	});


	//---------   VALIDATOR   -------------
/*	  validForm();
	  var resetForm;
	  function validForm() {
	      var formValidateSet = {
	          rules: {
	              website: "required website",
	              email: "required email",
	              notready_email: "required email",	              
	              phone: "required phone",
	              notready_phone: "required phone",	              
	              nic:  "required nic",
	              notready_nic:  "required nic",
	              home:  "required number",
	              cargo_length:  "required number",	
	              cargo_width:  "required number",		              
	              cargo_height:  "required number",	
	              nic_enterprise:  "required nic",
	              street:  "required nic",	              
	              city:  "required nic",

	          },
	          errorPlacement: function(error, element) {}
	      }

	      if ($(".js-form-validate").length) {
	          $.validator.messages.required = '';

	          $.validator.addMethod('number', function(value, element) {
	             return this.optional(element) || /^[a-zA-Z0-9]{1,6}$/i.test(value);
	          }, '');

	          $.validator.addMethod('nic', function(value, element) {
	             return this.optional(element) || /^[_a-zA-Z0-9абвгдеёжзийклмнопрстуфхцчшщъыьэюяАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ ]{3,20}$/i.test(value);
	          }, '');

	          $.validator.addMethod('website', function(value, element) {
	              return this.optional(element) || /^((https?|ftp)\:\/\/)?([a-z0-9]{1})((\.[a-z0-9-])|([a-z0-9-]))*\.([a-z]{2,6})(\/?)$/i.test(value);
	          }, '');

	          $.validator.addMethod('email', function(value, element) {
	              return this.optional(element) || /^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/i.test(value);
	          }, '');

	          $.validator.addMethod('phone', function(value, element) {
	              return this.optional(element) || /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/i.test(value);
	          }, '');


			    $('.js-form-validate').each(function(index, el) {
			      formCallBack =  $(this).validate(formValidateSet);
			    });



	          $('.therm').find('input').on('click', function() {

	              if ($('.therm').find('input').prop("checked")) {
	                  $('.js-form-send').prop('disabled', false);
	              } else {
	                  $('.js-form-send').prop('disabled', 'disabled');
	              }

	          });

	          $('.js-form-validate .animated-input ').on('keyup blur', function() {

	              if ($('.js-form-validate').valid() && $('.therm').find('input').prop("checked") ) {
	                  $('.js-form-send').prop('disabled', false);

	              } else {
	                  $('.js-form-send').prop('disabled', 'disabled');
	              }
	              setTimeout(resetFormValid, 8000);

	          });
	          $('.js-form-validate .registration-form-footer').on('click', function() {
	              var formCallBack = $(".js-form-validate").valid();
	              setTimeout(resetFormValid, 3000);
	          });
	      }

	      	resetForm = function resetFormValid() {
	          $("i.error").remove();
	          $(".error").removeClass("error");
	          formCallBack.resetForm();
	      }

	      	$(".js-btn-notready").on("click", function(){
			    var m = $.map( $('.js-modal-notready').find(":checkbox:checked"), function(el){ return $(el).val(); });

			    if (m.length) {
			    	$(".js-form-validate").find('.reason').css('opacity','0');
			    	$('.js-btn-notready').prop('disabled', false);
			    }else{
			   		$(".js-form-validate").find('.reason').css('opacity','1')
			   		$('.js-btn-notready').prop('disabled', 'disabled');
			    }   
			});

			$('.js-modal-notready').find(":checkbox").on('click', function(){
				$(".js-btn-notready").trigger('click');
			})
	  }*/

});