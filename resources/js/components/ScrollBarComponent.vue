<template>
    <div class="scrollBar">
        <div class="actualScrollBttns">
            <!-- Actual buttons -->
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
        <!-- Decoy buttons -->
        <div class="decoyScrollBttns">
            <div class="scrollBttns scrollBttnDecoys scrollUp">
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
            <div class="scrollBttns scrollBttnDecoys scrollDown">
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
    </div>
</template>
<script>
    export default {
        methods: {
            scrollDown: function() {

                var listBttn = document.getElementsByClassName("actualScrollBttns")[0];
                var decoyBttn = document.getElementsByClassName("decoyScrollBttns")[0];
                var listEl = document.getElementById("projectList");
                var listStyle = listEl.currentStyle || window.getComputedStyle(listEl);
                var gridGap = parseInt(listStyle["grid-gap"],10) || 0;

                var currentMarginTop = parseInt(listStyle["margin-top"],10) || 0;

                var projectEl = document.getElementsByClassName("oneProject")[0];
                var projectStyle = projectEl.currentStyle || window.getComputedStyle(projectEl);
                var marginBottom = parseInt(projectStyle["margin-bottom"],10);
                var projectHeight = projectEl.clientHeight + marginBottom + gridGap;

                var listHeight = listEl.offsetHeight; 
                var minMargin = (listHeight - projectHeight) * (-1);

                if (minMargin <= currentMarginTop) {
                    var newMarginTop = currentMarginTop - (projectHeight) + "px";
                    listEl.style.marginTop = newMarginTop;
                    listBttn.style.display = "none";
                    decoyBttn.style.display = "block";
                    setTimeout(() => {
                        listBttn.style.display = "block";
                        decoyBttn.style.display = "none";
                    }, "500"); // The timing of 0.5 seconds is related to the "transition" on the .projectList class
                };
                
            },
            scrollUp: function() {

                var listBttn = document.getElementsByClassName("actualScrollBttns")[0];
                var decoyBttn = document.getElementsByClassName("decoyScrollBttns")[0];
                var listEl = document.getElementById("projectList");
                var listStyle = listEl.currentStyle || window.getComputedStyle(listEl);
                var gridGap = parseInt(listStyle["grid-gap"],10) || 0;

                var currentMarginTop = parseInt(listStyle["margin-top"],10) || 0;

                var projectEl = document.getElementsByClassName("oneProject")[0];
                var projectStyle = projectEl.currentStyle || window.getComputedStyle(projectEl);
                var marginBottom = parseInt(projectStyle["margin-bottom"],10 || 0);
                var projectHeight = projectEl.clientHeight + marginBottom + gridGap;

                if (currentMarginTop < 0) {
                    // listEl.style.marginTop = currentMarginTop + (projectHeight) + "px";
                    var newMarginTop = currentMarginTop + (projectHeight) + "px";
                    listEl.style.marginTop = newMarginTop;
                    listBttn.style.display = "none";
                    decoyBttn.style.display = "block";
                    setTimeout(() => {
                        listBttn.style.display = "block";
                        decoyBttn.style.display = "none";
                    }, "500"); // The timing of 0.5 seconds is related to the "transition" on the .projectList class
                };

            }
        }
    }
</script>