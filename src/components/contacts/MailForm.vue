<script>
import axios from 'axios';
import ConfirmModal from "./ConfirmModal.vue";

export default {
    data() {
        return {
            name: '',
            email: '',
            phone: '',
            message: '',
            submitSuccess: false,
            submitError: false,
            errorMessage: '',
            showModal: false
        }
    },
    components: {
        //modale di conferma a mail inviata
        ConfirmModal,
    },
    methods: {
        async submitForm() {
            // post form submitted
            // console.log('Submitting form...');
            try {
                const formData = new FormData();
                formData.append('name', this.name);
                formData.append('email', this.email);
                formData.append('phone', this.phone);
                formData.append('message', this.message);

                const response = await axios.post('http://localhost:8000/src/php/mail2.php', formData);
                //responso a buon fine
                // console.log('Response received:', response);

                if (response.data.includes('Message has been sent')) {
                    this.showModal = true;
                }
            } catch (error) {
                // messaggio di errore
                console.error('Error:', error);
                this.submitError = true;
            }
        },
        closeModal() {
            this.showModal = false;
        }
    }
}
</script>

<template>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-8 col-xl-6">
            <form id="contactForm" @submit.prevent="submitForm">
                <!-- Name input-->
                <div class="form-floating mb-3">
                    <input class="form-control" id="name" type="text" placeholder="Enter your name..." v-model="name"
                        required />
                    <label for="name">Full name</label>
                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                </div>
                <!-- Email address input-->
                <div class="form-floating mb-3">
                    <input class="form-control" id="email" type="email" placeholder="name@example.com" v-model="email"
                        required />
                    <label for="email">Email address</label>
                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                </div>
                <!-- Phone number input-->
                <div class="form-floating mb-3">
                    <input class="form-control" id="phone" type="tel" placeholder="(+39) XXX XXXXXXX" v-model="phone"
                        required />
                    <label for="phone">Phone number</label>
                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                </div>
                <!-- Message input-->
                <div class="form-floating mb-3">
                    <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..."
                        style="height: 10rem" v-model="message" required></textarea>
                    <label for="message">Message</label>
                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                </div>
                <!-- Submit success message-->
                <div v-if="submitSuccess" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                    </div>
                </div>
                <!-- Submit error message-->
                <div v-if="submitError" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">{{ errorMessage }}</div>
                </div>
                <!-- Submit Button-->
                <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Confirm Modal -->
    <confirm-modal v-if="showModal" @close="closeModal"></confirm-modal>
</template>

<style></style>