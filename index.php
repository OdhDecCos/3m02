<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IHM Sudriabotik</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <?php
        $username = "admin";
        $password = "admin";
        $database = "test";
        $mysqli = new mysqli("localhost", $username, $password, $database);
        if ($mysqli -> connect_errno) {
            echo "Connection error: " . $mysqli -> connect_error;
            exit();
        }
    ?>
    <nav class="navbar">
        <h1>Sudriabotik</h1>
        <ul>
            <li><a href="#asserv">Asserv</a></li>
            <li><a href="#d">D</a></li>
            <li><a href="#lidar">Lidar</a></li>
            <li><a href="#cam">Cam</a></li>
        </ul>
    </nav>
    <div class="content">
        <section id="asserv">
            <h1 class="section-title">Carte Asserv</h1>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Date</th>
                    <th>Position</th>
                </tr>
                <?php
                    if ($result = $mysqli -> query("SELECT * FROM asserv")) {
                        while($row = $result -> fetch_row()) {
                            echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td><td>" . $row[2] . "</td></tr>";
                        }
                        $result -> close();	
                    }
                ?>
            </table>
        </section>
        <section id="d">
            <h1 class="section-title">Carte D</h1>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Value</th>
                </tr>
                <?php
                    if ($result = $mysqli -> query("SELECT * FROM test")) {
                        while($row = $result -> fetch_row()) {
                            echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
                        }
                        $result -> close();	
                    }
                ?>
            </table>
        </section>
        <section id="lidar">
            <h1 class="section-title">Lidar</h1>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Value</th>
                </tr>
                <?php
                    if ($result = $mysqli -> query("SELECT * FROM test")) {
                        while($row = $result -> fetch_row()) {
                            echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
                        }
                        $result -> close();	
                    }
                ?>
            </table>
        </section>
        <section id="cam">
            <h1 class="section-title">Balise Vidéo</h1>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Value</th>
                </tr>
                <?php
                    if ($result = $mysqli -> query("SELECT * FROM test")) {
                        while($row = $result -> fetch_row()) {
                            echo "<tr><td>" . $row[0] . "</td><td>" . $row[1] . "</td></tr>";
                        }
                        $result -> close();	
                    }
                ?>
            </table>
        </section>
    </div>

</body>

</html>