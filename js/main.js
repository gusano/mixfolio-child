var $ = jQuery;

$(document).ready(function() {
  var path = window.location.pathname, segments, page;

  if (path === '/' || path === '/angela/') {
    $('ul.categories li:eq(0)').addClass('active');
  }

  segments = path.split('/');
  page = segments[segments.length - 2];

  switch (page) {
    case 'portfolio':
      // Launch lightbox automagically
      setTimeout(function() {
        var firstImg = $('img[alt="page01"]');
        var lastImg = $('img[alt="page18"]');

        // firstImg.click();
        firstImg.removeAttr('width').removeAttr('height');
        firstImg.css('width', '123px').css('height', '178px');
        lastImg.removeAttr('width').removeAttr('height');
        lastImg.css('width', '123px').css('height', '178px');
      }, 100);
      break;
    case 'reel':
      $('.entry-content').css('text-align', 'center');
      break;
    case 'angela':
      // hide menu pages on main page
      $('ul.categories').css('display', 'none')
      break;
  }
});
