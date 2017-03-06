'use strict';


var gulp = require('gulp'),
	sass = require('gulp-sass'),
	autoprefixer = require('gulp-autoprefixer');
	
var autoprefixerOptions = {
	browsers: ['last 2 versions'],
    cascade: false
};


gulp.task('sass', function(){
	gulp.src('./public/sass/style.scss')
	.pipe(sass())
	.pipe(autoprefixer(autoprefixerOptions))
	.pipe(gulp.dest('./public/css'))
});


gulp.task("watch:sass", function(){
	gulp.watch('./public/sass/**/*.scss', ['sass'])
});