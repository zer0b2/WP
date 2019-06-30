var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    watch = require('gulp-watch');

    gulp.task('sass', function(){
        return gulp.src('./scss/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./'))
    })
    gulp.task('watch', function(){
        gulp.watch('./scss/**/*.scss', gulp.series('sass'))
    })