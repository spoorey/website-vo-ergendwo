<template>
  <section>
    <div  class="container">
    <span id="helper_info" class="nav-anchor"></span>
    <h2 class="text-center">Mitmachen</h2>
    <p class="lead text-center"><strong>Du willst Geflüchteten helfen?</strong><strong class="text-danger"> Wir suchen dich!</strong></p>
    <!--<img src="../assets/helper-1.jpeg" class="img-fluid float-left d-inline d-lg-none">-->
    <p>
      <img src="../assets/helper.jpg" class="img img-fluid rounded m-2 d-none d-lg-block" style="max-width: 33%; float: left;">
      <img src="../assets/helper.jpg" class="img img-fluid rounded m-2 d-none d-md-block d-lg-none" style="max-width: 50%; float: left;">
      <img src="../assets/helper.jpg" class="img img-fluid rounded d-block d-md-none" style="float: left;">
      Wir organisieren jeden Dienstagabend einen Deutschtreff im Tommasini Lenzburg, bei dem Geflüchtete und Einheimische zusammen lernen, spielen und Freundschaften knüpfen können. Dabei steht vor allem eine lockere Atmosphäre im Vordergrund, in der es nicht in erster Linie um Schule geht, sondern wo man sich gegenseitig unterstützen, voneinander lernen und zusammen eine gute Zeit haben kann.
      <br>
      Wenn DU also daran interessiert bist, dich unverbindlich ehrenamtlich zu betätigen und dabei viele neue Gesichter kennen zu lernen, dann bist du bei uns genau richtig. Komm doch einfach mal vorbei oder melde dich bei uns via FB-Nachricht oder E-Mail!
      <br>
    </p>
    <b-row>
      <b-col cols="12" md="8">
        <p>
          <strong>Wann und Wo?</strong><br>
          Dienstag von 18.00 - 20.00 Uhr<br>
          Tommasini Lenzburg<br>
          Seonerstrasse 23<br>
          5600 Lenzburg
        </p>
      </b-col>
      <b-col cols="12" md="4">
        <a href="#contact" v-scroll-to="'#contact'"  class="btn btn-info btn-lg"><i class="fas fa-phone"></i> {{ t('nav_info_contact') }} </a>
        <a href="#location" v-scroll-to="'#location'"  class="btn btn-info btn-lg"><i class="fa fa-route"></i> {{ t('nav_location') }} </a>
        <br>
        <a href="https://chat.whatsapp.com/DugWnrcoqY46CThJOcGuE0" target="_blank" class="btn btn-success"><i class="fab fa-whatsapp"></i> Whatsapp-Gruppe für Helfende beitreten</a>
      </b-col>
    </b-row>
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
