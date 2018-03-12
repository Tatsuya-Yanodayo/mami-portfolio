<!-- トップページローディング画面-->
jQuery(function () {

  imagesProgress();

  function imagesProgress() {

    var imgLoaded = 0;

    var $progress = jQuery('#progress'),
      $progressBar = $progress.find('.progress-bar'),
      $progressText = $progress.find('.progress-text'),

      imgLoad = imagesLoaded('#maximage'),
      imgTotal = imgLoad.images.length,

      current = 0,

      progressTimer = setInterval(updateProgress, 1000 / 60);

    imgLoad.on('progress', function () {
      imgLoaded++;
    });

    function updateProgress() {

      var target = (imgLoaded / (imgTotal)) * 100;

      current += (target - current) * 0.15;

      $progressBar.css({
        width: current + '%'
      });
      $progressText.text(Math.floor(current) + '%');

      if (current >= 100) {
        clearInterval(progressTimer);
        $progress.addClass('progress-complete');
        $progressBar.add($progressText)
          .delay(300)
          .animate({
            opacity: 0
          }, 250, function () {
            jQuery.when(
              $progress.animate({
                opacity: 0
              }, 400)
            ).done(function () {
              $progress.hide();
            });
          });
      }

      if (current > 99.9) {
        current = 100;
      }
    }
  }

});
