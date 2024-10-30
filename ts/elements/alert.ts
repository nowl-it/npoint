type AlertType = 'info' | 'success' | 'warning' | 'danger';

class NowlAlert extends HTMLButtonElement {
	public alert: AlertType | null = null;
	public end: number | null = null;
	private timeout: ReturnType<typeof setTimeout> | null = null;

	constructor() {
		super();
		this.tabIndex = 0;
		this.timeout = null;
		this.end = null;
		this.classList.add('animate-alert-in');
	}

	connectedCallback() {
		this.end = this.getAttribute('end') ? parseInt(this.getAttribute('end') as string, 10) : null;

		this.validType();

		if (!this.timeout) this.addEventListener('animationend', () => this.timeoutFunction());

		this.onmouseover = () => {
			if (this.timeout) clearTimeout(this.timeout);
		};

		this.onmouseleave = this.timeoutFunction.bind(this);
	}

	disconnectedCallback() {
		if (this.timeout) clearTimeout(this.timeout);
		this.removeEventListener('animationend', () => this.remove());
	}

	static get observedAttributes() {
		return ['alert', 'end', 'class'];
	}

	attributeChangedCallback(name: string, oldValue: any, newValue: any) {
		if (oldValue === newValue) return;

		switch (name) {
			case 'alert':
				this.alert = newValue as AlertType;
				this.update();
				break;

			case 'end':
				this.end = parseInt(newValue, 10);
				break;
		}
	}

	update() {
		this.validType();
		this.setAttribute('alert', this.alert || 'danger');
		if (this.timeout) clearTimeout(this.timeout);
	}

	validType(): void {
		const alert = this.getAttribute('alert') as AlertType;

		if (['info', 'success', 'warning', 'danger'].includes(alert)) {
			this.alert = alert;
		} else {
			this.alert = 'danger';
			this.innerText = 'Invalid Alert attribute';
			this.setAttribute('alert', this.alert);
		}
	}

	timeoutFunction() {
		if (!this.end) return;
		const timeout = () => {
			this.classList.remove('animate-alert-in');
			this.classList.add('animate-alert-out');
			this.addEventListener('animationend', () => this.remove());
		};

		this.timeout = setTimeout(timeout, this.end);
	}
}

customElements.define('nowl-alert', NowlAlert, {
	extends: 'button'
});
