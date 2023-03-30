<!DOCTYPE html>

<head>
  <title>RimozioneEffettuata</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body style="display: flex;flex-direction: column; align-items: center;justify-content: center;height: 100vh;">
  <div style="background-image: url('https://www.urbantime.it/wp-content/uploads/2018/11/015_Cestino01.jpg');
 position:absolute; opacity:0.7; height:100vh; width:100vw;">
  </div>
  <?php
  $id = $_GET["id"];
  $connessione = mysqli_connect("localhost", "root", "", "db_bed_and_breakfast");
  if (mysqli_connect_errno()) {
    echo "FAILED TO CONNECT TO MYSQL:" . mysqli_connect_error();
    exit();
  } else {
    $db = "DELETE FROM Prenotazioni WHERE id=$id";
    $result = mysqli_query($connessione, $db);
    mysqli_close($connessione);
  }
  ?><br><br>
  <h1 style="color:#fafafa; z-index:2;" class="mb-5 text-6xl font-bold ">Rimossa con successo!</h1>
  <div style="z-index:2 ">
    <button class="btn btn-primary " onclick="window.location.href='B&BHomepage.php'">Ritorna all'homepage</button>
  </div>
</body>


</html>