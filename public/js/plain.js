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

// var allProjects = document.querySelectorAll(`[data-id]`);
// for (var num = 0; num < allProjects.length; num++) {
//   var id = allProjects[num].dataset.id;
//   document.querySelector(`[data-id="`+ id + `"]`).addEventListener('click', function(id) {
//     console.log(id);
//   });
//   // console.log(document.querySelector(`[data-id="`+ id + `"]`));
// };

// // Scrolls project list up, incrementally
// var workScrollUp = document.querySelector("#scrollProjectUp");
// workScrollUp.addEventListener("click", ()=>{
//     console.log("This worked");
// });