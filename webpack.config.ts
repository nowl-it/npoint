import path from 'path';
import { Configuration } from 'webpack';

const config: Configuration = {
	entry: {
		app: './ts/app.ts',
		'pages/admin/global': './ts/pages/admin/global.ts',
		'pages/admin/index': './ts/pages/admin/index.ts'
	},
	output: {
		filename: '[name].js', // File đầu ra
		path: path.resolve(__dirname, './resources/js') // Thư mục chứa file đầu ra
	},
	resolve: {
		extensions: ['.ts', '.js'], // Giúp Webpack có thể import file .ts
		alias: {
			'@': path.resolve(__dirname, 'ts') // Tạo một alias để import file từ thư m
		}
	},
	module: {
		rules: [
			{
				test: /\.ts$/, // Xử lý tất cả các file .ts
				use: 'babel-loader', // Sử dụng babel-loader để chuyển đổi TypeScript sang JavaScript
				exclude: /node_modules/
			}
		]
	},
	mode: process.env.NODE_ENV === 'production' ? 'production' : 'development'
};

export default config;
