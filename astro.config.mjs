import path from 'path';
import { fileURLToPath } from 'url';

import { defineConfig } from 'astro/config';

// https://astro.build/config
import tailwind from "@astrojs/tailwind"
import image from '@astrojs/image';
import partytown from '@astrojs/partytown';
import { SITE } from './src/config.mjs';

const __dirname = path.dirname(fileURLToPath(import.meta.url));

// https://astro.build/config
export default defineConfig({
	site: SITE.origin,
	base: SITE.basePathname,
	trailingSlash: SITE.trailingSlash ? 'always' : 'never',
	output: 'static',
	integrations: [
		tailwind({
			config: {
				applyBaseStyles: false,
			},
		}),
		image({
			serviceEntryPoint: '@astrojs/image/sharp',
		}),
		partytown({
			config: { forward: ['dataLayer.push'] },
		}),
  ],

  vite: {
		resolve: {
			alias: {
				'~': path.resolve(__dirname, './src'),
			},
		},
	},
});