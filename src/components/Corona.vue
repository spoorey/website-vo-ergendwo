<template>
  <section>
    <div class="container">
    <h2 class="text-center">{{ t('Coronavirus-Massnahmen')}} </h2>
      <div v-if="this.getLang == 'de'">
        Liebe Teilnehmende und Helfende des Deutschtreffs.<br>
        Wir können auch in Coronazeiten den Deutschtreff durchführen.<br>
        Wir haben uns allerdings für einige Regeln und Empfehlungen entschieden:<br>
        <ul>
          <li>Es gilt Maskenpflicht im Haus, für alle über 12 Jahre. Wir stellen Masken zur Verfügung.</li>
          <li>Wir führen eine Anwesenheitsliste, auf der Namen und Kontaktdaten augeschrieben werden</li>
          <li>Wir halten möglichst Abstand. Falls möglich teilen wir uns auf verschieden Räume auf.</li>
          <li>Tretet unseren <a href="#contact">WhatsApp-Gruppen</a> bei. Damit wird die Kommunikation einfacher. Wir können euch auch per WhatsApp helfen, wenn ihr nicht nach Lenzburg kommen könnt, wollt, oder dürft.</li>
          <li>Wir empfehlen, die <a href="https://bag-coronavirus.ch/swisscovid-app/#download">SwissCovid App</a> zu installieren und zu aktivieren. Ihr dürft auch ohne Smartphone oder App in den Deutschtreff kommen.</li>
        </ul>
        Wir freuen uns, euch zu sehen!<br>
        <br>
        Auf der Website des BAG findet ihr Informationen zum Coronavirus in verschiedenen Sprachen (unter anderem Farsi, Tigrinya, Tibetisch und viele mehr):<br>
        <a href="https://bag-coronavirus.ch/downloads/">bag-coronavirus.ch/downloads/</a><br>
        Unter
        <a href="https://www.bag.admin.ch/bag/de/home/krankheiten/ausbrueche-epidemien-pandemien/aktuelle-ausbrueche-epidemien/novel-cov/barrierefreie-inhalte/leichte-sprache.html">
        bag.admin.ch/bag/de/home/krankheiten/ausbrueche-epidemien-pandemien/aktuelle-ausbrueche-epidemien/novel-cov/barrierefreie-inhalte/leichte-sprache.html
        </a>
        findet ihr Informationen in einfacher deutscher Sprache.
      </div>
      <div v-if="this.getLang != 'de'">
        Dear participants of the language meet-up.<br>
        We can conduct the language meet-up even during the time of the coronavirus.<br>
        To avoid infections, <em>wearing a mask is mandatory</em> in the meet-up for everyone older than 12.<br>
        Masks are available for free.<br>
        Further, we will fill an <em>attendance list</em> to keep the contact data of everyone attending the meet-up.<br>
        We're looking forward to seeing you!<br>
        <br>
        On the BAG website, you can find information on the coronavirus in various languages, (including Farsi, Tigrinya, Tibetan and many more):<br>
        <a href="https://bag-coronavirus.ch/downloads/">bag-coronavirus.ch/downloads/</a>
      </div>
      <br>
      <p class="text-center">
        <a href="https://chat.whatsapp.com/DugWnrcoqY46CThJOcGuE0" target="_blank" class="btn btn-success">
          <i class="fab fa-whatsapp"></i>
          {{ t('WhatsApp-Gruppe für Helfende') }}
        </a>
        <a href="https://chat.whatsapp.com/0TtLehzVly6IyQ9JLFrBUP" target="_blank" class="btn btn-success">
          <i class="fab fa-whatsapp"></i>
          {{ t('WhatsApp-Gruppe für Teilnehmende') }}
        </a>
      </p>
    </div>
  </section>
</template>

<script>
export default {
  name: 'corona',
  computed: {
    getLang: function() {
      return this.$translate.lang;
    }
  },
  data () {
    return {
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
</style>
