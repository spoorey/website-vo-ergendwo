<template>
  <section>
    <div class="container">
      <span id="party" class="nav-anchor"></span>
      <span id="fest" class="nav-anchor"></span>
      <h2 class="text-center">{{ t('Jubiläumsfest am 22. Februar') }}</h2>

      <b-row>
        <b-col cols="12" sm="6" lg="4" class="text-center">
          <img src="../assets/fest-1.png" class="img img-fluid p-0" />
        </b-col>

        <b-col cols="12" sm="6" lg="4" class="text-center party-text">
          <strong>
            {{ t('Feier am 22. Februar mit uns das 4-Jährige Jubiläum des Deutschtreffs') }}
          </strong>
          <br>
          <br>
            {{ t('Neben Essen aus aller Welt erwarten dich eine Open Stage, Bands und DJs.') }}
          <br>
          <br>
          <strong>{{ t('Ort') }}:</strong> Tommasini Lenzburg
          <a class="btn btn-ve btn-sm" href="#location" v-scroll-to="'#location'">{{ t('Anreise') }}</a>
          <br>
          <strong>{{ t('Zeit') }}:</strong> {{ t('22. Februar 2020 ab 18 Uhr') }}
          <br>
          <br>
          <span class="text-ve">{{ t('Weitere Informationen folgen bald') }}</span>
        </b-col>
        
        <b-col cols="4" class="text-center">
          <img src="../assets/fest-2.png" class="img img-fluid p-0 d-none d-lg-block" />
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
</style>
