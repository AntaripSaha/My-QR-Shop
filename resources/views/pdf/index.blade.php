<style>
   a.card-link:after {
   content: "";
   position: absolute;
   top: 0;
   height: calc(100% - 192px);
   width: calc(100% - 30px);
   z-index: 10;
   left: 15px;
   }
</style>
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
                     <div class="row d-flex justify-content-end">

                        <div class="col">
                           <a href="{{ route('items.index') }}">
                              <span class="btn btn-info btn-sm">Add new Category</span>
                           </a>
                        </div>

                        <div class="col ">
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



                        {{-- number 1 --}}
                        <div class="col-lg-3 position-relative">
                           <a class="card-link" href="{{ route('pdf.menu', [1]) }}">                           
                           </a>
                           <div class="card">
                              <input type="hidden" name="layout_numbers" value="1">
                              <img class="card-img-top" src="/images/pdf/menu-demo1.png" alt="...">
                              <div class="card-body d-flex justify-content-between">
                                 {{-- 
                                 <h3 class="card-title text-primary text-uppercase">fff</h3>
                                 <p class="card-text description mt-3">dfdfg dfgdfgdf gdfg fdgdfg </p>
                                 --}}
                                 <div>
                                    <a  href="{{route('pdf.menu.download', [1])}}">
                                    <span class="btn btn-outline-info"> Download</span>
                                    </a>
                                 </div>
                                 <div>
                                    <form action="{{route('default.pdf.menu')}}" method="post">
                                       @csrf
                                       <input type="hidden" name="pdf_no" value="1">
                                       @if ($active_template && $active_template->pdf_no == 1)
                                       <button class="btn btn-outline-success" type="submit">
                                       Active Menu
                                       </button>
                                       @elseif ($active_template && $active_template->pdf_no != 1)
                                       <button class="btn btn-outline-danger" type="submit">
                                       Inactive
                                       </button>
                                       @else
                                       <button class="btn btn-outline-info" type="submit">
                                       Make Default Menu
                                       </button>
                                       @endif
                                    </form>
                                 </div>
                                 {{-- <span class="text-danger mr-2">{{ __("UNAVAILABLE") }}</span> --}}
                              </div>
                           </div>
                           <br/>
                        </div>


                        {{-- number 2 --}}
                        <div class="col-lg-3 position-relative">
                           <a class="card-link" href="{{ route('pdf.menu', [2]) }}">                           
                           </a>
                           <div class="card">
                              <input type="hidden" name="layout_numbers" value="1">
                              <img class="card-img-top" src="/images/pdf/menu-demo2.png" alt="...">
                              <div class="card-body d-flex justify-content-between">
                                 {{-- 
                                 <h3 class="card-title text-primary text-uppercase">fff</h3>
                                 <p class="card-text description mt-3">dfdfg dfgdfgdf gdfg fdgdfg </p>
                                 --}}
                                 <div>
                                    <a  href="{{route('pdf.menu.download', [2])}}">
                                    <span class="btn btn-outline-info"> Download</span>
                                    </a>
                                 </div>
                                 <div>
                                    <form action="{{route('default.pdf.menu')}}" method="post">
                                       @csrf
                                       <input type="hidden" name="pdf_no" value="2">
                                       @if ($active_template && $active_template->pdf_no == 2)
                                       <button class="btn btn-outline-success" type="submit">
                                       Active Menu
                                       </button>
                                       @elseif ($active_template && $active_template->pdf_no != 2)
                                       <button class="btn btn-outline-danger" type="submit">
                                       Inactive
                                       </button>
                                       @else
                                       <button class="btn btn-outline-info" type="submit">
                                       Make Default Menu
                                       </button>
                                       @endif
                                    </form>
                                 </div>
                                 {{-- <span class="text-danger mr-2">{{ __("UNAVAILABLE") }}</span> --}}
                              </div>
                           </div>
                           <br/>
                        </div>


                        {{-- number 3 --}}
                        <div class="col-lg-3 position-relative">
                           <a class="card-link" href="{{ route('pdf.menu', [3]) }}">                           
                           </a>
                           <div class="card">
                              <input type="hidden" name="layout_numbers" value="1">
                              <img class="card-img-top" src="/images/pdf/menu-demo2.png" alt="...">
                              <div class="card-body d-flex justify-content-between">
                                 {{-- 
                                 <h3 class="card-title text-primary text-uppercase">fff</h3>
                                 <p class="card-text description mt-3">dfdfg dfgdfgdf gdfg fdgdfg </p>
                                 --}}
                                 <div>
                                    <a  href="{{route('pdf.menu.download', [2])}}">
                                    <span class="btn btn-outline-info"> Download</span>
                                    </a>
                                 </div>
                                 <div>
                                    <form action="{{route('default.pdf.menu')}}" method="post">
                                       @csrf
                                       <input type="hidden" name="pdf_no" value="2">
                                       @if ($active_template && $active_template->pdf_no == 2)
                                       <button class="btn btn-outline-success" type="submit">
                                       Active Menu
                                       </button>
                                       @elseif ($active_template && $active_template->pdf_no != 2)
                                       <button class="btn btn-outline-danger" type="submit">
                                       Inactive
                                       </button>
                                       @else
                                       <button class="btn btn-outline-info" type="submit">
                                       Make Default Menu
                                       </button>
                                       @endif
                                    </form>
                                 </div>
                                 {{-- <span class="text-danger mr-2">{{ __("UNAVAILABLE") }}</span> --}}
                              </div>
                           </div>
                           <br/>
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