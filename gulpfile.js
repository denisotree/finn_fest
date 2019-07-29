'use strict';

const
    gulp = require('gulp'),
    imagemin = require('gulp-imagemin'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCSS = require('gulp-clean-css'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    streamqueue = require('streamqueue'),
    svgstore = require('gulp-svgstore'),
    svgmin = require('gulp-svgmin');


const folder = {
    src: './src/',
    dist: './dist/wp-content/themes/finn_fest/'
};

gulp.task('fonts', function(){
    return gulp.src([
        folder.src + 'fonts/**/*'
    ])
        .pipe(gulp.dest(folder.dist + 'fonts/'));
});

gulp.task('imageMin', function() {
    return gulp.src('images/**/*.{jpg,png,gif,jpeg,svg}', {cwd: folder.src})
        .pipe(imagemin())
        .pipe(gulp.dest(folder.dist + '/images'));
});

gulp.task('svgstore', function () {
    return gulp
        .src(folder.src + '/icons/*.svg')
        .pipe(svgmin())
        // .pipe(svgstore())
        .pipe(gulp.dest(folder.dist + '/images'));
});

gulp.task('styles', function () {

    return streamqueue({ objectMode: true },
        gulp.src([
            folder.src + 'libs/bootstrap/bootstrap.min.css',
            folder.src + 'libs/slick/slick.scss',
            folder.src + 'libs/magnific-popup/magnific-popup.css',
            folder.src + 'libs/lightbox/lightbox.min.css',
            folder.src + 'libs/owl/owl.carousel.min.css',
            folder.src + 'libs/owl/owl.theme.default.min.css',
            folder.src + 'libs/likely/likely.css',
            folder.src + 'styles/desktop.scss'
        ]).pipe(sass())
    )
        .pipe(autoprefixer('last 5 version'))
        .pipe(concat('styles.min.css'))
        .pipe(cleanCSS({
            keepSpecialComments: 0
        }))
        .pipe(gulp.dest(folder.dist + 'css'));
});

gulp.task('js', function () {
    return streamqueue({ objectMode: true },
        gulp.src([
            folder.src + 'libs/jquery/jquery.min.js',
            folder.src + 'libs/bootstrap/bootstrap.min.js',
            folder.src + 'libs/slick/slick.min.js',
            folder.src + 'libs/magnific-popup/magnific-popup.min.js',
            folder.src + 'libs/lightbox/lightbox.min.js',
            folder.src + 'libs/owl/owl.carousel.min.js',
            folder.src + 'libs/responsiveslides/responsiveslides.min.js',
            folder.src + 'libs/likely/likely.js',
            folder.src + 'scripts/*.js'
        ])
    )
        .pipe(concat('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(folder.dist + 'js'));
});

gulp.task('watch', function () {
    gulp.watch(folder.src + 'images/**/*', gulp.series('imageMin'));
    gulp.watch(folder.src + 'icons/**/*', gulp.series('svgstore'));
    gulp.watch(folder.src + 'fonts/**/*', gulp.series('fonts'));
    gulp.watch(folder.src + 'styles/**/*', gulp.series('styles'));
    gulp.watch(folder.src + 'scripts/**/*', gulp.series('js'));
    gulp.watch(folder.src + 'libs/**/*', gulp.series('js', 'styles'));
});

gulp.task('build', gulp.series('fonts', 'styles', 'js', 'imageMin', 'svgstore'));

gulp.task('default', gulp.parallel('build', 'watch'));
