<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoolEventsController;
use App\Http\Controllers\PoolTimingsController;
use App\Http\Controllers\PoolStaffListController;
use App\Http\Controllers\GardenEventsController;
use App\Http\Controllers\GardenTimingsController;
use App\Http\Controllers\GardenStaffListController;
use App\Http\Controllers\TennisEventsController;
use App\Http\Controllers\TennisTimingsController;
use App\Http\Controllers\TennisStaffListController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PaymentHistoryController;
use App\Http\Controllers\ResidentProfilesController;
use App\Http\Controllers\ResidentSubcriptionsController;
use App\Http\Controllers\ResidentVehicleRegController;
use App\Http\Controllers\VisitorVehicleRegController;
use App\Http\Controllers\VisitorProfilesController;
use App\Http\Controllers\VisitorSubcriptionsController;
use App\Http\Controllers\VisitorTimingsController;
use App\Http\Controllers\HandleRequestController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\CabinResidentListController;
use App\Http\Controllers\StudioResidentListController;
use App\Http\Controllers\TownHouseResidentListController;
use App\Http\Controllers\StudioManageServicesController;
use App\Http\Controllers\TownHouseServicesRequestedController;
use App\Http\Controllers\StudioServicesReqController;
use App\Http\Controllers\TownHouseManageServicesController;
use App\Http\Controllers\ManageSecurityController;
use App\Http\Controllers\ManageTimingsController;
use App\Http\Controllers\AptStaffListController;
use App\Http\Controllers\VisitorStaffListController;
use App\Http\Controllers\CabinServiceReqController;
use App\Http\Controllers\CabinManageServicesController;

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
    return view('index');
});

// Route::get('/chatbot', function () {
//     return view('chat');
// });

Route::get('/chatbot',[ChatController::class,'show']);
Route::get('/chatbot/userChat',[ChatController::class,'create']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contactus', function () {
    return view('contactus');
});


// Register

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register/storeRegister',[RegisterController::class,'store']);

// Login

Route::get('/login',[RegisterController::class,'create']);
Route::post('/login/storeLogin',[RegisterController::class,'show']);

Route::get('/forgotPassword', function () {
    return view('forgotPassword');
});

Route::get('/feedback',[FeedBackController::class,'index']);
Route::post('/feedbackStore',[FeedBackController::class,'store']);

Route::get('/maps', function () {
    return view('maps');
});

// Apartment Manager

Route::get('/apartmentManagerServices', function () {
    return view('ApartmentManagerServices.apartmentManagerServices');
});

// Route::get('/apartmentManagerServices/report', function () {
//     return view('ApartmentManagerServices.apartmentManagerReport');
// });

Route::get('/apartmentManagerServices/report',[ResidentProfilesController::class,'indexReport']);

// Apartment Manager -> Cabin Services

Route::get('/apartmentManager/CabinServices', function () {
    return view('ApartmentManagerServices.Cabin.cabinServices');
});

Route::get('/apartmentManager/Cabin/residentList',[CabinResidentListController::class,'index']);
Route::get('/apartmentManager/Cabin/editResidentList',[CabinResidentListController::class,'edit']);
Route::post('/apartmentManager/Cabin/updateResidentList',[CabinResidentListController::class,'update']);
Route::get('/apartmentManager/Cabin/deleteResidentList',[CabinResidentListController::class,'destroy']);
Route::get('/apartmentManager/Cabin/createResidentList',[CabinResidentListController::class,'create']);
Route::post('/apartmentManager/Cabin/storeResidentList',[CabinResidentListController::class,'store']);

// Route::get('/apartmentManager/Cabin/ManageServices', function () {
//     return view('ApartmentManagerServices.Cabin.manageServices');
// });

Route::get('/apartmentManager/Cabin/manageService',[CabinManageServicesController::class,'show']);
Route::get('/apartmentManager/Cabin/editManageService',[CabinManageServicesController::class,'edit']);
Route::post('/apartmentManager/Cabin/updateManageService',[CabinManageServicesController::class,'update']);
Route::get('/apartmentManager/Cabin/deleteManageService',[CabinManageServicesController::class,'destroy']);
Route::get('/apartmentManager/Cabin/createManageService',[CabinManageServicesController::class,'create']);
Route::post('/apartmentManager/Cabin/storeManageService',[CabinManageServicesController::class,'store']);

Route::get('/apartmentManager/Cabin/serviceReq',[CabinServiceReqController::class,'show']);
Route::get('/apartmentManager/Cabin/editServiceReq',[CabinServiceReqController::class,'edit']);
Route::post('/apartmentManager/Cabin/updateServiceReq',[CabinServiceReqController::class,'update']);
Route::get('/apartmentManager/Cabin/deleteServiceReq',[CabinServiceReqController::class,'destroy']);
Route::get('/apartmentManager/Cabin/createServiceReq',[CabinServiceReqController::class,'create']);
Route::post('/apartmentManager/Cabin/storeServiceReq',[CabinServiceReqController::class,'store']);

// Apartment Manager -> Studio Services

Route::get('/apartmentManager/StudioServices', function () {
    return view('ApartmentManagerServices.Studio.studioServices');
});

Route::get('/apartmentManager/Studio/residentList',[StudioResidentListController::class,'index']);
Route::get('/apartmentManager/Studio/editResidentList',[StudioResidentListController::class,'edit']);
Route::post('/apartmentManager/Studio/updateResidentList',[StudioResidentListController::class,'update']);
Route::get('/apartmentManager/Studio/deleteResidentList',[StudioResidentListController::class,'destroy']);
Route::get('/apartmentManager/Studio/createResidentList',[StudioResidentListController::class,'create']);
Route::post('/apartmentManager/Studio/storeResidentList',[StudioResidentListController::class,'store']);

Route::get('/apartmentManager/Studio/manageServices',[StudioManageServicesController::class,'index']);
Route::get('/apartmentManager/Studio/editManageServices',[StudioManageServicesController::class,'edit']);
Route::post('/apartmentManager/Studio/updateManageServices',[StudioManageServicesController::class,'update']);
Route::get('/apartmentManager/Studio/deleteManageServices',[StudioManageServicesController::class,'destroy']);
Route::get('/apartmentManager/Studio/createManageServices',[StudioManageServicesController::class,'create']);
Route::post('/apartmentManager/Studio/storeManageServices',[StudioManageServicesController::class,'store']);
    
Route::get('/apartmentManager/Studio/servicesRequested',[StudioServicesReqController::class,'index']);
Route::get('/apartmentManager/Studio/editServicesRequested',[StudioServicesReqController::class,'edit']);
Route::post('/apartmentManager/Studio/updateServicesRequested',[StudioServicesReqController::class,'update']);
Route::get('/apartmentManager/Studio/deleteServicesRequested',[StudioServicesReqController::class,'destroy']);
Route::get('/apartmentManager/Studio/createServicesRequested',[StudioServicesReqController::class,'create']);
Route::post('/apartmentManager/Studio/storeServicesRequested',[StudioServicesReqController::class,'store']);


// Apartment Manager -> TownHouse Services

Route::get('/apartmentManager/TownHouseServices', function () {
    return view('ApartmentManagerServices.TownHouse.townHouseServices');
});

Route::get('/apartmentManager/TownHouse/residentList',[TownHouseResidentListController::class,'index']);
Route::get('/apartmentManager/TownHouse/editResidentList',[TownHouseResidentListController::class,'edit']);
Route::post('/apartmentManager/TownHouse/updateResidentList',[TownHouseResidentListController::class,'update']);
Route::get('/apartmentManager/TownHouse/deleteResidentList',[TownHouseResidentListController::class,'destroy']);
Route::get('/apartmentManager/TownHouse/createResidentList',[TownHouseResidentListController::class,'create']);
Route::post('/apartmentManager/TownHouse/storeResidentList',[TownHouseResidentListController::class,'store']);

Route::get('/apartmentManager/TownHouse/manageServices',[TownHouseManageServicesController::class,'index']);
Route::get('/apartmentManager/TownHouse/editManageServices',[TownHouseManageServicesController::class,'edit']);
Route::post('/apartmentManager/TownHouse/updateManageServices',[TownHouseManageServicesController::class,'update']);
Route::get('/apartmentManager/TownHouse/deleteManageServices',[TownHouseManageServicesController::class,'destroy']);
Route::get('/apartmentManager/TownHouse/createManageServices',[TownHouseManageServicesController::class,'create']);
Route::post('/apartmentManager/TownHouse/storeManageServices',[TownHouseManageServicesController::class,'store']);
    
Route::get('/apartmentManager/TownHouse/servicesRequested',[TownHouseServicesRequestedController::class,'index']);
Route::get('/apartmentManager/TownHouse/editServicesRequested',[TownHouseServicesRequestedController::class,'edit']);
Route::post('/apartmentManager/TownHouse/updateServicesRequested',[TownHouseServicesRequestedController::class,'update']);
Route::get('/apartmentManager/TownHouse/deleteServicesRequested',[TownHouseServicesRequestedController::class,'destroy']);
Route::get('/apartmentManager/TownHouse/createServicesRequested',[TownHouseServicesRequestedController::class,'create']);
Route::post('/apartmentManager/TownHouse/storeServicesRequested',[TownHouseServicesRequestedController::class,'store']);

// Building Manager 

Route::get('/buildingManager/buildingManagerServices', function () {
    return view('BuildingManagerServices.buildingManagerServices');
});

// Route::get('/buildingManager/apartmentManagerStaffList', function () {
//     return view('BuildingManagerServices.apartmentManagerStaffList');
// });

Route::get('/buildingManager/aptStaffList',[AptStaffListController::class,'show']);
Route::get('/buildingManager/editAptStaffList',[AptStaffListController::class,'edit']);
Route::post('/buildingManager/updateAptStaffList',[AptStaffListController::class,'update']);
Route::get('/buildingManager/deleteAptStaffList',[AptStaffListController::class,'destroy']);
Route::get('/buildingManager/createAptStaffList',[AptStaffListController::class,'create']);
Route::post('/buildingManager/storeAptStaffList',[AptStaffListController::class,'store']);

Route::get('/buildingManager/parking',[ParkingController::class,'show']);
Route::get('/buildingManager/editParking',[ParkingController::class,'edit']);
Route::post('/buildingManager/updateParking',[ParkingController::class,'update']);
Route::get('/buildingManager/deleteParking',[ParkingController::class,'destroy']);
Route::get('/buildingManager/createParking',[ParkingController::class,'create']);
Route::post('/buildingManager/storeParking',[ParkingController::class,'store']);

// Route::get('/buildingManager/report', function () {
//     return view('BuildingManagerServices.buildingManagerReport');
// });
Route::get('/buildingManager/report',[RegisterController::class,'showBuidlingReport']);

Route::get('/buildingManager/staffPortal', function () {
    return view('BuildingManagerServices.staffPortal');
});

Route::get('/buildingManager/tennisEvents', function () {
    return view('BuildingManagerServices.tennisEvents');
});

Route::get('/buildingManager/tennisTimings', function () {
    return view('BuildingManagerServices.tennisTimings');
});

Route::get('/buildingManager/visitorStaffList',[VisitorStaffListController::class,'show']);
Route::get('/buildingManager/editVisitorStaffList',[VisitorStaffListController::class,'edit']);
Route::post('/buildingManager/updateVisitorStaffList',[VisitorStaffListController::class,'update']);
Route::get('/buildingManager/deleteVisitorStaffList',[VisitorStaffListController::class,'destroy']);
Route::get('/buildingManager/createVisitorStaffList',[VisitorStaffListController::class,'create']);
Route::post('/buildingManager/storeVisitorStaffList',[VisitorStaffListController::class,'store']);

// Garden Manager

Route::get('/gardenManager/services', function () {
    return view('GardenManagerServices.gardenManagerServices');
});

Route::get('/gardenManager/gardenAdvertisements', function () {
    return view('GardenManagerServices.gardenAdvertisements');
});

// Garden Events

Route::get('/gardenManager/gardenEvents',[GardenEventsController::class,'show']);
Route::get('/gardenManager/editGardenEvents',[GardenEventsController::class,'edit']);
Route::post('/gardenManager/updateGardenEvents',[GardenEventsController::class,'update']);
Route::get('/gardenManager/deleteGardenEvents',[GardenEventsController::class,'destroy']);
Route::get('/gardenManager/createGardenEvents',[GardenEventsController::class,'create']);
Route::post('/gardenManager/storeGardenEvents',[GardenEventsController::class,'store']);

// Garden Timings

Route::get('/gardenManager/gardenTimings',[GardenTimingsController::class,'show']);
Route::get('/gardenManager/editGardenTimings',[GardenTimingsController::class,'edit']);
Route::post('/gardenManager/updateGardenTimings',[GardenTimingsController::class,'update']);
Route::get('/gardenManager/deleteGardenTimings',[GardenTimingsController::class,'destroy']);
Route::get('/gardenManager/createGardenTimings',[GardenTimingsController::class,'create']);
Route::post('/gardenManager/storeGardenTimings',[GardenTimingsController::class,'store']);

// Garden Staff List

Route::get('/gardenManager/staffList',[GardenStaffListController::class,'show']);
Route::get('/gardenManager/editGardenStaffList',[GardenStaffListController::class,'edit']);
Route::post('/gardenManager/updateGardenStaffList',[GardenStaffListController::class,'update']);
Route::get('/gardenManager/deleteGardenStaffList',[GardenStaffListController::class,'destroy']);
Route::get('/gardenManager/createGardenStaffList',[GardenStaffListController::class,'create']);
Route::post('/gardenManager/storeGardenStaffList',[GardenStaffListController::class,'store']);

// Route::get('/gardenManager/report', function () {
//     return view('GardenManagerServices.gardenManagerReport');
// });
Route::get('/gardenManager/report',[GardenEventsController::class,'showReport']);

// Route::get('/chart', [ChartController::class, 'getData'])->name('chart.getData');

// Pool Manager

Route::get('/poolManager/services', function () {
    return view('PoolManagerServices.poolManagerServices');
});

Route::get('/poolManager/poolAdvertisements', function () {
    return view('PoolManagerServices.poolAdvertisement');
});

// Pool Events

Route::get('/poolManager/poolEvents',[PoolEventsController::class,'show']);
Route::get('/poolManagaer/editpoolEvents',[PoolEventsController::class,'edit']);
Route::post('/poolManager/updatepoolEvents',[PoolEventsController::class,'update']);
Route::get('/poolManager/deletePoolEvents',[PoolEventsController::class,'destroy']);
Route::get('/poolManager/createPoolEvents',[PoolEventsController::class,'create']);
Route::post('/poolManager/storePoolEvents',[PoolEventsController::class,'store']);

// Pool Timings

Route::get('/poolManager/poolTimings',[PoolTimingsController::class,'show']);
Route::get('/poolManager/editPoolTimings',[PoolTimingsController::class,'edit']);
Route::post('/poolManager/updatePoolTimings',[PoolTimingsController::class,'update']);
Route::get('/poolManager/deletePoolTimings',[PoolTimingsController::class,'destroy']);
Route::get('/poolManager/createPoolTimings',[PoolTimingsController::class,'create']);
Route::post('/poolManager/storePoolTimings',[PoolTimingsController::class,'store']);

// Pool Staff List

Route::get('/poolManager/staffList',[PoolStaffListController::class,'show']);
Route::get('/poolManager/editPoolStaffList',[PoolStaffListController::class,'edit']);
Route::post('/poolManager/updatePoolStaffList',[PoolStaffListController::class,'update']);
Route::get('/poolManager/deletePoolStaffList',[PoolStaffListController::class,'destroy']);
Route::get('/poolManager/createPoolStaffList',[PoolStaffListController::class,'create']);
Route::post('/poolManager/storePoolStaffList',[PoolStaffListController::class,'store']);

// Report 
Route::get('/poolManager/report',[PoolEventsController::class,'showReport']);

// Tennis Manager 

Route::get('/tennisManager/services', function () {
    return view('TennisManagerServices.tennisManagerServices');
});

Route::get('/tennisManager/tennisAdvertisements', function () {
    return view('TennisManagerServices.tennisAdvertisements');
});

// Tennis Events

Route::get('/tennisManager/tennisEvents',[TennisEventsController::class,'show']);
Route::get('/tennisManager/editTennisEvents',[TennisEventsController::class,'edit']);
Route::post('/tennisManager/updateTennisEvents',[TennisEventsController::class,'update']);
Route::get('/tennisManager/deleteTennisEvents',[TennisEventsController::class,'destroy']);
Route::get('/tennisManager/createTennisEvents',[TennisEventsController::class,'create']);
Route::post('/tennisManager/storeTennisEvents',[TennisEventsController::class,'store']);

// Tennis Timings

Route::get('/tennisManager/tennisTimings',[TennisTimingsController::class,'show']);
Route::get('/tennisManager/editTennisTimings',[TennisTimingsController::class,'edit']);
Route::post('/tennisManager/updateTennisTimings',[TennisTimingsController::class,'update']);
Route::get('/tennisManager/deleteTennisTimings',[TennisTimingsController::class,'destroy']);
Route::get('/tennisManager/createTennisTimings',[TennisTimingsController::class,'create']);
Route::post('/tennisManager/storeTennisTimings',[TennisTimingsController::class,'store']);

// Tennis Staff List

Route::get('/tennisManager/staffList',[TennisStaffListController::class,'show']);
Route::get('/tennisManager/editTennisStaffList',[TennisStaffListController::class,'edit']);
Route::post('/tennisManager/updateTennisStaffList',[TennisStaffListController::class,'update']);
Route::get('/tennisManager/deleteTennisStaffList',[TennisStaffListController::class,'destroy']);
Route::get('/tennisManager/createTennisStaffList',[TennisStaffListController::class,'create']);
Route::post('/tennisManager/storeTennisStaffList',[TennisStaffListController::class,'store']);

Route::get('/tennisManager/report',[TennisEventsController::class,'showReport']);

// Resident Services

Route::get('/resident/services', function () {
    return view('ResidentServices.residentServices');
});

// Resident Profiles

Route::get('/resident/myProfile',[ResidentProfilesController::class,'show']);
Route::get('/resident/editMyProfile',[ResidentProfilesController::class,'edit']);
Route::post('/resident/updateMyProfile',[ResidentProfilesController::class,'update']);

// Subcriptions

Route::get('/resident/eventSubcription', function () {
    return view('ResidentServices.eventSub');
});

Route::get('/resident/subcriptions',[ResidentSubcriptionsController::class,'show']);
Route::post('/resident/updateEventSubcription',[ResidentSubcriptionsController::class,'update']);

// Subcription ( garden, pool, tennis)

Route::get('/resident/gardenSubcription',[GardenEventsController::class,'showResidentEvents']);
Route::get('/resident/poolSubcription',[PoolEventsController::class,'showResidentEvents']);
Route::get('/resident/tennisSubcription',[TennisEventsController::class,'showResidentEvents']);

Route::get('/resident/gardenTimings',[GardenTimingsController::class,'showTimingsResident']);
Route::get('/resident/poolTimings',[PoolTimingsController::class,'showTimingsResident']);
Route::get('/resident/tennisTimings',[TennisTimingsController::class,'showTimingsResident']);

Route::get('/resident/makePayment', function () {
    return view('ResidentServices.makePayment');
});

Route::get('/resident/paymentHistory',[PaymentHistoryController::class,'show']);

// Vehicle Registration

Route::get('/resident/vehicleRegistration',[ResidentVehicleRegController::class,'show']);
Route::get('/resident/editVehicleRegistration',[ResidentVehicleRegController::class,'edit']);
Route::post('/resident/updateVehicleRegistration',[ResidentVehicleRegController::class,'update']);
Route::get('/resident/deleteVehicleRegistration',[ResidentVehicleRegController::class,'destroy']);
Route::get('/resident/createVehicleRegistration',[ResidentVehicleRegController::class,'create']);
Route::post('/resident/storeVehicleRegistration',[ResidentVehicleRegController::class,'store']);

// Security Manager

Route::get('/SecurityManagerServices/securityManagerServices', function () {
    return view('SecurityManagerServices.securityManagerServices');
});

Route::get('/SecurityManagerServices/manageResidents', function () {
    return view('SecurityManagerServices.manageResidents');
});

Route::get('/SecurityManagerServices/manageSecurity',[ManageSecurityController::class,'show']);
Route::get('/SecurityManagerServices/editManageSecurity',[ManageSecurityController::class,'edit']);
Route::post('/SecurityManagerServices/updateManageSecurity',[ManageSecurityController::class,'update']);
Route::get('/SecurityManagerServices/deleteManageSecurity',[ManageSecurityController::class,'destroy']);
Route::get('/SecurityManagerServices/createManageSecurity',[ManageSecurityController::class,'create']);
Route::post('/SecurityManagerServices/storeManageSecurity',[ManageSecurityController::class,'store']);

Route::get('/SecurityManagerServices/manageTimings',[ManageTimingsController::class,'show']);
Route::get('/SecurityManagerServices/editManageTimings',[ManageTimingsController::class,'edit']);
Route::post('/SecurityManagerServices/updateManageTimings',[ManageTimingsController::class,'update']);
Route::get('/SecurityManagerServices/deleteManageTimings',[ManageTimingsController::class,'destroy']);
Route::get('/SecurityManagerServices/createManageTimings',[ManageTimingsController::class,'create']);
Route::post('/SecurityManagerServices/storeManageTimings',[ManageTimingsController::class,'store']);

Route::get('/SecurityManagerServices/manageVisitors', function () {
    return view('SecurityManagerServices.manageVisitors');
});

// Route::get('/SecurityManagerServices/report', function () {
//     return view('SecurityManagerServices.securityManagerReport');
// });

Route::get('/SecurityManagerServices/report',[ManageSecurityController::class,'showReport']);

// Super Admin Services

Route::get('/SuperAdminServices', function(){
    return view('SuperAdminServices.SuperAdminServices');
});

Route::get('/superAdminResidentServices', function(){
    return view('SuperAdminServices.ResidentServciesSuperAdmin');
});

Route::get('/superAdmin/report',[RegisterController::class,'showSuperAdminReport']);

Route::get('/superAdmin/resident/subscriptions',[ResidentSubcriptionsController::class,'create']);

Route::get('/superAdmin/resident/residentProfiles',[ResidentProfilesController::class,'index']);
Route::get('/superAdmin/resident/residentVehicleReg',[ResidentVehicleRegController::class,'showSuperAdmin']);

// Visitor Manager Services

Route::get('/VisitorManagerServices/visitorManagerServices', function () {
    return view('VisitorManagerServices.visitorManagerServices');
});

Route::get('/VisitorManagerServices/handleRequest', function () {
    return view('VisitorManagerServices.handleRequest');
});

// Route::get('/VisitorManagerServices/visitorList', function () {
//     return view('VisitorManagerServices.visitorList');
// });

Route::get('/VisitorManagerServices/visitorList',[VisitorProfilesController::class,'create']);

// Route::get('/VisitorManagerServices/report', function () {
//     return view('VisitorManagerServices.visitorManagerServicesReport');
// });

// REPORT
Route::get('/VisitorManagerServices/report',[VisitorSubcriptionsController::class,'showReport']);

Route::get('/VisitorManagerServices/handleRequest',[HandleRequestController::class,'create']);
Route::get('/VisitorManagerServices/deleteHandleRequest',[HandleRequestController::class,'destroy']);

// Visitor Timings

Route::get('/visitorManager/visitorTimings',[VisitorTimingsController::class,'show']);
Route::get('/visitorManager/editVisitorTimings',[VisitorTimingsController::class,'edit']);
Route::post('/visitorManager/updateVisitorTimings',[VisitorTimingsController::class,'update']);
Route::get('/visitorManager/deleteVisitorTimings',[VisitorTimingsController::class,'destroy']);
Route::get('/visitorManager/createVisitorTimings',[VisitorTimingsController::class,'create']);
Route::post('/visitorManager/storeVisitorTimings',[VisitorTimingsController::class,'store']);

// Visitor Services

Route::get('/VisitorServices/visitorServices', function () {
    return view('VisitorServices.visitorServices');
});

Route::get('/VisitorServices/dlInstructionsPage', function () {
    return view('VisitorServices.dlInstructionsPage');
});

// Subcriptions

Route::get('/visitor/eventSubcription', function () {
    return view('VisitorServices.eventSub');
});

Route::get('/visitor/subcriptions',[VisitorSubcriptionsController::class,'show']);
Route::post('/visitor/updateEventSubcription',[VisitorSubcriptionsController::class,'update']);

// Visitor Profile
Route::get('/visitor/myProfile',[VisitorProfilesController::class,'show']);
Route::get('/visitor/editMyProfile',[VisitorProfilesController::class,'edit']);
Route::post('/visitor/updateMyProfile',[VisitorProfilesController::class,'update']);

// Route::get('/VisitorServices/requestRaiseIncident', function () {
//     return view('VisitorServices.requestRaiseIncident');
// });

Route::get('/VisitorServices/requestRaiseIncident',[HandleRequestController::class,'index']);
Route::post('/VisitorServices/requestRaiseIncidentStore',[HandleRequestController::class,'store']);

Route::get('/VisitorServices/visitorLogs', function () {
    return view('VisitorServices.visitorLogs');
});

// Vehicle Registration

Route::get('/visitor/vehicleRegistration',[VisitorVehicleRegController::class,'show']);
Route::get('/visitor/editVehicleRegistration',[VisitorVehicleRegController::class,'edit']);
Route::post('/visitor/updateVehicleRegistration',[VisitorVehicleRegController::class,'update']);
Route::get('/visitor/deleteVehicleRegistration',[VisitorVehicleRegController::class,'destroy']);
Route::get('/visitor/createVehicleRegistration',[VisitorVehicleRegController::class,'create']);
Route::post('/visitor/storeVehicleRegistration',[VisitorVehicleRegController::class,'store']);

Route::get('/visitor/visitorTimings',[VisitorTimingsController::class,'showTimingsVisitor']);