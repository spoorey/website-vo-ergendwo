<template>
  <section>
    <div  class="container">
    <span id="participant_info" class="nav-anchor"></span>
    <h2 class="text-center">{{ t('participant_info_title') }}</h2>
    <p>{{ t('participant_info_text') }}</p>
    <div class="text-center">
      <a href="#contact" v-scroll-to="'#contact'" class="btn btn-ve"><i class="fas fa-phone"></i> {{ t('nav_info_contact') }}</a>
      <a href="#location" v-scroll-to="'#location'"  class="btn btn-ve"><i class="fa fa-route"></i> {{ t('nav_location') }}</a>
    </div>
    <div class="text-center">
      <a href="https://chat.whatsapp.com/0TtLehzVly6IyQ9JLFrBUP" target="_blank" class="btn btn-success">
        <i class="fab fa-whatsapp"></i>
        {{ t('participant_info_whatsapp') }}
      </a>
    </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'about',
  data () {
    return {}
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
</style>
