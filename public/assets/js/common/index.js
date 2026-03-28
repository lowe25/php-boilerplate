"use strict";
(() => {
  // resources/ts/common/components/test.ts
  var test = () => {
    console.log("HELLO WORLD FROM COMMON COMPONENTS FOLDER");
  };
  var test_default = test;

  // resources/ts/common/index.ts
  document.addEventListener("DOMContentLoaded", () => {
    test_default();
  });
})();
//# sourceMappingURL=index.js.map
