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
//funciones de cambio de seleccion
    $(function(){
        $('#empresa_id').on('change', Cambio_empresa);
        $('#campo_id').on('change', Cambio_campo);
        $('#empresaPlan_id').on('change', Cambio_empresa_plan);
        $('#campoPlan_id').on('change', Cambio_campo_plan);
    });

    function Cambio_empresa_plan(){
        var id = $(this).val();
        
        $.get('/api/Seleccion/'+id+'/EmpresaPlan', function(info){
                var html_select ='<option value=""></option>';
                for (var i=0; i<info.length; ++i){
                    html_select +='<option value="'+info[i].id+'">'+info[i].campo+'</option>';
                    $('#campoPlan_id').html(html_select);
                }    
        });
    }

    function Cambio_campo_plan(){
        var id = $(this).val();
        
        $.get('/api/Seleccion/'+id+'/CampoPlan', function(info){
                var html_select ='<option value=""></option>';
                for (var i=0; i<info.length; ++i){
                    html_select +='<option value="'+info[i].id+'">'+info[i].observaciones+'</option>';
                    $('#cuartelPlan_id').html(html_select);
                }    
            });
    }


    function Cambio_empresa(){
    var id = $(this).val();
    
    $.get('/api/Seleccion/'+id+'/Empresa', function(info){
            var html_select ='<option value=""></option>';
            for (var i=0; i<info.length; ++i){
                html_select +='<option value="'+info[i].id+'">'+info[i].campo+'</option>';
                $('#campo_id').html(html_select);
            }    
        });
    }
    function Cambio_campo(){
        var id = $(this).val();
        
        $.get('/api/Seleccion/'+id+'/Campo', function(info){
                var html_select ='<option value=""></option>';
                for (var i=0; i<info.length; ++i){
                    html_select +='<option value="'+info[i].id+'">'+info[i].observaciones+'</option>';
                    $('#cuartel_id').html(html_select);
                }    
            });
    }

    $(document).ready(function(){
        $('#cuartel_id').change(function(){
            var cuartel_id = $('#cuartel_id').val();
            $.get('/api/Seleccion/'+cuartel_id+'/Cuartel', function(info){
                $('#superficiecuartel').val(info[0].superficie);
            });
        });

        $('#cuartelPlan_id').change(function(){
            var cuartelPlan_id = $('#cuartelPlan_id').val();
        
            $.get('/api/Seleccion/'+cuartelPlan_id+'/CuartelPlan', function(info){
                
                $('#especie_id').val(info[1]);
                $('#CantidadMaxima').val(info[2]);
                $('#CantidadPlantada').val(info[3]);
                $('#Capataz').val(info[4]);
                $('#Administrador').val(info[5]);
                $('#variedad').val(info[6]);
                $('#plantacion_id').val(info[7]);
       
            });
        });

        $('#especie_id').change(function(){
            var especie_id = $('#especie_id').val();
            $.get('/api/Seleccion/'+especie_id+'/Especie', function(info){
                
                var cantidad;
                var superficieCuartel = $('#superficiecuartel').val()
                var distanciaPlanta = info[0].distanciaPlanta;
                var metros2 = info[0].metros2;
                
                cantidad = (parseInt(metros2) * parseInt(distanciaPlanta));
                cantidad = (superficieCuartel/cantidad);
                
                $('#cantidadPlantas').val(cantidad.toFixed(2));
                $('#cantidadPlantasDisabled').val(cantidad.toFixed(2));
                
            });
        });

        $('#cantidadPlantada').change(function(){
            var cantidadPlantada = parseInt($('#cantidadPlantada').val());
            var cantidadPlantas = parseInt($('#cantidadPlantas').val());
                    if (cantidadPlantada > cantidadPlantas){
                
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Cantidad de Plantas sobrepasa limite!',
                    footer: '<a href="">Revisar Capacidad del Cuartel...</a>'
                  })
            }

           
        });


       
    });

    $(document).ready(function(){
        $('#Agregar').click(function(){
            var selectedOption = $('#exportadora_id option:selected');
            var valores = [];
            var KilosMatriz = [];
            var totalkilos = 0;
            var kilos = $('#nuevoskilos').val();
            if(kilos>0)
            {

                // $('#valoreskilos').each(function(){
                //     KilosMatriz.push($(this).val());
                // });

                $('input[name="kilosexportadora[]"]').each(function() {
                    KilosMatriz.push($(this).val());
                });
                
                //alert(KilosMatriz.length);

                for(i=0; i<KilosMatriz.length;i++){
                    totalkilos=parseFloat(totalkilos)+parseFloat(KilosMatriz[i]);
                }
                totalkilos=parseFloat(totalkilos)+ parseFloat(kilos);
                $('#totadekilos').val(totalkilos);

               


                // $('.input-element').each(function() {
                //     valores.push($(this).val());
                // });

                $('input[name="exportadora_id[]"]').each(function() {
                    KilosMatriz.push($(this).val());
                });
                
                var selectedValue = selectedOption.val();
                var selectedText = selectedOption.text();
                selectedText=selectedText.trim();
                selectedValue=selectedValue.trim();
                var detenerCiclo =false;
                for (var i = 0; i < valores.length; i++) {
                    if (selectedValue == valores[i]) {
                        valores = []; // Vacía el array 'valores'
                        Swal.fire({
                            icon: 'error',
                            title: 'Error...',
                            text: 'Exportadora ya existe',
                            footer: '<a href="">Verifique dato</a>'
                        })
                        
                        detenerCiclo = true;
                        break; // Detiene el ciclo
                    }
                }
                if (detenerCiclo) {
                }else{
                    $("#grilla tbody").append('<tr id="fila'+selectedValue+'"><td class="justify-center p-1 hidden sm:hidden md:block xl:block"><input value="'+selectedValue+'" id="matrizdatos" name="exportadora_id[]" class="input-element bg-transparent text-center text-neutral-900"></td><td><label class="bg-transparent text-neutral-900 w-full">'+selectedText+'</label></td><td><input value="'+kilos+'" name="kilosexportadora[]" id="valoreskilos" class="bg-transparent text-center text-neutral-900"></td><td><center><button type="button" onclick="EliminarSolicitudCliente('+selectedValue+')" class="inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]"><i class="far fa-trash-alt"></i></button></center></td></tr>')

                }
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Error...',
                    text: 'Cantidad de Kilos vacio',
                    footer: '<a href="">Verifique dato</a>'
                })
            };
        });

        $('#AgregarContratista').click(function(){
            var contratista_id = $('#contratista_id option:selected');
            var cont_id = contratista_id.val();
            var cont_nm = contratista_id.text();
            var valorescontratista = [];
            var detenerCiclo =false;
            $('.input-contratista').each(function() {
                valorescontratista.push($(this).val());
            });
            for (var i = 0; i < valorescontratista.length; i++) {
                if (cont_id == valorescontratista[i]) {
                    valorescontratista = []; // Vacía el array 'valores'
                    Swal.fire({
                        icon: 'error',
                        title: 'Error...',
                        text: 'Contratista ya Existe...',
                        footer: '<a href="">Verifique dato</a>'
                    })
                    
                    detenerCiclo = true;
                    break; // Detiene el ciclo
                }
            }
            if (detenerCiclo) {
            }else{
                $("#grilla2 tbody").append(`<tr id="filas${cont_id}"><td class="justify-center p-1 hidden sm:hidden md:block xl:block"><input value="${cont_id}" id="matrizdatoscontratista" name="id[]" class="input-contratista bg-transparent text-center text-neutral-900"></td><td><label class="bg-transparent text-neutral-900 w-full">${cont_nm}</label></td><td><center><button type="button" onclick="EliminarContratista(${cont_id})" class="inline-block rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-900 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(220,76,100,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.2),0_4px_18px_0_rgba(220,76,100,0.1)]"><i class="far fa-trash-alt"></i></button></center></td></tr>`)
               
            };
 
        });
       
       

                   
    });

   

   