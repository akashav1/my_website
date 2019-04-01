var isMobile = {
  Android: function() {
    return navigator.userAgent.match(/Android/i);
  },
  BlackBerry: function() {
    return navigator.userAgent.match(/BlackBerry/i);
  },
  iOS: function() {
    return navigator.userAgent.match(/iPhone|iPad|iPod/i);
  },
  Opera: function() {
    return navigator.userAgent.match(/Opera Mini/i);
  },
  Windows: function() {
    return navigator.userAgent.match(/IEMobile/i);
  },

}
if( isMobile.iOS() ) alert('You are on iOS please visit from desktop for proper viewing of the website');
else if( isMobile.Android() ) alert('You are on Android please visit from desktop for proper viewing of of the website');
else if( isMobile.BlackBerry() ) alert('You are on BlackBerry please visit from desktop for proper viewing of of the website');


/*$(function(){
var x = navigator.userAgent;
if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
$('#ios-notice').removeClass('hidden');
$('.parallax-container').height( $(window).height() * 0.5 | 0 );
window.location.replace("./mob.html");
} else {
$(window).resize(function(){
var parallaxHeight = Math.max($(window).height() * 0.7, 200) | 0;
$('.parallax-container').height(parallaxHeight);
}).trigger('resize');
}
});*/






window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if(document.body.scrollTop > 10 || document.documentElement.scrollTop > 10){
    document.getElementById("preloader").style.display = "none";
  }
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "30px";
    document.getElementById("det").style.fontSize = "15px";
    document.getElementById("navbar").style.textAlign = "left";
    document.getElementById("navbar-right").style.display = "block";
    document.getElementById("navbar").style.height = "auto";
    document.getElementById("headers_logo").classList.remove("m12");
    document.getElementById("headers_logo").classList.add("m6");
    document.getElementById("resume").classList.add("hid");
    document.getElementById("navbar").style.opacity = "0.5";
  } else {
    document.getElementById("navbar").style.padding = "250px";
    document.getElementById("logo").style.fontSize = "100px";
    document.getElementById("det").style.fontSize = "30px";
    document.getElementById("navbar").style.textAlign = "center";
    document.getElementById("navbar-right").style.display = "none";
    document.getElementById("navbar").style.height = "100%";
    document.getElementById("headers_logo").classList.remove("m6");
    document.getElementById("headers_logo").classList.add("m12");
    document.getElementById("resume").classList.remove("hid");
    document.getElementById("navbar").style.opacity = "1";
  }
}

function expand_button(){
  document.getElementsByClassName("pop-out-button")[0].style.right = 0;
  document.getElementsByClassName("pop-out-button")[0].style.transition = "0.5s";
}
function release_button(){
  document.getElementsByClassName("pop-out-button")[0].style.right = "-135px";
  document.getElementsByClassName("pop-out-button")[0].style.transition = "0.5s";
}


function switching_style(){
  var x = document.getElementsByClassName("sheetss");
  for(i=0;i<x.length;i++){
    if(x[i].disabled == true){
      console.log(x[i]);
      console.log("1")
      x[i].disabled = false;
    }else{
      console.log(x[i]);
      console.log("2");
      x[i].disabled = true;
    }
  }
}
