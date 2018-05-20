$( document ).ready( function() {

    // 'use-strict';

    var $mainBurger   = $('.b-nav__menu-block').find('.fa-bars');
    var $categoryMenu = $('.b-nav__list-child');


    $mainBurger.on('click', function() {

        $('.b-nav__ul').toggleClass('active_menu');

    } );

    $('.b-nav__li_category').on( 'click', function() {

        $( this ).find('a > i').toggleClass('icon_active');
        $('.b-nav__ul-child').toggleClass('active');

    } );

    $categoryMenu.hover(
        function() {
            $( this ).find('.b-menu').addClass('b-menu_active');
            // $('.b-nav__ul-child').addClass('active');
        },
        function() {
            // $('.b-nav__ul-child').hide();
            $( this ).find('.b-menu').removeClass('b-menu_active');
        }
    );

} );
