<div>
    <div class=" p-2 rounded-2 bg-secondary-800">
        <div id="accordionExample5" hidden>
            <div class="rounded-t-lg border border-neutral-200 bg-white dark:border-neutral-600 ">
                <h2 class="mb-0" id="headingOne5">
                    <button
                        class="group relative flex w-full items-center rounded-t-[15px] border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                        type="button" data-te-collapse-init data-te-target="#collapseOne5" aria-expanded="true"
                        aria-controls="collapseOne5">
                        Accordion Item #1
                        <span
                            class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </span>
                    </button>
                </h2>
                <div id="collapseOne5" class="!visible" data-te-collapse-item data-te-collapse-show
                    aria-labelledby="headingOne5">
                    <div class="px-5 py-4">

                    </div>
                </div>
            </div>

        </div>
        <div id="accordionExample5">
            @foreach ($campos as $campo)
                {{-- acordeon --}}

                <div class="border border-t-0 border-neutral-200 bg-white dark:border-neutral-600 dark:bg-neutral-800">
                    <h2 class="mb-0" id="headingTwo5">
                        <button
                            class="group relative flex w-full items-center rounded-none border-0 bg-white px-5 py-4 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                            type="button" data-te-collapse-init data-te-collapse-collapsed
                            data-te-target="#collapsed<?php echo $campo->id; ?>" aria-expanded="false"
                            aria-controls="collapseTwo5">
                            {{ $campo->campo }}

                            <span
                                class="-mr-1 ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:mr-0 group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </span>
                        </button>
                    </h2>
                    <div id="collapsed<?php echo $campo->id; ?>" class="!visible hidden" data-te-collapse-item
                        aria-labelledby="headingTwo5">
                        <div class="px-5 py-4">
                            {{-- campos --}}
                            {!! Form::model($campo, ['route' => ['Campo.update', $campo->id], 'method' => 'PUT']) !!}
                            @csrf
                            <div class="grid gap-2 grid-cols-5 xs:grid-cols-1">
                                <div clas="col-start-1 col-end-1 grid grid-cols-5">
                                    <div class="text-neutral-100">
                                        Rut
                                    </div>
                                    <div class="">
                                        {{ Form::text('rut', null, ['class' => 'peer block min-h-[auto]  rounded border-0  px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-900 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0', 'required']) }}
                                    </div>
                                </div>
                                <div class="text-neutral-100">
                                    Campo
                                </div>
                                <div clas="col-start-1 col-end-1">
                                    {{ Form::text('campo', null, ['class' => 'peer block min-h-[auto] w-full rounded border-0  px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-900 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0', 'required']) }}
                                </div>
                                <div class="text-neutral-100">
                                    Dirección
                                </div>
                                <div clas="col-start-1 col-end-1 ">
                                    {{ Form::text('direccion', null, ['class' => 'peer block min-h-[auto] w-full rounded border-0  px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-900 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0', 'required']) }}
                                </div>
                                <div class="text-neutral-100">
                                    Superficie
                                </div>
                                <div clas="col-start-1 col-end-1">
                                    {{ Form::text('superficie', null, ['class' => 'peer block min-h-[auto] rounded border-0  px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-900 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0', 'required']) }}
                                </div>
                                <div class="text-neutral-100">
                                    Comuna
                                </div>
                                <div clas="col-start-1 col-end-1 grid grid-cols-5">
                                    <div class="col-start-1 col-end-1">
                                        {{ Form::select('comuna_id', $comunas->pluck('comuna', 'id')->all(), null, ['class' => 'p-2', 'style' => 'width: 620px;']) }}
                                    </div>
                                </div>
                                <div class="text-neutral-100">
                                    Administrador
                                </div>
                                <div clas="col-start-1 col-end-1 grid grid-cols-5">
                                    <div class="col-start-1 col-end-1">
                                        {{ Form::select('comuna_id', $administradores->pluck('name', 'id')->all(), null, ['class' => 'p-2', 'style' => 'width: 620px;']) }}
                                    </div>
                                </div>
                                <div class="text-neutral-100">
                                    Capataz
                                </div>
                                <div clas="col-start-1 col-end-1 grid grid-cols-5">
                                    <div class="col-start-1 col-end-1">
                                        {{ Form::select('comuna_id', $capataz->pluck('name', 'id')->all(), null, ['class' => 'p-2', 'style' => 'width: 620px;']) }}
                                    </div>
                                </div>
                            </div>


                            {{-- fin campos --}}
                            {{-- Botones --}}
                            <div class="grid grid-cols-2 mt-5">
                                <div class="mx-auto">
                                    {{ Form::submit('Actualizar Campo', ['class' => 'mb-2 block w-full rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]']) }}
                                    {!! Form::close() !!}
                                </div>
                                <div class="mx-auto">
                                    <button type="button" data-te-ripple-init data-te-ripple-color="light"
                                        class="flex items-center rounded bg-danger px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                                        Eliminar Campo
                                    </button>
                                </div>
                            </div>
                              
                            {{-- fin botones --}}
                        </div>
                    </div>
                </div>

                {{-- fin --}}
            @endforeach
        </div>
    </div>
</div>
