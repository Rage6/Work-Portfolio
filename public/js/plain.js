console.log("This worked");

// Adjusts the 1vh size for mobile devices
let vhInteger = window.innerHeight;
let vh = (vhInteger * 0.01) + "px";
let fullHeight = vhInteger + "px";
document.documentElement.style.setProperty('--vh', vh);
document.documentElement.style.setProperty('height', fullHeight);