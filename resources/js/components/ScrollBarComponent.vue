<template>
    <div class="scrollBar">
        <div class="scrollBttns scrollUp" @click="scrollUp">
            <svg 
                xmlns="http://www.w3.org/2000/svg" 
                viewBox="0 0 64 40" >
                <polyline 
                    fill="none" 
                    stroke="#E7B85A" 
                    stroke-width="8" 
                    stroke-linecap="round" 
                    stroke-linejoin="round" 
                    points="4, 35 28, 4 56, 35 " />
            </svg>
        </div>
        <div class="scrollBttns scrollDown" @click="scrollDown">
            <svg 
                xmlns="http://www.w3.org/2000/svg" 
                viewBox="0 0 64 40" >
                <polyline 
                    fill="none" 
                    stroke="#E7B85A" 
                    stroke-width="8" 
                    stroke-linecap="round" 
                    stroke-linejoin="round" 
                    points="4, 35 28, 4 56, 35 " />
            </svg>
        </div>
    </div>
</template>
<script>
    export default {
        methods: {
            scrollUp: function() {

                var listEl = document.getElementById("projectList");
                var listStyle = listEl.currentStyle || window.getComputedStyle(listEl);
                var gridGap = parseInt(listStyle["grid-gap"],10) || 0;

                var currentMarginTop = parseInt(listStyle["margin-top"],10) || 0;

                var projectEl = document.getElementsByClassName("oneProject")[0];
                var projectStyle = projectEl.currentStyle || window.getComputedStyle(projectEl);
                var marginBottom = parseInt(projectStyle["margin-bottom"],10);
                var projectHeight = projectEl.clientHeight + marginBottom + gridGap;

                listEl.style.marginTop = currentMarginTop - (projectHeight / 2) + "px";
                
            },
            scrollDown: function() {

                var listEl = document.getElementById("projectList");
                var listStyle = listEl.currentStyle || window.getComputedStyle(listEl);
                var gridGap = parseInt(listStyle["grid-gap"],10) || 0;

                var currentMarginTop = parseInt(listStyle["margin-top"],10) || 0;

                var projectEl = document.getElementsByClassName("oneProject")[0];
                var projectStyle = projectEl.currentStyle || window.getComputedStyle(projectEl);
                var marginBottom = parseInt(projectStyle["margin-bottom"],10 || 0);
                var projectHeight = projectEl.clientHeight + marginBottom + gridGap;

                listEl.style.marginTop = currentMarginTop + (projectHeight / 2) + "px";

            }
        }
    }
</script>