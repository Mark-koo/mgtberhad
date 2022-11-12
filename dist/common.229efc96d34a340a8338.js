/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./js/common.js":
/*!**********************!*\
  !*** ./js/common.js ***!
  \**********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _scss_common_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../scss/common.scss */ \"./scss/common.scss\");\n\r\n\r\nconst toggleNavBtn = document.getElementById(\"toggleNav\");\r\nconst mobileNavElem = document.getElementById(\"mobileNav\");\r\nconst closeNavBtn = document.getElementById(\"closeNav\");\r\nconst overlayElem = document.getElementById(\"overlay\");\r\nconst gotChildBtns = document.querySelectorAll(\".gotChildJs button\");\r\n\r\n\r\ntoggleNavBtn.addEventListener('click', () => {\r\n    mobileNavElem.classList.add('open');\r\n});\r\n\r\ncloseNavBtn.addEventListener('click', () => {\r\n    mobileNavElem.classList.remove('open');\r\n});\r\noverlayElem.addEventListener('click', () => {\r\n    mobileNavElem.classList.remove('open');\r\n});\r\n\r\ngotChildBtns.forEach((elem) => {\r\n    elem.addEventListener('click', (e) => {\r\n        e.preventDefault();\r\n        elem.parentElement.nextElementSibling.classList.toggle('open')\r\n    });\r\n});\r\n\n\n//# sourceURL=webpack://webpack-php/./js/common.js?");

/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js!./node_modules/sass-loader/dist/cjs.js!./scss/common.scss":
/*!*******************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js!./node_modules/sass-loader/dist/cjs.js!./scss/common.scss ***!
  \*******************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var _node_modules_css_loader_dist_runtime_noSourceMaps_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../node_modules/css-loader/dist/runtime/noSourceMaps.js */ \"./node_modules/css-loader/dist/runtime/noSourceMaps.js\");\n/* harmony import */ var _node_modules_css_loader_dist_runtime_noSourceMaps_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_noSourceMaps_js__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../node_modules/css-loader/dist/runtime/api.js */ \"./node_modules/css-loader/dist/runtime/api.js\");\n/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_1__);\n// Imports\n\n\nvar ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_1___default()((_node_modules_css_loader_dist_runtime_noSourceMaps_js__WEBPACK_IMPORTED_MODULE_0___default()));\n___CSS_LOADER_EXPORT___.push([module.id, \"@import url(https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,300&family=Roboto:wght@400;700&display=swap);\"]);\n// Module\n___CSS_LOADER_EXPORT___.push([module.id, \"* {\\n  margin: 0;\\n  padding: 0;\\n  box-sizing: border-box;\\n  -webkit-font-smoothing: antialiased;\\n}\\n\\na {\\n  text-decoration: none;\\n}\\n\\nbody {\\n  font-family: \\\"Poppins\\\", sans-serif;\\n  overflow-y: scroll;\\n}\\n\\nbutton {\\n  font-family: \\\"Poppins\\\", sans-serif;\\n  border: none;\\n}\\nbutton :focus {\\n  outline: none;\\n}\\n\\nh1,\\nh2 {\\n  line-height: 1.3;\\n}\\n\\n::selection {\\n  background-color: #2c313a;\\n  color: #fff;\\n}\\n\\ninput,\\nselect,\\ntextarea {\\n  font-family: \\\"Poppins\\\", sans-serif;\\n  border-radius: 0;\\n}\\n\\n.h1 {\\n  font-size: 36px;\\n  font-weight: 700;\\n}\\n\\n.container {\\n  width: 100%;\\n  padding-right: 15px;\\n  padding-left: 15px;\\n  margin-right: auto;\\n  margin-left: auto;\\n}\\n@media (min-width: 576px) {\\n  .container {\\n    max-width: 540px;\\n  }\\n}\\n@media (min-width: 768px) {\\n  .container {\\n    max-width: 720px;\\n  }\\n}\\n@media (min-width: 992px) {\\n  .container {\\n    max-width: 960px;\\n  }\\n}\\n@media (min-width: 1200px) {\\n  .container {\\n    max-width: 1140px;\\n  }\\n}\\n\\n.row {\\n  display: flex;\\n  flex-wrap: wrap;\\n  margin-right: -15px;\\n  margin-left: -15px;\\n}\\n\\n.col,\\n.col-1,\\n.col-10,\\n.col-11,\\n.col-12,\\n.col-2,\\n.col-3,\\n.col-4,\\n.col-5,\\n.col-6,\\n.col-7,\\n.col-8,\\n.col-9,\\n.col-auto,\\n.col-lg,\\n.col-lg-1,\\n.col-lg-10,\\n.col-lg-11,\\n.col-lg-12,\\n.col-lg-2,\\n.col-lg-3,\\n.col-lg-4,\\n.col-lg-5,\\n.col-lg-6,\\n.col-lg-7,\\n.col-lg-8,\\n.col-lg-9,\\n.col-lg-auto,\\n.col-md,\\n.col-md-1,\\n.col-md-10,\\n.col-md-11,\\n.col-md-12,\\n.col-md-2,\\n.col-md-3,\\n.col-md-4,\\n.col-md-5,\\n.col-md-6,\\n.col-md-7,\\n.col-md-8,\\n.col-md-9,\\n.col-md-auto,\\n.col-sm,\\n.col-sm-1,\\n.col-sm-10,\\n.col-sm-11,\\n.col-sm-12,\\n.col-sm-2,\\n.col-sm-3,\\n.col-sm-4,\\n.col-sm-5,\\n.col-sm-6,\\n.col-sm-7,\\n.col-sm-8,\\n.col-sm-9,\\n.col-sm-auto,\\n.col-xl,\\n.col-xl-1,\\n.col-xl-10,\\n.col-xl-11,\\n.col-xl-12,\\n.col-xl-2,\\n.col-xl-3,\\n.col-xl-4,\\n.col-xl-5,\\n.col-xl-6,\\n.col-xl-7,\\n.col-xl-8,\\n.col-xl-9,\\n.col-xl-auto {\\n  position: relative;\\n  width: 100%;\\n  min-height: 1px;\\n  padding-right: 15px;\\n  padding-left: 15px;\\n}\\n\\n.col {\\n  flex-basis: 0;\\n  flex-grow: 1;\\n  max-width: 100%;\\n}\\n.col-auto {\\n  flex: 0 0 auto;\\n  width: auto;\\n  max-width: none;\\n}\\n@media (min-width: 576px) {\\n  .col-sm-auto {\\n    flex: 0 0 auto;\\n    width: auto;\\n    max-width: none;\\n  }\\n}\\n@media (min-width: 768px) {\\n  .col-md-auto {\\n    flex: 0 0 auto;\\n    width: auto;\\n    max-width: none;\\n  }\\n}\\n@media (min-width: 992px) {\\n  .col-lg-auto {\\n    flex: 0 0 auto;\\n    width: auto;\\n    max-width: none;\\n  }\\n}\\n@media (min-width: 1200px) {\\n  .col-xl-auto {\\n    flex: 0 0 auto;\\n    width: auto;\\n    max-width: none;\\n  }\\n}\\n\\n.col-12 {\\n  flex: 0 0 100%;\\n  max-width: 100%;\\n}\\n\\n@media (min-width: 576px) {\\n  .col-sm-4 {\\n    flex: 0 0 33.33%;\\n    max-width: 33.33%;\\n  }\\n  .col-sm-6 {\\n    flex: 0 0 50%;\\n    max-width: 50%;\\n  }\\n}\\n\\n@media (min-width: 768px) {\\n  .col-md-6 {\\n    flex: 0 0 50%;\\n    max-width: 50%;\\n  }\\n  .col-md-12 {\\n    flex: 0 0 100%;\\n    max-width: 100%;\\n  }\\n}\\n\\n@media (min-width: 992px) {\\n  .col-lg-3 {\\n    flex: 0 0 25%;\\n    max-width: 25%;\\n  }\\n  .col-lg-4 {\\n    flex: 0 0 33.33%;\\n    max-width: 33.33%;\\n  }\\n  .col-lg-6 {\\n    flex: 0 0 50%;\\n    max-width: 50%;\\n  }\\n  .col-lg-8 {\\n    flex: 0 0 66.66%;\\n    max-width: 66.66%;\\n  }\\n}\\n\\n.d-none {\\n  display: none !important;\\n}\\n.d-block {\\n  display: block !important;\\n}\\n.d-block.row {\\n  display: flex !important;\\n}\\n@media (min-width: 576px) {\\n  .d-sm-none {\\n    display: none !important;\\n  }\\n  .d-sm-block {\\n    display: block !important;\\n  }\\n  .d-sm-block.row {\\n    display: flex !important;\\n  }\\n}\\n@media (min-width: 768px) {\\n  .d-md-none {\\n    display: none !important;\\n  }\\n  .d-md-block {\\n    display: block !important;\\n  }\\n  .d-md-block.row {\\n    display: flex !important;\\n  }\\n}\\n@media (min-width: 992px) {\\n  .d-lg-none {\\n    display: none !important;\\n  }\\n  .d-lg-block {\\n    display: block !important;\\n  }\\n  .d-lg-block.row {\\n    display: flex !important;\\n  }\\n}\\n@media (min-width: 1200px) {\\n  .d-xl-none {\\n    display: none !important;\\n  }\\n  .d-xl-block {\\n    display: block !important;\\n  }\\n  .d-xl-block.row {\\n    display: flex !important;\\n  }\\n}\\n\\n.justify-content-between {\\n  justify-content: space-between !important;\\n}\\n\\n.align-items-center {\\n  align-items: center !important;\\n}\\n\\n.button {\\n  background-color: #E5DEDA;\\n  color: #2C313A;\\n  font-size: 14px;\\n  padding: 12px 25px 12px 20px;\\n  display: inline-flex;\\n  align-items: center;\\n  font-weight: 700;\\n  height: 54px;\\n  transition: 0.3s;\\n  line-height: 1.2;\\n  cursor: pointer;\\n}\\n.button:hover {\\n  background-color: white;\\n  color: #2E2E2E;\\n}\\n.button.blue {\\n  background-color: #152757;\\n  color: white;\\n}\\n.button.blue:hover {\\n  background-color: white;\\n  color: #2E2E2E;\\n}\\n.button img {\\n  width: 18px;\\n  margin-right: 15px;\\n}\\n\\n.button-icon {\\n  width: 42px;\\n  height: 42px;\\n  background-color: #2C313A;\\n  display: grid;\\n  place-items: center;\\n}\\n.button-icon img {\\n  width: 25px;\\n}\\n\\nheader {\\n  height: 171px;\\n  padding: 30px 0 50px;\\n}\\n@media (max-width: 768px) {\\n  header {\\n    height: auto;\\n    padding: 20px 0 20px;\\n  }\\n}\\nheader .row {\\n  height: 100%;\\n}\\nheader .row > div, header .row > ul {\\n  padding-left: 0;\\n  padding-right: 0;\\n}\\n@media (max-width: 576px) {\\n  header .row > div, header .row > ul {\\n    padding-left: 20px;\\n    padding-right: 20px;\\n  }\\n}\\nheader .logo {\\n  height: 50px;\\n}\\n@media (max-width: 576px) {\\n  header .logo {\\n    height: 47px;\\n  }\\n}\\nheader .headerContact {\\n  display: inline-flex;\\n}\\nheader .headerContact + .headerContact {\\n  margin-left: 40px;\\n}\\n@media (max-width: 991px) {\\n  header .headerContact + .headerContact {\\n    margin-left: 0;\\n  }\\n}\\nheader .headerContact .icon {\\n  width: 80px;\\n  margin-right: 20px;\\n}\\nheader .headerContactInfo .text1 {\\n  font-weight: 300;\\n  font-style: italic;\\n  font-size: 13px;\\n  color: #152757;\\n  margin-bottom: 5px;\\n}\\nheader .headerContactInfo .text2 {\\n  font-weight: 700;\\n  color: #2C313A;\\n}\\nheader .nav {\\n  margin-top: 15px;\\n  height: 70px;\\n  background-color: #152757;\\n  box-shadow: 0px 5px 20px 0px rgba(0, 0, 0, 0.35);\\n  padding-right: 8px;\\n  position: relative;\\n  z-index: 1;\\n}\\nheader .nav ul {\\n  list-style: none;\\n}\\nheader .nav ul li {\\n  border-right: 1px solid rgba(229, 222, 218, 0.23);\\n}\\nheader .nav ul li:hover .secondLayer {\\n  display: block;\\n}\\nheader .nav ul li a,\\nheader .nav ul li span {\\n  color: #E5DEDA;\\n  font-size: 13px;\\n}\\nheader .nav .firstLayer {\\n  display: flex;\\n}\\nheader .nav .firstLayer .active > a, header .nav .firstLayer .active > span {\\n  color: white;\\n  border-color: #E5DEDA;\\n  opacity: 1;\\n}\\nheader .nav .firstLayer a,\\nheader .nav .firstLayer span {\\n  padding: 24px 30px 22px;\\n  display: block;\\n  border-bottom: 4px solid transparent;\\n  opacity: 0.85;\\n  transition: color, border-color, opacity 0.3s;\\n}\\nheader .nav .firstLayer a:hover,\\nheader .nav .firstLayer span:hover {\\n  color: white;\\n  border-color: #E5DEDA;\\n  opacity: 1;\\n}\\nheader .nav .secondLayer {\\n  display: none;\\n  position: absolute;\\n  padding: 16px 0;\\n  background-color: #2C313A;\\n  transition: color, border-color, opacity 0.3s;\\n}\\nheader .nav .secondLayer .active > a {\\n  margin-left: 5px;\\n}\\nheader .nav .secondLayer a {\\n  padding: 8px 24px;\\n  border: none;\\n  line-height: 1;\\n}\\nheader .nav .secondLayer a:hover {\\n  margin-left: 5px;\\n}\\n\\n.mobileNav {\\n  position: fixed;\\n  top: 0;\\n  left: 0;\\n  width: 100%;\\n  height: 100%;\\n  z-index: 9;\\n  opacity: 0;\\n  visibility: hidden;\\n}\\n.mobileNav.open {\\n  transition: 0.3s;\\n  opacity: 1;\\n  visibility: visible;\\n}\\n.mobileNav.open .overlay {\\n  opacity: 1;\\n}\\n.mobileNav.open .firstLayer {\\n  transform: translateX(0);\\n}\\n.mobileNav .overlay {\\n  background-color: rgba(0, 0, 0, 0.6);\\n  position: absolute;\\n  width: 100%;\\n  height: 100%;\\n  opacity: 0;\\n}\\n.mobileNav .button-icon {\\n  position: absolute;\\n  top: 10px;\\n  right: calc(75% + 10px);\\n  background-color: transparent;\\n}\\n.mobileNav ul {\\n  list-style: none;\\n}\\n.mobileNav ul li {\\n  border-bottom: 1px solid rgba(229, 222, 218, 0.12);\\n}\\n.mobileNav ul li > a {\\n  display: block;\\n  color: rgba(229, 222, 218, 0.63);\\n  font-size: 14px;\\n  font-weight: 700;\\n}\\n.mobileNav ul li > a button {\\n  border-left: 1px solid rgba(229, 222, 218, 0.12);\\n  padding: 12px 15px;\\n  background-color: transparent;\\n  margin-top: -12px;\\n  margin-bottom: -12px;\\n  margin-right: -20px;\\n}\\n.mobileNav ul li > a button img {\\n  opacity: 0.63;\\n  width: 10px;\\n  height: 10px;\\n}\\n.mobileNav .firstLayer {\\n  background-color: #2C313A;\\n  max-width: 75%;\\n  position: absolute;\\n  right: 0;\\n  height: 100%;\\n  overflow-y: scroll;\\n  padding: 30px;\\n  box-shadow: -5px 0 20px rgba(0, 0, 0, 0.12);\\n  transition: color, opacity 0.3s;\\n  transform: translateX(100%);\\n}\\n.mobileNav .firstLayer .active > a {\\n  color: #E5DEDA;\\n}\\n.mobileNav .firstLayer .active > a img {\\n  opacity: 1;\\n}\\n.mobileNav .firstLayer a {\\n  padding: 12px 20px;\\n  display: flex;\\n  justify-content: space-between;\\n  align-items: center;\\n}\\n.mobileNav .secondLayer {\\n  border-top: 1px solid rgba(229, 222, 218, 0.12);\\n  padding-left: 20px;\\n  max-height: 0;\\n  overflow: hidden;\\n  transition: 0.3s;\\n}\\n.mobileNav .secondLayer.open {\\n  max-height: 400px;\\n}\\n.mobileNav .secondLayer a {\\n  padding: 8px 24px;\\n  font-size: 12px;\\n  font-weight: normal;\\n}\\n.mobileNav .secondLayer li:last-child {\\n  border: none;\\n}\\n\\nfooter {\\n  background-color: #E5DEDA;\\n  color: #2C313A;\\n  line-height: 1.8;\\n  font-weight: 300;\\n  font-size: 15px;\\n}\\nfooter .topArea {\\n  padding-top: 40px;\\n  text-align: center;\\n}\\nfooter .topArea .logo {\\n  height: 55px;\\n}\\nfooter .topArea .description {\\n  margin-top: 10px;\\n  padding-bottom: 70px;\\n}\\nfooter .topArea .title {\\n  color: #152757;\\n  font-weight: 700;\\n}\\nfooter .topArea .line {\\n  margin: 20px auto;\\n  width: 20px;\\n  height: 2px;\\n  background-color: #152757;\\n}\\nfooter .topArea ul {\\n  list-style: none;\\n  padding-bottom: 70px;\\n}\\nfooter .topArea ul a {\\n  color: #2C313A;\\n  display: block;\\n  line-height: 1.9;\\n}\\nfooter .topArea dl {\\n  padding-bottom: 70px;\\n  line-height: 1.3;\\n  display: grid;\\n  grid-template-columns: repeat(2, 1fr);\\n  row-gap: 10px;\\n  column-gap: 10px;\\n}\\nfooter .topArea dl dt {\\n  text-align: right;\\n}\\nfooter .topArea dl dd {\\n  text-align: left;\\n}\\n@media (min-width: 992px) {\\n  footer .topArea {\\n    text-align: left;\\n  }\\n  footer .topArea .logo {\\n    height: 52px;\\n  }\\n  footer .topArea .line {\\n    margin: 20px 0;\\n  }\\n  footer .topArea dl dt {\\n    text-align: left;\\n  }\\n}\\nfooter .copyrightArea .col {\\n  padding-bottom: 20px;\\n  font-size: 13px;\\n  color: rgba(44, 49, 58, 0.4);\\n}\\nfooter .copyrightArea .col .line {\\n  border-top: 1px solid rgba(44, 49, 58, 0.2);\\n}\\nfooter .copyrightArea .col p {\\n  padding-top: 20px;\\n}\\n@media (min-width: 576px) {\\n  footer .copyrightArea .col {\\n    text-align: center;\\n  }\\n}\\n\\n.navigation {\\n  background-color: #f2eeec;\\n}\\n.navigation .col {\\n  padding-top: 20px;\\n  padding-bottom: 20px;\\n  display: flex;\\n  align-items: center;\\n  justify-content: center;\\n}\\n.navigation .col .title {\\n  font-weight: 700;\\n  color: #2C313A;\\n}\\n.navigation .col .path {\\n  display: none;\\n  align-items: center;\\n  column-gap: 15px;\\n}\\n.navigation .col .path a {\\n  display: flex;\\n  align-items: center;\\n}\\n.navigation .col .path a img {\\n  width: 15px;\\n}\\n.navigation .col .path .arrow {\\n  width: 15px;\\n}\\n.navigation .col .path span {\\n  opacity: 0.5;\\n  font-size: 14px;\\n  font-weight: 700;\\n}\\n@media (min-width: 576px) {\\n  .navigation .col {\\n    justify-content: space-between;\\n  }\\n  .navigation .col .title {\\n    font-size: 24px;\\n  }\\n  .navigation .col .path {\\n    display: flex !important;\\n  }\\n}\\n@media (min-width: 768px) {\\n  .navigation .col {\\n    padding-top: 60px;\\n  }\\n}\\n\\n.headerTitle {\\n  padding: 50px 0;\\n  text-align: center;\\n}\\n.headerTitle .title {\\n  font-size: 26px;\\n}\\n.headerTitle .subtitle {\\n  margin-top: 30px;\\n  color: #AAA;\\n  font-size: 18px;\\n  font-weight: 300;\\n}\\n@media (min-width: 576px) {\\n  .headerTitle {\\n    padding: 90px 0 40px;\\n  }\\n}\", \"\"]);\n// Exports\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);\n\n\n//# sourceURL=webpack://webpack-php/./scss/common.scss?./node_modules/css-loader/dist/cjs.js!./node_modules/sass-loader/dist/cjs.js");

/***/ }),

/***/ "./node_modules/css-loader/dist/runtime/api.js":
/*!*****************************************************!*\
  !*** ./node_modules/css-loader/dist/runtime/api.js ***!
  \*****************************************************/
/***/ ((module) => {

eval("\n\n/*\n  MIT License http://www.opensource.org/licenses/mit-license.php\n  Author Tobias Koppers @sokra\n*/\nmodule.exports = function (cssWithMappingToString) {\n  var list = []; // return the list of modules as css string\n\n  list.toString = function toString() {\n    return this.map(function (item) {\n      var content = \"\";\n      var needLayer = typeof item[5] !== \"undefined\";\n\n      if (item[4]) {\n        content += \"@supports (\".concat(item[4], \") {\");\n      }\n\n      if (item[2]) {\n        content += \"@media \".concat(item[2], \" {\");\n      }\n\n      if (needLayer) {\n        content += \"@layer\".concat(item[5].length > 0 ? \" \".concat(item[5]) : \"\", \" {\");\n      }\n\n      content += cssWithMappingToString(item);\n\n      if (needLayer) {\n        content += \"}\";\n      }\n\n      if (item[2]) {\n        content += \"}\";\n      }\n\n      if (item[4]) {\n        content += \"}\";\n      }\n\n      return content;\n    }).join(\"\");\n  }; // import a list of modules into the list\n\n\n  list.i = function i(modules, media, dedupe, supports, layer) {\n    if (typeof modules === \"string\") {\n      modules = [[null, modules, undefined]];\n    }\n\n    var alreadyImportedModules = {};\n\n    if (dedupe) {\n      for (var k = 0; k < this.length; k++) {\n        var id = this[k][0];\n\n        if (id != null) {\n          alreadyImportedModules[id] = true;\n        }\n      }\n    }\n\n    for (var _k = 0; _k < modules.length; _k++) {\n      var item = [].concat(modules[_k]);\n\n      if (dedupe && alreadyImportedModules[item[0]]) {\n        continue;\n      }\n\n      if (typeof layer !== \"undefined\") {\n        if (typeof item[5] === \"undefined\") {\n          item[5] = layer;\n        } else {\n          item[1] = \"@layer\".concat(item[5].length > 0 ? \" \".concat(item[5]) : \"\", \" {\").concat(item[1], \"}\");\n          item[5] = layer;\n        }\n      }\n\n      if (media) {\n        if (!item[2]) {\n          item[2] = media;\n        } else {\n          item[1] = \"@media \".concat(item[2], \" {\").concat(item[1], \"}\");\n          item[2] = media;\n        }\n      }\n\n      if (supports) {\n        if (!item[4]) {\n          item[4] = \"\".concat(supports);\n        } else {\n          item[1] = \"@supports (\".concat(item[4], \") {\").concat(item[1], \"}\");\n          item[4] = supports;\n        }\n      }\n\n      list.push(item);\n    }\n  };\n\n  return list;\n};\n\n//# sourceURL=webpack://webpack-php/./node_modules/css-loader/dist/runtime/api.js?");

/***/ }),

/***/ "./node_modules/css-loader/dist/runtime/noSourceMaps.js":
/*!**************************************************************!*\
  !*** ./node_modules/css-loader/dist/runtime/noSourceMaps.js ***!
  \**************************************************************/
/***/ ((module) => {

eval("\n\nmodule.exports = function (i) {\n  return i[1];\n};\n\n//# sourceURL=webpack://webpack-php/./node_modules/css-loader/dist/runtime/noSourceMaps.js?");

/***/ }),

/***/ "./scss/common.scss":
/*!**************************!*\
  !*** ./scss/common.scss ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ \"./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js\");\n/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _node_modules_style_loader_dist_runtime_styleDomAPI_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !../node_modules/style-loader/dist/runtime/styleDomAPI.js */ \"./node_modules/style-loader/dist/runtime/styleDomAPI.js\");\n/* harmony import */ var _node_modules_style_loader_dist_runtime_styleDomAPI_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_styleDomAPI_js__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _node_modules_style_loader_dist_runtime_insertBySelector_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../node_modules/style-loader/dist/runtime/insertBySelector.js */ \"./node_modules/style-loader/dist/runtime/insertBySelector.js\");\n/* harmony import */ var _node_modules_style_loader_dist_runtime_insertBySelector_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_insertBySelector_js__WEBPACK_IMPORTED_MODULE_2__);\n/* harmony import */ var _node_modules_style_loader_dist_runtime_setAttributesWithoutAttributes_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! !../node_modules/style-loader/dist/runtime/setAttributesWithoutAttributes.js */ \"./node_modules/style-loader/dist/runtime/setAttributesWithoutAttributes.js\");\n/* harmony import */ var _node_modules_style_loader_dist_runtime_setAttributesWithoutAttributes_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_setAttributesWithoutAttributes_js__WEBPACK_IMPORTED_MODULE_3__);\n/* harmony import */ var _node_modules_style_loader_dist_runtime_insertStyleElement_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! !../node_modules/style-loader/dist/runtime/insertStyleElement.js */ \"./node_modules/style-loader/dist/runtime/insertStyleElement.js\");\n/* harmony import */ var _node_modules_style_loader_dist_runtime_insertStyleElement_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_insertStyleElement_js__WEBPACK_IMPORTED_MODULE_4__);\n/* harmony import */ var _node_modules_style_loader_dist_runtime_styleTagTransform_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! !../node_modules/style-loader/dist/runtime/styleTagTransform.js */ \"./node_modules/style-loader/dist/runtime/styleTagTransform.js\");\n/* harmony import */ var _node_modules_style_loader_dist_runtime_styleTagTransform_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_styleTagTransform_js__WEBPACK_IMPORTED_MODULE_5__);\n/* harmony import */ var _node_modules_css_loader_dist_cjs_js_node_modules_sass_loader_dist_cjs_js_common_scss__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! !!../node_modules/css-loader/dist/cjs.js!../node_modules/sass-loader/dist/cjs.js!./common.scss */ \"./node_modules/css-loader/dist/cjs.js!./node_modules/sass-loader/dist/cjs.js!./scss/common.scss\");\n\n      \n      \n      \n      \n      \n      \n      \n      \n      \n\nvar options = {};\n\noptions.styleTagTransform = (_node_modules_style_loader_dist_runtime_styleTagTransform_js__WEBPACK_IMPORTED_MODULE_5___default());\noptions.setAttributes = (_node_modules_style_loader_dist_runtime_setAttributesWithoutAttributes_js__WEBPACK_IMPORTED_MODULE_3___default());\n\n      options.insert = _node_modules_style_loader_dist_runtime_insertBySelector_js__WEBPACK_IMPORTED_MODULE_2___default().bind(null, \"head\");\n    \noptions.domAPI = (_node_modules_style_loader_dist_runtime_styleDomAPI_js__WEBPACK_IMPORTED_MODULE_1___default());\noptions.insertStyleElement = (_node_modules_style_loader_dist_runtime_insertStyleElement_js__WEBPACK_IMPORTED_MODULE_4___default());\n\nvar update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_node_modules_sass_loader_dist_cjs_js_common_scss__WEBPACK_IMPORTED_MODULE_6__[\"default\"], options);\n\n\n\n\n       /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_node_modules_sass_loader_dist_cjs_js_common_scss__WEBPACK_IMPORTED_MODULE_6__[\"default\"] && _node_modules_css_loader_dist_cjs_js_node_modules_sass_loader_dist_cjs_js_common_scss__WEBPACK_IMPORTED_MODULE_6__[\"default\"].locals ? _node_modules_css_loader_dist_cjs_js_node_modules_sass_loader_dist_cjs_js_common_scss__WEBPACK_IMPORTED_MODULE_6__[\"default\"].locals : undefined);\n\n\n//# sourceURL=webpack://webpack-php/./scss/common.scss?");

/***/ }),

/***/ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js":
/*!****************************************************************************!*\
  !*** ./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js ***!
  \****************************************************************************/
/***/ ((module) => {

eval("\n\nvar stylesInDOM = [];\n\nfunction getIndexByIdentifier(identifier) {\n  var result = -1;\n\n  for (var i = 0; i < stylesInDOM.length; i++) {\n    if (stylesInDOM[i].identifier === identifier) {\n      result = i;\n      break;\n    }\n  }\n\n  return result;\n}\n\nfunction modulesToDom(list, options) {\n  var idCountMap = {};\n  var identifiers = [];\n\n  for (var i = 0; i < list.length; i++) {\n    var item = list[i];\n    var id = options.base ? item[0] + options.base : item[0];\n    var count = idCountMap[id] || 0;\n    var identifier = \"\".concat(id, \" \").concat(count);\n    idCountMap[id] = count + 1;\n    var indexByIdentifier = getIndexByIdentifier(identifier);\n    var obj = {\n      css: item[1],\n      media: item[2],\n      sourceMap: item[3],\n      supports: item[4],\n      layer: item[5]\n    };\n\n    if (indexByIdentifier !== -1) {\n      stylesInDOM[indexByIdentifier].references++;\n      stylesInDOM[indexByIdentifier].updater(obj);\n    } else {\n      var updater = addElementStyle(obj, options);\n      options.byIndex = i;\n      stylesInDOM.splice(i, 0, {\n        identifier: identifier,\n        updater: updater,\n        references: 1\n      });\n    }\n\n    identifiers.push(identifier);\n  }\n\n  return identifiers;\n}\n\nfunction addElementStyle(obj, options) {\n  var api = options.domAPI(options);\n  api.update(obj);\n\n  var updater = function updater(newObj) {\n    if (newObj) {\n      if (newObj.css === obj.css && newObj.media === obj.media && newObj.sourceMap === obj.sourceMap && newObj.supports === obj.supports && newObj.layer === obj.layer) {\n        return;\n      }\n\n      api.update(obj = newObj);\n    } else {\n      api.remove();\n    }\n  };\n\n  return updater;\n}\n\nmodule.exports = function (list, options) {\n  options = options || {};\n  list = list || [];\n  var lastIdentifiers = modulesToDom(list, options);\n  return function update(newList) {\n    newList = newList || [];\n\n    for (var i = 0; i < lastIdentifiers.length; i++) {\n      var identifier = lastIdentifiers[i];\n      var index = getIndexByIdentifier(identifier);\n      stylesInDOM[index].references--;\n    }\n\n    var newLastIdentifiers = modulesToDom(newList, options);\n\n    for (var _i = 0; _i < lastIdentifiers.length; _i++) {\n      var _identifier = lastIdentifiers[_i];\n\n      var _index = getIndexByIdentifier(_identifier);\n\n      if (stylesInDOM[_index].references === 0) {\n        stylesInDOM[_index].updater();\n\n        stylesInDOM.splice(_index, 1);\n      }\n    }\n\n    lastIdentifiers = newLastIdentifiers;\n  };\n};\n\n//# sourceURL=webpack://webpack-php/./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js?");

/***/ }),

/***/ "./node_modules/style-loader/dist/runtime/insertBySelector.js":
/*!********************************************************************!*\
  !*** ./node_modules/style-loader/dist/runtime/insertBySelector.js ***!
  \********************************************************************/
/***/ ((module) => {

eval("\n\nvar memo = {};\n/* istanbul ignore next  */\n\nfunction getTarget(target) {\n  if (typeof memo[target] === \"undefined\") {\n    var styleTarget = document.querySelector(target); // Special case to return head of iframe instead of iframe itself\n\n    if (window.HTMLIFrameElement && styleTarget instanceof window.HTMLIFrameElement) {\n      try {\n        // This will throw an exception if access to iframe is blocked\n        // due to cross-origin restrictions\n        styleTarget = styleTarget.contentDocument.head;\n      } catch (e) {\n        // istanbul ignore next\n        styleTarget = null;\n      }\n    }\n\n    memo[target] = styleTarget;\n  }\n\n  return memo[target];\n}\n/* istanbul ignore next  */\n\n\nfunction insertBySelector(insert, style) {\n  var target = getTarget(insert);\n\n  if (!target) {\n    throw new Error(\"Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.\");\n  }\n\n  target.appendChild(style);\n}\n\nmodule.exports = insertBySelector;\n\n//# sourceURL=webpack://webpack-php/./node_modules/style-loader/dist/runtime/insertBySelector.js?");

/***/ }),

/***/ "./node_modules/style-loader/dist/runtime/insertStyleElement.js":
/*!**********************************************************************!*\
  !*** ./node_modules/style-loader/dist/runtime/insertStyleElement.js ***!
  \**********************************************************************/
/***/ ((module) => {

eval("\n\n/* istanbul ignore next  */\nfunction insertStyleElement(options) {\n  var element = document.createElement(\"style\");\n  options.setAttributes(element, options.attributes);\n  options.insert(element, options.options);\n  return element;\n}\n\nmodule.exports = insertStyleElement;\n\n//# sourceURL=webpack://webpack-php/./node_modules/style-loader/dist/runtime/insertStyleElement.js?");

/***/ }),

/***/ "./node_modules/style-loader/dist/runtime/setAttributesWithoutAttributes.js":
/*!**********************************************************************************!*\
  !*** ./node_modules/style-loader/dist/runtime/setAttributesWithoutAttributes.js ***!
  \**********************************************************************************/
/***/ ((module, __unused_webpack_exports, __webpack_require__) => {

eval("\n\n/* istanbul ignore next  */\nfunction setAttributesWithoutAttributes(styleElement) {\n  var nonce =  true ? __webpack_require__.nc : 0;\n\n  if (nonce) {\n    styleElement.setAttribute(\"nonce\", nonce);\n  }\n}\n\nmodule.exports = setAttributesWithoutAttributes;\n\n//# sourceURL=webpack://webpack-php/./node_modules/style-loader/dist/runtime/setAttributesWithoutAttributes.js?");

/***/ }),

/***/ "./node_modules/style-loader/dist/runtime/styleDomAPI.js":
/*!***************************************************************!*\
  !*** ./node_modules/style-loader/dist/runtime/styleDomAPI.js ***!
  \***************************************************************/
/***/ ((module) => {

eval("\n\n/* istanbul ignore next  */\nfunction apply(styleElement, options, obj) {\n  var css = \"\";\n\n  if (obj.supports) {\n    css += \"@supports (\".concat(obj.supports, \") {\");\n  }\n\n  if (obj.media) {\n    css += \"@media \".concat(obj.media, \" {\");\n  }\n\n  var needLayer = typeof obj.layer !== \"undefined\";\n\n  if (needLayer) {\n    css += \"@layer\".concat(obj.layer.length > 0 ? \" \".concat(obj.layer) : \"\", \" {\");\n  }\n\n  css += obj.css;\n\n  if (needLayer) {\n    css += \"}\";\n  }\n\n  if (obj.media) {\n    css += \"}\";\n  }\n\n  if (obj.supports) {\n    css += \"}\";\n  }\n\n  var sourceMap = obj.sourceMap;\n\n  if (sourceMap && typeof btoa !== \"undefined\") {\n    css += \"\\n/*# sourceMappingURL=data:application/json;base64,\".concat(btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))), \" */\");\n  } // For old IE\n\n  /* istanbul ignore if  */\n\n\n  options.styleTagTransform(css, styleElement, options.options);\n}\n\nfunction removeStyleElement(styleElement) {\n  // istanbul ignore if\n  if (styleElement.parentNode === null) {\n    return false;\n  }\n\n  styleElement.parentNode.removeChild(styleElement);\n}\n/* istanbul ignore next  */\n\n\nfunction domAPI(options) {\n  var styleElement = options.insertStyleElement(options);\n  return {\n    update: function update(obj) {\n      apply(styleElement, options, obj);\n    },\n    remove: function remove() {\n      removeStyleElement(styleElement);\n    }\n  };\n}\n\nmodule.exports = domAPI;\n\n//# sourceURL=webpack://webpack-php/./node_modules/style-loader/dist/runtime/styleDomAPI.js?");

/***/ }),

/***/ "./node_modules/style-loader/dist/runtime/styleTagTransform.js":
/*!*********************************************************************!*\
  !*** ./node_modules/style-loader/dist/runtime/styleTagTransform.js ***!
  \*********************************************************************/
/***/ ((module) => {

eval("\n\n/* istanbul ignore next  */\nfunction styleTagTransform(css, styleElement) {\n  if (styleElement.styleSheet) {\n    styleElement.styleSheet.cssText = css;\n  } else {\n    while (styleElement.firstChild) {\n      styleElement.removeChild(styleElement.firstChild);\n    }\n\n    styleElement.appendChild(document.createTextNode(css));\n  }\n}\n\nmodule.exports = styleTagTransform;\n\n//# sourceURL=webpack://webpack-php/./node_modules/style-loader/dist/runtime/styleTagTransform.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			id: moduleId,
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/nonce */
/******/ 	(() => {
/******/ 		__webpack_require__.nc = undefined;
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./js/common.js");
/******/ 	
/******/ })()
;