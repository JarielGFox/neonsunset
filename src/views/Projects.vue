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
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Project Card 1-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder">Stopwatch JS</h2>
                                    <p>Una progressive web app, costituita da logiche JavaScript, struttura HTML e librerie CSS Bootstrap. Può essere utilizzata comodamente da Smartphone per misurare il proprio tempo in competizioni sportive o per giochi da tavolo che utilizzano la misurazione del tempo.</p>
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
                                    <p>Una progressive web app di un assistente virtuale a cui chiedere domande che hanno necessità di risposte semplici ed immediate. Utilizza l'API (application programming interface) di OpenAI. Oltre ad interagirvi via chat, potete anche utilizzare il microfono del vostro dispositivo, sia mobile che desktop.</p>
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
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, dignissimos. Nesciunt, pariatur nemo? Totam blanditiis ipsum architecto molestias quisquam eius, aspernatur accusamus omnis ipsam voluptas distinctio doloribus possimus quos ab quae vero provident modi assumenda! Totam, in quisquam? Commodi quam sequi consectetur! Quidem commodi provident eligendi eveniet pariatur omnis dolorem.</p>
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
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, dignissimos. Nesciunt, pariatur nemo? Totam blanditiis ipsum architecto molestias quisquam eius, aspernatur accusamus omnis ipsam voluptas distinctio doloribus possimus quos ab quae vero provident modi assumenda! Totam, in quisquam? Commodi quam sequi consectetur! Quidem commodi provident eligendi eveniet pariatur omnis dolorem.</p>
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
    <section class="py-5 bg-secondary bg-gradient text-white">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.html">Contact me</a>
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