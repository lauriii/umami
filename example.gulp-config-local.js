// This is a config file for your local Gulp settings which
// should not been committed to the repo.
// 1. Copy example.gulp-config-local.js to gulp-config-local.js.
// 2. Set your local values.

module.exports = {
  localHost: function() {
    // Set the URL of your local Drupal install. It is used by BrowserSync.
    return 'http://umdrupal.loc';
  }
};
