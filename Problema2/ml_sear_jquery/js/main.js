'use strict';
(function($) {

  window.INC = {
    
    consumeWSML: function(){
        var $input = $('#myInput');
        var $condicion_usado = $('.condicion_usado');
        var $condicion_nuevo = $('.condicion_nuevo');
        var $tbody = $('#myTable').children('tbody');
        var $table = $tbody.length ? $tbody : $('#myTable');
        function consumeWSML(condition){
            var url_ws = "https://api.mercadolibre.com/sites/MLA/search?q="+$input.val();
            if(condition!=""){
              url_ws = "https://api.mercadolibre.com/sites/MLA/search?"+condition+"&q="+$input.val();
            }
            $.ajax({
                url: url_ws
            }).then(function(data) {

              $('table tr:not(:first-child)').remove();
              $.each(data.results, function(key, value) {
                $table.append("<tr><td><img src='"+value.thumbnail+"'></td><td>"+value.title+"</td><td>"+value.seller_address.country.name+"/"+value.seller_address.state.name+"</td><td>"+value.price+""+value.currency_id+"</td><td>"+value.condition+"</td></tr>");
                return key < 20;
              });
            });
        }

        $input.on('keyup',consumeWSML);
        $condicion_usado.on('click',function(){consumeWSML("condition=used")});
        $condicion_nuevo.on('click',function(){consumeWSML("condition=new")});

    },
    search: function() {
      var _self = this;
      _self.consumeWSML();

    }
  }
})(jQuery);