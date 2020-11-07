<!doctype html>
<html lang="ru">
<head>
  <title>Админ-панель</title>
  <link rel="stylesheet" type="text/css" href="style_admin.css"/>
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
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
  }
  if( isset( $_GET['red2'] )  && isset($_GET['Price2']) ){
    $price2=htmlentities(mysqli_real_escape_string($link, $_GET['Price2']));
    $query2="UPDATE prices SET price='$price2' WHERE name='plaster2'";
    $result2 = mysqli_query($link, $query2) or die("Ошибка " . mysqli_error($link));
    $plaster2=$price2;
    if($result2)
      $good2="Успешно!";
      echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
  }
  if( isset( $_GET['red3'] )  && isset($_GET['Price3']) ){
    $price3=htmlentities(mysqli_real_escape_string($link, $_GET['Price3']));
    $query3="UPDATE prices SET price='$price3' WHERE name='plaster3'";
    $result3 = mysqli_query($link, $query3) or die("Ошибка " . mysqli_error($link));
    $plaster3=$price3;
    if($result3)
      $good3="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
  }
  if( isset( $_GET['red4'] )  && isset($_GET['Price4']) ){
    $price4=htmlentities(mysqli_real_escape_string($link, $_GET['Price4']));
    $query4="UPDATE prices SET price='$price4' WHERE name='plaster4'";
    $result4 = mysqli_query($link, $query4) or die("Ошибка " . mysqli_error($link));
    $plaster4=$price4;
    if($result4)
      $good4="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
  }
  if( isset( $_GET['red5'] )  && isset($_GET['Price5']) ){
    $price5=htmlentities(mysqli_real_escape_string($link, $_GET['Price5']));
    $query5="UPDATE prices SET price='$price5' WHERE name='grid1'";
    $result5 = mysqli_query($link, $query5) or die("Ошибка " . mysqli_error($link));
    $grid1=$price5;
    if($result5)
      $good5="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
  }
  if( isset( $_GET['red6'] )  && isset($_GET['Price6']) ){
    $price6=htmlentities(mysqli_real_escape_string($link, $_GET['Price6']));
    $query6="UPDATE prices SET price='$price6' WHERE name='grid2'";
    $result6 = mysqli_query($link, $query6) or die("Ошибка " . mysqli_error($link));
    $grid2=$price6;
    if($result6)
      $good6="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
  }
  if( isset( $_GET['red7'] )  && isset($_GET['Price7']) ){
    $price7=htmlentities(mysqli_real_escape_string($link, $_GET['Price7']));
    $query7="UPDATE prices SET price='$price7' WHERE name='primer1'";
    $result7 = mysqli_query($link, $query7) or die("Ошибка " . mysqli_error($link));
    $primer1=$price7;
    if($result7)
      $good7="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
  }
  if( isset( $_GET['red8'] )  && isset($_GET['Price8']) ){
    $price8=htmlentities(mysqli_real_escape_string($link, $_GET['Price8']));
    $query8="UPDATE prices SET price='$price8' WHERE name='primer2'";
    $result8 = mysqli_query($link, $query8) or die("Ошибка " . mysqli_error($link));
    $primer2=$price8;
    if($result8)
      $good8="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
  }
  if( isset( $_GET['red9'] )  && isset($_GET['Price9']) ){
    $price9=htmlentities(mysqli_real_escape_string($link, $_GET['Price9']));
    $query9="UPDATE prices SET price='$price9' WHERE name='pharos'";
    $result9 = mysqli_query($link, $query9) or die("Ошибка " . mysqli_error($link));
    $pharos=$price9;
    if($result9)
      $good9="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
  }
  if( isset( $_GET['red10'] )  && isset($_GET['Price10']) ){
    $price10=htmlentities(mysqli_real_escape_string($link, $_GET['Price10']));
    $query10="UPDATE prices SET price='$price10' WHERE name='shim'";
    $result10 = mysqli_query($link, $query10) or die("Ошибка " . mysqli_error($link));
    $shim=$price10;
    if($result10)
      $good10="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
  }
  if( isset( $_GET['red11'] )  && isset($_GET['Price11']) ){
    $price11=htmlentities(mysqli_real_escape_string($link, $_GET['Price11']));
    $query11="UPDATE prices SET price='$price11' WHERE name='nail'";
    $result11 = mysqli_query($link, $query11) or die("Ошибка " . mysqli_error($link));
    $nail=$price11;
    if($result11)
      $good11="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
  }
  if( isset( $_GET['red12'] )  && isset($_GET['Price12']) ){
    $price12=htmlentities(mysqli_real_escape_string($link, $_GET['Price12']));
    $query12="UPDATE prices SET price='$price12' WHERE name='dirty'";
    $result12 = mysqli_query($link, $query12) or die("Ошибка " . mysqli_error($link));
    $dirty=$price12;
    if($result12)
      $good12="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
  }
  if( isset( $_GET['red13'] )  && isset($_GET['Price13']) ){
    $price13=htmlentities(mysqli_real_escape_string($link, $_GET['Price13']));
    $query13="UPDATE prices SET price='$price13' WHERE name='clear1'";
    $result13 = mysqli_query($link, $query13) or die("Ошибка " . mysqli_error($link));
    $clear1=$price13;
    if($result13)
      $good13="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
  }
  if( isset( $_GET['red14'] )  && isset($_GET['Price14']) ){
    $price14=htmlentities(mysqli_real_escape_string($link, $_GET['Price14']));
    $query14="UPDATE prices SET price='$price14' WHERE name='clear2'";
    $result14 = mysqli_query($link, $query14) or die("Ошибка " . mysqli_error($link));
    $clear2=$price14;
    if($result14)
      $good14="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
  }
  if( isset( $_GET['red15'] )  && isset($_GET['Price15']) ){
    $price15=htmlentities(mysqli_real_escape_string($link, $_GET['Price15']));
    $query15="UPDATE prices SET price='$price15' WHERE name='clear3'";
    $result15 = mysqli_query($link, $query15) or die("Ошибка " . mysqli_error($link));
    $clear3=$price15;
    if($result15)
      $good15="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
  }
  if( isset( $_GET['red16'] )  && isset($_GET['Price16']) ){
    $price16=htmlentities(mysqli_real_escape_string($link, $_GET['Price16']));
    $query16="UPDATE prices SET price='$price16' WHERE name='dirty2'";
    $result16 = mysqli_query($link, $query16) or die("Ошибка " . mysqli_error($link));
    $dirty2=$price16;
    if($result16)
      $good16="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
  }
  if( isset( $_GET['red17'] )  && isset($_GET['Price17']) ){
    $price17=htmlentities(mysqli_real_escape_string($link, $_GET['Price17']));
    $query17="UPDATE prices SET price='$price17' WHERE name='clear4'";
    $result17 = mysqli_query($link, $query17) or die("Ошибка " . mysqli_error($link));
    $clear4=$price17;
    if($result17)
      $good17="Успешно!";
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/administration.php">';
  }
  if( isset( $_POST['out'] )){
    echo '<meta http-equiv="refresh" content="0;url=http://calc2.ru/admin/index.html">';
  }
  mysqli_close($link);
  ?>

<section class="administrative">
  <form method="post"><input type="submit" value="Выйти" name="out"></form>
  <div class="heading">Строительный вопрос
    <div class="line_1"></div>
    <div class="line_2"></div>
  </div>

  <form name="form" method="GET">

    <table class="table_pos" border="1">

      <!-- line 0 -->
      <tr class="heading_table">
        <td class="heading_table_left text-center">Название штукатурки</td>
        <td class="heading_table text-center">Старая цена</td>
        <td class="heading_table text-center">Новая цена</td>
        <td class="heading_table_right change_1 text-center">Статус изменения</td>
        <td class="heading_table_right change_2 text-center">Статус</td>
      </tr>

      <!-- line 1 -->
      <tr>
        <td class="column1">
          <div>Штукатурка Knauf MP 75</div>
        </td>
        <td class="text-center">
          <div><?php echo($plaster1) ?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="text" name="Price" size="6">
            <input type="submit" name="red1" value="Подтвердить">
          </div>
        </td>
        <td class="text-center">
          <div><?php echo($good1) ?></div>
        </td>
      </tr>

      <!-- line 2 -->
      <tr>
        <td class="column1">
          <div сlass="column1">Штукатурка ВОЛМА-Гипс-Актив</div>
        </td>
        <td class="text-center">
          <div><?php echo($plaster2) ?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="text" name="Price2" size="6">
            <input type="submit" name="red2" value="Подтвердить">
          </div>
        </td>
        <td class="text-center">
          <div><?php echo($good2) ?></div>
        </td>
      </tr>

      <!-- line 3 -->
      <tr>
        <td class="column1">
          <div>Штукатурка Knauf UNTERPUTZ</div>
        </td>
        <td class="text-center">
          <div><?php echo($plaster3) ?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="text" name="Price3" size="6">
            <input type="submit" name="red3" value="Подтвердить">
          </div>
        </td>
        <td class="text-center">
          <div><?php echo($good3) ?></div>
        </td>
      </tr>

      <!-- line 4 -->
      <tr>
        <td class="column1">
          <div сlass="column1">Штукатурка Plitonit T1+</div>
        </td>
        <td class="text-center">
          <div><?php echo($plaster4) ?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="text" name="Price4" size="6">
            <input type="submit" name="red4" value="Подтвердить">
          </div>
        </td>
        <td class="text-center">
          <div><?php echo($good4) ?></div>
        </td>
      </tr>

      <!-- line 5 -->
      <tr>
        <td class="column1">
          <div сlass="column1">Сетка тканая оцинкованная</div>
        </td>
        <td class="text-center">
          <div><?php echo($grid1) ?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="text" name="Price5" size="6">
            <input type="submit" name="red5" value="Подтвердить">
          </div>
        </td>
        <td class="text-center">
          <div><?php echo($good5) ?></div>
        </td>
      </tr>

      <!-- line 6 -->
      <tr>
        <td class="column1">
          <div сlass="column1">Сетка стеклотканевая</div>
        </td>
        <td class="text-center">
          <div><?php echo($grid2) ?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="text" name="Price6" size="6">
            <input type="submit" name="red6" value="Подтвердить">
          </div>
        </td>
        <td class="text-center">
          <div><?php echo($good6) ?></div>
        </td>
      </tr>

      <!-- line 7 -->
      <tr>
        <td class="column1">
          <div>Грунт Knauf Миттельгрунд</div>
        </td>
        <td class="text-center">
          <div><?php echo($primer1) ?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="text" name="Price7" size="6">
            <input type="submit" name="red7" value="Подтвердить">
          </div>
        </td>
        <td class="text-center">
          <div><?php echo($good7) ?></div>
        </td>
      </tr>

      <!-- line 8 -->
      <tr>
        <td class="column1">
          <div>Грунт Крепс Праймер</div>
        </td>
        <td class="text-center">
          <div><?php echo($primer2) ?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="text" name="Price8" size="6">
            <input type="submit" name="red8" value="Подтвердить">
          </div>
        </td>
        <td class="text-center">
          <div><?php echo($good8) ?></div>
        </td>
      </tr>

      <!-- line 9 -->
      <tr>
        <td class="column1">
          <div>Профиль маячковый</div>
        </td>
        <td class="text-center">
          <div><?php echo($pharos) ?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="text" name="Price9" size="6">
            <input type="submit" name="red9" value="Подтвердить">
          </div>
        </td>
        <td class="text-center">
          <div><?php echo($good9) ?></div>
        </td>
      </tr>

      <!-- line 10 -->
      <tr>
        <td class="column1">
          <div>Шайба</div>
        </td>
        <td class="text-center">
          <div><?php echo($shim) ?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="text" name="Price10" size="6">
            <input type="submit" name="red10" value="Подтвердить">
          </div>
        </td>
        <td class="text-center">
          <div><?php echo($good10) ?></div>
        </td>
      </tr>

      <!-- line 11 -->
      <tr>
        <td class="column1">
          <div>Дюбель-гвоздь</div>
        </td>
        <td class="text-center">
          <div><?php echo($nail) ?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="text" name="Price11" size="6">
            <input type="submit" name="red11" value="Подтвердить">
          </div>
        </td>
        <td class="text-center">
          <div><?php echo($good11) ?></div>
        </td>
      </tr>

      <!-- line 12 -->
      <tr>
        <td class="column1">
          <div>Черновая отделка стен. Старый фонд</div>
        </td>
        <td class="text-center">
          <div><?php echo($dirty) ?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="text" name="Price12" size="6">
            <input type="submit" name="red12" value="Подтвердить">
          </div>
        </td>
        <td class="text-center">
          <div><?php echo($good12) ?></div>
        </td>
      </tr>

      <!-- line 13 -->
      <tr>
        <td class="column1">
          <div>Чистовая отделка стен. Старый фонд</div>
        </td>
        <td class="text-center">
          <div><?php echo($clear1) ?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="text" name="Price13" size="6">
            <input type="submit" name="red13" value="Подтвердить">
          </div>
        </td>
        <td class="text-center">
          <div><?php echo($good13) ?></div>
        </td>
      </tr>

      <!-- line 14 -->
      <tr>
        <td class="column1">
          <div>Черновая отделка стен. Остальные</div>
        </td>
        <td class="text-center">
          <div><?php echo($dirty2) ?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="text" name="Price16" size="6">
            <input type="submit" name="red16" value="Подтвердить">
          </div>
        </td>
        <td class="text-center">
          <div><?php echo($good16) ?></div>
        </td>
      </tr>

      <!-- line 15 -->
      <tr>
        <td class="column1">
          <div>Чистовая отделка стен. Остальные</div>
        </td>
        <td class="text-center">
          <div><?php echo($clear4) ?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="text" name="Price17" size="6">
            <input type="submit" name="red17" value="Подтвердить">
          </div>
        </td>
        <td class="text-center">
          <div><?php echo($good17) ?></div>
        </td>
      </tr>

      <!-- line 16 -->
      <tr>
        <td class="column1">
          <div>Чистовая отделка потолков</div>
        </td>
        <td class="text-center">
          <div class="text-center"><?php echo($clear2) ?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="text" name="Price14" size="6">
            <input type="submit" name="red14" value="Подтвердить">
          </div>
        </td>
        <td class="text-center">
          <div><?php echo($good14) ?></div>
        </td>
      </tr>

      <!-- line 17 -->
      <tr>
        <td class="column1">
          <div>Чистовая отделка откосов</div>
        </td>
        <td class="text-center">
          <div><?php echo($clear3) ?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="text" name="Price15" size="6">
            <input type="submit" name="red15" value="Подтвердить">
          </div>
        </td>
        <td class="text-center">
          <div><?php echo($good15) ?></div>
        </td>
      </tr>

    </table>

  </form>

</section>

</body>
</html>
