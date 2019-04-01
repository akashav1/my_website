$(document).ready(function(){
  var count = 50;
  var count1 = 50;
  var counter = setInterval(function(){
    if(count < 101){
      $('.count').text(count + "%");
      $('.loader').css('width', count + "%");
      $('.loader1').css('width', count1 + "%");
      count++;
      count1--;
    }
    else{
      clearInterval(counter)
    }
  },30)
});
