<template>
  <section>
    <div  class="container">
    <span id="location" class="nav-anchor"></span>
    <h2 class="text-center">
      {{ $t('location_title') }}
    </h2>
    <p>
      {{ $t('location_text') }}
    </p>
    <b-row class="text-left">
      <b-col cols="12" sm="6" lg="3">
        <h4>{{ $t('location_address') }}</h4>
        <p>
          <b>Tommasini</b><br>
          Seonerstrasse 23<br>
          5600 Lenzburg<br>
        </p>
        <p>
          <a target="_blank" href="https://www.google.com/maps/place/Tommasini+Lenzburg/@47.3832605,8.1733335,17z/data=!3m1!4b1!4m5!3m4!1s0x47901611ff5264a1:0x362b51fb25fd6495!8m2!3d47.3832605!4d8.1755222">
            <i class="fa fa-map-marked-alt"></i>
            {{ $t('location_maps') }}
          </a>
        </p>
      </b-col>
      <b-col cols="12" sm="6" lg="3">
        <h4>{{ $t('location_public_transport') }}</h4>
        <b>{{ $t('location_from_lb') }}</b><br>
        {{ $t('location_bus_line') }}<br>
        {{ $t('location_bus_stop') }}<br><br>
        <b>{{ $t('location_note') }}:</b> {{ $t('location_note_discount') }}
      </b-col>
      <b-col cols="12" lg="6">
          <gmap-map
          :center="center"
          :zoom="15"
          style="width:100%;  height: 400px;"
          >
          <gmap-marker
            :position="markerPosition"
            @click="center=markerPosition"
          ></gmap-marker>
        </gmap-map>
      </b-col>
    </b-row>
  </div>
  </section>
</template>

<script>
import * as VueGoogleMaps from 'vue2-google-maps'
import Vue from 'vue'

Vue.use(VueGoogleMaps, {
  load: {
    key: 'AIzaSyAl9t7gMtd6opV76ZTpYQ4degBu0CZ-WrE'
  }
})

export default {
  name: 'about',
  components: {VueGoogleMaps},
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
</style>
