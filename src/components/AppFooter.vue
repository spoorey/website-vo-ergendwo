<template>
  <footer class="bg-dark text-white vertical-center">
    <b-row>
    <b-col cols="8" sm="6">
      <strong>{{ t('Freunde von irgendwo') }}</strong>
      <ul class="footer-list">
        <li><a href="https://www.contakt-citoyennete.ch/" target="_blank">conTAKT-citoyenneté</a></li>
        <li><a href="https://www.tomm.ch/" target="_blank">Tommasini</a></li>
        <li><a href="http://www.netzwerk-asyl.ch/" target="_blank">Netzwerk Asyl</a></li>
      </ul>
    </b-col>
    <b-col cols="4" sm="6" class="text-right">
      Deutschtreff: Vo Ergendwo {{ new Date().getFullYear() }}
      <br>
      Website: David Spörri
      
        <div>
          <a href="#impressum" v-b-modal.impressum>Impressum</a>

          <b-modal id="impressum" title="Impressum" size="lg" hide-footer>
            <h2>Kontaktadresse</h2>
            <p>
              Verein "Vo Ergendwo"
              <br>Seonerstrasse 23
              <br>5600 Lenzburg
              <br>Schweiz
              <br>info@voergendwo.ch
            </p>

            <h2>Vertretungsberechtigte Personen</h2>
            <p>Florian Kroneberger</p>

            <h2>Haftungsausschluss</h2>
            <p>Der Autor übernimmt keinerlei Gewähr hinsichtlich der inhaltlichen Richtigkeit, Genauigkeit, Aktualität, Zuverlässigkeit und Vollständigkeit der Informationen. Haftungsansprüche gegen den Autor wegen Schäden materieller oder immaterieller Art, welche aus dem Zugriff oder der Nutzung bzw. Nichtnutzung der veröffentlichten Informationen, durch Missbrauch der Verbindung oder durch technische Störungen entstanden sind, werden ausgeschlossen. Alle Angebote sind unverbindlich. Der Autor behält es sich ausdrücklich vor, Teile der Seiten oder das gesamte Angebot ohne gesonderte Ankündigung zu verändern, zu ergänzen, zu löschen oder die Veröffentlichung zeitweise oder endgültig einzustellen.</p>

            <h2>Haftung für Links</h2>
            <p>Verweise und Links auf Webseiten Dritter liegen ausserhalb unseres Verantwortungsbereichs Es wird jegliche Verantwortung für solche Webseiten abgelehnt. Der Zugriff und die Nutzung solcher Webseiten erfolgen auf eigene Gefahr des Nutzers oder der Nutzerin.</p>

            <h2>Urheberrechte</h2>
            <p>Die Urheber- und alle anderen Rechte an Inhalten, Bildern, Fotos oder anderen Dateien auf der Website gehören ausschliesslich dem Verein "Vo Ergendwo" oder den speziell genannten Rechtsinhabern. Für die Reproduktion jeglicher Elemente ist die schriftliche Zustimmung der Urheberrechtsträger im Voraus einzuholen.</p>

            <h2>Quelle</h2>
            <p>
              Dieses Impressum wurde am 29.01.2020 mit dem Impressum Generator der Webdesign Agentur
              <a href="https://webkoenig.ch/" target="_blank">Webkönig</a> erstellt. Die Agentur Webkönig übernimmt keine Haftung.
            </p>
          </b-modal>
        </div>
    </b-col>
    </b-row>
  </footer>
</template>

<script>
export default {
  name: 'app-footer',
  data () {
    return {}
  }
}
</script>
<style lang="less">
footer {
  padding: 10px 10px;
  overflow: hidden;
}

.footer-list a {
  color: #ffffff;
  &:hover {
    color: #ff2020;
  }
}
</style>
