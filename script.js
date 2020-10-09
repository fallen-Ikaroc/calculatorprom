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
  document.getElementById("work_outlay_wall_thickness").innerHTML =thickness;
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

  document.getElementById("work_outlay_roof_thickness").innerHTML =thickness;
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

  document.getElementById("work_outlay_window_thickness").innerHTML =thickness;
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

function work_roof_sum(){
  var square=parseFloat(document.getElementById("work_outlay_roof_square").innerHTML);
  document.getElementById("work_outlay_roof_quantity").innerHTML=square*220;
  if(square<170){
    document.getElementById("work_outlay_roof_sale").innerHTML=0;
    document.getElementById("work_outlay_roof_sum").innerHTML=square*220;
  }
  if(square>=170 && square<250){
    document.getElementById("work_outlay_roof_sale").innerHTML=2;
    document.getElementById("work_outlay_roof_sum").innerHTML=square*220-(square*220*2/100);
  }
  if(square>=250 && square<450){
    document.getElementById("work_outlay_roof_sale").innerHTML=3;
    document.getElementById("work_outlay_roof_sum").innerHTML=square*220-(square*220*3/100);
  }
  if(square>=450 && square<650){
    document.getElementById("work_outlay_roof_sale").innerHTML=5;
    document.getElementById("work_outlay_roof_sum").innerHTML=square*220-(square*220*5/100);
  }
  if(square>=650 && square<900){
    document.getElementById("work_outlay_roof_sale").innerHTML=7;
    document.getElementById("work_outlay_roof_sum").innerHTML=square*220-(square*220*7/100);
  }
  if(square>=900 && square<1200){
    document.getElementById("work_outlay_roof_sale").innerHTML=8;
    document.getElementById("work_outlay_roof_sum").innerHTML=square*220-(square*220*8/100);
  }
  if(square>1200){
    document.getElementById("work_outlay_roof_sale").innerHTML=10;
    document.getElementById("work_outlay_roof_sum").innerHTML=square*220-(square*220*10/100);
  }
  var square1=parseFloat(document.getElementById("work_outlay_wall_square").innerHTML);
  var square2=parseFloat(document.getElementById("work_outlay_roof_square").innerHTML);
  var square3=parseFloat(document.getElementById("work_outlay_window_square").innerHTML);
  document.getElementById("common_sum_square").innerHTML=square1+square2+square3;
}

function work_wall_sum(){
  var square=parseFloat(document.getElementById("work_outlay_wall_square").innerHTML);
  document.getElementById("work_outlay_wall_quantity").innerHTML=square*220;
  if(square<170){
    document.getElementById("work_outlay_wall_sale").innerHTML=0;
    document.getElementById("work_outlay_wall_sum").innerHTML=square*220;
  }
  if(square>=170 && square<250){
    document.getElementById("work_outlay_wall_sale").innerHTML=2;
    document.getElementById("work_outlay_wall_sum").innerHTML=square*220-(square*220*2/100);
  }
  if(square>=250 && square<450){
    document.getElementById("work_outlay_wall_sale").innerHTML=3;
    document.getElementById("work_outlay_wall_sum").innerHTML=square*220-(square*220*3/100);
  }
  if(square>=450 && square<650){
    document.getElementById("work_outlay_wall_sale").innerHTML=5;
    document.getElementById("work_outlay_wall_sum").innerHTML=square*220-(square*220*5/100);
  }
  if(square>=650 && square<900){
    document.getElementById("work_outlay_wall_sale").innerHTML=7;
    document.getElementById("work_outlay_wall_sum").innerHTML=square*220-(square*220*7/100);
  }
  if(square>=900 && square<1200){
    document.getElementById("work_outlay_wall_sale").innerHTML=8;
    document.getElementById("work_outlay_wall_sum").innerHTML=square*220-(square*220*8/100);
  }
  if(square>1200){
    document.getElementById("work_outlay_wall_sale").innerHTML=10;
    document.getElementById("work_outlay_wall_sum").innerHTML=square*220-(square*220*10/100);
  }
  var square1=parseFloat(document.getElementById("work_outlay_wall_square").innerHTML);
  var square2=parseFloat(document.getElementById("work_outlay_roof_square").innerHTML);
  var square3=parseFloat(document.getElementById("work_outlay_window_square").innerHTML);
  document.getElementById("common_sum_square").innerHTML=square1+square2+square3;
}

function work_window_sum(){
  var square=parseFloat(document.getElementById("work_outlay_window_square").innerHTML);
  document.getElementById("work_outlay_window_quantity").innerHTML=square*280;
  if(square<170){
    document.getElementById("work_outlay_window_sale").innerHTML=0;
    document.getElementById("work_outlay_window_sum").innerHTML=square*280;
  }
  if(square>=170 && square<250){
    document.getElementById("work_outlay_window_sale").innerHTML=2;
    document.getElementById("work_outlay_window_sum").innerHTML=square*280-(square*280*2/100);
  }
  if(square>=250 && square<450){
    document.getElementById("work_outlay_window_sale").innerHTML=3;
    document.getElementById("work_outlay_window_sum").innerHTML=square*280-(square*280*3/100);
  }
  if(square>=450 && square<650){
    document.getElementById("work_outlay_window_sale").innerHTML=5;
    document.getElementById("work_outlay_window_sum").innerHTML=square*280-(square*280*5/100);
  }
  if(square>=650 && square<900){
    document.getElementById("work_outlay_window_sale").innerHTML=7;
    document.getElementById("work_outlay_window_sum").innerHTML=square*280-(square*280*7/100);
  }
  if(square>=900 && square<1200){
    document.getElementById("work_outlay_window_sale").innerHTML=8;
    document.getElementById("work_outlay_window_sum").innerHTML=square*280-(square*280*8/100);
  }
  if(square>1200){
    document.getElementById("work_outlay_window_sale").innerHTML=10;
    document.getElementById("work_outlay_window_sum").innerHTML=square*280-(square*280*10/100);
  }
  var square1=parseFloat(document.getElementById("work_outlay_wall_square").innerHTML);
  var square2=parseFloat(document.getElementById("work_outlay_roof_square").innerHTML);
  var square3=parseFloat(document.getElementById("work_outlay_window_square").innerHTML);
  document.getElementById("common_sum_square").innerHTML=square1+square2+square3;
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
      if(price==='435'){
        document.getElementById("work_outlay_wall_plaster").innerHTML ="штукатурка 1";
        document.getElementById("work_outlay_roof_plaster").innerHTML ="штукатурка 1";
        document.getElementById("work_outlay_window_plaster").innerHTML ="штукатурка 1";
      }
      if(price==='500'){
        document.getElementById("work_outlay_wall_plaster").innerHTML ="штукатурка 2";
        document.getElementById("work_outlay_roof_plaster").innerHTML ="штукатурка 2";
        document.getElementById("work_outlay_window_plaster").innerHTML ="штукатурка 2";
      }
      if(price==='550'){
        document.getElementById("work_outlay_wall_plaster").innerHTML ="штукатурка 3";
        document.getElementById("work_outlay_roof_plaster").innerHTML ="штукатурка 3";
        document.getElementById("work_outlay_window_plaster").innerHTML ="штукатурка 3";
      }
      if(price==='560'){
        document.getElementById("work_outlay_wall_plaster").innerHTML ="штукатурка 4";
        document.getElementById("work_outlay_roof_plaster").innerHTML ="штукатурка 4";
        document.getElementById("work_outlay_window_plaster").innerHTML ="штукатурка 4";
      }
  });

  // wall

  $('#wall_plaster_square').change(function(){
      var square=document.getElementById("wall_plaster_square").value;
      document.getElementById("wall_primer_square").innerHTML=square;
      document.getElementById("wall_grid_square").innerHTML=square;
      document.getElementById("work_outlay_wall_square").innerHTML=square;
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
      document.getElementById("work_outlay_roof_square").innerHTML=square;
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
      document.getElementById("work_outlay_window_square").innerHTML=square;
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
    if(price==='435'){
      document.getElementById("work_outlay_wall_plaster").innerHTML ="штукатурка 1";
    }
    if(price==='500'){
      document.getElementById("work_outlay_wall_plaster").innerHTML ="штукатурка 2";
    }
    if(price==='550'){
      document.getElementById("work_outlay_wall_plaster").innerHTML ="штукатурка 3";
    }
    if(price==='560'){
      document.getElementById("work_outlay_wall_plaster").innerHTML ="штукатурка 4";
    }
  });

  $('#plaster_roof_outlay').change(function(){
    var price = $(this).val();
    document.getElementById("roof_plaster_price").innerHTML = price;
    document.getElementById("plaster_roof_outlay_price").innerHTML = price;
    roof_plaster();
    if(price==='435'){
      document.getElementById("work_outlay_roof_plaster").innerHTML ="штукатурка 1";
    }
    if(price==='500'){
      document.getElementById("work_outlay_roof_plaster").innerHTML ="штукатурка 2";
    }
    if(price==='550'){
      document.getElementById("work_outlay_roof_plaster").innerHTML ="штукатурка 3";
    }
    if(price==='560'){
      document.getElementById("work_outlay_roof_plaster").innerHTML ="штукатурка 4";
    }
  });

  $('#plaster_window_outlay').change(function(){
    var price = $(this).val();
    document.getElementById("window_plaster_price").innerHTML = price;
    document.getElementById("plaster_window_outlay_price").innerHTML = price;
    window_plaster();
    if(price==='435'){
      document.getElementById("work_outlay_window_plaster").innerHTML ="штукатурка 1";
    }
    if(price==='500'){
      document.getElementById("work_outlay_window_plaster").innerHTML ="штукатурка 2";
    }
    if(price==='550'){
      document.getElementById("work_outlay_window_plaster").innerHTML ="штукатурка 3";
    }
    if(price==='560'){
      document.getElementById("work_outlay_window_plaster").innerHTML ="штукатурка 4";
    }
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

  $('#work_outlay_wall_square').bind('DOMNodeInserted DOMNodeRemoved', function(){
    work_wall_sum();
  });

  $('#work_outlay_roof_square').bind('DOMNodeInserted DOMNodeRemoved', function(){
    work_roof_sum();
  });

  $('#work_outlay_window_square').bind('DOMNodeInserted DOMNodeRemoved', function(){
    work_window_sum();
  });

  $('#work_outlay_wall_sale').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var sale1=parseFloat(document.getElementById("work_outlay_wall_sale").innerHTML);
    var sale2=parseFloat(document.getElementById("work_outlay_roof_sale").innerHTML);
    var sale3=parseFloat(document.getElementById("work_outlay_window_sale").innerHTML);
    document.getElementById("work_outlay_sale_percent").innerHTML=(sale1+sale2+sale3)/3;
    var quantity1=parseFloat(document.getElementById("work_outlay_wall_quantity").innerHTML);
    var quantity2=parseFloat(document.getElementById("work_outlay_roof_quantity").innerHTML);
    var quantity3=parseFloat(document.getElementById("work_outlay_window_quantity").innerHTML);
    document.getElementById("work_outlay_sale_sum").innerHTML=(quantity1+quantity2+quantity3)*(sale1+sale2+sale3)/3/100;
  });

  $('#work_outlay_roof_sale').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var sale1=parseFloat(document.getElementById("work_outlay_wall_sale").innerHTML);
    var sale2=parseFloat(document.getElementById("work_outlay_roof_sale").innerHTML);
    var sale3=parseFloat(document.getElementById("work_outlay_window_sale").innerHTML);
    document.getElementById("work_outlay_sale_percent").innerHTML=(sale1+sale2+sale3)/3;
    var quantity1=parseFloat(document.getElementById("work_outlay_wall_quantity").innerHTML);
    var quantity2=parseFloat(document.getElementById("work_outlay_roof_quantity").innerHTML);
    var quantity3=parseFloat(document.getElementById("work_outlay_window_quantity").innerHTML);
    document.getElementById("work_outlay_sale_sum").innerHTML=(quantity1+quantity2+quantity3)*(sale1+sale2+sale3)/3/100;
  });

  $('#work_outlay_window_sale').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var sale1=parseFloat(document.getElementById("work_outlay_wall_sale").innerHTML);
    var sale2=parseFloat(document.getElementById("work_outlay_roof_sale").innerHTML);
    var sale3=parseFloat(document.getElementById("work_outlay_window_sale").innerHTML);
    document.getElementById("work_outlay_sale_percent").innerHTML=(sale1+sale2+sale3)/3;
    var quantity1=parseFloat(document.getElementById("work_outlay_wall_quantity").innerHTML);
    var quantity2=parseFloat(document.getElementById("work_outlay_roof_quantity").innerHTML);
    var quantity3=parseFloat(document.getElementById("work_outlay_window_quantity").innerHTML);
    document.getElementById("work_outlay_sale_sum").innerHTML=(quantity1+quantity2+quantity3)*(sale1+sale2+sale3)/3/100;
  });

  $('#work_outlay_wall_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var sum1=parseFloat(document.getElementById("work_outlay_wall_sum").innerHTML);
    var sum2=parseFloat(document.getElementById("work_outlay_roof_sum").innerHTML);
    var sum3=parseFloat(document.getElementById("work_outlay_window_sum").innerHTML);
    document.getElementById("work_outlay_common_sum").innerHTML=sum1+sum2+sum3;
  });

  $('#work_outlay_roof_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var sum1=parseFloat(document.getElementById("work_outlay_wall_sum").innerHTML);
    var sum2=parseFloat(document.getElementById("work_outlay_roof_sum").innerHTML);
    var sum3=parseFloat(document.getElementById("work_outlay_window_sum").innerHTML);
    document.getElementById("work_outlay_common_sum").innerHTML=sum1+sum2+sum3;
  });

  $('#work_outlay_window_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    var sum1=parseFloat(document.getElementById("work_outlay_wall_sum").innerHTML);
    var sum2=parseFloat(document.getElementById("work_outlay_roof_sum").innerHTML);
    var sum3=parseFloat(document.getElementById("work_outlay_window_sum").innerHTML);
    document.getElementById("work_outlay_common_sum").innerHTML=sum1+sum2+sum3;
  });

  $('#work_outlay_sale_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    document.getElementById("common_sum_sale_").innerHTML=document.getElementById("work_outlay_sale_sum").innerHTML;
  });

  $('#material_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    document.getElementById("common_sum_material").innerHTML=document.getElementById("material_sum").innerHTML;
    document.getElementById("common_sum").innerHTML=parseFloat(document.getElementById("common_sum_material").innerHTML)+parseFloat(document.getElementById("common_sum_work").innerHTML);
  });

  $('#work_outlay_common_sum').bind('DOMNodeInserted DOMNodeRemoved', function(){
    document.getElementById("common_sum_work").innerHTML=document.getElementById("work_outlay_common_sum").innerHTML;
    document.getElementById("common_sum").innerHTML=parseFloat(document.getElementById("common_sum_material").innerHTML)+parseFloat(document.getElementById("common_sum_work").innerHTML);
  });
})
