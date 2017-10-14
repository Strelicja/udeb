'use strict';

/**
    INCLUDE
**/

// common
var gulp = require('gulp');
var rename = require('gulp-rename');
var concat = require('gulp-concat');
var browserSync = require('browser-sync');

// javascripts
var uglify = require('gulp-uglify');

// css
var sass = require('gulp-sass');
var minifyCss = require('gulp-minify-css');
var autoprefix = require('gulp-autoprefixer');

// images
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var newer = require('gulp-newer');

// server
var server = require('gulp-server-livereload');

// vars source
var dir = {
    source: {
        img: 'src/images/*.{png,jpg,gif}',
        vendor: ['node_modules/jquery/dist/jquery.js', 'node_modules/bootstrap-sass/assets/javascripts/bootstrap.js', 'node_modules/skrollr/dist/skrollr.min.js'],
        js: 'src/scripts/main.js',
        scss: 'src/sass/**/*.scss'

    },
    destination: {
        img: 'images',
        js: 'js',
        css: ''
    }
};

/**
    TASKS
**/

gulp.task('reload', function(){
  browserSync.reload();
});

gulp.task('serve', ['scripts', 'sass'], function(){
  browserSync({
    server: {
            baseDir: './'
        },
    port : 3000
  });

  gulp.watch('*.html', ['reload'])
  gulp.watch('src/sass/**/*.scss', ['sass'])
  gulp.watch(dir.source.js, ['scripts'])
  // gulp.watch(dir.source.img, ['images'])
});

gulp.task('webserver', function(){
    return gulp.src('')
        .pipe(server({
            livereload: true,
            directoryListing: true,
            open: true,
            port: 3000
        }));
});

// gulp.task('images', function(){
//     return gulp.src(dir.source.img)
//         .pipe(newer(dir.destination.img))
//         .pipe(imagemin({
//             progressive: true,
//             interlaced: true,
//         }))
//         .pipe(gulp.dest(dir.destination.img));
// });

gulp.task('scripts', function(){
    return gulp.src(dir.source.js)
        .pipe(concat('main.min.js'))
        // .pipe(uglify())
        .pipe(gulp.dest(dir.destination.js))
});

gulp.task('vendor', function(){
    return gulp.src(dir.source.vendor)
        .pipe(concat('vendor.min.js'))
        // .pipe(uglify())
        .pipe(gulp.dest(dir.destination.js))
});

gulp.task('sass', function(){
    return gulp.src('./src/sass/main.scss')
        .pipe(rename('style.css'))
        .pipe(sass({
            errLogToConsole: true
        }))
        .pipe(autoprefix({
            browsers: ['last 25 version', 'ie 8', 'Safari 8', ],
            cascade: false
        }))
        .pipe(minifyCss({
            compatibility: 'ie10'
        }))
        .pipe(gulp.dest(dir.destination.css))
});


gulp.task('watch', function(){
    gulp.watch(dir.source.js, ['scripts']);
    gulp.watch(dir.source.scss, ['sass']);
    // gulp.watch(dir.source.img, ['images']);
});

gulp.task('default', ['scripts', 'vendor', 'sass', 'watch', 'webserver']);
