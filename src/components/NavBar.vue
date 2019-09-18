<template>
  <b-navbar toggleable="lg" type="dark" variant="dark" sticky>
    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-brand href="#">Vo Ergendwo</b-navbar-brand>
      <b-navbar-nav>
        <b-nav-item href="#about">{{ $t('nav_about')   }}</b-nav-item>
        <b-nav-item href="#info_participant">{{ $t('nav_info_participant') }}</b-nav-item>
        <b-nav-item href="#info_helper">{{ $t('nav_info_helper') }}</b-nav-item>
        <b-nav-item href="#location">{{ $t('nav_location') }}</b-nav-item>
        <b-nav-item href="#contact">{{ $t('nav_info_contact') }}</b-nav-item>
      </b-navbar-nav>

      <b-navbar-nav class="ml-auto">
        <b-nav-item-dropdown :text="$t('nav_language')" right>
          <b-dropdown-item v-on:click="showAppIn('de')">Deutsch</b-dropdown-item>
          <b-dropdown-item v-on:click="showAppIn('en')">English</b-dropdown-item>
          <b-dropdown-item v-on:click="showAppIn('fr')">Français</b-dropdown-item>
          <b-dropdown-item v-on:click="showAppIn('de')">Hier</b-dropdown-item>
          <b-dropdown-item v-on:click="showAppIn('de')">Kommt</b-dropdown-item>
          <b-dropdown-item v-on:click="showAppIn('de')">Noch</b-dropdown-item>
          <b-dropdown-item v-on:click="showAppIn('tg')">Tigrinya????</b-dropdown-item>
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

    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
</style>
