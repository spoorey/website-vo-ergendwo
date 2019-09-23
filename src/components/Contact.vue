<template>
  <section>
    <div  class="container">
    <span id="contact" class="nav-anchor"></span>
    <h2 class="text-center">
      {{ $t('contact_title') }}
    </h2>
    <b-row>
      <b-col cols="6" sm="4">
        <strong>{{ $t('contact_requests') }}:</strong><br>
        Marino Galli<br>
        +41 78 856 70 07<br>
        <a href="mailto:info@vo-ergendwo.ch">info@vo-ergendwo.ch</a>
      </b-col>
      <b-col cols="6" sm="4">
        <!--<div id="fb-root"></div>-->
        <!--<div class="fb-page" data-href="https://www.facebook.com/pages/category/Nonprofit-Organization/Deutschtreff-vo-ergendwo-352137405242164/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/pages/category/Nonprofit-Organization/Deutschtreff-vo-ergendwo-352137405242164/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pages/category/Nonprofit-Organization/Deutschtreff-vo-ergendwo-352137405242164/">Deutschtreff: vo ergendwo</a></blockquote></div>
        -->
        <strong>{{ $t('contact_social') }}:</strong><br>
        <a href="https://www.instagram.com/voergendwo/" target="_blank" class="">
          <i class="fab fa-md fa-instagram"></i>
          Instagram
        </a>
        <br>
        <a href="https://www.facebook.com/Deutschtreff-vo-ergendwo-352137405242164" target="_blank" class="">
          <i class="fab fa-facebook fa-md"></i>
          Facebook
        </a>
      </b-col>
      <b-col cols="12" sm="4">
        <strong>{{ $t('contact_address') }}:</strong><br>
        Kontaktadresse von Galli? Flo?
      </b-col>
    </b-row>
    <b-row>
      <b-col cols="12">
        <b-form @submit="onSubmit">
          <b-row>
            <b-col cols="12" md="4">
              <b-form-group
                id="input-group-email"
                :label="$t('contact_form_email')"
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
              :label="$t('contact_form_phone')"
              label-for="input-phone"
            >
              <b-form-input
                id="input-phone"
                v-model="form.phone"
                type="text"
              ></b-form-input>
            </b-form-group>
          </b-col>
          <b-col cols="12" md="4">
            <b-form-group id="input-group-name"
              :label="$t('contact_form_name')" label-for="input-name">
              <b-form-input
                id="input-name"
                v-model="form.name"
                required
              ></b-form-input>
            </b-form-group>
          </b-col>
          </b-row>
          <b-form-group id="input-group-message"
            :label="$t('contact_form_message')" label-for="input-message">
            <b-form-textarea
              id="input-message"
              v-model="form.message"
              required
            ></b-form-textarea>
          </b-form-group>
          <b-button type="submit" variant="primary">{{ $t('contact_form_submit') }}</b-button>
        </b-form>
        <div class="alert alert-success mt-2" v-if="showSuccessText">{{ $t('contact_form_success') }}</div>
        -->
      </b-col>
    </b-row>
    </div>
  </section>
</template>

<script>
import axios from 'axios'

export default {
  name: 'contact',
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

      var url = 'https://hooks.slack.com/services/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'
      var payloadText = '*Neue Anfrage via Kontaktformular von "' + this.form.name + '":*' + '\n' +
        '*Telefon:* ' + this.form.phone + '\n' +
        ' *Email:* ' + this.form.email + '\n\n' + this.form.message

      axios.post(url, JSON.stringify({text: payloadText}))
        .then(response => {
          this.showSuccessText = true
        })
        .catch(e => {
          console.error(e)
        })

      alert(JSON.stringify(this.form))
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
</style>
