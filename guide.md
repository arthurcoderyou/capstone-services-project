[Components]
    Class File located at App\Livewire\
    These files are Like the controllers but does not have redicting but that rander the component class 
    Blade File located at App\resources\views\L\livewire



# General : admin , service_provider, customer, not_auth user
    home page
        HomeComponent : general page for home page
    service categories
        ServiceCategoriesComponent : general page for viewing service categories
    service by categories   
        ServiceByCategoryComponent : general page for viewing services connected to a category
    service details
        ServiceDetailsComponent

# Admin 
    dashboard
        AdminDashboardComponent : main dashboard
    category
        AdminServiceCategoryComponent : admin category list || also contains the function to delete
        AdminAddServiceCategoryComponent : admin category add
        AdminEditServiceCategoryComponent : admin category edit
    service
        AdminServiceComponent : admin service list || also contains the function to delete
        AdminAddServiceComponent : admin service add
        AdminEditServiceComponent : admin service edit
        AdminServiceByCategoryComponent : admin service list by Category

# Service Provider
    dashboard
        ServiceProviderDashboardComponent

# Customer
    dashboard
        CustomerDashboardComponent




