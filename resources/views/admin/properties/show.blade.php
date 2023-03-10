@extends('admin.admin_layouts')
@section('admin_content')

    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">BariWala</a>
        <span class="breadcrumb-item active">View Property Section</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
          {{-- <p class="mg-b-20 mg-sm-b-30">View Property Details</p> --}}
          {{-- <h6 class="card-body-title">Update Property</h6> --}}

        <h6 class="card-body-title mg-b-20 mg-sm-b-35">View Property Details
            <a href="{{ URL::to('edit/property/'.$property->id) }}" class="btn btn-sm btn-danger" style="float: right;" >Edit Property</a>
        </h6>

         <div class="row">
         	<div class="col-md-6">
         	    <div class="card">
         	        <div class="card-header"><strong>Property Owner's</strong> Details</div>

         	        <div class="card-body">
         	    	<table class="table">
         	    		 <tr>
         	    		 	<th>Name : </th>
         	    		 	<th>{{ $property->name }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Email : </th>
         	    		 	<th>{{ $property->email }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Phone : </th>
         	    		 	<th>{{ $property->phone }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Address : </th>
         	    		 	<th>{{ $property->address }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>City :</th>
         	    		 	<th>{{ $property->city_name }}</th>
         	    		 </tr>
         	    		  <tr>
         	    		 	<th>Subcity/Thana : </th>
         	    		 	<th>{{ $property->subcity_name }}</th>
         	    		 </tr>
                        <tr>
                            <th>Month :</th>
                            <th>{{ $property->month }}</th>
                        </tr>
                        <tr>
                            <th>Date :</th>
                            <th>{{ $property->date }}</th>
                        </tr>
                        <tr>
                            <th>Year :</th>
                            <th>{{ $property->year }}</th>
                        </tr>
                        <tr>
                            <th>Status : </th>
                            <th style="font-size: 16px">
                              @if($property->status == 0)
                                  <span class="badge badge-warning p-1">Pending</span>
                              @elseif($property->status == 1)
                                  <span class="badge badge-info p-1">Uploaded</span>
                              {{-- @elseif($property->status == 2)
                                  <span class="badge badge-info p-1">On Progress </span>
                              @elseif($property->status == 3)
                                  <span class="badge badge-success p-1">Delivered </span>
                              @else
                                  <span class="badge badge-danger p-1">Canceled </span> --}}
                              @endif
                            </th>
                        </tr>
                        <tr>
                            <th>Property Code :</th>
                            <th>{{ $property->property_code }}</th>
                        </tr>
                        <tr>
                            <th>Added By :</th>
                            <th style="font-size: 16px">
                                @if($property->added_by == NULL)
                                    <span class="badge badge-primary p-1">Owner/User</span>
                                @else
                                    <span class="badge badge-primary p-1">Admin</span>
                                @endif
                            </th>
                        </tr>

                        @if(isset($property->amount) && isset($property->transaction_id))
                            <tr>
                                <th>Payment :</th>
                                <th>??? {{$property->amount}}</th>
                            </tr>
                            <tr>
                                <th>Transaction Id :</th>
                                <th>{{$property->transaction_id}}</th>
                            </tr>
                        @endif

         	    	</table>

         	        </div>
         	    </div>
             </div>


         	<div class="col-md-6">
         	    <div class="card">
         	        <div class="card-header"><strong>Property</strong> Details</div>
         	        <div class="card-body">
         	    	<table class="table">
         	    		 <tr>
         	    		 	<th>Bedroom : </th>
         	    		 	<th>{{ $property->bedroom }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Bathroom : </th>
         	    		 	<th>{{ $property->bathroom }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Kitchen : </th>
         	    		 	<th>{{ $property->kitchen }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Parking : </th>
         	    		 	<th>{{ $property->parking }}</th>
         	    		 </tr>
         	    		 <tr>
         	    		 	<th>Type :</th>
         	    		 	<th>{{ $property->type }}</th>
                          </tr>
                          <tr>
                            <th>Area :</th>
                            <th>{{ $property->area }}</th>
                        </tr>
                        <tr>
                            <th>Categoty :</th>
                            <th>{{ $property->category }}</th>
                        </tr>
                        <tr>
                            <th>Purpose :</th>
                            <th>{{ $property->purpose }}</th>
                        </tr>
                        <tr>
                            <th>Floor Level :</th>
                            <th>{{ $property->floor }}</th>
                        </tr>
                        <tr>
                            <th>Price :</th>
                            <th>??? {{ $property->price }}</th>
                        </tr>
                        <tr>
                            <th>Discount Price :</th>
                            <th>??? {{ $property->discount_price }}</th>
                        </tr>
                        <tr>
                            <th>Service Charge :</th>
                            <th>??? {{ $property->service_charge }}</th>
                        </tr>
                        <tr>
                            <th class="text-primary">Total Price :</th>
                            <th class="text-primary">??? {{ number_format($property->total_price) }}</th>
                        </tr>

         	    	</table>

         	        </div>
         	    </div>
         	</div>
         </div>



        <div class="col-lg-12">
            <div class="form-group" style="border:1px solid grey;padding:10px;">
            <label class="form-control-label"><b>Property Details/Description : </b><span class="tx-danger">*</span></label>
              <br>
            <p>{!! $property->details !!}</p>
          </div>
        </div>

        {{-- <div class="col-lg-12">
            <div class="form-group" style="border:1px solid grey;padding:10px;">
            <label class="form-control-label">Video Link : <span class="tx-danger">*</span></label>
              <br>
            <p style="margin-left: 35px">{{ $property->video }}</p>
          </div>
        </div> --}}
        {{-- <div class="col-lg-12">
            <div class="form-group" style="border:1px solid grey;padding:10px;">
            <label class="form-control-label">Map Link : <span class="tx-danger">*</span></label>
              <br>
            <p style="margin-left: 35px">{{ $property->map_link }}</p>
          </div>
        </div> --}}


    <div class="row p-4 mb-3">
        <div class="col-lg-4">
            <label>Image One (Main Thumbnail)<span class="tx-danger">*</span></label>
            <label class="custom-file">
            <img src="{{ URL::to($property->image_one) }}" style="height: 80px; width: 80px;" >
          </label>
        </div>
        <div class="col-lg-4">
            <label>Image Two <span class="tx-danger">*</span></label>
            <label class="custom-file">
            <img src="{{ URL::to($property->image_two) }}" style="height: 80px; width: 80px;" >
          </label>
        </div>
        <div class="col-lg-4">
            <label>Image Three <span class="tx-danger">*</span></label>
            <label class="custom-file">
            <img src="{{ URL::to($property->image_three) }}" style="height: 80px; width: 80px;" >
          </label>
        </div>
    </div>



  <div class="row m-4" style="border:1px solid grey;padding:10px; font-size:15px;">
    <div class="col-lg-4">
        <label>
        @if($property->trend == 1)
          <span class="badge badge-success p-1">Active</span> |
        @else
        <span class="badge badge-danger p-1">Inactive</span> |
        @endif
          <span>Trend</span>
        </label>
    </div>
    <div class="col-lg-4">
        <label>
          @if($property->best_rated == 1)
          <span class="badge badge-success p-1">Active</span> |
        @else
        <span class="badge badge-danger p-1">Inactive</span> |
        @endif
          <span>Best Rated</span>
        </label>
    </div>
    <div class="col-lg-4">
        <label class="">
          @if($property->hot_new == 1)
          <span class="badge badge-success p-1">Active</span> |
        @else
        <span class="badge badge-danger p-1">Inactive</span> |
        @endif
          <span>Hot New</span>
        </label>
    </div>
  </div> <hr>


<!--//----------------------------------------------------------------------------
// --ekhane Database onosare "Status" er term gular rules holo :--
//         Status = 0 = Pending
//         Status = 1 = PropertyAccepted === Upload_Property
//        
//------------------------------------------------------------------------------->


    @if($property->status == 0)
        <strong> ** If everything is OK & all of these above info is valid, Please click 'Upload Property' to upload it.</strong>
        <a href="{{ url('admin/property/accept/'.$property->id) }}" class="btn btn-info"><i class="fa fa-check-square"></i>&nbsp; Upload Property</a>
       

    
    @endif

      </div><!--card-->
    </div>








</div><!-- sl-mainpanel -->


@endsection


