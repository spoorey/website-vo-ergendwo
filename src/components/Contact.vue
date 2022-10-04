<template>
  <section>
    <div  class="container">
    <span id="contact" class="nav-anchor"></span>
    <h2 class="text-center">
      {{ t('Kontakt') }}
    </h2>
    <b-row>
      <b-col cols="6" sm="4">
        <strong>{{ t('Ansprechsperson') }}:</strong><br>
        David Spörri<br>
        <a href="mailto:info@voergendwo.ch" class="text-ve">info@voergendwo.ch</a>
      </b-col>
      <b-col cols="6" sm="4">
        <strong>{{ t('Soziale Medien') }}:</strong><br>
        <a href="https://www.instagram.com/voergendwo/" target="_blank" class="text-ve">
          <i class="fab fa-md fa-instagram"></i>
          Instagram
        </a>
        <br>
        <a href="https://www.facebook.com/Deutschtreff-vo-ergendwo-352137405242164" target="_blank" class="text-ve">
          <i class="fab fa-facebook fa-md"></i>
          Facebook
        </a>
      </b-col>
      <b-col cols="12" sm="4">
        <strong>{{ t('Für schriftliche Anfragen') }}:</strong><br>
        Kulturhaus Tommasini<br>
        Verein "Vo Ergendwo"<br>
        Seonerstrasse 23<br>
        5600 Lenzburg
      </b-col>
    </b-row>
    <h4 class="title-ve">{{ t('Kontaktformular') }}</h4>
    <b-row>
      <b-col cols="12">
        <p class="">
          {{ t('Du kannst uns eine Nachricht mit dem Kontaktformular senden. Gib deine E-Mail Adresse oder deine Telefonnummer an, und wir kontaktieren dich.') }}
        </p>
        <b-form @submit="onSubmit" v-if="!showSuccessText">
          <b-row>
            <b-col cols="12" md="4">
              <b-form-group id="input-group-name"
                :label="t('Name')" label-for="input-name">
                <b-form-input
                  id="input-name"
                  v-model="form.name"
                  required
                ></b-form-input>
              </b-form-group>
            </b-col>
            <b-col cols="12" md="4">
              <b-form-group
                id="input-group-email"
                :label="t('E-Mail Adresse')"
                label-for="input-email"
              >
                <b-form-input
                  id="input-email"
                  v-model="form.email"
                  type="email"
                ></b-form-input>
              </b-form-group>
          </b-col>
          <b-col cols="12" md="4">
            <b-form-group
              id="input-group-phone"
              :label="t('Telefon-Nummer')"
              label-for="input-phone"
            >
              <b-form-input
                id="input-phone"
                v-model="form.phone"
                type="tel"
              ></b-form-input>
            </b-form-group>
          </b-col>
          </b-row>
          <b-form-group id="input-group-message"
            :label="t('Nachricht')" label-for="input-message">
            <b-form-textarea
              id="input-message"
              v-model="form.message"
              rows="6"
              required
            ></b-form-textarea>
          </b-form-group>
          <b-button type="submit" variant="primary" :disabled="!formValid" >{{ t('Absenden') }}</b-button>
        </b-form>
        <div class="alert alert-success mt-2" v-if="showSuccessText">{{ t('Deine Nachricht wurde versendet. Wir melden uns per Telefon oder E-Mail bei dir.') }}</div>
      </b-col>
    </b-row>
    </div>
  </section>
</template>

<script>
import axios from 'axios'
import config from '../../config/local.json'

export default {
  name: 'contact',
  computed: {
    formValid: function () {
      return (this.form.email || this.form.phone) && this.form.name && this.form.message
    }
  },
  data () {
    return {
      form: {
        email: '',
        phone: '',
        name: '',
        message: ''
      },
      showSuccessText: false
    }
  },
  methods: {
    onSubmit (evt) {
      evt.preventDefault()

      var url = config.slack_hook_url;
      var payloadText = '*Neue Anfrage via Kontaktformular von "' + this.form.name + '":*' + '\n' +
        '*Telefon:* ' + this.form.phone + '\n' +
        ' *Email:* ' + this.form.email + '\n\n' + this.form.message

      if ('' != this.form.email) {
        var text =
        'Hallo ' + this.form.name +
        '\nDu hast uns über das Kontaktformular von voergendwo.ch eine Nachricht geschickt.\n\n\n';
        text = encodeURIComponent(text);
        var mailto =
        this.form.email + '?body='
        + text + '&Subject='
        + encodeURIComponent('Deine Anfrage über voergendwo.ch');
        payloadText += '\n<mailto:' + mailto + '|E-Mail Beantworten>';
      }
      axios.post(url, JSON.stringify({text: payloadText}))
        .then(response => {
          this.showSuccessText = true
        })
        .catch(e => {
          console.error(e)
        })
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
</style>
