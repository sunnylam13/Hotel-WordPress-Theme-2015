var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');

gulp.task('styles', function() {
  gulp.src('sass/*.scss')
    .pipe(sass({
      errLogToConsole: true
    }))
    .pipe(concat('style.css'))
    .pipe(gulp.dest('./'))
});

gulp.task('default', function() {
  gulp.watch('sass/*.scss', ['styles']);
});