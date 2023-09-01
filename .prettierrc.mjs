/** @type {import("prettier").Config} */
export default {
  semi: false,
  useTabs: false,
  singleQuote: true,
  tabWidth: 2,
  plugins: ["prettier-plugin-astro", "prettier-plugin-tailwindcss"],
  overrides: [
    {
      files: "*.astro",
      options: {
        parser: "astro",
      },
    },
  ],
  tailwindConfig: "./tailwind.config.ts",
}
