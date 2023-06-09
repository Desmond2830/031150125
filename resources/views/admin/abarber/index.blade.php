@extends('admin.useradmin')

@section('content')
<div class="container-fluid">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title"><span>Show Barber</span></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->


        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>


              </tr>
            </thead>
            <tbody>



              @foreach ($barber as $key=>$row)
              <tr>
                <th>{{ ++$key }}</th>
                <td>{{ $row->name }}</td>
                <th>{{ $row->email }}</th>

                <td>
                  <a href="{{ route('admin.barbarschedul',$row->id) }}" class="btn btn-info">Scheduling</a>
                </td>
              </tr>
              @endforeach


            </tbody>
            {{-- <tfoot>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </tfoot> --}}
          </table>
        </div>
        <!-- /.card-body -->
      </div>


    </div>
    <!--/.col (left) -->

  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->

@endsection
