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
 
        const marcaInput = document.querySelector('#marca').value;
        const modeloInput = document.querySelector('#modelo').value;
        marca = marcaInput;
        modelo =  Number(modeloInput);


        /////Marca hacer una lista de los catalogos, quitar el color,

        const catalogo = [
            {
                marca: 'DEB',
                modelo: 9658,
                talla: 'G',
                precio: 200,
                color: 'amarillo'
            },
            {
                marca: 'AND',
                modelo: 5045,
                talla: 'M',
                precio: 300,
                color: 'azul'
                
            },
            {
                
                marca: 'AND',
                modelo: 5045,
                talla: 'Ch',
                precio: 300,                    
                color: 'azul'
          
            },
            {
                marca: 'AND',
                modelo: 5048,
                talla: 'L',
                precio: 300,
                color: 'rojo'
                
            }
    
        ]




        //////Validar que ambos campos tengan infomacion
        if(marcaInput   === '' || modeloInput === ''){
            
            imprimirMensaje('Obligatorio llenar los campos de Marca y Modelo', 'error');

            return;

        }

        ///Validar que se cumpla los formatos
        // if(exMarca.test(marcaInput) && exModelo.test(modeloInput)){
            
            

        // }else{
        //     imprimirMensaje('Datos incorrectos... Ingresa la marca y el modelo correctamente', 'error');
        // }

        consultarDatos(catalogo);


        /////En  caso de exito hablilir los campos seleccionar talla, precio y color



     //   imprimirMensaje('Procesando tu pedido..');
       
    }

    ////funcion de buscar los datos
    function consultarDatos(catalogo){

       // extraccion de datos marca y modelo
       const extraerDatos = catalogo.filter(cata => cata.marca === marca && cata.modelo === modelo)

       if(extraerDatos.length === 0){
           imprimirMensaje('Revisa que este ingresado correctamente el modelo', 'error');
           return;
       }

       ////Acontinuacion sigue imprimir los datos en el DOM
       imprimirDatos(extraerDatos);       

    }

    

    ///Resetar el formulario 
    

    ////funcion de imprimir los datos en el DOMM
     function  imprimirDatos(datos){

       limparHtml();
       
   
        habilitarDesabilitar(false);

       
        datos.forEach((dato)=>{

            const {talla,precio} = dato;
            const opcTalla = document.createElement('option');
            opcTalla.value = talla;
            opcTalla.textContent = talla;

            span.textContent = precio;

          
            listaTalla.appendChild(opcTalla);
            ////Verificar en caso de que existan mas productos con el mismo modelo pero diferente talla, precio
           /// listaColor.appendChild(opcColor);
            Labelprecio.appendChild(span);

        });

     }

     //Limpiar el html
     function limparHtml(){
         while( listaTalla.firstChild){
            listaTalla.removeChild( listaTalla.firstChild);
         }
     }


    /////Funcion multi-opcional
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
                resetearFormulario();

            }, 5000);
        }

    }


function resetearFormulario(){
    
    formulario.reset();
    listaTalla.innerHTML = ``;
    var variable = document.querySelector('#lista-talla');
    variable.disabled = true;
    span.innerHTML = ``;

}


    

})();
