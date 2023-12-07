<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Donations;
use App\Http\Controllers\Project;
use App\Http\Controllers\Volunteers;
use Illuminate\Support\Facades\Route;
use App\Admin\Controllers\AuthController;
use App\Http\Controllers\MailController;


Route::get('/phpinfo', function () {
    return view('info');
});
Route::get('/aboutus', function () {
    return view('about');
})->name('about');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/user/userprofile', function () {
    return view('userprofile');
})->name('userprofile');

Route::get('/gallery', function () {
    return view('gallary');
})->name('gallary');





Route::get('/', [AuthController::class, 'guest'])->name('userLogin');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/user/home', [AuthController::class, 'home'])->name('home');

Route::get('/contact', [MailController::class, 'mailform'])->name('contact');
Route::post('/send-mail', [MailController::class, 'maildata'])->name('send_mail');

Route::get('/categories/educational', [AuthController::class, 'educational'])->name('educational');
Route::get('/categories/health', [AuthController::class, 'health'])->name('health');
Route::get('/categories/cleanWater', [AuthController::class, 'cleanWater'])->name('cleanWater');
Route::get('/categories/nutrition', [AuthController::class, 'nutrition'])->name('nutrition');
Route::get('/categories/event/donateMoney', [AuthController::class, 'donateMoney'])->name('donateMoney');
Route::get('/categories/event/donateGoods', [AuthController::class, 'donateGoods'])->name('donateGoods');



Route::post('/postRegister', [AuthController::class, 'postRegister'])->name('postRegister');
Route::post('/postLogin', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('categories/donateMoney/make-donation', [AuthController::class, 'makeDonation'])->name('make-donation');
Route::post('categories/donateMoney/make-good-donation', [AuthController::class, 'makeGoodDonation'])->name('make-good-donation');
Route::post('/upload-profile-pic', [AuthController::class, 'uploadProfilePic'])->name('upload.profile.pic');
Route::post('/update-first-name', [AuthController::class, 'updateFName']);
Route::post('/update-last-name', [AuthController::class, 'updateLName']);
Route::post('/update-phone-number', [AuthController::class, 'updatePhone']);
Route::post('/update-address', [AuthController::class, 'updateAddress']);

//project info and join
Route::get('/categories/educational/EducationProject/{id}', [AuthController::class, 'EducationalprojectDetails'])->name('EducationalProject.Details');
//join
Route::Post('/categories/educational/EducationProject/join', [AuthController::class, 'assignProject'])->name('EducationalProject.assign');

//view donation details
Route::get('/profile/info/{id}', [AuthController::class, 'getMoneyDonations'])->name('getMoneyDonations.Details');


//money donations


// ADMIN ---------------------------------------------------------------------------------------------------


//route to admin dash board
Route::get('/admin/home', function () {
    return view('adminDashBoard');
})->name('admin.home')->middleware('Is_admin');



//-----project create section-----

//go to project create section
Route::get('/admin/createProject', function () {
    return view('NewProject');
})->name('admin.createProjectPage')->middleware('Is_admin');

//create project
Route::post('/admin/createProject', [Project::class, 'createProject'])->name('project.create');

//------all projects section--------
Route::get('/admin/allProjects', [Project::class, 'getAllProjects'])->name('admin.allProjects')->middleware('Is_admin');

//edit project
Route::get('/admin/editProject/{id}', [Project::class, 'editProject'])->name('admin.editProject')->middleware('Is_admin');
Route::post('/admin/editProject/{id}', [Project::class, 'update'])->name('project.update')->middleware('Is_admin');
Route::post('/admin/editProject/delete/{id}', [Project::class, 'deleteProject'])->name('project.delete')->middleware('Is_admin');

//one project information
Route::get('/admin/projectInfo/{id}', [Project::class, 'projectInfo'])->name('project.info')->middleware('Is_admin');
Route::get('/admin/projectInfo/view/{id}', [Project::class, 'getProjectDetails'])->name('project.details')->middleware('Is_admin');


//Manage Admin users
Route::get('/admin/manageAdmin', [Admin::class, 'getAllAdmins'])->name('admin.manage')->middleware('Is_admin');

//Manage regular users
Route::get('/admin/manageUsers', [Admin::class, 'getAllUsers'])->name('admin.manageUsers')->middleware('Is_admin');





//create admin
Route::get('/admin/goCreateAdmin', [Admin::class, 'createAdmin'])->name('admin.create')->middleware('Is_admin');
Route::post('/admin/createAdmin', [Admin::class, 'AdminPost'])->name('admin.post')->middleware('Is_admin');

//edit admin
Route::get('/admin/goEditAdmin/{id}', [Admin::class, 'editAdmin'])->name('admin.edit')->middleware('Is_admin');
Route::post('/admin/EditAdmin/{id}', [Admin::class, 'updateAdmin'])->name('admin.update')->middleware('Is_admin');


//volunteer info
Route::get('/admin/volunteerInfo', [Volunteers::class, 'VolunteerInfo'])->name('admin.VolunteerInfo')->middleware('Is_admin');
//one volunteer info
Route::get('/admin/volunteerInfo/volunteer/{id}', [Volunteers::class, 'getUserDetailsById'])->name('admin.viewVolunteer')->middleware('Is_admin');

//filter volunteers
Route::post('/admin/volunteerInfo/ByCategory', [Volunteers::class, 'VolunteerInfoByCategory'])->name('admin.VolunteerInfoByCategory')->middleware('Is_admin');

//project info
Route::post('/admin/volunteerInfo/ByCategory', [Volunteers::class, 'VolunteerInfoByCategory'])->name('admin.VolunteerInfoByCategory')->middleware('Is_admin');

//donation info

// money donation
Route::get('/admin/moneyDonationInfo', [Donations::class, 'getAllMoneyProjects'])->name('admin.moneyDonationInfo')->middleware('Is_admin');

//good donation
Route::get('/admin/DonateDonationInfo', [Donations::class, 'getAllGoodsProjects'])->name('admin.GoodDonationInfo')->middleware('Is_admin');
