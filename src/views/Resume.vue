<script>
import Education from '../components/resume/Education.vue';
import Skills from '../components/resume/Skills.vue';
import Work from '../components/resume/Work.vue';

export default {
    components: {
        Education, Skills, Work
    },
    name: 'Curriculum',
    mounted() {
        document.title = 'CV - Riepilogo';
    }
}
</script>

<template>
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-light">Competenze</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Work Section-->
                <section>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h2 class="text-light fw-bolder mb-0">Esperienze</h2>
                        <!-- Link al cv-->
                        <a class="btn btn-primary px-4 py-3"
                            href="https://www.canva.com/design/DAE94LaqBAQ/NkxIeJRMhdnLVBF7h952dA/view?utm_content=DAE94LaqBAQ&utm_campaign=designshare&utm_medium=link&utm_source=publishsharelink"
                            target="_blank">
                            <div class="d-inline-block bi bi-download me-2"></div>
                            Visualizza Curriculum
                        </a>
                    </div>
                </section>
                <!-- Experience Section-->
                <Work />
                <!-- Education Section-->
                <Education />
                <!-- Divider-->
                <div class="pb-5"></div>
                <!-- Skills Section-->
                <Skills />
            </div>
        </div>
    </div>
</template>

<style></style>