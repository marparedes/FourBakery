/*window.onload = function(){

  //validaciones de registro
  document.getElementById('enviar').addEventListener("click", e => {
    e.preventDefault();
   //seleccion del formulario
    var formulario = document.getElementById('formulario');
    console.log({formulario});


       for(var elemento of formulario.elements){
        if(elemento.name == 'nombre' || elemento.name == 'password'){
         if(elemento.value == ""){

        /*console.log('el campo esta vacio')*/
         }

       }
     }
  });



}
