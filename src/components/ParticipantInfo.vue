<template>
  <section>
    <div  class="container">
    <span id="participant_info" class="nav-anchor"></span>
    <h2 class="text-center">{{ $t('participant_info_title') }}</h2>
    <p>{{ $t('participant_info_text') }}</p>
    <p class="text-center">
      <a href="#contact" class="btn btn-info"><i class="fas fa-phone"></i> {{ $t('nav_info_contact') }}</a>
      <a href="#location" class="btn btn-info"><i class="fa fa-route"></i> {{ $t('nav_location') }}</a>
    </p>
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
