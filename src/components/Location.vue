<template>
  <section>
    <div  class="container">
    <span id="location" class="nav-anchor"></span>
    <h2 class="text-center">
      {{ t('Anreise') }}
    </h2>
    <p>
      {{ t('Wir sind im Tommasini in Lenzburg. Das Tommasini ist einfach mit dem ÖV, zu Fuss, mit dem Auto oder dem Velo erreichbar.\nParkplätze und Stellplätze für Velos sind verfügbar.\nZu Fuss ist das Tommasini vom Bahnhof Lenzburg in 15 Minuten erreichbar. Von Lenzburg Bahnhof fährt auch die Bus-Linie 391 nahe vorbei.') }}
    </p>
    <b-row class="text-left">
      <b-col cols="12" sm="6" lg="3">
        <h4>{{ t('Adresse') }}</h4>
        <p>
          <b>Kulturhaus Tommasini</b><br>
          Seonerstrasse 23<br>
          5600 Lenzburg<br>
        </p>
        <p>
          <a
          class="btn btn-ve"
          target="_blank"
          href="https://www.google.com/maps/dir//Tommasini+Lenzburg,+Seonerstrasse+23,+5600+Lenzburg/@47.3832605,8.1733335,17z/">
            <i class="fa fa-map-marked-alt"></i>
            {{ t('Auf Google Maps') }}
          </a>
        </p>
      </b-col>
      <b-col cols="12" sm="6" lg="3">
        <h4>{{ t('Öffentlicher Verkehr') }}</h4>
        <b>{{ t('Ab Lenzburg Bahnhof') }}</b><br>
        {{ t('Bus Linie 391') }}<br>
        {{ t('Bis Haltestelle \"Bachstrasse\"') }}<br><br>
        <b>{{ t('Hinweis') }}:</b> {{ t('Teilnehmenden können wir 50% der Billetkosten für den ÖV bezahlen.') }}
      </b-col>
      <b-col cols="12" lg="6">
        <iframe
        class="osm"
        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
        src="https://www.openstreetmap.org/export/embed.html?bbox=8.165326595044462%2C47.37834223917559%2C8.185410976147978%2C47.3880329598965&amp;layer=mapnik&amp;marker=47.38318782221019%2C8.17536878559622"
        >
        </iframe>
      </b-col>
    </b-row>
  </div>
  </section>
</template>

<script>
export default {
  name: 'about',
  data () {
    var tommLocation = { lat: 47.383298, lng: 8.175436 }
    var mapCenter = { lat: 47.386172, lng: 8.169896 }
    return {
      center: mapCenter,
      markers: [],
      places: [],
      markerPosition: tommLocation,
      currentPlace: null
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
.row > div {
  margin-bottom: 5px;
}

iframe.osm {
  border: 1px solid #ccc;
  width: 100%;
  height: 260px;
}
</style>
