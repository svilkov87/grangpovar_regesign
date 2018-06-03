$( document ).ready( function() {

    // 'use-strict';

    var $mainBurger   = $('.b-nav__menu-block').find('.fa-bars');
    var $categoryMenu = $('.b-nav__list-child');
    var $search       = $('.b-nav__li').find('.fa-search');
    var $close_search = $('.b-search').find('.fa-times');

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

    $search.on('click', function() {

        $('.b-search').addClass('b-search_active');

    } );

    $close_search.on( 'click', function() {

        $('.b-search').removeClass('b-search_active');

    } );

} );
