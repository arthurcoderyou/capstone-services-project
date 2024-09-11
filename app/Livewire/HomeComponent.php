<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;
use App\Models\ServiceCategory;

class HomeComponent extends Component
{
    public function render()
    {
        $scategories = ServiceCategory::inRandomOrder()->take(18)->get();
        $fservices = Service::where('featured',1)->inRandomOrder()->take(8)->get();
        $fscategories = ServiceCategory::where('featured',1)->take(8)->get();
        //defines services that needs part repairs or change
        $sid = ServiceCategory::whereIn('slug',['change-oil','fuel','motor'])->get()->pluck('id');
        $aservices = Service::whereIn('service_category_id',$sid)->inRandomOrder()->take(8)->get();
        return view('livewire.home-component',[
            'scategories' => $scategories,
            'fservices' => $fservices,
            'fscategories' => $fscategories,
            'aservices' => $aservices
        ])->layout("layouts.base");
    }
}
