import { HEADER } from './pages/admin/header';

export default async function keymap() {
	document.addEventListener('keydown', async (e) => {
		if (e.ctrlKey && e.key === 'k') {
			e.preventDefault();

			const {
				search: { trigger, element }
			} = HEADER;

			if (!trigger) return;

			if (!trigger.checked) trigger.checked = true;

			if (!element) return;

			element.classList.remove('hidden');
			if (trigger.checked) HEADER.search.input.focus();
		}

		if (e.key === 'Escape') {
			const {
				search: { trigger, element }
			} = HEADER;

			if (!trigger || !trigger.checked) return;
			trigger.checked = false;

			if (!element) return;

			element.classList.add('hidden');
		}
	});
}
