/* Modal Plaster */
jQuery(document).ready(function($) {
    $('.popup-content').magnificPopup({
        type: 'inline'
    });
});
var place=1;
var plaster=1;
var price_plaster1=parseFloat($('#price_plaster1').html());
var price_plaster2=parseFloat($('#price_plaster2').html());
var price_plaster3=parseFloat($('#price_plaster3').html());
var price_plaster4=parseFloat($('#price_plaster4').html());
var price_primer1=parseFloat($('#price_primer1').html());
var price_primer2=parseFloat($('#price_primer2').html());
var price_grid1=parseFloat($('#price_grid1').html());
var price_grid2=parseFloat($('#price_grid2').html());
var price_pharos=parseFloat($('#price_pharos').html());
var price_shim=parseFloat($('#price_shim').html());
var price_nail=parseFloat($('#price_nail').html());
var price_dirty=parseFloat($('#price_dirty').html());
var price_clear1=parseFloat($('#price_clear1').html());
var price_clear2=parseFloat($('#price_clear2').html());
var price_clear3=parseFloat($('#price_clear3').html());

$(function(){


  //type
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
  $('#return_to_font').click(function(){
    $('.effect__click').removeClass('flipped');
  });
  //calculator
  $('.block1_place_').change(function(){
    var value=parseFloat($('input[name=place]:checked').val());
    switch(value){
      case 1:
        place=1;
        $('#wall_primer_price').text(price_primer1);
        $('#roof_primer_price').text(price_primer1);
        $('#window_primer_price').text(price_primer1);
        $('#wall_grid_price').text(price_grid1);
        $('#wall_grid_consumeperone').text('30');

        $('#primer_wall_outlay').text('Грунт Knauf Миттельгрунд');
        $('#primer_roof_outlay').text('Грунт Knauf Миттельгрунд');
        $('#primer_window_outlay').text('Грунт Knauf Миттельгрунд');
        $('#primer_wall_outlay_price').text(price_primer1);
        $('#primer_roof_outlay_price').text(price_primer1);
        $('#primer_window_outlay_price').text(price_primer1);
        $('#work_outlay_wall_object_type').text('Старый фонд');
        $('#work_outlay_roof_object_type').text('Старый фонд');
        $('#work_outlay_window_object_type').text('Старый фонд');

        $('#fond_card').removeClass('forcards');
        $('#other_card').addClass('forcards');
        break;
      case 2:
        place=2;
        $('#wall_primer_price').text(price_primer1);
        $('#roof_primer_price').text(price_primer1);
        $('#window_primer_price').text(price_primer1);
        $('#wall_grid_price').text(price_grid2);
        $('#wall_grid_consumeperone').text('20');

        $('#primer_wall_outlay').text('Грунт Knauf Миттельгрунд');
        $('#primer_roof_outlay').text('Грунт Knauf Миттельгрунд');
        $('#primer_window_outlay').text('Грунт Knauf Миттельгрунд');
        $('#primer_wall_outlay_price').text(price_primer1);
        $('#primer_roof_outlay_price').text(price_primer1);
        $('#primer_window_outlay_price').text(price_primer1);
        $('#work_outlay_wall_object_type').text('Монолит');
        $('#work_outlay_roof_object_type').text('Монолит');
        $('#work_outlay_window_object_type').text('Монолит');

        $('#fond_card').addClass('forcards');
        $('#other_card').removeClass('forcards');
        break;
      case 3:
        place=3;
        $('#wall_primer_price').text(price_primer2);
        $('#roof_primer_price').text(price_primer2);
        $('#window_primer_price').text(price_primer2);
        $('#wall_grid_price').text(price_grid2);
        $('#wall_grid_consumeperone').text('20');

        $('#primer_wall_outlay').text('Грунт Крепс Праймер');
        $('#primer_roof_outlay').text('Грунт Крепс Праймер');
        $('#primer_window_outlay').text('Грунт Крепс Праймер');
        $('#primer_wall_outlay_price').text(price_primer2);
        $('#primer_roof_outlay_price').text(price_primer2);
        $('#primer_window_outlay_price').text(price_primer2);
        $('#work_outlay_wall_object_type').text('Газобетон');
        $('#work_outlay_roof_object_type').text('Газобетон');
        $('#work_outlay_window_object_type').text('Газобетон');

        $('#fond_card').addClass('forcards');
        $('#other_card').removeClass('forcards');
        break;
      case 4:
        place=4;
        $('#wall_primer_price').text(price_primer2);
        $('#roof_primer_price').text(price_primer2);
        $('#window_primer_price').text(price_primer2);
        $('#wall_grid_price').text(price_grid2);
        $('#wall_grid_consumeperone').text('20');

        $('#primer_wall_outlay').text('Грунт Крепс Праймер');
        $('#primer_roof_outlay').text('Грунт Крепс Праймер');
        $('#primer_window_outlay').text('Грунт Крепс Праймер');
        $('#primer_wall_outlay_price').text(price_primer2);
        $('#primer_roof_outlay_price').text(price_primer2);
        $('#primer_window_outlay_price').text(price_primer2);
        $('#work_outlay_wall_object_type').text('Шлакоблок');
        $('#work_outlay_roof_object_type').text('Шлакоблок');
        $('#work_outlay_window_object_type').text('Шлакоблок');

        $('#fond_card').addClass('forcards');
        $('#other_card').removeClass('forcards');
        break;
    }
    wall_primer();
    roof_primer();
    window_primer();
    wall_grid();
    recalc();
  });
  $('.radio_plaster').change(function(){
    var value =parseFloat($('input[name=plaster]:checked').val());
    switch(value){
      case 1:
        plaster=1;
        $('#wall_plaster_price').text(price_plaster1);
        $('#roof_plaster_price').text(price_plaster1);
        $('#window_plaster_price').text(price_plaster1);

        $('#plaster_wall_outlay').val(price_plaster1);
        $('#plaster_roof_outlay').val(price_plaster1);
        $('#plaster_window_outlay').val(price_plaster1);
        $('#plaster_wall_outlay_price').text(price_plaster1);
        $('#plaster_roof_outlay_price').text(price_plaster1);
        $('#plaster_window_outlay_price').text(price_plaster1);
        break;
      case 2:
        plaster=2;
        $('#wall_plaster_price').text(price_plaster2);
        $('#roof_plaster_price').text(price_plaster2);
        $('#window_plaster_price').text(price_plaster2);

        $('#plaster_wall_outlay').val(price_plaster2);
        $('#plaster_roof_outlay').val(price_plaster2);
        $('#plaster_window_outlay').val(price_plaster2);
        $('#plaster_wall_outlay_price').text(price_plaster2);
        $('#plaster_roof_outlay_price').text(price_plaster2);
        $('#plaster_window_outlay_price').text(price_plaster2);
        break;
      case 3:
        plaster=3;
        $('#wall_plaster_price').text(price_plaster3);
        $('#roof_plaster_price').text(price_plaster3);
        $('#window_plaster_price').text(price_plaster3);

        $('#plaster_wall_outlay').val(price_plaster3);
        $('#plaster_roof_outlay').val(price_plaster3);
        $('#plaster_window_outlay').val(price_plaster3);
        $('#plaster_wall_outlay_price').text(price_plaster3);
        $('#plaster_roof_outlay_price').text(price_plaster3);
        $('#plaster_window_outlay_price').text(price_plaster3);
        break;
      case 4:
        plaster=4;
        $('#wall_plaster_price').text(price_plaster4);
        $('#roof_plaster_price').text(price_plaster4);
        $('#window_plaster_price').text(price_plaster4);

        $('#plaster_wall_outlay').val(price_plaster4);
        $('#plaster_roof_outlay').val(price_plaster4);
        $('#plaster_window_outlay').val(price_plaster4);
        $('#plaster_wall_outlay_price').text(price_plaster4);
        $('#plaster_roof_outlay_price').text(price_plaster4);
        $('#plaster_window_outlay_price').text(price_plaster4);
        break;
    }
    wall_plaster();
    roof_plaster();
    window_plaster();
    info_but1();
    info_but2();
    info_but3();
  });
  //wall
  $('#wall_plaster_square').change(function(){
    if($('#wall_plaster_square').val()==='')
      $('#wall_plaster_square').val('0');
    $('#wall_primer_square').text($('#wall_plaster_square').val());
    $('#wall_grid_square').text($('#wall_plaster_square').val());
    $('.block4_workresult_wall').removeClass('block4_workresult_wall');
    $('.block3_material_wall').removeClass('block3_material_wall');
    wall_plaster();
    wall_primer();
    wall_grid();
    $('html, body').animate({
        scrollTop: $("#block3_material").offset().top
      }, 1000);
  });
  $('#wall_plaster_thickness').change(function(){
      wall_plaster();
  });
  //roof
  $('#roof_plaster_square').change(function(){
    if($('#roof_plaster_square').val()==='')
      $('#roof_plaster_square').val('0');

    $('#roof_primer_square').text($('#roof_plaster_square').val());

    $('.block4_workresult_roof').removeClass('block4_workresult_roof');
    $('.block3_material_roof').removeClass('block3_material_roof');

    roof_plaster();
    roof_primer();
    $('html, body').animate({
        scrollTop: $("#block3_material").offset().top
      }, 1000);
  });
  $('#roof_plaster_thickness').change(function(){
      roof_plaster();
  });
  //window
  $('#window_plaster_square').change(function(){
    if($('#window_plaster_square').val()==='')
      $('#window_plaster_square').val('0');

    $('#window_primer_square').text((parseFloat($('#window_plaster_square').val())*parseFloat($('#window_plaster_width').val())/1000).toFixed(1));

    $('.block4_workresult_window').removeClass('block4_workresult_window');
    $('.block3_material_window').removeClass('block3_material_window');

    window_plaster();
    window_primer();

    if($('#window_plaster_square').val()!='0' && $('#window_plaster_width').val()!='0'){
      $('html, body').animate({
          scrollTop: $("#block3_material").offset().top
        }, 1000);
      }
  });
  $('#window_plaster_thickness').change(function(){
    window_plaster();
  });
  $('#window_plaster_width').change(function(){
    if($('#window_plaster_square').val()==='')
      $('#window_plaster_square').val('0');
    $('#window_primer_square').text((parseFloat($('#window_plaster_square').val())*parseFloat($('#window_plaster_width').val())/1000).toFixed(1));
    window_plaster();
    window_primer();

    if($('#window_plaster_square').val()!='0' && $('#window_plaster_width').val()!='0'){
      $('html, body').animate({
          scrollTop: $("#block3_material").offset().top
        }, 1000);
      }
  });
  //material wall
  $('#wall_plaster_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#plaster_wall_outlay_weight').text($('#wall_plaster_weight').html());
    $('#plaster_wall_outlay_quantity').text($('#wall_plaster_quantity').html());
    $('#plaster_wall_outlay_sum').text($('#wall_plaster_sum').html());
    $('#pharos_wall_outlay_quantity').text(Math.ceil(Math.ceil($('#wall_plaster_square').val()/3)));
    $('#pharos_wall_outlay_sum').text((Math.ceil(Math.ceil($('#wall_plaster_square').val()/3)))*price_pharos);
    $('#pharos_wall_outlay_weight').text(((Math.ceil(Math.ceil($('#wall_plaster_square').val()/3)))*0.024).toFixed(2));
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
    if($('#wall_grid_price').html()===price_grid1)
      $('#grid_outlay').text('Сетка тканая оцинкованная');
    if($('#wall_grid_price').html()===price_grid2)
      $('#grid_outlay').text('Сетка стеклотканевая');
  });

  //material roof
  $('#roof_plaster_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#plaster_roof_outlay_weight').text($('#roof_plaster_weight').html());
    $('#plaster_roof_outlay_quantity').text($('#roof_plaster_quantity').html());
    $('#plaster_roof_outlay_sum').text($('#roof_plaster_sum').html());
    $('#pharos_roof_outlay_quantity').text(Math.ceil(Math.ceil($('#roof_plaster_square').val()/2)/20));
    $('#pharos_roof_outlay_sum').text((Math.ceil(Math.ceil($('#roof_plaster_square').val()/2)/20))*price_pharos);
    $('#pharos_roof_outlay_weight').text((Math.ceil(Math.ceil($('#roof_plaster_square').val()/2)/20))*0.48);
  });
  $('#roof_primer_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#primer_roof_outlay_weight').text($('#roof_primer_weight').html());
    $('#primer_roof_outlay_quantity').text($('#roof_primer_quantity').html());
    $('#primer_roof_outlay_sum').text($('#roof_primer_sum').html());
  });

  //material window
  $('#window_plaster_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var weight=parseFloat($('#window_plaster_weight').html());
    $('#plaster_window_outlay_weight').text(Math.ceil(weight));
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
    info_but1();
  });
  $('#plaster_roof_outlay').change(function(){
    $('#roof_plaster_price').text($('#plaster_roof_outlay').find(':selected').val());
    $('#plaster_roof_outlay_price').text($('#plaster_roof_outlay').find(':selected').val());
    roof_plaster();
    info_but2();
  });
  $('#plaster_window_outlay').change(function(){
    $('#window_plaster_price').text($('#plaster_window_outlay').find(':selected').val());
    $('#plaster_window_outlay_price').text($('#plaster_window_outlay').find(':selected').val());
    window_plaster();
    info_but3();
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
    recalc();
  });
  $('#roof_primer_square').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var square=parseFloat($('#roof_primer_square').html());
    $('#work_outlay_roof_square').text(square);
    $('#work_outlay_roof_sum').text(square*price_clear2);
  });
  $('#window_primer_square').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var square=parseFloat($('#window_primer_square').html());
    var square2=parseFloat($('#window_plaster_square').val());
    $('#work_outlay_window_square').text(square);
    $('#work_outlay_window_sum').text(square2*price_clear3);
  });
  $('#plaster_wall_outlay_price').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var price=parseFloat($('#plaster_wall_outlay_price').html())  ;
    switch(price){
      case price_plaster1: $('#work_outlay_wall_plaster').text('Knauf MP 75'); break;
      case price_plaster2: $('#work_outlay_wall_plaster').text('ВОЛМА-Актив'); break;
      case price_plaster3: $('#work_outlay_wall_plaster').text('Knauf UNTERPUTZ'); break;
      case price_plaster4: $('#work_outlay_wall_plaster').text('Plitonit T1+'); break;
    }
  });
  $('#plaster_roof_outlay_price').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var price=parseFloat($('#plaster_roof_outlay_price').html())  ;
    switch(price){
      case price_plaster1: $('#work_outlay_roof_plaster').text('Knauf MP 75'); break;
      case price_plaster2: $('#work_outlay_roof_plaster').text('ВОЛМА-Актив'); break;
      case price_plaster3: $('#work_outlay_roof_plaster').text('Knauf UNTERPUTZ'); break;
      case price_plaster4: $('#work_outlay_roof_plaster').text('Plitonit T1+'); break;
    }
  });
  $('#plaster_window_outlay_price').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var price=parseFloat($('#plaster_window_outlay_price').html())  ;
    switch(price){
      case price_plaster1: $('#work_outlay_window_plaster').text('Knauf MP 75'); break;
      case price_plaster2: $('#work_outlay_window_plaster').text('ВОЛМА-Актив'); break;
      case price_plaster3: $('#work_outlay_window_plaster').text('Knauf UNTERPUTZ'); break;
      case price_plaster4: $('#work_outlay_window_plaster').text('Plitonit T1+'); break;
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
    recalc();
  });
  $('.radio_type1').change(function(){
    recalc();
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
    $('#common_sum').text(parseFloat($('#common_sum_material').html())+parseFloat($('#common_sum_work').html()));
  });
  $('#common_sum_work').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#common_sum').text(parseFloat($('#common_sum_material').html())+parseFloat($('#common_sum_work').html()));
  });

  $('#cross_wall').click(function() {
    $('#wall_plaster_square').val('0');

    $('#block4_workresult_wall_id').addClass('block4_workresult_wall');
    $('#block3_material_wall_id').addClass('block3_material_wall');

    $('#wall_primer_square').text($('#wall_plaster_square').val());
    $('#wall_grid_square').text($('#wall_plaster_square').val());
    wall_plaster();
    wall_primer();
    wall_grid();
  });
  $('#cross_roof').click(function() {
    $('#roof_plaster_square').val('0');

    $('#block4_workresult_roof_id').addClass('block4_workresult_roof');
    $('#block3_material_roof_id').addClass('block3_material_roof');

    $('#roof_primer_square').text($('#roof_plaster_square').val());
    roof_plaster();
    roof_primer();
  });
  $('#cross_window').click(function() {
    $('#window_plaster_square').val('0');

    $('#block4_workresult_window_id').addClass('block4_workresult_window');
    $('#block3_material_window_id').addClass('block3_material_window');

    $('#window_primer_square').text($('#window_plaster_square').val());
    window_plaster();
    window_primer();
  });

  $('#common_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var sum=parseFloat($('#common_sum').html());
    if(sum===0){
      $('#block3_material').addClass('block3_material_dn');
      $('#block4_workresult').addClass('block3_material_dn');
      $('#block0_commonresult').addClass('block3_material_dn');
    }
    else{
      $('#block3_material').removeClass('block3_material_dn');
      $('#block4_workresult').removeClass('block3_material_dn');
      $('#block0_commonresult').removeClass('block3_material_dn');
    }
  });

  $('#primer_wall_outlay').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var value=$('#primer_wall_outlay').html();
    if(value==='Грунт Knauf Миттельгрунд'){
      $('#info_primer_knauf').removeClass('forcards');
      $('#info_primer_kreps').addClass('forcards');
    }
    if(value==='Грунт Крепс Праймер'){
      $('#info_primer_knauf').addClass('forcards');
      $('#info_primer_kreps').removeClass('forcards');
    }
  });
  $('#primer_roof_outlay').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var value=$('#primer_roof_outlay').html();
    if(value==='Грунт Knauf Миттельгрунд'){
      $('#info_primer_knauf1').removeClass('forcards');
      $('#info_primer_kreps1').addClass('forcards');
    }
    if(value==='Грунт Крепс Праймер'){
      $('#info_primer_knauf1').addClass('forcards');
      $('#info_primer_kreps1').removeClass('forcards');
    }
  });
  $('#primer_window_outlay').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var value=$('#primer_window_outlay').html();
    if(value==='Грунт Knauf Миттельгрунд'){
      $('#info_primer_knauf2').removeClass('forcards');
      $('#info_primer_kreps2').addClass('forcards');
    }
    if(value==='Грунт Крепс Праймер'){
      $('#info_primer_knauf2').addClass('forcards');
      $('#info_primer_kreps2').removeClass('forcards');
    }
  });
  $('#grid_outlay').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var value=$('#grid_outlay').html();
    if(value==='Сетка тканая оцинкованная'){
      $('#info_grid_zink').removeClass('forcards');
      $('#info_grid_glass').addClass('forcards');
    }
    if(value==='Сетка стеклотканевая'){
      $('#info_grid_zink').addClass('forcards');
      $('#info_grid_glass').removeClass('forcards');
    }
  });
  $('#wall_primer_square').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#plaster_wall_outlay_square').text($('#wall_primer_square').html());
    $('#pharos_wall_outlay_square').text($('#wall_primer_square').html())
  });
  $('#roof_primer_square').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#plaster_roof_outlay_square').text($('#roof_primer_square').html());
    $('#pharos_roof_outlay_square').text($('#roof_primer_square').html())
  });
  $('#window_primer_square').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#plaster_window_outlay_square').text((parseFloat($('#window_primer_square').html())).toFixed(1));
  });
  $('#wall_plaster_consume').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#plaster_wall_outlay_consume').text($('#wall_plaster_consume').html());
  });
  $('#roof_plaster_consume').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#plaster_roof_outlay_consume').text($('#roof_plaster_consume').html());
  });
  $('#window_plaster_consume').bind('DOMNodeInserted DOMNodeRemoved', function(){
    $('#plaster_window_outlay_consume').text($('#window_plaster_consume').html());
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
    var nail=(Math.ceil(square/30))*price_nail;
    var shim=(Math.ceil(square*5/100))*price_shim;
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
      $('#roof_plaster_quantity').text(Math.ceil(thickness*square/30));
      $('#roof_plaster_sum').text(priceperone * Math.ceil(thickness * square/30));
    }
  if(plaster===3 || plaster===4){
    $('#roof_plaster_quantity').text(Math.ceil(thickness*square/25));
    $('#roof_plaster_sum').text(priceperone * Math.ceil(thickness * square/25));
    }
}
function roof_primer(){
  var square = parseFloat($('#roof_plaster_square').val());
  var price=parseFloat($('#roof_primer_price').html());

  $('#roof_primer_consume').text((square*0.2).toFixed(2));
  $('#roof_primer_weight').text((square*0.2).toFixed(2));
  $('#roof_primer_quantity').text(Math.ceil(square*0.2/10));
  $('#roof_primer_sum').text(Math.ceil(price * Math.ceil(square*0.2/10)));
}

function window_plaster(){
  var square = (parseFloat($('#window_plaster_square').val())*parseFloat($('#window_plaster_width').val())/1000);
  var thickness = parseFloat($('#window_plaster_thickness').find(':selected').val());
  var priceperone = parseFloat($('#window_plaster_price').html());

  $('#window_plaster_consume').text(thickness);
  $('#window_plaster_weight').text((thickness*square).toFixed(1));
  if(plaster===1 || plaster===2){
      $('#window_plaster_quantity').text(Math.ceil(thickness*square/30));
      $('#window_plaster_sum').text(priceperone * Math.ceil(thickness * square/30));
    }
  if(plaster===3 || plaster===4){
    $('#window_plaster_quantity').text( Math.ceil(thickness*square/25));
    $('#window_plaster_sum').text(priceperone * Math.ceil(thickness * square/25));
    }
}
function window_primer(){
  var square = (parseFloat($('#window_plaster_square').val())*parseFloat($('#window_plaster_width').val())/1000);
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

function recalc(){
  if(place===1)
    var price=parseFloat($('input[name=types_fond]:checked').val());
  else
    var price = parseFloat($('input[name=types]:checked').val());
  var square=parseFloat($('#wall_primer_square').html());
  $('#work_outlay_wall_square').text(square);
  $('#work_outlay_wall_quantity').text(price);
  $('#work_outlay_wall_sum').text(square*price);
}

function info_but1(){
  var value=parseFloat($('#plaster_wall_outlay').find(':selected').val());
  switch(value){
    case price_plaster1:
      $('#info_plaster_knaufg').removeClass('forcards');
      $('#info_plaster_volma').addClass('forcards');
      $('#info_plaster_knaufc').addClass('forcards');
      $('#info_plaster_plitonit').addClass('forcards');
      break;
    case price_plaster2:
      $('#info_plaster_knaufg').addClass('forcards');
      $('#info_plaster_volma').removeClass('forcards');
      $('#info_plaster_knaufc').addClass('forcards');
      $('#info_plaster_plitonit').addClass('forcards');
      break;
    case price_plaster3:
      $('#info_plaster_knaufg').addClass('forcards');
      $('#info_plaster_volma').addClass('forcards');
      $('#info_plaster_knaufc').removeClass('forcards');
      $('#info_plaster_plitonit').addClass('forcards');
      break;
    case price_plaster4:
      $('#info_plaster_knaufg').addClass('forcards');
      $('#info_plaster_volma').addClass('forcards');
      $('#info_plaster_knaufc').addClass('forcards');
      $('#info_plaster_plitonit').removeClass('forcards');
      break;
  }
}
function info_but2(){
  var value=parseFloat($('#plaster_roof_outlay').find(':selected').val());
  switch(value){
    case price_plaster1:
      $('#info_plaster_knaufg1').removeClass('forcards');
      $('#info_plaster_volma1').addClass('forcards');
      $('#info_plaster_knaufc1').addClass('forcards');
      $('#info_plaster_plitonit1').addClass('forcards');
      break;
    case price_plaster2:
      $('#info_plaster_knaufg1').addClass('forcards');
      $('#info_plaster_volma1').removeClass('forcards');
      $('#info_plaster_knaufc1').addClass('forcards');
      $('#info_plaster_plitonit1').addClass('forcards');
      break;
    case price_plaster3:
      $('#info_plaster_knaufg1').addClass('forcards');
      $('#info_plaster_volma1').addClass('forcards');
      $('#info_plaster_knaufc1').removeClass('forcards');
      $('#info_plaster_plitonit1').addClass('forcards');
      break;
    case price_plaster4:
      $('#info_plaster_knaufg1').addClass('forcards');
      $('#info_plaster_volma1').addClass('forcards');
      $('#info_plaster_knaufc1').addClass('forcards');
      $('#info_plaster_plitonit1').removeClass('forcards');
      break;
  }
}
function info_but3(){
  var value=parseFloat($('#plaster_window_outlay').find(':selected').val());
  switch(value){
    case price_plaster1:
      $('#info_plaster_knaufg2').removeClass('forcards');
      $('#info_plaster_volma2').addClass('forcards');
      $('#info_plaster_knaufc2').addClass('forcards');
      $('#info_plaster_plitonit2').addClass('forcards');
      break;
    case price_plaster2:
      $('#info_plaster_knaufg2').addClass('forcards');
      $('#info_plaster_volma2').removeClass('forcards');
      $('#info_plaster_knaufc2').addClass('forcards');
      $('#info_plaster_plitonit2').addClass('forcards');
      break;
    case price_plaster3:
      $('#info_plaster_knaufg2').addClass('forcards');
      $('#info_plaster_volma2').addClass('forcards');
      $('#info_plaster_knaufc2').removeClass('forcards');
      $('#info_plaster_plitonit2').addClass('forcards');
      break;
    case price_plaster4:
      $('#info_plaster_knaufg2').addClass('forcards');
      $('#info_plaster_volma2').addClass('forcards');
      $('#info_plaster_knaufc2').addClass('forcards');
      $('#info_plaster_plitonit2').removeClass('forcards');
      break;
  }
}
