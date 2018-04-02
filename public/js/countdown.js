function addLeadingZero(num) {
  if (num < 10) return '0' + num
  return num
}

let countdownDate = new Date('August 31, 2017 23:59:00').getTime()

setInterval(function() {
  let now = new Date().getTime()
  let distance = countdownDate - now

  let days = addLeadingZero(Math.floor(distance / (1000 * 60 * 60 * 24)))
  let hours = addLeadingZero(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)))
  let minutes = addLeadingZero(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)))
  let seconds = addLeadingZero(Math.floor((distance % (1000 * 60)) / 1000))

  $('.countdown').html(days + ':' + hours + ':' + minutes + ':' + seconds)
}, 1000)
