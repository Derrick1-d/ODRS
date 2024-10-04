<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;

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


Route::get('/', function () {
    return view('welcome');
});

//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

use App\Http\Controllers\UserController;

// Route::post('/send-alert', [UserController::class, 'sendAlert'])->name('send.alert');

Route::get('/report', [UserController::class, 'showReportForm'])->name('report.form');
Route::get('/track', [UserController::class, 'trackIncident'])->name('track.incident');

Route::middleware(['auth'])->group(function () {
    Route::get('/report', [UserController::class, 'showReportForm'])->name('report.form');
    Route::post('/report', [UserController::class, 'submitReport'])->name('report.submit');
    Route::get('/track', [UserController::class, 'trackIncident'])->name('track.incident');
    Route::post('/send-alert', [UserController::class, 'sendAlert'])->name('alert.send');

});
Route::get('/incidents/{id}', [UserController::class, 'getIncident']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\AdminController;

Route::prefix('admin')->group(function () {
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login']);
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/teams', [AdminController::class, 'manageTeams'])->name('admin.teams');
        Route::post('/teams/save', [AdminController::class, 'saveTeam'])->name('admin.teams.save');
        Route::delete('/teams/{id}', [AdminController::class, 'deleteTeam'])->name('admin.teams.delete');
        Route::get('/fire-alerts', [AdminController::class, 'manageFireAlerts'])->name('admin.fire-alerts');
        Route::post('/fire-alerts/{id}/update', [AdminController::class, 'updateFireAlert'])->name('admin.fire-alerts.update');
        Route::post('/fire-alerts/{incidentId}/assign', [AdminController::class, 'assignTeam'])->name('admin.fire-alerts.assign');
        Route::get('/reports', [AdminController::class, 'viewReports'])->name('admin.reports');
        Route::get('/settings', [AdminController::class, 'websiteSettings'])->name('admin.settings');
        Route::post('/settings/update', [AdminController::class, 'updateSettings'])->name('admin.settings.update');
        Route::get('/profile', [AdminController::class, 'manageProfile'])->name('admin.profile');
        Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
        // Route::post('/admin/update-status/{id}', [AdminController::class, 'updateStatus'])->name('admin.updateStatus');
        Route::post('/admin/fire-alerts/{id}/update', [AdminController::class, 'updateStatus'])->name('admin.updateStatus');
        Route::get('/admin/new-alerts-count', [AdminController::class, 'getNewAlertsCount'])->name('admin.new-alerts-count');
        Route::get('/admin/teams/search', [AdminController::class, 'searchTeams'])->name('admin.teams.search');
        Route::delete('/fire-alerts/{id}', [AdminController::class, 'destroy'])->name('admin.fire-alerts.destroy');
        Route::get('/fire-alerts/track/{id}', [AdminController::class, 'track'])->name('admin.fire-alerts.track');
        Route::get('/fire-alerts/map/{id}', [AdminController::class, 'showMap'])->name('admin.fire-alerts.map');

    });


Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');

});
