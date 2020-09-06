use Illuminate\Support\Facades\Route;
use App\User;
use App\JhonatanPermission\Models\Role;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function () {
    
    /*

return   Role::create([
        'name' => 'Admin',
        'slug' => 'admin',
        'description' => 'Administrator',
        'full-access' => 'yes'

    ]);

      return   Role::create([
        'name' => 'Guest',
        'slug' => 'guest',
        'description' => 'guest',
        'full-access' => 'no'

    ]);
    

    return   Role::create([
        'name' => 'test',
        'slug' => 'test',
        'description' => 'test',
        'full-access' => 'no'

    ]);
    */


    $user = User::find(1);

    /*     es: crea un nuevo registro */ 
    //$user->roles()->attach([1,2,3]);  
    
    /*      es: delete un nuevo registro   */ 
    
    //$user->roles()->detach([3]);


    /*     es: elimina de la base de datos los roles que no estén en el array asi 
        como tambien crea aquellos registros que no estén en la base de datos.    */ 
    $user->roles()->sync([1,2]);

    return $user->roles;




