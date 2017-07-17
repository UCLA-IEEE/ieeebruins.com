function addLeadingZero(num) {
  if (num < 10)
    return '0' + num
  return num
}

let countDownDate = new Date("July 31, 2017 19:00:00").getTime();

let x = setInterval(function() {

  let now = new Date().getTime()
  let distance = countDownDate - now

  let days = addLeadingZero(Math.floor(distance / (1000 * 60 * 60 * 24)))
  let hours = addLeadingZero(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)))
  let minutes = addLeadingZero(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)))
  let seconds = addLeadingZero(Math.floor((distance % (1000 * 60)) / 1000))

  $('.countdown').html(days + ':' + hours + ':' + minutes + ':' + seconds)

}, 1000)
