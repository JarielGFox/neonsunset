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
                        <div class="fs-3 fw-light text-muted-custome">I can help your business to</div>
                        <h1 class="display-3 fw-bolder mb-5"><span class="h1-custom d-inline">Get online and grow
                                fast</span></h1>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                            <router-link :to="{ name: 'resume' }"
                                class="btn btn-cta btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder">Competenze</router-link>
                            <router-link :to="{ name: 'projects' }"
                                class="btn btn-cta btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder">Progetti</router-link>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7">
                    <!-- Header profile picture-->
                    <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                        <div class="profile bg-gradient-primary-to-secondary">
                            <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                            <!-- Watch a tutorial on how to do this on YouTube (link)-->
                            <img class="profile-img" src="../assets/img/synthlaptop.png" width="500" height="500"
                                alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<style></style>