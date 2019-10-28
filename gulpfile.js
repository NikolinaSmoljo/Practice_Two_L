const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();

// compile scss into css
function style() {
    //my scss file
    return gulp.src('./dist/scss/**/*.scss')
    // pass file through sass compiler
    .pipe(sass())
    // compiled css
    .pipe(gulp.dest('./src/css'))
    // stream changes to all browser
    .pipe (browserSync.stream());
}

function watch() {
    browserSync.init({
        server: {
            baseDir: './'
        }
    });
    gulp.watch('./dist/scss/**/*.scss', style);
    gulp.watch('./*.html').on('change', browserSync.reload);
    gulp.watch('./js/**/*.js').on('change', browserSync.reload);
}

exports.style = style;
exports.watch = watch;
