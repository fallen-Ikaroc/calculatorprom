<!doctype html>
<html lang="ru">
<head>
  <title>Админ-панель</title>
</head>
<body>
  <?php

  require_once 'connection.php';
  $link = mysqli_connect($host, $user, $password, $database)
      or die("Ошибка " . mysqli_error($link));
  $query ="SELECT * FROM prices";
  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
  if($result){
    $rows = mysqli_num_rows($result);
    for ($i = 0 ; $i < $rows ; ++$i)    {
        $row = mysqli_fetch_row($result);
        switch($row[0]){
          case 'plaster1': $plaster1=$row[1]; break;
          case 'plaster2': $plaster2=$row[1]; break;
          case 'plaster3': $plaster3=$row[1]; break;
          case 'plaster4': $plaster4=$row[1]; break;
          case 'primer1': $primer1=$row[1]; break;
          case 'primer2': $primer2=$row[1]; break;
          case 'grid1': $grid1=$row[1]; break;
          case 'grid2': $grid2=$row[1]; break;
          case 'pharos': $pharos=$row[1]; break;
          case 'shim': $shim=$row[1]; break;
          case 'nail': $nail=$row[1]; break;
          case 'dirty': $dirty=$row[1]; break;
          case 'dirty2': $dirty2=$row[1]; break;
          case 'clear4': $clear4=$row[1]; break;
          case 'clear1': $clear1=$row[1]; break;
          case 'clear2': $clear2=$row[1]; break;
          case 'clear3': $clear3=$row[1]; break;
        }
    }
  }
  if( isset( $_GET['red1'] )  && isset($_GET['Price']) ){
    $price1=htmlentities(mysqli_real_escape_string($link, $_GET['Price']));
    $query1="UPDATE prices SET price='$price1' WHERE name='plaster1'";
    $result1 = mysqli_query($link, $query1) or die("Ошибка " . mysqli_error($link));
    $plaster1=$price1;
    if($result1)
      $good1="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/administration.php">';
  }
  if( isset( $_GET['red2'] )  && isset($_GET['Price2']) ){
    $price2=htmlentities(mysqli_real_escape_string($link, $_GET['Price2']));
    $query2="UPDATE prices SET price='$price2' WHERE name='plaster2'";
    $result2 = mysqli_query($link, $query2) or die("Ошибка " . mysqli_error($link));
    $plaster2=$price2;
    if($result2)
      $good2="Успешно!";
      echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/administration.php">';
  }
  if( isset( $_GET['red3'] )  && isset($_GET['Price3']) ){
    $price3=htmlentities(mysqli_real_escape_string($link, $_GET['Price3']));
    $query3="UPDATE prices SET price='$price3' WHERE name='plaster3'";
    $result3 = mysqli_query($link, $query3) or die("Ошибка " . mysqli_error($link));
    $plaster3=$price3;
    if($result3)
      $good3="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/administration.php">';
  }
  if( isset( $_GET['red4'] )  && isset($_GET['Price4']) ){
    $price4=htmlentities(mysqli_real_escape_string($link, $_GET['Price4']));
    $query4="UPDATE prices SET price='$price4' WHERE name='plaster4'";
    $result4 = mysqli_query($link, $query4) or die("Ошибка " . mysqli_error($link));
    $plaster4=$price4;
    if($result4)
      $good4="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/administration.php">';
  }
  if( isset( $_GET['red5'] )  && isset($_GET['Price5']) ){
    $price5=htmlentities(mysqli_real_escape_string($link, $_GET['Price5']));
    $query5="UPDATE prices SET price='$price5' WHERE name='grid1'";
    $result5 = mysqli_query($link, $query5) or die("Ошибка " . mysqli_error($link));
    $grid1=$price5;
    if($result5)
      $good5="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/administration.php">';
  }
  if( isset( $_GET['red6'] )  && isset($_GET['Price6']) ){
    $price6=htmlentities(mysqli_real_escape_string($link, $_GET['Price6']));
    $query6="UPDATE prices SET price='$price6' WHERE name='grid2'";
    $result6 = mysqli_query($link, $query6) or die("Ошибка " . mysqli_error($link));
    $grid2=$price6;
    if($result6)
      $good6="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/administration.php">';
  }
  if( isset( $_GET['red7'] )  && isset($_GET['Price7']) ){
    $price7=htmlentities(mysqli_real_escape_string($link, $_GET['Price7']));
    $query7="UPDATE prices SET price='$price7' WHERE name='primer1'";
    $result7 = mysqli_query($link, $query7) or die("Ошибка " . mysqli_error($link));
    $primer1=$price7;
    if($result7)
      $good7="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/administration.php">';
  }
  if( isset( $_GET['red8'] )  && isset($_GET['Price8']) ){
    $price8=htmlentities(mysqli_real_escape_string($link, $_GET['Price8']));
    $query8="UPDATE prices SET price='$price8' WHERE name='primer2'";
    $result8 = mysqli_query($link, $query8) or die("Ошибка " . mysqli_error($link));
    $primer2=$price8;
    if($result8)
      $good8="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/administration.php">';
  }
  if( isset( $_GET['red9'] )  && isset($_GET['Price9']) ){
    $price9=htmlentities(mysqli_real_escape_string($link, $_GET['Price9']));
    $query9="UPDATE prices SET price='$price9' WHERE name='pharos'";
    $result9 = mysqli_query($link, $query9) or die("Ошибка " . mysqli_error($link));
    $pharos=$price9;
    if($result9)
      $good9="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/administration.php">';
  }
  if( isset( $_GET['red10'] )  && isset($_GET['Price10']) ){
    $price10=htmlentities(mysqli_real_escape_string($link, $_GET['Price10']));
    $query10="UPDATE prices SET price='$price10' WHERE name='shim'";
    $result10 = mysqli_query($link, $query10) or die("Ошибка " . mysqli_error($link));
    $shim=$price10;
    if($result10)
      $good10="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/administration.php">';
  }
  if( isset( $_GET['red11'] )  && isset($_GET['Price11']) ){
    $price11=htmlentities(mysqli_real_escape_string($link, $_GET['Price11']));
    $query11="UPDATE prices SET price='$price11' WHERE name='nail'";
    $result11 = mysqli_query($link, $query11) or die("Ошибка " . mysqli_error($link));
    $nail=$price11;
    if($result11)
      $good11="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/administration.php">';
  }
  if( isset( $_GET['red12'] )  && isset($_GET['Price12']) ){
    $price12=htmlentities(mysqli_real_escape_string($link, $_GET['Price12']));
    $query12="UPDATE prices SET price='$price12' WHERE name='dirty'";
    $result12 = mysqli_query($link, $query12) or die("Ошибка " . mysqli_error($link));
    $dirty=$price12;
    if($result12)
      $good12="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/administration.php">';
  }
  if( isset( $_GET['red13'] )  && isset($_GET['Price13']) ){
    $price13=htmlentities(mysqli_real_escape_string($link, $_GET['Price13']));
    $query13="UPDATE prices SET price='$price13' WHERE name='clear1'";
    $result13 = mysqli_query($link, $query13) or die("Ошибка " . mysqli_error($link));
    $clear1=$price13;
    if($result13)
      $good13="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/administration.php">';
  }
  if( isset( $_GET['red14'] )  && isset($_GET['Price14']) ){
    $price14=htmlentities(mysqli_real_escape_string($link, $_GET['Price14']));
    $query14="UPDATE prices SET price='$price14' WHERE name='clear2'";
    $result14 = mysqli_query($link, $query14) or die("Ошибка " . mysqli_error($link));
    $clear2=$price14;
    if($result14)
      $good14="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/administration.php">';
  }
  if( isset( $_GET['red15'] )  && isset($_GET['Price15']) ){
    $price15=htmlentities(mysqli_real_escape_string($link, $_GET['Price15']));
    $query15="UPDATE prices SET price='$price15' WHERE name='clear3'";
    $result15 = mysqli_query($link, $query15) or die("Ошибка " . mysqli_error($link));
    $clear3=$price15;
    if($result15)
      $good15="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/administration.php">';
  }
  if( isset( $_GET['red16'] )  && isset($_GET['Price16']) ){
    $price16=htmlentities(mysqli_real_escape_string($link, $_GET['Price16']));
    $query16="UPDATE prices SET price='$price16' WHERE name='dirty2'";
    $result16 = mysqli_query($link, $query16) or die("Ошибка " . mysqli_error($link));
    $dirty2=$price16;
    if($result16)
      $good16="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/administration.php">';
  }
  if( isset( $_GET['red17'] )  && isset($_GET['Price17']) ){
    $price17=htmlentities(mysqli_real_escape_string($link, $_GET['Price17']));
    $query17="UPDATE prices SET price='$price17' WHERE name='clear4'";
    $result17 = mysqli_query($link, $query17) or die("Ошибка " . mysqli_error($link));
    $clear4=$price17;
    if($result17)
      $good17="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/administration.php">';
  }
  mysqli_close($link);
  ?>
  <form name="form" method="GET" >
    <div style="display: flex;">
      <div>Штукатурка Knauf MP 75 -</div>
      <div>старая цена: <?php echo($plaster1) ?></div>
      <input type="text" name="Price" size="10" value="<?php echo($plaster1) ?>">
      <input type="submit" name="red1" value="Подтвердить">
      <div><?php echo($good1) ?></div>
    </div>

    <div style="display: flex;">
      <div>Штукатурка 2 -</div>
      <div>старая цена: <?php echo($plaster2) ?></div>
      <input type="text" name="Price2" size="10" value="<?php echo($plaster2) ?>">
      <input type="submit" name="red2" value="Подтвердить">
      <div><?php echo($good2) ?></div>
    </div>

    <div style="display: flex;">
      <div>Штукатурка 3 -</div>
      <div>старая цена: <?php echo($plaster3) ?></div>
      <input type="text" name="Price3" size="10" value="<?php echo($plaster3) ?>">
      <input type="submit" name="red3" value="Подтвердить">
      <div><?php echo($good3) ?></div>
    </div>

    <div style="display: flex;">
      <div>Штукатурка 4 -</div>
      <div>старая цена: <?php echo($plaster4) ?></div>
      <input type="text" name="Price4" size="10" value="<?php echo($plaster4) ?>">
      <input type="submit" name="red4" value="Подтвердить">
      <div><?php echo($good4) ?></div>
    </div>

    <div style="display: flex;">
      <div>сетка 1 -</div>
      <div>старая цена: <?php echo($grid1) ?></div>
      <input type="text" name="Price5" size="10" value="<?php echo($grid1) ?>">
      <input type="submit" name="red5" value="Подтвердить">
      <div><?php echo($good5) ?></div>
    </div>

    <div style="display: flex;">
      <div>сетка 2 -</div>
      <div>старая цена: <?php echo($grid2) ?></div>
      <input type="text" name="Price6" size="10" value="<?php echo($grid2) ?>">
      <input type="submit" name="red6" value="Подтвердить">
      <div><?php echo($good6) ?></div>
    </div>

    <div style="display: flex;">
      <div>грунтовка1 -</div>
      <div>старая цена: <?php echo($primer1) ?></div>
      <input type="text" name="Price7" size="10" value="<?php echo($primer1) ?>">
      <input type="submit" name="red7" value="Подтвердить">
      <div><?php echo($good7) ?></div>
    </div>

    <div style="display: flex;">
      <div>грунтовка2 -</div>
      <div>старая цена: <?php echo($primer2) ?></div>
      <input type="text" name="Price8" size="10" value="<?php echo($primer2) ?>">
      <input type="submit" name="red8" value="Подтвердить">
      <div><?php echo($good8) ?></div>
    </div>

    <div style="display: flex;">
      <div>маяк -</div>
      <div>старая цена: <?php echo($pharos) ?></div>
      <input type="text" name="Price9" size="10" value="<?php echo($pharos) ?>">
      <input type="submit" name="red9" value="Подтвердить">
      <div><?php echo($good9) ?></div>
    </div>

    <div style="display: flex;">
      <div>шайба -</div>
      <div>старая цена: <?php echo($shim) ?></div>
      <input type="text" name="Price10" size="10" value="<?php echo($shim) ?>">
      <input type="submit" name="red10" value="Подтвердить">
      <div><?php echo($good10) ?></div>
    </div>

    <div style="display: flex;">
      <div>гвоздь -</div>
      <div>старая цена: <?php echo($nail) ?></div>
      <input type="text" name="Price11" size="10" value="<?php echo($nail) ?>">
      <input type="submit" name="red11" value="Подтвердить">
      <div><?php echo($good11) ?></div>
    </div>

    <div style="display: flex;">
      <div>грязная отделка стен стрый фонд -</div>
      <div>старая цена: <?php echo($dirty) ?></div>
      <input type="text" name="Price12" size="10" value="<?php echo($dirty) ?>">
      <input type="submit" name="red12" value="Подтвердить">
      <div><?php echo($good12) ?></div>
    </div>

    <div style="display: flex;">
      <div>чистая отделка стен старый фонд-</div>
      <div>старая цена: <?php echo($clear1) ?></div>
      <input type="text" name="Price13" size="10" value="<?php echo($clear1) ?>">
      <input type="submit" name="red13" value="Подтвердить">
      <div><?php echo($good13) ?></div>
    </div>

    <div style="display: flex;">
      <div>грязная отделка стен остальные -</div>
      <div>старая цена: <?php echo($dirty2) ?></div>
      <input type="text" name="Price16" size="10" value="<?php echo($dirty2) ?>">
      <input type="submit" name="red16" value="Подтвердить">
      <div><?php echo($good16) ?></div>
    </div>

    <div style="display: flex;">
      <div>чистая отделка стен остальные-</div>
      <div>старая цена: <?php echo($clear4) ?></div>
      <input type="text" name="Price17" size="10" value="<?php echo($clear4) ?>">
      <input type="submit" name="red17" value="Подтвердить">
      <div><?php echo($good17) ?></div>
    </div>

    <div style="display: flex;">
      <div>чистая отделка потолков -</div>
      <div>старая цена: <?php echo($clear2) ?></div>
      <input type="text" name="Price14" size="10" value="<?php echo($clear2) ?>">
      <input type="submit" name="red14" value="Подтвердить">
      <div><?php echo($good14) ?></div>
    </div>

    <div style="display: flex;">
      <div>чистая отделка потолков -</div>
      <div>старая цена: <?php echo($clear3) ?></div>
      <input type="text" name="Price15" size="10" value="<?php echo($clear3) ?>">
      <input type="submit" name="red15" value="Подтвердить">
      <div><?php echo($good15) ?></div>
    </div>
  </form>

</body>
</html>
