<template>
  <section>
    <span id="about" class="nav-anchor"></span>
    <div class="about">
        <h1> {{ t('Wir sind alle \"Vo Ergendwo\"') }}</h1>
        <img class="pencil" src="../assets/pencil.png">
        <p>{{ t('Deutschtreff für Geflüchtete - jeden Dienstag 18:00 bis 20:00 im Tommasini Lenzburg') }}</p>
        <div class="alert alert-success">
          <div v-if="this.getLang == 'de'">
            Liebe Teilnehmende des Deutschtreffs.<br>
            Wir können auch mit Corona den Deutschtreff durchführen.<br>
            Wir werden auf gute Hygiene achten, Masken sowie Desinfektionsmittel kostenlos bereitstellen und auch eine Anwesenheitsliste führen.<br> 
            Wir freuen uns, euch zu sehen!<br>
            <br>
            Auf der Website des BAG findet ihr Informationen zum Coronavirus in verschiedenen Sprachen (unter anderem Farsi, Tigrinisch, Tibetisch und viele mehr):<br>
            <a href="https://bag-coronavirus.ch/downloads/">bag-coronavirus.ch/downloads/</a>
          </div>
          <div v-if="this.getLang != 'de'">
            Dear participants of the language meet-up.<br>
            We can conduct the language meet-up even during the time of the coronavirus.<br>
            We will mantain good hygiene, offer free masks and disinfectant and also keep an attendance list.<br>
            We're looking forward to seeing you!<br>
            <br>
            On the BAG website, you can find information on the coronavirus in various languages, (including Farsi, Tigrinya, Tibetan and many more):<br>
            <a href="https://bag-coronavirus.ch/downloads/">bag-coronavirus.ch/downloads/</a>
            <br>
            You can always contact us with any questions, even during the summer break.
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
