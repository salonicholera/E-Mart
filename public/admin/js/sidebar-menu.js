(function($) {

  $(document).on('click', '#sidebar-toggle', function(e) {
    $('.page-sidebar, .page-main-header').toggleClass('open');
  })

  // Menu Dropdown Script
  $($('.sidebar-menu')).on('click', 'li a', function(e) {
    
    var $this = $(this);
    var checkElement = $this.next();

    if (checkElement.is('.sidebar-submenu') && checkElement.is(':visible')) {
      
      checkElement.slideUp(300, function () {
        checkElement.removeClass('menu-open');
      });
      checkElement.parent("li").removeClass("active");

    } else if ((checkElement.is('.sidebar-submenu')) && (!checkElement.is(':visible'))) {

      var parent = $this.parents('ul').first();
      var ul = parent.find('ul:visible').slideUp(300);
      var parent_li = $this.parent("li");

      ul.removeClass('menu-open');
      checkElement.slideDown(300, function () {
        checkElement.addClass('menu-open');
        parent.find('li.active').removeClass('active');
        parent_li.addClass('active');
      });

    }

    if (checkElement.is('.sidebar-submenu')) {
      e.preventDefault();
    }

  });

  // Responsive sidebar
  if($(window).width() <= 991) {
    $('#sidebar-toggle, .page-sidebar').addClass("open");
  }

  $(window).resize(function() {
    if($(window).width() <= 991){
      $('#sidebar-toggle, .page-sidebar').addClass("open");
    } else {
      $('#sidebar-toggle, .page-sidebar').removeClass("open");
    }
  });

  // Add active when dropdown links are active
  var current = window.location.pathname
  $(".sidebar-menu > li a").filter(function() {
    var link = $(this).attr("href");
    if(link){
      if(current.indexOf(link) != -1) {
        $(this).parents('li').addClass('active');
        $(this).addClass('active');
      }
    }
  });

})(jQuery);