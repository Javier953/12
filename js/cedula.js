function check_cedula( form )
{
  var cedula = form.cedula.value;
  array = cedula.split( "" );
  num = array.length;
  if ( num == 10 )
  {
    total = 0;
    digito = (array[9]*1);
    for( i=0; i < (num-1); i++ ) { mult = 0; if ( ( i%2 ) != 0 ) { total = total + ( array[i] * 1 ); } else { mult = array[i] * 2; if ( mult > 9 )
          total = total + ( mult - 9 );
        else
          total = total + mult;
      }
    }
    decena = total / 10;
    decena = Math.floor( decena );
    decena = ( decena + 1 ) * 10;
    final = ( decena - total );
    if (( ( final == 10 && digito == 0 ) || ( final == digito ))  && (cedula!= '0000000000' && cedula != '2222222222' && cedula != '4444444444' && cedula != '5555555555' && cedula != '7777777777' && cedula != '9999999999' )  ) {
      alert( "LA CEDULA ES VALIDA!!!" );
      return true;
    }
    else
    {
      echo ("error");
    }
  }
  else
  {
    alert("La c\xe9dula no puede tener menos de 10 d\xedgitos");
    return false;
  }
}

function solonumeros(e){
key=e.keyCode || e.which;
teclado=String.fromCharCode(key);
numero="0123456789";
especiales="8-37-38-46";
teclado_especial= false;
for(var i in especiales){
   if (key==especiales[i]){
       teclado_especial=true;
   }
}

if (numero.indexOf(teclado)==-1 && !teclado_especial){
   return false;
}
}

function sololetras(a){
  key=a.keyCode || a.which;
  tecla=String.fromCharCode(key).toLowerCase();
  letras=" abcdefghijklmnñopqrstuvwxyz";
  especial="8-37-38-46-164";
  tecla_espec=false;
  for(var o in especial){
      if(key==especial[o]){
          tecla_espec=true;break;
              }
  }
  if(letras.indexOf(tecla)==-1 && !tecla_espec){
      return false;
  }
      }