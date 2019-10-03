<template>
  <section>
    <div  class="container">
    <span id="location" class="nav-anchor"></span>
    <h2 class="text-center">
      {{ t('location_title') }}
    </h2>
    <p>
      {{ t('location_text') }}
    </p>
    <b-row class="text-left">
      <b-col cols="12" sm="6" lg="3">
        <h4>{{ t('location_address') }}</h4>
        <p>
          <b>Kulturhaus Tommasini</b><br>
          Seonerstrasse 23<br>
          5600 Lenzburg<br>
        </p>
        <p>
          <a
          class="btn btn-info"
          target="_blank"
          href="https://www.google.com/maps/dir//Tommasini+Lenzburg,+Seonerstrasse+23,+5600+Lenzburg/@47.3832605,8.1733335,17z/">
            <i class="fa fa-map-marked-alt"></i>
            {{ t('location_maps') }}
          </a>
        </p>
      </b-col>
      <b-col cols="12" sm="6" lg="3">
        <h4>{{ t('location_public_transport') }}</h4>
        <b>{{ t('location_from_lb') }}</b><br>
        {{ t('location_bus_line') }}<br>
        {{ t('location_bus_stop') }}<br><br>
        <b>{{ t('location_note') }}:</b> {{ t('location_note_discount') }}
      </b-col>
      <b-col cols="12" lg="6">
        <iframe
        class="osm"
        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
        src="https://www.openstreetmap.org/export/embed.html?bbox=8.16856670418929%2C47.38080953346451%2C8.182363987361898%2C47.38565488973912&amp;layer=mapnik&amp;marker=47.383232267270344%2C8.175465345775592">
        </iframe>
      </b-col>
    </b-row>
  </div>
  </section>
</template>

<script>
import Vue from 'vue'

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
