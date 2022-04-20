<template>
    <div id="reader" style="width: 100%"></div>
</template>

<script>
    import {Html5QrcodeScanner} from "html5-qrcode";

    function onScanSuccess(decodedText, decodedResult) {
        // handle the scanned code as you like, for example:
        console.log(`Code matched = ${decodedText}`, decodedResult);
        window.location.href = decodedText;
    }

    function onScanFailure(error) {
        // handle scan failure, usually better to ignore and keep scanning.
        // for example:
        console.warn(`Code scan error = ${error}`);
    }

    export default {
        mounted() {
            console.log('Component mounted.');
            let html5QrcodeScanner = new Html5QrcodeScanner(
                "reader",
                { fps: 10, qrbox: {width: 250, height: 250, facingMode: "environment"} },
                /* verbose= */ false);
            html5QrcodeScanner.render(onScanSuccess, onScanFailure);
        }
    }
</script>

<style>
    #reader {
        border-radius: 10px;
    }

    #reader button {
        background-color: #4a3f76;
        color: white;
        padding: 10px 30px;
        margin: 8px;
        border-radius: 10px;
    }
</style>
