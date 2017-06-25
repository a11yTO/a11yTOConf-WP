var gulp = require( 'gulp' );
var sass = require( 'gulp-sass' );
var notify = require( 'gulp-notify' );

var browserSync = require('browser-sync').create();

// Static server
gulp.task('browser-sync', function() {
    browserSync.init({
        server: {
            baseDir: "./"
        }
    });
});

gulp.task( 'styles', function(){
	gulp.src( './styles/style.scss' )
	.pipe( sass({ errLogToConsole : true }))
	.pipe( gulp.dest( '.' ))
	.pipe( notify('css compiled'));
	}); // end gulp.task styles

gulp.task( 'watch', function(){
	gulp.watch('**/*.scss', ['styles'] );
	}); // end gulp.task watch



