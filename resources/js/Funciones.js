//verificacion rut empresa
$(document).ready(function(){
    $('#rut').blur(function(){
        /* validación de rut */
    var rut=$('#rut').val();
    if (rut.toString().trim() != '' && rut.toString().indexOf('-') > 0) {
        var caracteres = new Array();
        var serie = new Array(2, 3, 4, 5, 6, 7);
        var dig = rut.toString().substr(rut.toString().length - 1, 1);
        rut = rut.toString().substr(0, rut.toString().length - 2);

        for (var i = 0; i < rut.length; i++) {
            caracteres[i] = parseInt(rut.charAt((rut.length - (i + 1))));
        }

        var sumatoria = 0;
        var k = 0;
        var resto = 0;

        for (var j = 0; j < caracteres.length; j++) {
            if (k == 6) {
                k = 0;
            }
            sumatoria += parseInt(caracteres[j]) * parseInt(serie[k]);
            k++;
        }

        resto = sumatoria % 11;
        var dv;
        dv = 11 - resto;

        if (dv == 10) {
            dv = "K";
        }
        else if (dv == 11) {
            dv = 0;
        }

        if (dv.toString().trim().toUpperCase() == dig.toString().trim().toUpperCase()){
        
            // $.get('/api/datos/'+rut+'/Empresa/',function(array){
                
            
            
                // Swal.fire({
                // 	type: 'error',
                // 	title: 'Empresa ya Creada...',
                // 	text: 'Something went wrong!',
                    
                //   })
                
            
        // });
        }else{
        //inicio
        Swal.fire({
            icon: 'error',
            type: 'error',
            title: 'Oops...',
            text: 'Rut Incorrecto!',
            footer: '<a href>Verificque Rut</a>'
        })
        //fin
        }
    }else{
        Swal.fire({
            icon: 'error',
        
            title: 'Error...',
            text: 'El Rut está vacio o no existe!!',
            
        })
    }



/* fin */
    });


 });

//  $(document).ready(function(){
//     function EliminarRole(id)
//     {
//       Swal.fire({
//       title: "Eliminar Rol",
//       text: "¿ Desea Borrar el Rol y su Perfil ?",
//       type: 'warning',
//       showCancelButton: true,
//       allowOutsideClick: false,
//       confirmButtonColor: '#3085d6',
//       cancelButtonColor: '#d33',
//       confirmButtonText: 'Si, borrar'
//         }).then((result) => {
           
//             if (result.value) {
//             //         Swal.fire(
//             //         'Deleted!',
//             //         'Your file has been deleted.',
//             //         'success'
//             //         )
               
//             //         // location.reload();
//             // }
//             $.get('/api/eliminar/'+id+'/Role/',function(retorno){
                
//                 Swal.fire({
//                 title: 'Rol Borrado',
//                 text: 'Puede Continuar...',
//                 type: 'success',
//                 confirmButtonText: 'Ok',
//                 showConfirmButton: false,
//                 timer: 1500,
                
//     })
//                      setTimeout ("location.reload();", 1500); 
                   
//             });
           
//             } 
           
//         })
//     }


//  });

 

 //eliminar roles 
