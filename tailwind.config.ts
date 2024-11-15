import { Config } from 'tailwindcss';
import defaultTheme from 'tailwindcss/defaultTheme';

const config = {
	theme: {
		extend: {
			fontFamily: {
				sans: ['Figtree', ...defaultTheme.fontFamily.sans]
			},
			container: {
				center: true,
				screens: {
					xl: '1280px'
				}
			},
			gridTemplateAreas: {
				layout: ['menu menu header header header header header', 'menu menu main main main aside aside']
			},
			gridTemplateColumns: {
				layout: 'auto auto 1fr'
			},
			gridTemplateRows: {
				content: 'masonry'
			},
			keyframes: {
				'alert-in': {
					'0%': {
						right: '-100%'
					},
					'100%': {
						right: defaultTheme.spacing[4]
					}
				},
				'alert-out': {
					'0%': {
						right: defaultTheme.spacing[4]
					},
					'100%': {
						right: '-100%'
					}
				}
			},
			animation: {
				'alert-in': 'alert-in 1s ease-out',
				'alert-out': 'alert-out 1s ease-out'
			}
		}
	},
	variants: {
		extend: {
			backgroundColor: ['active']
		}
	},
	content: ['./resources/**/*.{php,js,ts}'],
	plugins: [
		require('@tailwindcss/forms'),
		require('@tailwindcss/typography'),
		require('@savvywombat/tailwindcss-grid-areas'),
		require('tailwindcss-animate'),
		require('tailwind-scrollbar')
	]
} satisfies Config;

export default config;
