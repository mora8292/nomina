let date = new Date();
let output = String(date.getFullYear()).padStart(2, '0') + '-' + String(date.getMonth() + 1).padStart(2, '0') + '-' + '0' + date.getDate();
console.log(output);

        let a=document.querySelector(".fecha")

        a.setAttribute("max",output)


