/*global require, __dirname */

var map = require('map-stream');
var frep = require('gulp-frep');
var gulp = require('gulp');
var sass = require('gulp-sass');
var uncss = require('gulp-uncss');
var csso = require('gulp-csso');
var sourcemaps = require('gulp-sourcemaps');
var karma = require('karma').server;
var concat = require('gulp-concat');
var stripDebug = require('gulp-strip-debug');
var uglify = require('gulp-uglify');
var fs = require('fs-extra');

var glob = require('glob');
var dyclasses = getDynamicClasses();

var outputDir = './css';
var baseOutputDir = './output/';
var jsOutputDir = baseOutputDir + '/js';
var jsOutput = 'headerfooter.min.js';

var sassContent = [
'./css/*.scss'
];
var pureCssContent = [
    './css-lib/pure-release-0.6.0/pure-min.css',
    './css-lib/pure-release-0.6.0/grids-responsive.css'
];

var jsContent = [
    './js-polyfills/**/*.js',
    './js/*.js',
    './js/init/init.js',
    './js/teardown/teardown.js'
];

var htmlContent = [
    './*.html'
];

function getDynamicClasses() {
    var DynamicClasses = [];
    return {
        run: function (filename) {
            var strings = fs.readFileSync(filename).toString().split('\n');
            for (var i in strings) {
                if (strings[i].match(/classList\.(add|toggle)/)) {
                    var res = strings[i]
                        .replace(/^.*classList\.(add|toggle)[ ]*\([ ]*['"]/, "")
                        .replace(/[ ]*['"][ ]*\);.*[\r\n]+$/, "");
                    DynamicClasses.push(new RegExp(res, "i"));
                }
            }
        },
        get: function () {
            return DynamicClasses;
        }
    };
}

gulp.task('uncss-pure', ['classes'], function () {
    return gulp.src(pureCssContent)
    .pipe(uncss({
        html: htmlContent,
        ignore: dyclasses.get() // Inserted generated Regex
    }))
    .pipe(concat('_pure.scss'))
    .pipe(gulp.dest(outputDir));
});

gulp.task('classes', function () {
    var files = glob.sync('js/*.js');
    for (var idx in files) {
        dyclasses.run(files[idx]);
    }
});

var scriptStr = '';
gulp.task('convertFilesToScriptTags', function () {
    var convertToScriptTag = function (file, cb) {
        var pathToHf = file.base.substr(0, file.base.search('v3') + 2);
        var src = file.path.substr(pathToHf.length).replace(/\\/g, '/');
        var script = '    <script src=".' + src + '"></script>';
        scriptStr += "\r\n" + script;
        cb(null, file);
    };
    return gulp.src(jsContent)
    .pipe(map(convertToScriptTag));
});

gulp.task('devHtml', ['convertFilesToScriptTags'], function () {
    return gulp.src(htmlContent)
    .pipe(frep([
    {
        pattern: /<!-- ::debug-js[\s\S.]*enddebug-js:: -->/,
        replacement: '<!-- ::debug-js:: -->' + scriptStr + "\r\n</body>\r\n</html>\r\n<!-- ::enddebug-js:: -->"
    }
    ]))
    .pipe(gulp.dest('.'));
});

function swallowError(error) {
    console.log(error.toString());
    this.emit('end');
}

// Added dependency 'classes' by Joe
gulp.task('scss', function () {
    return gulp.src(sassContent)
    .pipe(sass({
        outputStyle: 'compressed'
    }))
    .pipe(gulp.dest(outputDir));
});

gulp.task('quiet-scss', function () {
    return gulp.src(sassContent)
    .pipe(sass())
    .on('error', swallowError)
    .pipe(gulp.dest(outputDir));
});

gulp.task('test', function (done) {
    karma.start({
        configFile: __dirname + '/karma.conf.js',
        singleRun: false,
        colors: false,
        browsers: ['Chrome'],
        reporters: ['dots', 'coverage']
    }, done);
});

gulp.task('jsBundle', function () {
    return gulp.src(jsContent)
    .pipe(concat(jsOutput))
    .pipe(stripDebug())
    .pipe(uglify())
    .pipe(gulp.dest(jsOutputDir));
});

gulp.task('watch', ['quiet-scss'], function () {
    gulp.watch(sassContent, ['quiet-scss']);
});

gulp.task('createOutputFile', ['scss', 'jsBundle'], function () {
    var cssBody = fs.readFileSync('./css/headerfooter.css');
    var jsBody = fs.readFileSync('./output/js/headerfooter.min.js');
    var patterns = [{
        pattern: /<!-- ::debug-css[\s\S.]*debug-css:: -->/,
        replacement: "\t<style>\r\n\t\t" + cssBody + "\r\n\t</style>"
    },
    {
        pattern: /<!-- ::debug-js[\s\S.]*debug-js:: -->/,
        replacement: "\t<script>\r\n\t\t" + jsBody + "\r\n\t</script>"
    },
    {
        pattern: /<!-- ::debug-remove[\s\S.]*debug-remove:: -->/,
        replacement: ""
    }];

    return gulp.src(htmlContent)
        .pipe(frep(patterns))
        .pipe(gulp.dest(baseOutputDir));
});

gulp.task('default', ['jsBundle', 'createOutputFile'], function () { });
