/* Bear Hagen - 2016 */
(function() {
  // Select input and textarea on click
  $('input, textarea').click(function(event) {
    this.select();
  });

  // Smooth scrolling
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 25
        }, 500);
        return false;
      }
    }
  });
})();