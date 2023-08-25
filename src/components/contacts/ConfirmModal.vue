<script>
export default {
    methods: {
        closeModal() {
            this.$emit('close');
        },
    },
};
</script>

<template>
    <div class="modal fade show" tabindex="-1" style="display: block;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content custom-modal-content">
                <div class="modal-header custom-modal-header">
                    <h5 class="modal-title">Perfetto!</h5>
                </div>
                <div class="modal-body custom-modal-body">
                    <p>Email inviata con successo! Appena possibile sarete ricontattati.</p>
                </div>
                <div class="modal-footer custom-modal-footer">
                    <button type="button" class="btn btn-danger" @click="closeModal">Chiudi</button>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.custom-modal-content {
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.custom-modal-header {
    background-color: #f0f0f0;
    border-bottom: 1px solid #e0e0e0;
}

.custom-modal-body {
    background-color: #ffffff;
}

.custom-modal-footer {
    background-color: #f0f0f0;
    border-top: 1px solid #e0e0e0;
}
</style>
