import {mostrarMensaje} from '../funciones/mostrarMensaje.js'

(function(){

     const nombreInput = document.querySelector('#nombre-registrar');
     const apInput = document.querySelector('#ap-registrar');
     const amInput = document.querySelector('#am-registrar');
     const emailInput = document.querySelector('#email-registrar');
     const passwordInput = document.querySelector('#password-registrar');
     const passwordInputConfir = document.querySelector('#password-confirmar');
     const btnRegistrar = document.querySelector('#btn-registrar');
     const mostrarPassword = document.querySelector('#mostrar-password');
     const confirmarMostrarPassword = document.querySelector('#mostrar-confirmar-password');

     

     document.addEventListener('DOMContentLoaded', ()=>{

          /////Validar los campos de cada uno de los inputs
          nombreInput.addEventListener('blur', validarCampos);
          apInput.addEventListener('blur', validarCampos);
          amInput.addEventListener('blur', validarCampos);
          emailInput.addEventListener('blur', validarCampos);
          passwordInput.addEventListener('blur', validarCampos);
          passwordInputConfir.addEventListener('blur', confirmarPassword);
          mostrarPassword.addEventListener('click', verPassword);
          confirmarMostrarPassword.addEventListener('click', verConfirmarPassword);

          btnRegistrar.disabled = true;
     });


     function verPassword(){

          if(passwordInput.type === 'password'){
               passwordInput.type = 'text';
               mostrarPassword.classList.remove('fas','fa-eye-slash');
               mostrarPassword.classList.add('fas','fa-eye');

          }else if(passwordInput.type === 'text'){
               passwordInput.type = 'password';
               mostrarPassword.classList.remove('fas','fa-eye');
               mostrarPassword.classList.add('fas','fa-eye-slash');

          }
     }

     function verConfirmarPassword(){

          if(passwordInputConfir.type === 'password'){
               passwordInputConfir.type = 'text';
               confirmarMostrarPassword.classList.remove('fas','fa-eye-slash');
               confirmarMostrarPassword.classList.add('fas','fa-eye');

          }else if(passwordInputConfir.type === 'text'){
               passwordInputConfir.type = 'password';
               confirmarMostrarPassword.classList.remove('fas','fa-eye');
               confirmarMostrarPassword.classList.add('fas','fa-eye-slash');

          }

     }


     function validarCampos(e){
          const long = e.target.value.length;
          const type = e.target.type;
          const name = e.target.name;
          const campo = e.target.value;

          if(type === 'text'){

               validarTexto(type, long, name,campo);
          }

          if(type === 'email'){
               validarCorreo(campo,long);
          }

          if(type === 'password'){
               validarPassword(campo,long);
               
          }

     }

     function validarTexto(tipo, logintud, name,campo){
          const rextoRegex = /^([A-ZÁÉÍÓÚ a-záéíóú]{4,20})*$/;

          if(tipo === 'text' && name === 'nombre'){
               if(!logintud>0 || !rextoRegex.test(campo)){
                    mostrarMensaje(`Ingresa tu ${name}`,'error');
                    nombreInput.classList.add('fake');
                    btnRegistrar.disabled = true;
                    return;
               }
               nombreInput.classList.remove('fake');

          }

          if(tipo === 'text' && name === 'ap-registrar'){
          
               if(!logintud>0 || !rextoRegex.test(campo)){
                    mostrarMensaje(`Ingresa tu Apellido Paterno`, 'error');
                    btnRegistrar.disabled = true;
                    apInput.classList.add('fake');
                    return;
               }
               apInput.classList.remove('fake');
          
          }

          if(tipo === 'text' && name === 'am-registrar'){
               if(!logintud>0 || !rextoRegex.test(campo)){
                    mostrarMensaje(`Ingresa tu Apellido Materno`, 'error');
                    btnRegistrar.disabled = true;
                    amInput.classList.add('fake');
                    return;
               }

               amInput.classList.remove('fake');
          }


     }

     function validarCorreo(campo,long){

          let regexEmail =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        if(campo === '' || !long>0){
             mostrarMensaje('Favor de ingresar el correo','error');
             btnRegistrar.disabled = true;
             emailInput.classList.add('fake');
             return;
        }
        if(!regexEmail.test(campo)){
             mostrarMensaje('Ingresa un correo valido','error');
             btnRegistrar.disabled = true;
             if(emailInput.classList.length === 0){
                emailInput.classList.add('fake');

             }
             return;
        }

        emailInput.classList.remove('fake');

     }

     function validarPassword(campo,long){

         let regexPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&.;:,]).{8,20}$/;
         

          if(campo === '' || !long>0){
               mostrarMensaje('Favor de ingresar una contraseña','error');
               passwordInput.classList.add('fake');
               btnRegistrar.disabled = true;
               return;
          }
          if(!regexPassword.test(campo)){
               mostrarMensaje('','error-password');
               btnRegistrar.disabled = true;
               if(passwordInput.classList.length ===0){
                   
                    passwordInput.classList.add('fake');
               }
               return;
          }

          passwordInput.classList.remove('fake');

     }

     function confirmarPassword(){
          
         const passwordInputValor = document.querySelector('#password-registrar').value;
         const passwordInputConfirValor = document.querySelector('#password-confirmar').value;

         if(passwordInputValor.length>0 && passwordInputConfirValor.length>0){

               if(passwordInputValor !== passwordInputConfirValor){
                    mostrarMensaje('Las contraseñas no coinciden','epassword-confirm');
                    passwordInputConfir.classList.add('fake');
                    btnRegistrar.disabled = true;
                    return;
              }

              passwordInputConfir.classList.remove('fake');

              ///Validar de que todos los campos tengan informacion

              const errorValidar = document.querySelectorAll('.fake');

              if(errorValidar.length!==0){
                   mostrarMensaje('Faltan campos por llenar','error');
                   btnRegistrar.disabled = true;
                   return;
              }
    
              btnRegistrar.disabled = false;
         }

     }


})();
