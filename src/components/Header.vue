<script>
</script>

<template>
    <header class="py-5">
        <div class="container px-5 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-5">
                    <!-- Header text content-->
                    <div class="text-center text-xxl-start">
                        <div class="badge badge-sea text-white mb-4">
                            <div class="text-uppercase">Junior Web Developer &middot; Full Stack </div>
                        </div>
                        <div class="fs-3 fw-light text-pink-light">Coding with <span
                                class="text-pink"><strong>passion</strong></span> to
                        </div>
                        <h1 class="display-3 fw-bolder mb-5"><span class="h1-custom d-inline">fuel your digital
                                journey</span></h1>
                        <div class="grid gap-3 justify-content-sm-stretch justify-content-xxl-start mb-3">
                            <router-link :to="{ name: 'resume' }"
                                class="btn btn-cta btn-lg px-5 py-3 fs-6 fw-bolder mb-3 mb-sm-3 g-col-sm-6 g-col-sm-12">Competenze</router-link>
                            <router-link :to="{ name: 'projects' }"
                                class="btn btn-cta btn-lg px-5 py-3 fs-6 fw-bolder g-col-sm-6 g-col-sm-12">Progetti</router-link>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7">
                    <!-- Header picture-->
                    <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                        <div class="profile bg-gradient-primary-to-secondary">
                            <img class="profile-img img-fluid rounded" src="../assets/img/synthlaptop.png" width="500"
                                height="500" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<style></style>