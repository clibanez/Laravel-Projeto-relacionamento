<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Preference;
use App\Models\Course;
use App\Models\Module;
use App\Models\Lesson;


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
       $user->preference->update($data);  //Metodo update(); caso tenha uma preferencia
   }else{
       //$user->preference()->create($data);   //Podemos usar o metodo create();

       $preference = new Preference($data);  //Podemos instanciar um objeto e usar o metodo save();
       $user->preference()->save($preference);
   }
   $user->refresh();
   $user->preference->delete();  //deletando as preferencias do usuário
   dd($user->preference);
});

Route::get('One-To-Many', function(){
  //$course = Course::create(['name' => 'Desenvolvimento','avaliable' => 1 ]); //Criando um Course
  $course = Course::first(); //pegando o primeiro course
  $data = [
      'name' => 'Módule x1'
  ];//similando os dados que vem da request

  $course->modules()->create($data);


  //$course->modules->get(); //Lembrando aqu usando esse metodo ele traz todos os modulos do curso.
  $module = $course->modules;


  dd($module);

});
