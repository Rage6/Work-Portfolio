<template>
    <div class="flashMessage" v-bind:class="[showFlash ? '' : 'hideFlash']">
        <span>
            <div>
                {{ flashMessage }}
            </div>
            <div>
                <svg @click="closeFlash(showFlash)" fill="#0b2d39" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" stroke="#0b2d39" stroke-width="12.544">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                    <path d="M202.82861,197.17188a3.99991,3.99991,0,1,1-5.65722,5.65624L128,133.65723,58.82861,202.82812a3.99991,3.99991,0,0,1-5.65722-5.65624L122.343,128,53.17139,58.82812a3.99991,3.99991,0,0,1,5.65722-5.65624L128,122.34277l69.17139-69.17089a3.99991,3.99991,0,0,1,5.65722,5.65624L133.657,128Z"></path>
                    </g>
                </svg>
            </div>
        </span>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                showFlash: true
            }
        },
        mounted() {
            console.log("FlashComponent mounted");
        },
        computed: {
            flashMessage() {
                console.log(window.flashMessage);
                return window.flashMessage;
            }
        },
        methods: {
            closeFlash: function(flashStatus) {
                console.log("The flash click worked");
                if (this.showFlash == true) {
                    this.showFlash = false;
                };
            }
        }
    }
</script>