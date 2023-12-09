import { defineConfig } from 'vite';

export default defineConfig({
  appType: 'mpa',
  root: './src',
  build: {
    outDir: '../dist',
    emptyOutDir: true,
    rollupOptions: {
      input: {
        0: './src/login.html',
        1: './src/register.html',
        2: './src/password-reset.html',
        3: './src/splash-screen.html'
      }
    }
  },
})
