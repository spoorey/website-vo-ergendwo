<template>
  <section>
    <span id="about" class="nav-anchor"></span>
    <div class="about">
        <h1> {{ t('Wir sind alle \"Vo Ergendwo\"') }}</h1>
        <img class="pencil" src="../assets/pencil.png">
        <p>{{ t('Deutschtreff für Geflüchtete - jeden zweiten Dienstag 18:00 bis 20:00 im Tommasini Lenzburg') }}</p>
        <p>{{ t('Der Deutschtreff findet an folgenden Daten statt:') }}</p>
        <strong>
        <ul>
          <li v-for="date in dates" v-bind:key="date">
            {{ date }}
          </li>
        </ul>
        </strong>
        <a class="btn btn-ve btn-lg" href="#contact" v-scroll-to="'#contact'" >
          <i class="fa fa-phone"></i> 
          {{ t('Kontakt') }}
        </a>
        <a class="btn btn-ve btn-lg" href="#location" v-scroll-to="'#location'" >
          <i class="fa fa-route"></i> 
          {{ t('Anreise') }}
        </a>
    </div>
  </section>
</template>

<script>

export default {
  name: 'about',
  computed: {
    getLang: function() {
      return this.$translate.lang;
    }
  },
  data () {
    return {
      dates: []
    }
  },
  created: function() {
    fetch('dates.json')
        .then(r => r.json())
        .then(data => {
          this.dates=data;
        });
  }
}
</script>
<style scoped lang="less">
.about {
  text-align: center;
  padding: 5%;
  display: block;
  background-image: url("../assets/about.jpg");
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
  background-size: cover;
  color: #222;

  h1 {
    line-height: normal;
    margin-bottom: 2px;
  }

  img.pencil  {
    max-height: 30px;
    max-width: 50%;
  }

  p {
    font-size: 1.1rem;
  }
  ul {
    list-style: none;
  }
}
</style>
