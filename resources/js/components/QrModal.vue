<template>
    <div class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ name }}'s QR code for {{ type }}</h4>
                    <button type="button" class="btn btn-sm" v-on:click="closeModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img :src="'/img/qr/' + qrCode" alt="">
                </div>
                <div class="modal-footer">
                    <a :href="'/img/qr/' + qrCode" target="_blank" class="block w-full text-center mt-4 border rounded-md px-3 sm:px-16 py-3 bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-700 focus:ring-opacity-50">Open in new tab</a>
                    <button @click="closeModal()" class="block w-full text-center mb-4 border rounded-md px-3 sm:px-16 py-3 bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-700 focus:ring-opacity-50">Close</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'QrModal',
    props: ['name', 'type', 'qrCode'],
    data(){
        return {
            //
        }
    },
    methods: {
        closeModal() {
            this.$emit('close-modal');
        },
    },
};
</script>
<style scoped>
.modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: block;
    overflow: hidden;
    outline: 0;
    background-color: rgba(0, 0, 0, 0.6);
}
</style>
