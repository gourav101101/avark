<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');


// service details page Kp
Route::get('/erp-system', [PageController::class, 'erpServoces'])->name('erp-system');
Route::get('/crm-solutions', [PageController::class, 'CRMSolutions'])->name('crm-solutions');
Route::get('/custom-software-development', [PageController::class, 'CustomSoftwareDevelopment'])->name('custom-software-development');
Route::get('/web-application-development', [PageController::class, 'WebApplicationDevelopment'])->name('web-application-development');
Route::get('/mobile-app-development', [PageController::class, 'MobileAppDevelopment'])->name('mobile-app-development');
Route::get('/cloud-and-data-migration', [PageController::class, 'CloudandDataMigration'])->name('cloud-and-data-migration');
Route::get('/enterprise-integration-services', [PageController::class, 'enterpriseIntegrationServices'])->name('enterprise-integration-services');
Route::get('/digital-healthcare-solution', [PageController::class, 'DigitalHealthcareSolution'])->name('digital-healthcare-solution');
Route::get('/tele-consultation', [PageController::class, 'TeleConsultation'])->name('tele-consultation');
Route::get('/cms', [PageController::class, 'cms'])->name('cms');
// service details page  Kp End


// Product details page  Kp Start
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/hms', [PageController::class, 'hms'])->name('hms');
Route::get('/kiosk-management-system', [PageController::class, 'KIOSKManagementSystem'])->name('kiosk-management-system');
Route::get('/feedback-management', [PageController::class, 'FeedbackManagement'])->name('feedback-management');
Route::get('/ark-cloud-cast', [PageController::class, 'ArkCloudCast'])->name('ark-cloud-cast');
Route::get('/inventory-stock management', [PageController::class, 'inventoryStockManagement'])->name('inventory-stock management');
Route::get('/pathology-diagnostic-management', [PageController::class, 'PathologyDiagnosticManagement'])->name('pathology-diagnostic-management');
Route::get('/white-label-practice-management', [PageController::class, 'WhiteLabelPracticeManagementApplication'])->name('white-label-practice-management');
Route::get('/dialysis-management', [PageController::class, 'DialysisManagementSystem'])->name('dialysis-management');
Route::get('/enterprise-support-management', [PageController::class, 'enterpriseSupportManagement'])->name('enterprise-support-management');
Route::get('/digital-signage-solutions', [PageController::class, 'DigitalSignageSolutions'])->name('digital-signage-solutions');
Route::get('/opd-management-system', [PageController::class, 'OPDManagementSystem'])->name('opd-management-system');
Route::get('/industrial-asset-management', [PageController::class, 'industrialAssetManagement'])->name('industrial-asset-management');
// Product details page  Kp End






Route::get('/contact-us', [PageController::class, 'ContactUs'])->name('contact-us');
Route::get('/partners', [PageController::class, 'Partners'])->name('partners');
Route::get('/blogs', [PageController::class, 'Blogs'])->name('blogs');
Route::get('/blog-details/{slug}', [PageController::class, 'BlogDetails'])->name('blog-details');
