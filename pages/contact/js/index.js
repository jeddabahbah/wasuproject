$(function() {
  $('.pagecontainer').fullpage({
    anchors: ['page1', 'page2', 'page3', 'page4', 'page5'],
    navigation: true,
    navigationPosition: 'right',
    slidesNavigation: true,
    slidesNavPosition: 'bottom',
    controlArrows: false,
    scrollOverflow: true,
    afterLoad: function(anchorLink, index) {
      var loadedSection = $(this);

      if (index == 1) {

        $('#header').css('background', 'none');
      }
      if (index != 1) {
        $('#header').css('background-color', '#000');
      }
      if (index == 2) {
        $('#header').css('background', 'none');
      }

    }
  });
});

$('#menu-btn').click(function() {
  $('#menu-container').css('transform', 'translateX(0)');
});

$('#close-btn').click(function() {
  $('#menu-container').css('transform', 'translateX(-300px)');
});

$(document).on('click', '#moveTohome', function() {
  alert('moving');
  $.fn.fullpage.moveTo(1);
});

$(document).on('click', '#moveToabout', function() {
  $.fn.fullpage.moveTo(2);
});

$(document).on('click', '#moveToproducts', function() {
  $.fn.fullpage.moveTo(3);
});

$(document).on('click', '#moveTocontact', function() {
  $.fn.fullpage.moveTo(4);
});

$(document).on('click', '#moveTofindus', function() {
  $.fn.fullpage.moveTo(5);
});