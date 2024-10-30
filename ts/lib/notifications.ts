class Notifications {
	constructor() {}

	register() {
		if (!('Notification' in window)) {
			console.log('This browser does not support desktop notification');
		} else {
			Notification.requestPermission();
		}

		if (Notification.permission === 'granted') {
			new Notification('Hello, world!');
		}
	}
}

export default Notifications;
