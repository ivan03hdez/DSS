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