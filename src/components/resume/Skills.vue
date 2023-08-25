<script>
import B from './typography/img/B.svg';
import CS from './typography/img/CS.svg';
import H from './typography/img/H.svg';
import J from './typography/img/J.svg';
import L from './typography/img/L.svg';
import M from './typography/img/M.svg';
import P from './typography/img/P.svg';
import RE from './typography/img/RE.svg';
import SA from './typography/img/SA.svg';
import V from './typography/img/V.svg';

import ResumeTitle from '../resume/typography/ResumeTitle.vue';


export default {
    data() {
        return {
            B,
            CS,
            H,
            J,
            L,
            M,
            P,
            RE,
            SA,
            V,
        };
    },
    components: { ResumeTitle }
}

</script>

<template>
    <section>
        <ResumeTitle class="mb-4" title="Competenze" />
        <!-- Skillset Card-->
        <div class="card shadow border-0 rounded-4 mb-5 fs-5">
            <div class="card-body p-5">
                <!-- Professional skills list-->
                <div class="mb-5">
                    <div class="d-flex align-items-center mb-4">
                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i
                                class="bi bi-tools"></i></div>
                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Competenze Attitudinali</span></h3>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                        <div class="col mb-4 mb-md-0">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                Rispetto delle scadenze
                            </div>
                        </div>
                        <div class="col mb-4 mb-md-0">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                Resistenza allo stress
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                Problem solving
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3">
                        <div class="col mb-4 mb-md-0">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                Attenzione ai dettagli
                            </div>
                        </div>
                        <div class="col mb-4 mb-md-0">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                Lavoro in team
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                Orientato al risultato
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Languages list-->
                <div class="mb-5">
                    <div class="d-flex align-items-center mb-4">
                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i
                                class="bi bi-code-slash"></i></div>
                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Linguaggi e Tecnologie</span></h3>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                        <div class="col mb-4 mb-md-0">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                <img :src="H" class="me-1" width="30" height="30" />
                                HTML
                            </div>
                        </div>
                        <div class="col mb-4 mb-md-0">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                <img :src="CS" class="me-1" width="30" height="30" />
                                CSS
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                <img :src="J" class="me-1" width="30" height="30" />
                                JavaScript
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3">
                        <div class="col mb-4 mb-md-0">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                <img :src="SA" class="me-1" width="30" height="30" />
                                SASS
                            </div>
                        </div>
                        <div class="col mb-4 mb-md-0">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                <img :src="P" class="me-1" width="30" height="30" />
                                PHP
                            </div>
                        </div>
                        <div class="col">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                <img :src="M" class="me-1" width="30" height="30" />
                                MySQL
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-0">
                    <div class="d-flex align-items-center mb-4">
                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i
                                class="bi bi-braces"></i></div>
                        <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Frameworks e Librerie</span></h3>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 mb-4">
                        <div class="col mb-4 mb-md-0">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                <img :src="L" class="me-1" width="30" height="30" />
                                Laravel
                            </div>
                        </div>
                        <div class="col mb-4 mb-md-0">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                <img :src="V" class="me-1" width="30" height="30" />
                                Vue.js
                            </div>
                        </div>
                        <div class="col mb-4 mb-md-0">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                <img :src="RE" class="me-1" width="30" height="30" />
                                React
                            </div>
                        </div>
                        <div class="col mb-4 mb-md-0">
                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                <img :src="B" class="me-1" width="30" height="30" />
                                Bootstrap
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style></style>

