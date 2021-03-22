(function(){

    /////Variables
    const btnEnviar = document.querySelector('#btnEnviar');
    const formulario = document.querySelector('#formulario-index');
    const listaTalla = document.querySelector('#lista-talla');
    const Labelprecio = document.querySelector('#precio2');
  //  const precioSpan = document.querySelector('.precio span span');

    /////Validacion de la marca  y el modelo
   // let exMarca =  new RegExp('^[A-Z]+$','i');
   // let exModelo = new RegExp('^[0-9 && -]+$', 'i');

    /////// creacion del scription
    const opcColor = document.createElement('option');
    const span = document.createElement('span');

    

    let marca,modelo;
    ////AddEventListener

    document.addEventListener('DOMContentLoaded', ()=>{

     //   habilitarDesabilitar(true);
        formulario.addEventListener('submit', validarFormulario);
        
        
    });


    /////funciones 
    function habilitarDesabilitar(valor){

        listaTalla.disabled = valor;
        Labelprecio.disabled = valor;

    }

    function  validarFormulario(e){
        // e.preventDefault();
 
        const marcaInput = document.querySelector('#marcasel').value;
        const modeloInput = document.querySelector('#modelo').value;
        marca = marcaInput;
        modelo =  Number(modeloInput);




        //////Vaidar que ambos campos tengan infomacion
        if(marcaInput   === '' || modeloInput === ''){
            
            imprimirMensaje('Obligatorio llenar los campos de Marca y Modelo', 'error');

            return;

        }

        ///Validar que se cumpla los formatos
        // if(exMarca.test(marcaInput) && exModelo.test(modeloInput)){
            
            

        // }else{
        //     imprimirMensaje('Datos incorrectos... Ingresa la marca y el modelo correctamente', 'error');
        // }

        imprimirDatos(); 

        /////En  caso de exito hablilir los campos seleccionar talla, precio y color



     //   imprimirMensaje('Procesando tu pedido..');
       
    }

    ///Resetar el formulario 
    

    ////funcion de imprimir los datos en el DOMM
     function  imprimirDatos(){

       limparHtml();
       
   
        habilitarDesabilitar(false);


            resetearFormulario();


     }

     //Limpiar el html
     function limparHtml(){
         while( listaTalla.firstChild){
            listaTalla.removeChild( listaTalla.firstChild);
         }
     }


function resetearFormulario(){
    
    formulario.reset();
    Labelprecio.innerHTML = ``;
    listaTalla.innerHTML = ``;
    var variable = document.querySelector('#lista-talla');
    variable.disabled = true;
    span.innerHTML = ``;
}

})();
