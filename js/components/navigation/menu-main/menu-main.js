/**
 * @file
 * This file is used to add any javascrip that is needed for the main menu.
 */

(function ($, Drupal) {
  'use strict';
  Drupal.behaviors.menutoggle = {
    attach: function (context, settings) {
      var toggler = $('[data-drupal-selector="menu-main__toggle"]').once('menutoggle');
      var menu = $('[data-drupal-selector="menu-main"]');

      toggler.click(function toggle () {
        toggler.toggleClass('menu-main__toggle--active');
        menu.toggleClass('menu-main--active');
        return false;
      });
    }
  };
})(jQuery, Drupal);
