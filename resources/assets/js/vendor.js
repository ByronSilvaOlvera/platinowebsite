window.$ = window.jQuery = require('jquery');
window.moment = require('moment');
moment.locale('es');
require('materialize-css');
require('bootstrap');
require('slick-carousel');
require('particles.js');
require("@fancyapps/fancybox");
require('air-datepicker');
require('air-datepicker/dist/js/i18n/datepicker.es.js');
require('chosen-js')
require('jquery-lazy')
window.mobileDetect = require('mobile-detect')
window.md = new window.mobileDetect(window.navigator.userAgent)