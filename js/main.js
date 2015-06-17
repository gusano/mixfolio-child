var $ = jQuery;

$(document).ready(function() {
  var path = window.location.pathname, segments, page;

  if (path === '/' || path === '/angela/') {
    $('ul.categories li:eq(0)').addClass('active');
  }

  segments = path.split('/');
  page = segments[segments.length - 2];

  if (page === 'portfolio') {
    // Launch lightbox automagically
    setTimeout(function() {
      var firstImg = $('img[alt="page01"]');

      firstImg.click();
      firstImg.removeAttr('width').removeAttr('height');
      firstImg.css('width', '123px').css('height', '178px');
    }, 100);
  }
});
