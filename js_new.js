$(document).ready(function(){
  var count = 0;
  var counter = setInterval(function(){
    if(count < 101){
      $('.preloader').css('left', count + "%");
      count++;
    }
    else{
      clearInterval(counter)
    }
  },20)
});
console.log("hello");
