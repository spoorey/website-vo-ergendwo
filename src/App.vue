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
import ParticipantInfo from './components/ParticipantInfo'
import HelperInfo from './components/HelperInfo'
import Location from './components/Location'
import AppFooter from './components/AppFooter'
import Contact from './components/Contact'

import langDe from './assets/i18n/de.json'
import langFr from './assets/i18n/fr.json'
import langEn from './assets/i18n/en.json'
import langTg from './assets/i18n/tg.json'
import VueScrollTo from 'vue-scrollto'
import VueTranslate from 'vue-translate-plugin'

Vue.use(VueTranslate)
Vue.use(VueScrollTo, {duration: 250})

/*
Vue.use(Polyglot, {
  defaultLanguage: 'de',
  languagesAvailable: ['de', 'tg', 'en', 'fr']
})

//*/
Vue.locales({
  de: langDe,
  en: langEn,
  tg: langTg,
  fr: langFr
})
// */
export default {
  name: 'app',
  mounted() {
      // Define what language you want to use.
      // This can be called in something like a header with a language selector menu
      // Or any other case, doesn't need to be called in all components, but
      // at least in one, so it sets the global language of the plugin
      
      var userLang = navigator.language || navigator.userLanguage;
      userLang = userLang.substr(0,2);
      this.$translate.setLang(userLang);
    },

  components: {
    Vue, 
    NavBar,
    About,
    Location,
    Contact,
    HelperInfo,
    ParticipantInfo,
    AppFooter
  }
}
</script>
