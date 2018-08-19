/*$(function() {

	var form = $('.form-content'),
		dType = form.find('input[name="type_delivery"]'),
		gBaseWeight = form.find('input[name="base_weight"]'),
		gBasePlaces = form.find('input[name="base_places"]'),
		gBaseVolume = form.find('input[name="base_volume"]'),
		gBaseLength = form.find('input[name="base_length"]'),
		gBaseWidth = form.find('input[name="base_width"]'),
		gBaseHeight = form.find('input[name="base_height"]'),
		gPropPack = form.find('select[name="prop_pack"]'),
		gPropGoods = form.find('select[name="prop_goods"]'),
		gPropCurrency = form.find('select[name="prop_currency"]');



	form.find('input').on('click, keyup, change, focus', function(){

		if ( gBaseLength.val() > 20 || gBaseLength.val() * gBasePlaces.val() > 20 || gBaseWeight.val() > 14000 ) {
			dType.filter('[value=general]').prop('checked', true);
			console.log(dType)
		}else{
			dType.filter('[value=assemb]').prop('checked', true);
		}		

	})

});*/



var app = new Vue({
  el: '#app',
  data: {
    type_delivery: 'assemb',
    base_weight: '',
    base_places:'',
    base_length:''
  }
});

goods.querySelectorAll('input').forEach(function (item) {
	app.$watch(item.name, function (newVal, oldVal) {
	 //console.log(app.base_weight, app.base_length, app.base_places);
		if (app.base_weight > 14000 || app.base_length > 20 || app.base_length * app.base_places > 20) {
	  	app.type_delivery = 'general';
		}else{
	  	app.type_delivery = 'assemb';			
		}	
	})
});




