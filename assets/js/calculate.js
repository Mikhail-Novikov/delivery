
var calcInputEl = {
  data: function () {
    return {
      base_weight: ''
    }
  }
}

var c = new Vue({
  el: '#app',
  mixins: [calcInputEl],
  data: {
    type_delivery: 'assemb',   
    base_places: '',
    base_length: '',
    base_width: '',
    base_volume: '',
    base_height: '',    
  }
});

goods.querySelectorAll('input').forEach(function (item) {
	c.$watch(item.name, function (newVal, oldVal) {
	 //console.log(app.base_weight, app.base_length, app.base_places);
		if (c.base_weight > 14000 || c.base_length > 20 || c.base_length * c.base_places > 20) {
	  	c.type_delivery = 'general';
		}else{
	  	c.type_delivery = 'assemb';			
		}	
	})
});

var m = new Vue({
  el: '#modal',
  data: {
    notready: '',
    notready_nic: '',
    notready_phone: '',
    notready_email: ''
  },
  validations:{
  	notready_nic:{
  		required: required 
  	}
  }
});


