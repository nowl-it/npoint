import axios, { AxiosInstance } from 'axios';

const axiosInstance: AxiosInstance = axios.create({
	baseURL: '/api',
	headers: {
		'X-Requested-With': 'XMLHttpRequest'
	}
});

export default axiosInstance;
