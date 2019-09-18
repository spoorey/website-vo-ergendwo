<template>
  <div id="app">
    <nav-bar></nav-bar>
      <!--<router-view></router-view>-->
      <about></about>
      <location></location>
      <lorem-ipsum></lorem-ipsum>
  </div>
</template>

<script>
import Vue from 'vue'
import NavBar from './components/NavBar'
import About from './components/About'
import Location from './components/Location'
import LoremIpsum from './components/LoremIpsum'
import Polyglot from 'vue-polyglot'
import langDe from './assets/i18n/de.json'
import langFr from './assets/i18n/fr.json'
import langEn from './assets/i18n/en.json'

Vue.use(Polyglot, {
  defaultLanguage: 'de',
  languagesAvailable: ['de', 'en', 'fr']
})

Vue.locales({
  de: langDe,
  en: langEn,
  fr: langFr
})
// */
export default {
  name: 'app',
  components: {NavBar, LoremIpsum, About, Location, Polyglot, Vue}
}
</script>
