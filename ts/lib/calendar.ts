import { CalendarOptions, Calendar as FullCalendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import listPlugin from '@fullcalendar/list';

export default function Calendar(element: HTMLElement, options: CalendarOptions = {}) {
	let calendar = new FullCalendar(element, {
		plugins: [dayGridPlugin, listPlugin],
		initialView: 'dayGridMonth',
		timeZone: 'Asia/Ho_Chi_Minh',
		locale: 'vi',
		editable: true,
		...options
	});

	calendar.render();
}
