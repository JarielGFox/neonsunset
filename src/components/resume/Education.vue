<script>
import ResumeTitle from '../resume/typography/ResumeTitle.vue';

export default {
    components: { ResumeTitle }
}
</script>

<template>
    <section>
        <ResumeTitle title="Istruzione e formazione" />
        <!-- Education Card 0-->
        <div class="card shadow border-0 rounded-4 mt-4 mb-5">
            <div class="card-body p-5">
                <div class="row align-items-center gx-5">
                    <div class="col text-justify fs-5 mb-4 mb-lg-0">
                        <div class="bg-light p-4 rounded-4">
                            <div class="text-secondary fw-bolder mb-2">Dic 2023 - Mar 2024</div>
                            <div class="mb-2">
                                <div class="small fw-bolder">Corso formazione React JS</div>
                                <div class="small text-muted">CGM Consulting, Torino, IT</div>
                            </div>
                            <div class="fst-italic">
                                <div class="small text-muted">Front end developing</div>
                                <div class="small text-muted">Corso formazione professionale</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 fs-5">
                        <div>Introduzione a React, Rivisitazione concetti javascript, Componenti, gestire stati ed
                            eventi, renderizzare liste, stilizzare componenti. Tecniche di ottimizzazione, class-based
                            components, animazioni. Debugging di una React App, hooks usePortal ed useRef. HTTP
                            Requests, Routing system. Gestione effetti collaterali, hook useReducer, context api,
                            progetto pratico. Testing (Jest + Cypress), basi di Typescript.</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Education Card 1-->
        <div class="card shadow border-0 rounded-4 mt-4 mb-5">
            <div class="card-body p-5">
                <div class="row align-items-center gx-5">
                    <div class="col text-left fs-5 mb-4 mb-lg-0">
                        <div class="bg-light p-4 rounded-4">
                            <div class="text-secondary fw-bolder mb-2">Nov 2022 - Apr 2023</div>
                            <div class="mb-2">
                                <div class="small fw-bolder">Aulab Hackademy</div>
                                <div class="small text-muted">Bari, IT</div>
                            </div>
                            <div class="fst-italic">
                                <div class="small text-muted">Full stack developer</div>
                                <div class="small text-muted">Corso formazione professionale</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 fs-5">
                        <div>Sviluppo Web Frontend e Backend. Metodologie Agili applicate allo sviluppo software con
                            framework Laravel. Un percorso di formazione della durata di sei mesi, basato sui principali
                            linguaggi di sviluppo web e un sistema di apprendimento peer to peer. Il corso è stato
                            completato lavorando su un progetto finale svolto in team, attraverso metodologia agile
                            SCRUM,
                            con backlog e user story da rispettare.</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Education Card 2-->
        <div class="card shadow border-0 rounded-4 mb-5">
            <div class="card-body p-5">
                <div class="row align-items-center gx-5">
                    <div class="col text-left text-lg-start fs-5 mb-4 mb-lg-0">
                        <div class="bg-light p-4 rounded-4">
                            <div class="text-secondary fw-bolder mb-2">Lug 2020</div>
                            <div class="mb-2">
                                <div class="small fw-bolder">BI Level C2 Certificate</div>
                                <div class="small text-muted">British Institutes</div>
                            </div>
                            <div class="fst-italic">
                                <div class="small text-muted">Lingua Inglese</div>
                                <div class="small text-muted">Attestato competenze</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 fs-5">
                        <div>English Language reading and writing, English Language listening, English language
                            understanding and knowledge, English language speaking.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow border-0 rounded-4">
            <div class="card-body p-5">
                <div class="row align-items-center gx-5">
                    <div class="col text-left fs-5 text-lg-start mb-4 mb-lg-0">
                        <div class="bg-light p-4 rounded-4">
                            <div class="text-secondary fw-bolder mb-2">Set 2003 - Lug 2008</div>
                            <div class="mb-2">
                                <div class="small fw-bolder">Diploma Liceo Classico</div>
                                <div class="small text-muted">Liceo GB Vico, Nocera Inferiore</div>
                            </div>
                            <div class="fst-italic">
                                <div class="small text-muted">Voto 82/100</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 fs-5">
                        <div>Lingua Italiana, Letteratura Latina e Greca, Geologia e Chimica, Storia e Filosofia,
                            Matematica, Storia dell'Arte, Letteratura e Lingua Inglese, Letteratura e Lingua Francese,
                            Diritto, economia ed Educazione civica.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style></style>