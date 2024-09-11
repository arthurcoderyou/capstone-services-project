<?php

namespace App\Livewire\Admin;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class AdminServiceComponent extends Component
{

    use WithPagination;

    public function deleteService($service_id){
        $service = Service::find($service_id);


        if($service->thumbnail){
            unlink('images/services/thumbnails/'.$service->thumbnail);
        }


        if($service->image){
            unlink('images/services/'.$service->image);
        }

        $service->delete();
        session()->flash('message','Service has been deleted successfully');


    }

    public function render()
    {

        $services = Service::orderBy('updated_at','DESC')->paginate(10);

        // $services = Service::search("Clean Spark")->paginate(10);
        // dd($services);

        return view('livewire.admin.admin-service-component',['services' => $services])->layout('layouts.base');
    }
}
