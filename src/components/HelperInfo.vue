<template>
  <section>
    <div  class="container">
    <span id="helper_info" class="nav-anchor"></span>
    <h2 class="text-center">Mitmachen</h2>
    <p class="lead text-center"><strong>Du willst Geflüchteten helfen?</strong><strong class="text-danger"> Wir suchen dich!</strong></p>
    <!--<img src="../assets/helper-1.jpeg" class="img-fluid float-left d-inline d-lg-none">-->
    <p class="lead text-center">
      Wenn Du uns unterstützen möchtest, gibt es verschiedene Möglichkeiten. Eine grosse Hilfe ist es, wenn Du unsere Aktivitäten aktiv verfolgst, an unseren Anlässen teilnimmst oder vielen Menschen von unserem Angebot erzählst.
      <br>
      Falls Dir das zu wenig ist, kannst Du auch Helfer*in oder Gönner*in Vo Ergendwo werden.
    </p>
    <div>
      <h3>Helfer*in Vo Ergendwo</h3>
      <img src="../assets/helper.jpg" class="img img-fluid rounded m-2 d-none d-lg-block" style="max-width: 33%; float: left;">
      <img src="../assets/helper.jpg" class="img img-fluid rounded m-2 d-none d-md-block d-lg-none" style="max-width: 50%; float: left;">
      <img src="../assets/helper.jpg" class="img img-fluid rounded d-block d-md-none" style="float: left;">
      Wir sind immer auf der Suche nach neuen Gesichtern, die bereit sind, in der Freizeit ihren Mitmenschen zu helfen.
      Bei uns ist jeder willkommen, der offen ist, tolle neue Menschen kennen lernen und der einen Teil zu einer bunteren Gesellschaft beitragen möchte.
      Interessiert?
      Komm doch einfach mal im Deutschtreff vorbei oder melde Dich bei uns.
      <br>
      <div style="display: inline-table;">
        <strong>Wann und Wo?</strong><br>
        Dienstag von 18.00 - 20.00 Uhr<br>
        Tommasini Lenzburg<br>
        Seonerstrasse 23<br>
        5600 Lenzburg
        <div>
          <a href="#contact" v-scroll-to="'#contact'"  class="btn btn-info">
            <i class="fas fa-phone"></i> {{ t('nav_info_contact') }}
          </a>
          <a href="#location" v-scroll-to="'#location'"  class="btn btn-info">
            <i class="fa fa-route"></i> {{ t('nav_location') }}
          </a>
          <a href="https://chat.whatsapp.com/DugWnrcoqY46CThJOcGuE0" target="_blank" class="btn btn-success">
            <i class="fab fa-whatsapp"></i> Whatsapp-Gruppe für Helfende beitreten
          </a>
        </div>
      </div>
      <hr>
      <div class="mt-2">
        <h3>Gönner*in Vo Ergendwo</h3>
        <img src="../assets/benefactor.jpg" class="img img-fluid rounded m-2 d-none d-lg-block" style="max-width: 33%; float: right;">
        <img src="../assets/benefactor.jpg" class="img img-fluid rounded m-2 d-none d-md-block d-lg-none" style="max-width: 50%; float: right;">
        <img src="../assets/benefactor.jpg" class="img img-fluid rounded d-block d-md-none" style="float: right;">
        <br>
        Natürlich kann man uns auch gerne finanziell unterstützen.<br>
        Die Möglichkeit, Gönner*in Vo Ergendwo zu werden, ist gemacht für Menschen, die sich gerne für andere einsetzen, um ihnen einen leichteren Start in der Schweiz zu ermöglichen, gleichzeitig aber keine Zeit haben, sich aktiv am Deutschtreff zu beteiligen.
        <br>
        Mit einem Beitrag von mindestens 10 Franken kannst Du einen Teil dazu beitragen, den gewohnten Betrieb des Deutschtreffs Vo Ergendwo aufrecht zu erhalten.
        <br>
        Das Geld wird für Fixkosten wie Miete, Lern- und Büromaterial, Verpflegung und Reisespesen für die Teilnehmer*innen benötigt.
        Mit zusätzlichen Geldern könnten wir ausserdem weiterhin Ausflüge, spezielle Anlässe und interkulturelle Begegnungen organisieren. 
        Besonders toll wäre für uns eine monatliche Zahlung, da wir durch eine solche Regelmässigkeit ein vorausplanendes Budget erstellen können
      </div>
    </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'helper-info',
  data () {
    return {}
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
section p {
  overflow: hidden;
}


a.btn {
  margin-bottom: 5px;
}
</style>
