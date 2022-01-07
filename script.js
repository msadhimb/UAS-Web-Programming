// PARALAX
// Jumbotron
// Scroll
$(window).scroll(function () {
  let wScroll = $(this).scrollTop();

  // Jumbotron
  $(".jumbotron .container").css({
    transform: "translate(0px, " + wScroll / 3 + "%)",
  });

  // About
  if (wScroll > $(".about").offset().top - 550) {
    $(".pKiri").addClass("pMuncul");
    $(".pKanan").addClass("pMuncul");
  } else {
    $(".pKiri").removeClass("pMuncul");
    $(".pKanan").removeClass("pMuncul");
  }

  // Product
  if (wScroll > $(".product").offset().top - 550) {
    $(".product .listProduct").each(function (i) {
      setTimeout(function () {
        $(".product .listProduct").eq(i).addClass("proMuncul");
      }, 500 * (i + 1));
    });
  } else {
    $(".product .listProduct").removeClass("proMuncul");
  }
});
// On Load
$(window).on("load", function () {
  // Jumbotron
  $(".jumbotron .display-4").addClass("jMuncul");
  $(".jumbotron .display-4 p").addClass("jMuncul");
  $(".jumbotron .lead").addClass("jMuncul");

  // Info Panel
  $(".info-panel .characteristic").addClass("muncul");
});
// Typing
$(".typing").ghosttyper({
  messages: ["FUN", "CHEAP", "EASY"],
  // animation speed for typing effect
  timeWrite: 100,
  // animation speed for deleting effect
  timeDelete: 100,
  // animation delay
  timePause: 1000,
});

// JSON
// Seearch
$(document).ready(function () {
  $("#search").keyup(function () {
    var searchField = $("#search").val();
    var expression = new RegExp(searchField, "i");
    $.getJSON("product.json", function (data) {
      let product = data.product;
      let content = "";
      $.each(product, function (i, data) {
        if (data.nama.search(expression) != -1) {
          content +=
            '<div class="col-lg-4 d-flex justify-content-center listProduct"><div class="card" style="width: 18rem"><img src="Product/' +
            data.gambar +
            '" class="rounded mx-auto d-block" alt="headset" /><div class="card-body"><h5 class="card-title">' +
            data.nama +
            '</h5><p class="card-text">' +
            data.deskripsi +
            '</p><h5 class="card-title mb-3">Price : Rp. ' +
            data.harga +
            '</h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal' +
            i +
            '" class="btn btn-primary">Buy</a></div></div></div>';
        }
      });
      $(".listProductParent").html(content);
      $(".product .listProduct").each(function (i) {
        setTimeout(function () {
          $(".product .listProduct").eq(i).addClass("proMuncul");
        }, 200 * (i + 1));
      });
    });
  });
});

//Product
$.getJSON("product.json", function (data) {
  let product = data.product;
  $.each(product, function (i, data) {
    $(".listProductParent").append(
      '<div class="col-lg-4 d-flex justify-content-center listProduct"><div class="card" style="width: 18rem"><img src="Product/' +
        data.gambar +
        '" class="rounded mx-auto d-block" alt="headset" /><div class="card-body"><h5 class="card-title">' +
        data.nama +
        '</h5><p class="card-text">' +
        data.deskripsi +
        '</p><h5 class="card-title mb-3">Price : Rp. ' +
        data.harga +
        '</h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal' +
        i +
        '" class="btn btn-primary">Buy</a></div></div></div>'
    );

    //Modal
    $("#modal").append(
      '<div class="modal fade" id="exampleModal' +
        i +
        '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"><div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalLabel">' +
        data.nama +
        '</h5><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div><div class="modal-body"><div class="row"><img src="Product/' +
        data.gambar +
        '" class="card-img-top img-fluid rounded mx-auto d-block p-5" alt="headset1" /><p class="card-text">' +
        data.deskripsi +
        "</p></div><h2 class='mt-3 total" +
        i +
        "'>Rp. " +
        data.harga +
        '</h2></div><div class="modal-footer"><button class="btn btn-white buttonKurang" id="kurang' +
        i +
        '">-</button><h2 id="text' +
        i +
        '">0</h2><button class="btn btn-white buttonTambah" id="tambah' +
        i +
        '">+</button><div class="closeBuy ms-auto"><button type="button" class="btn btn-secondary me-3" data-bs-dismiss="modal">Close</button><button type="button" class="btn btn-primary btnCheckout' +
        i +
        '" data-bs-toggle="modal" data-bs-target="#staticBackdrop' +
        i +
        '">Buy</button></div></div></div></div></div>'
    );
  });
});

//validasi kategori
var btnClick = false;
$(".btnKategori").on("click", function () {
  $(".btnKategori").removeClass("btnActive");
  $(this).addClass("btnActive");

  let kategori = $(this).html();
  $("#namaProduk").html(kategori);

  $.getJSON("product.json", function (data) {
    let product = data.product;
    let content = "";
    $.each(product, function (i, data) {
      if (data.kategori == kategori) {
        content +=
          '<div class="col-lg-4 d-flex justify-content-center listProduct"><div class="card" style="width: 18rem"><img src="Product/' +
          data.gambar +
          '" class="rounded mx-auto d-block" alt="headset" /><div class="card-body"><h5 class="card-title">' +
          data.nama +
          '</h5><p class="card-text">' +
          data.deskripsi +
          '</p><h5 class="card-title mb-3">Price : Rp. ' +
          data.harga +
          '</h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal' +
          i +
          '" class="btn btn-primary">Buy</a></div></div></div>';
      } else if (kategori == "All") {
        content +=
          '<div class="col-lg-4 d-flex justify-content-center listProduct"><div class="card" style="width: 18rem"><img src="Product/' +
          data.gambar +
          '" class="rounded mx-auto d-block" alt="headset" /><div class="card-body"><h5 class="card-title">' +
          data.nama +
          '</h5><p class="card-text">' +
          data.deskripsi +
          '</p><h5 class="card-title mb-3">Price : Rp. ' +
          data.harga +
          '</h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal' +
          i +
          '" class="btn btn-primary">Buy</a></div></div></div>';
      }
    });
    $(".listProductParent").html(content);
    $(".product .listProduct").each(function (i) {
      setTimeout(function () {
        $(".product .listProduct").eq(i).addClass("proMuncul");
      }, 200 * (i + 1));
    });
  });
});

// Musik
var lagu = document.getElementById("mySong");
var play = document.getElementById("iconPlay");

function cryforme() {
  if (lagu.paused) {
    lagu.play();
    play.src = "Music/pause.png";
  } else {
    lagu.pause();
    play.src = "Music/play.png";
  }
}

play.onclick = cryforme;
