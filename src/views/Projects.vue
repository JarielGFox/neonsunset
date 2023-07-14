<script>
export default {
    name: 'Progetti',
    mounted() {
        document.title = 'Progetti';
    }
}
</script>

<template>
    <!-- Projects Section-->
    <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-pink-light d-inline">Progetti</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Project Card 1-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">Stopwatch JS</h2>
                                    <p>Una progressive web app, costituita da logiche JavaScript, struttura HTML e librerie
                                        CSS Bootstrap. Può essere utilizzata comodamente da Smartphone per misurare il
                                        proprio tempo in competizioni sportive o per giochi da tavolo che utilizzano la
                                        misurazione del tempo.</p>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                            </div>
                        </div>
                    </div>
                    <!-- Project Card 2-->
                    <div class="card overflow-hidden shadow rounded-4 border-0">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">Parla-m(A)i</h2>
                                    <p>Una progressive web app di un assistente virtuale a cui chiedere domande che hanno
                                        necessità di risposte semplici ed immediate. Utilizza l'API (application programming
                                        interface) di OpenAI. Oltre ad interagirvi via chat, potete anche utilizzare il
                                        microfono del vostro dispositivo, sia mobile che desktop.</p>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                            </div>
                        </div>
                    </div>
                    <!-- Project Card 3-->
                    <div class="mt-5 card overflow-hidden shadow rounded-4 border-0">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">Presto.it (per Aulab)</h2>
                                    <p> Presto.it è un sito di annunci di compravendita. Grazie all'implementazione
                                        di un algoritmo di Google ed un pannello di controllo dedicato per
                                        la figura del "revisore" (una persona che potrà collaborare con lo staff del
                                        portale) si potrà evitare l'inserimento di immagini a contenuto
                                        inappropriato. Presto.it è stata sviluppato principalmente con Laravel,
                                        framework PHP. Per la dinamicità delle pagine è stato implementato JavaScript
                                        e l'uso di Laravel Livewire, oltre all'utilizzo di fogli di stile CSS. </p>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                            </div>
                        </div>
                    </div>
                    <!-- Project Card 4-->
                    <div class="mt-5 card overflow-hidden shadow rounded-4 border-0">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">Indovina AI</h2>
                                    <p> Altro progetto che utilizza l'API (application programming
                                        interface) di OpenAI. Nato da una challenge di un'edizione di una coding-week di
                                        Boolean, questa simil progressive web app restituirà una celebre frase o
                                        caratteristica di un personaggio reale o di fantasia e l'utente dovrà provare ad
                                        indovinare di chi si tratta. Ci sono massimo 3 tentativi di risposta per poter
                                        indovinare il personaggio famoso. </p>
                                </div>
                                <img class="img-fluid" src="https://dummyimage.com/300x400/343a40/6c757d" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to action section-->
    <section class="py-5">
        <div class="container px-5">
            <div class="text-center">
                <h4 class="display-4 fw-bolder mb-4 text-pink-light">Interessatə ?</h4>
                <h4 class="display-4 fw-bolder mb-4 text-pink-light">Collaboriamo insieme allora!</h4>
                <router-link :to="{ name: 'contacts' }"
                    class="btn btn-cta btn-lg px-5 py-3 fs-6 fw-bolder mb-3 mb-sm-3">Contattami
                </router-link>
            </div>
        </div>
    </section>
</template>

<style>
@media (max-width: 768px) {
    .d-flex {
        flex-direction: column;
    }

    .img-fluid {
        width: 100%;
        height: auto;
    }
}
</style>