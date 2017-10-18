/**
 * @file
 * This file is used to add any javascrip that is needed for the main menu.
 */

(function ($, Drupal) {
  'use strict';
  Drupal.behaviors.menutoggle = {
    attach: function (context, settings) {
      var toggler = $('.menu-main__toggle');
      var menu = $('.menu-main');

      toggler.click(function toggle () {
        toggler.toggleClass('is-active');
        menu.toggleClass('is-active');
        return false;
      });
    }
  };
})(jQuery, Drupal);
