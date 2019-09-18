<template>
  <section class="container">
    <span id="contact" class="nav-anchor"></span>
    <h2 class="text-center">
      {{ $t('contact_title') }}
    </h2>
    <b-row>
      <b-col cols="6" sm="4">
        <strong>{{ $t('contact_requests') }}:</strong><br>
        Marino Galli<br>
        +41 78 856 70 07<br>
        <a href="mailto:info@vo-ergendwo.ch">info@vo-ergendwo.ch</a>
      </b-col>
      <b-col cols="6" sm="4">
        <!--<div id="fb-root"></div>-->
        <!--<div class="fb-page" data-href="https://www.facebook.com/pages/category/Nonprofit-Organization/Deutschtreff-vo-ergendwo-352137405242164/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/pages/category/Nonprofit-Organization/Deutschtreff-vo-ergendwo-352137405242164/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pages/category/Nonprofit-Organization/Deutschtreff-vo-ergendwo-352137405242164/">Deutschtreff: vo ergendwo</a></blockquote></div>
        -->
        <strong>{{ $t('contact_social') }}:</strong><br>
        <a href="https://www.instagram.com/voergendwo/" target="_blank" class="">
          <i class="fab fa-md fa-instagram"></i>
          Instagram
        </a>
        <br>
        <a href="https://www.facebook.com/Deutschtreff-vo-ergendwo-352137405242164" target="_blank" class="">
          <i class="fab fa-facebook fa-md"></i>
          Facebook
        </a>
      </b-col>
      <b-col cols="12" sm="4">
        <strong>{{ $t('contact_address') }}</strong>:<br>
        Kontaktadresse von Galli? Flo?
      </b-col>
    </b-row>
  </section>
</template>

<script>
export default {
  name: 'contact',
  data () {
    return {}
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
</style>
