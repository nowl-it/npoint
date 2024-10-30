import { CalendarOptions, Calendar as FullCalendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';

export default function Calendar(element: HTMLElement, options: CalendarOptions = {}) {
	let calendar = new FullCalendar(element, {
		plugins: [dayGridPlugin],
		initialView: 'dayGridWeek',
		timeZone: 'Asia/Ho_Chi_Minh',
		locale: 'vi',
		headerToolbar: false,
		footerToolbar: false,
		editable: true,
		...options
	});

	calendar.render();
}
