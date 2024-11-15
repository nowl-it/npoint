export const HEADER = {
	element: document.querySelector('[data-role="header"]'),
	search: {
		element: document.querySelector('[data-role="search-header"]'),
		input: document.querySelector('[data-role="search-header-input"]') as HTMLInputElement,
		trigger: document.querySelector('[data-role="search-header-trigger"]') as HTMLInputElement,
		result: document.querySelector('[data-role="search-header-result"]') as HTMLDivElement
	}
};

export default function Header() {
	if (!HEADER.element || !HEADER.search.element || !HEADER.search.trigger) return;

	HEADER.search.trigger.addEventListener('change', (evt) => {
		if (evt.target instanceof HTMLInputElement && HEADER.search.element) {
			HEADER.search.element.classList.toggle('hidden');
			if (evt.target.checked) HEADER.search.input.focus();
		}
	});

	HEADER.search.input.addEventListener('input', (evt) => {
		if (evt.target instanceof HTMLInputElement && evt.target.value && evt.target.value !== '') {
			HEADER.search.input.parentElement?.classList.add('bg-white/80');
			HEADER.search.result.classList.remove('hidden');
		} else {
			HEADER.search.input.parentElement?.classList.remove('bg-white/80');
			HEADER.search.result.classList.add('hidden');
		}
	});
}
