const selectElement = document.querySelector('#lista-talla');
const selectMarca = document.querySelector('#marcasel');
const selectModelo = document.querySelector('#modelo');


var variable = document.querySelector('#lista-talla');
variable.disabled = true;

const formulario = document.querySelector('#formulario-index');
    
selectElement.addEventListener('change', (event) => {
    var talla = document.querySelector("#lista-talla").value;
    var marca = document.querySelector("#marcasel").value;
    var modelo = document.querySelector("#modelo").value;


    const data = new FormData();
    data.append('talla', ''+talla);
    data.append('marca', ''+marca);
    data.append('modelo', ''+modelo);

    

    //resultado.textContent = `${event.target.value}`;
    fetch("includes/funciones/datos.php",{
        method: 'POST',
        body: data
    }).then(function(response) {
        if(response.ok) {
            return response.text()
        } else {
            throw "Error en la llamada";
        }
     
     })
     .then(function(texto) {
        if(texto=="MAL"){
            imprimirMensaje('Revisa que esten ingresado correctamente los datos', 'error');
        } else{
            const resultado = document.querySelector('#precio2');
            resultado.textContent = `${texto}`;
        }
     })
     .catch(function(err) {
        //console.log(err);
        imprimirMensaje('Revisa que esten ingresado correctamente los datos', 'error');
     });

    
});

selectMarca.addEventListener('change', (event) => {
    var lista = document.querySelector('#lista-talla');
     if ($('#modelo').val().length == 0){
        imprimirMensaje('Ahora ingresa el modelo', 'error');
     } else {
        lista.disabled = false;
     }
    
});

selectModelo.addEventListener('blur', (event) => {
    var variable = document.querySelector('#marcasel').value;
    var lista = document.querySelector('#lista-talla');
     if (variable == "" || variable == 0){
        imprimirMensaje('Ahora ingresa la marca', 'error');
     } else {
        lista.disabled = false;
     }
    
});

function  imprimirMensaje(mensaje, tipo){

    const divMensaje = document.createElement('div');
    const activo = document.querySelector('.activo');

    if(!activo){

        if(tipo === 'error'){

            divMensaje.textContent = mensaje;
            divMensaje.classList.add('alert', 'alert-danger', 'activo', 'text-center');

       
        }else{

            divMensaje.textContent = mensaje;
            divMensaje.classList.add('alert', 'alert-primary', 'text-center');

        }


        formulario.appendChild(divMensaje);

        setTimeout(()=>{

            divMensaje.remove();

        }, 5000);
    }

}