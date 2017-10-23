var gulp = require('gulp');
var concat = require('gulp-concat');
var path = require('path');
var del = require('del');
var runSequence = require('run-sequence');
var kss = require('kss');
var rename = require('gulp-rename');
var browserSync = require('browser-sync').create();

var localUrl = require('./gulp-local-url.js');

// Otions ––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––
var options = {};

// The root paths are used to construct all the other paths in this
// configuration. The "project" root path is where this gulpfile.js is located.
options.rootPath = {
  // project     : __dirname + '/',
  components: __dirname + '/components/',
  styleGuide: __dirname + '/styleguide/'
};

options.styleGuide = {
  source: [options.rootPath.components],
  builder: 'kss-custom-builder',
  namespace: 'umami',
  destination: options.rootPath.styleGuide,
  mask: /\.css/,
  // This block is the source of {{ styles|raw }} in index.twig
  css: ['assets/styles.css'],
  // This block is the source of {{ scripts|raw }} in index.twig.
  // TODO It should contain code which automatically lists all js files
  // used by styleguide elements insteas of manually adding them one by one.
  js: ['assets/js/menu-main.js'],
  homepage: 'homepage.md',
  title: 'Umami Styleguide'
};

// Set the URL used to access the Drupal website under development. This will
// allow Browser Sync to serve the website and update CSS changes on the fly.
options.drupalURL = localUrl.localUrl();
// options.drupalURL = 'http://umdrupal.loc';

// Gulp Tasks ------------------------------------------------------------------
gulp.task('clean', function() {
  return del(['styleguide']);
});

gulp.task('styles', function() {
  return gulp.src(options.rootPath.components + '**/*.css')
    .pipe(concat('styles.css'))
    .pipe(gulp.dest(options.rootPath.styleGuide + 'assets'))
    .pipe(browserSync.reload({
      stream: true
    }));
});

gulp.task('styleguide', ['clean', 'styles'], function() {
  return kss(options.styleGuide);
});

gulp.task('images', function() {
  gulp.src(options.rootPath.components + '**/assets/*{.png,.jpg,.svg}')
    .pipe(rename(function (path) {
      path.dirname = '';
      return path;
    }))
    .pipe(gulp.dest(options.rootPath.styleGuide + 'assets/assets'));
});

gulp.task('javascript', function() {
  gulp.src(options.rootPath.components + '**/*.js')
    .pipe(rename(function (path) {
      path.dirname = '';
      return path;
    }))
    .pipe(gulp.dest(options.rootPath.styleGuide + 'assets/js'));
});

gulp.task('serve', function() {
  if (!options.drupalURL) {
    return Promise.resolve();
  }
  return browserSync.init({
    proxy: options.drupalURL,
    noOpen: false
  });
});

gulp.task('default', function() {
  runSequence(['styleguide'], 'images', 'javascript');
});

gulp.task('watch', ['serve'], function() {
  gulp.watch(options.rootPath.components + '**/*.css', ['default']);
  gulp.watch(options.rootPath.components + '**/*.twig', ['default']);
  gulp.watch(options.rootPath.components + '**/*.json', ['default']);
  gulp.watch(options.rootPath.components + '**/*.js', ['default']);
});
