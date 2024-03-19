console.log("This worked");

// Adjusts the 1vh and total height sizes for mobile devices
let vhInteger = window.innerHeight;
let vh = (vhInteger * 0.01) + "px";
let fullHeight = vhInteger + "px";
document.documentElement.style.setProperty('--vh', vh);
document.documentElement.style.setProperty('--height', fullHeight);

// Adjusts the 1vw and total width sizes for mobile devices
let vwInteger = window.innerWidth;
let vw = (vwInteger * 0.01) + "px";
let fullWidth = vwInteger + "px";
document.documentElement.style.setProperty('--vw', vw);
document.documentElement.style.setProperty('--width', fullWidth);