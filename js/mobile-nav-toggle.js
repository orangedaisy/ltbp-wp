// ----------
//
// mobile-nav-toggle
//
// script to toggle our mobile navigation
//
// ----------

'use strict';

( function() {

    var button, menu;

    button = document.querySelector('.js-menu-toggle');

    menu = document.querySelector('.js-primary-menu');

    button.addEventListener('click', function () {

        button.classList.toggle('is-toggled');
        menu.classList.toggle('is-toggled');

    });

} )();
