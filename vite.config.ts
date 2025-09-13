/// <reference types="node" />
import { resolve } from 'path';
import fs from 'fs';
// Für Node-Typen: npm i --save-dev @types/node
import kirby from 'vite-plugin-kirby';
import checker from 'vite-plugin-checker';
import { defineConfig } from 'vite';

const root = 'src';
const templateDir = resolve(__dirname, `${root}/templates`);
const templates = fs
  .readdirSync(templateDir)
  .filter((file) => !/^\./.test(file))
  .filter((file) => fs.statSync(`${templateDir}/${file}`).isDirectory());

const input: Record<string, string> = Object.fromEntries([
  ...templates.map((template) => [
    template,
    `${templateDir}/${template}/index.ts`,
  ]),
  ['shared', resolve(__dirname, `${root}/main.ts`)],
]);

export default defineConfig(({ mode }) => ({
  base: mode === 'development' ? '/' : '/dist/',

  resolve: {
    alias: [
      { find: '@', replacement: resolve(__dirname, './src') },
      {
        find: '@templates',
        replacement: resolve(__dirname, './src/templates'),
      },
    ],
  },

  build: {
    outDir: resolve('dist'),
    assetsDir: 'assets',
    emptyOutDir: true,
    rollupOptions: { input },
  },

  plugins: [
    checker({
      typescript: true,
    }),
    kirby({
      watch: [
        './content/**/*',
        './site/(templates|snippets|controllers|models|plugins)/**/*.php',
        './site/blueprints/**/*.yml',
      ],
      kirbyConfigDir: 'site/config',
    }),
  ],
}));
