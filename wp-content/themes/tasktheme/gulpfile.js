var gulp = require('gulp'),
    sass = require('gulp-sass'),
    cleanCSS = require('gulp-clean-css'),
    rename = require('gulp-rename'),
    concat = require ('gulp-concat'),
    notify = require('gulp-notify');

    var path = {

    dev: { 
        sass: './dev/scss/main.scss',
        slider: './node_modules/flexslider/jquery.flexslider-min.js',
        node_jquery: './node_modules/jquery/dist/jquery.min.js',
        carousel_style: './node_modules/flexslider/flexslider.css',
        js: './assets/js/dev-js/*.js'
    },
    watch: {
        html: './*.php',
        style: './dev/scss/*.scss',
        css: "./"
    },
    build: {
        devcss: './assets/css/devstyles/',
        js: './assets/js/',
        concatcss: './'
    }
};

gulp.task('build-styles', function(){
	gulp.src(path.dev.sass)
	.pipe(sass())
    .pipe(gulp.dest(path.build.devcss))
    return gulp.src([path.dev.carousel_style, path.build.devcss + "*.css"])
    .pipe(concat('main.css'))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(rename({
    suffix: ".min"}))
    .pipe(gulp.dest(path.build.concatcss))
    .pipe(notify("Styles built"));
});// sealed компиляция сборка и минификация всех стилей

gulp.task('build-js', function(){
    return gulp.src([path.dev.node_jquery, path.dev.slider, path.dev.js])
    .pipe(concat('main.js'))
    .pipe(gulp.dest(path.build.js))
    .pipe(notify("js built"));
});


gulp.task('watch', function(){
    gulp.watch(path.watch.style, ['build-styles']);
    gulp.watch(path.dev.js, ['build-js']);
});

gulp.task('default', ['build-styles' , 'build-js', 'watch']);