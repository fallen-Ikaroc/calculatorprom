<?php
require_once 'connection.php';
$link = mysqli_connect($host, $user, $password, $database)
    or die("Ошибка " . mysqli_error($link));
$query ="SELECT * FROM prices";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
  $rows = mysqli_num_rows($result); // количество полученных строк

  for ($i = 0 ; $i < $rows ; ++$i)
  {
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
  // очищаем результат
  mysqli_free_result($result);
}
mysqli_close($link);
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="jquery-1.12.4.min.js"></script>
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
  <script src="bootstrap.min.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
</head>
<body>

  <!-- Block1 -->
  <div style="display: none;">
    <div id="price_plaster1"><?php echo($plaster1)?></div>
    <div id="price_plaster2"><?php echo($plaster2)?></div>
    <div id="price_plaster3"><?php echo($plaster3)?></div>
    <div id="price_plaster4"><?php echo($plaster4)?></div>
    <div id="price_primer1"><?php echo($primer1)?></div>
    <div id="price_primer2"><?php echo($primer2)?></div>
    <div id="price_grid1"><?php echo($grid1)?></div>
    <div id="price_grid2"><?php echo($grid2)?></div>
    <div id="price_pharos"><?php echo($pharos)?></div>
    <div id="price_shim"><?php echo($shim)?></div>
    <div id="price_nail"><?php echo($nail)?></div>
    <div id="price_dirty"><?php echo($dirty)?></div>
    <div id="price_clear1"><?php echo($clear1)?></div>
    <div id="price_dirty2"><?php echo($dirty2)?></div>
    <div id="price_clear4"><?php echo($clear4)?></div>
    <div id="price_clear2"><?php echo($clear2)?></div>
    <div id="price_clear3"><?php echo($clear3)?></div>
  </div>
<section id="block1">

  <div id="block1_position" class="p-5">

    <div class="heading_block1 text-center pb-5">Калькулятор штукатурных работ</div>

    <div class="d-flex pb-4">
      <div class="m-0">
        <div class="heading">Выберите тип основания</div>
        <div class="line_1 mb-1"></div>
        <div class="line_2"></div>
      </div>
      <div class="flex-fill"></div>
      <a class="align-self-end text-center button_type_object button_ver2_plaster_choice m-0 font-weight-bold" id="return_to_font">Изменить тип основания</a>
    </div>

    <div class="d-flex align-items-center justify-content-center">

      <div class="shadow_1 card effect__click p-4 justify-content-center">

      <!-- Выбор стены -->
        <div id="block1_ver1" class="d-flex card__front">

          <div class="d-flex block1_ver1_1">

            <label class="block1_brick" for="block1_brick">
              <div class="brick img_block">
                <div class="content_block">
                  <div class="over_block"></div>
                  <span>кирпич</span>
                </div>
              </div>
            </label>
            <label class="block1_monolith" class="block1_monolith" for="block1_monolith">
              <div class="monolith img_block">
                <div class="content_block">
                  <div class="over_block"></div>
                  <span>монолит</span>
                </div>
              </div>
            </label>

          </div>

          <div class="d-flex block1_ver1_2">

            <label class="block1_aerocrete" class="block1_aerocrete" for="block1_aerocrete">
              <div class="aerocrete img_block">
                <div class="content_block">
                  <div class="over_block"></div>
                  <span>газобетон</span>
                </div>
              </div>
            </label>
            <label class="block1_cinder" class="block1_cinder" for="block1_cinder">
              <div class="cinder img_block">
                <div class="content_block">
                  <div class="over_block"></div>
                  <span>шлакоблок</span>
                </div>
              </div>
            </label>

          </div>

        </div>

      <!-- Выбор штукатурки -->
        <div id="block1_ver2" class="d-flex card__back">

           <div class="d-flex block1_ver2_1">

            <div class="block1_brick d-flex flex-column text-center block1_ver2_plaster shadow_2">
              <div class="d-flex p-2">
                <div class="d-flex align-self-center">
                  <div class="block1_ver2_plaster_info_position m-0"></div>
                </div>
                <div class="flex-fill font-weight-bold">Штукатурка гипсовая Knauf MP 75</div>
                <div class="d-flex align-self-center text-white">
                  <a href="#modal_plaster_knaufg" class="popup-content">
                    <img src="img/info-button.svg" class="button_info align-self-center">
                  </a>
                </div>
              </div>
              <div class="d-flex flex-fill">
                <a href="#modal_plaster_knaufg" class="d-flex align-items-center w-50 p-1 popup-content">
                  <img src="img/knaufg.jpg" class="img-fluid" alt="Responsive image">
                </a>
                <div class="d-flex flex-column block1_ver2_plaster_info_text text-left p-1 w-50">
                  <div class="d-flex flex-fill">
                    <div class="align-self-center">
                      <span class="font-weight-bold">Вес брутто: </span>30 кг;<br>
                      <span class="font-weight-bold">Расход: </span>8 – 9 кг/м²/10 мм;<br>
                      <span class="font-weight-bold">Толщина слоя: </span><br>&bull; стена 8 – 50 мм,<br>&bull; потолок 8 – 15 мм<br>
                    </div>
                  </div>
                  <div class="text-center font-weight-bold">
                    Цена: <?php echo($plaster1)?> руб
                  </div>
                </div>
              </div>
              <div class="p-2"><label for="block1_knaufg" class="block1_ver2_plaster_choice button_ver2_plaster_choice m-0 font-weight-bold">Выбрать</label></div>
            </div>

            <div class="block1_monolith d-flex flex-column text-center block1_ver2_plaster shadow_2">
              <div class="d-flex p-2">
                <div class="d-flex align-self-center">
                  <div class="block1_ver2_plaster_info_position m-0"></div>
                </div>
                <div class="flex-fill font-weight-bold">Штукатурка гипсовая ВОЛМА-Гипс-Актив</div>
                <div class="d-flex align-self-center text-white">
                  <a href="#modal_plaster_volma" class="popup-content">
                    <img src="img/info-button.svg" class="button_info align-self-center">
                  </a>
                </div>
              </div>
              <div class="d-flex flex-fill">
                <a href="#modal_plaster_volma" class="d-flex align-items-center w-50 p-1 popup-content">
                  <img src="img/volma.png" class="img-fluid" alt="Responsive image">
                </a>
                <div class="d-flex flex-column block1_ver2_plaster_info_text text-left p-1 w-50">
                  <div class="d-flex flex-fill">
                    <div class="align-self-center">
                      <span class="font-weight-bold">Вес брутто: </span>30 кг;<br>
                      <span class="font-weight-bold">Расход: </span>7,5 – 8,5 кг/м²/10 мм;<br>
                      <span class="font-weight-bold">Толщина слоя: </span><br>5 – 60 мм;<br>
                    </div>
                  </div>
                  <div class="text-center font-weight-bold">
                    Цена: <?php echo($plaster2)?> руб
                  </div>
                </div>
              </div>
              <div class="p-2"><label for="block1_volma" class="block1_ver2_plaster_choice button_ver2_plaster_choice m-0 font-weight-bold">Выбрать</label></div>
            </div>

          </div>

          <div class="d-flex block1_ver2_2">

            <div class="block1_aerocrete d-flex flex-column text-center block1_ver2_plaster shadow_2">
              <div class="d-flex p-2">
                <div class="d-flex align-self-center">
                  <div class="block1_ver2_plaster_info_position m-0"></div>
                </div>
                <div class="flex-fill font-weight-bold">Штукатурка цементная Knauf UNTERPUTZ</div>
                <div class="d-flex align-self-center text-white">
                  <a href="#modal_plaster_knaufc" class="popup-content">
                    <img src="img/info-button.svg" class="button_info align-self-center">
                  </a>
                </div>
              </div>
              <div class="d-flex flex-fill">
                <a href="#modal_plaster_knaufc" class="d-flex align-items-center w-50 p-1 popup-content">
                  <img src="img/knaufc.png" class="img-fluid" alt="Responsive image">
                </a>
                <div class="d-flex flex-column block1_ver2_plaster_info_text text-left p-1 w-50">
                  <div class="d-flex flex-fill">
                    <div class="align-self-center">
                      <span class="font-weight-bold">Вес брутто: </span>25 кг;<br>
                      <span class="font-weight-bold">Расход: </span>17 – 18 кг/м²/10 мм;<br>
                      <span class="font-weight-bold">Толщина слоя: </span><br>10 – 35 мм;<br>
                    </div>
                  </div>
                  <div class="text-center font-weight-bold">
                    Цена: <?php echo($plaster3)?> руб
                  </div>
                </div>
              </div>
              <div class="p-2"><label for="block1_knaufc" class="block1_ver2_plaster_choice button_ver2_plaster_choice m-0 font-weight-bold">Выбрать</label></div>
            </div>

            <div class="block1_cinder d-flex flex-column text-center block1_ver2_plaster shadow_2">
              <div class="d-flex p-2">
                <div class="d-flex align-self-center">
                  <div class="block1_ver2_plaster_info_position m-0"></div>
                </div>
                <div class="flex-fill font-weight-bold">Штукатурка цементная Plitonit T1+</div>
                <div class="d-flex align-self-center text-white">
                  <a href="#modal_plaster_plitonit" class="popup-content">
                    <img src="img/info-button.svg" class="button_info align-self-center">
                  </a>
                </div>
              </div>
              <div class="d-flex flex-fill">
                <a href="#modal_plaster_plitonit" class="d-flex align-items-center w-50 p-1 popup-content">
                  <img src="img/plitonit.png" class="img-fluid" alt="Responsive image">
                </a>
                <div class="d-flex flex-column block1_ver2_plaster_info_text text-left p-1 w-50">
                  <div class="d-flex flex-fill">
                    <div class="align-self-center">
                      <span class="font-weight-bold">Вес брутто: </span>25 кг;<br>
                      <span class="font-weight-bold">Расход: </span>12 – 13 кг/м²/10 мм;<br>
                      <span class="font-weight-bold">Толщина слоя: </span><br>2 – 30 мм;<br>
                    </div>
                  </div>
                  <div class="text-center font-weight-bold">
                    Цена: <?php echo($plaster4)?> руб
                  </div>
                </div>
              </div>
              <div class="p-2"><label for="block1_plitonit" class="block1_ver2_plaster_choice button_ver2_plaster_choice m-0 font-weight-bold">Выбрать</label></div>
            </div>

          </div>

        </div>

      </div>

    </div>

    <div id="block1_place">
      <input type="radio" id="block1_brick" name="place" value="1"  class="block1_place_">
      <input type="radio" id="block1_monolith" name="place" value="2" class="block1_place_">
      <input type="radio" id="block1_aerocrete" name="place" value="3" class="block1_place_">
      <input type="radio" id="block1_cinder" name="place" value="4" class="block1_place_">
    </div>

    <div id="block1_plaster">
      <input type="radio" id="block1_knaufg" name="plaster" value="1" class="radio_plaster" checked>
      <input type="radio" id="block1_volma" name="plaster" value="2" class="radio_plaster">
      <input type="radio" id="block1_knaufc" name="plaster" value="3" class="radio_plaster">
      <input type="radio" id="block1_plitonit" name="plaster" value="4" class="radio_plaster">
    </div>

  </div>

</section>


  <!-- Block2 Area -->

<section id="block2_area">

  <div class="block_position p-5">

    <div id="block2_wall">

      <div class="d-flex pb-4">
        <div class="m-0">
          <div class="heading">Выберите область работ</div>
          <div class="line_1 mb-1"></div>
          <div class="line_2"></div>
        </div>
      </div>

      <div class="out_display">
        <input type="radio" id="block2_wall_type_dirty_fond" name="types_fond" value=<?php echo($dirty)?> checked class="radio_type1">
        <input type="radio" id="block2_wall_type_clear_fond" name="types_fond" value=<?php echo($clear1)?> class="radio_type1">
        <input type="radio" id="block2_wall_type_dirty" name="types" value=<?php echo($dirty2)?> checked class="radio_type">
        <input type="radio" id="block2_wall_type_clear" name="types" value=<?php echo($clear4)?> class="radio_type">
      </div>

      <nav class="heading_nav">

        <div class="nav nav-tabs d-flex" id="nav-tab" role="tablist">
          <a class="nav-item col-4 text-center nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
            <div class="pos_rel justify-content-center align-items-center">
              Стены
              <img id="checkmark_wall" src="img/done.svg" class="checkmark">
            </div>
          </a>
          <a class="nav-item flex-fill text-center nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
            <div class="pos_rel justify-content-center align-items-center">
              Потолки
              <img id="checkmark_roof" src="img/done.svg" class="checkmark">
            </div>
          </a>
          <a class="nav-item col-4 text-center nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
            <div class="pos_rel justify-content-center align-items-center">
              Откосы
              <img id="checkmark_window" src="img/done.svg" class="checkmark">
            </div>
          </a>
        </div>

        <div class="tab-content" id="nav-tabContent">

          <!-- Стены -->
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

            <div class="d-flex p-3">
              <img src="img/right-arrow.svg" class="arrow align-self-center pr-2">
              <div class="heading_block2">Выберите тип отделки</div>
            </div>

            <div class="d-flex forcards" id="other_card">

              <div class="d-flex w-50 justify-content-center">
                <div class="d-flex w-75 align-self-center justify-content-center card effect__hover">

                  <div id="finish_dirty" class="align-self-center w-100 p-3 card__front box box_outline">
                    <div class="text-center heading_block2">Черновая отделка</div>
                    <div class="text-center block2_type_text_cost">от <?php echo($dirty2)?> руб/м&sup2;</div>
                  </div>

                  <div id="finish_dirty_2" class="align-self-center text-center block2_finish_text w-100 h-100 p-2 box card__back box_outline">
                    <img src="img/right-arrow.svg" class="arrow align-self-center pr-2">
                    Под плитку<br>
                    <img src="img/right-arrow.svg" class="arrow align-self-center pr-2">
                    Под камень
                    <div class="text-center"><label for="block2_wall_type_dirty" class="w-50 block2_choice button_choice font-weight-bold">Выбрать</label></div>
                  </div>

                </div>
              </div>

              <div class="d-flex w-50 justify-content-center">

                <div class="d-flex w-75 align-self-center justify-content-center card effect__hover">

                  <div id="finish_clear" class="align-self-center p-3 w-100 card__front box">
                    <div class="text-center heading_block2">Чистовая отделка</div>
                    <div class="text-center block2_type_text_cost">от <?php echo($clear4)?> руб/м&sup2;</div>
                  </div>

                  <div id="finish_clear_2" class="align-self-center text-center block2_finish_text w-100 h-100 p-2 card__back box">
                    <img src="img/right-arrow.svg" class="arrow alignsself-center pr-2">
                    Под шпатлёвку<br>
                    <img src="img/right-arrow.svg" class="arrow align-self-center pr-2">
                    Под обои
                    <div class="text-center"><label for="block2_wall_type_clear" class="w-50 block2_choice button_choice font-weight-bold">Выбрать</label></div>
                  </div>

                </div>
              </div>

            </div>

            <div class="d-flex" id="fond_card">

              <div class="d-flex w-50 justify-content-center">
                <div class="d-flex w-75 align-self-center justify-content-center card effect__hover">

                  <div id="finish_dirty2" class="align-self-center w-100 p-3 card__front box box_outline">
                    <div class="text-center heading_block2">Черновая отделка</div>
                    <div class="text-center block2_type_text_cost">от <?php echo($dirty)?> руб/м&sup2;</div>
                  </div>

                  <div id="finish_dirty2_2" class="align-self-center text-center block2_finish_text w-100 h-100 p-2 box card__back box_outline">
                    <img src="img/right-arrow.svg" class="arrow align-self-center pr-2">
                    Под плитку<br>
                    <img src="img/right-arrow.svg" class="arrow align-self-center pr-2">
                    Под камень
                    <div class="text-center"><label for="block2_wall_type_dirty_fond" class="w-50 block2_choice button_choice font-weight-bold">Выбрать</label></div>
                  </div>

                </div>
              </div>

              <div class="d-flex w-50 justify-content-center">
                <div class="d-flex w-75 align-self-center justify-content-center card effect__hover">

                  <div id="finish_clear2" class="align-self-center p-3 w-100 card__front box">
                    <div class="text-center heading_block2">Чистовая отделка</div>
                    <div class="text-center block2_type_text_cost">от <?php echo($clear1)?> руб/м&sup2;</div>
                  </div>

                  <div id="finish_clear2_2" class="align-self-center text-center block2_finish_text w-100 h-100 p-2 card__back box">
                    <img src="img/right-arrow.svg" class="arrow alignsself-center pr-2">
                    Под шпатлёвку<br>
                    <img src="img/right-arrow.svg" class="arrow align-self-center pr-2">
                    Под обои
                    <div class="text-center"><label for="block2_wall_type_clear_fond" class="w-50 block2_choice button_choice font-weight-bold">Выбрать</label></div>
                  </div>

                </div>
              </div>

            </div>

            <div class="d-flex p-3">
              <img src="img/right-arrow.svg" class="arrow align-self-center pr-2">
              <div class="heading_block2">Штукатурка</div>
            </div>

            <div class="d-flex">

              <div class="w-50">
                <div class="d-flex font-weight-bold string_1">
                  <div class="d-flex col border_area_top_left"><div class="text-center align-self-center w-100">Площадь</div></div>
                  <div class="d-flex col border_area_top_right"><div class="text-center align-self-center w-100">Толщина слоя</div></div>
                  <!-- <div class="d-flex flex-fill col p-0 border_top"><div class="text-center align-self-center w-100">Цена мешка</div></div>
                  <div class="d-flex flex-fill col p-0 border_top"><div class="text-center align-self-center w-100">Расход</div></div>
                  <div class="d-flex flex-fill col p-0 border_top"><div class="text-center align-self-center w-100">Вес</div></div>
                  <div class="d-flex flex-fill col p-0 border_top"><div class="text-center align-self-center w-100">Количество</div></div>
                  <div class="d-flex flex-fill col p-0 border_top_right"><div class="text-center align-self-center w-100">Цена</div></div> -->
                </div>
                <div class="d-flex string_2">
                  <div class="d-flex col border_area_bottom_left">
                    <div class="text-center align-self-center w-100">
                      <input id="wall_plaster_square" class="text-center p-0" type="text" type="number" onkeyup="this.value = this.value.replace(/[^\d]/g,'');" maxlength="4" value="0"></input>
                      &nbsp;м&sup2;
                    </div>
                  </div>
                  <div class="d-flex col border_area_bottom_right">
                    <div class="d-flex text-center justify-content-center align-self-center w-100">
                      <div class="d-flex text-center">
                        <select id="wall_plaster_thickness">
                          <option value="15" selected>15</option>
                          <option value="20">20</option>
                          <option value="25">25</option>
                          <option value="30">30</option>
                          <option value="35">35</option>
                          <option value="40">40</option>
                        </select>
                        <div>&nbsp;мм</div>
                      </div>
                    </div>
                  </div>
                  <div class="out_display">
                    <div class="d-flex col border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div class=""id="wall_plaster_price"><?php echo($plaster1)?></div>&nbsp;руб</div></div>
                    <div class="d-flex col border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="wall_plaster_consume" class="content">15</div>&nbsp;кг/м&sup2;</div></div>
                    <div class="d-flex col border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="wall_plaster_weight">0</div>&nbsp;кг</div></div>
                    <div class="d-flex col border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="wall_plaster_quantity">0</div>&nbsp;шт</div></div>
                    <div class="d-flex col border_bottom_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="wall_plaster_sum">0</div>&nbsp;руб</div></div>
                  </div>
                </div>
              </div>

              <div class="d-flex w-50 button_calculate justify-content-center">
                <button id="button_calculate_wall" type="button" class="align-self-center text-center button_calculate_1 font-weight-bold">Произвести рассчёт</button>
              </div>

            </div>

              <div class="out_display">
                <div class="d-flex font-weight-bold string_1">
                  <div class="d-flex flex-fill border_top_left"><div class="text-center align-self-center w-100">Площадь</div></div>
                  <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Упаковка</div></div>
                  <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">м&sup2;/граммы</div></div>
                  <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Расход</div></div>
                  <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Вес</div></div>
                  <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Количество</div></div>
                  <div class="d-flex flex-fill border_top_right"><div class="text-center align-self-center w-100">Цена</div></div>
                </div>
                <div class="d-flex string_2">
                  <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="wall_primer_price"><?php echo($primer1)?></div>&nbsp;руб</div></div>
                  <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="wall_primer_consume">0</div>&nbsp;кг/м&sup2;</div></div>
                  <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="wall_primer_weight">0</div>&nbsp;кг</div></div>
                  <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="wall_primer_quantity">0</div>&nbsp;шт</div></div>
                  <div class="d-flex flex-fill border_bottom_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="wall_primer_sum">0</div>&nbsp;руб</div></div>
                </div>
              </div>

              <div class="out_display">
                <div class="d-flex font-weight-bold string_1">
                  <div class="d-flex flex-fill border_top_left"><div class="text-center align-self-center w-100">Площадь</div></div>
                  <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Упаковка</div></div>
                  <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Размеры</div></div>
                  <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Расход</div></div>
                  <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Вес</div></div>
                  <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Количество</div></div>
                  <div class="d-flex flex-fill border_top_right"><div class="text-center align-self-center w-100">Цена</div></div>
                </div>
                <div class="d-flex string_2">
                  <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="wall_grid_price"><?php echo($grid1)?></div>&nbsp;руб</div></div>
                  <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100">1 шт/<div id="wall_grid_consume">0</div>&nbsp;м&sup2;</div></div>
                  <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="wall_grid_weight">0</div>&nbsp;кг</div></div>
                  <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="wall_grid_quantity">0</div>&nbsp;шт</div></div>
                  <div class="d-flex flex-fill border_bottom_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="wall_grid_sum">0</div>&nbsp;руб</div></div>
                </div>
              </div>

          </div>

          <!-- Потолки -->
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

            <div class="d-flex p-3">
              <img src="img/right-arrow.svg" class="arrow align-self-center pr-2">
              <div class="heading_block2">Тип отделки</div>
            </div>

            <div class="d-flex">
              <div class="d-flex w-100 justify-content-center">
                <div class="d-flex w-50 align-self-center justify-content-center box box_outline">
                  <div class="align-self-center p-3">
                    <div class="text-center heading_block2">Чистовая отделка</div>
                    <div class="text-center block2_type_text_cost">от <?php echo($clear2)?> руб/м&sup2;</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="d-flex p-3">
              <img src="img/right-arrow.svg" class="arrow align-self-center pr-2">
              <div class="heading_block2">Штукатурка</div>
            </div>

            <div class="d-flex">

              <div class="w-50">
                <div class="d-flex font-weight-bold string_1 col p-0">
                  <div class="d-flex col border_area_top_left"><div class="text-center align-self-center w-100">Площадь</div></div>
                  <div class="d-flex col border_area_top_right"><div class="text-center align-self-center w-100">Толщина слоя</div></div>
                  <!-- <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Цена мешка</div></div>
                  <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Расход</div></div>
                  <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Вес</div></div>
                  <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Количество</div></div>
                  <div class="d-flex flex-fill border_top_right"><div class="text-center align-self-center w-100">Цена</div></div> -->
                </div>
                <div class="d-flex string_2">
                  <div class="d-flex col border_area_bottom_left">
                    <div class="text-center align-self-center w-100">
                      <input id="roof_plaster_square" class="text-center p-0" type="text" type="number" onkeyup="this.value = this.value.replce(/[^\d]/g,'');" maxlength="4" value="0"></input>
                      &nbsp;м&sup2;
                    </div>
                  </div>
                  <div class="d-flex col border_area_bottom_right">
                    <div class="d-flex text-center justify-content-center align-self-center w-100">
                          <div class="d-flex text-center">
                            <select id="roof_plaster_thickness">
                              <option value="15" selected>15</option>
                              <option value="20">20</option>
                              <option value="25">25</option>
                              <option value="30">30</option>
                              <option value="35">35</option>
                              <option value="40">40</option>
                            </select>
                            <div>&nbsp;мм</div>
                          </div>
                        </div>
                  </div>
                  <div class="out_display">
                        <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div class=""id="roof_plaster_price"><?php echo($plaster1)?></div>&nbsp;руб</div></div>
                        <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="roof_plaster_consume" class="content">15</div>&nbsp;кг/м&sup2;</div></div>
                        <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="roof_plaster_weight">0</div>&nbsp;кг</div></div>
                        <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="roof_plaster_quantity">0</div>&nbsp;шт</div></div>
                        <div class="d-flex flex-fill border_bottom_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="roof_plaster_sum">0</div>&nbsp;руб</div></div>
                      </div>
                </div>
              </div>

              <div class="d-flex w-50 button_calculate justify-content-center">
                <button id="button_calculate_roof" type="button" class="align-self-center text-center button_calculate_1 font-weight-bold">Произвести рассчёт</button>
              </div>

            </div>

            <div class="out_display">
                <div class="d-flex font-weight-bold string_1">
                  <div class="d-flex col border_top_left"><div class="text-center align-self-center w-100">Площадь</div></div>
                  <div class="d-flex col border_top"><div class="text-center align-self-center w-100">Упаковка</div></div>
                  <div class="d-flex col border_top"><div class="text-center align-self-center w-100">м&sup2;/граммы</div></div>
                  <div class="d-flex col border_top"><div class="text-center align-self-center w-100">Расход</div></div>
                  <div class="d-flex col border_top"><div class="text-center align-self-center w-100">Вес</div></div>
                  <div class="d-flex col border_top"><div class="text-center align-self-center w-100">Количество</div></div>
                  <div class="d-flex col border_top_right"><div class="text-center align-self-center w-100">Цена</div></div>
                </div>
                <div class="d-flex string_2">
                  <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="roof_primer_price"><?php echo($primer1)?></div>&nbsp;руб</div></div>
                  <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="roof_primer_consume">0</div>&nbsp;кг/м&sup2;</div></div>
                  <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="roof_primer_weight">0</div>&nbsp;кг</div></div>
                  <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="roof_primer_quantity">0</div>&nbsp;шт</div></div>
                  <div class="d-flex flex-fill border_bottom_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="roof_primer_sum">0</div>&nbsp;руб</div></div>
                </div>
              </div>

          </div>

          <!-- Откосы -->
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

            <div class="d-flex p-3">
              <img src="img/right-arrow.svg" class="arrow align-self-center pr-2">
              <div class="heading_block2">Тип отделки</div>
            </div>

            <div class="d-flex">
              <div class="d-flex w-100 justify-content-center">
                <div class="d-flex w-50 align-self-center justify-content-center box box_outline">
                  <div class="align-self-center p-3">
                    <div class="text-center heading_block2">Чистовая отделка</div>
                    <div class="text-center block2_type_text_cost">от <?php echo($clear3)?> руб/м. п.</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="d-flex p-3">
              <img src="img/right-arrow.svg" class="arrow align-self-center pr-2">
              <div class="heading_block2">Штукатурка</div>
            </div>

            <div class="d-flex">
              <div class="w-75">
                <div class="d-flex font-weight-bold string_1">
                  <div class="d-flex col border_area_top_left"><div class="text-center align-self-center w-100">Площадь</div></div>
                  <div class="d-flex col border_area_top"><div class="text-center align-self-center w-100">Толщина слоя</div></div>
                  <div class="d-flex col border_area_top_right"><div class="text-center align-self-center w-100">Ширина</div></div>
                  <!-- <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Цена мешка</div></div>
                  <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Расход</div></div>
                  <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Вес</div></div>
                  <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Количество</div></div>
                  <div class="d-flex flex-fill border_top_right"><div class="text-center align-self-center w-100">Цена</div></div> -->
                </div>
                <div class="d-flex string_2">
                  <div class="d-flex col border_area_bottom_left"><div class="text-center align-self-center w-100"><input id="window_plaster_square" class="text-center p-0" type="text" type="number" onkeyup="this.value = this.value.replace(/[^\d]/g,'');" maxlength="3" value="0"></input>&nbsp;м. п.</div></div>
                  <div class="d-flex col border_area_bottom">
                    <div class="d-flex text-center justify-content-center align-self-center w-100">
                      <div class="d-flex text-center">
                        <select id="window_plaster_thickness">
                          <option value="15" selected>15</option>
                          <option value="20">20</option>
                          <option value="25">25</option>
                          <option value="30">30</option>
                          <option value="35">35</option>
                          <option value="40">40</option>
                        </select>
                        <div>&nbsp;мм</div>
                      </div>
                    </div>
                  </div>
                  <div class="d-flex col border_area_bottom_right">
                    <div class="text-center align-self-center w-100">
                      <input id="window_plaster_width" class="text-center p-0" type="text" type="number" onkeyup="this.value = this.value.replace(/[^\d]/g,'');" maxlength="3" value="0"></input>
                      &nbsp;мм
                    </div>
                  </div>
                  <div class="out_display">
                    <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div class=""id="window_plaster_price"><?php echo($plaster1)?></div>&nbsp;руб</div></div>
                    <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="window_plaster_consume" class="content">15</div>&nbsp;кг/м&sup2;</div></div>
                    <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="window_plaster_weight">0</div>&nbsp;кг</div></div>
                    <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="window_plaster_quantity">0</div>&nbsp;шт</div></div>
                    <div class="d-flex flex-fill border_bottom_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="window_plaster_sum">0</div>&nbsp;руб</div></div>
                  </div>
                </div>
              </div>

              <div class="d-flex w-50 button_calculate justify-content-center">
                <button id="button_calculate_window" type="button" class="align-self-center text-center button_calculate_1 font-weight-bold">Произвести рассчёт</button>
              </div>

            </div>

            <div class="out_display">
              <div class="d-flex font-weight-bold string_1">
                <div class="d-flex flex-fill border_top_left"><div class="text-center align-self-center w-100">Площадь</div></div>
                <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Упаковка</div></div>
                <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">м. п./граммы</div></div>
                <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Расход</div></div>
                <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Вес</div></div>
                <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">Количество</div></div>
                <div class="d-flex flex-fill border_top_right"><div class="text-center align-self-center w-100">Цена</div></div>
              </div>
              <div class="d-flex string_2">
                <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="window_primer_price"><?php echo($primer1)?></div>&nbsp;руб</div></div>
                <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="window_primer_consume">0</div>&nbsp;кг/м. п.</div></div>
                <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="window_primer_weight">0</div>&nbsp;кг</div></div>
                <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="window_primer_quantity">0</div>&nbsp;шт</div></div>
                <div class="d-flex flex-fill border_bottom_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="window_primer_sum">0</div>&nbsp;руб</div></div>
              </div>
            </div>

          </div>

        </div>

      </nav>

    </div>

    <div class="out_display">

      <div id="block2_wall">
        <div id="block2_wall_plaster"></div>
        <div id="block2_wall_primer">Грунт стены
          <input type="radio" id="block2_wall_primer_knauf" name="wall_primer" value="1" class="radio_wall_primer" checked>
          <input type="radio" id="block2_wall_primer_kreps" name="wall_primer" value="2" class="radio_wall_primer">
        </div>
        <div id="block2_wall_grid">Cетка стены
          <input type="radio" id="block2_wall_grid_glass" name="grid" value="1" class="radio_wall_grid" checked>
          <input type="radio" id="block2_wall_grid_zinc" name="grid" value="2" class="radio_wall_grid">
        </div>
      </div>

      <div id="block2_roof">
        <div id="block2_roof_plaster"></div>
        <div id="block2_roof_primer">Грунт потолка
          <input type="radio" id="block2_roof_primer_knauf" name="roof_primer" value="1" class="radio_roof_primer" checked>
          <input type="radio" id="block2_roof_primer_kreps" name="roof_primer" value="2" class="radio_roof_primer">
        </div>
      </div>

      <div id="block2_window">
        <div id="block2_window_plaster"></div>
        <div id="block2_window_primer">Грунт откосы
          <input type="radio" id="block2_window_primer_knauf" name="window_primer" value="1" class="radio_window_primer" checked>
          <input type="radio" id="block2_window_primer_kreps" name="window_primer" value="2" class="radio_window_primer">
        </div>
      </div>

    </div>

  </div>

</section>


  <!-- Block3 Material -->

<section id="block3_material" class="block3_material_dn">

  <div class="block_position p-5">

    <div class="d-flex pb-4">
      <div class="m-0">
        <div class="heading">Смета материалов</div>
        <div class="line_1 mb-1"></div>
        <div class="line_2"></div>
      </div>
    </div>

    <div class="block3_material">

      <!-- Строка 0 -->
      <div class="d-flex string_3 font-weight-bold">
        <div class="d-flex flex-fill border_top_left_2"><div class="text-center align-self-center w-100">Материал</div></div>
        <div class="d-flex flex-fill border_top_2"><div class="text-center align-self-center w-100">Площадь</div></div>
        <div class="d-flex flex-fill border_top_2"><div class="text-center align-self-center w-100">Расход</div></div>
        <div class="d-flex flex-fill border_top_2_small"><div class="text-center align-self-center w-100">Кол-во</div></div>
        <div class="d-flex flex-fill border_top_2_small"><div class="text-center align-self-center w-100">Вес</div></div>
        <div class="d-flex flex-fill border_top_2_smaller"><div class="text-center align-self-center w-100">Цена</div></div>
        <div class="d-flex flex-fill border_top_right_2"><div class="text-center align-self-center w-100">Стоимость</div></div>
      </div>

      <div class="block3_material_wall" id="block3_material_wall_id">
      <!-- Строка 1 -->
        <div class="d-flex string_4 font-weight-bold">
          <div class="d-flex flex-fill border_middle_4">
            <div class="d-flex align-self-center justify-content-center w-100">Стены</div>
            <img src="img/cross-sign.svg" class="cross align-self-center" id="cross_wall">
          </div>
        </div>

      <!-- Строка 2 -->
        <div class="d-flex string_4">
          <div class="d-flex flex-fill border_middle_left">
            <div class="d-flex text-center align-self-center w-100" >
            <select id="plaster_wall_outlay" class="font-weight-bold">
                <option value=<?php echo($plaster1) ?>  selected>Гипсовая Knauf MP 75</option>
                <option value=<?php echo($plaster2) ?>>Гипсовая ВОЛМА-Гипс-Актив</option>
                <option value=<?php echo($plaster3) ?>>Цементная Knauf UNTERPUTZ</option>
                <option value=<?php echo($plaster4) ?>>Цементная Plitonit T1+</option>
            </select>
            </div>
            <div id="info_plaster_knaufg" class="d-flex align-self-center button_info_position">
              <a href="#modal_plaster_knaufg" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
            <div id="info_plaster_volma" class="d-flex align-self-center button_info_position forcards">
              <a href="#modal_plaster_volma" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
            <div id="info_plaster_knaufc" class="d-flex align-self-center button_info_position forcards">
              <a href="#modal_plaster_knaufc" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
            <div id="info_plaster_plitonit" class="d-flex align-self-center button_info_position forcards">
              <a href="#modal_plaster_plitonit" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
          </div>

          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_wall_outlay_square">0</div>&nbsp;м&sup2;</div></div>
          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_wall_outlay_consume">15</div>&nbsp;кг/м&sup2;</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_wall_outlay_quantity">0</div>&nbsp;шт</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_wall_outlay_weight">0</div>&nbsp;кг</div></div>
          <div class="d-flex flex-fill border_middle_smaller"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_wall_outlay_price"><?php echo($plaster1)?></div>&nbsp;руб</div></div>
          <div class="d-flex flex-fill border_middle_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_wall_outlay_sum">0</div>&nbsp;руб</div></div>
        </div>

      <!-- Строка 3 -->
        <div class="d-flex string_4">
          <div class="d-flex flex-fill border_middle_left">
            <div class="text-center align-self-center font-weight-bold w-100">
              <div id="primer_wall_outlay">Грунт Knauf Миттельгрунд</div>
            </div>

            <div id="info_primer_knauf" class="d-flex align-self-center button_info_position ">
              <a href="#modal_primer_knauf" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
            <div id="info_primer_kreps" class="d-flex align-self-center button_info_position forcards">
              <a href="#modal_primer_kreps" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>

          </div>
          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100"><div id="wall_primer_square">0</div>&nbsp;м&sup2;</div></div>
          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100">100 г/<div id="wall_primer_consumeperone">0.2</div>&nbsp;кг</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="primer_wall_outlay_quantity">0</div>&nbsp;шт</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="primer_wall_outlay_weight">0</div>&nbsp;кг</div></div>
          <div class="d-flex flex-fill border_middle_smaller"><div class="d-flex align-self-center justify-content-center w-100"><div id="primer_wall_outlay_price"><?php echo($primer1)?></div>&nbsp;руб</div></div>
          <div class="d-flex flex-fill border_middle_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="primer_wall_outlay_sum">0</div>&nbsp;руб</div></div>
        </div>

      <!-- Строка 4 -->
        <div class="d-flex string_4">
          <div class="d-flex flex-fill border_middle_left">
            <div class="text-center font-weight-bold align-self-center w-100">
              <div id="pharos_wall_outlay">Профиль маячковый</div>
            </div>
            <div class="d-flex align-self-center button_info_position">
              <a href="#modal_pharos" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
          </div>
          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100"><div id="pharos_wall_outlay_square">0</div>&nbsp;м&sup2;</div></div>
          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100"><div id="pharos_wall_outlay_consume">0,33</div>&nbsp;шт/м&sup2;</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="pharos_wall_outlay_quantity">0</div>&nbsp;шт</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="pharos_wall_outlay_weight">0</div>&nbsp;кг</div></div>
          <div class="d-flex flex-fill border_middle_smaller"><div class="d-flex align-self-center justify-content-center w-100"><div id="pharos_wall_outlay_price"><?php echo($pharos)?></div>&nbsp;руб</div></div>
          <div class="d-flex flex-fill border_middle_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="pharos_wall_outlay_sum">0</div>&nbsp;руб</div></div>
        </div>

      <!-- Строка 5 -->
        <div class="d-flex string_4">
          <div class="d-flex flex-fill border_middle_left">
            <div class="text-center font-weight-bold align-self-center w-100">
              <div id="grid_outlay">Сетка тканая оцинкованная</div>
            </div>
            <div id="info_grid_zink" class="d-flex align-self-center button_info_position">
              <a href="#modal_grid_zink" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
            <div id="info_grid_glass" class="d-flex align-self-center button_info_position forcards">
              <a href="#modal_grid_glass" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>

          </div>
          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100"><div id="wall_grid_square">0</div>&nbsp;м&sup2;</div></div>
          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100">1x<div id="wall_grid_consumeperone">30</div>&nbsp;м</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="grid_outlay_quantity">0</div>&nbsp;шт</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="gris_outlay_weight">0</div>&nbsp;кг</div></div>
          <div class="d-flex flex-fill border_middle_smaller"><div class="d-flex align-self-center justify-content-center w-100"><div id="grid_outlay_price"></div>&nbsp;руб</div></div>
          <div class="d-flex flex-fill border_middle_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="grid_outlay_sum">0</div>&nbsp;руб</div></div>
        </div>
      </div>

      <div class="block3_material_roof" id="block3_material_roof_id">
      <!-- Строка 6 -->
        <div class="d-flex string_4 font-weight-bold">
          <div class="d-flex flex-fill border_middle_4">
            <div class="d-flex align-self-center justify-content-center w-100">Потолки</div>
            <img src="img/cross-sign.svg" class="cross align-self-center" id="cross_roof">
          </div>
        </div>

      <!-- Строка 7 -->
        <div class="d-flex string_4">
          <div class="d-flex flex-fill border_middle_left">
            <div class="font-weight-bold align-self-center w-100">
            <select id="plaster_roof_outlay" class="font-weight-bold">
                <option value=<?php echo($plaster1) ?> selected>Гипсовая Knauf MP 75</option>
                <option value=<?php echo($plaster2) ?>>Гипсовая ВОЛМА-Гипс-Актив</option>
                <option value=<?php echo($plaster3) ?>>Цементная Knauf UNTERPUTZ</option>
                <option value=<?php echo($plaster4) ?>>Цементная Plitonit T1+</option>
            </select>
            </div>
            <div id="info_plaster_knaufg1" class="d-flex align-self-center button_info_position">
              <a href="#modal_plaster_knaufg" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
            <div id="info_plaster_volma1" class="d-flex align-self-center button_info_position forcards">
              <a href="#modal_plaster_volma" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
            <div id="info_plaster_knaufc1" class="d-flex align-self-center button_info_position forcards">
              <a href="#modal_plaster_knaufc" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
            <div id="info_plaster_plitonit1" class="d-flex align-self-center button_info_position forcards">
              <a href="#modal_plaster_plitonit" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
          </div>

          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_roof_outlay_square">0</div>&nbsp;м&sup2;</div></div>
          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_roof_outlay_consume">15</div>&nbsp;кг/м&sup2;</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_roof_outlay_quantity">0</div>&nbsp;шт</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_roof_outlay_weight">0</div>&nbsp;кг</div></div>
          <div class="d-flex flex-fill border_middle_smaller"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_roof_outlay_price"><?php echo($plaster1)?></div>&nbsp;руб</div></div>
          <div class="d-flex flex-fill border_middle_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_roof_outlay_sum">0</div>&nbsp;руб</div></div>
        </div>

      <!-- Строка 8 -->
        <div class="d-flex string_4">
          <div class="d-flex flex-fill border_middle_left">
            <div class="text-center font-weight-bold align-self-center w-100">
              <div id="primer_roof_outlay">Грунт Knauf Миттельгрунд</div>
            </div>

            <div id="info_primer_knauf1" class="d-flex align-self-center button_info_position">
              <a href="#modal_primer_knauf" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
            <div id="info_primer_kreps1" class="d-flex align-self-center button_info_position forcards">
              <a href="#modal_primer_kreps" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>

          </div>

          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100"><div id="roof_primer_square">0</div>&nbsp;м&sup2;</div></div>
          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100">100 г/<div id="roof_primer_consumeperone">0.2</div>&nbsp;кг</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="primer_roof_outlay_quantity">0</div>&nbsp;шт</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="primer_roof_outlay_weight">0</div>&nbsp;кг</div></div>
          <div class="d-flex flex-fill border_middle_smaller"><div class="d-flex align-self-center justify-content-center w-100"><div id="primer_roof_outlay_price"><?php echo($primer1)?></div>&nbsp;руб</div></div>
          <div class="d-flex flex-fill border_middle_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="primer_roof_outlay_sum">0</div>&nbsp;руб</div></div>
        </div>

      <!-- Строка 9 -->
        <div class="d-flex string_4">
          <div class="d-flex flex-fill border_middle_left">
            <div class="font-weight-bold text-center align-self-center w-100">
              <div id="pharos_roof_outlay">Профиль маячковый</div>
            </div>
            <div class="d-flex align-self-center button_info_position">
              <a href="#modal_pharos" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
          </div>
          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100"><div id="pharos_roof_outlay_square">0</div>&nbsp;м&sup2;</div></div>
          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100"><div id="pharos_roof_outlay_consume">0,33</div>&nbsp;шт/м&sup2;</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="pharos_roof_outlay_quantity">0</div>&nbsp;шт</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="pharos_roof_outlay_weight">0</div>&nbsp;кг</div></div>
          <div class="d-flex flex-fill border_middle_smaller"><div class="d-flex align-self-center justify-content-center w-100"><div id="pharos_roof_outlay_price"><?php echo($pharos)?></div>&nbsp;руб</div></div>
          <div class="d-flex flex-fill border_middle_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="pharos_roof_outlay_sum">0</div>&nbsp;руб</div></div>
        </div>
      </div>

      <div class="block3_material_window" id="block3_material_window_id">
      <!-- Строка 10 -->
        <div class="d-flex string_4 font-weight-bold">
          <div class="d-flex flex-fill border_middle_4">
            <div class="d-flex align-self-center justify-content-center w-100">Откосы</div>
            <img src="img/cross-sign.svg" class="cross align-self-center" id="cross_window">
          </div>
        </div>

      <!-- Строка 11 -->
        <div class="d-flex string_4">
          <div class="d-flex flex-fill border_middle_left">
            <div class="font-weight-bold align-self-center w-100">
            <select id="plaster_window_outlay" class="font-weight-bold">
                <option value=<?php echo($plaster1) ?> selected>Гипсовая Knauf MP 75</option>
                <option value=<?php echo($plaster2) ?>>Гипсовая ВОЛМА-Гипс-Актив</option>
                <option value=<?php echo($plaster3) ?>>Цементная Knauf UNTERPUTZ</option>
                <option value=<?php echo($plaster4) ?>>Цементная Plitonit T1+</option>
            </select>
            </div>
            <div id="info_plaster_knaufg2" class="d-flex align-self-center button_info_position">
              <a href="#modal_plaster_knaufg" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
            <div id="info_plaster_volma2" class="d-flex align-self-center button_info_position forcards">
              <a href="#modal_plaster_volma" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
            <div id="info_plaster_knaufc2" class="d-flex align-self-center button_info_position forcards">
              <a href="#modal_plaster_knaufc" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
            <div id="info_plaster_plitonit2" class="d-flex align-self-center button_info_position forcards">
              <a href="#modal_plaster_plitonit" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
          </div>

          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_window_outlay_square">0</div>&nbsp;м&sup2;</div></div>
          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_window_outlay_consume">15</div>&nbsp;кг/м&sup2;</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_window_outlay_quantity">0</div>&nbsp;шт</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_window_outlay_weight">0</div>&nbsp;кг</div></div>
          <div class="d-flex flex-fill border_middle_smaller"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_window_outlay_price"><?php echo($plaster1)?></div>&nbsp;руб</div></div>
          <div class="d-flex flex-fill border_middle_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="plaster_window_outlay_sum">0</div>&nbsp;руб</div></div>
        </div>

      <!-- Строка 12 -->
        <div class="d-flex string_4">
          <div class="d-flex flex-fill border_middle_left">
            <div class="text-center font-weight-bold align-self-center w-100">
              <div id="primer_window_outlay">Грунт Knauf Миттельгрунд</div>
            </div>

            <div id="info_primer_knauf2" class="d-flex align-self-center button_info_position">
              <a href="#modal_primer_knauf" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>
            <div id="info_primer_kreps2" class="d-flex align-self-center button_info_position forcards">
              <a href="#modal_primer_kreps" class="d-flex popup-content justify-content-center button_info_press_zone">
                <img src="img/info-button.svg" class="button_info align-self-center">
              </a>
            </div>

          </div>

          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100"><div id="window_primer_square">0</div>&nbsp;м&sup2;</div></div>
          <div class="d-flex flex-fill border_middle"><div class="d-flex align-self-center justify-content-center w-100">100 г/<div id="window_primer_consumeperone">0.2</div>&nbsp;кг</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="primer_window_outlay_quantity">0</div>&nbsp;шт</div></div>
          <div class="d-flex flex-fill border_middle_small"><div class="d-flex align-self-center justify-content-center w-100"><div id="primer_window_outlay_weight">0</div>&nbsp;кг</div></div>
          <div class="d-flex flex-fill border_middle_smaller"><div class="d-flex align-self-center justify-content-center w-100"><div id="primer_window_outlay_price"><?php echo($primer1)?></div>&nbsp;руб</div></div>
          <div class="d-flex flex-fill border_middle_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="primer_window_outlay_sum">0</div>&nbsp;руб</div></div>
        </div>
      </div>

      <!-- Строка 13 -->
      <div class="d-flex string_5 font-weight-bold">
        <div class="d-flex flex-fill border_middle_left_2"><div class="text-center align-self-center w-100"></div></div>
        <div class="d-flex flex-fill border_bottom_2"><div class="text-center align-self-center w-100">Итого по материалам:</div></div>
        <div class="d-flex flex-fill border_bottom_right_2"><div class="d-flex align-self-center justify-content-center w-100"><div id="material_sum">0</div>&nbsp;руб</div></div>
      </div>

    </div>

  </div>

</section>


  <!-- Block4 Workresult -->

<section id="block4_workresult" class="block3_material_dn">

  <div class="block_position p-5">

    <div class="d-flex pb-4">
      <div class="m-0">
        <div class="heading">Смета штукатурных работ</div>
        <div class="line_1 mb-1"></div>
        <div class="line_2"></div>
      </div>
    </div>

    <div class="block4_workresult">

      <!-- Строка 0 -->
      <div class="d-flex font-weight-bold string_3">
        <div class="d-flex col border_top_left"><div class="text-center align-self-center w-100">Тип основания</div></div>
        <div class="d-flex col border_top"><div class="text-center align-self-center w-100">Площадь</div></div>
        <div class="d-flex col border_top"><div class="text-center align-self-center w-100">Штукатурка</div></div>
        <div class="d-flex col border_top"><div class="text-center align-self-center w-100">Толщина слоя</div></div>
        <div class="d-flex col border_top"><div class="text-center align-self-center w-100">Стоимость</div></div>
        <div class="d-flex col border_top_right"><div class="text-center align-self-center w-100">Цена</div></div>
      </div>

      <div class="block4_workresult_wall" id="block4_workresult_wall_id">
      <!-- Строка 1 -->
        <div class="d-flex font-weight-bold string_4">
          <div class="d-flex flex-fill border_middle_2"><div class="d-flex align-self-center justify-content-center w-100">Стены</div></div>
        </div>

      <!-- Строка 2 -->
        <div class="d-flex string_4">
          <div class="d-flex col border_bottom_left"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_wall_object_type">Старый фонд</div>&nbsp;</div></div>
          <div class="d-flex col border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_wall_square">0</div>&nbsp;м&sup2;</div></div>
          <div class="d-flex col border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_wall_plaster">Knauf MP 75</div></div></div>
          <div class="d-flex col border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_wall_thickness">15</div>&nbsp;мм</div></div>
          <div class="d-flex col border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_wall_quantity"><?php echo($dirty)?></div>&nbsp;руб</div></div>
          <div class="d-flex col border_bottom_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_wall_sum">0</div>&nbsp;руб</div></div>
        </div>
      </div>

      <div class="block4_workresult_roof" id="block4_workresult_roof_id">
      <!-- Строка 3 -->
        <div class="d-flex font-weight-bold string_4">
          <div class="d-flex flex-fill border_middle_2"><div class="d-flex align-self-center justify-content-center w-100">Потолки</div></div>
        </div>

      <!-- Строка 4 -->
        <div class="d-flex string_4">
          <div class="d-flex col border_bottom_left"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_roof_object_type">Старый фонд</div>&nbsp;</div></div>
          <div class="d-flex col border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_roof_square">0</div>&nbsp;м&sup2;</div></div>
          <div class="d-flex col border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_roof_plaster">Knauf MP 75</div></div></div>
          <div class="d-flex col border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_roof_thickness">15</div>&nbsp;мм</div></div>
          <div class="d-flex col border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_roof_quantity"><?php echo($clear2)?></div>&nbsp;руб</div></div>
          <div class="d-flex col border_bottom_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_roof_sum">0</div>&nbsp;руб</div></div>
        </div>
      </div>

      <div class="block4_workresult_window" id="block4_workresult_window_id">
      <!-- Строка 5 -->
        <div class="d-flex font-weight-bold string_4">
          <div class="d-flex flex-fill border_middle_2"><div class="d-flex align-self-center justify-content-center w-100">Откосы</div></div>
        </div>

      <!-- Строка 6 -->
        <div class="d-flex string_4">
          <div class="d-flex col border_bottom_left"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_window_object_type">Старый фонд</div>&nbsp;</div></div>
          <div class="d-flex col border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_window_square">0</div>&nbsp;м&sup2;</div></div>
          <div class="d-flex col border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_window_plaster">Knauf MP 75</div></div></div>
          <div class="d-flex col border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_window_thickness">15</div>&nbsp;мм</div></div>
          <div class="d-flex col border_bottom"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_window_quantity"><?php echo($clear3)?></div>&nbsp;руб</div></div>
          <div class="d-flex col border_bottom_right"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_window_sum">0</div>&nbsp;руб</div></div>
        </div>
      </div>

      <!-- Строка 7 -->
      <div class="d-flex font-weight-bold string_4">
        <div class="d-flex col border_middle_left_3">
          <div class="d-flex align-self-center justify-content-center w-100">Ваша скидка:</div>
          <div class="d-flex align-self-center button_info_position">
            <a href="#modal_sale" class="d-flex popup-content justify-content-center button_info_press_zone">
              <img src="img/info-button.svg" class="button_info align-self-center">
            </a>
          </div>
        </div>
        <div class="d-flex col border_middle_3"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_sale_percent">0</div>&nbsp;%</div></div>
        <div class="d-flex col border_middle_right_3"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_sale_sum">0</div>&nbsp;руб</div></div>
      </div>

      <!-- Строка 8 -->
      <div class="d-flex string_5 font-weight-bold">
        <div class="d-flex col border_middle_left_2"><div class="text-center align-self-center w-100"></div></div>
        <div class="d-flex col border_bottom_3"><div class="text-center align-self-center w-100">Итого по работе:</div></div>
        <div class="d-flex col border_bottom_right_3"><div class="d-flex align-self-center justify-content-center w-100"><div id="work_outlay_common_sum">0</div>&nbsp;руб</div></div>
      </div>

    </div>

    <div class="space_for_block0"></div>

  </div>

</section>


  <!-- Block0 Commonresult-->

  <section id="block0_commonresult" class="fixed-bottom block3_material_dn">

    <div class="d-flex string_6 block0_commonresult_ver2">

      <!-- <div class="d-flex flex-fill"> -->
        <div class="d-flex flex-fill common_cell"><div class="text-center align-self-center w-100"><div>Сумма<br>площадей</div></div></div>
        <div class="common_border align-self-center"></div>
        <div class="d-flex flex-fill common_input_cell"><div class="d-flex justify-content-center align-self-center w-100"><div id="common_sum_square">0</div>&nbsp;м&sup2;</div></div>

        <div class="common_border align-self-center"></div>

        <div class="d-flex flex-fill common_cell"><div class="text-center align-self-center w-100"><div>Стоимость<br>работ</div></div></div>
        <div class="common_border align-self-center"></div>
        <div class="d-flex flex-fill common_input_cell"><div class="d-flex justify-content-center align-self-center w-100"><div id="common_sum_work">0</div>&nbsp;руб</div></div>

        <div class="common_border align-self-center"></div>

        <div class="d-flex flex-fill common_cell"><div class="text-center align-self-center w-100"><div>Стоимость<br>материалов</div></div></div>
        <div class="common_border align-self-center"></div>
        <div class="d-flex flex-fill common_input_cell"><div class="d-flex justify-content-center align-self-center w-100"><div id="common_sum_material">0</div>&nbsp;руб</div></div>

        <div class="common_border align-self-center common_border_out_display"></div>

        <div class="d-flex flex-fill common_cell"><div class="text-center align-self-center w-100"><div>Ваша<br>скидка</div></div></div>
        <div class="common_border align-self-center"></div>
        <div class="d-flex flex-fill common_input_cell"><div class="d-flex justify-content-center align-self-center w-100"><div id="common_sum_sale_">0</div>&nbsp;руб</div></div>

        <div class="common_border align-self-center"></div>

        <div class="d-flex flex-fill common_cell"><div class="text-center align-self-center w-100"><div>Общая<br>стоимость</div></div></div>
        <div class="common_border align-self-center"></div>
        <div class="d-flex flex-fill common_input_cell"><div class="d-flex justify-content-center align-self-center w-100"><div id="common_sum">0</div>&nbsp;руб</div></div>
      </div>

    </div>

  </section>

  <!-- Modal Sale -->
  <div id="modal_sale" class="white-popup mfp-hide">

    <div class="modal_sale_name text-right font-weight-bold pt-2 pb-2">
      Скидки от площади работ в м&sup2;
    </div>
    <div class="d-flex flex-column text-center modal_plaster">

      <div class="" style="">
        <div class="d-flex font-weight-bold string_3">
          <div class="d-flex flex-fill border_top_left"><div class="text-center align-self-center w-100">От 200 до 299</div></div>
          <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">От 300 до 399</div></div>
          <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">От 400 до 699</div></div>
          <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">От 700 до 999</div></div>
          <div class="d-flex flex-fill border_top"><div class="text-center align-self-center w-100">От 1000 до 1399</div></div>
          <div class="d-flex flex-fill border_top_right"><div class="text-center align-self-center w-100">Свыше 1400</div></div>
        </div>
        <div class="d-flex string_4">
          <div class="d-flex flex-fill border_bottom_left"><div class="d-flex align-self-center justify-content-center w-100">2%</div></div>
          <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100">3%</div></div>
          <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100">4%</div></div>
          <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100">6%</div></div>
          <div class="d-flex flex-fill border_bottom"><div class="d-flex align-self-center justify-content-center w-100">8%</div></div>
          <div class="d-flex flex-fill border_bottom_right"><div class="d-flex align-self-center justify-content-center w-100">10%</div></div>
        </div>
      </div>

    </div>
  </div>

  <!-- Modal Plaster Knauf MP75 -->
  <div id="modal_plaster_knaufg" class="white-popup mfp-hide">
    <div class="modal_plaster_name text-center font-weight-bold pt-2 pb-2">
      Технические характеристики отделочных материалов
    </div>
    <div class="d-flex flex-column text-center modal_plaster pb-5 pr-5 pl-5">
      <div class="d-flex pt-5">

        <div class="d-flex align-items-center w-50 pr-4">
          <div class="w-100">
            <img src="img/knaufg.jpg" class="img-fluid w-100" alt="Responsive image">
            <div class="text-center modal_plaster_info_text_3 font-weight-bold pt-2 pb-2">
              Стоимость пакета: <?php echo($plaster1)?> руб
            </div>
          </div>
        </div>

        <div class="d-flex flex-column text-left pl-4 w-50">
          <div class="text-center">
            <div class="flex-fill modal_plaster_info_text_1 font-weight-bold pt-2 pb-2">Штукатурка гипсовая Knauf МП-75</div>
          </div>
          <div class="d-flex flex-fill">
            <div class="modal_plaster_info_text_2 pt-3">
              Сухая штукатурная смесь на основе гипса с полимерными добавками. Предназначена для высококачественного оштукатуривания стен и потолков внутри помещений. Наносится на все обычные твердые основания: кирпичная кладка, цементная штукатурка, бетон и т.п. Наносится машинным способом.
              <p>
              <p><span class="font-weight-bold">Вес брутто: </span>30 кг
              <p><span class="font-weight-bold">Расход: </span>8 – 9 кг/м²/10 мм
              <p><span class="font-weight-bold">Толщина слоя: </span>стена 8-50 мм, потолок 8-15 мм
              <p><span class="font-weight-bold">Высыхание: </span>~7 суток
              <p><span class="font-weight-bold">Прочность на сжатие: </span>>2,5 МПа
              <p><span class="font-weight-bold">Прочность на изгиб: </span>>1,0 МПа
              <p><span class="font-weight-bold">Максимальная фракция наполнителя: </span>1,2 мм
              <p><span class="font-weight-bold">Производитель: </span>Россия
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Modal Plaster Volma -->
  <div id="modal_plaster_volma" class="white-popup mfp-hide">
    <div class="modal_plaster_name text-center font-weight-bold pt-2 pb-2">
      Технические характеристики отделочных материалов
    </div>
    <div class="d-flex flex-column text-center modal_plaster pb-5 pr-5 pl-5">
      <div class="d-flex pt-5">

        <div class="d-flex align-items-center w-50 pr-4">
          <div class="w-100">
            <img src="img/volma.png" class="img-fluid w-100" alt="Responsive image">
            <div class="text-center modal_plaster_info_text_3 font-weight-bold pt-2 pb-2">
              Стоимость пакета: <?php echo($plaster2)?> руб
            </div>
          </div>
        </div>

        <div class="d-flex flex-column text-left pl-4 w-50">
          <div class="text-center">
            <div class="flex-fill modal_plaster_info_text_1 font-weight-bold pt-2 pb-2">Штукатурка гипсовая<br>Волма-Гипс-Актив Экстра</div>
          </div>
          <div class="d-flex flex-fill">
            <div class="modal_plaster_info_text_2 pt-3">
              Сухая штукатурная смесь для профессионального машинного нанесения на основе гипсового вяжущего и легкого заполнителя с применением минеральных и химических добавок. Предназначена для выполнения внутренних однослойных гипсовых штукатурок на потолках и стенах с помощью штукатурного агрегата, а также для доведения поверхности до глянца без дополнительного шпаклевания перед нанесением декоративных покрытий (красок, декоративных составов, и т.п.).
              <p>
              <p><span class="font-weight-bold">Вес брутто: </span>30 кг
              <p><span class="font-weight-bold">Расход: </span>7,5-8,5 кг/м²/10 мм
              <p><span class="font-weight-bold">Толщина слоя: </span>5-60 мм
              <p><span class="font-weight-bold">Высыхание: </span>~5-7 суток
              <p><span class="font-weight-bold">Прочность на сжатие: </span>>2,0 МПа
              <p><span class="font-weight-bold">Производитель: </span>Россия
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Modal Plaster Knauf UNTERPUTZ -->
  <div id="modal_plaster_knaufc" class="white-popup mfp-hide">
    <div class="modal_plaster_name text-center font-weight-bold pt-2 pb-2">
      Технические характеристики отделочных материалов
    </div>
    <div class="d-flex flex-column text-center modal_plaster pb-5 pr-5 pl-5">
      <div class="d-flex pt-5">

        <div class="d-flex align-items-center w-50 pr-4">
          <div class="w-100">
            <img src="img/knaufc.png" class="img-fluid w-100" alt="Responsive image">
            <div class="text-center modal_plaster_info_text_3 font-weight-bold pt-2 pb-2">
              Стоимость пакета: <?php echo($plaster3)?> руб
            </div>
          </div>
        </div>

        <div class="d-flex flex-column text-left pl-4 w-50">
          <div class="text-center">
            <div class="flex-fill modal_plaster_info_text_1 font-weight-bold pt-2 pb-2">Штукатурка цементная Knauf UNTERPUTZ</div>
          </div>
          <div class="d-flex flex-fill">
            <div class="modal_plaster_info_text_2 pt-3">
              Cухая штукатурная смесь на основе цемента с фракционированным песком и специальными добавками. Применяется при наружных и внутренних работах. Предназначена для оштукатуривания фасадов зданий, поверхностей в помещениях с повышенной влажностью (подвалы, гаражи и т. п.), для выравнивания минеральных оснований (керамический или силикатный кирпич, керамзитовые, газосиликатные, газобетонные блоки, бетон, и.др.) под облицовку плиткой и природным камнем весом не более 30 кг/м² (вместе с клеем) или декоративную штукатурку. Может наноситься вручную или с помощью штукатурных машин.
              <p>
              <p><span class="font-weight-bold">Вес брутто: </span>25 кг
              <p><span class="font-weight-bold">Расход: </span>17 кг/м²/10 мм
              <p><span class="font-weight-bold">Толщина слоя: </span>10-35 мм
              <p><span class="font-weight-bold">Адгезия к бетону: </span>>0,4 МПа
              <p><span class="font-weight-bold">Прочность на сжатие: </span>>4,0 МПа
              <p><span class="font-weight-bold">Максимальная фракция наполнителя: </span>1,5 мм
              <p><span class="font-weight-bold">Производитель: </span>Россия
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Plaster Plitonit -->
  <div id="modal_plaster_plitonit" class="white-popup mfp-hide">
    <div class="modal_plaster_name text-center font-weight-bold pt-2 pb-2">
      Технические характеристики отделочных материалов
    </div>
    <div class="d-flex flex-column text-center modal_plaster pb-5 pr-5 pl-5">
      <div class="d-flex pt-5">

        <div class="d-flex align-items-center w-50 pr-4">
          <div class="w-100">
            <img src="img/plitonit.png" class="img-fluid w-100" alt="Responsive image">
            <div class="text-center modal_plaster_info_text_3 font-weight-bold pt-2 pb-2">
              Стоимость пакета: <?php echo($plaster4)?> руб
            </div>
          </div>
        </div>

        <div class="d-flex flex-column text-left pl-4 w-50">
          <div class="text-center">
            <div class="flex-fill modal_plaster_info_text_1 font-weight-bold pt-2 pb-2">Штукатурка цементная Plitonit Т1+ армированная</div>
          </div>
          <div class="d-flex flex-fill">
            <div class="modal_plaster_info_text_2 pt-3">
              Штукатурка на цементной основе с армирующими волокнами и повышенными водоотталкивающими свойствами.
              Предназначена для выравнивания стен из бетона, кирпича, газобетона, а также заделки стыков и отдельных неровностей бетонных и железобетонных плит в сухих, влажных помещениях.
              Для внутренних и наружных работ.
              Наносится ручным и машинным способом.
              <p>
              <p><span class="font-weight-bold">Вес брутто: </span>25 кг
              <p><span class="font-weight-bold">Расход: </span>1,2 – 1,3 кг/м²/10 мм
              <p><span class="font-weight-bold">Толщина слоя: </span>от 2 до 30 мм
              <p><span class="font-weight-bold">Максимальная фракция наполнителя: </span>0,63 мм
              <p><span class="font-weight-bold">Производитель: </span>Россия
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Modal Primer Knauf -->
  <div id="modal_primer_knauf" class="white-popup mfp-hide">
    <div class="modal_plaster_name text-center font-weight-bold pt-2 pb-2">
      Технические характеристики отделочных материалов
    </div>
    <div class="d-flex flex-column text-center modal_plaster pb-5 pr-5 pl-5">
      <div class="d-flex pt-5">

        <div class="d-flex align-items-center w-50 pr-4">
          <div class="w-100">
            <img src="img/primer_knauf.jpg" class="img-fluid w-100" alt="Responsive image">
            <div class="text-center modal_plaster_info_text_3 font-weight-bold pt-2 pb-2">
              Стоимость пакета: <?php echo($primer1)?> руб
            </div>
          </div>
        </div>

        <div class="d-flex flex-column text-left pl-4 w-50">
          <div class="text-center">
            <div class="flex-fill modal_plaster_info_text_1 font-weight-bold pt-2 pb-2">Грунт Knauf Миттельгрунд</div>
          </div>
          <div class="d-flex flex-fill">
            <div class="modal_plaster_info_text_2 pt-3">
              Предназначен для обработки поверхностей: газо – и пенобетона, керамического и силикатного кирпича, керамзито – и шлакоблоков, гипсовых и цементных штукатурок; бетонной, цементной и гипсовой стяжки. Эффективно снижает и регулирует впитывающую способность основания, способствует равномерному схватыванию раствора гипсовых и цементных смесей.
              <p>
              <p><span class="font-weight-bold">Вес брутто: </span>10 кг
              <p><span class="font-weight-bold">Состав: </span>полимерная дисперсия
              <p><span class="font-weight-bold">Цвет продукции: </span>желтый
              <p><span class="font-weight-bold">Расход концентрата: </span>0,2 кг/м²
              <p><span class="font-weight-bold">Производитель: </span>Россия
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Modal Primer Kreps -->
  <div id="modal_primer_kreps" class="white-popup mfp-hide">
    <div class="modal_plaster_name text-center font-weight-bold pt-2 pb-2">
      Технические характеристики отделочных материалов
    </div>
    <div class="d-flex flex-column text-center modal_plaster pb-5 pr-5 pl-5">
      <div class="d-flex pt-5">

        <div class="d-flex align-items-center w-50 pr-4">
          <div class="w-100">
            <img src="img/primer_kreps.jpg" class="img-fluid w-100" alt="Responsive image">
            <div class="text-center modal_plaster_info_text_3 font-weight-bold pt-2 pb-2">
              Стоимость пакета: <?php echo($primer2)?> руб
            </div>
          </div>
        </div>

        <div class="d-flex flex-column text-left pl-4 w-50">
          <div class="text-center">
            <div class="flex-fill modal_plaster_info_text_1 font-weight-bold pt-2 pb-2">Грунт Крепс Праймер</div>
          </div>
          <div class="d-flex flex-fill">
            <div class="modal_plaster_info_text_2 pt-3">
              Предназначена для подготовки основания перед нанесением растворных смесей. Наносится на все пористые основания, цементные плиты, газобетон, цементные, цементно-известковые и известковые штукатурки, бетон, железобетон, гипсокартон и другие гипсосодержащие основания.
              Применяется для обработки оснований с целью уменьшения впитывания влаги из растворов, повышения прочности сцепления с основанием растворных смесей, обеспыливания.
              Содержит добавку, которая препятствует появлению на поверхности многих видов плесневых грибков.
              Для внутренних и наружных работ.
              <p>
              <p><span class="font-weight-bold">Вес брутто: </span>10 кг
              <p><span class="font-weight-bold">Состав: </span>полимерная дисперсия
              <p><span class="font-weight-bold">Расход концентрата: </span>0,2 кг/м²
              <p><span class="font-weight-bold">Производитель: </span>Россия
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Modal Glass Grid -->
  <div id="modal_grid_glass" class="white-popup mfp-hide">
    <div class="modal_plaster_name text-center font-weight-bold pt-2 pb-2">
      Технические характеристики отделочных материалов
    </div>
    <div class="d-flex flex-column text-center modal_plaster pb-5 pr-5 pl-5">
      <div class="d-flex pt-5">

        <div class="d-flex align-items-center w-50 pr-4">
          <div class="w-100">
            <img src="img/grid_glass.jpg" class="img-fluid w-100" alt="Responsive image">
            <div class="text-center modal_plaster_info_text_3 font-weight-bold pt-2 pb-2">
              Стоимость пакета: <?php echo($grid2)?> руб
            </div>
          </div>
        </div>

        <div class="d-flex flex-column text-left pl-4 w-50">
          <div class="text-center">
            <div class="flex-fill modal_plaster_info_text_1 font-weight-bold pt-2 pb-2">Сетка стеклотканевая<br>фасадная SD-GLASS</div>
          </div>
          <div class="d-flex flex-fill">
            <div class="modal_plaster_info_text_2 pt-3">
              Предназначена для армирования штукатурных слоев поверхностей стен и потолков внутри и снаружи помещений, а так же на фасадах зданий.
              Препятствует возникновению нитевидных трещин;
              Защищает поверхность от ударных воздействий;
              Для упрочнения штукатурного или шпаклевочного слоев при внутренней отделке зданий и сооружений всех типов и назначений.
              Для армирования мест соединения оконных и дверных коробок к стенам, штукатурных фасадов и систем внешнего утепления.
              Для армирования цементно-песчаных стяжек, наливных полов, в том числе под теплый пол.
              <p>
              <p><span class="font-weight-bold">Вес брутто: </span>2.4 кг
              <p><span class="font-weight-bold">Количество в упаковке: </span>10 шт
              <p><span class="font-weight-bold">Плотность: </span>145 г/м.кв.
              <p><span class="font-weight-bold">Размер рулона: </span>1х20 м
              <p><span class="font-weight-bold">Размер ячейки: </span>5х5 мм
              <p><span class="font-weight-bold">Производитель: </span>Россия
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Modal Zinc Grid -->
  <div id="modal_grid_zink" class="white-popup mfp-hide">
    <div class="modal_plaster_name text-center font-weight-bold pt-2 pb-2">
      Технические характеристики отделочных материалов
    </div>
    <div class="d-flex flex-column text-center modal_plaster pb-5 pr-5 pl-5">
      <div class="d-flex pt-5">
        <div class="align-items-center w-50 pr-4">
          <div class="w-100">
            <img src="img/grid_zinc.png" class="img-fluid w-100" alt="Responsive image">
            <div class="text-center modal_plaster_info_text_3 font-weight-bold pt-2 pb-2">
              Стоимость пакета: <?php echo($grid1)?> руб
            </div>
          </div>
        </div>

        <div class="d-flex flex-column text-left pl-4 w-50">
          <div class="text-center">
            <div class="flex-fill modal_plaster_info_text_1 font-weight-bold pt-2 pb-2">Сетка тканая оцинкованная</div>
          </div>
          <div class="d-flex flex-fill">
            <div class="modal_plaster_info_text_2 pt-3">
              Сетка тканая стальная предназначена для армирования строительных смесей, наносимых на различные основания. Используется для увеличения прочности поверхностей и предотвращения появления трещин. Применяется при грубом выравнивании стен и полов цементными составами. Не рекомендуется использовать с гипсовыми составами.
              <p>
              <p><span class="font-weight-bold">Вес брутто: </span>10 кг
              <p><span class="font-weight-bold">Состав: </span>оцинкованная сталь
              <p><span class="font-weight-bold">Размер рулона: </span>1х30 м
              <p><span class="font-weight-bold">Размер ячейки: </span>10х10 мм
              <p><span class="font-weight-bold">Диаметр проволоки: </span>0,5-0,6 мм
              <p><span class="font-weight-bold">Производитель: </span>Китай
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Pharos -->
  <div id="modal_pharos" class="white-popup mfp-hide">
    <div class="modal_plaster_name text-center font-weight-bold pt-2 pb-2">
      Технические характеристики отделочных материалов
    </div>
    <div class="d-flex flex-column text-center modal_plaster pb-5 pr-5 pl-5">
      <div class="d-flex pt-5">
        <div class="align-items-center w-50 pr-4">
          <div class="w-100">
            <img src="img/pharos.jpg" class="img-fluid w-100" alt="Responsive image">
            <div class="text-center modal_plaster_info_text_3 font-weight-bold pt-2 pb-2">
              Стоимость пакета: <?php echo($pharos)?> руб
            </div>
          </div>
        </div>

        <div class="d-flex flex-column text-left pl-4 w-50">
          <div class="text-center">
            <div class="flex-fill modal_plaster_info_text_1 font-weight-bold pt-2 pb-2">Профиль маячковый оцинкованный</div>
          </div>
          <div class="d-flex flex-fill">
            <div class="modal_plaster_info_text_2 pt-3">
              Предназначен для использования в качестве опорной направляющей при оштукатуривании и выравнивании полов для получения ровной поверхности.
              Если иное не предусмотрено проектом, по завершении штукатурных работ маяки необходимо удалить и восстановить целостность поверхности тем же штукатурным составом.
              <p>
              <p><span class="font-weight-bold">Вес брутто: </span>0.024 кг
              <p><span class="font-weight-bold">Состав: </span>оцинкованная сталь
              <p><span class="font-weight-bold">Ширина: </span>10 мм
              <p><span class="font-weight-bold">Длина: </span>3 м
              <p><span class="font-weight-bold">Высота: </span>0,6 мм
              <p><span class="font-weight-bold">Производитель: </span>Россия
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="script.js" type="text/javascript"></script>
</body>
</html>
