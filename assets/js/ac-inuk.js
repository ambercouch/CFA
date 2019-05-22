ACINUK = {
  common: {
    init: function () {
      //console.log('common test');

        try {
            Typekit.load();
        } catch (e) {
        }

        var palmWidth = 480;
        var mq = "(min-width: " + palmWidth + "px)"
        // media query event handler
        if (matchMedia) {
            var mq = window.matchMedia(mq);
            mq.addListener(WidthChange);
            WidthChange(mq);
        }


// media query change
        function WidthChange(mq) {
            var $fithtService = jQuery('#menu-services .wp-post-image:eq(4)');
            if (mq.matches) {
                $fithtService.removeClass('palm-last');
                console.log('no palm');
                console.log($fithtService);
            } else {
                //palm view
                $fithtService.addClass('palm-last');
                console.log('palm');
                console.log($fithtService);
            }

        }

        $(document).on('change', '.form--referral__select--referral-reason', function () {
           console.log('changed');
           console.log($(this).val());
            if($(this).val() === 'Implantology'){
                $('[data-control=referral-reason]').show('slow');
                console.log('boom');
            }else {
                console.log('no boom');
                $('[data-control=referral-reason]').hide('slow');
            }
        });


        //hide all inputs except the first one
        $('.form--referral__a--file').each(function () {
            $('p.hide', this).not(':eq(0)').hide();
        });

        //functionality for add-file link
        $('.form--referral__a--file').on('click', 'a.add_file', function(e){
            //show by click the first one from hidden inputs
            $(this).closest('.form--referral__a--file').find('p.hide:not(:visible):first' ).show('slow');

            e.preventDefault();
        });

        //functionality for del-file link
        $('a.del_file').on('click', function(e){
            //var init
            var input_parent = $(this).parent();
            var input_wrap = input_parent.find('span');

            //reset field value
            input_wrap.html(input_wrap.html());

            //hide by click
            input_parent.hide('slow');

            e.preventDefault();
        });
        

      if (jQuery('#nav-main').data('responsive-clone')) {
        $clone_nav = jQuery('#nav-main').clone();
        jQuery('#nav-main').clone();
        $clone_nav.attr('id', 'nav-responsive');

        $clone_nav.prependTo('body');

        els = jQuery('#nav-responsive *').each(function () {
          if (jQuery(this).attr('id')) {
            id = jQuery(this).attr('id');
            jQuery(this).attr('id', id + '-clone');
          }
        });
        var $menu = jQuery('#nav-responsive .menu--site__container'),
                $menulink = jQuery('#site_menu_toggle-clone'),
                $container = jQuery('#nav-main'),
                container_height = $container.height();
      } else {
        var $menu = jQuery('#nav-main .menu--site__container'),
                $menulink = jQuery('#site_menu_toggle'),
                $container = jQuery('#nav-main'),
                container_height = $container.height();
      }

      jQuery('body').addClass('js');



      if ($container.css('position') == 'absolute') {
        jQuery('body').css('margin-top', container_height);
      }

      $menulink.click(function () {
        $menulink.toggleClass('active');
        $menu.toggleClass('active');
        var height = jQuery('.menu-main-container.active').height();
        console.log(height);
        return false;
      });

      jQuery('p').each(function (i) {
        if (jQuery(this).text() == '') {
          jQuery(this).addClass('is-empty');
        }
      });

      //jQuery('.widget_nav_menu .widget__header').append('<a class="menu--responsive-toggle__toggle" href="#menu">Menu</a>');

      //svg hover effect for menu items;
      jQuery('.menu__icon').each(function (i, e) {
        var id = jQuery('.icon__use--hover-on', this).attr('xlink:href');
        if (jQuery(id).length === 1) {
          var currentClass = jQuery(this).attr('class');
          var newClass = ' icon--hover';

          jQuery(this).attr('class', currentClass + newClass);
        }
      });

    }
  },
  page: {
    init: function () {

      console.log('page');
      var ac_window = jQuery(window);
      var $menu = jQuery('.menu--responsive');



      $menu.each(function (i, el) {
        console.log('element');
        console.log(jQuery(el));

        jQuery('.title--widget', this).after('<a class="menu--responsive-toggle__toggle">MENU</a>');
        //var toggle = jQuery(this)
        jQuery(this).on('click', '.menu--responsive-toggle__toggle', function () {
          jQuery(this).toggleClass('active');
          jQuery('.menu', el).toggleClass('active');
          jQuery('.widget__header', el).toggleClass('active');
        });
      });


      console.log(ac_window.width());

      var page_title = jQuery('.title--article').text();
      console.log(page_title);

      jQuery('[name=page-name]').val(page_title);
        ACINUK.gaq.video();
        ACINUK.gaq.tel();
        ACINUK.gaq.contact();
    },
    testimonials: function () {
      console.log('pages__testimonials');
      var q = jQuery('.comments ol li');
      var thisYear;
      var nextYear;
      var thisYearClass;
      var nextID;
      var splitList = '<ol class="testimonials__year testimonials__this-year" >';

      q.each(function (i, el) {

        if (i == 0) {
          thisYear = jQuery('[data-js_year]', this).data('js_year');
          currentYearClass = 'y-' + thisYear;
        }

        splitList = splitList + '<li class="testimonials__testimonial">' + jQuery(el).html() + '</li>';

        if (i < q.length - 1)
        {
          nextID = q[i + 1].id
          thisYear = jQuery('[data-js_year]', this).data('js_year');
          thisYearClass = 'y-' + thisYear;
          nextYear = jQuery('#' + nextID + ' [data-js_year]').data('js_year');
          nextYearClass = 'y-' + nextYear;

          if (thisYear != nextYear)
          {
            splitList = splitList + '</ol><a class="fadeNext closed testimonials__year-toggle" href=""><span class="show">Show </span><span class="hide">Hide </span>' + nextYear + ' Testimonials </a><ol class="testimonials__year ' + nextYearClass + ' " >'
          }
        }



      });

      splitList = splitList + '</ol>';

      jQuery('.testimonials').html(splitList);

      jQuery('.thisyear').addClass(currentYearClass);


      jQuery(".fadeNext").click(function (e) {
        e.preventDefault();
        jQuery(this).next().toggleClass('open');
        if (jQuery(this).next().hasClass('open')) {
          jQuery(this).addClass('open');
          jQuery(this).removeClass('closed');

        }
        else {
          jQuery(this).addClass('closed');
          jQuery(this).removeClass('open');
        }
        return false;
      });

    }, emergency_dentist_cardiff: function () {


      var mins = new Date().getMinutes(),
              hrs = new Date().getHours(),
              day = new Date().getDay(),
              open = false;

      open = (day > 0 && day < 6) && ((hrs == 8 && mins > 14) || (hrs > 8 && hrs < 17)) ? true : false;

      jQuery('#opening-times tr').each(function (i) {
        count = i + 1;
        jQuery(this).addClass('day--' + count);
      });



      if (open == true) {
        jQuery('#opening-times .day--' + day).addClass('open-highlight');
        jQuery('.open-highlight').attr('title', 'We are currently open.');
      }
      console.log('emergency_dentist_cardiff');
    }

  },
  post: {
    init: function () {
      console.log('all posts');
    }
  },
    gaq :{
        video : function(){

            jQuery(document).on('open','.remodal', function(e) {
                console.log('clicked');
                console.log(e);

                var title = jQuery(e.target.innerHTML).find('.title').text();
                var current_url = e.currentTarget.baseURI;
                console.log(current_url);
                console.log(title);
                if (typeof __gaTracker != "undefined") {
                    console.log('__gaTracker');
                    __gaTracker('send', 'event', 'videos', 'open ' + current_url, title);
                }else{
                    console.log('__gaTracker undefined');
                }
            });

        },//gaq.video
        tel : function(){

            jQuery(document).on('click','[href^="tel:"]', function(e) {
                console.log('tel clicked');
                console.log(e);
                var current_url = e.currentTarget.baseURI;
                var tel = $(this).attr('href');
                var parent = $(this).parent().attr('class') || $(this).parent().parent().attr('class');
                console.log(current_url);

                if (typeof __gaTracker != "undefined") {
                    console.log('__gaTracker');
                    __gaTracker('send', 'event', tel, 'clicked ' + parent, current_url);
                }else{
                    console.log('__gaTracker undefined');
                    console.log(tel);
                    console.log(parent);


                }
            });

        },//gaq.tel
        contact : function(){

            jQuery(document).on('mailsent.wpcf7',  function(e) {
                var current_url = e.currentTarget.baseURI;
               
                if (typeof __gaTracker != "undefined") {
                    console.log('__gaTracker');
                    __gaTracker('send', 'event', 'contact', 'submit' , current_url);
                }else{
                    console.log('__gaTracker undefined');
                    console.log(current_url);
                }
            });

        }//gaq.tel
    }
};
UTIL = {
  exec: function (template, handle) {
    var ns = ACINUK,
            handle = (handle === undefined) ? "init" : handle;

    if (template !== '' && ns[template] && typeof ns[template][handle] === 'function') {
      ns[template][handle]();
    }
  },
  init: function () {
    var body = document.body,
            template = body.getAttribute('data-post-type'),
            handle = body.getAttribute('data-post-slug');

    UTIL.exec('common');
    UTIL.exec(template);
    UTIL.exec(template, handle);
  }
};
jQuery(window).load(UTIL.init);





