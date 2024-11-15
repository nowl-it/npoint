import axiosInstance from '@/bootstrap';
import Calendar from '@/lib/calendar';

const calendar = document.getElementById('calendar')!;

async function main() {
	const calendar_events = await axiosInstance.get('/calendar');

	if (calendar_events.status !== 200) return console.error('Failed to fetch calendar events');

	if (!calendar_events.data) return console.error('No calendar events found');

	Calendar(calendar, {
		events: [],
		headerToolbar: {
			left: 'prev,today,next',
			center: 'title',
			right: 'dayGridMonth,listWeek'
		},
		titleFormat: {
			year: 'numeric',
			month: 'numeric'
		},
		buttonText: {
			month: 'Tháng',
			week: 'Tuần',
			today: 'Hôm nay'
		}
	});
}

document.addEventListener('DOMContentLoaded', main);
