const gulp = require("gulp");
const sass = require("gulp-sass");
const sourcemaps = require("gulp-sourcemaps");
const autoprefixer = require("gulp-autoprefixer");
const minifycss = require("gulp-minify-css");
const plumber = require("gulp-plumber"); // エラー時の強制終了を防止
const notify = require("gulp-notify"); // エラー発生時にデスクトップ通知する
const glob = require("gulp-sass-glob"); // import記述の省略
// const browserSync = require("browser-sync").create();

const paths = {
  styles: "./scss/**/*.scss",
  _styles: "!./scss/**/_*.scss",
};

// Styles
function styles() {
  var message = "";
  const message1 = "Sassのコンパイルが正常に完了しました。",
    message2 = "🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈🌈";
  if (getRandomInt(100) == 0) {
    message = message2;
  } else {
    message = message1;
  }
  return gulp
    .src([paths.styles, paths._styles])
    .pipe(glob())
    .pipe(
      plumber({
        errorHandler: notify.onError({
          title: "Sass Error!", // 任意のタイトルを表示させる
          message: "<%= error.message %>", // エラー内容を表示させる
        }),
      })
    )
    .pipe(sourcemaps.init())
    .pipe(
      sass({
        // outputStyle: "compressed",
        // outputStyle: 'expanded'
      })
    )
    .pipe(minifycss({ advanced: false }))
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(
      autoprefixer({
        grid: true,
      })
    ) // IEは11以上、Androidは4以上残りは、2version
    .pipe(sourcemaps.write("./"))
    .pipe(gulp.dest("./css/"))
    .pipe(
      notify({
        title: message,
      })
    );
}

// Watch
function watch() {
  gulp.watch(paths.styles, styles);
}

gulp.task("default", gulp.series(gulp.parallel(styles, watch)));
gulp.task("build", gulp.series(gulp.parallel(styles)));

function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}
