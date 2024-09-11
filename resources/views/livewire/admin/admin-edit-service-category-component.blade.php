<div>


    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Edit Service Categories</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Edit Service Categories</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-8 col-md-offset-2 profile1">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            Edit Service Category
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.service_categories') }}"
                                            class="btn btn-info pull-right" >
                                                All Categories
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    @if(Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                    @endif

                                    <form action="" class="form-horizontal" wire:submit.prevent="updateServiceCategory" >
                                        @csrf
                                        <div class="form-group">
                                            <label for="name" class="control-label col-sm-3">Category Name:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="name" wire:model="name" wire:keyup="generateSlug">
                                                @error('name')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="slug" class="control-label col-sm-3">Category Slug:</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="slug" wire:model="slug">
                                                @error('slug')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="image" class="control-label col-sm-3">Category Image:</label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" name="image" wire:model="newimage">
                                                @error('newimage')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                @if($newimage)
                                                    <div class="text-center py-1 my-1">
                                                        <img  style="margin-top: 10px;"
                                                            src="{{ $newimage->temporaryUrl() }}" width="60" alt="" >
                                                    </div>
                                                @else
                                                    <div class="text-center py-1 my-1">

                                                        <img  style="margin-top: 10px;"
                                                            src="{{  asset('images/categories/'.$image)  }}" width="60" alt="" >
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="featured" class="control-label col-sm-3">Featured:</label>
                                            <div class="col-sm-9">
                                                <select name="featured" id="featured" class="form-control" wire:model="featured">
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                </select>
                                                @error('featured')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success pull-right" >Update Category</button>
                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
