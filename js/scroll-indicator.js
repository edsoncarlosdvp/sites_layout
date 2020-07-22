$(document).ready(function () {
  $('body,html').animate({
    scrollTop: 25
  });
});
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  var nav = document.getElementById("menutop");
  var navbar = document.getElementById("navbarsite");
  var navbartel = document.getElementById("navbartel");
  var logo = document.getElementById("brand-img");
  var alogo = document.getElementById("alogo");
  var brandimg = document.getElementById("logo-img");
  var navtoggler = document.querySelector(".navbar-toggler")
  var navhide = document.getElementById("redes-sociais-hide");
  document.getElementById("myBar").style.width = scrolled + "%";

  nav.classList.remove("eni-bg-menu");
  nav.classList.add("eni-bg-menu-nostyle");

  if(scrolled >= 7){
      logo.style.width = 50 + "%";
      logo.style.display = "none";
      logo.style.marginLeft = 0 + "%";
      alogo.style.width = "initial";
      alogo.style.display = "initial";
      nav.classList.add("eni-bg-menu");
      nav.classList.remove("eni-bg-menu-nostyle");
      navbar.style.visibility = "visible";
      navbartel.style.visibility = "visible"
      brandimg.style.display = "block";
      brandimg.style.width = 50 + "%";
      brandimg.style.marginLeft = 5 + "px";
      brandimg.style.marginRight = 20 + "px";
      navtoggler.style.visibility = "visible"
      navhide.classList.remove("d-none");
  }else{
      nav.classList.remove("eni-bg-menu");
      nav.classList.add("eni-bg-menu-nostyle");
      logo.style.display = "block";
      alogo.style.display = "none";
      alogo.style.width = 100 + "%";
      alogo.style.textAlign = "center";
      logo.style.marginTop = 4 + "px";
      logo.style.marginLeft = 40 + "%";
      logo.style.width = 21 - scrolled + "%";
      logo.style.filter = `opacity(0.0)`
      logo.style.transitionDuration = "1s";
      logo.style.transitionProperty = "ease";
      brandimg.style.display = "none";
      navbar.style.visibility = "hidden";
      navtoggler.style.visibility = "hidden"
      navbartel.style.visibility = "hidden"
      navhide.classList.add("d-none");
  }
}