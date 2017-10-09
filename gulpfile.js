var gulp = require('gulp');
var concat = require('gulp-concat');
var path = require('path');
var del = require('del');
var runSequence = require('run-sequence');
var kss = require('kss');

var options = {};

options.rootPath = {
    components: __dirname + '/components/',
    styleGuide: __dirname + '/styleguide/'
};

options.styleGuide = {
    source: [options.rootPath.components],
    builder: 'builder/twig',
    namespace: 'umami',
    destination: options.rootPath.styleGuide,
    mask: /\.css/,
    css: ['assets/styles.css'],
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
    gulp.src(['styles/images/**']).pipe(gulp.dest('styleguide/public/images'));
});
gulp.task('javascript', function() {
    gulp.src(['styles/**/*.js']).pipe(gulp.dest('styleguide/public/javascript'));
});

gulp.task('default', function() {
    runSequence(['clean', 'styleguide'], 'images', 'javascript');
});
