<template>
    <div class="selectedContent" v-bind:data-detailid="id">
        <div class="exitRow">
            <img src="/images/circle-close.svg"
                @click="hideDetails(id)"
                v-bind:data-detailid="id"
            >
        </div>
        <div class="scrollDetails">
            <div class="selectedLogo">
                <img :src="img_path">
            </div>
            <div class="selectedTitle">
                {{ name }}
            </div>
            <div class="selectedLinks">
                <a :href=site_url target="_blank">
                    <div>
                        THE SITE
                    </div>
                </a>
                <a :href=code_url target="_blank">
                    <div>
                        THE CODE
                    </div>
                </a>
            </div>
            <div class="selectedDescription">
                {{ description }}
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: {
            id: String,
            name: String,
            description: String,
            code_url: String,
            site_url: String,
            img_path: String
        },
        methods: {
            hideDetails: function (projectId) {
                // removes the current details
                var dataAttribute = '[data-detailid="' + projectId + '"]';
                var currentDetail = document.querySelector(dataAttribute);
                currentDetail.style.display = "none";
            }
        }
    }
</script>