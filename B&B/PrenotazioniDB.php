<!DOCTYPE html>
<html>

<head>
    <title>GoodMorning </title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="display: flex;flex-direction: column; align-items: center;justify-content: center;height: 100vh;">
    <div style="background-image: url('https://www.albergocamay.it/wp-content/uploads/2020/04/prenotazione-albergo-Riccione-1.jpg');
 position:absolute; opacity:0.7; height:100vh; width:100vw;">
    </div>
    <div style="z-index:2">
        <h1 style="color:#fafafa" class="mb-5 text-6xl font-bold underline decoration-solid">Prenotazioni GoodMorning</h1>
        
            <?php
            $connessione = mysqli_connect("localhost", "root", "", "db_bed_and_breakfast");
            if (mysqli_connect_errno()) {
                echo "FAILED TO CONNECT TO MYSQL:" . mysqli_connect_error();
                exit();
            }
            $db = "SELECT Cognome, Nome, Camera, DataArrivo, DataPartenza FROM Clienti JOIN Prenotazioni ON (Clienti.Codice=prenotazioni.Cliente); ";
            $result = mysqli_query($connessione, $db);

            if (mysqli_num_rows($result) != 0) {
                echo "<div class='overflow-x-auto'>";
                echo "<table class='table w-full'>";
                echo "<tr class='bg-white border-b dark:bg-gray-800 dark:border-gray-700'>";
                echo "<th>Cognome</th>";
                echo "<th>Nome</th>";
                echo "<th>Camera</th>";
                echo "<th>DataArrivo</th>";
                echo "<th>DataPartenza</th>";
                echo "</tr>";
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr class='active '>";
                    echo "<td>$row[0]</td>";
                    echo "<td>$row[1]</td>";
                    echo "<td>$row[2]</td>";
                    echo "<td>$row[3]</td>";
                    echo "<td>$row[4]</td>";
                    
                    echo "</tr>";
                }
                echo "</table>";
                echo "</div>";
            } else {
                echo "Cracrapu";
                mysqli_close($connessione);
            }
            ?>
        <br><br>
        <div style="z-index:2; display: flex;flex-direction: column; align-items: center;justify-content: center;position:relative">
            <button class="btn btn-primary " onclick="window.location.href='B&BHomepage.php'">Ritorna
                all'homepage</button>
        </div>
    </div>
</body>

</html>