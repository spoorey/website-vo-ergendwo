<template>
  <div id="app">
    <nav-bar></nav-bar>
      <!--<router-view></router-view>-->
      <about></about>
      <participant-info></participant-info>
      <helper-info></helper-info>
      <location></location>
      <contact></contact>
      <app-footer></app-footer>
  </div>
</template>

<script>
import Vue from 'vue'
import NavBar from './components/NavBar'
import About from './components/About'
import Corona from './components/Corona'
import ParticipantInfo from './components/ParticipantInfo'
import HelperInfo from './components/HelperInfo'
import Location from './components/Location'
import AppFooter from './components/AppFooter'
import Contact from './components/Contact'

import langDe from './assets/i18n/de.json'
import langEn from './assets/i18n/en.json'
import VueScrollTo from 'vue-scrollto'
import VueTranslate from 'vue-translate-plugin'

Vue.use(VueTranslate)
Vue.use(VueScrollTo, {duration: 250})

Vue.locales({
  de: langDe,
  en: langEn,
})

export default {
  name: 'app',
  mounted() {
      var locales = ['de', 'en'];
      var userLang = navigator.language || navigator.userLanguage;
      userLang = userLang.substr(0,2);
      if (locales.indexOf(userLang)!=-1) {
        this.$translate.setLang(userLang);
      } else {
        this.$translate.setLang('de');
      }
    },

  components: {
    NavBar,
    About,
    Corona,
    Location,
    Contact,
    HelperInfo,
    ParticipantInfo,
    AppFooter
  }
}
</script>
