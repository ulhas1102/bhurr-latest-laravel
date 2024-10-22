$(document).on("click", ".car__li li", function () {
  $(".car__li li").removeClass("car__li__active");
  $(this).addClass("car__li__active");
  $("#v_name").val($(this).attr("fdi"));
});
$(document).on("click", "#car__type a", function () {
  $("#car__type a").removeClass("btn__red");
  $(this).addClass("btn__red");
});

// $(document).on("click", ".trip__btn .nav-link", function () {
//   console.log("btn clicked !");
//   // $("#trip-btn a").removeClass('btn-dark');
//   // $(this).addClass('btn-dark');
//   $(".trip__btn .nav-link.active").text($(this).text());
//   if ($(this).attr("fid") == "oneway") {
//     // $("#pickup_location_div").removeClass('col-md-12').addClass('col-md-6');
//     // $("#drop_location_div").show();
//     $("#start___date").removeClass("col-md-3").addClass("col-md-6");
//     $("#start__date___time").removeClass("col-md-3").addClass("col-md-6");
//     $("#end__date").hide();
//     $("#end__date__time").hide();
//   } else {
//     // $("#pickup_location_div").removeClass('col-md-6').addClass('col-md-12');
//     // $("#drop_location_div").hide();
//     $("#start___date").removeClass("col-md-6").addClass("col-md-3");
//     $("#start__date___time").removeClass("col-md-6").addClass("col-md-3");
//     $("#end__date").show();
//     $("#end__date__time").show();
//   }
// });

$(document).ready(function () {
  $("#next_to_date").click(function () {
    // Find the active tab
    var activeTab = $(".trip__btn .nav-link.active").attr("fid");
    console.log(activeTab);
    // localStorage.setItem("trip-type", activeTab);
    sessionStorage.setItem("trip-type", activeTab);
  });
});

$(document).ready(function () {
  // var activeTab = localStorage.getItem("trip-type");
  var activeTab = sessionStorage.getItem("trip-type");
  console.log("active tab get is " + activeTab);
  if (activeTab == "oneway") {
    // $("#pickup_location_div").removeClass('col-md-12').addClass('col-md-6');
    // $("#drop_location_div").show();
    $("#start___date").removeClass("col-md-3").addClass("col-md-6");
    $("#start__date___time").removeClass("col-md-3").addClass("col-md-6");
    $("#end__date").hide();
    $("#end__date__time").hide();
  } else {
    // $("#pickup_location_div").removeClass('col-md-6').addClass('col-md-12');
    // $("#drop_location_div").hide();
    $("#start___date").removeClass("col-md-6").addClass("col-md-3");
    $("#start__date___time").removeClass("col-md-6").addClass("col-md-3");
    $("#end__date").show();
    $("#end__date__time").show();
  }
});

// $(document).on("click", "#next_to_date", function () {
//   // $("#progressbar li").removeClass("active");
//   // $("#li_2").addClass("active");
//   // $("#step_1").hide();
//   // $("#step_2").show();
// });
$(document).on("click", "#back__1", function () {
  $("#progressbar li").removeClass("active");
  $("#li_1").addClass("active");
  $("#step_2").hide();
  $("#step_1").show();
});
$(document).on("click", "#next_to_confirmation", function () {
  $("#progressbar li").removeClass("active");
  $("#li_3").addClass("active");
  $("#step_2").hide();
  $("#step_3").show();
});
$(document).on("click", "#back_2", function () {
  $("#progressbar li").removeClass("active");
  $("#li_2").addClass("active");
  $("#step_3").hide();
  $("#step_2").show();
});
