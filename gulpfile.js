const { src, dest, watch } = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const gp_uglify = require('gulp-uglify');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const merge = require('merge2');
const babel = require("gulp-babel");

function build_CSS() {

  var vendor = src('css/vendor/*.css')
    //.pipe(postcss([cssnano]));

  var app = src('css/*.sass')
    .pipe(sass())
    .on("error", sass.logError)
    //.pipe(postcss([autoprefixer/*, cssnano*/]));

  return merge(vendor, app)
    .pipe(concat('build.css'))
    .pipe(dest('css/build/'))

}

function build_JS() {

  var vendor = src('js/vendor/*.js')
    //.pipe(gp_uglify());

  var app = src('js/*.js')
    //.pipe(gp_uglify());

  return merge(vendor, app)
    .pipe(babel())
    .pipe(concat('build.js'))
    .pipe(dest('js/build/'))

}

function watch_ALL(done) {

  watch('css/*.sass', build_CSS);
  watch('js/*.js', build_JS);
  done();

}

exports.watch = watch_ALL;
exports.default = watch_ALL;
