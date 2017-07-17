
let countDownDate = new Date("July 31, 2017 19:00:00").getTime();

let x = setInterval(function() {

  let now = new Date().getTime()

 
  let distance = countDownDate - now

 
  let days = Math.floor(distance / (1000 * 60 * 60 * 24))
  let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
  let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))
  let seconds = Math.floor((distance % (1000 * 60)) / 1000)
if(days<10){
	days="0"+days
}
if(hours<10){
	hours="0"+hours
}
if(minutes<10){
	minutes="0"+minutes
}
if(seconds<10){
	seconds="0"+seconds
}

$('.countdown').html(days + ":" + hours + ":"
  + minutes + ":" + seconds)
/*if(seconds<10){
	$('.countdown').html(days + ":" + hours + ":"
  + minutes + ":" + "0"+seconds)
}
else{
	$('.countdown').html(days + ":" + hours + ":"
  + minutes + ":" + seconds)
}*/

  
  
}, 1000)
