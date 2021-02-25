jQuery(document).ready(function ($) {
  $('.header-slider').slick({
    prevArrow: '<div class="slider-arrow slider-arrow-prev"></div>',
    nextArrow: '<div class="slider-arrow slider-arrow-next"></div>', 
    arrows: false,
    dots: true
  });
  $('.hamburger').click(function () {
    if ($(this).hasClass('active')) {
      $(this).removeClass("active");
      $(this).next().slideUp();
    } else {
      $(this).addClass('active');
      $(this).next().slideDown();
    }
  });
  var inputmask_96e76a5f = {"mask":"+7(999)999-99-99"};
  jQuery("input[type=tel]").inputmask(inputmask_96e76a5f);

  $(".popup-content").click(function(e) {
    e.preventDefault();
    var formid = $(this).attr('data-formid');
    var message = $(this).attr('data-mailmsg');
    $("#order-modal .button").attr({'data-formid': formid, 'data-mailmsg': message});
    $("#order-modal").arcticmodal();
  });

  jQuery(".uniSendBtn").click(function(){ 
      var formid = jQuery(this).data("formid");
      var message = jQuery(this).data("mailmsg");
      var phone = $(this).siblings('[name=tel]').val();
      var name = $(this).siblings('[name=name]').val();
      
      if ((phone == "")||(phone.indexOf("_")>0)) {
        $(this).siblings('[name=tel]').css("background-color","#ff91a4")
      } else {
        var  jqXHR = jQuery.post(
          allAjax.ajaxurl,
          {
            action: 'universal_send',    
            nonce: allAjax.nonce,
            msg: message,
            name: name,
            tel: phone
          }
          
        );
        
        
        jqXHR.done(function (responce) {
          $("#order-modal").arcticmodal('close');
          jQuery('#messgeModal #lineMsg').html("Ваша заявка принята. Мы свяжемся с Вами в ближайшее время.");
          jQuery('#messgeModal').arcticmodal();
          
        });
        
        jqXHR.fail(function (responce) {
          jQuery('#messgeModal #lineIcon').html('');
          jQuery('#messgeModal #lineMsg').html("Произошла ошибка! Попробуйте позднее.");
          jQuery('#messgeModal').arcticmodal();
        });
      }
    });
});
