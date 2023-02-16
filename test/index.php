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
              @apply bg-green-500 text-white font-bold py-2 px-4 rounded hover:bg-green-600;
          }

          .input-box {
              @apply bg-green-200 rounded flex gap-2 p-3 items-center w-full justify-between;
          }

          .input-box input {
              @apply bg-white rounded w-32 px-2;
          }

          .title {
              @apply pb-4 text-2xl font-bold underline underline-offset-8 text-white
          }

          .ax-table th, .ax-table td {
              @apply w-1/4
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
                    if ($result = $link -> query("SELECT * FROM `test` ORDER BY `time` DESC LIMIT 1")) {
                        $row = $result -> fetch_row();
                        $result -> close();
                    }
                    echo '<div class="depart" id="D1" style="left:0; top:calc(50% - 2.5vw);"></div>';
                    echo '<div class="depart" id="D2" style="left:calc(50% - 2.5vw); top:0;"></div>';
                    echo '<div class="depart" id="D3" style="left:calc(100% - 5vw); top:calc(50% - 2.5vw);"></div>';
                    echo '<div class="depart" id="D4" style="left:calc(50% - 2.5vw); top:calc(100% - 5vw);"></div>';
                    echo '<div class="robot" id="robot-R1" style="left: calc('.floor($row[1]/3).'% - 2.5vw);top: calc('.floor($row[2]/2).'% - 2.5vw);transform: rotate('.$row[3].'deg);">R1</div>';
                    echo '<div class="robot" id="robot-R2" style="left: calc('.floor($row[4]/3).'% - 2.5vw);top: calc('.floor($row[5]/2).'% - 2.5vw);transform: rotate('.$row[6].'deg);">R2</div>';
                    echo '<div class="robot adv" id="robot-R1-adv" style="left: calc('.floor($row[7]/3).'% - 2.5vw);top: calc('.floor($row[8]/2).'% - 2.5vw);">R3</div>';
                    echo '<div class="robot adv" id="robot-R2-adv" style="left: calc('.floor($row[9]/3).'% - 2.5vw);top: calc('.floor($row[10]/2).'% - 2.5vw);">R4</div>';
                    //echo '<div style="left: calc('.floor($row[11]/3).'% - 2%);top: calc('.floor($row[12]/2).'% - 3%);" class="element '.$row[13].'"></div>';
                    //echo '<div style="left: calc('.floor($row[14]/3).'% - 2%);top: calc('.floor($row[15]/2).'% - 3%);" class="element '.$row[16].'"></div>';
                    //echo '<div style="left: calc('.floor($row[17]/3).'% - 2%);top: calc('.floor($row[18]/2).'% - 3%);" class="element '.$row[19].'"></div>';
                    echo '<div style="left: calc('.floor($row[20]/3).'% - 2%);top: calc('.floor($row[21]/2).'% - 3%);" class="element '.$row[22].'"></div>';
                    //echo '<div style="left: calc('.floor($row[23]/3).'% - 2%);top: calc('.floor($row[24]/2).'% - 3%);" class="element '.$row[25].'"></div>';
                    //echo '<div style="left: calc('.floor($row[26]/3).'% - 2%);top: calc('.floor($row[27]/2).'% - 3%);" class="element '.$row[28].'"></div>';
                    //echo '<div style="left: calc('.floor($row[29]/3).'% - 2%);top: calc('.floor($row[30]/2).'% - 3%);" class="element '.$row[31].'"></div>';
                    echo '<div style="left: calc('.floor($row[32]/3).'% - 2%);top: calc('.floor($row[33]/2).'% - 3%);" class="element '.$row[34].'"></div>';
                    //echo '<div style="left: calc('.floor($row[35]/3).'% - 2%);top: calc('.floor($row[36]/2).'% - 3%);" class="element '.$row[37].'"></div>';
                    //echo '<div style="left: calc('.floor($row[38]/3).'% - 2%);top: calc('.floor($row[39]/2).'% - 3%);" class="element '.$row[40].'"></div>';
                    //echo '<div style="left: calc('.floor($row[41]/3).'% - 2%);top: calc('.floor($row[42]/2).'% - 3%);" class="element '.$row[43].'"></div>';
                    echo '<div style="left: calc('.floor($row[44]/3).'% - 2%);top: calc('.floor($row[45]/2).'% - 3%);" class="element '.$row[46].'"></div>';
            ?>
        </div>
        <div id="container-synthese-info">
          <div class="infos">
            <div class="positions">
              <p>R1: X=<?php echo $row[1].", Y=".$row[2].", Theta=".$row[3]; ?></p>
              <p>R2: X=<?php echo $row[4].", Y=".$row[5].", Theta=".$row[6]; ?></p>
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
            <div class="w-1/2 flex flex-col rounded justify-center items-left p-2 bg-green-300 aspect-rectangle">
              <p class="my-2 font-bold text-2xl">X_R1_odo </p>
              <p class="my-2 font-bold text-2xl">Y_R1_odo </p>
              <p class="my-2 font-bold text-2xl">Theta </p>
              <p class="my-2 font-bold text-2xl">Vitesse </p>
            </div>
          </div>
          <p class="title">GPIO</p>
          <div class="flex w-full gap-4">
            <div class="flex flex-col gap-3 w-1/2">
              <div class="flex">
                <label class="input-box">
                  <span class="w-16">GPIO1</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12">44</p>
                    <input type="text" name="GPIO1" id="GPIO1" placeholder="Nouvelle valeur">
                  </div>
                  <button class="btn">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16">GPIO2</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12">44</p>
                    <input type="text" name="GPIO2" id="GPIO2" placeholder="Nouvelle valeur">
                  </div>
                  <button class="btn">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16">GPIO3</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12">0</p>
                    <input type="text" name="GPIO3" id="GPIO3" placeholder="Nouvelle valeur">
                  </div>
                  <button class="btn">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16">GPIO4</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12">44</p>
                    <input type="text" name="GPIO4" id="GPIO4" placeholder="Nouvelle valeur">
                  </div>
                  <button class="btn">Modifier</button>
                </label>
              </div>
            </div>
            <div class="flex flex-col gap-3 w-1/2">
              <div class="flex">
                <label class="input-box">
                  <span class="w-16">GPIO5</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12">44</p>
                    <input type="text" name="GPIO5" id="GPIO5" placeholder="Nouvelle valeur">
                  </div>
                  <button class="btn">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16">GPIO6</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12">44</p>
                    <input type="text" name="GPIO6" id="GPIO6" placeholder="Nouvelle valeur">
                  </div>
                  <button class="btn">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16">GPIO7</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12">44</p>
                    <input type="text" name="GPIO7" id="GPIO7" placeholder="Nouvelle valeur">
                  </div>
                  <button class="btn">Modifier</button>
                </label>
              </div>
              <div class="flex">
                <label class="input-box">
                  <span class="w-16">GPIO8</span>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12">44</p>
                    <input type="text" name="GPIO8" id="GPIO8" placeholder="Nouvelle valeur">
                  </div>
                  <button class="btn">Modifier</button>
                </label>
              </div>
            </div>

          </div>
          <div class="flex gap-4">
            <div class="flex flex-col w-1/2">
              <p class="title">Moteur 1</p>
              <div class="flex flex-col gap-4">
                <div class="flex input-box">
                  <label for="moteur-input" class="w-16">Direction</label>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12">44</p>
                    <input type="text" name="moteur" id="moteur-input" placeholder="Nouvelle valeur">
                  </div>
                  <button class="btn">Modifier</button>
                </div>
                <div class="flex input-box">
                  <label for="pwm-input" class="w-16">PWM</label>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12">44</p>
                    <input type="text" name="pwm" id="pwm-input" placeholder="Nouvelle valeur">
                  </div>
                  <button class="btn">Modifier</button>
                </div>
              </div>
            </div>
            <div class="flex flex-col w-1/2">
              <p class="title text-white">Moteur 2</p>
              <div class="flex flex-col gap-4">
                <div class="flex input-box">
                  <label for="moteur2-input" class="w-16">Direction</label>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12">44</p>
                    <input type="text" name="moteur" id="moteur2-input" placeholder="Nouvelle valeur">
                  </div>
                  <button class="btn">Modifier</button>
                </div>
                <div class="flex input-box">
                  <label for="pwm2-input" class="w-16">PWM</label>
                  <div class="flex gap-4">
                    <p class="bg-white rounded p-2 w-12">44</p>
                    <input type="text" name="pwm" id="pwm2-input" placeholder="Nouvelle valeur">
                  </div>
                  <button class="btn">Modifier</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-1/2 p-5 bg-gray-900 flex flex-col gap-5">
          <form>
            <table class="table-auto w-full text-center border-separate border-spacing-3 ax-table">
              <thead class="bg-green-400 text-black">
                <tr>
                  <th>Ax12</th>
                  <th>Vitesse</th>
                  <th>Valeur</th>
                  <th>Nouvelle valeur</th>
                </tr>
              </thead>
              <tbody>
                <tr class="even:bg-gray-100 odd:bg-gray-300">
                  <td>AX12_1</td>
                  <td>222</td>
                  <td>222</td>
                  <td><label>
                      <input type="text" />
                    </label></td>
                </tr>
                <tr class="even:bg-gray-100 odd:bg-gray-300">
                  <td>AX12_2</td>
                  <td>222</td>
                  <td>222</td>
                  <td><label>
                      <input type="text" />
                    </label></td>
                </tr>
                <tr class="even:bg-gray-100 odd:bg-gray-300">
                  <td>AX12_3</td>
                  <td>222</td>
                  <td>222</td>
                  <td><label>
                      <input type="text" />
                    </label></td>
                </tr>
                <tr class="even:bg-gray-100 odd:bg-gray-300">
                  <td>AX12_4</td>
                  <td>222</td>
                  <td>222</td>
                  <td><label>
                      <input type="text" />
                    </label></td>
                </tr>
                <tr class="even:bg-gray-100 odd:bg-gray-300">
                  <td>AX12_5</td>
                  <td>222</td>
                  <td>222</td>
                  <td><label>
                      <input type="text" />
                    </label></td>
                </tr>
                <tr class="even:bg-gray-100 odd:bg-gray-300">
                  <td>AX12_6</td>
                  <td>222</td>
                  <td>222</td>
                  <td><label>
                      <input type="text" />
                    </label></td>
                </tr>
                <tr class="even:bg-gray-100 odd:bg-gray-300">
                  <td>AX12_7</td>
                  <td>222</td>
                  <td>222</td>
                  <td><label>
                      <input type="text" />
                    </label></td>
                </tr>
                <tr class="even:bg-gray-100 odd:bg-gray-300">
                  <td>AX12_8</td>
                  <td>222</td>
                  <td>222</td>
                  <td><label>
                      <input type="text" />
                    </label></td>
                </tr>
                <tr class="even:bg-gray-100 odd:bg-gray-300">
                  <td>AX12_9</td>
                  <td>222</td>
                  <td>222</td>
                  <td><label>
                      <input type="text" />
                    </label></td>
                </tr>
                <tr class="even:bg-gray-100 odd:bg-gray-300">
                  <td>AX12_10</td>
                  <td>222</td>
                  <td>222</td>
                  <td><label>
                      <input type="text" />
                    </label></td>
                </tr>
                <tr class="even:bg-gray-100 odd:bg-gray-300">
                  <td>AX12_11</td>
                  <td>222</td>
                  <td>222</td>
                  <td><label>
                      <input type="text" />
                    </label></td>
                </tr>
                <tr class="even:bg-gray-100 odd:bg-gray-300">
                  <td>AX12_12</td>
                  <td>222</td>
                  <td>222</td>
                  <td><label>
                      <input type="text" />
                    </label></td>
                </tr>
              </tbody>
            </table>
            <div class="w-full flex justify-between">
              <div class="w-1/2 flex flex-col p-2 bg-green-300 rounded justify-center items-center">
                <p class="font-bold">Mode</p>
                <p class="text-3xl font-bold ">Automatisme</p>
              </div>
              <button type="submit" class="btn">Modifier</button>
            </div>
          </form>
        </div>
      </div>
    </section>
    <section class="tab" id="R2" data-active="inactive">
    </section>
    <section class="tab" id="R1-asserv" data-active="inactive">
      <h1>R1-asserv</h1>
    </section>
    <section class="tab" id="R2-asserv" data-active="inactive">
      <h1>R2-asserv</h1>
    </section>
    <section class="tab" id="balise" data-active="inactive">
      <h1>balise</h1>
    </section>
  </main>
</body>
<script src="index.js"></script>

</html>