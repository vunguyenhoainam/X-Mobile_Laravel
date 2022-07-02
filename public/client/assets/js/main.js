var RUN = {

  menu_sp: function() {
    $(".btn-menu-sp").click(function (e) {
      e.preventDefault();
      $(".menu-sp").toggleClass("active");
      $(this).toggleClass("active");
    });
  },

  slide:function() {
    $(".list-slide-item").slick({
      arrows: true,
      autoplay: 3000,
      speed: 800,
      prevArrow: $('.btn-pre'),
      nextArrow: $('.btn-next'),
    });
  },

  // search_sp: function() {
  //   $(".icon-search").click(function (e) {
  //     e.preventDefault();
  //     $(".search-overlay").addClass("active");
  //   });
  //   $(".icon-close").click(function (e) {
  //     e.preventDefault();
  //     $(".search-overlay").removeClass("active");
  //   });
  // },

  // handle_modal: function() {
  //   $("#modal").iziModal({
  //   });
  // },

  // handle_form: function() {

  //   const input_1 = $(".input_1");
  //   const input_2 = $(".input_2");
  //   const input_3 = $(".input_3");
  //   const input_4 = $(".input_4");

  //   $(".submit-form").click(function (e) { 
  //     e.preventDefault();

  //     !input_1.val() ? input_1.attr('placeholder', "必須"): "";
  //     !input_2.val() ? input_2.attr('placeholder', "必須"): "";
  //     !input_3.val() ? input_3.attr('placeholder', "必須"): "";
  //     !input_4.val() ? input_4.attr('placeholder', "必須"): "";
      
  //     if (input_1.val() && input_2.val() && input_3.val() && input_4.val()) {
  //       console.log("DONE");
  //     }
  //   });

  // },

  init: function () {
    RUN.menu_sp();
    RUN.slide();
    // RUN.search_sp();
    // RUN.handle_form();
  },

};

$(document).ready(function () {
    RUN.init();
});

