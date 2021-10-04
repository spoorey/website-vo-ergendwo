<template>
  <section>
    <span id="about" class="nav-anchor"></span>
    <div class="about">
        <h1> {{ t('Wir sind alle \"Vo Ergendwo\"') }}</h1>
        <img class="pencil" src="../assets/pencil.png">
        <p>{{ t('Deutschtreff für Geflüchtete - jeden Dienstag 18:00 bis 20:00 im Tommasini Lenzburg') }}</p>
        <div class="alert alert-success">
          <div>
            <h3>Corona-Info</h3>
            Der Deutschtreff findet normal statt.
            <br>
            Auf der Website des BAG findet ihr Informationen zum Coronavirus in verschiedenen Sprachen (unter anderem Farsi, Tigrinisch, Tibetisch und viele mehr):<br>
            <a href="https://bag-coronavirus.ch/downloads/">bag-coronavirus.ch/downloads/</a>
            <br>
            Informationen zur Impfung findet ihr ebenfalls in verschiedenen Sprachen auf der Webseite des Kanton Aargau:<br>
            <a href="https://www.ag.ch/de/themen_1/coronavirus_2/10_coronavirus_impfung/anmeldung_covid_impfung/impf_anmeldung.jsp">https://www.ag.ch/de/themen_1/coronavirus_2/10_coronavirus_impfung/anmeldung_covid_impfung/impf_anmeldung.jsp</a>
          </div>
        </div>
        <a class="btn btn-ve btn-lg" href="#contact" v-scroll-to="'#contact'" >
          <i class="fa fa-phone"></i> 
          {{ t('Kontakt') }}
        </a>
        <a class="btn btn-ve btn-lg" href="#location" v-scroll-to="'#location'" >
          <i class="fa fa-route"></i> 
          {{ t('Anreise') }}
        </a>
    </div>
  </section>
</template>

<script>
export default {
  name: 'about',
  computed: {
    getLang: function() {
      return this.$translate.lang;
    }
  },
  data () {
    return {}
  }
}
</script>
<style scoped lang="less">
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
