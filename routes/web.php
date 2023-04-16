<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', "HomeController@index") -> name("home");

Route::get('/about', "HomeController@about") -> name("about");

Route::get("/contact", "ContactController@showForm") -> name("contact");
Route::post("/contact", "ContactController@contact");

Route::post("/user/{id}/{name?}", "ContactController@user")
    -> name("user")
    //-> where("id", "[0-9]+");
    -> where(["id" => "[0-9]+", "name" => "[a-z]+"]);

Route::match(['get', 'post'], "/support-form", "SupportFormController@support") -> name("support-form.support");

Route::patch("/users/{id}/guncelle", "UserController@update") -> name("user.update");

Route::put("/users/{id}/tumunu-guncelle", "UserController@updateAll") -> name("user.updateAll");

Route::delete("/users/{id}/delete", "UserController@delete") -> name("user.delete");

Route::any("hersey", function(){
   dd("hersey geldi");
});

Route::resource("article", "ArticleController");

//Route::resource("/api/article", "Api/ApiController");

Route::get("/users/{id}", "UserController@show")
    -> name("user.show")
    -> whereNumber("id");

Route::get("/users/{name}", "UserController@showName")
    -> name("user.showName")
//    -> whereAlpha("name");
    -> whereAlphaNumeric("name");

Route::get("/user/{role}", "UserController@roleCheck")
    -> name("user.roleCheck")
    -> whereIn("role", ["admin", "user"]);

Route::prefix("admin") -> group(function (){
    Route::get("/edit-article", "ArticleController@edit") -> name("admin.articleEdit");
    Route::get("/article/{id}/delete", "ArticleController@destroy") -> name("admin.articleDestroy");
});

Route::controller("UserController") -> group(function (){
    Route::get("/get-user", "getUser");
    Route::get("/delete-user", "deleteUser");
});
