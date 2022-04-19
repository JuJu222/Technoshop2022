<template>
    <div class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Scan QR Code</h4>
                    <button type="button" class="btn btn-sm" v-on:click="closeModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ExampleComponent></ExampleComponent>
                </div>
                <div class="modal-footer">
                    <button @click="closeModal()" class="block w-full text-center mb-4 border rounded-md px-3 sm:px-16 py-3 bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-700 focus:ring-opacity-50">Close</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import ExampleComponent from "./ExampleComponent";

export default {
    name: 'ScannerModal',
    components: {ExampleComponent},
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
