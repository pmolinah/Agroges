<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CampoController;
use App\Http\Controllers\CuartelController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PlantacionController;
use App\Http\Controllers\CosechaController;

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
    
    // Rutas de cosecha
    Route::get('/Index/Cosechas',[CosechaController::class, 'index'])->name('Cosecha.index');

    
    //Rutas de Organización
    // Route::get('/Organizacion/Campos', [CamposController::class, 'index'])->name('Organizacion.index');
    Route::get('/Organizacion/Campos/Cuarteles', function () {
        
        return view('Organizacion.index');
    
    });
    

    
});
