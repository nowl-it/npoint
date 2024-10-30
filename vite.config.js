import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';
import babel from 'vite-plugin-babel';

export default defineConfig({
	plugins: [
		laravel({
			input: ['resources/sass/app.scss', 'resources/js/app.js'],
			refresh: true
		}),
		babel()
	]
});
