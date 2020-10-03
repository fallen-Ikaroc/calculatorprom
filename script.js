var VesPaketa=30;
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
$(function(){
  $('#wall_plaster_square').change(function(){
      var thickness = $('#wall_plaster_thickness').find(':selected').val();
      var square=document.getElementById("wall_plaster_square").value;
      document.getElementById("wall_primer_square").innerHTML=square;
      wall_plaster(square,thickness);
      wall_primer();
  });
  $('#wall_plaster_thickness').change(function(){
      var thickness = $(this).find(':selected').val();
      var square=document.getElementById("wall_plaster_square").value;
      wall_plaster(square,thickness);
  });
  $('.radio').change(function(){
      var thickness = $('#wall_plaster_thickness').find(':selected').val();
      var square = document.getElementById("wall_plaster_square").value;
      var price = $(this).val();
      document.getElementById("wall_plaster_price").innerHTML = price;
      wall_plaster(square,thickness);
  });
  $('.radio2').change(function(){
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
})

// $('#wall_plaster_consume').bind('DOMNodeInserted DOMNodeRemoved', function(){
//
// });
