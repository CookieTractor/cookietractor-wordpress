import { defineConfig } from "vite";

export default defineConfig(({ command }) => {

  const buildMode = process.env.build_mode?.trim();

  console.log('vite.config.ts | env.buildMode',buildMode);

  return {
    build: {
        lib: {
            entry: "client/entry.ts",
            formats: ["es"],
            name : "CookieTractor"
        },
        outDir: "plugin/assets/bundles",
        sourcemap: buildMode == 'development' ? true : false,
        rollupOptions: {
            external: [/^@umbraco/]
        },
    }
  }
});
