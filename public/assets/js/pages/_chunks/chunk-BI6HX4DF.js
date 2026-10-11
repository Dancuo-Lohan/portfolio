// coriander-version:a2f4fc3931bff86cf3d8f2eef052a00d6be195a04fe8a5075e8935fb555817aa
document.addEventListener("DOMContentLoaded",()=>{let e=document.getElementById("wcb");if(e){let t=()=>{let n=e.querySelector("#wcb_g")?.textContent?.trim()??"";e.hidden=!/^\d+(?:\.\d+)?g of CO2\/view$/.test(n)};new MutationObserver(t).observe(e,{childList:!0,characterData:!0,subtree:!0}),t()}});
