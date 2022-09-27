
let form = document.querySelector("#formulario");
form.addEventListener('submit',enviar);

let conteiner = document.querySelector("#conteiner");

async function enviar(e) {
    e.preventDefault();
    
    let method = this.method;
    let formData = new FormData(method);
    let valor1 = formData.get('valor1');
    let valor2 = formData.get('valor2');
    let operacion = formData.get('operaciones');
    let url = operacion+'/'+valor1+'/'+valor2;
    let response = await fetch(url,{
        'method' : method
    })
    let html = await response.text();

    conteiner.innerHTML = html;

} 
