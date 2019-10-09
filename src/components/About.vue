<template>
  <section>
    <span id="about" class="nav-anchor"></span>
    <div class="about">
        <h1> {{ t('about_slogan') }}</h1>
        <img class="pencil" src="../assets/pencil.png">
        <p>{{ t('about_lead') }}</p>
        <a class="btn btn-ve btn-lg" href="#location" v-scroll-to="'#location'" >
          <i class="fa fa-route"></i> 
          {{ t('nav_location') }}
        </a>
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
<style lang="less">
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

  h1 {
    line-height: normal;
    margin-bottom: 2px;
  }

  img.pencil  {
    max-height: 30px;
    max-width: 50%;
  }

  p {
    font-size: 1.1rem;
  }
}
</style>
