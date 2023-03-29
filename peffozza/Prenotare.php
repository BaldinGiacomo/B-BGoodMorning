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
			<label style="color:#fafafa" class="mb-5 text-2xl font-bold " for="name">Stanza:</label>
			<input type="number" id="Stanza" name="Stanza"><br><br>
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