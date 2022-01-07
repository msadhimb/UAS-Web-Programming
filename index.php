<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet" />

    <!-- My Css -->
    <link rel="stylesheet" href="style.css" />

    <title>Salman's Store</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
        <a class="navbar-brand" href="#">Salman's Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto text-center">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#product">Product</a>
            </li>
            <?php 
            if (isset($_POST['User'])){
              echo '<a type="button" class="btn btn-primary tombol">' . $_POST['User'].'</a>';
            }else{
              echo '<a type="button" class="btn btn-primary tombol" href="login.html">Sign In</a>';
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container text-white text-center">
        <h1 class="display-4">
          SHOPPING WITH US IS <span class="typing text-primary"></span>
        </h1>
        <p class="lead">Find the cheapest price here.</p>
      </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Info Panel -->
    <div class="row justify-content-center">
      <div class="col-lg-10 info-panel">
        <div class="row characteristic">
          <div class="col-lg">
            <h4>Easy</h4>
            <p>Easy to use in every way</p>
          </div>
          <div class="col-lg">
            <h4>Cheap</h4>
            <p>Cheapest price in a whole universe</p>
          </div>
          <div class="col-lg">
            <h4>Best</h4>
            <p>Best price</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Info Panel -->

    <!-- About -->
    <section id="about" class="about">
      <div class="row">
        <div class="container">
          <div class="row text-center textAbout">
            <h2>About</h2>
          </div>
          <div class="row justify-content-center text-center mt-3 mb-5">
            <div class="col-lg-4">
              <p class="pKiri">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus voluptates perspiciatis quaerat! Eos provident iste ipsum modi mollitia, eum earum.</p>
            </div>
            <div class="col-lg-5">
              <img class="pKanan" src="icon/About.png"></img>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir About -->

    <!-- Product -->
    <section id="product" class="product">
      <div class="row">
        <div class="container">
          <div class="row text-center mt-5">
            <h2>Product</h2>
          </div>
          <div class="row justify-content-center mt-5">
            <div class="col-md-4 d-flex justify-content-center">
              <button class="btnKategori all btnActive">All</button>
              <button class="btnKategori razer">Razer</button>
              <button class="btnKategori logitech">Logitech</button>
              <button class="btnKategori logitech">Fantech</button>
            </div>
          </div>
          <div class="container">
            <div class="row mt-3 d-flex justify-content-between">
              <div class="col-lg-4">
                <h3 id="namaProduk">All</h3>
              </div>
              <div class="col-lg-4">
                <form class="d-flex">
                  <input id="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                </form>
              </div>
            </div>
          </div>
          <div class="row justify-content-center mt-3 mb-5 listProductParent"></div>
        </div>
      </div>
    </section>
    <!-- Akhir Product -->

    <!-- Modal -->
    <section id="modal"></section>
    <!-- Akhir Modal -->

    <!-- Modal Checkout -->
    <section id="modalCheckout"></section>
    <!-- Akhir Checkout -->

    <!-- Musik -->
    <div class="row musik fixed-bottom ms-auto">
      <img src="Music/play.png" alt="play" id="iconPlay" />
    </div>
    <audio id="mySong">
      <source src="Music/TWICE CRY FOR ME.mp3" type="audio/mp3" />
    </audio>
    <!-- Akhir Musik -->

    <!-- Footer -->
    <section id="Footer">
      <footer class="pt-4 pb-2 text-center">
        <div class="row footer">
          <div class="col-lg-4">
            <h2 style="font-weight: 200; margin-right: 25px">Salman's <br>
              <span style="font-weight: 500; margin-left: 80px;">
              Store
              </span>
            </h2>
          </div>
          <div class="col-lg-4">
            <p>Muhamad Salman Adhim Baqy, © 2021, All rights reserved.</p>
          </div>
          <div class="col-lg-4">
            <a href="https://www.instagram.com/apwhabl.png/">
              <img src="icon/instagram.png" alt="ig" style="width: 50px; margin-top: 10px;">
            </a>
          </div>
        </div>
      </footer>
    </section>
    <!-- Akhir Footer -->

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="ghost-typer.js"></script>

    <!-- My Java Script -->
    <script src="script.js"></script>

    <?php 
      if(isset($_POST['Address'])){
        echo '<script type ="text/JavaScript">';  
        echo 'window.alert("Sign In Complete")';  
        echo '</script>';
      }else{
        echo '<script type ="text/JavaScript">';  
        echo 'window.alert("You Must Sign In First")';  
        echo '</script>';
      }
    ?>
    <script>

      $.getJSON("product.json", function (data) {
        let product = data.product;
        $.each(product, function (i, data) {
        // Fungsi Modal
          // Product
          var angka = 0;
          $("#tambah" + i + "").on("click", function () {
            angka++;
            $("#text" + i + "").text(angka);
            var harga = parseInt(data.harga);
            var totalHarga = harga * angka;
            var ongkir = 12000;
            $(".total" + i + "").html("Rp. " + totalHarga);
            content = "";
            var address = "<?php echo $_POST["Address"]; ?>";
            if (angka > 0) {
              content +=
                '<div class="modal fade" id="staticBackdrop' +
                i +
                '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="staticBackdropLabel">' +
                data.nama +
                '</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body"><h1 clas="hargaCheckout">Rp. ' +
                (totalHarga + ongkir) +
                '</h1><p class="mt-3">Price : Rp. ' +
                data.harga +
                '</p><p style="margin-top: -15px;">Total : ' +
                angka +
                '</p><p style="margin-top: -15px;">Order Fee : Rp. ' +
                ongkir +
                "</p><p style='margin-top: -15px;'>Address : " +
                address +
                '</p><p style="margin-top: -15px;">Bank Acount (Salman Store) : 123123456456</p></div><div class="modal-footer d-flex justify-content-center"><div class="row"><p class="text-danger" style="text-align: center;">Dont Forget to Screen Shot This Screen</p><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></div></div></div></div></div>';
            } else {
              content = "";
            }
            $("#modalCheckout").html(content);
          });
          $("#kurang" + i + "").on("click", function () {
            angka--;
            var harga = parseInt(data.harga);
            var totalHarga = harga * angka;
            var ongkir = 12000;
            $("#text" + i + "").html(angka);
            $(".total" + i + "").html("Rp. " + totalHarga);
            if (angka <= 0) {
              angka = 0;
              $("#text" + i + "").html(angka);
              $(".total" + i + "").html("Rp. " + data.harga);
            }
            content = "";
            if (angka > 0) {
              content +=
                '<div class="modal fade" id="staticBackdrop' +
                i +
                '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="staticBackdropLabel">' +
                data.nama +
                '</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body"><h1 clas="hargaCheckout">Rp. ' +
                (totalHarga + ongkir) +
                '</h1><p class="mt-3">Price : Rp. ' +
                data.harga +
                '</p><p style="margin-top: -15px;">Total : ' +
                angka +
                '</p><p style="margin-top: -15px;">Order Fee : Rp. ' +
                ongkir +
                '</p><p style="margin-top: -15px;">Address : ' +
                address +
                '</p><p style="margin-top: -15px;">Bank Acount (Salman Store) : 123123456456</p></div><div class="modal-footer d-flex justify-content-center"><div class="row"><p class="text-danger" style="text-align: center;">Dont Forget to Screen Shot This Screen</p><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></div></div></div></div></div>';
            } else {
              content = "";
            }
            $("#modalCheckout").html(content);
          });
        })
      })
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
