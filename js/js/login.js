import {mostrarMensaje} from '../funciones/mostrarMensaje.js';
(function(){
    ////ifee
    ////Valiabres
    const formulario = document.querySelector('#formulario');


    document.addEventListener('DOMContentLoaded', ()=>{
        
        formulario.addEventListener('submit', validarCampos);


    });


    ///////Funciones 
    function validarCampos(e){
        e.preventDefault();
        
        const email = document.querySelector('#email').value;
        const password = document.querySelector('#password').value;


        let regexEmail =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        let regexPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;
        if(!regexEmail.test(email) || !email === ''){
            mostrarMensaje('Error!.... Verificar que el correo este correcto','error');
            return;
        }

        if(!regexPassword.test(password) || !password === ''){
            mostrarMensaje('Error!..... Ingrese la contraseña de nuevo','error');
            return;
        }


        /////consultar si existe el correo dado de alta en la base de datos
        //// si el correo existe entonces entrar a la parte de usuario
        ///  en caso que no exista mandar mensaje de crear cuenta 

        ////

    }

})();