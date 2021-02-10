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
               }
     
               setTimeout(()=>{
                    divResultado.remove();
               },4000);
     
     }

}