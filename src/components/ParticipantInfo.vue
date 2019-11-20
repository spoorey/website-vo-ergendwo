<template>
  <section>
    <div  class="container">
    <span id="participant_info" class="nav-anchor"></span>
    <h2 class="text-center">{{ t('Infos für Teilnehmende') }}</h2>
    <p style="white-space: pre-line">{{ t('Schön, bist Du auf uns aufmerksam geworden! Der Deutschtreff bietet eine lockere Atmosphäre, wo Spiel und Spass genauso viel Platz haben wie das Deutschlernen und die Hausaufgabenhilfe.\nNeben Hilfe beim Deutschlernen, können wir dich auch beim Schreiben von Bewerbungen, beim Verstehen von Behörden-Briefen, und anderen Herausforderungen unterstützen. Das Angebot ist für alle Teilnehmer und Teilnehmerinnen gratis. Wenn Du interessiert bist, dann komm einfach mal vorbei.') }}</p>
    <div class="text-center">
      <a href="#contact" v-scroll-to="'#contact'" class="btn btn-ve"><i class="fas fa-phone"></i> {{ t('Kontakt') }}</a>
      <a href="#location" v-scroll-to="'#location'"  class="btn btn-ve"><i class="fa fa-route"></i> {{ t('Anreise') }}</a>
    </div>
    <div class="text-center">
      <a href="https://chat.whatsapp.com/0TtLehzVly6IyQ9JLFrBUP" target="_blank" class="btn btn-success">
        <i class="fab fa-whatsapp"></i>
        {{ t('WhatsApp-Gruppe für Teilnehmende') }}
      </a>
    </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'about',
  data () {
    return {}
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>
</style>
