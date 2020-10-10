/* Modal Plaster */
jQuery(document).ready(function($) {
    $('.popup-content').magnificPopup({
        type: 'inline'
    });
});

var VesPaketa=30;
// wall
function wall_plaster(){
  var thickness = $('#wall_plaster_thickness').find(':selected').val();
  var square = document.getElementById("wall_plaster_square").value;
  document.getElementById("wall_plaster_consume").innerHTML = thickness;
  document.getElementById("wall_plaster_weight").innerHTML = thickness*square;
  document.getElementById("wall_plaster_quantity").innerHTML = thickness*square/VesPaketa;
  var priceperone=document.getElementById("wall_plaster_price").innerHTML;
  document.getElementById("wall_plaster_sum").innerHTML =  priceperone * thickness * square/VesPaketa;
  document.getElementById("plaster_wall_outlay_quantity").innerHTML =thickness*square/VesPaketa;
  document.getElementById("plaster_wall_outlay_sum").innerHTML = priceperone * thickness * square/VesPaketa;
  material_sum();
}

function wall_primer(){
  var square=document.getElementById("wall_primer_square").innerHTML;
  var consumeperone=document.getElementById("wall_primer_consumeperone").innerHTML;
  var price=document.getElementById("wall_primer_price").innerHTML;
  document.getElementById("wall_primer_consume").innerHTML =square*consumeperone;
  document.getElementById("wall_primer_weight").innerHTML=square*consumeperone;
  document.getElementById("wall_primer_quantity").innerHTML=square*consumeperone/10;
  document.getElementById("wall_primer_sum").innerHTML=price*square*consumeperone/10;

  document.getElementById("primer_wall_outlay_quantity").innerHTML =square*consumeperone/10;
  document.getElementById("primer_wall_outlay_sum").innerHTML = price*square*consumeperone/10;
}

function grid(){
  var square = document.getElementById("wall_grid_square").innerHTML;
  var price3=$('input[name=grid]:checked').val();
  if(price3=='1'){
    document.getElementById("wall_grid_price").innerHTML = "943";
    document.getElementById("wall_grid_consumeperone").innerHTML = "1x20";
    if(square<200 && square>0)
      document.getElementById("wall_grid_consume").innerHTML = "1";
    if(square>=200 && square<=300)
      document.getElementById("wall_grid_consume").innerHTML = "2";
    if(square>300)
      document.getElementById("wall_grid_consume").innerHTML = "3";
    document.getElementById("wall_grid_weight").innerHTML = document.getElementById("wall_grid_consume").innerHTML*2.4;
    document.getElementById("wall_grid_quantity").innerHTML = document.getElementById("wall_grid_consume").innerHTML;
    document.getElementById("wall_grid_sum").innerHTML = document.getElementById("wall_grid_price").innerHTML*document.getElementById("wall_grid_quantity").innerHTML;

    document.getElementById("grid_outlay_quantity").innerHTML =document.getElementById("wall_grid_quantity").innerHTML;
    document.getElementById("grid_outlay_price").innerHTML = "943";
    document.getElementById("grid_outlay_sum").innerHTML =document.getElementById("wall_grid_sum").innerHTML;
  }
  else{
    document.getElementById("wall_grid_price").innerHTML = "2460";
    document.getElementById("wall_grid_consumeperone").innerHTML = "1x30";
    document.getElementById("wall_grid_consume").innerHTML = square/30;
    document.getElementById("wall_grid_weight").innerHTML = document.getElementById("wall_grid_consume").innerHTML*10;
    document.getElementById("wall_grid_quantity").innerHTML = document.getElementById("wall_grid_consume").innerHTML;
    document.getElementById("wall_grid_sum").innerHTML = document.getElementById("wall_grid_price").innerHTML*document.getElementById("wall_grid_quantity").innerHTML;

    document.getElementById("grid_outlay_quantity").innerHTML =document.getElementById("wall_grid_quantity").innerHTML;
    document.getElementById("grid_outlay_price").innerHTML = "2460";
    document.getElementById("grid_outlay_sum").innerHTML =document.getElementById("wall_grid_sum").innerHTML;
  }
}

// roof

function roof_plaster(){
  var thickness = $('#roof_plaster_thickness').find(':selected').val();
  var square=document.getElementById("roof_plaster_square").value;
  document.getElementById("roof_plaster_consume").innerHTML = thickness;
  document.getElementById("roof_plaster_weight").innerHTML = thickness*square;
  document.getElementById("roof_plaster_quantity").innerHTML = thickness*square/VesPaketa;
  var priceperone=document.getElementById("roof_plaster_price").innerHTML;
  document.getElementById("roof_plaster_sum").innerHTML =  priceperone * thickness * square/VesPaketa;

  document.getElementById("plaster_roof_outlay_quantity").innerHTML =thickness*square/VesPaketa;
  document.getElementById("plaster_roof_outlay_sum").innerHTML = priceperone * thickness * square/VesPaketa;
}

function roof_primer(){
  var square=document.getElementById("roof_primer_square").innerHTML;
  var consumeperone=document.getElementById("roof_primer_consumeperone").innerHTML;
  var price=document.getElementById("roof_primer_price").innerHTML;
  document.getElementById("roof_primer_consume").innerHTML =square*consumeperone;
  document.getElementById("roof_primer_weight").innerHTML=square*consumeperone;
  document.getElementById("roof_primer_quantity").innerHTML=square*consumeperone/10;
  document.getElementById("roof_primer_sum").innerHTML=price*square*consumeperone/10;

  document.getElementById("primer_roof_outlay_quantity").innerHTML =square*consumeperone/10;
  document.getElementById("primer_roof_outlay_sum").innerHTML = price*square*consumeperone/10;
}

// window

function window_plaster(){
  var thickness = $('#window_plaster_thickness').find(':selected').val();
  var square=document.getElementById("window_plaster_square").value;
  document.getElementById("window_plaster_consume").innerHTML = thickness;
  document.getElementById("window_plaster_weight").innerHTML = thickness*square;
  document.getElementById("window_plaster_quantity").innerHTML = thickness*square/VesPaketa;
  var priceperone=document.getElementById("window_plaster_price").innerHTML;
  document.getElementById("window_plaster_sum").innerHTML =  priceperone * thickness * square/VesPaketa;

  document.getElementById("plaster_window_outlay_quantity").innerHTML =thickness*square/VesPaketa;
  document.getElementById("plaster_window_outlay_sum").innerHTML = priceperone * thickness * square/VesPaketa;
}

function window_primer(){
  var square=document.getElementById("window_primer_square").innerHTML;
  var consumeperone=document.getElementById("window_primer_consumeperone").innerHTML;
  var price=document.getElementById("window_primer_price").innerHTML;
  document.getElementById("window_primer_consume").innerHTML =square*consumeperone;
  document.getElementById("window_primer_weight").innerHTML=square*consumeperone;
  document.getElementById("window_primer_quantity").innerHTML=square*consumeperone/10;
  document.getElementById("window_primer_sum").innerHTML=price*square*consumeperone/10;

  document.getElementById("primer_window_outlay_quantity").innerHTML =square*consumeperone/10;
  document.getElementById("primer_window_outlay_sum").innerHTML = price*square*consumeperone/10;

}

// pharos
function pharos(){
  var square= parseFloat(document.getElementById("wall_plaster_square").value);
  var square2= parseFloat(document.getElementById("window_plaster_square").value);
  var square3= parseFloat(document.getElementById("roof_plaster_square").value);
  document.getElementById("pharos_outlay_quantity").innerHTML = (square+square2+square3)/2;
  document.getElementById("pharos_outlay_sum").innerHTML = (square+square2+square3)/2*document.getElementById("pharos_outlay_price").innerHTML;
}

// nail and shim
function nail_shim(){
  var square= parseFloat(document.getElementById("wall_plaster_square").value);
  document.getElementById("shim_outlay_quantity").innerHTML =Math.ceil(square*5/100);
  document.getElementById("nail_outlay_quantity").innerHTML =Math.ceil(square*5/150);
  document.getElementById("shim_outlay_sum").innerHTML =document.getElementById("shim_outlay_quantity").innerHTML*document.getElementById("shim_outlay_price").innerHTML;
  document.getElementById("nail_outlay_sum").innerHTML =document.getElementById("nail_outlay_quantity").innerHTML*document.getElementById("nail_outlay_price").innerHTML;
}

//material_sum
function material_sum(){
  document.getElementById("material_sum").innerHTML=parseFloat(document.getElementById("plaster_wall_outlay_sum").innerHTML)+
  parseFloat(document.getElementById("plaster_roof_outlay_sum").innerHTML)+parseFloat(document.getElementById("plaster_window_outlay_sum").innerHTML)+
  parseFloat(document.getElementById("primer_wall_outlay_sum").innerHTML)+parseFloat(document.getElementById("primer_roof_outlay_sum").innerHTML)+
  parseFloat(document.getElementById("primer_window_outlay_sum").innerHTML)+parseFloat(document.getElementById("grid_outlay_sum").innerHTML)+
  parseFloat(document.getElementById("pharos_outlay_sum").innerHTML)+parseFloat(document.getElementById("shim_outlay_sum").innerHTML)+
  parseFloat(document.getElementById("nail_outlay_sum").innerHTML);
}
// main

$(function(){
  // plaster

  $('.radio_plaster').change(function(){

      var price = $(this).val();
      document.getElementById("wall_plaster_price").innerHTML = price;
      document.getElementById("roof_plaster_price").innerHTML = price;
      document.getElementById("window_plaster_price").innerHTML = price;
      wall_plaster();
      roof_plaster();
      window_plaster();
      $("#plaster_wall_outlay").val(price);
      $("#plaster_roof_outlay").val(price);
      $("#plaster_window_outlay").val(price);
      document.getElementById("plaster_wall_outlay_price").innerHTML =price;
      document.getElementById("plaster_roof_outlay_price").innerHTML =price;
      document.getElementById("plaster_window_outlay_price").innerHTML =price;
  });

  // wall

  $('#wall_plaster_square').change(function(){
      var square=document.getElementById("wall_plaster_square").value;
      document.getElementById("wall_primer_square").innerHTML=square;
      document.getElementById("wall_grid_square").innerHTML=square;

      wall_plaster();
      wall_primer();
      grid();
      pharos();
      nail_shim();
  });

  $('#wall_plaster_thickness').change(function(){
      wall_plaster();
  });

  $('.radio_wall_primer').change(function(){
      var price = $(this).val();
      var _price;
      if(price==='1'){
        document.getElementById("wall_primer_price").innerHTML = "2064";
        document.getElementById("wall_primer_consumeperone").innerHTML = "0.1";
        $("#primer_wall_outlay").val(2064);
        document.getElementById("primer_wall_outlay_price").innerHTML =2064;
      }
      else{
        document.getElementById("wall_primer_price").innerHTML = "1548";
        document.getElementById("wall_primer_consumeperone").innerHTML ="0.2";
        $("#primer_wall_outlay").val(1548);
        document.getElementById("primer_wall_outlay_price").innerHTML =1548;
      }
      wall_primer();
  });

  $('.radio_wall_grid').change(function(){
    grid();
  });
  //roof
  $('#roof_plaster_square').change(function a(){
      var square=document.getElementById("roof_plaster_square").value;
      document.getElementById("roof_primer_square").innerHTML=square;
      roof_plaster();
      roof_primer();
      pharos();
  });

  $('#roof_plaster_thickness').change(function(){
      roof_plaster();
  });

  $('.radio_roof_primer').change(function(){
      var price = $(this).val();
      if(price==='1'){
        document.getElementById("roof_primer_price").innerHTML = "2064";
        document.getElementById("roof_primer_consumeperone").innerHTML = "0.1";
        $("#primer_roof_outlay").val(2064);
        document.getElementById("primer_roof_outlay_price").innerHTML =2064;
      }
      else{
        document.getElementById("roof_primer_price").innerHTML = "1548";
        document.getElementById("roof_primer_consumeperone").innerHTML ="0.2";
        $("#primer_roof_outlay").val(1548);
        document.getElementById("primer_roof_outlay_price").innerHTML =1548;
      }
      roof_primer();
  });

  // window

  $('#window_plaster_square').change(function(){
      var square=document.getElementById("window_plaster_square").value;
      document.getElementById("window_primer_square").innerHTML=square;
      window_plaster();
      window_primer();
      pharos();
  });

  $('#window_plaster_thickness').change(function(){
      window_plaster();
  });

  $('.radio_window_primer').change(function(){
      var price = $(this).val();
      if(price==='1'){
        document.getElementById("window_primer_price").innerHTML = "2064";
        document.getElementById("window_primer_consumeperone").innerHTML = "0.1";
        $("#primer_window_outlay").val(2064);
        document.getElementById("primer_window_outlay_price").innerHTML =2064;
      }
      else{
        document.getElementById("window_primer_price").innerHTML = "1548";
        document.getElementById("window_primer_consumeperone").innerHTML ="0.2";
        $("#primer_window_outlay").val(1548);
        document.getElementById("primer_window_outlay_price").innerHTML =1548;
      }
      window_primer();
  });
  // смета материалы
  $('#plaster_wall_outlay').change(function(){
    var price = $(this).val();
    document.getElementById("wall_plaster_price").innerHTML = price;
    document.getElementById("plaster_wall_outlay_price").innerHTML = price;
    wall_plaster();
  });

  $('#plaster_roof_outlay').change(function(){
    var price = $(this).val();
    document.getElementById("roof_plaster_price").innerHTML = price;
    document.getElementById("plaster_roof_outlay_price").innerHTML = price;
    roof_plaster();
  });

  $('#plaster_window_outlay').change(function(){
    var price = $(this).val();
    document.getElementById("window_plaster_price").innerHTML = price;
    document.getElementById("plaster_window_outlay_price").innerHTML = price;
    window_plaster();
  });

  $('#primer_wall_outlay').change(function(){
    var price = $(this).val();
    document.getElementById("wall_primer_price").innerHTML = price;
    document.getElementById("primer_wall_outlay_price").innerHTML = price;
    if(price==='2064'){
      $('#block2_wall_primer_knauf').prop('checked', true);
    }
    if(price==='1548') {
      $('#block2_wall_primer_kreps').prop('checked', true);
    }
    wall_primer();
  });

  $('#primer_roof_outlay').change(function(){
    var price = $(this).val();
    document.getElementById("roof_primer_price").innerHTML = price;
    document.getElementById("primer_roof_outlay_price").innerHTML = price;
    if(price==='2064'){
      $('#block2_roof_primer_knauf').prop('checked', true);
    }
    if(price==='1548') {
      $('#block2_roof_primer_kreps').prop('checked', true);
    }
    roof_primer();
  });

  $('#primer_window_outlay').change(function(){
    var price = $(this).val();
    document.getElementById("window_primer_price").innerHTML = price;
    document.getElementById("primer_window_outlay_price").innerHTML = price;
    if(price==='2064'){
      $('#block2_window_primer_knauf').prop('checked', true);
    }
    if(price==='1548') {
      $('#block2_window_primer_kreps').prop('checked', true);
    }
    window_primer();
  });

  $('#grid_outlay').change(function(){
    var value = $(this).val();
    if(value==='1'){
      $('#block2_wall_grid_glass').prop('checked', true);
    }
    if(value==='2') {
      $('#block2_wall_grid_zinc').prop('checked', true);
    }
    grid();
  });

  $('#plaster_wall_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    material_sum();
  });

  $('#plaster_roof_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    material_sum();
  });

  $('#plaster_window_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    material_sum();
  });

  $('#primer_wall_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    material_sum();
  });

  $('#primer_roof_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    material_sum();
  });

  $('#primer_window_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    material_sum();
  });

  $('#grid_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    material_sum();
  });

  $('#pharos_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    material_sum();
  });

  $('#shim_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    material_sum();
  });

  $('#nail_outlay_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    material_sum();
  });

})
