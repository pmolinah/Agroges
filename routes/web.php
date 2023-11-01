<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CampoController;
use App\Http\Controllers\CuartelController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PlantacionController;
use App\Http\Controllers\CosechaController;
use App\Http\Controllers\ParametrosController;
use App\Http\Controllers\CuentaCorrienteController;
use App\Http\Controllers\GuiasController;
use App\Http\Controllers\CertificacionController;
use App\Http\Livewire\Vehiculos\Crudvehiculos;
use App\Models\empresa;
/*??
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

    Route::middleware(['web','auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {

    Route::get('/dashboard',function(){return view('dashboard');})->name('dashboard');
    Route::get('/Role', [RoleController::class, 'show']);
    // Rutas de User
    Route::get('/Index/User', [UserController::class, 'index'])->name('User.index');
    Route::get('/Nuevo/User', [UserController::class, 'create'])->name('User.create');
    Route::post('/Guardar/User',[UserController::class, 'store'])->name('User.store');
    Route::get('/Editar/{id}/User',[UserController::class,'edit'])->name('User.edit');
    Route::post('/Update/User',[UserController::class, 'update'])->name('User.update');

    //Rutas de Roles y Permisos
    Route::get('/Index/rolPermisos',[RoleController::class, 'index'])->name('RolePermisos.index');
    Route::get('/Create/Rol',[RoleController::class,'create'])->name('Rol.create');
    Route::post('/Guardar/Rol',[RoleController::class,'store'])->name('Rol.store');
    route::get('Edit/{rol}/Rol',[RoleController::class,'edit'])->name('roles.edit');
    route::put('Update/{role}/Rol',[RoleController::class,'update'])->name('roles.update');
    route::delete('Delete/{role}/Rol',[RoleController::class, 'delete'])->name('roles.destroy');

    //Rutas de Empresa
    Route::get('/Index/Empresa',[EmpresaController::class,'Index'])->name('Empresa.index');
    Route::get('(/Create/Empresa',[EmpresaController::class,'create'])->name('Empresa.create');
    Route::post('/Guardar/Empresa',[EmpresaController::class,'store'])->name('Empresa.store');
    Route::get('/Editar/{Empresa}/Empresa',[EmpresaController::class,'edit'])->name('Empresa.edit');
    route::put('Update/{empresa}/Empresa',[EmpresaController::class,'update'])->name('Empresa.update');
 
    //Rutas de Campos
    Route::get('/Create/Campos',[CampoController::class, 'create'])->name('Campo.create');
    Route::get('/Edit/{id}/Campos',[CampoController::class, 'edit'])->name('Campo.edit');
    Route::put('/Update/{id}/Campos',[CampoController::class, 'update'])->name('Campo.update');

    //Rutas de Cuarteles livewire
    Route::get('/Create/Cuartel', [CuartelController::class, 'create'])->name('Cuartel.create');

    // Rutas de plantación
    Route::get('/Index/Plantacion',[PlantacionController::class, 'index'])->name('Plantacion.index');
    Route::get('/Create/Plantacion',[PlantacionController::class, 'create'])->name('Plantacion.create');
    Route::post('/Store/Plantacion',[PlantacionController::class, 'store'])->name('Plantacion.store');
    // Rutas de cosecha
    Route::get('/Index/Cosechas',[CosechaController::class, 'index'])->name('Cosecha.index');
    Route::get('/Planificacion/Cosechas',[CosechaController::class, 'planificacion'])->name('Cosecha.planificacion');
    Route::get('/Cosechar/{id}/Cosecha',[CosechaController::class,'cosechar'])->name('Cosechar.cosecha');
    Route::get('create/Planificacion/Cosechas',[CosechaController::class, 'planificacionCreate'])->name('Cosecha.planificacionCreate');
    Route::post('/Store/Planificacion',[CosechaController::class, 'planificacionStore'])->name('Planificacion.store');
    Route::get('/Edit/{id}/Planificacion',[CosechaController::class, 'planificacionEdit'])->name('Planificacion.edit');
    Route::post('/Update/Planificacion/Cosechas',[CosechaController::class, 'planificacionUpdate'])->name('Planificacion.update');
    Route::post('/Store/Cosecha',[CosechaController::class, 'CosechaStore'])->name('Cosecha.store');
    Route::get('/Create/Cosechas',[CosechaController::class, 'create'])->name('Cosecha.create');
    
    //rutas de cosechas cerradas e informes
    Route::get('/Index/CosechasCerradas',[CosechaController::class,'indexCosechasCerradas'])->name('CosechasCerradas.index');
    Route::get('/Reporte/{planificacioncosecha_id}/Cosecha',[CosechaController::class, 'ReporteCosecha'])->name('Reporte.cosecha');
    Route::get('/Reporte/{planificacioncosecha_id}/Cosecha/{contratista_id}/Contratista',[CosechaController::class, 'ReporteCosechaContratista'])->name('Reporte.cosecha.contratista');

   //rutas de Guias Despacho
   Route::get('/Guias/index',[GuiasController::class,'index'])->name('Guias.index'); 
   Route::get('/Guias/show',[GuiasController::class, 'show'])->name('Guias.show');
   Route::get('Guia/{guia_id}/Despacho',[GuiasController::class, 'GuiaDespacho'])->name('Guia.despacho');
    
    // rutas de guias de recepcion    //
    Route::get('/Guias/Recepcion',[GuiasController::class, 'GuiaRecepcion'])->name('Guias.recepcion');        

    //rutas de parametros de sistema
    Route::get('/Parametros/Index',[ParametrosController::class,'index'])->name('Parametros.index');

    //rutas de Cuenta Corriente de Envases
    Route::get('Cuenta/Corriente/Envases',[CuentaCorrienteController::class, 'index'])->name('CuentaCorriente.index');

    // rutas de certificacion
    Route::get('Index/Certificacion',[CertificacionController::class, 'index'])->name('Certificacion.index');

    //cuenta corriente
    Route::post('/store/cuentacorriente/exportadora',[CuentaCorrienteController::class, 'store'])->name('cuentacorriente.store');
    Route::post('store/cuentacorriente/campo',[CuentaCorrienteController::class, 'storeCampo'])->name('CuenEnvaseCampo.store');
    
    //rutas de Administración de Vehiculos
    Route::get('/Administracion/Vehiculos',[Crudvehiculos::class, 'render'])->name('Vehiculos.index');

    
    //Rutas de Organización
    // Route::get('/Organizacion/Campos', [CamposController::class, 'index'])->name('Organizacion.index');
    Route::get('/Organizacion/Campos/Cuarteles', function () {
        
        return view('Organizacion.index');
    
    });
     
});
