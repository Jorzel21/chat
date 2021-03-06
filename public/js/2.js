(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[2],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/assets/js/components/List.vue?vue&type=script&lang=js&":
/*!**********************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/assets/js/components/List.vue?vue&type=script&lang=js& ***!
  \**********************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
function wrapCsvValue(val, formatFn) {
  var formatted = formatFn !== void 0 ? formatFn(val) : val;
  formatted = formatted === void 0 || formatted === null ? '' : String(formatted);
  formatted = formatted.split('"').join('""')
  /**
   * Excel accepts \n and \r in strings, but some other CSV parsers do not
   * Uncomment the next two lines to escape new lines
   */
  .split('\n').join('\\n').split('\r').join('\\r');
  return "".concat(formatted);
}

/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'List',
  props: {
    list: {
      type: Array,
      "default": function _default() {
        return [];
      }
    },
    columns: {
      type: Array,
      "default": function _default() {
        return [];
      }
    },
    title: {
      type: String,
      "default": 'Lista'
    },
    filter: {
      type: String,
      "default": ''
    }
  },
  methods: {
    exportTable: function exportTable() {
      var _this = this;

      // naive encoding to csv format
      var content = [this.columns.map(function (col) {
        return wrapCsvValue(col.label);
      }).join(',')].concat(this.list.map(function (row) {
        return _this.columns.map(function (col) {
          return wrapCsvValue(typeof col.field === 'function' ? col.field(row) : row[col.field === void 0 ? col.name : col.field], col.format);
        }).join(',');
      })).join('\r\n');
      var status = Quasar.utils.exportFile("".concat(this.title, "-export-").concat(Date.now(), ".csv"), content, 'text/csv;charset=utf-8');

      if (status !== true) {
        this.$q.notify({
          message: 'Browser denied file download...',
          color: 'negative',
          icon: 'warning'
        });
      }
    }
  }
});

/***/ }),

/***/ "./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/dist/cjs.js?!./node_modules/vue-loader/lib/index.js?!./resources/assets/js/components/List.vue?vue&type=style&index=0&id=39abd255&lang=sass&scoped=true&":
/*!*********************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--8-2!./node_modules/sass-loader/dist/cjs.js??ref--8-3!./node_modules/vue-loader/lib??vue-loader-options!./resources/assets/js/components/List.vue?vue&type=style&index=0&id=39abd255&lang=sass&scoped=true& ***!
  \*********************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, ".sticky-hd[data-v-39abd255] {\n  position: -webkit-sticky;\n  position: sticky;\n  z-index: 1;\n  top: 0;\n}\n.my-grid-on[data-v-39abd255] {\n  max-height: calc(100vh - 200px);\n  border-radius: 0px;\n}\n.my-grid-off[data-v-39abd255] {\n  max-height: calc(100vh - 200px);\n}\n.my-table.q-table--loading thead tr:last-child th[data-v-39abd255] {\n  top: 48px;\n}", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/dist/cjs.js?!./node_modules/vue-loader/lib/index.js?!./resources/assets/js/components/List.vue?vue&type=style&index=0&id=39abd255&lang=sass&scoped=true&":
/*!*************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--8-2!./node_modules/sass-loader/dist/cjs.js??ref--8-3!./node_modules/vue-loader/lib??vue-loader-options!./resources/assets/js/components/List.vue?vue&type=style&index=0&id=39abd255&lang=sass&scoped=true& ***!
  \*************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../../node_modules/css-loader!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/src??ref--8-2!../../../../node_modules/sass-loader/dist/cjs.js??ref--8-3!../../../../node_modules/vue-loader/lib??vue-loader-options!./List.vue?vue&type=style&index=0&id=39abd255&lang=sass&scoped=true& */ "./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/dist/cjs.js?!./node_modules/vue-loader/lib/index.js?!./resources/assets/js/components/List.vue?vue&type=style&index=0&id=39abd255&lang=sass&scoped=true&");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/assets/js/components/List.vue?vue&type=template&id=39abd255&scoped=true&":
/*!**************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/assets/js/components/List.vue?vue&type=template&id=39abd255&scoped=true& ***!
  \**************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "q-pull-to-refresh",
    {
      on: {
        refresh: function($event) {
          return _vm.$emit("reload")
        }
      }
    },
    [
      _c("q-table", {
        class: [
          "bg-white text-primary my-table",
          _vm.$q.screen.lt.md ? "my-grid-on" : "my-grid-off"
        ],
        attrs: {
          columns: _vm.columns,
          data: _vm.list,
          filter: _vm.filter,
          dense: _vm.$q.screen.lt.md,
          grid: _vm.$q.screen.lt.md,
          "grid-header": "",
          "row-key": "name",
          "no-data-label": "Nenhuma informação disponível",
          "card-container-class": "q-pt-sm overflow-auto",
          "card-container-style": "height: 100%;"
        },
        scopedSlots: _vm._u([
          {
            key: "header",
            fn: function(props) {
              return [
                _c(
                  "q-tr",
                  { attrs: { props: props } },
                  [
                    _vm._l(props.cols, function(col) {
                      return _c(
                        "q-th",
                        {
                          key: col.name,
                          staticClass: "sticky-hd bg-white",
                          attrs: { props: props }
                        },
                        [
                          _vm._v(
                            "\n            " +
                              _vm._s(col.label) +
                              "\n          "
                          )
                        ]
                      )
                    }),
                    _vm._v(" "),
                    _c("q-th", { attrs: { "auto-width": "" } })
                  ],
                  2
                )
              ]
            }
          },
          {
            key: "body",
            fn: function(props) {
              return [
                _c(
                  "q-tr",
                  { attrs: { props: props } },
                  [
                    _vm._l(props.cols, function(col) {
                      return _c(
                        "q-td",
                        { key: col.name, attrs: { props: props } },
                        [
                          _vm._v(
                            "\n            " +
                              _vm._s(col.value) +
                              "\n          "
                          )
                        ]
                      )
                    }),
                    _vm._v(" "),
                    _c(
                      "q-td",
                      { attrs: { "auto-width": "" } },
                      [
                        _c(
                          "q-btn",
                          {
                            staticClass: "q-mx-sm",
                            attrs: {
                              flat: "",
                              round: "",
                              dense: "",
                              color: "warning",
                              icon: "fas fa-user-edit"
                            },
                            on: {
                              click: function($event) {
                                return _vm.$emit(
                                  "edit",
                                  Object.assign({}, props.row)
                                )
                              }
                            }
                          },
                          [_c("q-tooltip", [_vm._v("Editar")])],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "q-btn",
                          {
                            attrs: {
                              flat: "",
                              round: "",
                              dense: "",
                              color: "negative",
                              icon: "fas fa-user-minus"
                            },
                            on: {
                              click: function($event) {
                                return _vm.$emit(
                                  "remove",
                                  Object.assign({}, props.row)
                                )
                              }
                            }
                          },
                          [_c("q-tooltip", [_vm._v("Remover")])],
                          1
                        )
                      ],
                      1
                    )
                  ],
                  2
                )
              ]
            }
          },
          {
            key: "item",
            fn: function(ref) {
              var row = ref.row
              var colsMap = ref.colsMap
              return [
                _c(
                  "q-card",
                  {
                    staticClass: "col-xs-12",
                    attrs: { flat: "", bordered: "", square: "" }
                  },
                  [
                    _c(
                      "q-card-section",
                      { attrs: { horizontal: "" } },
                      [
                        _c(
                          "q-item",
                          [
                            _c(
                              "q-item-section",
                              { staticClass: "q-mr-auto" },
                              [
                                _vm._l(colsMap, function(value, key) {
                                  return [
                                    _c(
                                      "q-item-label",
                                      {
                                        key: value.label,
                                        attrs: { caption: "" }
                                      },
                                      [_vm._v(_vm._s(value.label))]
                                    ),
                                    _vm._v(" "),
                                    _c(
                                      "q-item-label",
                                      { key: key, staticClass: "ellipsis" },
                                      [_vm._v(_vm._s(row[key]))]
                                    )
                                  ]
                                })
                              ],
                              2
                            )
                          ],
                          1
                        ),
                        _vm._v(" "),
                        _c(
                          "q-card-actions",
                          {
                            staticClass: "q-ml-auto justify-between",
                            attrs: { vertical: "" }
                          },
                          [
                            _c(
                              "q-btn",
                              {
                                attrs: {
                                  flat: "",
                                  round: "",
                                  dense: "",
                                  color: "warning",
                                  icon: "fas fa-user-edit"
                                },
                                on: {
                                  click: function($event) {
                                    return _vm.$emit(
                                      "edit",
                                      Object.assign({}, row)
                                    )
                                  }
                                }
                              },
                              [_c("q-tooltip", [_vm._v("Editar")])],
                              1
                            ),
                            _vm._v(" "),
                            _c(
                              "q-btn",
                              {
                                attrs: {
                                  flat: "",
                                  round: "",
                                  dense: "",
                                  color: "negative",
                                  icon: "fas fa-user-minus"
                                },
                                on: {
                                  click: function($event) {
                                    return _vm.$emit(
                                      "remove",
                                      Object.assign({}, row)
                                    )
                                  }
                                }
                              },
                              [_c("q-tooltip", [_vm._v("Remover")])],
                              1
                            )
                          ],
                          1
                        )
                      ],
                      1
                    )
                  ],
                  1
                )
              ]
            }
          }
        ])
      })
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/assets/js/components/List.vue":
/*!*************************************************!*\
  !*** ./resources/assets/js/components/List.vue ***!
  \*************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _List_vue_vue_type_template_id_39abd255_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./List.vue?vue&type=template&id=39abd255&scoped=true& */ "./resources/assets/js/components/List.vue?vue&type=template&id=39abd255&scoped=true&");
/* harmony import */ var _List_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./List.vue?vue&type=script&lang=js& */ "./resources/assets/js/components/List.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _List_vue_vue_type_style_index_0_id_39abd255_lang_sass_scoped_true___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./List.vue?vue&type=style&index=0&id=39abd255&lang=sass&scoped=true& */ "./resources/assets/js/components/List.vue?vue&type=style&index=0&id=39abd255&lang=sass&scoped=true&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");






/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _List_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _List_vue_vue_type_template_id_39abd255_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _List_vue_vue_type_template_id_39abd255_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "39abd255",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/assets/js/components/List.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/assets/js/components/List.vue?vue&type=script&lang=js&":
/*!**************************************************************************!*\
  !*** ./resources/assets/js/components/List.vue?vue&type=script&lang=js& ***!
  \**************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_List_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./List.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/assets/js/components/List.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_List_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/assets/js/components/List.vue?vue&type=style&index=0&id=39abd255&lang=sass&scoped=true&":
/*!***********************************************************************************************************!*\
  !*** ./resources/assets/js/components/List.vue?vue&type=style&index=0&id=39abd255&lang=sass&scoped=true& ***!
  \***********************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_8_2_node_modules_sass_loader_dist_cjs_js_ref_8_3_node_modules_vue_loader_lib_index_js_vue_loader_options_List_vue_vue_type_style_index_0_id_39abd255_lang_sass_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/style-loader!../../../../node_modules/css-loader!../../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../../node_modules/postcss-loader/src??ref--8-2!../../../../node_modules/sass-loader/dist/cjs.js??ref--8-3!../../../../node_modules/vue-loader/lib??vue-loader-options!./List.vue?vue&type=style&index=0&id=39abd255&lang=sass&scoped=true& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/sass-loader/dist/cjs.js?!./node_modules/vue-loader/lib/index.js?!./resources/assets/js/components/List.vue?vue&type=style&index=0&id=39abd255&lang=sass&scoped=true&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_8_2_node_modules_sass_loader_dist_cjs_js_ref_8_3_node_modules_vue_loader_lib_index_js_vue_loader_options_List_vue_vue_type_style_index_0_id_39abd255_lang_sass_scoped_true___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_8_2_node_modules_sass_loader_dist_cjs_js_ref_8_3_node_modules_vue_loader_lib_index_js_vue_loader_options_List_vue_vue_type_style_index_0_id_39abd255_lang_sass_scoped_true___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_8_2_node_modules_sass_loader_dist_cjs_js_ref_8_3_node_modules_vue_loader_lib_index_js_vue_loader_options_List_vue_vue_type_style_index_0_id_39abd255_lang_sass_scoped_true___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_8_2_node_modules_sass_loader_dist_cjs_js_ref_8_3_node_modules_vue_loader_lib_index_js_vue_loader_options_List_vue_vue_type_style_index_0_id_39abd255_lang_sass_scoped_true___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_8_2_node_modules_sass_loader_dist_cjs_js_ref_8_3_node_modules_vue_loader_lib_index_js_vue_loader_options_List_vue_vue_type_style_index_0_id_39abd255_lang_sass_scoped_true___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/assets/js/components/List.vue?vue&type=template&id=39abd255&scoped=true&":
/*!********************************************************************************************!*\
  !*** ./resources/assets/js/components/List.vue?vue&type=template&id=39abd255&scoped=true& ***!
  \********************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_List_vue_vue_type_template_id_39abd255_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./List.vue?vue&type=template&id=39abd255&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/assets/js/components/List.vue?vue&type=template&id=39abd255&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_List_vue_vue_type_template_id_39abd255_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_List_vue_vue_type_template_id_39abd255_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);