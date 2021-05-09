const username = 'grantcorley';
const sitename = 'ihearthighlandtown2021'
const {src, dest, series, parallel, watch} = require('gulp');

//const del = require('del');

const sass = require('gulp-sass');

const babel = require('gulp-babel');
const concatenate = require('gulp-concat');

// async function clean(cb){
//   await del(destination);
//   cb();
// }

const browserSync = require('browser-sync').create();

const origin = 'src';
const destination = './';


sass.compiler = require('node-sass');



function css(cb){  
  //process the styles.scss folder, using Sass
  // src(`${origin}/css/**/*.scss`)
  src(`${origin}/css/style.scss`)
  .pipe(sass({
    outputStyle:'compressed'
  }))
  .pipe(dest(destination)); // output to theme root
  // .pipe(dest(`${destination}/css`));
  
  cb();
}

function js(cb){
  // src([
  //   //control the order in which files are output
  //   // `${origin}/js/lib/bootstrap.bundle.min.js`,
  //   // `${origin}/js/**/*.js`,
  //   `${origin}/js/scripts.js`
  // ])
  src(`${origin}/js/scripts.js`).pipe(dest(destination));
  // .pipe(babel({
  //   compact: false,
  //   presets: ['@babel/env']
  // }))
  // .pipe(concatenate('build.js'))
  // .pipe(dest(destination)); 
  
  cb();
}

function server(cb){
  browserSync.init({
    // Using a localhost address with a port
    proxy:'https://ihearthighlandtown2021.local:8890',
    https: true,
    notify: false,
    open: true, //don't open a new browser window
    // server: {
    //   baseDir: destination
    //   // baseDir: 'http://localhost:3000'
    // }
  });
  cb();
}

// function server(cb){
//   browserSync.init({
//     proxy: 'https://ihearthighlandtown2021.local',
//     host: 'ihearthighlandtown2021.local',
//     open: 'external',
//     notify: false,
//     open: true,
//     port: 8000,
//     https: {
//       key:
//           '/Users/' + username + '/.config/valet/Certificates/' + sitename + '.test.key',
//       cert:
//           '/Users/' + username + '/.config/valet/Certificates/' + sitename + '.test.crt',
//     },

//   });
//   cb();
// }



function watcher(cb){
 // watch(`${origin}/**/*.html`).on('change', series(html))
 //watch(`${destination}/**/*.php`).on('change', series(php))
 watch('./*.php').on('change',browserSync.reload);
 watch(`${origin}/**/*.scss`).on('change', series(css, browserSync.reload))
  watch(`${origin}/**/*.js`).on('change', series(js, browserSync.reload))
  cb();
}

//exports.html = html;
// exports.php = php;
exports.css = css;
exports.js = js;

// exports.default = series(clean, parallel(html, css, js), watcher);
// exports.default = series(parallel(html, css, js), watcher);
// exports.default = series(parallel(css, js), watcher);
exports.default = series(parallel(css, js), server, watcher);


