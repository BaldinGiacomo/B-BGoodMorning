<!DOCTYPE html>
<html>

<head>
	<title>GoodMorning</title>

	<link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
	<script src="https://cdn.tailwindcss.com"></script>

</head>

<body style="display: flex;flex-direction: column; align-items: center;justify-content: center;height: 100vh;">
	<div
		style="background-image: url('https://wallpaperaccess.com/full/1076693.jpg'); position:absolute; opacity:0.6; height:100vh; width:100vw;">
	</div>

	<div style="z-index:2">
		<h1 style="color:#fafafa" class="mb-5 text-6xl font-bold underline decoration-solid">GoodMorning</h1>
		<p style="color:#fafafa" class="mb-5 font-bold ">Il nostro Bed & Breakfast è un'accogliente sistemazione
			dove potrete trascorrere un soggiorno confortevole e rilassante.<br>
			Offriamo camere arredate con gusto e dotate di ogni comfort, tra cui connessione Wi-Fi gratuita, TV a
			schermo piatto e bagno privato.<br>
			Al mattino vi serviremo una deliziosa colazione continentale inclusa nel prezzo del soggiorno.<br>
			Siamo situati in una zona tranquilla e comoda, a breve distanza da attrazioni turistiche e ristoranti
			locali.<br>
			Siamo certi che la nostra ospitalità vi farà sentire come a casa vostra.
		<p>
		<h2 style="postion:relative; color:#fafafa;">Cosa desideri fare?</h2>
		<br>
	</div>

	<div style="display: inline-flex; justify-content: space-between;">

		<div  class="card card-compact w-96 bg-base-100 shadow-xl mr-7">
			<figure><img src="https://media.xptcdn.net/capitol/assets/img/media/r16x9_1920x1080_Oy4YDhZaFbk.jpg"
					class="h-64 object:cover" />
			</figure>
			<div class="card-body ">
				<p>Devi peffozza guardare le tue prenotazioni</p>
				<div class="card-actions justify-end">
					<button class="btn btn-outline btn-info"
						onclick="window.location.href='PrenotazioniDB.php'">Visualizza le prenotazioni</button>
				</div>
			</div>
		</div>


		<div  class="card card-compact w-96 bg-base-100 shadow-xl mr-7">
			<figure><img class="h-64"
					src="https://thumbs.dreamstime.com/b/modulo-di-prenotazione-per-la-della-stanza-alberghiera-background-primo-piano-visualizzazione-del-testo-hotel-su-sfondo-tabella-164564485.jpg" />
			</figure>
			<div class="card-body">

				<p>Devi peffozza prenotà da noi</p>
				<div class="card-actions justify-end">
					<button class="btn btn-outline btn-success" onclick="window.location.href='Prenotare.php'">Prenota
						un soggiorno da noi</button>
				</div>
			</div>
		</div>


		<div  class="card card-compact w-96 bg-base-100 shadow-xl mr-7">
			<figure><img class="h-64" src="https://img1.goodfon.ru/wallpaper/nbig/0/d2/keep-calm-keep-calm.jpg" />
			</figure>
			<div class="card-body">

				<p>Devi peffozza entrà a sistemà tutto</p>
				<div class="card-actions justify-end">
					<button class="btn btn-outline btn-warning" onclick="window.location.href='Admin.php'">Admin
					</button>
				</div>
			</div>
		</div>

	</div>

</body>

</html>