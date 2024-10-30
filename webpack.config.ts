import path from 'path';
import { Configuration } from 'webpack';

const config: Configuration = {
	entry: './ts/app.ts', // Điểm đầu vào của TypeScript
	output: {
		filename: 'app.js', // File đầu ra
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
	mode: 'production' // Hoặc 'development' nếu bạn đang phát triển
};

export default config;
