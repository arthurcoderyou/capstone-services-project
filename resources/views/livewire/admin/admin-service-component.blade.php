<div>
    <style>
        nav svg{
            height: 20px;

        }

        nav .hidden{
            display: block !important;
        }


    .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
        padding: 8px;
        line-height: 1.42857143;
        vertical-align: middle;
        border-top: 1px solid #ddd;
    }
    </style>

    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_02_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>All Services </h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>All Services </li>
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
                        <div class="col-md-12 profile1">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            All Services
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{ route('admin.add_service') }}" class="btn btn-info pull-right">Add New </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel-body">
                                    @if (Session::has('message'))
                                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                    @endif

                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Featured</th>
                                                <th>Category</th>
                                                <th>Created at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if (!empty($services))


                                                @foreach ($services as $service)
                                                    <tr>
                                                        <td>{{ !empty($service->id)  ? $service->id : '' }}</td>
                                                        <td>
                                                            <img src="{{ asset('images/services/thumbnails/'.$service->image) }}" alt="{{ $service->name }}" width="60">
                                                        </td>
                                                        <td>{{ $service->name }}</td>
                                                        <td>{{ $service->price  }}</td>
                                                        <td>
                                                            @if($service->status)
                                                                Active
                                                            @else
                                                                Inactive
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($service->featured)
                                                                Yes
                                                            @else
                                                                No
                                                            @endif
                                                        </td>
                                                        <td>{{ !empty($service->category->name) ? $service->category->name : ''  }}</td>
                                                        <td>{{ $service->created_at }}</td>
                                                        <td>
                                                            @if($service->slug)
                                                            <a href="{{ route('admin.edit_service',['service_slug' =>  $service->slug]) }}"
                                                                class="ml-1"
                                                                >
                                                                <i class="fa fa-edit fa-2x text-info"> </i>
                                                            </a>
                                                            <a href="javascript:void(0)"
                                                                onclick="confirm('Are you sure, you want to delete this service?') || event.stopImmediatePropagation()"
                                                                wire:click.prevent="deleteService({{ $service->id }})"
                                                                class="ml-1"  >
                                                                <i class="fa fa-times fa-2x text-danger "></i>
                                                            </a>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                    {{ $services->links() }}

                                </div>

                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
