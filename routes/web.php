<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\ShowsController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\ContactUSController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\FoundationController;
use App\Http\Controllers\FounderController;
use App\Http\Controllers\PoamsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\KidsController;
use App\Http\Controllers\IslamophobiaController;
use App\Http\Controllers\TalentsController;
use App\Http\Controllers\DramaController;
use App\Http\Controllers\FashionController;
use App\Http\Controllers\FasionController;
use App\Http\Controllers\paymentProviderController;
use App\Http\Controllers\acdmyResearchController;
use App\Http\Controllers\charityController;
use App\Http\Controllers\phoghyStudioController;
use App\Http\Controllers\publishingHouseController;
use App\Http\Controllers\readController;
use App\Http\Controllers\writerController;
use App\Http\Controllers\soliciotersController;
use App\Http\Controllers\elmehaController;
use App\Http\Controllers\alammwazyController;
use App\Http\Controllers\crimeController;
use App\Http\Controllers\ghitaController;
use App\Http\Controllers\hakmtElMahkmaController;
use App\Http\Controllers\kidSongsController;
use App\Http\Controllers\nazlyController;
use App\Http\Controllers\rawyController;
use App\Http\Controllers\roqetaController;
use App\Http\Controllers\watchController;


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
    return view('NAA-Index.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('NAA-Index', IndexController::class);
Route::resource('NAA-Channels', ChannelController::class);
Route::resource('NAA-Shows', ShowsController::class);
Route::resource('NAA-Office', OfficeController::class);
Route::resource('NAA-ContactUS', ContactUSController::class);
Route::resource('NAA-AboutUS', AboutUsController::class);
Route::resource('NAA-Donate', DonateController::class);
Route::resource('NAA-Foundation', FoundationController::class);
Route::resource('NAA-Founder', FounderController::class);

Route::resource('NAA-Drama', DramaController::class);
Route::resource('NAA-Fashion', FashionController::class);
Route::resource('NAA-Fasion', FasionController::class);
Route::resource('NAA-Poams', PoamsController::class);
Route::resource('NAA-News', NewsController::class);
Route::resource('NAA-Islamophobia', IslamophobiaController::class);
Route::resource('NAA-Talents', TalentsController::class);
Route::resource('NAA-Kids', kidsController::class);

Route::resource('NAA-ContactUsAll', kidsController::class);

Route::resource('NAA-acdmyResearch', acdmyResearchController::class);
Route::resource('NAA-charity', charityController::class);
Route::resource('NAA-phoghyStudio', phoghyStudioController::class);
Route::resource('NAA-publishingHouse', publishingHouseController::class);
Route::resource('NAA-read', readController::class);
Route::resource('NAA-writer', writerController::class);
Route::resource('NAA-solicioters', soliciotersController::class);
Route::resource('NAA-elmeha', elmehaController::class);


Route::resource('NAA-alammwazy', alammwazyController::class);
Route::resource('NAA-crime', crimeController::class);
Route::resource('NAA-ghita', ghitaController::class);
Route::resource('NAA-hakmtElMahkma', hakmtElMahkmaController::class);
Route::resource('NAA-khltbeta', khltbetaController::class);
Route::resource('NAA-kidSongs', kidSongsController::class);
Route::resource('NAA-nazly', nazlyController::class);
Route::resource('NAA-rawy', rawyController::class);
Route::resource('NAA-roqeta', roqetaController::class);
Route::resource('NAA-watch', watchController::class);



Route::get('payment', [paymentProviderController::class, 'getCheckoutID'])->name('payment');
Route::get('donatePayment', [paymentProviderController::class, 'getDonateCheckoutID'])->name('donatePayment');
Route::get('contactusPayment', [paymentProviderController::class, 'getContactUSCheckoutID'])->name('contactusPayment');


