$(function () {
  $(".tabs-nav a").click(function () {
    //Check if the tabs menu has active class
    $(".tabs-nav li").removeClass("active");
    $(this).parent().addClass("active");

    // Display active tab
    var currentTab = $(this).attr("href");
    $(".tabs-content div").hide();
    $(currentTab).show();

    return false;
  });
});

$(function () {
  $(".tabs-nav2 a").click(function () {
    //Check if the tabs menu has active class
    $(".tabs-nav2 li").removeClass("active");
    $(this).parent().addClass("active");

    // Display active tab
    var currentTab = $(this).attr("href");
    $(".tabs-content2 div").hide();
    $(currentTab).show();

    return false;
  });
});

$(function () {
  $(".tabs-nav3 a").click(function () {
    //Check if the tabs menu has active class
    $(".tabs-nav3 li").removeClass("active");
    $(this).parent().addClass("active");

    // Display active tab
    var currentTab = $(this).attr("href");
    $(currentTab).show();

    return false;
  });
});
