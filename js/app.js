$("#provinces").change(function () {
  var id_provinces = $("#provinces").val();
  $.ajax({
    type: "POST",
    dataType: "html",
    url: "collect-data.php",
    data: "provinces=" + id_provinces,
    success: function (data) {
      $("#regencies").html(data);
    },
  });
});

$("#regencies").change(function () {
  var id_regencies = $("#regencies").val();
  $.ajax({
    type: "POST",
    dataType: "html",
    url: "collect-data.php",
    data: "regencies=" + id_regencies,
    success: function (data) {
      $("#districts").html(data);
    },
  });
});
