<!DOCTYPE html>
<html>

<head>
    <title>EliminazionePrenotazione </title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="display: flex;flex-direction: column; align-items: center;justify-content: center;height: 100vh;">
    <div style="background-image: url('https://i.redd.it/4yjbrmf02rx31.png');
 position:absolute; opacity:0.7; height:100vh; width:100vw;">
    </div>
    <div style="z-index:2">
        <?php
        $connessione = mysqli_connect("localhost", "root", "", "db_bed_and_breakfast");
        if (mysqli_connect_errno()) {
            echo "FAILED TO CONNECT TO MYSQL:" . mysqli_connect_error();
            exit();
        }
        $db = "SELECT id FROM prenotazioni";
        $result = mysqli_query($connessione, $db);

        if (mysqli_num_rows($result) != 0) {
            ?>
            <form style="color:#fafafa" class="mb-5 font-bold " action="RimossaP.php" method="GET"><br>
                Inserire l'id della prenotazione da eliminare:
                <select name="id">
                    <?php
                    while ($row = mysqli_fetch_array($result))
                        echo "<option value=\"$row[id]\">$row[id]</option>";
                    ?>
                </select><br><br>            
                <input class="btn btn-error" type="submit" value="Elimina">
            </form>
            <div style="z-index:2">
                <button class="btn btn-primary " onclick="window.location.href='B&BHomepage.php'">Ritorna all'homepage</button>
            </div>

            <?php
        } else {
            echo "Cracrapu";
            mysqli_close($connessione);
        }
        ?>
    </div>
</body>


</html>