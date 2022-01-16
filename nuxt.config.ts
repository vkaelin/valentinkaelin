import { defineNuxtConfig } from "nuxt3";

// https://v3.nuxtjs.org/docs/directory-structure/nuxt.config
export default defineNuxtConfig({
  build: {
    postcss: {
      postcssOptions: {
        plugins: {
          tailwindcss: {},
          autoprefixer: {},
        },
      },
    },
  },
  meta: {
    script: [
      {
        'data-domain': 'valentinkaelin.ch',
        src: 'https://plausible.io/js/plausible.js',
      },
    ],
  },
});
