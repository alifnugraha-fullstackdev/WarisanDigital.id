import { defineConfig } from 'vite';
import path from 'path';

export default defineConfig({
  // config options
  server: {
    // we need a fixed port to reference it in functions.php
    port: 5173,
    strictPort: true,
    hmr: {
      protocol: 'ws',
      host: 'localhost',
    },
  },
  build: {
    // output directory for assets
    outDir: 'dist',
    assetsDir: 'assets',
    manifest: true,
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, 'src/main.js'),
        style: path.resolve(__dirname, 'src/style.css'),
      },
    },
  },
  plugins: [],
});