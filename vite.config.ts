import laravel from 'laravel-vite-plugin';
import path from 'path';
import { defineConfig } from 'vite';
import babel from 'vite-plugin-babel';
import tsconfigPaths from 'vite-tsconfig-paths';

export default defineConfig({
	plugins: [
		laravel({
			input: ['resources/js/app.js'],
			refresh: true
		}),
		babel(),
		tsconfigPaths({
			projects: ['./tsconfig.json']
		})
	],
	resolve: {
		alias: {
			'@': path.resolve(__dirname, 'ts')
		}
	}
});
