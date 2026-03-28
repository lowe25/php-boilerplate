"use strict";
(() => {
  // resources/ts/pages/components/test.ts
  var test = () => {
    console.log("HELLO WORLD FROM PAGES COMPONENTS FOLDER");
  };
  var test_default = test;

  // resources/ts/pages/index.ts
  document.addEventListener("DOMContentLoaded", () => {
    test_default();
  });
})();
//# sourceMappingURL=index.js.map
