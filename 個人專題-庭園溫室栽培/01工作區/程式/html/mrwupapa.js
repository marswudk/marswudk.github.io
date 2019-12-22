// bootstrap
// modal
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})




var number_li = $('.nav li').length
n = 1

$(window).on('mousewheel', function (e) {
  // console.log(e.deltaY);
  if (e.deltaY == -1) {
    if (n < number_li) {
      n++
      $(`.page:nth-child(${n})`).addClass('remove')
      $('.nav li').removeClass('active')
      $(`.nav li:nth-child(${n})`).addClass('active')

    }
  } else {
    if (n > 1) {
      n--
      $(`.page:nth-child(${n + 1})`).removeClass('remove')
      $('.nav li').removeClass('active')
      $(`.nav li:nth-child(${n})`).addClass('active')

    }
  }
  console.log("n:",n,"number_li",number_li);


})


$('.nav li').click(function () {

  $('.nav li').removeClass('active')
  $(this).addClass('active')
  var index = $(".nav li").index(this);
  $(`.page:nth-child(${index + 2})`).removeClass('remove')
  $(`.page:nth-child(${index + 1})`).addClass('remove')

  console.log(index);
})