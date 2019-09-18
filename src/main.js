// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import BootstrapVue from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import './style/global.css'
import '@fortawesome/fontawesome-free/css/all.css'

// import './creative-template/jquery-3.4.1.min.js'
// import './creative-template/jquery.easing.min.js'
// import './creative-template/js/creative.min.js'
// import './creative-template/css/creative.min.css'

Vue.use(BootstrapVue)

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  template: '<App/>',
  components: { App }
})
