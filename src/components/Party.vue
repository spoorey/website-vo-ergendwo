<template>
  <section>
    <div class="container">
      <span id="party" class="nav-anchor"></span>
      <span id="fest" class="nav-anchor"></span>
      <h2 class="text-center">{{ t('Jubiläumsfest am 22. Februar') }}</h2>

      <b-row>
        <b-col cols="12" sm="4" class="p-0 text-center">
          <img src="../assets/fest-poster.png" class="img img-fluid d-inline-block" /><br><br>
          <img src="../assets/fest-1.png" class="img img-fluid d-none d-sm-inline-block">
        </b-col>
        <b-col cols="12" sm="8" class="text-center">
          Liebe Freunde des Vereins Vo Ergendwo<br>

          Wir laden herzlich zu unserem 4-Jahres-Jubiläum! Es erfüllt uns mit Stolz und Freude, dass es uns schon so lange und erfolgreich gibt &lt;3<br>
          Und das wollen wir gerne mit unseren Freunden aus aller Welt, mit unseren Teilnehmenden, Helfer*innen und Gönner*innen feiern =)<br>
          <br>
          <h2>Programm und Zeiten</h2>
          Unser diesjähriges Jubiläumsfest findet am <em>Samstag, 22. Februar</em> statt.<br>
          Wir bieten euch wie immer ein vielseitiges Programm:<br><br>
          <table class="table">
              <tr>
                  <td><strong>17:00 Uhr</strong></td>
                  <td>Eintrudeln</td>
              </tr>

              <tr>
                  <td><strong>18:00 - 20:00 Uhr</strong></td>
                  <td> internationales Buffet</td>
              </tr>

              <tr>
                  <td><strong>19:00 - 21:00 Uhr</strong></td>
                  <td> Open Stage</td>
              </tr>

              <tr>
                  <td><strong>21:30 - 23:00 Uhr</strong></td>
                  <td> Band NOZEZ (Gypsy / Balkan)</td>
              </tr>

              <tr>
                  <td><strong>23:00 - 02:00 Uhr</strong></td>
                  <td> DJ Sonosphere (orientalisch, Techno)</td>
              </tr>
          </table>
          <strong>Internationales Buffet</strong><br>
          Wie gewohnt kochen wir euch mit den Teilnehmenden zusammen leckere Speisen aus verschiedenen Ländern - immer ein grossartiger Schmaus, den man nicht verpassen sollte ;-)<br>
          <br>
          <strong>Open Stage</strong><br>
          Die Open Stage lädt ein, eine eigene kleine Darbietung zum besten zu geben. Einzelne Deutschtreff-Teilnehmer*innen werden singen und musizieren und man darf spontan einen Teil dazu beitragen. Instrumente und Mikrofone sind vorhanden - Wir freuen uns wenn du mitmachst!
          <h2>Ort</h2>
          <b>Kulturhaus Tommasini</b><br>
          Seonerstrasse 23<br>
          5600 Lenzburg<br>
          <a class="btn btn-ve btn-sm" href="#location" v-scroll-to="'#location'">Anreise</a>
          <hr>
          <strong>Eintritt:</strong>
          Kollekte
          <br>
          Bitte diese Veranstaltung teilen und weitersagen! Wir freuen uns schon riesig auf euch und auf ein weiteres, unvergessliches Fest &lt;3
          <br>
          Euer Verein Vo Ergendwo
          <br>
          <a href="https://www.facebook.com/events/542108523319764/" class="text-ve">
            <i class="fab fa-facebook"></i>
            Facebook-Event</a>
        </b-col>
      </b-row>
    </div>
  </section>
</template>

<script>
export default {
  name: "party",
  data() {
    return {};
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
img {
  max-height: 80vh;
}

.party-text {
  font-size: 18pt;
}
table tr td:nth-child(2n) {
  text-align: left;
}

table tr td:nth-child(2n-1) {
  text-align: right;
}
</style>
