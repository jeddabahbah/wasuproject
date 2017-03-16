//Fade in video
  $(function () {
    var video = document.getElementById("bg-video");
    video.addEventListener('play', function (e) {
      $('#bg-video').delay(300).animate({'opacity': '1'}, 500);
    });
  });
  