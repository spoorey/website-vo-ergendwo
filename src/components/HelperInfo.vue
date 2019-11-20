<template>
  <section>
    <div  class="container">
    <span id="helper_info" class="nav-anchor"></span>
    <h2 class="text-center">Mitmachen</h2>
    <div class="alert alert-ve text-center" v-if="this.getLang != 'de'">
      {{ t('This section is addressed to people interested in helping us conduct the language meet-up, and other activities. Therefore, it is only available in german.') }}
    </div>
    <p class="lead text-center"><strong>Du willst Geflüchteten helfen?</strong><strong class="text-ve"> Wir suchen dich!</strong></p>
    <!--<img src="../assets/helper-1.jpeg" class="img-fluid float-left d-inline d-lg-none">-->
    <div class="text-center">
      <p>
      Wenn Du uns unterstützen möchtest, gibt es verschiedene Möglichkeiten. Eine grosse Hilfe ist es, wenn Du unsere Aktivitäten aktiv verfolgst, an unseren Anlässen teilnimmst oder vielen Menschen von unserem Angebot erzählst.
      </p><p>
      Falls Dir das zu wenig ist, kannst Du auch Helfer*in oder Gönner*in Vo Ergendwo werden.
      </p>
      <div>
        <b-button v-b-toggle.collapse-philosophy variant="ve">
          <i class="fa fa-plus when-closed"></i>
          <i class="fa fa-minus when-opened"></i>
          Unsere Philosophie
        </b-button>
        <b-collapse id="collapse-philosophy" class="mt-2">
          <b-card>
            <div class="card-text text-left">
              <p>
                Die grosse Flüchtlingsbewegungen der Jahre 2015-2017 in Europa führten zu ungewohnten Herausforderungen.
                Es war klar, dass es verschiedenste Meinungen und Ideen gab, wie die Gesellschaft damit umgehen sollte.
                Oftmals kamen Forderungen auf, dass entweder diese oderjene sich besser integrieren sollten oder der Staat die Integration mehr unterstützen müsse.
                Es gab an allen Ecken viel Verbesserungspotential.
                Im Zentrum aller Aufmerksamkeit stand aber immer der grosse Begriff “Integration”.
              </p>
              <p>
                Wir vom Verein «Vo Ergendwo» bekamen diese Diskussionen natürlich auch mit.
                Uns interessierte aber weniger der Begriff Integration an sich, sondern eigentlich ganz andere Dinge.
                Wir fragten uns, wie man geflüchteten Menschen in der Schweiz helfen kann und welche unterschiedlichen Menschen nun unsere neuen Mitbürgerinnen und Mitbürger wurden.
                Voller Neugier und Tatendrang startete dann dieses Projekt, welches ziemlich schnell ein klares Konzept entwickelte, das in dieser Form bis anhin in keinen anderen Integrationsprojekten umgesetzt wurde.
                Der Deutschtreff soll genau diese Neugier und Entdeckerlust wecken, Menschen zusammenbringen und Dialoge ermöglichen.
              </p>
              <p>
                Wir möchten nicht, dass es bei Integration vor allem darum geht, wer zu wenig macht.
                Wir möchten nicht, dass das Hauptaugenmerk darauf liegt, welche Geflüchteten zu wenig Deutschlernen oder sich zu wenig anpassen.
                Wir möchten uns aber auch nicht auf den Bund verlassen müssen, wenn es darum geht, eine vielseitige Gesellschaft und ein gutes Miteinander zu ermöglichen.
                Wir sind vielmehr überzeugt, dass jede_r von uns seinen Teil dazu beitragen kann, eine heterogene und lebendige Gesellschaft zu sein.
                Zu einer solchen Gesellschaft gehört unserer Meinung nach auch, dass neue Einflüsse, Ideen, Kulturen und Menschen darin aufgenommen werden können.
                Im Endeffekt geht es uns also um das Miteinander. Es ist unsere Aufgabe, mit unseren Mitmenschen auszukommen, also schauen wir doch, dass wir diese Mitmenschen kennenlernen, Barrieren brechen und zusammen weiter kommen.
                Auf dieser Überzeugung ist auch der Deutschtreff aufgebaut. Unser Deutschtreff soll in erster Linie ein Ort sein, an dem Leute zusammenkommen. Wie unser Name „Vo Ergendwo“ bereits verrät, spielt es dabei keine Rolle, woher jemand kommt, sondern es reicht die Freude darüber, dass man sich kennen lernt.
                Unser Deutschtreff soll alles sein können und nichts sein müssen. Gemeinsam lernen wir Deutsch, spielen Fussball, hüten Kinder, plaudern über den Alltag, essen unbekannte Mahlzeiten, gehen auf Ausflüge usw. Man hilft sich gegenseitig und alle profitieren davon. Auch im alltäglichen Leben lässt sich das umsetzen, im Bewusstsein, dass Integration weniger diskutiert, sondern einfach mehr gelebt werden muss.
              </p>
            </div>
          </b-card>
        </b-collapse>
      </div>
    </div>
    <br>
    <div>
      <h3 class="title-ve">Helfer*in Vo Ergendwo</h3>
      <img src="../assets/helper.jpg" class="img img-fluid rounded col-lg-4 col-md-6 p-0 mr-3" style="float: left;">
      Wir sind immer auf der Suche nach neuen Gesichtern, die bereit sind, in der Freizeit ihren Mitmenschen zu helfen.
      Bei uns ist jeder willkommen, der offen ist, tolle neue Menschen kennen lernen und der einen Teil zu einer bunteren Gesellschaft beitragen möchte.
      <br>
      Wir helfen Geflüchteten beim Deutschlernen, Verstehen von Behördeninformationen, bei der Stellensuche, und wo nötig bei anderen Herausforderungen.
      <br>
      <em>Interessiert?</em>
      Komm doch einfach mal im Deutschtreff vorbei oder melde Dich bei uns.
      <br>
      <div style="display: inline-table;">
        <strong class="text-ve">Wann und Wo?</strong><br>
        Dienstag von 18.00 - 20.00 Uhr<br>
        Tommasini Lenzburg<br>
        Seonerstrasse 23<br>
        5600 Lenzburg
        <div>
          <a href="#contact" v-scroll-to="'#contact'"  class="btn btn-ve">
            <i class="fas fa-phone"></i> {{ t('Kontakt') }}
          </a>
          <a href="#location" v-scroll-to="'#location'"  class="btn btn-ve">
            <i class="fa fa-route"></i> {{ t('Anreise') }}
          </a>
          <a href="https://chat.whatsapp.com/DugWnrcoqY46CThJOcGuE0" target="_blank" class="btn btn-success">
            <i class="fab fa-whatsapp"></i> WhatsApp-Gruppe für Helfende
          </a>
        </div>
      </div>

      <div class="mt-2">
        <h3 class="title-ve">Gönner*in Vo Ergendwo</h3>
        <img src="../assets/benefactor.jpg" class="img img-fluid rounded col-lg-4 col-md-6 p-0" style="float: right;">
        Natürlich kann man uns auch gerne finanziell unterstützen.<br>
        Die Möglichkeit, Gönner*in Vo Ergendwo zu werden, ist gemacht für Menschen, die sich gerne für andere einsetzen, um ihnen einen leichteren Start in der Schweiz zu ermöglichen, gleichzeitig aber keine Zeit haben, sich aktiv am Deutschtreff zu beteiligen.
        <br>
        Mit einem Beitrag von mindestens 10 Franken kannst Du einen Teil dazu beitragen, den gewohnten Betrieb des Deutschtreffs Vo Ergendwo aufrecht zu erhalten.
        <br>
        Das Geld wird für Fixkosten wie Miete, Lern- und Büromaterial, Verpflegung und Reisespesen für die Teilnehmer*innen benötigt.
        Mit zusätzlichen Geldern könnten wir ausserdem weiterhin Ausflüge, spezielle Anlässe und interkulturelle Begegnungen organisieren. 
        Besonders toll wäre für uns eine monatliche Zahlung, da wir durch eine solche Regelmässigkeit ein vorausplanendes Budget erstellen können.<br>
        Wir können Dir gerne eine Spendenbestätigung zukommen lassen.<br>
        <a href="#contact" v-scroll-to="'#contact'"  class="btn btn-ve">
          <i class="fas fa-phone"></i> Kontaktiere uns
        </a>
        <p>
          <strong class="text-ve">Bankdaten:</strong><br>
          Hypothekarbank Lenzburg AG<br>
          5600 Lenzburg<br>

          Deutschtreff Vo Ergendwo<br>
          Gartenstrasse 10<br>
          5600 Lenzburg<br>

          CH02 0830 7000 2865 1630 6
          <br>
          <a :href="`${publicPath}download/Einzahlungsschein.pdf`" target="_blank" class="text-ve">
            <i class="fa fa-download"></i>
            <i class="fa fa-file-pdf"></i>
            Einzahlungsschein (PDF)
          </a>
        </p>
      </div>
    </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'helper-info',
  data () {
    return {
      publicPath: process.env.BASE_URL
    }
  },
  computed: {
    getLang: function() {
      return this.$translate.lang;
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="less">
section * {
  overflow: hidden;
}

a.btn {
  margin-bottom: 5px;
}

.collapsed > .when-opened,
:not(.collapsed) > .when-closed {
  display: none;
}
</style>
