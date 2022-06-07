const titleContainers=document.querySelector("#buttons-menu")
const btnCurt= document.querySelector("#btn-curt");
const btnPayrrolls= document.querySelector("#btn-information");
const btnCalculation= document.querySelector("#btn-calculation");






// Cambio de paginas
btnCurt.addEventListener("click", ()=>{
    location.href="crut-nominas.html"
})
btnPayrrolls.addEventListener("click", ()=>{
    location.href="informationNomina.html"
})
// btnCalculation.addEventListener("click", ()=>{
//     location.href="calculationNomina.html"
// })



// titleContainers.addEventListener("click", e=>{
//     if(e.target.classLits.contains(`btn-curt`)){
//         location.href="crut-nominas.html";
//     }
//     else if(e.target.classLits.contains(`btn-information`)){
//         location.href="informationNomina.html";
//     }
//     else if(e.target.classLits.contains(`btn-calculation`)){
//         location.href="calculationNomina.html";
//     }
// })



