var VesPaketa=30;
// wall
function wall_plaster(square, thickness){
  document.getElementById("wall_plaster_consume").innerHTML = thickness;
  document.getElementById("wall_plaster_weight").innerHTML = thickness*square;
  document.getElementById("wall_plaster_quantity").innerHTML = thickness*square/VesPaketa;
  var priceperone=document.getElementById("wall_plaster_price").innerHTML;
  document.getElementById("wall_plaster_sum").innerHTML =  priceperone * thickness * square/VesPaketa;
}

function wall_primer(){
  var square=document.getElementById("wall_primer_square").innerHTML;
  var consumeperone=document.getElementById("wall_primer_consumeperone").innerHTML;
  var price=document.getElementById("wall_primer_price").innerHTML;
  document.getElementById("wall_primer_consume").innerHTML =square*consumeperone;
  document.getElementById("wall_primer_weight").innerHTML=square*consumeperone;
  document.getElementById("wall_primer_quantity").innerHTML=square*consumeperone/10;
  document.getElementById("wall_primer_sum").innerHTML=price*square*consumeperone/10;
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
  }
  else{
    document.getElementById("wall_grid_price").innerHTML = "2460";
    document.getElementById("wall_grid_consumeperone").innerHTML = "1x30";
    document.getElementById("wall_grid_consume").innerHTML = square/30;
    document.getElementById("wall_grid_weight").innerHTML = document.getElementById("wall_grid_consume").innerHTML*10;
    document.getElementById("wall_grid_quantity").innerHTML = document.getElementById("wall_grid_consume").innerHTML;
    document.getElementById("wall_grid_sum").innerHTML = document.getElementById("wall_grid_price").innerHTML*document.getElementById("wall_grid_quantity").innerHTML;
  }
}

// roof

function roof_plaster(square, thickness){
  document.getElementById("roof_plaster_consume").innerHTML = thickness;
  document.getElementById("roof_plaster_weight").innerHTML = thickness*square;
  document.getElementById("roof_plaster_quantity").innerHTML = thickness*square/VesPaketa;
  var priceperone=document.getElementById("roof_plaster_price").innerHTML;
  document.getElementById("roof_plaster_sum").innerHTML =  priceperone * thickness * square/VesPaketa;
}

function roof_primer(){
  var square=document.getElementById("roof_primer_square").innerHTML;
  var consumeperone=document.getElementById("roof_primer_consumeperone").innerHTML;
  var price=document.getElementById("roof_primer_price").innerHTML;
  document.getElementById("roof_primer_consume").innerHTML =square*consumeperone;
  document.getElementById("roof_primer_weight").innerHTML=square*consumeperone;
  document.getElementById("roof_primer_quantity").innerHTML=square*consumeperone/10;
  document.getElementById("roof_primer_sum").innerHTML=price*square*consumeperone/10;
}

// window

function window_plaster(square, thickness){
  document.getElementById("window_plaster_consume").innerHTML = thickness;
  document.getElementById("window_plaster_weight").innerHTML = thickness*square;
  document.getElementById("window_plaster_quantity").innerHTML = thickness*square/VesPaketa;
  var priceperone=document.getElementById("window_plaster_price").innerHTML;
  document.getElementById("window_plaster_sum").innerHTML =  priceperone * thickness * square/VesPaketa;
}

function window_primer(){
  var square=document.getElementById("window_primer_square").innerHTML;
  var consumeperone=document.getElementById("window_primer_consumeperone").innerHTML;
  var price=document.getElementById("window_primer_price").innerHTML;
  document.getElementById("window_primer_consume").innerHTML =square*consumeperone;
  document.getElementById("window_primer_weight").innerHTML=square*consumeperone;
  document.getElementById("window_primer_quantity").innerHTML=square*consumeperone/10;
  document.getElementById("window_primer_sum").innerHTML=price*square*consumeperone/10;
}

// main

$(function(){
  // plaster

  $('.radio_plaster').change(function(){
      var thickness = $('#wall_plaster_thickness').find(':selected').val();
      var square = document.getElementById("wall_plaster_square").value;
      var price = $(this).val();
      document.getElementById("wall_plaster_price").innerHTML = price;
      document.getElementById("roof_plaster_price").innerHTML = price;
      document.getElementById("window_plaster_price").innerHTML = price;
      wall_plaster(square,thickness);
  });

  // wall

  $('#wall_plaster_square').change(function(){
      var thickness = $('#wall_plaster_thickness').find(':selected').val();
      var square=document.getElementById("wall_plaster_square").value;
      document.getElementById("wall_primer_square").innerHTML=square;
      document.getElementById("wall_grid_square").innerHTML=square;
      wall_plaster(square,thickness);
      wall_primer();
      grid();
  });

  $('#wall_plaster_thickness').change(function(){
      var thickness = $(this).find(':selected').val();
      var square=document.getElementById("wall_plaster_square").value;
      wall_plaster(square,thickness);
  });

  $('.radio_wall_primer').change(function(){
      var price2 = $(this).val();
      if(price2==='1'){
        document.getElementById("wall_primer_price").innerHTML = "2064";
        document.getElementById("wall_primer_consumeperone").innerHTML = "0.1";
      }
      else{
        document.getElementById("wall_primer_price").innerHTML = "1548";
        document.getElementById("wall_primer_consumeperone").innerHTML ="0.2";
      }
      wall_primer();
  });

  $('.radio_wall_grid').change(function(){
    grid();
  });
  //roof
  $('#roof_plaster_square').change(function(){
      var thickness = $('#roof_plaster_thickness').find(':selected').val();
      var square=document.getElementById("roof_plaster_square").value;
      document.getElementById("roof_primer_square").innerHTML=square;
      roof_plaster(square,thickness);
      roof_primer();

  });

  $('#roof_plaster_thickness').change(function(){
      var thickness = $(this).find(':selected').val();
      var square=document.getElementById("roof_plaster_square").value;
      roof_plaster(square,thickness);
  });

  $('.radio_roof_primer').change(function(){
      var price2 = $(this).val();
      if(price2==='1'){
        document.getElementById("roof_primer_price").innerHTML = "2064";
        document.getElementById("roof_primer_consumeperone").innerHTML = "0.1";
      }
      else{
        document.getElementById("roof_primer_price").innerHTML = "1548";
        document.getElementById("roof_primer_consumeperone").innerHTML ="0.2";
      }
      roof_primer();
  });

  // window

  $('#window_plaster_square').change(function(){
      var thickness = $('#window_plaster_thickness').find(':selected').val();
      var square=document.getElementById("window_plaster_square").value;
      document.getElementById("window_primer_square").innerHTML=square;
      window_plaster(square,thickness);
      window_primer();

  });

  $('#window_plaster_thickness').change(function(){
      var thickness = $(this).find(':selected').val();
      var square=document.getElementById("window_plaster_square").value;
      window_plaster(square,thickness);
  });

  $('.radio_window_primer').change(function(){
      var price2 = $(this).val();
      if(price2==='1'){
        document.getElementById("window_primer_price").innerHTML = "2064";
        document.getElementById("window_primer_consumeperone").innerHTML = "0.1";
      }
      else{
        document.getElementById("window_primer_price").innerHTML = "1548";
        document.getElementById("window_primer_consumeperone").innerHTML ="0.2";
      }
      window_primer();
  });

})

// $('#wall_plaster_consume').bind('DOMNodeInserted DOMNodeRemoved', function(){
//
// });
