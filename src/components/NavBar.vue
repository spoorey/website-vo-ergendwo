<template>
  <b-navbar toggleable="lg" type="dark" variant="dark" fixed="top">
    <b-navbar-brand href="#"><img src="../assets/logo_simple_white.png" style="max-height: 20px;"></b-navbar-brand>
    <b-navbar-nav class="mobile-lang ml-auto float-right d-inline-block d-lg-none">
        <b-nav-item-dropdown right><template slot="button-content"><i class="fas fa-language fa-lg"></i> {{ $t('nav_language') }}</template>
          <b-dropdown-item v-for="(language, key) in languages" v-on:click="showAppIn(key)" v-bind:key="key">{{ language }}</b-dropdown-item>
        </b-nav-item-dropdown>
    </b-navbar-nav>
    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <b-nav-item v-scroll-to="'#about'" href="#about">{{ $t('nav_about')   }}</b-nav-item>
        <b-nav-item v-scroll-to="'#participant_info'" href="#participant_info">{{ $t('nav_info_participant') }}</b-nav-item>
        <b-nav-item v-scroll-to="'#helper_info'" href="#helper_info">{{ $t('nav_info_helper') }}</b-nav-item>
        <b-nav-item v-scroll-to="'#location'" href="#location">{{ $t('nav_location') }}</b-nav-item>
        <b-nav-item v-scroll-to="'#contact'" href="#contact">{{ $t('nav_info_contact') }}</b-nav-item>
      </b-navbar-nav>

      <b-navbar-nav class="ml-auto d-lg-inline d-none">
        <b-nav-item-dropdown right><template slot="button-content"><i class="fas fa-language fa-lg"></i> {{ $t('nav_language') }}</template>
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
.mobile-lang {
  position: absolute;
  right: 80px;
  top: 6px;
  text-align: right;
}

.mobile-lang li {
  text-align: right;
}
</style>
