function openNav() {
  document.getElementById("mySidenav").style.width = "270px";
  document.getElementById("body01").style.paddingLeft = "270px"; 
  document.getElementById("footer01").style.paddingLeft = "270px"; 
 }
 
 /* Set the width of the side navigation to 0 */
 function closeNav() {
   document.getElementById("mySidenav").style.width = "0";
   document.getElementById("body01").style.paddingLeft = "0"; 
  document.getElementById("footer01").style.paddingLeft = "0"; 
 }

 function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'none', includedLanguages: 'ar,en,es,jv,ko,pa,pt,ru,zh-CN', 
  autoDisplay: false, layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}


function confirmar() {
    var txt;
    var r = confirm("Esta seguro de que desea eliminar este elemento");
    if (r == true) {

    } else {
        txt = "No se ha eliminado el elemento";
    }
    
}
/*$('#exampleModal').modal('toggle')*/

 $('document').ready(function () {

  
  // RESTYLE THE DROPDOWN MENU
  $('#google_translate_element').on("click", function () {

      // Change font family and color
      $("iframe").contents().find(".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div, .goog-te-menu2 *")
          .css({
              'color': '#544F4B',
              'font-family': 'Roboto',
              'width':'100%'
          });
      // Change menu's padding
      $("iframe").contents().find('.goog-te-menu2-item-selected').css ('display', 'none');
    
      // Change menu's padding
      $("iframe").contents().find('.goog-te-menu2').css ('padding', '0px');
    
      // Change the padding of the languages
      $("iframe").contents().find('.goog-te-menu2-item div').css('padding', '20px');
    
      // Change the width of the languages
      $("iframe").contents().find('.goog-te-menu2-item').css('width', '100%');
      $("iframe").contents().find('td').css('width', '100%');
    
      // Change hover effects
      $("iframe").contents().find(".goog-te-menu2-item div").hover(function () {
          $(this).css('background-color', '#4385F5').find('span.text').css('color', 'white');
      }, function () {
          $(this).css('background-color', 'white').find('span.text').css('color', '#544F4B');
      });

      // Change Google's default blue border
      $("iframe").contents().find('.goog-te-menu2').css('border', 'none');

      // Change the iframe's box shadow
      $(".goog-te-menu-frame").css('box-shadow', '0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3)');
      
    
    
      // Change the iframe's size and position?
      $(".goog-te-menu-frame").css({
          'height': '100%',
          'width': '100%',
          'top': '0px'
      });
      // Change iframes's size
      $("iframe").contents().find('.goog-te-menu2').css({
          'height': '100%',
          'width': '100%'
      });
  });
});
