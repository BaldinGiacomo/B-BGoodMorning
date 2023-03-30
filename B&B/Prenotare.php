<!DOCTYPE html>
<html>

<head>
	<title>Prenotazione</title>
	<link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="display: flex;flex-direction: column; align-items: center;justify-content: center;height: 100vh;">
	<div style="background-image: url('https://images.wallpaperscraft.com/image/single/hotel_reception_design_25608_1920x1080.jpg');
 position:absolute; opacity:0.7; height:100vh; width:100vw;">
	</div>
	<div style="text-align:center; z-index:3" class="card w-max bg-base-100 shadow-xl h-max ">
		<h1 style="color:#fafafa" class="mb-5 text-6xl font-bold mx-2 my-2">Prenota un soggiorno da noi</h1>
		<form class="my-2" method="GET" action="PrenotazioneRis.php">
		<?php
        $connessione = mysqli_connect("localhost", "root", "", "db_bed_and_breakfast");
        if (mysqli_connect_errno()) {
            echo "FAILED TO CONNECT TO MYSQL:" . mysqli_connect_error();
            exit();
        }
        $db = "SELECT id FROM prenotazioni";
        $result = mysqli_query($connessione, $db);
		$db2 ="SELECT numero FROM camere";
		$result2 =mysqli_query($connessione, $db2);

        if (mysqli_num_rows($result) != 0 ) {
            ?>
                <label style="color:#fafafa" class="mb-5 text-2xl font-bold " for="name">Inserire il proprio id:</label>
                <select name="id">
                    <?php
                    while ($row = mysqli_fetch_array($result))
                        echo "<option value=\"$row[id]\">$row[id]</option>";
		}
                    ?>
                </select><br><br>
                <label style="color:#fafafa" class="mb-5 text-2xl font-bold " for="name">Scegli la camera:</label>
                <select name="Stanza">
                    <?php
                    while ($row2 = mysqli_fetch_array($result2))
                        echo "<option value=\"$row2[numero]\">$row2[numero]</option>";
                    ?>
					</select><br><br>
			<label style="color:#fafafa" class="mb-5 text-2xl font-bold " for="email">DataArrivo:</label>
			<input type="date" id="DataArrivo" name="DataArrivo"><br><br>
			<label style="color:#fafafa" class="mb-5 text-2xl font-bold " for="message">DataPartenza:</label>
			<input type="date" id="DataPartenza" name="DataPartenza"></textarea><br><br>
			<input class="btn btn-active btn-primary" type="submit" value="Invia">
		</form>
		<div style="z-index:2 "class="flex justify-center items-center mx-2 my-2">
            <button class="btn btn-primary" onclick="window.location.href='B&BHomepage.php'">Ritorna
                all'homepage</button>
        </div>
		
	</div>

</body>

</html>