window.onload = function(){

  //validaciones de registro
  var formulario = document.querySelector('form');

  var registrarse = document.querySelector('.btn');
  console.log(registrarse);

  for(var elemento of formulario.elements){
    if(elemento.name == 'nombre' || elemento.name == 'password'){
      if(elemento.value == ""){
        console.log('el campo esta vacio')
      }
    }
  }

}
