'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var gulp = require('gulp');
var autoprefixer = require('autoprefixer');
var mqpacker = require('css-mqpacker');
var csswring = require('csswring');
var sourcemaps = require('gulp-sourcemaps');
 
 
gulp.task('sass', function () {
  gulp.src('./css/**/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./css'));
});
 
gulp.task('sass:watch', function () {
  gulp.watch('./css/*.scss', ['sass']);
});

gulp.task('css', function () {
    var processors = [
        autoprefixer({browsers: ['last 5 version']}),
        mqpacker,
        csswring
    ];
    return gulp.src('../output/*.css')
        .pipe(postcss(processors))
        .pipe(gulp.dest('./dest'));
});

