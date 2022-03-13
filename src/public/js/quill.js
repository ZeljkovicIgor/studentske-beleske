/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************!*\
  !*** ./resources/js/quill.js ***!
  \*******************************/
var quill = new Quill("#editor", {
  theme: "snow",
  modules: {
    toolbar: [[{
      header: [1, 2, false]
    }], [{
      list: "ordered"
    }, {
      list: "bullet"
    }], ["bold", "italic", "underline"], ["image"]]
  }
});
document.getElementById("editorHolder").hidden = false;
/******/ })()
;