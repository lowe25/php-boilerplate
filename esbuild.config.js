const esbuild = require("esbuild");

async function start() {
  // COMMON
  const commonCtx = await esbuild.context({
    entryPoints: ["resources/ts/common/index.ts"],
    bundle: true,
    outfile: "public/assets/js/common/index.js",
    format: "iife",
    sourcemap: true,
  });

  await commonCtx.watch();
  console.log("Common watching...");

  // PAGES
  const pagesCtx = await esbuild.context({
    entryPoints: ["resources/ts/pages/index.ts"],
    bundle: true,
    outfile: "public/assets/js/pages/index.js",
    format: "iife",
    sourcemap: true,
  });

  await pagesCtx.watch();
  console.log("Pages watching...");
}

start().catch(err => {
  console.error(err);
  process.exit(1);
});