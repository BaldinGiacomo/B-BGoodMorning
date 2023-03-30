<!DOCTYPE html>

<head>
  <title>AggiuntaRisultato</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="display: flex;flex-direction: column; align-items: center;justify-content: center;height: 100vh;">
  <div style="background-image: url('https://www.serinf.it/wp-content/uploads/2022/07/Cover-blog-gestione-check-in-check-out.jpg');
 position:absolute; opacity:0.7; height:100vh; width:100vw;">
  </div>
  <?php
  $Stanza = $_GET["Stanza"];
  $DataArrivo = $_GET["DataArrivo"];
  $DataPartenza = $_GET["DataPartenza"];
  $connessione = mysqli_connect("localhost", "root", "", "db_bed_and_breakfast");
  $Cliente = $_GET["id"];
  if (mysqli_connect_errno()) {
    echo "FAILED TO CONNECT TO MYSQL:" . mysqli_connect_error();
    exit();
  } else {
    $db = "INSERT INTO prenotazioni (Cliente, Camera, DataArrivo, DataPartenza, Disdetta) values ($Cliente, $Stanza, '$DataArrivo', '$DataPartenza', 0)";
    $result = mysqli_query($connessione, $db);
    mysqli_close($connessione);
  }
  ?><br><br>
  <h1 style="color:#fafafa; z-index:2;" class="mb-5 text-6xl font-bold ">Prenotazione effettuata con successo!</h1>
  <div style="z-index:2 ">
    <button class="btn btn-primary " onclick="window.location.href='B&BHomepage.php'">Ritorna all'homepage</button>
  </div>
</body>


</html>