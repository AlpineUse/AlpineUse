import { defineConfig } from "vite";
import { resolve } from "path";
import terser from "@rollup/plugin-terser";

export default defineConfig({
  build: {
    rollupOptions: {
      input: {
        "use-all": resolve(__dirname, "cdn.js"),
        "use-theme": resolve(__dirname, "src/use-theme/cdn.js"),
        "use-longpress": resolve(__dirname, "src/use-longpress/cdn.js"),
      },
      output: {
        entryFileNames: "[name]/index.min.js",
        dir: resolve(__dirname, "dist"),
        format: "es",
      },
      plugins: [terser()],
    },
    minify: "terser",
    outDir: "dist",
  },
  resolve: {
    alias: {
      "@": resolve(__dirname, "src"),
    },
  },
});
