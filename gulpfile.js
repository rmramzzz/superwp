var less = require('gulp-less');
var path = require('path');
var gulp = require('gulp');

var devDirectory = './wp-content/themes/supertheme/dev/';
var buildDirectory = './wp-content/themes/supertheme/';


gulp.task('less', function () {
    return gulp.src(devDirectory + 'less/style.less')
        .pipe(less({
            paths: [ path.join(__dirname, 'less', 'includes') ]
        }))
        .pipe(gulp.dest(buildDirectory));
});