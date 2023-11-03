
                <div class="grid grid-cols-6 gap-2 mx-auto p-5 overflow-hidden bg-secondary-100 shadow-2xl">
                    <!-- contenido -->

                            <div class="relative mb-3" >
                                Rut
                                {{ Form::text('rut',null,['class'=>'w-full border-solid border-2 border-sky-500 p-1 ','required']) }}

                            </div>
                            <div class="relative mb-3 col-span-5" >
                                Razón Social
                                    {{ Form::text('razon_social',null,['class'=>'w-full border-solid border-2 border-sky-500 p-1','required']) }}
                                   
                            </div>
                            <div class="relative mb-3 col-span-3">
                                Dirección
                                {{ Form::text('direccion',null,['class'=>'w-full border-solid border-2 border-sky-500 p-1','required']) }}
                                </div>
                            <div class="relative mb-3 col-span-3">
                              
                                 Comuna
                                {{ Form::select('comuna_id', $comunas->pluck('comuna', 'id')->all(), null, ['class' => 'w-full border-solid border-2 border-sky-500 p-1.5', 'attributes' => 'data-te-select-init'] ) }}
                            </div>
                            <div class="relative mb-3 col-span-2" >
                                Propietario
                                    {{ Form::text('nombre',null,['class'=>'w-full border-solid border-2 border-sky-500 p-1','required']) }}
                                    
                            </div>
                            <div class="relative mb-3 col-span-2" >
                              Teléfonos
                                    {{ Form::text('telefono',null,['class'=>'w-full border-solid border-2 border-sky-500 p-1','required']) }}
                                   
                            </div>
                            <div class="relative mb-3 col-span-2">
                               Tipo Empresa (Campo/Exportadora/Proveedor/Contratista...)
                                {{ Form::select('tipo_id', $tipos->pluck('tipo', 'id')->all(), null, ['class' => 'w-full border-solid border-2 border-sky-500 p-1']) }}
                            </div>
                            <div class="relative mb-3 col-span-3">
                                Email
                                     {{ Form::text('email',null,['class'=>'w-full border-solid border-2 border-sky-500 p-1','required']) }}
                            </div>
                              <div class="relative mb-3 col-span-3">
                                     Giro
                                     {{ Form::text('giro',null,['class'=>'w-full border-solid border-2 border-sky-500 p-1','required']) }}
                                   
                            </div>
                            <div class="mt-5">
                                <!-- <button
                                    type="submit"
                                    class="mb-2 block w-full rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                    Guardar Empresa
                                </button> -->
                                {{ Form::submit('Actualizar Empresa',['class'=>'mb-2 block w-full rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]']) }}

                            </div>
                            <!-- contenido -->
                        </div>
                      </div>

