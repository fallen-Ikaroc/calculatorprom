<!DOCTYPE HTML>
<html>
<head>
<title><?=$header_title?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="<?=$header_metaD?>">
<meta name="keywords" content="<?=$header_metaK?>">
<link rel="stylesheet" type="text/css" href="templates/style_admin.css"/>
</head>

<body>

<section class="administrative">

  <div class="d-flex">
    <a class="start" href="index.php">Добро пожаловать в админ панель</a>
  </div>

  <div class="d-flex heading">
    <div>Строительный вопрос
      <div class="line_1"></div>
      <div class="line_2"></div>
    </div>
    <a href="exit.php" class="phm-go-back">Выход</a>
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
          <div><?=$plaster1?></div>
        </td>
        <td>
          <div class="d-flex">
            <input class="column3_1" type="number" name="Price">
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
            <input class="column3_1" type="number" name="Price2">
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
            <input class="column3_1" type="number" name="Price3">
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
            <input class="column3_1" type="number" name="Price4">
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
            <input class="column3_1" type="number" name="Price5">
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
            <input class="column3_1" type="number" name="Price6">
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
            <input class="column3_1" type="number" name="Price7">
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
            <input class="column3_1" type="number" name="Price8">
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
            <input class="column3_1" type="number" name="Price9">
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
            <input class="column3_1" type="number" name="Price10">
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
            <input class="column3_1" type="number" name="Price11">
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
            <input class="column3_1" type="number" name="Price12">
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
            <input class="column3_1" type="number" name="Price13">
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
            <input class="column3_1" type="number" name="Price16">
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
            <input class="column3_1" type="number" name="Price17">
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
            <input class="column3_1" type="number" name="Price14">
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
            <input class="column3_1" type="number" name="Price15">
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
