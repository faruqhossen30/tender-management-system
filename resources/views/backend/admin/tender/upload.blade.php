@extends("backend.admin.app")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Upload Tender</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User Profile</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>


<div class="col-sm-12">
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Upload new tender</h3>
        </div>
        <form Action="{{route('tender.store')}}" method="POST">
        {{-- <form Action="{{url('/tender')}}" method="POST"> --}}
            @csrf
            <div class="card-body">
                <div class="row">

                    <div class="col-4 form-group">
                        <label for="tenderid">Tender ID</label>
                        <input type="text" class="form-control" name="tenderid" id="tenderid" placeholder="Enter Tender id">
                    </div>

                    <div class="col-4 form-group">
                        <label for="selectdeparment">Department</label>
                        <select name="selectdeparment" class="form-control" id="selectdeparment" style="width:100%;height:38px;">
                            @foreach($types as $type)
                            <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-4 form-group">
                        <label for="txtlocation">Location</label>
                        <select name="txtlocation" class="form-control" id="txtlocation" style="width:100%;height:38px;">
                            @foreach($locations as $location)
                            <option value="{{$location->name}}">{{$location->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtdescription">Description</label><br>
                    <textarea name="txtdescription" class="form-control" id="txtdescription" placeholder="Write tender description" style="width:100%; height:100px;"></textarea>
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label for="txtsecurityprice">Tender security</label>
                        <input type="text" class="form-control" name="txtsecurityprice" id="txtsecurityprice" placeholder="Enter Price">
                    </div>
                    <div class="col form-group">
                        <label for="txtbudgetprice">Tender budget</label>
                        <input type="text" class="form-control" name="txtbudgetprice" id="txtbudgetprice" placeholder="Enter budget price">
                    </div>
                    <div class="col form-group">
                        <label for="txtdate">Last Date & time</label>
                        <input type="text" class="form-control" name="txtdate" id="txtdate" placeholder="10:04:2020 , 12:00 am">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtexperience">Experience</label>
                    <textarea name="txtexperience" class="form-control" id="txtexperience" placeholder="Write tender Experience" style="width:100%; height:70px;"></textarea>
                </div>
                <div class="form-group">
                    <label for="txtturnover">Turnover</label>
                    <textarea name="txtturnover" class="form-control" id="txtturnover" placeholder="Write tender Turnover" style="width:100%; height:70px;"></textarea>
                </div>
                <div class="form-group">
                    <label for="txtline">Credit Line</label>
                    <textarea name="txtline" class="form-control" id="txtline" placeholder="Write tender Credit Line" style="width:100%; height:70px;"></textarea>
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label for="txtcapacity">Tender Capacity</label>
                        <input type="text" class="form-control" name="txtcapacity" id="txtcapacity" placeholder="Tender Capacity">
                    </div>
                    <div class="col form-group">
                        <label for="txttype">Type of tender</label>
                        <select name="txttype" class="form-control" id="txttype" style="width:100%;height:38px;">
                            <option value="1">International Tanders</option>
                            <option value="2">National Tanders</option>
                            <option value="3">Private Tander</option>
                        </select>
                    </div>
                    <div class="col form-group">
                        <label for="txtcatagory">Catagory</label>
                        <select name="txtcatagory" class="form-control" id="txtcatagory" style="width:100%;height:38px;">
                            @foreach($catagorys as $catagory)
                                <option value="{{$catagory->id}}">{{$catagory->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
            </div>
            <div class="card-footer">
                <button type="submit" name="btnsubmit" class="btn btn-success">Upload Tender</button>
                <!-- <button type="submit" class="btn btn-default float-right">Cancel</button> -->
            </div>
        </form>
    </div>
</div>


@endsection
