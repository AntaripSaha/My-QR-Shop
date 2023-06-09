@extends('layouts.customLayouts', ['class' => ''])

@section('content')
    
        <div class="container h-100 pt-5 mt-5">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <h2 class="display-2 page-title text-black">{{ $page->title }}</h2>
                </div>
            </div>
        </div> 
 
    <section class="section">
        <div class="container container-pages">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title white">
                        {!! $page->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
 
 

