@extends("backend.admin.app")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tender Details Informations</h1>
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
  <!-- Profile Image -->
  <div class="row">
      <div class="col">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <table class="table table-bordered mb-3">
                <thead>
                  <tr>
                    <th style="width: 10px">S.N</th>
                    <th>Title</th>
                    <th>Information</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>ID</td>
                  <td><strong> {{$tender->id}}</strong></td>
                  </tr>

                  <tr>
                    <td>2.</td>
                    <td>Tender ID</td>
                    <td><strong> {{$tender->Tender_id}}</strong></td>
                  </tr>

                  <tr>
                    <td>3.</td>
                    <td>Catagory</td>
                    <td><strong>Catagory Name</strong></td>
                  </tr>


                  <tr>
                    <td>4.</td>
                    <td>Description</td>
                    <td><p>{{$tender->description}}</p></td>
                  </tr>

                  <tr>
                    <td>5.</td>
                    <td>Location</td>
                    <td><strong>{{$tender->location}}</strong></td>
                  </tr>

                  <tr>
                    <td>6.</td>
                    <td>Secyrity Price</td>
                    <td><strong>{{$tender->security_price}}</strong></td>
                  </tr>

                  <tr>
                    <td>7.</td>
                    <td>Budget Price</td>
                    <td><strong>{{$tender->budget_price}}</strong></td>
                  </tr>

                  <tr>
                    <td>8.</td>
                    <td>Date</td>
                    <td><strong>{{ \Carbon\Carbon::parse($tender->date_time	)->format('d-M-Y')}}</strong></td>
                  </tr>

                </tbody>
              </table>

              <a href="{{url('/tender/'.$tender->id.'/edit')}}" class="btn btn-primary"><b>Edit</b></a>
              <form action="{{url('tender/'.$tender->id)}}" method="post" style="display:inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="confirm('Sure ? Want to delete company ?')" class="btn btn-danger">Delete</button>
            </form>
            </div>
            <!-- /.card-body -->
          </div>
      </div>
  </div>
@endsection



