module.exports = function() {
    $.gulp.task('serve', function() {
        $.bs.init({
            server: {
                baseDir: "./public"
            },
			injectChanges: true,
			notify: false
        });
    });
}
