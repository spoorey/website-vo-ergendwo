<template>
  <section id="location" class="text-center container">
    <h2>
      Wie man uns findet
    </h2>
    <b-row class="text-left">
      <b-col cols="6" md="3">
        <h4>Adresse</h4>
        <b>Tommasini</b><br>
        Seonerstrasse 23<br>
        5600 Lenzburg
      </b-col>
      <b-col cols="6" md="3">
        <h4>Öffentlicher Verkehr</h4>
        <b>Ab Lenzburg Bahnhof</b><br>
        Buslinie 666<br>
        bis Haltestelle <em>Tommasini</em><br>
        <b>Hinweis:</b> Teilnehmenden können wir 50% der Billetkosten bezahlen!
      </b-col>
      <b-col cols="12" md="6">
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
</style>
