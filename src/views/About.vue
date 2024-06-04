<script>
export default {
  name: 'About',
  data() {
    return {
      show: false,
    }
  },
  mounted() {
    document.title = 'About Me';
  }
}
</script>

<template>
  <section>
    <div class="container px-5">
      <div class="row gx-5">
        <div class="col-md">
          <div class="text-pink-light my-1 text-center">
            <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Me</span></h2>
            <p class="lead fw-light mb-4">Giovanni Crudele - <em>Where passion meets code.</em></p>
          </div>
          <div class="text-pink-light my-1 text-justify">
            <p class="text-pink-light text-justify">Web developer junior motivato e con capacità nel creare soluzioni
              innovative.
              Possiedo una solida base nello sviluppo front-end e back-end, sfruttando competenze in tecnologie <span
                class="text-pink"><strong> PHP, MySQL, JavaScript, HTML5, CSS3</strong></span> e conosco l'utilizzo di
              framework e librerie tra cui <span class="text-pink"><strong>Vue.js, ReactJS e jQuery </strong></span> per
              il
              front-end, <span class="text-pink"><strong>Laravel PHP framework</strong></span> per il back-end.
              Dimostro abilità nel gestire progetti complessi e mi impegno per l'apprendimento continuo
              nel campo dello sviluppo web. Dotato di conoscenza <u>approfondita</u> della <strong>lingua
                Inglese</strong> per poter lavorare nel mercato internazionale.
            </p>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center text-center fs-2 gap-3">
        <a class="text-sea d-block" href="https://linkedin.com/in/giocrudele" title="Linkedin" target="_blank"
          alt="Linkedin"><i class="bi bi-linkedin"></i>
        </a>
        <a class="text-sea d-block" href="https://github.com/JarielGFox" title="GitHub" target="_blank" alt="GitHub"><i
            class="bi bi-github"></i>
        </a>
      </div>
    </div>
  </section>
</template>

<style></style>
