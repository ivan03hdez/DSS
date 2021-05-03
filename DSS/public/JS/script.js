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
////METODO QUE PERMITE MOSTRAR POP-UP DE CONFIRMACION AL BORRAR UN REGISTRO EN EL ADMIN
$(document).ready(function () {
    $('#trash').click(function() {
      var row=$(this).parents('tr');
      var id=row.data('id');
      var urlClass = window.location.pathname.split('/')[1];/////funciona en admin porque cojo la clase dinamicamente
      if(confirm("¿Are you sure you want to delete this object?"))
        window.location.replace("http://localhost:8000/" + urlClass +"/delete/"+id);
    })
  });
  ////pra filtrar los resultados en un buscador
  $(document).ready(function(){
    $(".input-filter").on("keyup", function() {///input con el que filtramos
      var value = $(this).val().toLowerCase();
      $("div .product").filter(function() {
        //console.log($(this).val());
        return $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  ///////Filter with multiple criteria
  /*$(document).ready(function(){
    $("#type","#price").on("keyup", function(){select()})
    $(".input-filter").on("keyup", function() {///input con el que filtramos
      var value = $(this).val().toLowerCase();
      $("table tbody tr[data-id]").filter(function() {
        return $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
    var select = function() {
      var selectorFilters = {
        service: $("#service").val(),
        status: $("#status").val()
      };
    }
    var selector= function(){
      
    }
    $(selector).filter(function (){
      var searchValue = $("#search").val().toLowerCase();
      return (searchValue === "" || $(this).data("name").toLowerCase().indexOf(searchValue) > -1);
    }).show();
  });*/
