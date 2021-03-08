const selectElement = document.querySelector('#lista-talla');
const selectMarca = document.querySelector('#marcasel');
const selectModelo = document.querySelector('#modelo');


var variable = document.querySelector('#lista-talla');
variable.disabled = true;

const formulario = document.querySelector('#formulario-index');

selectMarca.addEventListener('change', (event) => {
    var lista = document.querySelector('#lista-talla');
     if ($('#modelo').val().length == 0){
        imprimirMensaje('Ahora ingresa el modelo', 'error');
     } else {
        lista.disabled = false;
        imprimirDatos()
     }
    
});

selectModelo.addEventListener('blur', (event) => {
    var variable = document.querySelector('#marcasel').value;
    var lista = document.querySelector('#lista-talla');
     if (variable == "" || variable == 0){
        imprimirMensaje('Ahora ingresa la marca', 'error');
     } else {
        lista.disabled = false;
        imprimirDatos();
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

 function  imprimirDatos(){

    var marca = document.querySelector("#marcasel").value;
    var modelo = document.querySelector("#modelo").value;
    miSelect = document.querySelector("#lista-talla");

    //***************************************************
    const data1 = new FormData();
    data1.append('marca', ''+marca);
    data1.append('modelo', ''+modelo);
    data1.append('buscaTalla', 'buscaTalla');   

    //resultado.textContent = `${event.target.value}`;
    fetch("includes/funciones/datos.php",{
        method: 'POST',
        body: data1
    }).then(res => res.json())
    .then(lista_de_categorias => {
       
      const {corrida} = lista_de_categorias;
      
      document.querySelector("#lista-talla").innerHTML += `<option value="${corrida}">${corrida}</option>`;


    //   for (n in lista_de_categorias) {
    //     if (typeof lista_de_categorias[n] == 'object') {
    //      display(lista_de_categorias[n],n+".");
    //     }else{
    //       if(n == "corrida"){
    //         document.querySelector("#lista-talla").innerHTML += "<option value='"+lista_de_categorias[n]+"'>"+lista_de_categorias[n]+"</option>";
    //         cargaprecio(); 
    //       }
    //     }
    //    }
    })
    .catch(function(error) {
        imprimirMensaje('Revisa que esten ingresado correctamente los datos', 'error');
    })
 
//****************************************************************************************************

  }

  function cargaprecio(){
    var marca = document.querySelector("#marcasel").value;
    var modelo = document.querySelector("#modelo").value;
    var combo = document.querySelector("#lista-talla");
    var selected = combo.options[combo.selectedIndex].text;
 
    // var selected = combo.options[combo.selectedIndex].text;

    const data = new FormData();
    data.append('talla', ''+selected);
    data.append('marca', ''+marca);
    data.append('modelo', ''+modelo);
    data.append('opcionPrecio', 'opcionPrecio');   

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

  }