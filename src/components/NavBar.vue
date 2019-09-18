<template>
  <b-navbar toggleable="lg" type="dark" variant="dark" fixed="top">
    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-brand href="#"><img src="../assets/logo_simple_white.png" style="max-height: 20px;"></b-navbar-brand>
      <b-navbar-nav class="ml-auto d-lg-none d-inline">
        <b-nav-item-dropdown :text="$t('nav_language')" right>
          <b-dropdown-item v-for="(language, key) in languages" v-on:click="showAppIn(key)" v-bind:key="key">{{ language }}</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
      <b-navbar-nav>
        <b-nav-item href="#about">{{ $t('nav_about')   }}</b-nav-item>
        <b-nav-item href="#info_participant">{{ $t('nav_info_participant') }}</b-nav-item>
        <b-nav-item href="#helper_info">{{ $t('nav_info_helper') }}</b-nav-item>
        <b-nav-item href="#location">{{ $t('nav_location') }}</b-nav-item>
        <b-nav-item href="#contact">{{ $t('nav_info_contact') }}</b-nav-item>
      </b-navbar-nav>

      <b-navbar-nav class="ml-auto d-lg-inline d-none">
        <b-nav-item-dropdown :text="$t('nav_language')" right>
          <b-dropdown-item v-for="(language, key) in languages" v-on:click="showAppIn(key)" v-bind:key="key">{{ language }}</b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</template>

<script>
export default {
  name: 'nav-bar',
  methods: {
    showAppIn: function (lang) {
      this.$polyglot.setLang({ lang: lang })
    }
  },
  data () {
    return {
      languages: {
        de: 'Deutsch',
        en: 'English',
        fr: 'Français',
        tg: 'Tigrinya?'
      }
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
</style>
