@extends('layouts.app', ['title' => __('Restaurant Menu Management')])
@section('admin_title')
{{__('Menu')}}
@endsection
@section('content')
@include('items.partials.modals', ['restorant_id' => $restorant_id])

<div class="header bg-gradient-primary pb-7 pt-5 pt-md-8">
   <div class="container-fluid">
      <div class="header-body">
         <div class="row align-items-center py-4">
            <!--<div class="col-lg-6 col-7">
               </div>-->
            <div class="col-lg-12 col-12 text-right">
               <!-- <a href="{{ route('pdf.menu')}}" class="btn btn-icon btn-1 btn-sm btn-success">
                  <span class="btn-inner--icon"><i class="fa fa-snowflake-o"></i> {{ __('Select Menu Template') }}</span>
                  </a> -->
               @if(config('settings.enable_miltilanguage_menus'))
               @include('items.partials.languages')
               @endif
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container-fluid mt--7">
   <div class="row">
      <div class="col-xl-12 order-xl-1">
         <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
               <div class="row align-items-center">
                  <div class="col-md-6 col-sm-12">
                     <div class="row">
                        <div class="col">
                           <h3 class="mb-0">{{ __('Select Layouts for Your Pdf Menu') }} @if(config('settings.enable_miltilanguage_menus')) ({{ $currentLanguage}}) @endif</h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                     <div class="row">
                        <div class="col d-flex justify-content-lg-end">
                           <span class="btn btn-success btn-sm" id="download-btn">Download QR Code for Menu</span>
                           <input id="url-input" type="hidden" value="{{route('pdf.user.download',[$resto_name])}}">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <br/>
            <div class="col-12">
               @include('partials.flash')
            </div>
            <div class="card-body">
               <div class="alert alert-default">
                  <div class="row">
                     <div class="col">
                        <span class="h1 font-weight-bold mb-0 text-white">Available Pdf Designs</span>
                     </div>
                  </div>
               </div>
               <div class="row justify-content-center">
                  <div class="col-lg-12">
                     <div class="row row-grid">
                        <div class="col-lg-3">
                           <a href="{{ route('pdf.menu', [1]) }}">
                              <div class="card">
                                 <input type="hidden" name="layout_numbers" value="1">
                                 <img class="card-img-top" src="/images/pdf/menu-demo1.png" alt="...">
                                 <div class="card-body">
                                    {{-- <h3 class="card-title text-primary text-uppercase">fff</h3>
                                    <p class="card-text description mt-3">dfdfg dfgdfgdf gdfg fdgdfg </p> --}}
                                       <p class="mt-3 mb-0 text-sm  d-flex justify-between">
                                          <span class="text-success mr-2">{{ __("AVAILABLE") }}</span>
                                          <a href="{{route('pdf.menu.download', [1])}}">
                                             <span class="btn btn-success btn-sm"> Download</span>
                                          </a>
                                          {{-- <span class="text-danger mr-2">{{ __("UNAVAILABLE") }}</span> --}}
                                       </p>
                                  </div>
                              </div>
                              <br/>
                           </a>
                        </div>
                        <div class="col-lg-3">
                           <a href="{{ route('pdf.menu', [2]) }}">
                              <div class="card">
                                 <img class="card-img-top" src="/images/pdf/menu-demo2.png" alt="...">
                                 <div class="card-body">
                                    {{-- <h3 class="card-title text-primary text-uppercase">fff</h3>
                                    <p class="card-text description mt-3">dfdfg dfgdfgdf gdfg fdgdfg </p> --}}
                                    <p class="mt-3 mb-0 text-sm  d-flex justify-between">
                                       <span class="text-success mr-2">{{ __("AVAILABLE") }}</span>
                                       <a href="{{route('pdf.menu.download', [2])}}">
                                          <span class="btn btn-success btn-sm"> Download</span>
                                       </a>
                                       {{-- <span class="text-danger mr-2">{{ __("UNAVAILABLE") }}</span> --}}
                                    </p>
                                 </div>
                              </div>
                              <br/>
                           </a>
                        </div>
                        <div class="col-lg-3">
                           <a href="#">
                              <div class="card">
                                 <img class="card-img-top" src="/images/pdf/menu-demo1.png" alt="...">
                                 <div class="card-body">
                                    {{-- <h3 class="card-title text-primary text-uppercase">fff</h3>
                                    <p class="card-text description mt-3">dfdfg dfgdfgdf gdfg fdgdfg </p> --}}
                                    <p class="mt-3 mb-0 text-sm">
                                       {{-- <span class="text-success mr-2">{{ __("AVAILABLE") }}</span> --}}
                                       <span class="text-danger mr-2">{{ __("UNAVAILABLE") }}</span>
                                    </p>
                                 </div>
                              </div>
                              <br/>
                           </a>
                        </div>
                        <div class="col-lg-3">
                           <a href="#">
                              <div class="card">
                                 <img class="card-img-top" src="/images/pdf/menu-demo1.png" alt="...">
                                 <div class="card-body">
                                    {{-- <h3 class="card-title text-primary text-uppercase">fff</h3>
                                    <p class="card-text description mt-3">dfdfg dfgdfgdf gdfg fdgdfg </p> --}}
                                    <p class="mt-3 mb-0 text-sm">
                                       {{-- <span class="text-success mr-2">{{ __("AVAILABLE") }}</span> --}}
                                       <span class="text-danger mr-2">{{ __("UNAVAILABLE") }}</span>
                                    </p>
                                 </div>
                              </div>
                              <br/>
                           </a>
                        </div>
                        <div class="col-lg-3">
                           <a href="#">
                              <div class="card">
                                 <img class="card-img-top" src="/images/pdf/menu-demo1.png" alt="...">
                                 <div class="card-body">
                                    {{-- <h3 class="card-title text-primary text-uppercase">fff</h3>
                                    <p class="card-text description mt-3">dfdfg dfgdfgdf gdfg fdgdfg </p> --}}
                                    <p class="mt-3 mb-0 text-sm">
                                       {{-- <span class="text-success mr-2">{{ __("AVAILABLE") }}</span> --}}
                                       <span class="text-danger mr-2">{{ __("UNAVAILABLE") }}</span>
                                    </p>
                                 </div>
                              </div>
                              <br/>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('js')
<script>
   $("[data-target='#modal-edit-category']").on('click',function() {
     var id = $(this).attr('data-id');
     var name = $(this).attr('data-name');

     $('#cat_name').val(name);
     $("#form-edit-category").attr("action", "/categories/"+id);
   })
</script>
<script>
   // Get the button element
   var downloadBtn = document.getElementById('download-btn');

   // Add a click event listener to the button
   downloadBtn.addEventListener('click', function() {
       // Get the URL input element
       var urlInput = document.getElementById('url-input');

       // Get the value of the URL input element
       var url = urlInput.value;

       // Generate the QR code image URL using the Google Chart API
       var qrCodeUrl = 'https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=' + encodeURIComponent(url);

       // Fetch the image as a binary blob
       fetch(qrCodeUrl)
           .then(response => response.blob())
           .then(blob => {
               // Create a temporary URL for the blob
               var blobUrl = URL.createObjectURL(blob);

               // Create a temporary a tag to download the image
               var link = document.createElement('a');
               link.download = '';
               link.href = blobUrl;

               // Trigger a click event on the link to start the download
               document.body.appendChild(link);
               link.click();
               document.body.removeChild(link);

               // Revoke the temporary URL after the download is complete
               URL.revokeObjectURL(blobUrl);
           });
   });
</script>


@endsection