<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sudriabotik</title>
  <link rel="stylesheet" href="main.css?<?php echo time(); ?>">
  <script src="https://cdn.tailwindcss.com"></script>
  <style type="text/tailwindcss">
    @layer components {
          .btn {
              @apply bg-green-600 text-white font-bold py-2 px-4 rounded hover:bg-green-700;
          }

          .card {
              @apply rounded bg-green-300 p-2;
          }

          .input-box {
              @apply bg-green-300 rounded flex gap-2 p-3 items-center w-full justify-between;
          }

          .input-box input {
              @apply bg-white rounded w-[50%] px-2;
          }

          .title {
              @apply pb-1 text-2xl font-bold text-white;
          }

          .ax-table th, .ax-table td {
              @apply w-1/4 font-bold;
          }

          .coord-table td {
              @apply w-1/4 first:text-2xl first:font-bold;
          }

          .parametre{
            @apply p-1 flex gap-4 mt-1;
          }
      }
  </style>
</head>

<body>
  <?php
  $user = 'root';
  $password = 'root';
  $db = 'sudriabotik';
  $host = 'localhost';
  $port = 3307;

  $link = mysqli_init();
  $success = mysqli_real_connect(
    $link,
    $host,
    $user,
    $password,
    $db,
    $port
  );
  if (!$success) {
    echo "Erreur de connection à la base de données.";
    exit();
  }
  $php_data_array = array();

    if ($result = $link->query("SELECT * FROM `test` ORDER BY `time` DESC LIMIT 5")) {
        while ($row = $result->fetch_row()) {
            $php_data_array[] = $row;
        }
        $result->close();
    }

    echo "<script>
        var my_2d = " . json_encode($php_data_array) . "
        </script>";
  ?>
  <header>
    <button class="tab-select" data-active="active" onclick="tab(event, 'synthese')">Synthèse</button>
    <button class="tab-select" data-active="inactive" onclick="tab(event, 'R1')">R1</button>
    <button class="tab-select" data-active="inactive" onclick="tab(event, 'R2')">R2</button>
    <button class="tab-select" data-active="inactive" onclick="tab(event, 'R1-asserv')">R1-asserv</button>
    <button class="tab-select" data-active="inactive" onclick="tab(event, 'R2-asserv')">R2-asserv</button>
    <button class="tab-select" data-active="inactive" onclick="tab(event, 'balise')">Balise</button>
  </header>
  <main>
    <section class="tab" id="synthese" data-active="active">
      <div class="synthese-container">
        <div id="plateau">
          <?php
          if ($result = $link->query("SELECT * FROM `test` ORDER BY `time` DESC LIMIT 1")) {
            $row = $result->fetch_row();
            $result->close();
          }
          echo '<div class="depart" id="D1" style="left:0; top:calc(50% - 2.5vw);"></div>';
          echo '<div class="depart" id="D2" style="left:calc(50% - 2.5vw); top:0;"></div>';
          echo '<div class="depart" id="D3" style="left:calc(100% - 5vw); top:calc(50% - 2.5vw);"></div>';
          echo '<div class="depart" id="D4" style="left:calc(50% - 2.5vw); top:calc(100% - 5vw);"></div>';
          echo '<div class="robot" id="robot-R1" style="left: calc(' . floor($row[1] / 3) . '% - 2.5vw);top: calc(' . floor($row[2] / 2) . '% - 2.5vw);transform: rotate(' . $row[3] . 'deg);">R1</div>';
          echo '<div class="robot" id="robot-R2" style="left: calc(' . floor($row[4] / 3) . '% - 2.5vw);top: calc(' . floor($row[5] / 2) . '% - 2.5vw);transform: rotate(' . $row[6] . 'deg);">R2</div>';
          echo '<div class="robot adv" id="robot-R1-adv" style="left: calc(' . floor($row[7] / 3) . '% - 2.5vw);top: calc(' . floor($row[8] / 2) . '% - 2.5vw);">R3</div>';
          echo '<div class="robot adv" id="robot-R2-adv" style="left: calc(' . floor($row[9] / 3) . '% - 2.5vw);top: calc(' . floor($row[10] / 2) . '% - 2.5vw);">R4</div>';
          //echo '<div style="left: calc('.floor($row[11]/3).'% - 2%);top: calc('.floor($row[12]/2).'% - 3%);" class="element '.$row[13].'"></div>';
          //echo '<div style="left: calc('.floor($row[14]/3).'% - 2%);top: calc('.floor($row[15]/2).'% - 3%);" class="element '.$row[16].'"></div>';
          //echo '<div style="left: calc('.floor($row[17]/3).'% - 2%);top: calc('.floor($row[18]/2).'% - 3%);" class="element '.$row[19].'"></div>';
          echo '<div style="left: calc(' . floor($row[20] / 3) . '% - 2%);top: calc(' . floor($row[21] / 2) . '% - 3%);" class="element ' . $row[22] . '"></div>';
          //echo '<div style="left: calc('.floor($row[23]/3).'% - 2%);top: calc('.floor($row[24]/2).'% - 3%);" class="element '.$row[25].'"></div>';
          //echo '<div style="left: calc('.floor($row[26]/3).'% - 2%);top: calc('.floor($row[27]/2).'% - 3%);" class="element '.$row[28].'"></div>';
          //echo '<div style="left: calc('.floor($row[29]/3).'% - 2%);top: calc('.floor($row[30]/2).'% - 3%);" class="element '.$row[31].'"></div>';
          echo '<div style="left: calc(' . floor($row[32] / 3) . '% - 2%);top: calc(' . floor($row[33] / 2) . '% - 3%);" class="element ' . $row[34] . '"></div>';
          //echo '<div style="left: calc('.floor($row[35]/3).'% - 2%);top: calc('.floor($row[36]/2).'% - 3%);" class="element '.$row[37].'"></div>';
          //echo '<div style="left: calc('.floor($row[38]/3).'% - 2%);top: calc('.floor($row[39]/2).'% - 3%);" class="element '.$row[40].'"></div>';
          //echo '<div style="left: calc('.floor($row[41]/3).'% - 2%);top: calc('.floor($row[42]/2).'% - 3%);" class="element '.$row[43].'"></div>';
          echo '<div style="left: calc(' . floor($row[44] / 3) . '% - 2%);top: calc(' . floor($row[45] / 2) . '% - 3%);" class="element ' . $row[46] . '"></div>';
          ?>
        </div>
        <div id="container-synthese-info">
          <div class="infos">
            <div class="positions">
              <p>R1: X=<?php echo $row[1] . ", Y=" . $row[2] . ", Theta=" . $row[3]; ?></p>
              <p>R2: X=<?php echo $row[4] . ", Y=" . $row[5] . ", Theta=" . $row[6]; ?></p>
            </div>
            <div class="strat">
              <p data-active="active">Evitement</p>
              <p data-active="inactive">Bloqué</p>
            </div>
          </div>
          <div class="ligne-commande">
            <input type="text" name="commande" id="commande" placeholder="Commande">
            <button id="conf-commande">Envoyer</button>
          </div>
        </div>
      </div>

    </section>
    <section class="tab" id="R1" data-active="inactive">
      <div class="flex w-screen">
        <div class="w-1/2 h-full p-5 bg-gray-700 flex flex-col gap-4">
          <div class="flex gap-4">
            <div class="w-4/5 flex flex-col justify-center items-left card">
              <table class="table coord-table">
                <tbody>
                  <tr>
                    <td class="font-bold text-2xl">X_R1_odo</td>
                    <td class="font-bold text-4xl text-center" name="R1_pos_odom_X" id="R1_pos_odom_X"><?php echo $row[1] ?></td>
                    <td><input type="text" class="h-8 w-full rounded" placeholder="New value" name="R1_pos_odom_X_newvalue" id="R1_pos_odom_X_newvalue"></td>
                  </tr>
                  <tr>
                    <td class="font-bold text-2xl">Y_R1_odo</td>
                    <td class="font-bold text-4xl text-center" name="R1_pos_odom_Y" id="R1_pos_odom_Y"><?php echo $row[2] ?></td>
                    <td><input type="text" class="h-8 w-full rounded" placeholder="New value" name="R1_pos_odom_Y_newvalue" id="R1_pos_odom_Y_newvalue"></td>
                  </tr>
                  <tr>
                    <td class="font-bold text-2xl">Theta</td>
                    <td class="font-bold text-4xl text-center" name="R1_pos_odom_Theta" id="R1_pos_odom_Theta"><?php echo $row[3] ?></td>
                    <td><input type="text" class="h-8 w-full rounded" placeholder="New value" name="R1_pos_odom_Theta_newvalue" id="R1_pos_odom_Theta_newvalue"></td>
                    <td class="text-center"><button type="reset" class="btn">Clear</button></td>
                  </tr>
                  <tr>
                    <td class="font-bold text-2xl">Vitesse</td>
                    <td class="font-bold text-4xl text-center" name="R1_vitesse" id="R1_vitesse">4</td>
                    <td><input type="text" class="h-8 w-full rounded" placeholder="New value" name="R1_vitesse_newvalue" id="R1_vitesse_newvalue"></td>
                    <td class="text-center"><button onclick="fonction4()" class="btn py-1 px-2" type="button">Modifier</button></td>
                  </tr>
                </tbody>
              </table>

            </div>
            <div class="w-1/5 card flex flex-col justify-center items-center gap-2">
              <p class="font-bold text-2xl">Évitement</p>
              <div class="flex gap-2">
                <span class="font-bold text-xl">OFF</span>
                <label class="relative inline-flex items-center cursor-pointer">
                  <input type="checkbox" value="" class="sr-only peer">
                  <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[3px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                </label>
                <span class="font-bold text-xl">ON</span>
              </div>
            </div>
          </div>
          <div class="flex w-full gap-4">
            <div class="flex flex-col gap-2 w-1/2">
              <?php
              if ($result = $link->query("SELECT * FROM `gpio` ORDER BY `time` DESC LIMIT 1")) {
                $row = $result->fetch_row();
                $result->close();
              } ?>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16 font-bold">GPIO1</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R1_GPIO1" id="R1_GPIO1"><?php echo $row[1] ?></p>
                    <input type="text" name="R1_GPIO1_newvalue" id="R1_GPIO1_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction5()" type="button">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16 font-bold">GPIO2</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R1_GPIO2" id="R1_GPIO2"><?php echo $row[2] ?></p>
                    <input type="text" name="R1_GPIO2_newvalue" id="R1_GPIO2_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction6()" type="button">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16 font-bold">GPIO3</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R1_GPIO3" id="R1_GPIO3"><?php echo $row[3] ?></p>
                    <input type="text" name="R1_GPIO3_newvalue" id="R1_GPIO3_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction7()" type="button">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16 font-bold">GPIO4</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R1_GPIO4" id="R1_GPIO4"><?php echo $row[4] ?></p>
                    <input type="text" name="R1_GPIO4_newvalue" id="R1_GPIO4_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction8()" type="button">Modifier</button>
                </label>
              </div>
            </div>
            <div class="flex flex-col gap-2 w-1/2">
              <div class="flex">
                <label class="input-box">
                  <span class="w-16 font-bold">GPIO5</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R1_GPIO5" id="R1_GPIO5"><?php echo $row[5] ?></p>
                    <input type="text" name="R1_GPIO5_newvalue" id="R1_GPIO5_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction9()" type="button">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16 font-bold">GPIO6</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R1_GPIO6" id="R1_GPIO6"><?php echo $row[6] ?></p>
                    <input type="text" name="R1_GPIO6_newvalue" id="R1_GPIO6_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction10()" type="button">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16 font-bold">GPIO7</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R1_GPIO7" id="R1_GPIO7"><?php echo $row[7] ?></p>
                    <input type="text" name="R1_GPIO7_newvalue" id="R1_GPIO7_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction11()" type="button">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16 font-bold">GPIO8</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R1_GPIO8" id="R1_GPIO8"><?php echo $row[8] ?></p>
                    <input type="text" name="R1_GPIO8_newvalue" id="R1_GPIO8_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction12()" type="button">Modifier</button>
                </label>
              </div>
            </div>

          </div>
          <div class="flex gap-4 mt-1">
            <div class="flex flex-col w-1/2">
              <?php
              if ($result = $link->query("SELECT * FROM `moteurs` ORDER BY `time` DESC LIMIT 1")) {
                $row = $result->fetch_row();
                $result->close();
              } ?>
              <p class="title">Moteur 1</p>
              <div class="flex flex-col gap-2">
                <div class="flex input-box">
                  <label for="moteur-input" class="w-16 font-bold">Direction</label>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R1_moteur1_dir" id="R1_moteur1_dir"><?php echo $row[2] ?></p>
                    <input type="text" name="R1_moteur1_dir_newvalue" id="R1_moteur1_dir_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction13()" type="button">Modifier</button>
                </div>
                <div class="flex input-box">
                  <label for="pwm-input" class="w-16 font-bold">PWM</label>
                  <div class="flex gap-4 ml-5">
                    <p class="bg-white rounded p-2 w-12" name="R1_moteur1_pwm" id="R1_moteur1_pwm"><?php echo $row[1] ?></p>
                    <input type="text" name="R1_moteur1_pwm_newvalue" id="R1_moteur1_pwm_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction14()" type="button">Modifier</button>
                </div>
              </div>
            </div>
            <div class="flex flex-col w-1/2">
              <p class="title text-white">Moteur 2</p>
              <div class="flex flex-col gap-2">
                <div class="flex input-box">
                  <label for="moteur2-input" class="w-16 font-bold">Direction</label>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R1_moteur2_dir" id="R1_moteur2_dir"><?php echo $row[4] ?></p>
                    <input type="text" name="R1_moteur2_dir_newvalue" id="R1_moteur2_dir_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction15()" type="button">Modifier</button>
                </div>
                <div class="flex input-box">
                  <label for="pwm2-input" class="w-16 font-bold">PWM</label>
                  <div class="flex gap-4 ml-5">
                    <p class="bg-white rounded p-2 w-12" name="R1_moteur2_pwm" id="R1_moteur2_pwm"><?php echo $row[3] ?></p>
                    <input type="text" name="R1_moteur2_pwm_newvalue" id="R1_moteur2_pwm_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction16()" type="button">Modifier</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-1/2 p-5 bg-gray-900 flex flex-col gap-5">
          <form>
            <div class="flex gap-4">
              <?php
              if ($result = $link->query("SELECT * FROM `ax12` ORDER BY `time` DESC LIMIT 1")) {
                $row = $result->fetch_row();
                $result->close();
              } ?>
              <table class="table-auto w-full text-center border-separate border-spacing-3 ax-table">
                <thead class="bg-green-400 text-black">
                  <tr>
                    <th>Ax12</th>
                    <th>Vitesse</th>
                    <th>Position</th>
                    <th>Nouvelle position</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_1</td>
                    <td name="R1_vit_ax12_1" id="R1_vit_ax12_1"><?php echo $row[1]?></td>
                    <td name="R1_pos_ax12_1" id="R1_pos_ax12_1"><?php echo $row[2]?></td>
                    <td><label>
                        <input type="text" name="R1_pos_ax12_1_newvalue" id="R1_pos_ax12_1_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_2</td>
                    <td name="R1_vit_ax12_2" id="R1_vit_ax12_2"><?php echo $row[3] ?></td>
                    <td name="R1_pos_ax12_2" id="R1_pos_ax12_2"><?php echo $row[4] ?></td>
                    <td><label>
                        <input type="text" name="R1_pos_ax12_2_newvalue" id="R1_pos_ax12_2_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_3</td>
                    <td name="R1_vit_ax12_3" id="R1_vit_ax12_3"><?php echo $row[5] ?></td>
                    <td name="R1_pos_ax12_3" id="R1_pos_ax12_3"><?php echo $row[6] ?></td>
                    <td><label>
                        <input type="text" name="R1_pos_ax12_3_newvalue" id="R1_pos_ax12_3_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_4</td>
                    <td name="R1_vit_ax12_4" id="R1_vit_ax12_4"><?php echo $row[7] ?></td>
                    <td name="R1_pos_ax12_4" id="R1_pos_ax12_4"><?php echo $row[8] ?></td>
                    <td><label>
                        <input type="text" name="R1_pos_ax12_4_newvalue" id="R1_pos_ax12_4_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_5</td>
                    <td name="R1_vit_ax12_5" id="R1_vit_ax12_5"><?php echo $row[9] ?></td>
                    <td name="R1_pos_ax12_5" id="R1_pos_ax12_5"><?php echo $row[10] ?></td>
                    <td><label>
                        <input type="text" name="R1_pos_ax12_5_newvalue" id="R1_pos_ax12_5_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_6</td>
                    <td name="R1_vit_ax12_6" id="R1_vit_ax12_6"><?php echo $row[11] ?></td>
                    <td name="R1_pos_ax12_6" id="R1_pos_ax12_6"><?php echo $row[12] ?></td>
                    <td><label>
                        <input type="text" name="R1_pos_ax12_6_newvalue" id="R1_pos_ax12_6_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_7</td>
                    <td name="R1_vit_ax12_7" id="R1_vit_ax12_7"><?php echo $row[13] ?></td>
                    <td name="R1_pos_ax12_7" id="R1_pos_ax12_7"><?php echo $row[14] ?></td>
                    <td><label>
                        <input type="text" name="R1_pos_ax12_7_newvalue" id="R1_pos_ax12_7_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_8</td>
                    <td name="R1_vit_ax12_8" id="R1_vit_ax12_8"><?php echo $row[15] ?></td>
                    <td name="R1_pos_ax12_8" id="R1_pos_ax12_8"><?php echo $row[16] ?></td>
                    <td><label>
                        <input type="text" name="R1_pos_ax12_8_newvalue" id="R1_pos_ax12_8_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_9</td>
                    <td name="R1_vit_ax12_9" id="R1_vit_ax12_9"><?php echo $row[17] ?></td>
                    <td name="R1_pos_ax12_9" id="R1_pos_ax12_9"><?php echo $row[18] ?></td>
                    <td><label>
                        <input type="text" name="R1_pos_ax12_9_newvalue" id="R1_pos_ax12_9_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_10</td>
                    <td name="R1_vit_ax12_10" id="R1_vit_ax12_10"><?php echo $row[19] ?></td>
                    <td name="R1_pos_ax12_10" id="R1_pos_ax12_10"><?php echo $row[20] ?></td>
                    <td><label>
                        <input type="text" name="R1_pos_ax12_10_newvalue" id="R1_pos_ax12_10_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_11</td>
                    <td name="R1_vit_ax12_11" id="R1_vit_ax12_11"><?php echo $row[21] ?></td>
                    <td name="R1_pos_ax12_11" id="R1_pos_ax12_11"><?php echo $row[22] ?></td>
                    <td><label>
                        <input type="text" name="R1_pos_ax12_11_newvalue" id="R1_pos_ax12_11_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_12</td>
                    <td name="R1_vit_ax12_12" id="R1_vit_ax12_12"><?php echo $row[23] ?></td>
                    <td name="R1_pos_ax12_12" id="R1_pos_ax12_12"><?php echo $row[24] ?></td>
                    <td><label>
                        <input type="text" name="R1_pos_ax12_12_newvalue" id="R1_pos_ax12_12_newvalue" />
                      </label></td>
                  </tr>
                </tbody>
              </table>
              <div class="grid grid-rows-2 gap-4 self-end mb-3">
                <button type="reset" class="btn">Clear</button>
                <button type="button" class="btn" onclick="fonction17()">Modifier</button>
              </div>
            </div>
            <div class="grid grid-cols-3 gap-4 mt-3">
              <button class="btn" type="button" onclick="R1_automatisme1()">Automatisme 1</button>
              <button class="btn" type="button" onclick="R1_automatisme2()">Automatisme 2</button>
              <button class="btn" type="button" onclick="R1_automatisme3()">Automatisme 3</button>
              <button class="btn" type="button" onclick="R1_automatisme4()">Automatisme 4</button>
              <button class="btn" type="button" onclick="R1_automatisme5()">Automatisme 5</button>
              <button class="btn" type="button" onclick="R1_automatisme6()">Automatisme 6</button>
              <button class="btn" type="button" onclick="R1_automatisme7()">Automatisme 7</button>
              <button class="btn" type="button" onclick="R1_automatisme8()">Automatisme 8</button>
              <button class="btn" type="button" onclick="R1_automatisme9()">Automatisme 9</button>
            </div>
          </form>
        </div>
      </div>
    </section>
    <section class="tab" id="R2" data-active="inactive">
      <div class="flex w-screen">
        <div class="w-1/2 h-full p-5 bg-gray-900 flex flex-col gap-4">
          <div class="flex gap-4">
            <div class="w-4/5 flex flex-col justify-center items-left card">
              <table class="table coord-table">
                <tbody>
                  <tr>
                    <td class="font-bold text-2xl">X_R2_odo</td>
                    <td class="font-bold text-4xl text-center" name="R2_pos_odom_X" id="R2_pos_odom_X">1</td>
                    <td><input type="text" class="h-8 w-full rounded" placeholder="New value" name="R2_pos_odom_X_newvalue" id="R2_pos_odom_X_newvalue"></td>
                    <td class="text-center"><button onclick="fonction1()" class="btn py-1 px-2" type="button">Modifier</button></td>
                  </tr>
                  <tr>
                    <td class="font-bold text-2xl">Y_R2_odo</td>
                    <td class="font-bold text-4xl text-center" name="R2_pos_odom_Y" id="R2_pos_odom_Y">2</td>
                    <td><input type="text" class="h-8 w-full rounded" placeholder="New value" name="R2_pos_odom_Y_newvalue" id="R2_pos_odom_Y_newvalue"></td>
                    <td class="text-center"><button onclick="fonction2()" class="btn py-1 px-2" type="button">Modifier</button></td>
                  </tr>
                  <tr>
                    <td class="font-bold text-2xl">Theta</td>
                    <td class="font-bold text-4xl text-center" name="R2_pos_odom_Theta" id="R2_pos_odom_Theta">3</td>
                    <td><input type="text" class="h-8 w-full rounded" placeholder="New value" name="R2_pos_odom_Theta_newvalue" id="R2_pos_odom_Theta_newvalue"></td>
                    <td class="text-center"><button onclick="fonction3()" class="btn py-1 px-2" type="button">Modifier</button></td>
                  </tr>
                  <tr>
                    <td class="font-bold text-2xl">Vitesse</td>
                    <td class="font-bold text-4xl text-center" name="R2_vitesse" id="R2_vitesse">4</td>
                    <td><input type="text" class="h-8 w-full rounded" placeholder="New value" name="R2_vitesse_newvalue" id="R2_vitesse_newvalue"></td>
                    <td class="text-center"><button onclick="fonction4()" class="btn py-1 px-2" type="button">Modifier</button></td>
                  </tr>
                </tbody>
              </table>

            </div>
            <div class="w-1/5 card flex flex-col justify-center items-center gap-2">
              <p class="font-bold text-2xl">Évitement</p>
              <div class="flex gap-2">
                <span class="font-bold text-xl">OFF</span>
                <label class="relative inline-flex items-center cursor-pointer">
                  <input type="checkbox" value="" class="sr-only peer">
                  <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[3px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                </label>
                <span class="font-bold text-xl">ON</span>
              </div>
            </div>
          </div>
          <div class="flex w-full gap-4">
            <div class="flex flex-col gap-2 w-1/2">
              <div class="flex">
                <label class="input-box">
                  <span class="w-16 font-bold">GPIO1</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R2_GPIO1" id="R2_GPIO1">44</p>
                    <input type="text" name="R2_GPIO1_newvalue" id="R2_GPIO1_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction5()" type="button">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16 font-bold">GPIO2</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R2_GPIO2" id="R2_GPIO2">44</p>
                    <input type="text" name="R2_GPIO2_newvalue" id="R2_GPIO2_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction6()" type="button">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16 font-bold">GPIO3</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R2_GPIO3" id="R2_GPIO3">44</p>
                    <input type="text" name="R2_GPIO3_newvalue" id="R2_GPIO3_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction7()" type="button">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16 font-bold">GPIO4</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R2_GPIO4" id="R2_GPIO4">44</p>
                    <input type="text" name="R2_GPIO4_newvalue" id="R2_GPIO4_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction8()" type="button">Modifier</button>
                </label>
              </div>
            </div>
            <div class="flex flex-col gap-2 w-1/2">
              <div class="flex">
                <label class="input-box">
                  <span class="w-16 font-bold">GPIO5</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R2_GPIO5" id="R2_GPIO5">44</p>
                    <input type="text" name="R2_GPIO5_newvalue" id="R2_GPIO5_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction9()" type="button">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16 font-bold">GPIO6</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R2_GPIO6" id="R2_GPIO6">44</p>
                    <input type="text" name="R2_GPIO6_newvalue" id="R2_GPIO6_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction10()" type="button">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16 font-bold">GPIO7</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R2_GPIO7" id="R2_GPIO7">44</p>
                    <input type="text" name="R2_GPIO7_newvalue" id="R2_GPIO7_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction11()" type="button">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16 font-bold">GPIO8</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R2_GPIO8" id="R2_GPIO8">44</p>
                    <input type="text" name="R2_GPIO8_newvalue" id="R2_GPIO8_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction12()" type="button">Modifier</button>
                </label>
              </div>
            </div>

          </div>
          <div class="flex gap-4 mt-1">
            <div class="flex flex-col w-1/2">
              <p class="title">Moteur 1</p>
              <div class="flex flex-col gap-2">
                <div class="flex input-box">
                  <label for="moteur-input" class="w-16 font-bold">Direction</label>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R2_moteur1_dir" id="R2_moteur1_dir">44</p>
                    <input type="text" name="R2_moteur1_dir_newvalue" id="R2_moteur1_dir_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction13()" type="button">Modifier</button>
                </div>
                <div class="flex input-box">
                  <label for="pwm-input" class="w-16 font-bold">PWM</label>
                  <div class="flex gap-4 ml-5">
                    <p class="bg-white rounded p-2 w-12" name="R2_moteur1_pwm" id="R2_moteur1_pwm">44</p>
                    <input type="text" name="R2_moteur1_pwm_newvalue" id="R2_moteur1_pwm_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction14()" type="button">Modifier</button>
                </div>
              </div>
            </div>
            <div class="flex flex-col w-1/2">
              <p class="title text-white">Moteur 2</p>
              <div class="flex flex-col gap-2">
                <div class="flex input-box">
                  <label for="moteur2-input" class="w-16 font-bold">Direction</label>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12" name="R2_moteur2_dir" id="R2_moteur2_dir">44</p>
                    <input type="text" name="R2_moteur2_dir_newvalue" id="R2_moteur2_dir_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction15()" type="button">Modifier</button>
                </div>
                <div class="flex input-box">
                  <label for="pwm2-input" class="w-16 font-bold">PWM</label>
                  <div class="flex gap-4 ml-5">
                    <p class="bg-white rounded p-2 w-12" name="R2_moteur2_pwm" id="R2_moteur2_pwm">44</p>
                    <input type="text" name="R2_moteur2_pwm_newvalue" id="R2_moteur2_pwm_newvalue" placeholder="New value">
                  </div>
                  <button class="btn" onclick="fonction16()" type="button">Modifier</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-1/2 p-5 bg-gray-700 flex flex-col gap-5">
          <form>
            <div class="flex gap-4">
              <table class="table-auto w-full text-center border-separate border-spacing-3 ax-table">
                <thead class="bg-green-400 text-black">
                  <tr>
                    <th>Ax12</th>
                    <th>Vitesse</th>
                    <th>Position</th>
                    <th>Nouvelle position</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_1</td>
                    <td name="R2_vit_ax12_1" id="R2_vit_ax12_1">111</td>
                    <td name="R2_pos_ax12_1" id="R2_pos_ax12_1">222</td>
                    <td><label>
                        <input type="text" name="R2_pos_ax12_1_newvalue" id="R2_pos_ax12_1_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_2</td>
                    <td name="R2_vit_ax12_2" id="R2_vit_ax12_2">111</td>
                    <td name="R2_pos_ax12_2" id="R2_pos_ax12_2">222</td>
                    <td><label>
                        <input type="text" name="R2_pos_ax12_2_newvalue" id="R2_pos_ax12_2_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_3</td>
                    <td name="R2_vit_ax12_3" id="R2_vit_ax12_3">111</td>
                    <td name="R2_pos_ax12_3" id="R2_pos_ax12_3">222</td>
                    <td><label>
                        <input type="text" name="R2_pos_ax12_3_newvalue" id="R2_pos_ax12_3_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_4</td>
                    <td name="R2_vit_ax12_4" id="R2_vit_ax12_4">111</td>
                    <td name="R2_pos_ax12_4" id="R2_pos_ax12_4">222</td>
                    <td><label>
                        <input type="text" name="R2_pos_ax12_4_newvalue" id="R2_pos_ax12_4_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_5</td>
                    <td name="R2_vit_ax12_5" id="R2_vit_ax12_5">111</td>
                    <td name="R2_pos_ax12_5" id="R2_pos_ax12_5">222</td>
                    <td><label>
                        <input type="text" name="R2_pos_ax12_5_newvalue" id="R2_pos_ax12_5_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_6</td>
                    <td name="R2_vit_ax12_6" id="R2_vit_ax12_6">111</td>
                    <td name="R2_pos_ax12_6" id="R2_pos_ax12_6">222</td>
                    <td><label>
                        <input type="text" name="R2_pos_ax12_6_newvalue" id="R2_pos_ax12_6_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_7</td>
                    <td name="R2_vit_ax12_7" id="R2_vit_ax12_7">111</td>
                    <td name="R2_pos_ax12_7" id="R2_pos_ax12_7">222</td>
                    <td><label>
                        <input type="text" name="R2_pos_ax12_7_newvalue" id="R2_pos_ax12_7_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_8</td>
                    <td name="R2_vit_ax12_8" id="R2_vit_ax12_8">111</td>
                    <td name="R2_pos_ax12_8" id="R2_pos_ax12_8">222</td>
                    <td><label>
                        <input type="text" name="R2_pos_ax12_8_newvalue" id="R2_pos_ax12_8_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_9</td>
                    <td name="R2_vit_ax12_9" id="R2_vit_ax12_9">111</td>
                    <td name="R2_pos_ax12_9" id="R2_pos_ax12_9">222</td>
                    <td><label>
                        <input type="text" name="R2_pos_ax12_9_newvalue" id="R2_pos_ax12_9_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_10</td>
                    <td name="R2_vit_ax12_10" id="R2_vit_ax12_10">111</td>
                    <td name="R2_pos_ax12_10" id="R2_pos_ax12_10">222</td>
                    <td><label>
                        <input type="text" name="R2_pos_ax12_10_newvalue" id="R2_pos_ax12_10_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_11</td>
                    <td name="R2_vit_ax12_11" id="R2_vit_ax12_11">111</td>
                    <td name="R2_pos_ax12_11" id="R2_pos_ax12_11">222</td>
                    <td><label>
                        <input type="text" name="R2_pos_ax12_11_newvalue" id="R2_pos_ax12_11_newvalue" />
                      </label></td>
                  </tr>
                  <tr class="even:bg-gray-100 odd:bg-gray-300">
                    <td>AX12_12</td>
                    <td name="R2_vit_ax12_12" id="R2_vit_ax12_12">111</td>
                    <td name="R2_pos_ax12_12" id="R2_pos_ax12_12">222</td>
                    <td><label>
                        <input type="text" name="R2_pos_ax12_12_newvalue" id="R2_pos_ax12_12_newvalue" />
                      </label></td>
                  </tr>
                </tbody>
              </table>
              <div class="grid grid-rows-2 gap-4 self-end mb-3">
                <button type="reset" class="btn">Clear</button>
                <button type="button" class="btn" onclick="fonction17()">Modifier</button>
              </div>
            </div>
            <div class="grid grid-cols-3 gap-4 mt-3">
              <button class="btn" type="button" onclick="R2_automatisme1()">Automatisme 1</button>
              <button class="btn" type="button" onclick="R2_automatisme2()">Automatisme 2</button>
              <button class="btn" type="button" onclick="R2_automatisme3()">Automatisme 3</button>
              <button class="btn" type="button" onclick="R2_automatisme4()">Automatisme 4</button>
              <button class="btn" type="button" onclick="R2_automatisme5()">Automatisme 5</button>
              <button class="btn" type="button" onclick="R2_automatisme6()">Automatisme 6</button>
              <button class="btn" type="button" onclick="R2_automatisme7()">Automatisme 7</button>
              <button class="btn" type="button" onclick="R2_automatisme8()">Automatisme 8</button>
              <button class="btn" type="button" onclick="R2_automatisme9()">Automatisme 9</button>
            </div>
          </form>
        </div>
      </div>
    </section>
    <section class="tab" id="R1-asserv" data-active="active">
    <div class="flex w-screen h-screen">
      <div class="w-1/2 p-5 bg-gray-700 flex flex-col gap-3">
        <div class="w-full flex flex-col justify-center card">
          <div class="rounded w-full flex justify-center bg-red-500">
            <p class="font-bold">Odométrie roue</p>
          </div>
          <div class="flex flex-row justify-between">
            <div class="parametre">
              <label for="entraxe" class="font-bold">Entraxe (mm)</label>
              <input class="w-10" type="text" id="entraxe" value="44">
            </div>
            <div class="parametre">
              <label for="entraxe" class="font-bold">Diametre_motrice</label>
              <input class="w-10" type="text" id="entraxe" value="44">
            </div>
            <div class="parametre">
              <label for="entraxe" class="font-bold">Perimetre (mm)</label>
              <input class="w-10" type="text" id="entraxe" value="44">
            </div>
          </div>
          <div class="flex flex-row">
            <div class="parametre">
              <label for="entraxe" class="font-bold">Coeff_gauche</label>
              <input class="w-10" type="text" id="entraxe" value="44">
            </div>
            <div class="parametre">
              <label for="entraxe" class="font-bold">Coeff_droite</label>
              <input class="w-10" type="text" id="entraxe" value="44">
            </div>
          </div>
        </div>
        <div class="w-full flex flex-col justify-center card">
          <div class="rounded w-full flex justify-center bg-blue-500">
            <p class="font-bold">Asservissement</p>
          </div>
          <div class="flex flex-row justify-between">
            <div class="parametre">
              <label for="entraxe" class="font-bold">Max_integrale_blocage</label>
              <input class="w-10" type="text" id="entraxe" value="44">
            </div>
            <div class="parametre">
              <label for="entraxe" class="font-bold">Max_erreur integral_v</label>
              <input class="w-10" type="text" id="entraxe" value="44">
            </div>
            <div class="parametre">
              <label for="entraxe" class="font-bold">Seuil_immobilite</label>
              <input class="w-10" type="text" id="entraxe" value="44">
            </div>
          </div>
        </div>
      <div class="flex gap-4">
        <div class="w-3/5 flex flex-col card">
          <div class="rounded w-full flex justify-center bg-blue-500">
            <p class="font-bold">Asservissement_distance</p>
          </div>
          <div class="flex flex-row">
            <div class="flex flex-col w-1/2">
              <div class="parametre">
                <label for="entraxe" class="font-bold">Vitesse_consigne_max</label>
                <input class="w-10" type="text" id="entraxe" value="44">
              </div>
              <div class="parametre">
                <label for="entraxe" class="font-bold">Vitesse_distance_min</label>
                <input class="w-10" type="text" id="entraxe" value="44">
              </div>
            </div>
            <div class="flex flex-col w-1/2">
              <div class="parametre">
                <label for="entraxe" class="font-bold">Vitesse_max_tension</label>
                <input class="w-10" type="text" id="entraxe" value="44">
              </div>
              <div class="parametre">
                <label for="entraxe" class="font-bold">Distance_consigne</label>
                <input class="w-10" type="text" id="entraxe" value="44">
              </div>
            </div>
          </div>
        </div>
        <div class="w-2/5 flex flex-col card">
          <div class="rounded w-full flex justify-center bg-blue-500">
            <p class="font-bold">Asservissement_angle</p>
          </div>
          <div class="flex flex-col">
            <div class="parametre">
              <label for="entraxe" class="font-bold">Vitesse_angle_max</label>
              <input class="w-10" type="text" id="entraxe" value="44">
            </div>
            <div class="parametre">
              <label for="entraxe" class="font-bold">Vitesse_angle_min</label>
              <input class="w-10" type="text" id="entraxe" value="44">
            </div>
            <div class="parametre">
              <label for="entraxe" class="font-bold">Orientation_consigne_deg</label>
              <input class="w-10" type="text" id="entraxe" value="44">
            </div>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-3 grid-rows-2 gap-4 my-2">
        <div class="w-full justify-center card">
          <div class="rounded flex justify-center bg-violet-500">
            <p class="font-bold">PID_Vitesse</p>
          </div>
          <div class="flex flex-row justify-between">
            <div class="parametre">
              <label for="entraxe" class="font-bold">P</label>
              <input class="w-8" type="text" id="entraxe" value="44">
            </div>
            <div class="parametre">
              <label for="entraxe" class="font-bold">I</label>
              <input class="w-8" type="text" id="entraxe" value="44">
            </div>
            <div class="parametre">
              <label for="entraxe" class="font-bold">D</label>
              <input class="w-8" type="text" id="entraxe" value="44">
            </div>
          </div>
        </div>
        <div class="w-full justify-center card">
          <div class="rounded flex justify-center bg-violet-500">
            <p class="font-bold">PID_Orientation</p>
          </div>
          <div class="flex flex-row justify-between">
            <div class="parametre">
              <label for="entraxe" class="font-bold">P</label>
              <input class="w-8" type="text" id="entraxe" value="44">
            </div>
            <div class="parametre">
              <label for="entraxe" class="font-bold">I</label>
              <input class="w-8" type="text" id="entraxe" value="44">
            </div>
            <div class="parametre">
              <label for="entraxe" class="font-bold">D</label>
              <input class="w-8" type="text" id="entraxe" value="44">
            </div>
          </div>
        </div>
        <div class="w-full justify-center card">
          <div class="rounded flex justify-center bg-violet-500">
            <p class="font-bold">PID_Position</p>
          </div>
          <div class="flex flex-row justify-between">
            <div class="parametre">
              <label for="entraxe" class="font-bold">P</label>
              <input class="w-8" type="text" id="entraxe" value="44">
            </div>
            <div class="parametre">
              <label for="entraxe" class="font-bold">I</label>
              <input class="w-8" type="text" id="entraxe" value="44">
            </div>
            <div class="parametre">
              <label for="entraxe" class="font-bold">D</label>
              <input class="w-8" type="text" id="entraxe" value="44">
            </div>
          </div>
        </div>
        <div class="w-full justify-center card">
          <div class="rounded flex justify-center bg-violet-500">
            <p class="font-bold">PID_Blocage</p>
          </div>
          <div class="flex flex-row justify-between">
            <div class="parametre">
              <label for="entraxe" class="font-bold">P</label>
              <input class="w-8" type="text" id="entraxe" value="44">
            </div>
            <div class="parametre">
              <label for="entraxe" class="font-bold">I</label>
              <input class="w-8" type="text" id="entraxe" value="44">
            </div>
            <div class="parametre">
              <label for="entraxe" class="font-bold">D</label>
              <input class="w-8" type="text" id="entraxe" value="44">
            </div>
          </div>
        </div>
        <div class="w-full justify-center card">
          <div class="rounded flex justify-center bg-violet-500">
            <p class="font-bold">PID_Hybride</p>
          </div>
          <div class="flex flex-row justify-between">
            <div class="parametre">
              <label for="entraxe" class="font-bold">P</label>
              <input class="w-8" type="text" id="entraxe" value="44">
            </div>
            <div class="parametre">
              <label for="entraxe" class="font-bold">I</label>
              <input class="w-8" type="text" id="entraxe" value="44">
            </div>
            <div class="parametre">
              <label for="entraxe" class="font-bold">D</label>
              <input class="w-8" type="text" id="entraxe" value="44">
            </div>
          </div>
        </div>
      </div>
      <div class="w-full flex flex-col justify-center card">
          <p class="w-16">bouton</p>
      </div>

      </div>
      <div class="w-1/2 p-5 bg-gray-900 flex flex-col gap-4">
        <div class="flex flex-col">
          <div class="rounded w-full flex justify-center bg-yellow-500">
            <p class="font-bold">courbe vitesse</p>
          </div>
        </div>
        <div class="h-3/4 flex flex-wrap justify-center items-center gap-1 card">
          <div id="chartR1"></div>
          <div id="chartR2"></div>
          <div id="chartR3"></div>
          <div id="chartR4"></div>
        </div>
        <div class="flex flex-col card mt-3">
          <div class="rounded w-full flex justify-center bg-yellow-500">
            <p class="font-bold">Déplacement</p>
          </div>
          <div class="flex flex-row justify-center gap-2 p-2">
            <input type="text" class="px-2 w-96" placeholder="Commande" value=""/>
            <button class="btn">Valider</button>
          </div>
        </div>
      </div>
  </section>
  <section class="tab" id="R2-asserv" data-active="inactive">
    <div class="flex w-screen h-screen">
      <div class="w-1/2 p-5 bg-gray-900 flex flex-col gap-4">
      </div>
      <div class="w-1/2 p-5 bg-gray-700 flex flex-col gap-5">
      </div>
    </div>
  </section>
    <section class="tab" id="balise" data-active="inactive">
      <h1>balise</h1>
    </section>
  </main>
</body>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="index.js"></script>

</html>