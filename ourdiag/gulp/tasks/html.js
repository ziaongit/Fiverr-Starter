module.exports = function() {
    $.gulp.task('html', function() {
        return $.gulp.src('assets/*.html')
		    .pipe($.gp.fileInclude({
				prefix: '@@'
				, basepath: '@file'
			}))
            .pipe($.gulp.dest('public'))
            .on('end', $.bs.reload);
    });
}
