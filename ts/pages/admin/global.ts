import keymap from '@/keymap';
import Header from '@/pages/admin/header';

async function main() {
	Header();
	await keymap();
}

document.addEventListener('DOMContentLoaded', main);
