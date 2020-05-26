<template>
  <section>
    <span id="about" class="nav-anchor"></span>
    <div class="about">
        <h1> {{ t('Wir sind alle \"Vo Ergendwo\"') }}</h1>
        <img class="pencil" src="../assets/pencil.png">
        <p>{{ t('Deutschtreff für Geflüchtete - jeden Dienstag 18:00 bis 20:00 im Tommasini Lenzburg') }}</p>
        <div class="alert alert-danger">
          <div v-if="this.getLang == 'de'">
            Liebe Teilnehmende des Deutschtreffs.<br>
            Leider müssen wir den Deutschtreff bis auf weiteres schliessen.<br>
            Grund dafür ist der Coronavirus-Ausbruch.<br>
            Wir werden euch informieren, wenn wir den Deutschtreff wieder öffnen können.<br>
            Falls ihr dringend Hilfe von uns braucht, könnt ihr uns trotzdem kontaktieren.
            <br>
            <strong>Stand 20.05.2020</strong><br>
            Wir warten momentan auf genauere Informationen vom Bundesrat und der Regierung der Stadt Lenzburg.<br>
            Wir hoffen, dass der Deutschtreff bis mitte Juni wieder geöffnet werden kann.<br>
            Im Moment wissen wir aber noch nicht genau, wann und wie wir den Deutschtreff öffnen können.<br>
            <br>
            Auf der Website des BAG findet ihr Informationen zum Coronavirus in verschiedenen Sprachen (unter anderem Farsi, Tigrinisch, Tibetisch und viele mehr):<br>
            <a href="https://bag-coronavirus.ch/downloads/">bag-coronavirus.ch/downloads/</a>
          </div>
          <div v-if="this.getLang != 'de'">
            Dear participants of the language meet-up.<br>
            Regrettably, we have to close the language meetup for now, due to the coronavirs pandemic.<br>
            We will inform you, as soon as we can open the language meet-up again.<br>
            If you need help during this time, feel free to contact us.
            <br>
            <strong>Update 20.05.2020</strong><br>
            We are currently waiting for information by the federal council (Bundesrat) and the government of the town of lenzburg.<br>
            We hope to be able to open the language meet-up in mid june. Right now however, we don't know exactly when and how we can open up the language meet-up again.<br>
            <br>
            On the BAG website, you can find information on the coronavirus in various languages, (including Farsi, Tigrinya, Tibetan and many more):<br>
            <a href="https://bag-coronavirus.ch/downloads/">bag-coronavirus.ch/downloads/</a>
          </div>
        </div>
        <a class="btn btn-ve btn-lg" href="#contact" v-scroll-to="'#contact'" >
          <i class="fa fa-phone"></i> 
          {{ t('Kontakt') }}
        </a>
        <!--
        <a class="btn btn-ve btn-lg" href="#location" v-scroll-to="'#location'" >
          <i class="fa fa-route"></i> 
          {{ t('Anreise') }}
        </a>
        -->
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
    text-decoration: line-through;
  }
}
</style>
