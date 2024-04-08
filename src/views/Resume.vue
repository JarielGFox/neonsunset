<script>
import Education from '../components/resume/Education.vue';
import Skills from '../components/resume/Skills.vue';
import Work from '../components/resume/Work.vue';

import ResumeTitle from '../components/resume/typography/ResumeTitle.vue';

export default {
    components: {
        Education, Skills, Work, ResumeTitle
    },
    name: 'Curriculum',
    mounted() {
        document.title = 'CV - Riepilogo';
    }
}
</script>

<template>
    <div class="container px-5 my-5">
        <div class="text-center mb-3">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-light">Curriculum Vitae</span></h1>
            <div class="text-light fs-5 mb-5">(Cliccare sui bottoni per espandere le sezioni)</div>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-12 col-xl-12 col-xxl-12">


                <p class="d-flex gap-1">
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#esperienze"
                        aria-expanded="false" aria-controls="esperienze">
                        Esperienze
                    </button>
                </p>
                <div class="collapse" id="esperienze">
                    <!-- CV Section -->
                    <section>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <ResumeTitle class="mb-4" title="Esperienze" />
                            <!-- Link al cv-->
                            <a class="btn btn-cv btn-cta fs-6"
                                href="https://www.canva.com/design/DAE94LaqBAQ/NkxIeJRMhdnLVBF7h952dA/view?utm_content=DAE94LaqBAQ&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink"
                                target="_blank">
                                <div class="d-inline-block bi bi-download me-2"></div>
                                Download CV
                            </a>
                        </div>
                    </section>

                    <!-- Experience Section-->
                    <Work />
                </div>

                <p class="d-flex gap-1">
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#istruzione"
                        aria-expanded="false" aria-controls="istruzione">
                        Istruzione e formazione
                    </button>
                </p>
                <div class="collapse" id="istruzione">

                    <!-- Education Section-->
                    <Education />
                </div>

                <p class="d-flex gap-1 mt-3">
                    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#competenze"
                        aria-expanded="false" aria-controls="competenze">
                        Competenze
                    </button>
                </p>
                <div class="collapse" id="competenze">
                    <!-- Skills Section-->
                    <Skills />
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.btn-cv {
    width: fit-content;
    word-wrap: nowrap;
    padding: 14px 14px;
}
</style>