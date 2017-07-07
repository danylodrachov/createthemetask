var gulp = require('gulp'),
    sass = require('gulp-sass'),
    cleanCSS = require('gulp-clean-css'),
    rename = require('gulp-rename'),
    concat = require ('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps'),
    notify = require('gulp-notify');

    var path = {

    src: { 
        main_sass: './assets/src/scss/main.scss',
        js: './assets/src/js/**/*.js'
    },

    public: {
        css: './assets/public/css/',
        js: './assets/public/js/'
    },

   out:{
        slider_js: './node_modules/flexslider/jquery.flexslider-min.js',
        node_jquery: './node_modules/jquery/dist/jquery.min.js',
        carousel_style: './node_modules/flexslider/flexslider.css',
        carousel_fonts: './node_modules/flexslider/fonts/flexslider-icon*',
   }, 

    watch: {
        stylesheets: './assets/src/scss/**/**/*.scss'
    },

    build: {
        css: './',
        car_fonts: './fonts/'
    }
};

gulp.task('build-styles', function(){
	gulp.src(path.src.main_sass)
	.pipe(sass())
    .pipe(gulp.dest(path.public.css))
    return gulp.src([path.out.carousel_style, path.public.css + "*.css"])
    .pipe(sourcemaps.init())
    .pipe(concat('main.css'))
    .pipe(sourcemaps.write({includeContent: false, sourceRoot: '.'}))
    .pipe(sourcemaps.init({loadMaps: true}))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(rename({
    suffix: ".min"}))
    .pipe(gulp.dest(path.build.css))
    .pipe(sourcemaps.write('.'))
    .pipe(notify("Styles built"));
});// sealed компиляция сборка и минификация всех стилей

gulp.task('build-js', function(){
    return gulp.src([path.out.node_jquery, path.out.slider_js, path.src.js])
    .pipe(concat('main.js'))
    .pipe(gulp.dest(path.public.js))
});

gulp.task('get-fonts', function(){
    gulp.src(path.out.carousel_fonts)
    .pipe(gulp.dest(path.build.car_fonts));
})


gulp.task('watch', function(){
    gulp.watch(path.watch.stylesheets, ['build-styles']);
});

gulp.task('default', ['build-styles' , 'build-js', 'get-fonts', 'watch']);