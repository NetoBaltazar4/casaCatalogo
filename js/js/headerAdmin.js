(function(){


    document.addEventListener('DOMContentLoaded', ()=>{
           
        borrarMenu();
        
       });

async function cargarMenu(){

    const data = new FormData();

    data.append('ventaMenu', 'ventaMenu');   
    const url = 'includes/funciones/datos.php';

    try{
     const res = await  fetch(url,{
            method: 'POST',
            body: data
        })
        const resp = await res.json();
        if(resp=="next"){

        } else{
          for (var clave in resp){

            document.querySelector("#agregarNotificacion").innerHTML += "<tr> <td>IMG</td>"+ 
                                                                              "<td id='"+resp[clave].idventa+"nom'>"+resp[clave].nombreCliente+"</td>"+
                                                                              "<td id='"+resp[clave].idventa+"mod'>"+resp[clave].modeloVenta+"</td>"+
                                                                              "<td id='"+resp[clave].idventa+"fech'>"+resp[clave].dia+"/"+resp[clave].mes+"/"+resp[clave].anio+"</td>"+
                                                                              "<td id='"+resp[clave].idventa+"'><a href="+"#"+" class="+"borrar-mensaje"+" id='noti' name='"+resp[clave].idventa+"'> X</a> </td>"+
                                                                        "</tr>";
   }

   on('click', '#noti', actualizar);
        }

       // elemento();

    }catch(e){
       console.log(e);

    }

    
}

async function borrarMenu(){
    const listaTalla = document.querySelector('#agregarNotificacion');
    while( listaTalla.firstChild){
        listaTalla.removeChild( listaTalla.firstChild);
     }
     cargarMenu();
}

async function actualizar(){
        const val = this.name;
    const data = new FormData();

    data.append('ventaMenuActualiza', 'ventaMenuActualiza');
    data.append('id', val);   
    const url = 'includes/funciones/datos.php';

    try{
     const res = await  fetch(url,{
            method: 'POST',
            body: data
        })


        borrarMenu();


    }catch(e){
       console.log(e);

    }
}

function on(eventName, selector, handler) {
    document.addEventListener(eventName, function(event) {
      const elements = document.querySelectorAll(selector);
      const path = event.composedPath();    path.forEach(function(node) {
        elements.forEach(function(elem) {
          if (node === elem) {
            handler.call(elem, event);
          }
        });
      });
    }, true);
  }


})();