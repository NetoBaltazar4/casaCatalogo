import {mostrarMensaje} from '../funciones/mostrarMensaje.js'

(function(){

     const nombreInput = document.querySelector('#nombre-registrar');
     const apInput = document.querySelector('#ap-registrar');
     const amInput = document.querySelector('#am-registrar');
     const emailInput = document.querySelector('#email-registrar');
     const passwordInput = document.querySelector('#password-registrar');
     const passwordInputConfir = document.querySelector('#password-confirmar');
     const btnRegistrar = document.querySelector('#btn-registrar');

     

     document.addEventListener('DOMContentLoaded', ()=>{

          /////Validar los campos de cada uno de los inputs
          nombreInput.addEventListener('blur', validarCampos);
          apInput.addEventListener('blur', validarCampos);
          amInput.addEventListener('blur', validarCampos);
          emailInput.addEventListener('blur', validarCampos);
          passwordInput.addEventListener('blur', validarCampos);
          passwordInputConfir.addEventListener('blur', validarCampos);




          btnRegistrar.disabled = false;
     });





     function validarCampos(e){
          const long = e.target.value.length;
          const type = e.target.type;
          const name = e.target.name;
          const campo = e.target.value;



          

       

          if(type === 'text' ){

               validarTexto(type, long, name);
          }

          if(type === 'email'){
               validarCorreo(campo,long);
          }

          if(type === 'password'){
               validarPassword(campo,long);
          }

     }

     function validarTexto(tipo, logintud, name){
          if(tipo === 'text' && name === 'nombre'){
               if(!logintud>0){
                    mostrarMensaje(`Ingresa tu ${name}`,'error');
                    return;
               }

          }

          if(tipo === 'text' && name === 'ap-registrar'){
               if(!logintud>0){
                    mostrarMensaje(`Ingresa tu Apellido Paterno`, 'error');
                    return;
               }
          }

          if(tipo === 'text' && name === 'am-registrar'){
               if(!logintud>0){
                    mostrarMensaje(`Ingresa tu Apellido Materno`, 'error');
                    return;
               }
          }


     }

     function validarCorreo(campo,long){

          let regexEmail =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if(campo === '' || !long>0){
             mostrarMensaje('Favor de ingresar el correo','error');
             return;
        }
        if(!regexEmail.test(campo)){
             mostrarMensaje('Ingresa un correo valido','error');
             return;
        }


     }

     function validarPassword(campo,long){

        //  let regexPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;

          // if(campo === '' || !long>0){
          //      mostrarMensaje('Favor de ingresar una contraseña','error');
          //      return;
          // }
          // if(!regexPassword.test(campo)){
          //      mostrarMensaje('Ingresar una contraseña valida','error');
          //      return;
          // }

          /////Confimar contrasenia validar 
          

     }


})();