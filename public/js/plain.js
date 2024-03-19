console.log("This worked");

// Adjusts the 1vh size for mobile devices
let vhInteger = window.innerHeight * 0.01;
let vh = vhInteger + "px";
let fullHeight = (vhInteger * 100) + "px";
document.documentElement.style.setProperty('--vh', vh);
document.documentElement.style.setProperty('height', fullHeight);