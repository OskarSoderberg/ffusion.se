// All script in this file is for fading nav bar on scroll.

window.addEventListener("scroll", function(event) {
    var top = this.scrollY;
    navHeight = document.getElementById("mainNav").offsetHeight;
    if ($("#navbarNav").is(":visible") && $("#togg").is(":visible"))
      mainNav.style.backgroundColor = "rgba(26, 43, 71, "+ 1 / 1.05 + ")";
    else if(top < navHeight) {
      mainNav.style.backgroundColor = "rgba(26, 43, 71, "+ top / (navHeight * 1.05) + ")";
    }
    else if(top >= document.getElementById("mainNav").offsetHeight) {
      mainNav.style.backgroundColor = "rgba(26, 43, 71, "+ 1 / 1.05 + ")";
    }
}, false);

window.onload = function() {
  document.getElementById("togg").addEventListener("click", function(event){
    var navbottom = window.scrollY + document.getElementById("mainNav").offsetHeight;
    if(!$("#navbarNav").is(":visible")) {
      $("#mainNav").css('background-color', 'rgba(26, 43, 71, 0.95)');
    }
    else {
      var top = window.scrollY;
      navHeight = document.getElementById("mainNav").offsetHeight;
      $("#mainNav").css('background-color', 'rgba(26, 43, 71, ' + top / (navHeight * 1.05) + ')');
    }
  });
  document.getElementById("arrow").addEventListener("click", function(event){
    console.log(document.getElementById("scrollhere").offsetTop);
    console.log(document.getElementById("mainNav").offsetHeight);
    window.scrollTo(0, document.getElementById("scrollhere").offsetTop - document.getElementById("mainNav").offsetHeight);
  });
}
