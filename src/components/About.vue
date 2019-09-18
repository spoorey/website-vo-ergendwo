<template>
  <section id="about">
    <div class="about">
        <h1>{{ $t('about_slogan') }}</h1>
        <p>Deutschtreff für Geflüchtete - jeden Dienstag und Donnerstag 18:00 bis 20:00 im Tommasini Lenzburg</p>
        <a class="btn btn-info" href="#location"><i class="fa fa-route"></i> Anreise</a>
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