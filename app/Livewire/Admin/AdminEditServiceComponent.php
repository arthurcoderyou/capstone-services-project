<?php

namespace App\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\ServiceCategory;

class AdminEditServiceComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $tagline;
    public $service_category_id;
    public $price;
    public $discount;
    public $discount_type;
    public $image;
    public $thumbnail;
    public $description;
    public $inclusion;
    public $exclusion;
    public $service_id;

    public $newthumbnail;
    public $newimage;

    public $featured;


    public function generateSlug(){
        $this->slug = Str::slug($this->name,'-');
    }

    public function mount($service_slug){
        // dd($service_slug);

        $service = Service::where('slug',$service_slug)->first();

        // dd($service);
        $this->service_id = $service->id;
        $this->name = $service->name;
        $this->slug = $service->slug;
        $this->tagline = $service->tagline;
        $this->service_category_id = $service->service_category_id;
        $this->price = $service->price;
        $this->discount = $service->discount;
        $this->discount_type = $service->discount_type;

        $this->featured = $service->featured;

        $this->description = $service->description;
        $this->inclusion = $service->inclusion;
        $this->exclusion = $service->exclusion;
        $this->inclusion = str_replace("\n",'|',trim($service->inclusion));
        $this->exclusion = str_replace("\n",'|',trim($service->exclusion));

        $this->image = $service->image;
        $this->thumbnail = $service->thumbnail;

    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'slug' => 'required',
            'tagline' => 'required',
            'service_category_id' => 'required',
            'price' => 'required',
            // 'discount' => 'required',
            // 'discount_type' => 'required',
            // 'image' => 'required|mimes:jpeg,png,jpg',
            // 'thumbnail' => 'required|mimes:jpeg,png,jpg',
            'description' => 'required',
            'inclusion' => 'required',
            'exclusion' => 'required',
        ]);


        if($this->newthumbnail){
            $this->validateOnly($fields,[
                'newthumbnail' => 'required|mimes:jpeg,png,jpg',
            ]);
        }

        if($this->newimage){
            $this->validateOnly($fields,[
                'newimage' => 'required|mimes:jpeg,png,jpg',
            ]);
        }

    }


    public function updateService(){
        $service = Service::find($this->service_id);

        $this->validate([
            'name' => 'required',
            'slug' => 'required',
            'tagline' => 'required',
            'service_category_id' => 'required',
            'price' => 'required',
            // 'discount' => 'required',
            // 'discount_type' => 'required',
            // 'image' => 'required|mimes:jpeg,png,jpg',
            // 'thumbnail' => 'required|mimes:jpeg,png,jpg',
            'description' => 'required',
            'inclusion' => 'required',
            'exclusion' => 'required',
        ]);

        if($this->newthumbnail){
            $this->validate([
                'newthumbnail' => 'required|mimes:jpeg,png,jpg',
            ]);
        }

        if($this->newimage){
            $this->validate([
                'newimage' => 'required|mimes:jpeg,png,jpg',
            ]);
        }

        // $service = new Service();
        $service->name = $this->name;
        $service->slug = $this->slug;
        $service->tagline = $this->tagline;
        $service->service_category_id = $this->service_category_id;
        $service->price = $this->price;
        $service->discount = $this->discount;
        $service->discount_type = $this->discount_type;
        $service->description = $this->description;
        $service->inclusion = str_replace("\n",'|',trim($this->inclusion));
        $service->exclusion = str_replace("\n",'|',trim($this->exclusion));
        $service->featured = $this->featured;

        if($this->newthumbnail){
            unlink('images/services/thumbnails/'.$service->thumbnail);
            $imageName = Carbon::now()->timestamp.'.'.$this->newthumbnail->extension();
            $this->newthumbnail->storeAs('services/thumbnails/', $imageName);
            $service->thumbnail = $imageName;
        }

        if($this->newimage){
            unlink('images/services/'.$service->image);
            $imageName2 = Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('services',$imageName2);
            $service->image = $imageName2;
        }



        $service->save();

        session()->flash('message','Service has been updated successfully');


    }


    public function render()
    {

        $categories = ServiceCategory::all();
        return view('livewire.admin.admin-edit-service-component',['categories' => $categories])->layout('layouts.base');
    }
}
