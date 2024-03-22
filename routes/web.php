<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacanteController;
use App\Http\Controllers\OcupacionController;
use App\Http\Controllers\FuncionController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\HabilidadController;
use App\Http\Controllers\CompetenciaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\SalarioController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\ProcesoSeleccionController;
use App\Http\Controllers\ResultadoProcesoController;

// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\LogoutController;
// use App\Http\Controllers\HomeController;
// use Illuminate\Auth\Events\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {return view('welcome');});

Route::get('/',[IndexController::class, 'create']);







// Route::get('role/create',[RoleController::class, 'create'])->name('role.create');
// Route::post('role/store',[RoleController::class, 'store'])->name('role.store');

// Route::get('recruiter/create',[RecruiterController::class, 'create'])->name('recruiter.create');
// Route::post('recruiter/store',[RecruiterController::class, 'store'])->name('recruiter.store');

// Route::get('user/create',[UserController::class, 'create'])->name('user.create');
// Route::post('user/store',[UserController::class, 'store'])->name('user.store');





// Route::get('login',[LoginController::class, 'index'])->name('login');
// Route::post('login',[LoginController::class, 'store']);

// Route::get('logout',[LogoutController::class, 'index'])->name('logout');
// Route::get('/home',[HomeController::class, 'index'])->name('home.index')->middleware('auth');

//RRECLUTADOR



///---------------------imagenes


//------------------ vacante

Route::get('vacante/create',[vacanteController::class, 'create'])->name('vacante.create');
Route::post('vacante/store',[vacanteController::class, 'store'])->name('vacante.store');
Route::get('vacante/index',[vacanteController::class, 'index'])->name('vacante.index');

//------------------ ocupaciones

Route::get('ocupacion/create',[OcupacionController::class, 'create'])->name('ocupacion.create');
Route::post('ocupacion/store',[OcupacionController::class, 'store'])->name('ocupacion.store');
Route::get('ocupacion/index',[OcupacionController::class, 'index'])->name('ocupacion.index');
//------------------ funcion

Route::get('funcion/create',[FuncionController::class, 'create'])->name('funcion.create');
Route::post('funcion/store',[FuncionController::class, 'store'])->name('funcion.store');

//------------------ cargo

Route::get('cargo/create',[CargoController::class, 'create'])->name('cargo.create');
Route::post('cargo/store',[CargoController::class, 'store'])->name('cargo.store');

//------------------ habilidad
Route::get('habilidad/create',[HabilidadController::class, 'create'])->name('habilidad.create');
Route::post('habilidad/store',[HabilidadController::class, 'store'])->name('habilidad.store');

//------------------ competencia
Route::get('competencia/create',[CompetenciaController::class, 'create'])->name('competencia.create');
Route::post('competencia/store',[CompetenciaController::class, 'store'])->name('competencia.store');

//------------------empresa
Route::get('empresa/create',[EmpresaController::class, 'create'])->name('empresa.create');
Route::post('empresa/store',[EmpresaController::class, 'store'])->name('empresa.store');
Route::get('empresa/index',[EmpresaController::class, 'index'])->name('empresa.index');
Route::get('empresa/edit/{empresa}',[EmpresaController::class, 'edit'])->name('empresa.edit');
Route::put('empresa/update/{empresa}',[EmpresaController::class, 'update'])->name('empresa.update');
Route::get('empresa/show/{empresa}',[EmpresaController::class, 'show'])->name('empresa.show');
Route::delete('empresa/destroy/{empresa}',[EmpresaController::class, 'destroy'])->name('empresa.destroy');
//-------------------salario

Route::get('salario/create',[SalarioController::class, 'create'])->name('salario.create');
Route::post('salario/store',[SalarioController::class, 'store'])->name('salario.store');

//-------------------horario

Route::get('horario/create',[HorarioController::class, 'create'])->name('horario.create');
Route::post('horario/store',[HorarioController::class, 'store'])->name('horario.store');

//-------------------contrato

Route::get('contrato/create',[ContratoController::class, 'create'])->name('contrato.create');
Route::post('contrato/store',[ContratoController::class, 'store'])->name('contrato.store');

//-------------------municipio

Route::get('municipio/create',[MunicipioController::class, 'create'])->name('municipio.create');
Route::post('municipio/store',[MunicipioController::class, 'store'])->name('municipio.store');
Route::get('municipio/index',[MunicipioController::class, 'index'])->name('municipio.index');
Route::get('municipio/show/{municipio}',[MunicipioController::class, 'show'])->name('municipio.show');

//------------------------departamentos
Route::get('departamento/create', [DepartamentoController::class, 'create'])->name('departamento.create');
Route::post('departamento/store', [DepartamentoController::class, 'store'])->name('departamento.store');


//------------------------Candidatos
Route::get('/candidatos', [CandidatoController::class, 'index'])->name('candidatos.index');
Route::post('/candidatos', [CandidatoController::class, 'store'])->name('candidatos.store');
Route::get('/candidatos/create', [CandidatoController::class, 'create'])->name('candidatos.create');

//------------------------proceso de seleccion

Route::get('/procesos_seleccion', [ProcesoSeleccionController::class, 'index'])->name('procesos_seleccion.index');
Route::get('/procesos_seleccion/create', [ProcesoSeleccionController::class, 'create'])->name('procesos_seleccion.create');
Route::post('/procesos_seleccion', [ProcesoSeleccionController::class, 'store'])->name('procesos_seleccion.store');

//------------------------resultado de seleccion
Route::get('/resultados/create', [ResultadoProcesoController::class, 'create'])->name('resultados.create');
Route::post('/resultados', [ResultadoProcesoController::class, 'store'])->name('resultados.store');
Route::get('/resultados', [ResultadoProcesoController::class, 'index'])->name('resultados.index');


//------------------------roles
Route::get('/roles/create', [ResultadoProcesoController::class, 'create'])->name('roles.create');
Route::post('/roles', [ResultadoProcesoController::class, 'store'])->name('roles.store');
Route::get('/roles', [ResultadoProcesoController::class, 'index'])->name('roles.index');




Route::get('index',[IndexController::class, 'create'])->name('inicio');


