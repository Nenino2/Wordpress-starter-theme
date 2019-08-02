let mix = require( 'laravel-mix' );

mix.browserSync({
	proxy: 'http://localhost:8888/Workflow',
	files: [
		'**/*.php',
		'assets/dist/css/**/*.css',
		'assets/dist/js/**/*.js'
	],
	injectChanges: true,
	open: false
});

mix.setPublicPath('./assets/dist');

mix.js('assets/src/scripts/frontend/app.js', 'assets/dist/js/frontend')
	.react('assets/src/scripts/backend/gutenberg.js', 'assets/dist/js/backend')
	.sass('assets/src/sass/style.scss', 'assets/dist/css');

if (mix.inProduction()) {
	mix.version();
}
