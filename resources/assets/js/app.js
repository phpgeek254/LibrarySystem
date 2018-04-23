require('./bootstrap');
require( 'materialize-css');
require( './script');




import Vue from 'vue'
window.Vue = require('vue');

import VueCarousel from 'vue-carousel';


window.Bus = new Vue()

Vue.use(VueCarousel);
import UploadImage from './components/upload_image.vue'
import Slider from './components/slider.vue'

Vue.component('UploadImage', UploadImage)
Vue.component('Slider', Slider)

const app = new Vue({
        el: '#app',
}).$mount('#app');
