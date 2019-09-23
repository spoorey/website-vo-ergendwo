<template>
  <footer class="bg-dark text-white vertical-center">
    <b-row>
    <b-col cols="8" sm="6">
      <strong>{{ $t('footer_title') }}</strong>
      <ul class="footer-list">
        <li><a href="https://www.contakt-citoyennete.ch/" target="_blank">conTAKT-citoyenneté</a></li>
        <li><a href="https://www.tomm.ch/" target="_blank">Tommasini</a></li>
        <li><a href="http://www.netzwerk-asyl.ch/" target="_blank">Netzwerk Asyl</a></li>
      </ul>
    </b-col>
    <b-col cols="4" sm="6" class="text-right">
      Deutschtreff: vo Ergendwo {{ new Date().getFullYear() }}
      <!--
      <br>
      <div class="text-right">
      <a href="https://www.instagram.com/voergendwo/" target="_blank" class="text-white">
        Instagram
        <i class="fab fa-md fa-instagram"></i>
      </a>
      <br>
      <a href="https://www.facebook.com/Deutschtreff-vo-ergendwo-352137405242164" target="_blank" class="text-white">
        Facebook
        <i class="fab fa-facebook fa-md"></i>
      </a>
      <br>
      <a href="mailto:info@vo-ergendwo.ch" class="text-white">
        info@vo-ergendwo.ch
        <i class="fa fa-envelope fa-md"></i>
      </a>
      </div>
      -->
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

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
footer {
  padding: 10px 10px;
  overflow: hidden;
}

.footer-list a {
  color: #fff;
}
</style>
