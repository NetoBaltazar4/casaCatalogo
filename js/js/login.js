import {mostrarMensaje} from '../funciones/mostrarMensaje.js';
(function(){
    ////ifee
    ////Valiabres
    const formulario = document.querySelector('#formulario');
    const btnPassword = document.querySelector('#password-login');
    const passwordLogin = document.querySelector('#password');


    document.addEventListener('DOMContentLoaded', ()=>{
        btnPassword.addEventListener('click', mostrarPasword);
        formulario.addEventListener('submit', validarCampos);
    });


    ///////Funciones 
    function mostrarPasword(){
        
        if(passwordLogin.type === 'password'){
            passwordLogin.type = 'text';
            btnPassword.classList.remove('fa-eye-slash');
            btnPassword.classList.add('fa-eye');
           
        }else if(passwordLogin.type === 'text'){
            passwordLogin.type = 'password';
            btnPassword.classList.remove('fa-eye');
            btnPassword.classList.add('fa-eye-slash');

        }

    }
    function validarCampos(e){
         e.preventDefault();
        
        const email = document.querySelector('#email').value;
        const password = document.querySelector('#password').value;

        const datos = {
            email,
            password
        }


        let regexEmail =  /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        let regexPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&.;:,]).{8,20}$/;
        if(!regexEmail.test(email) || !email === ''){
            mostrarMensaje('Error!.... Verificar que el email este correcto','error');
            e.preventDefault();
            return;
            
        }

        if(!regexPassword.test(password) || !password === ''){
            mostrarMensaje('Error!..... Ingrese la contraseña de nuevo','error');
            e.preventDefault();
            return;
        }

         consultarDatos(datos);

        /////consultar si existe el correo dado de alta en la base de datos
        //// si el correo existe entonces entrar a la parte de usuario
        ///  en caso que no exista mandar mensaje de crear cuenta 

        ////

    }

  async  function consultarDatos({email,password}){

    const data = new FormData();
    data.append('email', ''+email);
    data.append('password', ''+password);

        const url = 'includes/funciones/datos.php';

        try{
         const res = await  fetch(url,{
                method: 'POST',
                body: data
            })
         const respuesta = await res.json();
         console.log(respuesta);

        }catch(e){
            console.error(e);

        }
       

    }
     
})();