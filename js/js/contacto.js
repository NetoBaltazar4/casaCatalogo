import {mostrarMensaje} from '../funciones/mostrarMensaje.js';

(function(){
    const nombreContacto = document.querySelector('#nombre-contacto');
    const apellidoContacto = document.querySelector('#apellido-contacto');
    const emailContacto = document.querySelector('#email-contacto');
    const phoneContacto = document.querySelector('#phone-contacto');
    const mensaje = document.querySelector('#mensaje');
    const btnEnviar = document.querySelector('#btnEnviar');



    document.addEventListener('DOMContentLoaded', ()=>{

     btnEnviar.disabled = true;
     mostrarEventListeners();
     ////Activar el boton de enviar una vez que ya se halla completado correctamente la informacion
    

    });


    function mostrarEventListeners(){

     /////EventListens
     nombreContacto.addEventListener('blur', validarCampo);
     apellidoContacto.addEventListener('blur', validarCampo);
     emailContacto.addEventListener('blur', validarCampo);
     phoneContacto.addEventListener('blur', validarCampo);
     mensaje.addEventListener('blur', validarCampo);



    }

    function validarCampo(e){

     const campo = e.target.value;
     const type = e.target.type;

     ////Validar Campos de texto
     if(type === 'text'){

          camposText(e);
     }

     /// validar campo email
     if(type === 'email'){

          campoEmail(campo);
     }

     ////Validar campo de phone
     if(type === 'tel'){

          campoTel(campo);

     }

     //Validar TextArea
     validarTextArea(campo);

    }


    function camposText(e){

     const name = e.target.name;
     const campo = e.target.value;

     let regexTexto = /^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/;

    
          if(name === 'nombre'){
          
               if(!regexTexto.test(campo)){
                    mostrarMensaje('Ingresa tu nombre correcto','error');
                    return;
               }

          }

          if(name === 'apellido'){
          
               if(!regexTexto.test(campo)){
                    mostrarMensaje('Ingresa tu Apellido correcto','error');
                    return;

               }
          }
         
    }

    function campoEmail(campo){

     let regexEmail =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


     if(!regexEmail.test(campo) || campo === ''){
          mostrarMensaje('Ingresar un correo valido', 'error');
          return;
     }


    }

    function validarTextArea(campo){

         if(campo === ''){

          mostrarMensaje('Favor de ingresar un mensaje aclarando su situacion..','error');

           return;
         }
       

    }

    function campoTel(campo){


    let regexPhone = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/
    if(!regexPhone.test(campo)){
      mostrarMensaje('Error. Ingresa un numero de telefono / celular valido...','error');
         return;
    }

    }

   

})();