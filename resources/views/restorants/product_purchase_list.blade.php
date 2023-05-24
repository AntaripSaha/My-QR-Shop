
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
                        
                       
                    </div>

                    <div class="col-12">
                        @include('partials.flash')
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Name') }}</th>
                                    <th scope="col">{{ __('Email') }}</th>
                                    <th scope="col">{{ __('Phone') }}</th>
                                    <th scope="col">{{ __('Image') }}</th>
                                    <th scope="col">{{ __('Quantity') }}</th>
                                    <th scope="col">{{ __('Paid Amount') }}</th>
                                    <th scope="col">{{ __('Purchased Date') }}</th>
                                    <th scope="col">{{ __('Stripe ID') }}</th>
                                    <th scope="col">{{ __('Payment Status') }}</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($purchases as $purchase)
                                    <tr>
                                      
                                        {{-- <td>{{ $purchase->user->name }}</td> --}}
                                        <td><a href="{{ route('admin.restaurants.edit', $purchase->restaurant->id) }}">{{ $purchase->user->name }}</a></td>
                                        <td>{{ $purchase->user->email }}</td>
                                        <td>{{ $purchase->restaurant->phone }}</td>
                                        <td><img class="rounded" src={{ $purchase->product->image }} width="70px" height="auto" ></td>
                                        <td>{{ $purchase->product_quantity }}</td>
                                        <td>{{ $purchase->total_paid }}</td>
                                        <td>{{ $purchase->created_at->locale(Config::get('app.locale'))->isoFormat('LLLL') }}</td>
                                        <td>{{ $purchase->stripe_id }}</td>
                                        <td>
                                           @if( $purchase->total_paid > 0)
                                                <span class="badge badge-success">{{ __('Paid') }}</span>
                                           @else
                                                <span class="badge badge-warning">{{ __('Not Paid') }}</span>
                                           @endif
                                        </td>
                                 
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $purchases->links() }}
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
