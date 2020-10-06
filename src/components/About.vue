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
            Wir können auch in Coronazeiten den Deutschtreff durchführen.<br>
            Um Ansteckungen zu vermeiden, gilt im Deutschtreff eine <em>Maskenpflicht</em>.<br>
            Für Kinder unter 12 Jahren und Leute, welche den Abstand von 1.5 Meter einhalten, gibt es keine Maskenpflicht.<br> 
            Masken stehen kostenlos zur Verfügung.<br>
            Wir freuen uns, euch zu sehen!<br>
            <br>
            Auf der Website des BAG findet ihr Informationen zum Coronavirus in verschiedenen Sprachen (unter anderem Farsi, Tigrinisch, Tibetisch und viele mehr):<br>
            <a href="https://bag-coronavirus.ch/downloads/">bag-coronavirus.ch/downloads/</a>
          </div>
          <div v-if="this.getLang != 'de'">
            Dear participants of the language meet-up.<br>
            We can conduct the language meet-up even during the time of the coronavirus.<br>
            To avoid infections, <em>wearing a mask is mandatory</em> in the meet-up.<br>
            Children younger than 12 years, and people keeping a distance of 1.5 meters do not have to wear a mask.<br>
            Masks are available for free.<br>
            We're looking forward to seeing you!<br>
            <br>
            On the BAG website, you can find information on the coronavirus in various languages, (including Farsi, Tigrinya, Tibetan and many more):<br>
            <a href="https://bag-coronavirus.ch/downloads/">bag-coronavirus.ch/downloads/</a>
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
