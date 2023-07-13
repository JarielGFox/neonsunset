<script>
import axios from 'axios';

export default {
    data() {
        return {
            name: '',
            email: '',
            phone: '',
            message: '',
            submitSuccess: false,
            submitError: false,
            errorMessage: ''
        }
    },
    methods: {
        async submitForm() {
            try {
                const response = await axios.post('src/php/mail.php', {
                    name: this.name,
                    email: this.email,
                    phone: this.phone,
                    message: this.message
                });
                if (response.data === 'Message has been sent') {
                    this.submitSuccess = true;
                } else {
                    this.submitError = true;
                    this.errorMessage = 'Error: ' + response.data;
                }
            } catch (error) {
                console.error(error);
                this.submitError = true;
                this.errorMessage = 'Error sending message!';
            }
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
</template>

<style></style>