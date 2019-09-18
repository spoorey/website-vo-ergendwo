<template>
  <div id="app">
    <nav-bar></nav-bar>
      <!--<router-view></router-view>-->
      <about></about>
      <helper-info></helper-info>
      <location></location>
      <contact></contact>
      <lorem-ipsum></lorem-ipsum>
  </div>
</template>

<script>
import Vue from 'vue'
import NavBar from './components/NavBar'
import About from './components/About'
import HelperInfo from './components/HelperInfo'
import Location from './components/Location'
import LoremIpsum from './components/LoremIpsum'
import Contact from './components/Contact'
import Polyglot from 'vue-polyglot'
import langDe from './assets/i18n/de.json'
import langFr from './assets/i18n/fr.json'
import langEn from './assets/i18n/en.json'
import langTg from './assets/i18n/tg.json'

Vue.use(Polyglot, {
  defaultLanguage: 'de',
  languagesAvailable: ['de', 'tg', 'en', 'fr']
})

Vue.locales({
  de: langDe,
  en: langEn,
  tg: langTg,
  fr: langFr
})
// */
export default {
  name: 'app',
  components: {NavBar, LoremIpsum, About, Location, Polyglot, Vue, Contact, HelperInfo}
}
</script>
