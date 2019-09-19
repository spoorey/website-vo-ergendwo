<template>
  <section>
    <span id="about" class="nav-anchor"></span>
    <div class="about">
        <h1>{{ $t('about_slogan') }}</h1>
        <p>{{ $t('about_lead') }}</p>
        <a class="btn btn-info btn-lg" href="#location" v-scroll-to="'#location'" ><i class="fa fa-route"></i> {{ $t('nav_location') }}</a>
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
<style scoped>
.about {
  text-align: center;
  padding: 5%;
  display: block;
  background-image: url("../assets/about.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
  background-size: cover;
  color: #222;

}
</style>