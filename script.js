/* Modal Plaster */
jQuery(document).ready(function($) {
    $('.popup-content').magnificPopup({
        type: 'inline'
    });
});
var place=1;
var plaster=1;


$(function(){
  (function() {
    var cards = document.querySelectorAll(".card.effect__click");
    for ( var i  = 0, len = cards.length; i < len; i++ ) {
      var card = cards[i];
      clickListener( card );
    }

    function clickListener(card) {
      card.addEventListener( "click", function() {
        var c = this.classList;
         c.add("flipped");
      });
    }
  })();


  $('.block1_place_').change(function(){
    var value=parseFloat($('input[name=place]:checked').val());
    switch(value){
      case 1:
        place=1;
        $('#wall_primer_price').text('2064');
        $('#roof_primer_price').text('2064');
        $('#window_primer_price').text('2064');
        $('#wall_grid_price').text('2460');
        $('#wall_grid_consumeperone').text('30');

        $('#primer_wall_outlay').text('грунтовка 1');
        $('#primer_roof_outlay').text('грунтовка 1');
        $('#primer_window_outlay').text('грунтовка 1');
        $('#primer_wall_outlay_price').text('2064');
        $('#primer_roof_outlay_price').text('2064');
        $('#primer_window_outlay_price').text('2064');
        $('#work_outlay_wall_object_type').text('Старый фонд');
        $('#work_outlay_roof_object_type').text('Старый фонд');
        $('#work_outlay_window_object_type').text('Старый фонд');
        break;
      case 2:
        place=2;
        $('#wall_primer_price').text('2064');
        $('#roof_primer_price').text('2064');
        $('#window_primer_price').text('2064');
        $('#wall_grid_price').text('943');
        $('#wall_grid_consumeperone').text('20');

        $('#primer_wall_outlay').text('грунтовка 1');
        $('#primer_roof_outlay').text('грунтовка 1');
        $('#primer_window_outlay').text('грунтовка 1');
        $('#primer_wall_outlay_price').text('2064');
        $('#primer_roof_outlay_price').text('2064');
        $('#primer_window_outlay_price').text('2064');
        $('#work_outlay_wall_object_type').text('Монолит');
        $('#work_outlay_roof_object_type').text('Монолит');
        $('#work_outlay_window_object_type').text('Монолит');
        break;
      case 3:
        place=3;
        $('#wall_primer_price').text('792');
        $('#roof_primer_price').text('792');
        $('#window_primer_price').text('792');
        $('#wall_grid_price').text('943');
        $('#wall_grid_consumeperone').text('20');

        $('#primer_wall_outlay').text('грунтовка 2');
        $('#primer_roof_outlay').text('грунтовка 2');
        $('#primer_window_outlay').text('грунтовка 2');
        $('#primer_wall_outlay_price').text('792');
        $('#primer_roof_outlay_price').text('792');
        $('#primer_window_outlay_price').text('792');
        $('#work_outlay_wall_object_type').text('Газобетон');
        $('#work_outlay_roof_object_type').text('Газобетон');
        $('#work_outlay_window_object_type').text('Газобетон');
        break;
      case 4:
        place=4;
        $('#wall_primer_price').text('792');
        $('#roof_primer_price').text('792');
        $('#window_primer_price').text('792');
        $('#wall_grid_price').text('943');
        $('#wall_grid_consumeperone').text('20');

        $('#primer_wall_outlay').text('грунтовка 2');
        $('#primer_roof_outlay').text('грунтовка 2');
        $('#primer_window_outlay').text('грунтовка 2');
        $('#primer_wall_outlay_price').text('792');
        $('#primer_roof_outlay_price').text('792');
        $('#primer_window_outlay_price').text('792');
        $('#work_outlay_wall_object_type').text('Шлакоблок');
        $('#work_outlay_roof_object_type').text('Шлакоблок');
        $('#work_outlay_window_object_type').text('Шлакоблок');
        break;
    }
    wall_primer();
    roof_primer();
    window_primer();
    wall_grid();
  });
  $('.radio_plaster').change(function(){
    var value =parseFloat($('input[name=plaster]:checked').val());
    switch(value){
      case 1:
        plaster=1;
        $('#wall_plaster_price').text('435');
        $('#roof_plaster_price').text('435');
        $('#window_plaster_price').text('435');

        $('#plaster_wall_outlay').val(435);
        $('#plaster_roof_outlay').val(435);
        $('#plaster_window_outlay').val(435);
        $('#plaster_wall_outlay_price').text('435');
        break;
      case 2:
        plaster=2;
        $('#wall_plaster_price').text('402');
        $('#roof_plaster_price').text('402');
        $('#window_plaster_price').text('402');

        $('#plaster_wall_outlay').val(402);
        $('#plaster_roof_outlay').val(402);
        $('#plaster_window_outlay').val(402);
        $('#plaster_wall_outlay_price').text('402');
        break;
      case 3:
        plaster=3;
        $('#wall_plaster_price').text('306');
        $('#roof_plaster_price').text('306');
        $('#window_plaster_price').text('306');

        $('#plaster_wall_outlay').val(306);
        $('#plaster_roof_outlay').val(306);
        $('#plaster_window_outlay').val(306);
        $('#plaster_wall_outlay_price').text('306');
        break;
      case 4:
        plaster=4;
        $('#wall_plaster_price').text('289');
        $('#roof_plaster_price').text('289');
        $('#window_plaster_price').text('289');

        $('#plaster_wall_outlay').val(289);
        $('#plaster_roof_outlay').val(289);
        $('#plaster_window_outlay').val(289);
        $('#plaster_wall_outlay_price').text('289');
        break;
    }
    wall_plaster();
    roof_plaster();
    window_plaster();
  });
  //wall
  $('#wall_plaster_square').change(function(){
    $('#wall_primer_square').text($('#wall_plaster_square').val());
    $('#wall_grid_square').text($('#wall_plaster_square').val());
    wall_plaster();
    wall_primer();
    wall_grid();
  });
  $('#wall_plaster_thickness').change(function(){
      wall_plaster();
  });
  //roof
  $('#roof_plaster_square').change(function(){
    $('#roof_primer_square').text($('#roof_plaster_square').val());
    roof_plaster();
    roof_primer();
  });
  $('#roof_plaster_thickness').change(function(){
      roof_plaster();
  });
  //window
  $('#window_plaster_square').change(function(){
    $('#window_primer_square').text($('#window_plaster_square').val());
    window_plaster();
    window_primer();
  });
  $('#window_plaster_thickness').change(function(){
    window_plaster();
  });

  //material wall
  $('#wall_plaster_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#plaster_wall_outlay_weight').text($('#wall_plaster_weight').html());
    $('#plaster_wall_outlay_quantity').text($('#wall_plaster_quantity').html());
    $('#plaster_wall_outlay_sum').text($('#wall_plaster_sum').html());
    $('#pharos_wall_outlay_quantity').text(Math.ceil(Math.ceil($('#wall_plaster_square').val()/2)/20));
    $('#pharos_wall_outlay_sum').text((Math.ceil(Math.ceil($('#wall_plaster_square').val()/2)/20))*116);
    $('#pharos_wall_outlay_weight').text((Math.ceil(Math.ceil($('#wall_plaster_square').val()/2)/20))*0.48);
  });
  $('#wall_primer_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#primer_wall_outlay_weight').text($('#wall_primer_weight').html());
    $('#primer_wall_outlay_quantity').text($('#wall_primer_quantity').html());
    $('#primer_wall_outlay_sum').text($('#wall_primer_sum').html());
  });
  $('#wall_grid_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#gris_outlay_weight').text($('#wall_grid_weight').html());
    $('#grid_outlay_quantity').text($('#wall_grid_quantity').html());
    $('#grid_outlay_sum').text($('#wall_grid_sum').html());
    $('#grid_outlay_price').text($('#wall_grid_price').html());
    if($('#wall_grid_price').html()==='2460')
      $('#grid_outlay').text('сетка оцинкованная');
    if($('#wall_grid_price').html()==='943')
      $('#grid_outlay').text('сетка стеклотканевая');
  });

  //material roof
  $('#roof_plaster_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#plaster_roof_outlay_weight').text($('#roof_plaster_weight').html());
    $('#plaster_roof_outlay_quantity').text($('#roof_plaster_quantity').html());
    $('#plaster_roof_outlay_sum').text($('#roof_plaster_sum').html());
    $('#pharos_roof_outlay_quantity').text(Math.ceil(Math.ceil($('#roof_plaster_square').val()/2)/20));
    $('#pharos_roof_outlay_sum').text((Math.ceil(Math.ceil($('#roof_plaster_square').val()/2)/20))*116);
    $('#pharos_roof_outlay_weight').text((Math.ceil(Math.ceil($('#roof_plaster_square').val()/2)/20))*0.48);
  });
  $('#roof_primer_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#primer_roof_outlay_weight').text($('#roof_primer_weight').html());
    $('#primer_roof_outlay_quantity').text($('#roof_primer_quantity').html());
    $('#primer_roof_outlay_sum').text($('#roof_primer_sum').html());
  });

  //material window
  $('#window_plaster_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#plaster_window_outlay_weight').text($('#window_plaster_weight').html());
    $('#plaster_window_outlay_quantity').text($('#window_plaster_quantity').html());
    $('#plaster_window_outlay_sum').text($('#window_plaster_sum').html());
  });
  $('#window_primer_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#primer_window_outlay_weight').text($('#window_primer_weight').html());
    $('#primer_window_outlay_quantity').text($('#window_primer_quantity').html());
    $('#primer_window_outlay_sum').text($('#window_primer_sum').html());
  });

  //material plaster change
  $('#plaster_wall_outlay').change(function(){
    $('#wall_plaster_price').text($('#plaster_wall_outlay').find(':selected').val());
    $('#plaster_wall_outlay_price').text($('#plaster_wall_outlay').find(':selected').val());
    wall_plaster();
  });
  $('#plaster_roof_outlay').change(function(){
    $('#roof_plaster_price').text($('#plaster_roof_outlay').find(':selected').val());
    $('#plaster_roof_outlay_price').text($('#plaster_roof_outlay').find(':selected').val());
    roof_plaster();
  });
  $('#plaster_window_outlay').change(function(){
    $('#window_plaster_price').text($('#plaster_window_outlay').find(':selected').val());
    $('#plaster_window_outlay_price').text($('#plaster_window_outlay').find(':selected').val());
    window_plaster();
  });
  //material sum
  $('#plaster_wall_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    materilares();
  });
  $('#primer_wall_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    materilares();
  });
  $('#pharos_wall_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    materilares();
  });
  $('#grid_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    materilares();
  });

  $('#plaster_roof_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    materilares();
  });
  $('#primer_roof_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    materilares();
  });
  $('#pharos_roof_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    materilares();
  });

  $('#plaster_window_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    materilares();
  });
  $('#primer_window_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    materilares();
  });
  //worksum
  $('#wall_primer_square').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var price = parseFloat($('input[name=types]:checked').val());
    var square=parseFloat($('#wall_primer_square').html());
    $('#work_outlay_wall_square').text(square);
    $('#work_outlay_wall_quantity').text(price);
    $('#work_outlay_wall_sum').text(square*price);
  });
  $('#roof_primer_square').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var square=parseFloat($('#roof_primer_square').html());
    $('#work_outlay_roof_square').text(square);
    $('#work_outlay_roof_sum').text(square*450);
  });
  $('#window_primer_square').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var square=parseFloat($('#window_primer_square').html());
    $('#work_outlay_window_square').text(square);
    $('#work_outlay_window_sum').text(square*250);
  });
  $('#plaster_wall_outlay_price').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var price=parseFloat($('#plaster_wall_outlay_price').html())  ;
    switch(price){
      case 435: $('#work_outlay_wall_plaster').text('штукатурка 1'); break;
      case 500: $('#work_outlay_wall_plaster').text('штукатурка 2'); break;
      case 550: $('#work_outlay_wall_plaster').text('штукатурка 3'); break;
      case 560: $('#work_outlay_wall_plaster').text('штукатурка 4'); break;
    }
  });
  $('#plaster_roof_outlay_price').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var price=parseFloat($('#plaster_roof_outlay_price').html())  ;
    switch(price){
      case 435: $('#work_outlay_roof_plaster').text('штукатурка 1'); break;
      case 500: $('#work_outlay_roof_plaster').text('штукатурка 2'); break;
      case 550: $('#work_outlay_roof_plaster').text('штукатурка 3'); break;
      case 560: $('#work_outlay_roof_plaster').text('штукатурка 4'); break;
    }
  });
  $('#plaster_window_outlay_price').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var price=parseFloat($('#plaster_window_outlay_price').html())  ;
    switch(price){
      case 435: $('#work_outlay_window_plaster').text('штукатурка 1'); break;
      case 500: $('#work_outlay_window_plaster').text('штукатурка 2'); break;
      case 550: $('#work_outlay_window_plaster').text('штукатурка 3'); break;
      case 560: $('#work_outlay_window_plaster').text('штукатурка 4'); break;
    }
  });
  $('#wall_plaster_consume').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var thickness = parseFloat($('#wall_plaster_consume').html());
    $('#work_outlay_wall_thickness').text(thickness);
  });
  $('#roof_plaster_consume').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var thickness = parseFloat($('#roof_plaster_consume').html());
    $('#work_outlay_roof_thickness').text(thickness);
  });
  $('#window_plaster_consume').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var thickness = parseFloat($('#window_plaster_consume').html());
    $('#work_outlay_window_thickness').text(thickness);
  });
  $('.radio_type').change(function(){
    var price = parseFloat($('input[name=types]:checked').val());
    var square=parseFloat($('#wall_primer_square').html());
    $('#work_outlay_wall_quantity').text(price);
    $('#work_outlay_wall_sum').text(square*price);
  });
  $('#work_outlay_wall_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    sale1();
    var sale=parseFloat($('#work_outlay_sale_percent').html());
    var sum1=parseFloat($('#work_outlay_wall_sum').html());
    var sum2=parseFloat($('#work_outlay_roof_sum').html());
    var sum3=parseFloat($('#work_outlay_window_sum').html());
    var sumsale=(sum1+sum2+sum3)*sale/100;
    $('#work_outlay_sale_sum').text(sumsale);
    $('#work_outlay_common_sum').text((sum1+sum2+sum3)-sumsale);
  });
  $('#work_outlay_roof_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    sale1();
    var sale=parseFloat($('#work_outlay_sale_percent').html());
    var sum1=parseFloat($('#work_outlay_wall_sum').html());
    var sum2=parseFloat($('#work_outlay_roof_sum').html());
    var sum3=parseFloat($('#work_outlay_window_sum').html());
    var sumsale=(sum1+sum2+sum3)*sale/100;
    $('#work_outlay_sale_sum').text(sumsale);
    $('#work_outlay_common_sum').text((sum1+sum2+sum3)-sumsale);
  });
  $('#work_outlay_window_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    sale1();
    var sale=parseFloat($('#work_outlay_sale_percent').html());
    var sum1=parseFloat($('#work_outlay_wall_sum').html());
    var sum2=parseFloat($('#work_outlay_roof_sum').html());
    var sum3=parseFloat($('#work_outlay_window_sum').html());
    var sumsale=(sum1+sum2+sum3)*sale/100;
    $('#work_outlay_sale_sum').text(sumsale);
    $('#work_outlay_common_sum').text((sum1+sum2+sum3)-sumsale);
  });
  $('#work_outlay_wall_square').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var square=parseFloat( $('#wall_primer_square').html() )+
              parseFloat( $('#roof_primer_square').html() )+
              parseFloat( $('#window_primer_square').html() );
    $('#common_sum_square').text(square)
  });
  $('#work_outlay_roof_square').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var square=parseFloat( $('#wall_primer_square').html() )+
              parseFloat( $('#roof_primer_square').html() )+
              parseFloat( $('#window_primer_square').html() );
    $('#common_sum_square').text(square)
  });
  $('#work_outlay_window_square').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var square=parseFloat( $('#wall_primer_square').html() )+
              parseFloat( $('#roof_primer_square').html() )+
              parseFloat( $('#window_primer_square').html() );
    $('#common_sum_square').text(square)
  });
  $('#work_outlay_sale_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#common_sum_sale_').text($('#work_outlay_sale_sum').html());
  });
  $('#material_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#common_sum_material').text($('#material_sum').html());
  });
  $('#work_outlay_common_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#common_sum_work').text($('#work_outlay_common_sum').html());
  });
  $('#common_sum_material').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#common_sum').text(parseFloat($('#common_sum_material').html())+parseFloat($('#common_sum_material').html()));
  });
  $('#common_sum_work').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#common_sum').text(parseFloat($('#common_sum_material').html())+parseFloat($('#common_sum_material').html()));
  });
})
function wall_plaster(){
  var square = parseFloat($('#wall_plaster_square').val());
  var thickness = parseFloat($('#wall_plaster_thickness').find(':selected').val());
  var priceperone = parseFloat($('#wall_plaster_price').html());

  $('#wall_plaster_consume').text(thickness);
  $('#wall_plaster_weight').text(thickness*square);
  if(plaster===1 || plaster===2){
      $('#wall_plaster_quantity').text( Math.ceil(thickness*square/30));
      $('#wall_plaster_sum').text(priceperone * Math.ceil(thickness * square/30));
    }
  if(plaster===3 || plaster===4){
    $('#wall_plaster_quantity').text( Math.ceil(thickness*square/25));
    $('#wall_plaster_sum').text(priceperone * Math.ceil(thickness * square/25));
    }
}
function wall_primer(){
  var square = parseFloat($('#wall_plaster_square').val());
  var price=parseFloat($('#wall_primer_price').html());

  $('#wall_primer_consume').text((square*0.2).toFixed(2));
  $('#wall_primer_weight').text((square*0.2).toFixed(2));
  $('#wall_primer_quantity').text(Math.ceil(square*0.2/10));
  $('#wall_primer_sum').text(Math.ceil(price*Math.ceil(square*0.2/10)));
}
function wall_grid(){
  var square = parseFloat($('#wall_plaster_square').val());
  var price=  $('#wall_grid_price').html();
  if(place===1){
    $('#wall_grid_consume').text('30');
    $('#wall_grid_weight').text((Math.ceil(square/30))*10);
    $('#wall_grid_quantity').text(Math.ceil(square/30));
    var nail=(Math.ceil(square/30))*600;
    var shim=(Math.ceil(square*5/100))*199;
    $('#wall_grid_sum').text((Math.ceil(square/30))*price+nail+shim);
  }
  if(place===2 || place===3 || place===3){
    $('#wall_grid_consume').text('20');
    $('#wall_grid_quantity').text(Math.ceil(square/100));
    $('#wall_grid_weight').text((Math.ceil(square/100))*2.4);
    $('#wall_grid_sum').text((Math.ceil(square/100))*price);
  }
}

function roof_plaster(){
  var square = parseFloat($('#roof_plaster_square').val());
  var thickness = parseFloat($('#roof_plaster_thickness').find(':selected').val());
  var priceperone = parseFloat($('#roof_plaster_price').html());

  $('#roof_plaster_consume').text(thickness);
  $('#roof_plaster_weight').text(thickness*square);
  if(plaster===1 || plaster===2){
      $('#roof_plaster_quantity').text( Math.ceil(thickness*square/30));
      $('#roof_plaster_sum').text(priceperone * Math.ceil(thickness * square/30));
    }
  if(plaster===3 || plaster===4){
    $('#roof_plaster_quantity').text( Math.ceil(thickness*square/25));
    $('#roof_plaster_sum').text(priceperone * Math.ceil(thickness * square/25));
    }
}
function roof_primer(){
  var square = parseFloat($('#roof_plaster_square').val());
  var price=parseFloat($('#roof_primer_price').html());

  $('#roof_primer_consume').text((square*0.2).toFixed(2));
  $('#roof_primer_weight').text((square*0.2).toFixed(2));
  $('#roof_primer_quantity').text(Math.ceil(square*0.2/10));
  $('#roof_primer_sum').text(Math.ceil(price*Math.ceil(square*0.2/10)));
}

function window_plaster(){
  var square = parseFloat($('#window_plaster_square').val());
  var thickness = parseFloat($('#window_plaster_thickness').find(':selected').val());
  var priceperone = parseFloat($('#window_plaster_price').html());

  $('#window_plaster_consume').text(thickness);
  $('#window_plaster_weight').text(thickness*square);
  if(plaster===1 || plaster===2){
      $('#window_plaster_quantity').text( Math.ceil(thickness*square/30));
      $('#window_plaster_sum').text(priceperone * Math.ceil(thickness * square/30));
    }
  if(plaster===3 || plaster===4){
    $('#window_plaster_quantity').text( Math.ceil(thickness*square/25));
    $('#window_plaster_sum').text(priceperone * Math.ceil(thickness * square/25));
    }
}
function window_primer(){
  var square = parseFloat($('#window_plaster_square').val());
  var price=parseFloat($('#window_primer_price').html());

  $('#window_primer_consume').text((square*0.2).toFixed(2));
  $('#window_primer_weight').text((square*0.2).toFixed(2));
  $('#window_primer_quantity').text(Math.ceil(square*0.2/10));
  $('#window_primer_sum').text(Math.ceil(price*Math.ceil(square*0.2/10)));
}

function materilares(){
  var wall=parseFloat($('#plaster_wall_outlay_sum').html())+parseFloat($('#primer_wall_outlay_sum').html())+parseFloat($('#pharos_wall_outlay_sum').html())+parseFloat($('#grid_outlay_sum').html());
  var roof=parseFloat($('#plaster_roof_outlay_sum').html())+parseFloat($('#primer_roof_outlay_sum').html())+parseFloat($('#pharos_roof_outlay_sum').html());
  var window_=parseFloat($('#plaster_window_outlay_sum').html())+parseFloat($('#primer_window_outlay_sum').html());
  $('#material_sum').text(wall+roof+window_);
}

function sale1(){
  var square=parseFloat( $('#wall_primer_square').html() )+
            parseFloat( $('#roof_primer_square').html() )+
            parseFloat( $('#window_primer_square').html() );
  if(square<200){
    $('#work_outlay_sale_percent').text('0');
  }
  if(square>=200 && square<300){
    $('#work_outlay_sale_percent').text('2');
  }
  if(square>=300 && square<400){
   $('#work_outlay_sale_percent').text('3');
  }
  if(square>=400 && square<700){
   $('#work_outlay_sale_percent').text('4');
  }
  if(square>=700 && square<1000){
   $('#work_outlay_sale_percent').text('6');
  }
  if(square>=1000 && square<1400){
   $('#work_outlay_sale_percent').text('8');
  }
  if(square>=1400){
   $('#work_outlay_sale_percent').text('10');
  }
}
