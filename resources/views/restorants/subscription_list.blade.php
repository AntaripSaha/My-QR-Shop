
@extends('layouts.app', ['title' => __('Restaurants')])
@section('admin_title')
    {{__('Subcribers List')}}
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
                                <h3 class="mb-0">{{ __('subscribers List') }}</h3>
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
                                    <th scope="col">{{ __('Plan') }}</th>
                                    <th scope="col">{{ __('Restaurant') }}</th>
                                    <th scope="col">{{ __('Amount') }}</th>
                                    <th scope="col">{{ __('Stripe ID') }}</th>
                                    <th scope="col">{{ __('Creation Date') }}</th>
                                    <th scope="col">{{ __('Active') }}</th>
                                    <th scope="col">{{ __('Action') }}</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($plan_subscriptions as $plan)
                                    <tr>
                                        @if(auth()->user()->hasRole('manager'))
                                            <td><a href="#">{{ $plan->plan->name }}</a></td>
                                        @else
                                            <td><a href="#">{{ $plan->plan->name }}</a></td>
                                        @endif
                                       
                                        <td>{{ $plan->restaurant->name }}</td>
                                        <td>{{ $plan->amount }}</td>
                                        <td>{{ $plan->stripe_id }}</td>
                               
                                     
                                        <td>{{ $plan->created_at->locale(Config::get('app.locale'))->isoFormat('LLLL') }}</td>
                                        <td>
                                           @if($plan->status == 1)
                                                <span class="badge badge-success">{{ __('Approved') }}</span>
                                           @else
                                                <span class="badge badge-warning">{{ __('Not Approved') }}</span>
                                           @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.restaurants.edit', $plan->restaurant->id) }}">
                                                <button class="btn btn-info btn-sm">Details</button>
                                            </a>
                                        </td>
                                        {{-- <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="#">{{ __('Edit') }}</a>
                                                
                                                    <form action="{{ route('admin.product.status', $plan) }}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        @if($plan->status == 0)
                                                            <a class="dropdown-item" href="{{ route('admin.product.status',['id'=>$plan->id, 'status'=>1]) }}">{{ __('Activate') }}
                                                            </a>
                                                        @else
                                                            <a class="dropdown-item" href="{{ route('admin.product.status',['id'=>$plan->id, 'status'=>0]) }}">{{ __('Dectivate') }}
                                                            </a>
                                                        @endif
                                                    </form>
                                                    <a class="dropdown-item warning red" onclick="return confirm('Are you sure you want to delete this Product from Database?')"  href="{{ route('admin.product.remove',['id'=>$plan->id])}}">{{ __('Delete') }}</a>
                                                </div>
                                            </div>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav class="d-flex justify-content-end" aria-label="...">
                            {{ $plan_subscriptions->links() }}
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
