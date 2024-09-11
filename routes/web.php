<?php

use App\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\ServiceCategoriesComponent;
use App\Livewire\ServicesByCategoryComponent;
use App\Livewire\Admin\AdminDashboardComponent;
use App\Livewire\Admin\AdminServiceCategoryComponent;
use App\Livewire\Customer\CustomerDashboardComponent;
use App\Livewire\Admin\AdminAddServiceCategoryComponent;
use App\Livewire\Admin\AdminAddServiceComponent;
use App\Livewire\Admin\AdminAddSlideComponent;
use App\Livewire\Admin\AdminEditServiceCategoryComponent;
use App\Livewire\Admin\AdminEditServiceComponent;
use App\Livewire\Admin\AdminEditSlideComponent;
use App\Livewire\Admin\AdminServiceByCategoryComponent;
use App\Livewire\Admin\AdminServiceComponent;
use App\Livewire\Admin\AdminSliderComponent;
use App\Livewire\ServiceDetailsComponent;
use App\Livewire\ServiceProvider\ServiceProviderDashboardComponent;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",HomeComponent::class)->name('home');
Route::get("/service-categories",ServiceCategoriesComponent::class)->name('home.service_categories');
Route::get("/{category_slug}/services",ServicesByCategoryComponent::class)->name('home.services_by_category');
Route::get('/service/{service_slug}',ServiceDetailsComponent::class)->name('home.service_details');


//For All
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


//For Customer
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/customer/dashboard',CustomerDashboardComponent::class)->name('customer.dashboard');
});

//For Service Provider
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'auth_service_provider'
])->group(function () {
    Route::get('/service_provider/dashboard',ServiceProviderDashboardComponent::class)->name('service_provider.dashboard');
});

//For Admin
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'auth_admin'
])->group(function () {
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/service-categories',AdminServiceCategoryComponent::class)->name('admin.service_categories');
    Route::get('/admin/service-categories/add',AdminAddServiceCategoryComponent::class)->name('admin.add_service_categories');
    Route::get('/admin/service-categories/edit/{category_id}',AdminEditServiceCategoryComponent::class)->name('admin.edit_service_category');
    Route::get('/admin/all-services',AdminServiceComponent::class)->name('admin.all_services');
    Route::get('/admin/{category_slug}/services',AdminServiceByCategoryComponent::class)->name('admin.services_by_category');
    Route::get('/admin/services/add',AdminAddServiceComponent::class)->name('admin.add_service');
    Route::get('/admin/service/edit/{service_slug}',AdminEditServiceComponent::class)->name('admin.edit_service');

    Route::get('/admin/slider',AdminSliderComponent::class)->name('admin.slider');
    Route::get('/admin/slide/add',AdminAddSlideComponent::class)->name('admin.add_slide');
    Route::get('/admin/slide/edit/{slide_id}',AdminEditSlideComponent::class)->name('admin.edit_slide');


});
