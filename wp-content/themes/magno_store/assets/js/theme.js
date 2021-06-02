/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 5);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


__webpack_require__(3);

__webpack_require__(2);

/***/ }),
/* 1 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) arr2[i] = arr[i]; return arr2; } else { return Array.from(arr); } }

var _componentsMultistep = __webpack_require__(4);

var SELECTORS = {
  form: '.js-multistep',
  input: '.js-wizard-input'
};

var instance = [].concat(_toConsumableArray(document.querySelectorAll(SELECTORS.form)));

if (instance.length) {
  var wizardInstance = new _componentsMultistep.MultiStep(instance[0]);
  var wizardInputs = new _componentsMultistep.InputHandler(instance[0], SELECTORS.input);
  wizardInstance.init();
  wizardInputs.init();
}

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var wow = new WOW({
  boxClass: 'wow', // animated element css class (default is wow)
  animateClass: 'animated', // animation css class (default is animated)
  offset: 0, // distance to the element when triggering the animation (default is 0)
  mobile: true, // trigger animations on mobile devices (default is true)
  live: true, // act on asynchronously loaded content (default is true)
  callback: function callback(box) {
    // the callback is fired every time an animation is started
    // the argument that is passed in is the DOM node being animated
  },
  scrollContainer: null // optional scroll container selector, otherwise use window
});

wow.init();

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, '__esModule', {
  value: true
});

var _createClass = (function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ('value' in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; })();

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) arr2[i] = arr[i]; return arr2; } else { return Array.from(arr); } }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError('Cannot call a class as a function'); } }

var SELECTORS = {
  btnFirst: '.js-first',
  steps: '.js-step',
  prev: '.js-prev',
  next: '.js-next',
  removeProd: '.js-remove-prod',
  prodThumb: '.js-prod-thumb',
  prodBar: '.js-products',
  prodBox: '.js-box-bar',
  prodCard: '.js-card-bar',
  cloned: '.js-cloned'
};

var CLASSES = {
  active: 'active',
  cloned: 'js-cloned',
  clonedItem: 'multistep__box--cloned',
  material: 'material-icons',
  column: 'multistep__column',
  hide: 'hidden',
  removeProd: 'js-remove-prod',
  display: 'show'
};

var MultiStep = (function () {
  function MultiStep(context) {
    _classCallCheck(this, MultiStep);

    this.context = context;
    this.steps = null;
    this.btnPrev = null;
    this.btnNext = null;
    this.currentStepIdx = 0;
  }

  _createClass(MultiStep, [{
    key: 'init',
    value: function init() {
      this.steps = [].concat(_toConsumableArray(this.context.querySelectorAll(SELECTORS.steps)));
      this.suscribe();
    }
  }, {
    key: 'suscribe',
    value: function suscribe() {
      this.showStep(this.currentStepIdx);
      this.addEventHandlers();
    }
  }, {
    key: 'showStep',
    value: function showStep() {
      var stepId = arguments.length <= 0 || arguments[0] === undefined ? 0 : arguments[0];

      var stepIdx = stepId;

      this.steps[stepIdx].classList.add('show');
      this.steps[stepIdx].classList.remove('hidden');
    }
  }, {
    key: 'prevNext',
    value: function prevNext() {
      var propValue = arguments.length <= 0 || arguments[0] === undefined ? 0 : arguments[0];

      this.steps[this.currentStepIdx].classList.remove('show');
      this.steps[this.currentStepIdx].classList.add('hidden');
      this.currentStepIdx = propValue;

      if (this.currentStepIdx >= this.steps.length) {
        this.context.submit();
        return false;
      }

      this.showStep(this.currentStepIdx);
    }
  }, {
    key: 'addEventHandlers',
    value: function addEventHandlers() {
      var _this = this;

      this.steps.forEach(function (el, i) {
        _this.btnPrev = el.querySelector(SELECTORS.prev);
        _this.btnNext = el.querySelector(SELECTORS.next);

        if (_this.btnPrev) {
          _this.btnPrev.addEventListener('click', _this.prevNext.bind(_this, i - 1));
        }

        if (_this.btnNext) {
          _this.btnNext.addEventListener('click', _this.prevNext.bind(_this, i + 1));
        }
      });
    }
  }]);

  return MultiStep;
})();

var InputHandler = (function () {
  function InputHandler(context, input) {
    _classCallCheck(this, InputHandler);

    this.btnFirst = null;
    this.context = context;
    this.input = input;
    this.inputs = null;
    this.prodBar = null;
    this.prodBox = null;
    this.prodCard = null;
    this.prodClones = null;
    this.prodId = null;
    this.prodType = null;
  }

  _createClass(InputHandler, [{
    key: 'init',
    value: function init() {
      this.inputs = [].concat(_toConsumableArray(this.context.querySelectorAll(this.input)));
      this.prodBar = this.context.querySelector(SELECTORS.prodBar);
      this.prodBox = this.context.querySelector(SELECTORS.prodBox);
      this.prodCard = this.context.querySelector(SELECTORS.prodCard);
      this.btnFirst = this.context.querySelector(SELECTORS.btnFirst);
      this.suscribe();
    }
  }, {
    key: 'suscribe',
    value: function suscribe() {
      this.initHandlers();
    }
  }, {
    key: 'initHandlers',
    value: function initHandlers() {
      var _this2 = this;

      this.inputs.forEach(function (el) {
        var inputInstance = el.querySelector('input');
        inputInstance.addEventListener('change', _this2.inputEvents.bind(_this2, el, inputInstance));
      });
    }
  }, {
    key: 'inputEvents',
    value: function inputEvents(parent, input) {
      this.prodId = parent.dataset.id;
      this.prodType = parent.dataset.type;
      var inputsWrapper = parent.parentNode.parentNode;
      var allInputs = [].concat(_toConsumableArray(inputsWrapper.querySelectorAll(this.input)));
      var inputType = input.getAttribute('type');

      if (input.checked) {
        if (inputType === 'radio') {
          allInputs.forEach(function (inputNode) {
            inputNode.classList.remove('active');
          });
        }
        parent.classList.add('active');
        this.btnFirst.classList.remove('hidden');

        this.handleClone(parent, this.prodId, this.prodType);
      } else {
        parent.classList.remove('active');
        this.handleRemove(this.prodId);
      }
    }
  }, {
    key: 'handleClone',
    value: function handleClone(input, id, type) {
      var thumbClone = input.querySelector(SELECTORS.prodThumb).cloneNode(true);
      var prodType = type;
      var closeIcon = document.createElement('span');

      thumbClone.classList.add(CLASSES.cloned);
      thumbClone.classList.add(CLASSES.clonedItem);
      thumbClone.classList.add(CLASSES.column);
      closeIcon.classList.add(CLASSES.removeProd);
      closeIcon.classList.add(CLASSES.material);
      closeIcon.innerHTML = 'close';
      thumbClone.prepend(closeIcon);
      this.prodClones = [].concat(_toConsumableArray(this.prodBar.querySelectorAll(SELECTORS.prodThumb)));

      if (this.prodClones) {
        this.prodClones.forEach(function (product) {
          var prodId = product.dataset.id;
          if (prodId === id) {
            product.remove();
          }
        });

        this.cloneEvents(this.prodBar);
      }

      if (prodType === 'product') {
        this.prodBar.appendChild(thumbClone);
      } else if (prodType === 'box') {
        if (this.prodBox.hasChildNodes()) this.prodBox.innerHTML = '';
        this.prodBox.appendChild(thumbClone);
      } else {
        if (this.prodCard.hasChildNodes()) this.prodCard.innerHTML = '';
        this.prodCard.innerHTML = '';
        this.prodCard.appendChild(thumbClone);
      }
    }
  }, {
    key: 'handleRemove',
    value: function handleRemove(id) {
      this.prodClones = [].concat(_toConsumableArray(this.prodBar.querySelectorAll(SELECTORS.prodThumb)));

      this.prodClones.forEach(function (product) {
        var prodId = product.dataset.id;

        if (prodId === id) {
          product.remove();
        }
      });
    }
  }, {
    key: 'cloneEvents',
    value: function cloneEvents(clones) {
      var _this3 = this;

      var cloneItems = clones;

      cloneItems.onclick = function (event) {
        var closeTarget = event.target;

        if (closeTarget.classList.contains(CLASSES.removeProd)) {
          var prodToDelete = closeTarget.parentNode;
          var idToUncheck = prodToDelete.dataset.id;

          _this3.handleUncheck(idToUncheck);
          prodToDelete.remove();
        }
      };
    }
  }, {
    key: 'handleUncheck',
    value: function handleUncheck(id) {
      this.inputs.forEach(function (el) {
        var inputInstance = el.querySelector('input');
        var inputInstanceId = el.dataset.id;

        if (inputInstanceId === id) {
          inputInstance.checked = false;
          el.classList.remove('active');
        }
      });
    }
  }]);

  return InputHandler;
})();

exports.MultiStep = MultiStep;
exports.InputHandler = InputHandler;

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(0);
module.exports = __webpack_require__(1);


/***/ })
/******/ ]);