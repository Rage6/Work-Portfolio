<template>
    <svg
    class="oneProject"
    v-bind:id="id"
    viewBox="0 0 100 100"
    xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <pattern 
            v-bind:id="`projectSquare_${id}`"
            patternUnits="userSpaceOnUse" 
            width="85" 
            height="85">
                <image 
                class="projectImg"
                v-bind:href="img_path"
                x="15" 
                y="15" 
                width="70" 
                height="70" />
            </pattern>
            <radialGradient 
            v-bind:id="`projectCircle_${id}`">
                <stop offset="97%" stop-color="rgba(11, 45, 57, 0.7)"/>
                <stop offset="97%" stop-color="#E7B85A"/>
            </radialGradient>
        </defs>
        <circle 
            @click="showDetails(id)"
            v-bind:data-logo-id="id"
            v-bind:fill="`url(#projectCircle_${id})`"
            cx="50" 
            cy="50" 
            r="50" />
        <rect 
            @click="showDetails(id)"
            v-bind:data-logo-id="id"
            x="15" 
            y="15" 
            height="70" 
            width="70" 
            v-bind:fill="`url(#projectSquare_${id})`"/>
    </svg>
</template>
<script>
    export default {
        data: function() {
            return {
                currentDetail: null
            }
        },
        props: {
            id: String,
            img_path: String,
            site_url: String
        },
        setup(props) {
            // console.log(props.id)
        },
        methods: {
            showDetails: function (projectId) {
                var emptyEl = document.getElementsByClassName("emptyContent")[0];
                emptyEl.style.display = "none";
                var allDetails = document.getElementsByClassName("selectedContent");
                for (var i = 0; allDetails.length > i; i++) {
                    var currentId = allDetails[i].dataset.detailid;
                    if (currentId == projectId) {
                        var selectAttribute = "[data-detailid='" + currentId + "']";
                        var detailEl = document.body.querySelector(selectAttribute);
                        detailEl.style.display = "block";
                    } else {
                        var selectAttribute = "[data-detailid='" + currentId + "']";
                        var detailEl = document.body.querySelector(selectAttribute);
                        detailEl.style.display = "none";
                    };
                };
            }
        }
    }
</script>