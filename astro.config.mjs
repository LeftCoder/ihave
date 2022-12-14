import path from 'path'
import { fileURLToPath } from 'url'
import { defineConfig } from 'astro/config'

// https://astro.build/config
import tailwind from '@astrojs/tailwind'
import image from '@astrojs/image'
import partytown from '@astrojs/partytown'
import preact from '@astrojs/preact'
import { SITE } from './src/config'
const __dirname = path.dirname(fileURLToPath(import.meta.url))

export default defineConfig({
  site: process.env.APP_URL ?? SITE.origin,
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
      config: {
        forward: ['dataLayer.push'],
      },
    }),
    preact(),
  ],
  vite: {
    resolve: {
      alias: {
        '~': path.resolve(__dirname, './src'),
      },
    },
  },
})
