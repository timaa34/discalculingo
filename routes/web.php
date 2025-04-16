m <?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/listado', function () {

    $salones = ["Caballito", "Gral. Rodriguez", "Cañuelas"];

    return view('listado_salones')->with("s",$salones);

});
