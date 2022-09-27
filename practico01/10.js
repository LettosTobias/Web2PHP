
"use strict";
console.log("asdaad");

let parrafo = document.getElementById("parrafo");
let form = document.getElementById("formulario");
form.addEventListener('submit' , async function(e){

    e.preventDefault();
    const formData = new FormData(form);
    try {
        
        let promise = await fetch('03.php' , {method:"POST" , body:formData});   
        

        if(promise.ok){
            
            let text = await promise.text();
            parrafo.innerHTML = text;
            console.log(parrafo);
        }

    } catch (error) {
        console.log(error);
    }

})




