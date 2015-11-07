$(document).ready(function() {
  
  //Smooth scroling
  
  var anc = $('.down-arrow');

  anc.click(function(){
    console.log('tap');
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
        scrollTop: target.offset().top
      }, 1000);
      return false;
      }
    }
  });
  
  //Send Mail
  
  var textarea = $('#textarea');
  var mailtext = $('#mailtext');
  
  textarea.change(function(){
    
    mailtext.val(textarea.val());
    console.log(mailtext.val());
  });
  
  
  //Menu mobile
  
  var menuImage = $('.menu-icon');
  var menu = $('.menu');
  var mobileMenu = $('.mobile-menu');
  
  var menuClick = 0;
  
  var OpenMenu = function() {
    menu.animate({'top': '+=100vh'}, 'slow');
    
    menuImage.removeClass('menu-icon').addClass('menu-icon-close');
    console.log('open');
    menu.css('display', 'block');
  }
  
  var CloseMenu = function() {
    menu.animate({'top': '-=100vh'}, 'slow');
    
    menuImage.removeClass('menu-icon-close').addClass('menu-icon');
    console.log('close');
    setTimeout(DisNone, 450);
  }
  
  function DisNone () {
    menu.css('display', 'none');
  }
  
  mobileMenu.click(function(){
    CloseMenu();
    menuClick++;
  });
  
  menuImage.click(function(){
    if(menuClick % 2 == 0){
      OpenMenu();
      menuClick++;
    }else{
      CloseMenu();
      menuClick++;
    }
  });
  
});







