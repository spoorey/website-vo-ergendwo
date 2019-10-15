<template>
  <footer class="bg-dark text-white vertical-center">
    <b-row>
    <b-col cols="8" sm="6">
      <strong>{{ t('footer_title') }}</strong>
      <ul class="footer-list">
        <li><a href="https://www.contakt-citoyennete.ch/" target="_blank">conTAKT-citoyenneté</a></li>
        <li><a href="https://www.tomm.ch/" target="_blank">Tommasini</a></li>
        <li><a href="http://www.netzwerk-asyl.ch/" target="_blank">Netzwerk Asyl</a></li>
      </ul>
    </b-col>
    <b-col cols="4" sm="6" class="text-right">
      Deutschtreff: Vo Ergendwo {{ new Date().getFullYear() }}
    </b-col>
    </b-row>
  </footer>
</template>

<script>
export default {
  name: 'app-footer',
  data () {
    return {}
  }
}
</script>

<style lang="less">
footer {
  padding: 10px 10px;
  overflow: hidden;
}

.footer-list a {
  color: #ffffff;
  &:hover {
    color: #ff2020;
  }
}
</style>
