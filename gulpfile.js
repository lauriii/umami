var gulp = require('gulp');
var concat = require('gulp-concat');
var path = require('path');
var del = require('del');
var runSequence = require('run-sequence');
var kss = require('kss');
var rename = require('gulp-rename');

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
  css: ['assets/styles.css'],
  // TODO This block is the source of {{ scripts|raw }} in index.twig.
  // It should contain code which lits all js files used by styleguide elements.
  js: [],
  homepage: 'homepage.md',
  title: 'Umami Styleguide'
};

gulp.task('clean', function() {
  return del(['styleguide']);
});
gulp.task('styles', function() {
  return gulp.src(options.rootPath.components + '**/*.css')
    .pipe(concat('styles.css'))
    .pipe(gulp.dest(options.rootPath.styleGuide + 'assets'));
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

gulp.task('default', function() {
  runSequence(['clean', 'styleguide'], 'images', 'javascript');
});
