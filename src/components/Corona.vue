<template>
  <section>
    <div class="container">
    <h2 class="text-center">Coronavirus: aktuelle Regeln</h2>
          <p>
            Um am Deutschtreff teilnehmen zu können, ist <strong>kein Zertifikat mehr</strong> nötig.
            Es können alle in den Deutschtreff kommen, auch wer nicht geimpft oder genesen ist.<br>
            Nur wer aktuell an Corona erkrankt ist, darf nicht teilnehmen.<br>
            Wir empfehlen trotzdem weiterhin, sich zu impfen und bei Symptomen zu testen.
          </p>
          <p>
            Auf der Website des BAG findet ihr Informationen zum Coronavirus in verschiedenen Sprachen (unter anderem Farsi, Tigrinisch, Tibetisch und viele mehr): 
            <a href="https://bag-coronavirus.ch/downloads/">bag-coronavirus.ch/downloads/</a>
            <br>
            Informationen zur Impfung findet ihr ebenfalls in verschiedenen Sprachen auf der Webseite des Kanton Aargau: 
            <a href="https://www.ag.ch/de/themen_1/coronavirus_2/10_coronavirus_impfung/anmeldung_covid_impfung/impf_anmeldung.jsp">https://www.ag.ch/de/themen_1/coronavirus_2/10_coronavirus_impfung/anmeldung_covid_impfung/impf_anmeldung.jsp</a>
          </p>
          <div class="text-center">
          Wir informieren euch immer über die aktuellen Regeln in der WhatsApp-Gruppe:<br>
          <a href="https://chat.whatsapp.com/0TtLehzVly6IyQ9JLFrBUP" target="_blank" class="btn btn-success">
            <i class="fab fa-whatsapp"></i>
            {{ t('WhatsApp (Teilnehmende)') }}
          </a>
          </div>
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
