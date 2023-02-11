@extends('admin.admin_layouts')

@section('admin_content')




    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="#">BariWala</a>
        <span class="breadcrumb-item active">Information Section</span>
      </nav>
      <div class="sl-pagebody">
      	   <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Add New Information</h6>
          {{-- <a href="#" class="btn btn-success btn-sm pull-right">All Post</a>
          <p class="mg-b-20 mg-sm-b-30">New Post add form</p> --}}

{{--Hospital--}}
          <form action="{{URL::to('admin/store/hospitalInfo')}}" method="post" enctype="multipart/form-data">
          	@csrf

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Hospital Name <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="hn_en" required>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Address <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="ha_en" required >
                </div>
              </div><!-- col-4 -->

            </div><!-- row -->
            <br><hr>

            <div class="row mg-b-25">
            <div class="col-lg-6">
              <label for="v4">City :</label>
              <select class="custom-select form-control ml-0 text-muted d-block" name="city_id" id="va4" required>
                <option value="">Choose city</option>
                @foreach ($city as $row)
                    <option value="{{$row->id}}">{{ $row->city_name }}</option>
                @endforeach
            </select>
            </div>
          {{-- <div class="col-md-3 mb-3 pr-4">
              <label for="va5">Thana/Sub-city :</label>
              <input type="text" class="form-control" name="subcity" id="va5" value="{{ $property->subcity }}" required>
          </div> --}}

          <div class="col-lg-6">
              <label for="vali3">Sub-city</label>
              <select class="custom-select form-control ml-0 text-muted d-block" name="subcity_id" id="v5" required>
                <option value="">Choose subcity</option>
                @foreach ($subcity as $row)
                    <option value="{{$row->id}}">{{ $row->subcity_name }}</option>
                @endforeach
            </select>
          </div>
        </div><!-- row -->
        <br><hr>

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Submit </button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>

 <br><hr>

{{--Park--}}
          <form action="{{URL::to('admin/store/parkInfo')}}" method="post" enctype="multipart/form-data">
          	@csrf

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Park Name<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="pn_en" required>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Address <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="pa_en" required >
                </div>
              </div><!-- col-4 -->

            </div><!-- row -->
            <br><hr>

            <div class="row mg-b-25">
            <div class="col-lg-6">
              <label for="v4">City :</label>
              <select class="custom-select form-control ml-0 text-muted d-block" name="city_id" id="va4" required>
                <option value="">Choose city</option>
                @foreach ($city as $row)
                    <option value="{{$row->id}}">{{ $row->city_name }}</option>
                @endforeach
            </select>
            </div>
          {{-- <div class="col-md-3 mb-3 pr-4">
              <label for="va5">Thana/Sub-city :</label>
              <input type="text" class="form-control" name="subcity" id="va5" value="{{ $property->subcity }}" required>
          </div> --}}

          <div class="col-lg-6">
              <label for="vali3">Sub-city</label>
              <select class="custom-select form-control ml-0 text-muted d-block" name="subcity_id" id="v5" required>
                <option value="">Choose subcity</option>
                @foreach ($subcity as $row)
                    <option value="{{$row->id}}">{{ $row->subcity_name }}</option>
                @endforeach
            </select>
          </div>
        </div><!-- row -->
        <br><hr>

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Submit </button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>
          <br><hr>

          {{--School--}}

          <form action="{{URL::to('admin/store/schoolInfo')}}" method="post" enctype="multipart/form-data">
          	@csrf

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">School Name <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="sn_en" required>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Address<span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="sa_en" required >
                </div>
              </div><!-- col-4 -->

            </div><!-- row -->
            <br><hr>

            <div class="row mg-b-25">
            <div class="col-lg-6">
              <label for="v4">City :</label>
              <select class="custom-select form-control ml-0 text-muted d-block" name="city_id" id="va4" required>
                <option value="">Choose city</option>
                @foreach ($city as $row)
                    <option value="{{$row->id}}">{{ $row->city_name }}</option>
                @endforeach
            </select>
            </div>
          {{-- <div class="col-md-3 mb-3 pr-4">
              <label for="va5">Thana/Sub-city :</label>
              <input type="text" class="form-control" name="subcity" id="va5" value="{{ $property->subcity }}" required>
          </div> --}}

          <div class="col-lg-6">
              <label for="vali3">Sub-city</label>
              <select class="custom-select form-control ml-0 text-muted d-block" name="subcity_id" id="v5" required>
                <option value="">Choose subcity</option>
                @foreach ($subcity as $row)
                    <option value="{{$row->id}}">{{ $row->subcity_name }}</option>
                @endforeach
            </select>
          </div>
        </div><!-- row -->
        <br><hr>

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Submit </button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>
          <br><hr>

          {{--Market--}}

          <form action="{{URL::to('admin/store/marketInfo')}}" method="post" enctype="multipart/form-data">
          	@csrf

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Market Name <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="mn_en" required>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Address <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="ma_en" required >
                </div>
              </div><!-- col-4 -->

            </div><!-- row -->
            <br><hr>

            <div class="row mg-b-25">
            <div class="col-lg-6">
              <label for="v4">City :</label>
              <select class="custom-select form-control ml-0 text-muted d-block" name="city_id" id="va4" required>
                <option value="">Choose city</option>
                @foreach ($city as $row)
                    <option value="{{$row->id}}">{{ $row->city_name }}</option>
                @endforeach
            </select>
            </div>
          {{-- <div class="col-md-3 mb-3 pr-4">
              <label for="va5">Thana/Sub-city :</label>
              <input type="text" class="form-control" name="subcity" id="va5" value="{{ $property->subcity }}" required>
          </div> --}}

          <div class="col-lg-6">
              <label for="vali3">Sub-city</label>
              <select class="custom-select form-control ml-0 text-muted d-block" name="subcity_id" id="v5" required>
                <option value="">Choose subcity</option>
                @foreach ($subcity as $row)
                    <option value="{{$row->id}}">{{ $row->subcity_name }}</option>
                @endforeach
            </select>
          </div>
        </div><!-- row -->
        <br><hr>

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5" type="submit">Submit </button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
          </form>

        </div><!-- card -->

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->




    <!---------JS for image--------------------->
    {{-- <script>
      $(document).ready(function() {
        $('#va4').on('change', function() {
          var city_id = $(this).val();
          $.ajax({
            type: 'GET',
            url: 'getsubcities/' + city_id,
            success: function(data) {
              var subcitySelect = $('#v5');
              subcitySelect.empty();
              subcitySelect.append('<option value="">Choose subcity</option>');
              $.each(data, function(index, subcity) {
                subcitySelect.append('<option value="' + subcity.id + '">' + subcity.subcity_name + '</option>');
              });
            }
          });
        });
      });
    </script> --}}


@endsection
