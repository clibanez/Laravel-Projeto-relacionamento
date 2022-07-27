<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Preference;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('One-To-One', function() {
   $user =  User::with('preference')->find(2);
   $data = [
       'background_color' => '#fff',
   ];

   if($user->preference){
       $user->preference->update($data);  //Metodo update caso tenha uma preferencia
   }else{
       //$user->preference()->create($data);   //Podemos usar o metodo create

       $preference = new Preference($data);  //Podemos instanciar um objeto e usar o metodo save();
       $user->preference()->save($preference);
   }
   $user->refresh();
   $user->preference->delete();  //deletando as preferencias do usuário
   dd($user->preference);
});
