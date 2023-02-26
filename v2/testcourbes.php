<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <div id="chartR1"></div>
    <div id="chartR2"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            packages: ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var dataR1 = new google.visualization.DataTable();
            var dataR2 = new google.visualization.DataTable();
            dataR1.addColumn('number', 'DateTime');
            dataR1.addColumn('number', 'R1.pos_odom.X');
            dataR1.addColumn('number', 'R1.pos_odom.Y');
            dataR1.addColumn('number', 'R1.pos_odom.Theta');
            dataR2.addColumn('number', 'DateTime');
            dataR2.addColumn('number', 'R2.pos_odom.X');
            dataR2.addColumn('number', 'R2.pos_odom.Y');
            dataR2.addColumn('number', 'R2.pos_odom.Theta');
            for (i = 1; i <= my_2d.length; i++) {
                dataR1.addRow([i, parseInt(my_2d[my_2d.length - i][1]), parseInt(my_2d[my_2d.length - i][2]), parseInt(my_2d[my_2d.length - i][3])]);
                dataR2.addRow([i, parseInt(my_2d[my_2d.length - i][4]), parseInt(my_2d[my_2d.length - i][5]), parseInt(my_2d[my_2d.length - i][6])]);
            }
                
            var options = {
                title: 'Positions',
                curveType: 'function',
                width: 1200,
                height: 700,
                legend: {
                    position: 'bottom'
                }
            };

            var chartR1 = new google.visualization.LineChart(document.getElementById('chartR1'));
            chartR1.draw(dataR1, options);
            var chartR2 = new google.visualization.LineChart(document.getElementById('chartR2'));
            chartR2.draw(dataR2, options);
        }
    </script>
</body>

</html>