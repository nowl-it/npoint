import moment from 'moment';
import Header from './admin/header';
import './elements/alert';
import keymap from './keymap';
import Calendar from './lib/calendar';

async function main() {
	Header();
	await keymap();

	const calendar = document.getElementById('calendar')!;

	console.log(moment.locale('vi'));

	Calendar(calendar, {
		height: '18rem',
		expandRows: false,
		events: [
			{
				title: 'Event 1',
				start: moment().format(),
				end: moment().add(12, 'hour').format(),
				display: 'block'
			}
		]
	});
}

document.addEventListener('DOMContentLoaded', main);
