<?php

use Illuminate\Support\Facades\Route;

# USAMOS EL CONTROLADOR DE HOME
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/', HomeController::class)->name('home'); # Busca el método invoke


/* Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');
Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');
// Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');
Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');
Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');
Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');
Route::delete('cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy'); */

Route::resource('cursos', CursoController::class);


Route::view('nosotros', 'nosotros')->name('nosotros');



# Ruta para el envío del email  
Route::get('contactanos', function () {
    $correo = new ContactanosMailable();
    Mail::to('contacto@jfcm.com.co')->send($correo);
    return 'Mensjae enviado';
});
