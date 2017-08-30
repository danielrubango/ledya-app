const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass('app.scss')
       .webpack('app.js');
});

// var gulp = require('gulp');
       
// var browserSync = require('browser-sync').create();
// var sass = require('gulp-sass');
// var concat = require('gulp-concat');
// var filter = require('gulp-filter');
// var mainBowerFiles = require('main-bower-files');
// var uglify = require('gulp-uglify');
// var rename = require('gulp-rename');
// var del = require('del');
// var runSequence = require('run-sequence');
// var replace = require('gulp-replace');

// gulp.paths = {
//     dist: 'public',
// };

// var paths = gulp.paths;

// // Static Server + watching scss/html files
// gulp.task('serve', ['sass'], function() {

//     browserSync.init({
//         server: "./public"
//     });

//     gulp.watch('./resources/assets/scss/**/*.scss', ['sass']);
//     gulp.watch('./public/**/*.html').on('change', browserSync.reload);
//     gulp.watch('./resources/assets/js/**/*.js').on('change', browserSync.reload);

// });

// gulp.task('sass', function () {
//     return gulp.src('./resources/assets/scss/style.scss')
//         .pipe(sass())
//         .pipe(gulp.dest(paths.dist+'/css'))
//         .pipe(browserSync.stream());
// });

// gulp.task('sass:watch', function () {
//     gulp.watch('./resources/assets/scss/**/*.scss');
// });

// gulp.task('copy:bower', function () {
//     return gulp.src(mainBowerFiles(['**/*.js', '!**/*.min.js']))
//         .pipe(gulp.dest(paths.dist+'/js/libs'))
//         .pipe(uglify())
//         .pipe(rename({ suffix: '.min' }))
//         .pipe(gulp.dest(paths.dist+'/js/libs'));
// });

// gulp.task('default', ['serve']);