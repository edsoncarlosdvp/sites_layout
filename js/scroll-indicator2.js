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

    logo.style.width = 30 + "%";
    logo.style.display = "none";
    logo.style.marginLeft = 0 + "%";
    alogo.style.width = "initial";
    alogo.style.display = "initial";
    nav.classList.add("eni-bg-menu");
    nav.classList.remove("eni-bg-menu-nostyle");
    navbar.style.visibility = "visible";
    navbartel.style.visibility = "visible"
    brandimg.style.display = "block";
    brandimg.style.width = 30 + "%";
    brandimg.style.marginLeft = 5 + "px";
    brandimg.style.marginRight = 20 + "px";
    navtoggler.style.visibility = "visible"
    navhide.classList.remove("d-none");
  
}