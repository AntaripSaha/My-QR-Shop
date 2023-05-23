@extends('layouts.app', ['title' => __('Restaurant Management')])

@section('content')
    @include('restorants.partials.headerProduct')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Create Products</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('admin.product.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="heading-small text-muted mb-4">{{ __('Product information') }}</h6>
                        <div class="pl-lg-4">
                            <form method="post" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="name">{{ __('Product Image') }}</label>
                                    <input type="file" name="image" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Product Name here') }} ..." value="" required autofocus>
                                    @if ($errors->has('image'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('gallery_image') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="gallery_image">{{ __('Gallery Image') }}</label>
                                    <input type="file" name="gallery_image[]" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Product Name here') }} ..." value="" autofocus multiple>
                                    @if ($errors->has('gallery_image'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('gallery_image') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="name">{{ __('Product Name') }}</label>
                                    <input type="text" name="name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Product Name here') }} ..." value="" required autofocus>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="description">{{ __('Product Description') }}</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                                    @if ($errors->has('description'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('main_price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="main_price">{{ __('Main Price') }}</label>
                                    <input type="number" name="main_price" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Main Price') }} ..." value="" required autofocus>
                                    @if ($errors->has('main_price'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('main_price') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('discount_price') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="discount_price">{{ __('Discounted Price') }}</label>
                                    <input type="number" name="discount_price" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Discounted Price') }} ..." value=""  autofocus>
                                    @if ($errors->has('discount_price'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('discount_price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('rating') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="rating">{{ __('Rating') }}</label>
                                    <input type="number" name="rating" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Max Rating 5') }} ..." value=""  min="1" max="5" 
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    maxlength="1" required autofocus>
                                    @if ($errors->has('rating'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('rating') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="status">{{ __('Status') }}</label>
                                    <select name="status">
                                        <option value="1">Active Product</option>
                                        <option value="0">Inactive Product</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Submit
                                </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection


