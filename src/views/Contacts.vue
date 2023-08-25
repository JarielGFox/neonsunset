<script>
import MailForm from '../components/contacts/MailForm.vue'

export default {
    components: {
        MailForm,
    },
    name: 'Contacts',
    mounted() {
        document.title = 'Contattami';
    }
}
</script>

<template>
    <section class="py-5">
        <div class="container-md px-5">
            <!-- Contact Section-->
            <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center feature mb-3">
                        <h1 class="me-3 fw-bolder">Contattami</h1>
                        <i class="text-sea bi bi-envelope fs-5"></i>
                    </div>
                    <div class="lead fw-normal text-muted mb-3">Usa il form sottostante per scrivermi un messaggio oppure
                        scrivi a: <span class="text-sea">
                            <a href="mailto:crudelegio@gmail.com" target="_blank">crudelegio@gmail.com</a>
                        </span>
                    </div>
                    <!-- Form con phpMailer -->
                    <MailForm />
                </div>
            </div>
        </div>
    </section>
</template>

<style></style>