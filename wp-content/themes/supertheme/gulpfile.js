var less = require('gulp-less');
var path = require('path');
var gulp = require('gulp');

var devDirectory = './dev/';
var buildDirectory = './';


gulp.task('less', function () {
    return gulp.src(devDirectory + 'less/style.less')
        .pipe(less({
            paths: [ path.join(__dirname, 'less', 'includes') ]
        }))
        .pipe(gulp.dest(buildDirectory));
});