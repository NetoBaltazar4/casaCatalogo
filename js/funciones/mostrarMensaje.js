/////Muestra los mensajes de error dependiendo el campo que se encuentre
export function mostrarMensaje(msg,tipo){
     const divResultado = document.createElement('div');
     const errorActivo = document.querySelector('.error');

          if(!errorActivo){
          const formulario = document.querySelector('#formulario');
               if(tipo === 'error'){

                    divResultado.innerHTML = `
                    <div class="error alert alert-danger my-3 col-md-12 col-sm-12">
                         <p class="centrar-texto">${msg}</p>
                    </div>
                    `;     
                    formulario.appendChild(divResultado);    
                    tiempoEjecucion(4000);   
               
               }else if(tipo === 'error-password'){
                    divResultado.innerHTML = `
                    <div class="error alert alert-danger my-3 col-md-12 col-sm-12">
                         <p class="centrar-texto">Al menos 8 caracteres y un máximo de 20 caracteres.</p>
                         <p class="centrar-texto">Al menos un dígito.</p>
                         <p class="centrar-texto">Al menos un alfabeto en mayúsculas.</p>
                         <p class="centrar-texto">Al menos un alfabeto en minúscula.</p>
                         <p class="centrar-texto">Al menos un carácter especial que incluye! @ # $% & * () - + = ^.</p>
                         <p class="centrar-texto">No debe tener espacios en blanco</p>
                    </div>
               
               `;
                    formulario.appendChild(divResultado);   
                    tiempoEjecucion(7000); 

               }else if(tipo === 'epassword-confirm'){

                    divResultado.innerHTML = `
                    <div class="error alert alert-danger my-3 col-md-12 col-sm-12">
                         <p class="centrar-texto">${msg}</p>
                    </div>
                    `;     
                    formulario.appendChild(divResultado);    
                    tiempoEjecucion(4000);  


               }
     
              
     
     }

     function tiempoEjecucion(time){

          setTimeout(()=>{
               divResultado.remove();
          },time);
     
     }

}


