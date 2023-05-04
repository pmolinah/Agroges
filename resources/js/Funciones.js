// $(document).ready(function(){

//     $('#rut').blur(function(){
//         /* validación de rut */
//     var rut=$('#rut').val();
// if (rut.toString().trim() != '' && rut.toString().indexOf('-') > 0) {
//     var caracteres = new Array();
//     var serie = new Array(2, 3, 4, 5, 6, 7);
//     var dig = rut.toString().substr(rut.toString().length - 1, 1);
//     rut = rut.toString().substr(0, rut.toString().length - 2);

//     for (var i = 0; i < rut.length; i++) {
//         caracteres[i] = parseInt(rut.charAt((rut.length - (i + 1))));
//     }

//     var sumatoria = 0;
//     var k = 0;
//     var resto = 0;

//     for (var j = 0; j < caracteres.length; j++) {
//         if (k == 6) {
//             k = 0;
//         }
//         sumatoria += parseInt(caracteres[j]) * parseInt(serie[k]);
//         k++;
//     }

//     resto = sumatoria % 11;
//     dv = 11 - resto;

//     if (dv == 10) {
//         dv = "K";
//     }
//     else if (dv == 11) {
//         dv = 0;
//     }

//     if (dv.toString().trim().toUpperCase() == dig.toString().trim().toUpperCase()){
    
//         $.get('/api/datos/'+rut+'/Empresa/',function(array){
            
        
        
//             // Swal.fire({
//             // 	type: 'error',
//             // 	title: 'Empresa ya Creada...',
//             // 	text: 'Something went wrong!',
                
//             //   })
            
        
//     });
//     }else{
//     //inicio
//     Swal.fire({
//         type: 'error',
//         title: 'Oops...',
//         text: 'Something went wrong!',
//         footer: '<a href>Why do I have this issue?</a>'
//       })
//     //fin
//     }
// }
// else {
//     Swal.fire({
//         type: 'error',
//         title: 'Error...',
//         text: 'El Rut no existe!',
        
//       })
// }



// /* fin */
//     });
//  });
// //fin verificacion rut empresa