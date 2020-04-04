 //  Código de javascript
 
  function accesoFormulario() {
      var clave;
      var claveValida = '0123';
      clave = prompt('Introduce tú clave para acceder al formulario de contacto');

      if (clave == claveValida) {
          window.location.href = 'formulario.html';
       } 
       else {
          alert ('La clave introducida no es correcta.');
       }
  }
