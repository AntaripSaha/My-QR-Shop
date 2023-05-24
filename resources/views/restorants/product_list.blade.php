
@extends('layouts.app', ['title' => __('Restaurants')])
@section('admin_title')
    {{__('Products')}}
@endsection
@section('content')
    @include('restorants.partials.modals')
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    </div>

    <div class="container-fluid mt--7">      
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Product List') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                @if(auth()->user()->hasRole('admin'))
                                    <a href="{{ route('admin.product.create') }}" class="btn btn-sm btn-primary">{{ __('Add Product') }}</a>
                                @endif
                                <!-- <a href="{{ route('admin.restaurants.index') }}?downlodcsv=true" class="btn btn-sm btn-outline-primary">{{ __('Export CSV') }}</a> -->
                                @if(auth()->user()->hasRole('admin') && config('settings.enable_import_csv'))
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-import-restaurants">{{ __('Import from CSV') }}</button>
                                @endif
                                <button id="show-hide-filters" class="btn btn-icon btn-1 btn-sm btn-outline-secondary" type="button">
                                    <span class="btn-inner--icon"><i id="button-filters" class="ni ni-bold-down"></i></span>
                                </button>
                            </div>
                        </div>
                        
                        <div class="tab-content orders-filters">
                            <br />
                            <div class="row">
                                <div class="col-md-3">
                                    <select class="restaurantSearch" id="restaurantSearch" style="margin-right: 5px" placeholder="{{ __('Search') }}">
                                        <option></option>
                                        @foreach ( $allRes as $key => $res)
                                                <option value="{{$key}}" >{{$res}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        @include('partials.flash')
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Image') }}</th>
                                    <th scope="col">{{ __('Creation Date') }}</th>
                                    <th scope="col">{{ __('Active') }}</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        @if(auth()->user()->hasRole('manager'))
                                            <td><a href="{{ route('admin.restaurants.loginas', $product) }}">{{ $product->name }}</a></td>
                                        @else
                                            <td><a href="{{ route('admin.restaurants.edit', $product) }}">{{ $product->name }}</a></td>
                                        @endif
                                       
                                        <td><img class="rounded" src={{ $product->image }} width="50px" height="auto" ></td>
                               
                                     
                                        <td>{{ $product->created_at->locale(Config::get('app.locale'))->isoFormat('LLLL') }}</td>
                                        <td>
                                           @if($product->status == 1)
                                                <span class="badge badge-success">{{ __('Active') }}</span>
                                           @else
                                                <span class="badge badge-warning">{{ __('Not active') }}</span>
                                           @endif
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="#">{{ __('Edit') }}</a>
                                                
                                                    <form action="{{ route('admin.product.status', $product) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        @if($product->status == 0)
                                                            <a class="dropdown-item" href="{{ route('admin.product.status',['id'=>$product->id, 'status'=>1]) }}">{{ __('Activate') }}
                                                            </a>
                                                        @else
                                                            <a class="dropdown-item" href="{{ route('admin.product.status',['id'=>$product->id, 'status'=>0]) }}">{{ __('Dectivate') }}
                                                            </a>
                                                        @endif
                                                    </form>
                                                    <a class="dropdown-item warning red" onclick="return confirm('Are you sure you want to delete this Product from Database?')"  href="{{ route('admin.product.remove',['id'=>$product->id])}}">{{ __('Delete') }}</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $products->links() }}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
    <script type="text/javascript">
        var resUrl="{{ route('admin.restaurants.edit', 0) }}";
    </script>
@endsection
