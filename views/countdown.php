<!DOCTYPE HTML>

<body>

 <div class="topleft">
    <p>UCLA IEEE</p>
  </div>
 <div class="middle">
    <h1>COMING SOON</h1>


</body>




<p id="demo"></p>

<script>
var countDownDate = new Date("July 31, 2017 19:00:00").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();

 
  var distance = countDownDate - now;

 
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  
}, 1000);
</script>
