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
    <section class="py-1">
        <div class="container px-5 mb-3">

            <!-- Titolo Section -->
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-pink-light d-inline">Progetti</span></h1>
                <div class="text-light fs-5 mb-5">(Cliccare sui bottoni per espandere le sezioni)</div>
            </div>


            <!-- Collapse button 2024 -->
            <p class="d-flex justify-content-center gap-1">
                <button class="btn btn-primary mb-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse2024" aria-expanded="false" aria-controls="collapse2024">
                    Progetti 2024
                </button>
            </p>

            <!-- Content collapse 2024 -->
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="collapse" id="collapse2024">
                        <!-- Project Card 0 2024 -->

                        <!-- Project Card 0 2024 -->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Account Manager</h2>
                                        <p>Web App strutturata con front-end in ReactJS e backend in PHP (tramite
                                            metodologia di programmazione ad oggetti) e MySQL come DB relazionale. Un
                                            utente può iscriversi e creare un proprio account ed entrare all'interno di
                                            una propria dashboard. Verrà inserito un sistema di ruoli ed un piccolo
                                            backoffice per gestire le utente tramite un pannello di amministrazione.
                                            <span class="text-pink fw-bold">Visualizza repository -></span> <a
                                                href="https://github.com/JarielGFox/new-account-manager"
                                                target="_blank">New Account Manager (Work in Progress)</a>
                                        </p>
                                    </div>
                                    <img class="img-fluid w-50" src="../assets/img/accountmanager.png" alt="..." />
                                </div>
                            </div>
                        </div>

                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">React Essentials</h2>
                                        <p>Single Page Application sviluppata per familiarizzare con i concetti base di
                                            React. Il progetto presenta una struttura organizzata atta a comprendere
                                            l'alberatura dei componenti, vi è l'utilizzo di concetti chiave tra cui le
                                            props, lo la gestione dello stato (tramite lo hook useState) e la logica
                                            della riusabilità dei componenti.
                                            <span class="text-pink fw-bold">Visualizza repository -></span> <a
                                                href="https://github.com/JarielGFox/react_basics/"
                                                target="_blank">Reactive Essentials</a>
                                        </p>
                                    </div>
                                    <img class="img-fluid w-50" src="../assets/img/reactessentials.jpg" alt="..." />
                                </div>
                            </div>
                        </div>

                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Investment Planner</h2>
                                        <p>Single Page Application sviluppata per simulare un piano investimenti.
                                            L'utente inserisce un ammontare di denaro iniziale e una percentuale di
                                            interesse. Il sistema calcola il valore di investimento in base al tempo
                                            trascorso e lo restituisce all'utente.
                                            <span class="text-pink fw-bold">Visualizza repository -></span> <a
                                                href="https://github.com/JarielGFox/investment_planner"
                                                target="_blank">Reactive Investments</a>
                                        </p>
                                    </div>
                                    <img class="img-fluid w-50" src="../assets/img/investplanner.jpg" alt="..." />
                                </div>
                            </div>
                        </div>

                        <!-- Project Card 1 2024 -->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">React Quiz Time</h2>
                                        <p>Piccola web app che simula un quiz a tempo sulle nozioni basilari di React.
                                            Progetto di metà corso, sfrutta i concept base di hooks come useState,
                                            useRef ed useEffect.
                                            <span class="text-pink fw-bold">Visualizza repository -></span> <a
                                                href="https://github.com/JarielGFox/react_quiz_time/"
                                                target="_blank">React Quiz Time</a>
                                        </p>
                                    </div>
                                    <img class="img-fluid w-50" src="../assets/img/reactquiz.jpg" alt="..." />
                                </div>
                            </div>
                        </div>

                        <!-- Project Card 2 2024 -->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">React Food App</h2>
                                        <p>Un'applicazione web intuitiva che simula una pagina food ordering, basata su
                                            React. Gli utenti possono selezionare il proprio prodotto, aggiungerlo al
                                            carrello, e procedere all'ordine. L'applicazione ha anche una lista di
                                            ordinazioni completa di facile tracciamento e gestione. Sfrutta hooks come
                                            useReducer, useEffect ed useRef per le modali.
                                            <span class="text-pink fw-bold">Visualizza repository -></span> <a
                                                href="https://github.com/JarielGFox/food_order_app/"
                                                target="_blank">React Food order App</a>
                                        </p>
                                    </div>
                                    <img class="img-fluid w-50" src="../assets/img/foodorderapp.jpg" alt="..." />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Collapse button 2022 / 2023 -->
            <p class="d-flex justify-content-center gap-1">
                <button class="btn btn-primary mb-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Progetti 2022 / 2023
                </button>
            </p>

            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">

                    <!-- Inizio collapse -->
                    <div class="collapse" id="collapseExample">
                        <!-- Project Card 0-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Reactive Notes</h2>
                                        <p>Una web app che permette di conservare note personali nella propria
                                            cronologia
                                            del browser. Consente di ordinare le note in base a tre opzioni,
                                            modificare
                                            le
                                            note in base alle proprie esigenze, esportare le proprie note e
                                            successivamente importarle
                                            (su un altro dispositivo, usando l'applicazione). Utilizza React
                                            come
                                            tecnologia e non è provvista di backend (sfrutta la localStorage)
                                            <span class="text-pink fw-bold">Provala qui -></span> <a
                                                href="https://neonsunset.altervista.org/react/notepad-app/"
                                                target="_blank">Reactive Notes</a>
                                        </p>
                                    </div>
                                    <img class="img-fluid" src="../assets/img/reactivenotes.png" alt="..." />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 1-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Stopwatch JS</h2>
                                        <p>Una progressive web app, costituita da logiche JavaScript, struttura
                                            HTML e
                                            librerie
                                            CSS Bootstrap. Può essere utilizzata comodamente da Smartphone per
                                            misurare
                                            il
                                            proprio tempo in competizioni sportive o per giochi da tavolo che
                                            utilizzano
                                            la
                                            misurazione del tempo. <span class="text-pink fw-bold">Provalo qui
                                                -></span>
                                            <a href="https://neonsunset.altervista.org/pwa/stopwatch/"
                                                target="_blank">Stopwatch</a>
                                        </p>
                                    </div>
                                    <img class="img-fluid" src="../assets/img/stopwatch.jpg" alt="Stopwatch JS" />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 2-->
                        <div class="card overflow-hidden shadow rounded-4 border-0">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Parla-m(A)i</h2>
                                        <p>Una progressive web app con cui poter parlare ed interagire. Utilizza
                                            l'API
                                            (application
                                            programming interface) di OpenAI. Oltre ad interagirvi via chat,
                                            potete
                                            anche
                                            utilizzare il microfono del vostro dispositivo, sia mobile che
                                            desktop.
                                            <span class="text-pink fw-bold">Provala qui -></span> <a
                                                href="https://neonsunset.altervista.org/pwa/parlaAI/"
                                                target="_blank">Parla-m(A)i</a>

                                        <p class="text-danger">ATTENZIONE: Serve necessariamente una
                                            API KEY regolarmente acquistata sul sito di <a href="https://openai.com/"
                                                target="_blank">Open
                                                AI</a>. Inoltre al momento la app funziona solo su browser
                                            <strong>Google
                                                Chrome e Microsoft Edge</strong>.
                                        </p>
                                        </p>
                                    </div>
                                    <img class="img-fluid" src="../assets/img/parlaAI.jpg" alt="..." />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 3-->
                        <div class="mt-5 card overflow-hidden shadow rounded-4 border-0">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Presto.it (per Aulab)</h2>
                                        <p> Presto.it è un sito di annunci. Grazie all'implementazione
                                            di un algoritmo di Google ed un pannello dedicato alla figura del
                                            "revisore"
                                            (un
                                            collaboratore dello staff) si potrà evitare l'inserimento di
                                            immagini a
                                            contenuto
                                            inappropriato. Sviluppato con <strong>Laravel</strong>, framework
                                            PHP. Per
                                            la
                                            dinamicità delle pagine
                                            è stato implementato JavaScript e l'uso di Laravel Livewire, oltre
                                            all'utilizzo
                                            di
                                            fogli di stile CSS.</p>
                                        <p>
                                            <span class="text-pink fw-bold">Visualizza codice -></span> <a
                                                href="https://github.com/JarielGFox/presto.it"
                                                target="_blank">Presto.it</a>
                                        </p>
                                    </div>
                                    <img class="img-fluid" src="../assets/img/presto.jpg" alt="..." />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 4-->
                        <div class="mt-5 card overflow-hidden shadow rounded-4 border-0">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder">Previsioni del tempo</h2>
                                        <p> Una semplice progressive web app che fornisce lo stato meteo della
                                            locazione
                                            specifica (tramite sistema di geolocalizzazione) ed in base alle
                                            previsioni
                                            vigenti
                                            vi fornisce qualche consiglio utile su come gestire il clima. La PWA
                                            sfrutta
                                            l'API
                                            gratuita di <a href="https://openweathermap.org/"
                                                target="_blank">OpenWeatherMap</a>. Full responsive sia da
                                            dispositivo
                                            fisso
                                            che
                                            mobile.
                                        </p>
                                        <p>
                                            <span class="text-pink fw-bold">Provala qui -></span>
                                            <a href="https://neonsunset.altervista.org/pwa/wforecast/"
                                                target="_blank">Weather
                                                Forecast
                                            </a>
                                        </p>
                                    </div>
                                    <img class="img-fluid" src="../assets/img/wforecast.jpg" alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to action section-->
    <section class="py-1">
        <div class="container px-5">
            <div class="text-center">
                <h4 class="display-4 fw-bolder mb-4 text-pink-light">Vuoi saperne di più?</h4>
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