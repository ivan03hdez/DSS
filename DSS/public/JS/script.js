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
 ///abrir y cerrar categorias del sidebar
  $('document').ready(function () {
    $("#category").unbind('hover');
    $("#category").click(function(){
      $("a#categories").each(function(){
        $(this).toggle($(this).is(":hidden"));
        $(this).paddingLeft = "10px";
      }); 
    });
  });

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
    $('div #trash').click(function() {
      var row=$(this).parents('tr');
      var id=row.data('id');
      var urlClass = window.location.pathname.split('/')[1];/////funciona en admin porque cojo la clase dinamicamente
      if(confirm("¿Are you sure you want to delete this object?"))
        window.location.replace("http://localhost:8000/" + urlClass +"/delete/"+id);
    })
  });
  ////pra filtrar los resultados en un buscador
  /*$(document).ready(function(){
    $("#search").on("keyup", function() {///input con el que filtramos
      var value = $(this).val().toLowerCase();
      $("div.col-sm-3").filter(function() {
        console.log($(this).data('name'));
        return $(this).toggle($(this).data('name').toLowerCase().indexOf(value) > -1)
      });
    });
  });*/
  ///////Filter with multiple criteria
  $(document).ready(function(){
    $("select").change(function(){filtroMultiple();});
    $("#search").on("keyup", function() {///input con el que filtramos
      filtroMultiple();
    });
    var filtroMultiple = function () {
      var value = $("#search").val().toLowerCase(); 
      $(selector()).each(function() {
        return $(this).toggle(condiciones(value,this));
      })
    }
    var condiciones = function(name,element){
      var nameFilter = () => name === undefined || name === "" || $(element).data('name').toLowerCase().indexOf(name) > -1;
      var typeFilter = () => select()['type'] == undefined || select()['type'] === "Todos"  || $(element).data('type')===select()['type'];
      var priceFilter = () => $(element).data('price') <= select()['price'];
      return nameFilter() && typeFilter() && priceFilter(); 
    };
    var select = function() {
      return  {
        type: $("#type").val(),
        price: $("#price").val()
      };
    }
    var selector= function(){
      var sel;
      select()['price'] == null ?  (select['price']= 10000.0) : false;
      sel = "div.center";
      return sel;
    }
  });
  /////añade al carrito en home
  $(document).ready(function () {
    $('a#btn-home-buy').click(function() {
      let id = $(this).data('id');
      if(confirm("¿Are you sure you want to add to the cart?"))
        window.location.replace("http://localhost:8000/addToCart/" +id + "/quantity/" + 1);
    })
  });