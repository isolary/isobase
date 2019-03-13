var gulp = require('gulp');
var sass = require('gulp-sass');
var postcss      = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var cssvariables = require('postcss-css-variables'); 
var calc = require('postcss-calc');  

gulp.task('sass', function() {
  return gulp.src('assets/css/**/*.scss')
  .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
  .pipe(postcss([autoprefixer(), cssvariables({preserve: true}), calc()]))
  .pipe(gulp.dest('dist/css'))
});

gulp.task('watch', gulp.series(['sass'], function () {
  gulp.watch('assets/css/**/*.scss', gulp.series(['sass']));
}));
