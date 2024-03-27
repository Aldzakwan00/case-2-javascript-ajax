<!-- kode program PHP yang mengimplementasikan struktur antarmuka -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Chat</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <!-- Google Material Icon -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <!-- CSS Eksternal -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>
  
  <!-- Main -->
  <div class="body-utama d-flex justify-content-end align-items-end">
  <div class="test">

  </div>
    <!-- Button Chat -->
    <div class="button-chat mx-3 d-flex justify-content-start align-items-center">
      <button id="pesanButton" class="button-chat btn btn-warning rounded-circle d-flex justify-content-center align-items-center" type="button">
        <span class="material-symbols-outlined">
          mail
        </span>
      </button>
    </div>

    <!-- Masukkan Username -->
    <div id="cardUsername" class="card border-warning mx-5 hidden">
      <div class="card-header d-flex justify-content-start align-items-center bg-warning">
      </div>
      <div class="card-body d-flex justify-content-center align-items-center">
        <div class="d-flex username">
          <label for="username" class="form-label">Masukkan Username : </label>
          <input type="text" id="username" class="form-control mb-2">
          <button id="buttonSubmit" class="button-username btn btn-warning" type="submit">Submit</button>
        </div>
      </div>
    </div>

    <!-- Chat Card -->
    <div id="cardContainer" class="card chat-card border-warning mx-5 hidden">
      <div class="card-header d-flex align-items-center bg-warning">
        <div class="title">
          <h4 class="my-1 nama-user">Chat With Us</h4>
        </div>
        <div class="dropdown ">
          <a class="btn d-flex justify-content-center align-items-center" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="material-symbols-outlined">page_control</span>
          </a>
          <ul class="dropdown-menu">
            <li><a id="ganti-username" class="dropdown-item" href="#">Ganti Username</a></li>
          </ul>
        </div>
      </div>
      <div class="card-body">
        <!-- Bagian Chat -->
        <div id="chat-box" class="chat-box">

        </div>
        <!-- Bagian input pesan -->
        <div class="input-group">
            <input type="text" id="isi-chat" name="pesan" class="form-control">
            <button id="send" class="btn btn-warning d-flex justify-content-center align-items-center" role="button" data-bs-toggle="dropdown" aria-expanded="false"">
                <span class="material-symbols-outlined">send</span>
            </button>
        </div>
      </div>
    </div>

  </div>

  <?php include 'footer.php'; ?>
  
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
