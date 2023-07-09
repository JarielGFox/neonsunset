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
                    <span class="lead fw-normal text-muted mb-0">Lavoriamo insieme!</span>
                </div>
                <!-- Fare il form funzionante col back-end -->
                <MailForm />
            </div>
        </div>
    </section>
</template>

<style></style>