$(".btn").on("mouseenter", function () {
  $(".inputContainer").css({ "background-image": "linear-gradient(to top, rgba(60, 247, 60, 0.2), rgba(0, 0, 0, 0))" });
  $(".containerLogin").css({ "box-shadow": "0px 10px 10px rgba(60, 247, 60)" });
});

$(".btn").on("mouseleave", function () {
  $(".inputContainer").css({ "background-image": "linear-gradient(to top, rgba(43, 54, 202, 0.2), rgba(0, 0, 0, 0))" });
  $(".containerLogin").css({ "box-shadow": "0px 10px 10px rgba(43, 54, 202)" });
});
