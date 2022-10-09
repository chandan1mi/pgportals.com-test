@extends('layout.admin')
@section('content')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCI4EqyWqMjgEA-zkyoC36cX6YQGLvn1RI"></script>
<script src="{{ asset('assets/js/jquery-geolocate.min.js')}}"></script>
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fas fa-info icon-gradient bg-malibu-beach"></i>
            </div>
            <div>Create
                <div class="page-title-subheading">Listing</div>
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-toggle="tooltip" title="" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark" data-original-title="Example Tooltip">
                <i class="fa fa-star"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-business-time fa-w-20"></i>
                    </span>
                    Buttons
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="nav-link-icon lnr-inbox"></i>
                                <span> Inbox</span>
                                <div class="ml-auto badge badge-pill badge-secondary">86</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="nav-link-icon lnr-book"></i>
                                <span> Book</span>
                                <div class="ml-auto badge badge-pill badge-danger">5</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="nav-link-icon lnr-picture"></i>
                                <span> Picture</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a disabled="" class="nav-link disabled">
                                <i class="nav-link-icon lnr-file-empty"></i>
                                <span> File Disabled</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="">
<form action="{{url_builder('listings.store')}}" method="POST">
    @csrf
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="accordion-wrapper">
                <div class="card-header custom_style_height_pading">
                    Add Listing
                </div>
                <div class="p-3">
                    <div class='row'>
                        <div class='col-md-6 pb-3'>
                            {{ formLabel('Title','title','font-weight-bold') }}
                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class='col-md-6 pb-3'>
                            {{ formLabel('Address','address','font-weight-bold') }}
                            <div class="input-group">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror geo-address" name="address" value="{{ old('address') }}" required autocomplete="address">
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <div class="input-group-append location-address" data-toggle="tooltip" data-placement="top" title="Click To Fill The Current Location">
                                    <span class="input-group-text"><i class="fas fa-map-marker" ></i></span>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-12'>
                            {{ formLabel('Description','description','font-weight-bold') }}
                            <textarea id="description" cols="30" rows="6" type="text" class="form-control" name="description"></textarea>
                        </div>
                    </div>       
                </div>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="accordion-wrapper">
                <div class="card-header custom_style_height_pading">
                Other Listing Settings
                </div>
                <div class="p-3">
                    <div class='row'>
                        <div class='col-md-6 pb-3'>
                            {{ formLabel('District','district','font-weight-bold') }}
                            <div class="input-group">
                                <input id="district" type="text" class="form-control @error('district') is-invalid @enderror" name="district" value="{{ old('district') }}" required autocomplete="district">
                                @error('district')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class='col-md-6 pb-3'>
                            {{ formLabel('State','state','font-weight-bold') }}
                            <div class="input-group">
                                <input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required autocomplete="state">
                                @error('state')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class='col-md-6 pb-3'>
                            {{ formLabel('Country','country','font-weight-bold') }}
                            <div class="input-group">
                                <input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country">
                                @error('country')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class='col-md-6 pb-3'>
                            {{ formLabel('Pincode','pincode','font-weight-bold') }}
                            <div class="input-group">
                                <input id="pincode" type="text" class="form-control @error('pincode') is-invalid @enderror" name="pincode" value="{{ old('pincode') }}" required autocomplete="pincode">
                                @error('pincode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class='col-md-6 pb-3'>
                            {{ formLabel('Neighborhood','neighborhood','font-weight-bold') }}
                            <div class="input-group">
                                <input id="neighborhood" type="text" class="form-control @error('neighborhood') is-invalid @enderror" name="neighborhood" value="{{ old('neighborhood') }}" required autocomplete="neighborhood">
                                @error('neighborhood')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class='col-md-6 pb-3'>
                            {{ formLabel('Car Parking','','font-weight-bold') }}
                            <div class="">
                                <div class="custom-radio custom-control custom-control-inline">
                                    <input type="radio" id="car_parking_yes" name="car_parking"  value="1" class="custom-control-input">
                                    <label class="custom-control-label" for="car_parking_yes">Yes</label>
                                </div>
                                <div class="custom-radio custom-control custom-control-inline">
                                    <input type="radio" id="car_parking_no" name="car_parking" checked value="0" class="custom-control-input">
                                    <label class="custom-control-label" for="car_parking_no">No</label>
                                </div>
                            </div>
                        </div>
                        <div class='col-md-6 pb-3'>
                            {{ formLabel('Two Whealer Parking','','font-weight-bold') }}
                            <div class="">
                                <div class="custom-radio custom-control custom-control-inline">
                                    <input type="radio" id="two_whealer_parking_yes" name="two_whealer_parking" checked value="1" class="custom-control-input">
                                    <label class="custom-control-label" for="two_whealer_parking_yes">Yes</label>
                                </div>
                                <div class="custom-radio custom-control custom-control-inline">
                                    <input type="radio" id="two_whealer_parking_no" name="two_whealer_parking" value="0" class="custom-control-input">
                                    <label class="custom-control-label" for="two_whealer_parking_no">No</label>
                                </div>
                            </div>
                        </div>
                    </div>       
                </div>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="accordion-wrapper">
                <div class="card-header custom_style_height_pading">
                    Room/ Rooms Settings
                </div>
                <div class="p-3">
                        <div class='row'>
                            <div class='col-md-6 pb-3'>
                                {{ formLabel('Number of rooms','rooms','font-weight-bold') }}
                                @if ($listingType=='room')
                                <label for="" class="form-control">1</label>
                                @else
                                <input id="rooms" type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, '');" value="1" class="form-control" name="rooms">
                                @endif
                            </div>
                            <div class='col-md-6 pb-3'>
                                {{ formLabel('Listing Room/Rooms Type','address','font-weight-bold') }}
                                <div>
                                    <div class="custom-radio custom-control custom-control-inline">
                                        <input type="radio" id="nonac" name="listing_coolant" checked value="ac" class="custom-control-input">
                                        <label class="custom-control-label" for="nonac">Non Ac</label>
                                    </div>
                                    <div class="custom-radio custom-control custom-control-inline">
                                        <input type="radio" id="ac" name="listing_coolant" value="non_ac" class="custom-control-input">
                                        <label class="custom-control-label" for="ac">Ac</label>
                                    </div>
                                    <div class="custom-radio custom-control custom-control-inline">
                                        <input type="radio" id="both" name="listing_coolant" value="both" class="custom-control-input">
                                        <label class="custom-control-label" for="both">Both</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button class="ladda-button my-3 mr-2 btn btn-shadow btn btn-primary" data-style="expand-right"><span class="ladda-label">Save</span><span class="ladda-spinner"></span></button>
</form>
<script>
    $('.location-address').on('click', function() {
        $('.geo-address').attr('value','Searching...');
        $.geolocate({
            'components': ['street_number','route','neighborhood','locality','administrative_area_level_1','postal_code','country'],
            'name':'long_name'
        }).done(function(result) {
            console.log(result);
            $('.geo-address').attr('value',result);
            var current_location_data=result.split(',');
            console.log(current_location_data);
            var pincode=current_location_data[6];
            $('#pincode').attr('value',pincode);
            var country=current_location_data[5];
            $('#country').attr('value',country);
            var state=current_location_data[4];
            $('#state').attr('value',state);
            var district=current_location_data[3];
            $('#district').attr('value',district);
            var neighborhood=current_location_data[2];
            $('#neighborhood').attr('value',neighborhood);
            // var route=current_location_data[1];
            // var house_number=current_location_data[0];
        });
    });
</script>    
@endsection