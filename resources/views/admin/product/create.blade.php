<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.components.head')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('/plugins')}}/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('/plugins')}}/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('/plugins')}}/datatables-buttons/css/buttons.bootstrap4.min.css">
  {{-- <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('/dist')}}/css/adminlte.min.css"> --}}
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('layouts.components.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{asset('/dist')}}/img/Logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Products</span>
    </a>

    <!-- Sidebar -->
    @include('layouts.components.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    @include('layouts.components.preloader')

    {{-- @if (session('status'))
    <div class="alert alert-success text-center" role="alert">
        {{ session('status') }}
    </div>
    @endif
    @if (session('error'))
        <div class="alert alert-warning text-center" role="alert">
            {{ session('error') }}
        </div>
    @endif --}}

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 offset-md-3 mt-3">

            <div class="card elevation-3">
              <div class="card-header text-center">
                <h1>Product Entry</h1>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form action="{{url('product-create')}}" method="POST" enctype="multipart/form-data">
                  @csrf

                  @php
                  $categories=DB::table('categories')->where('status','active')->get();
                  @endphp

                  <div class="form-group">
                    <label for="category_id" class="col-form-label">Category</label>
                    <select class="form-select form-control" name="category_id">
                      <option value="">--Select any category--</option>
                        @foreach ($categories as $category)
                          <option value="{{$category->id}}">{{$category->category_name}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="text-danger">{{$message}}</div>
                      @enderror
                  </div>

                  {{-- @php
                  $prices=DB::table('prices')->get();
                  @endphp
                  <div class="form-group">
                    <label for="price_id" class="col-form-label">Price</label>
                    <select class="form-select form-control" name="price_id">
                      <option value="">--Select any Sizing--</option>
                        @foreach ($prices as $price)
                          <option value="{{$price->id}}">{{$price->sizes}} - {{$price->price}}</option>
                        @endforeach
                    </select>
                    @error('price_id')
                        <div class="text-danger">{{$message}}</div>
                      @enderror
                  </div> --}}

                  <div class="form-group mb-3">
                    <label for="product_photo" class="col-form-label">Product Image</label>
                    <input type="file" name="product_photo" class="form-control" id="product_photo">
                    @error('product_photo')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                      <label for="product_name" class="col-form-label">Product Name</label>
                      <input type="product_name" name="product_name" class="form-control" id="product_name" placeholder="Product Name">
                      @error('product_name')
                        <div class="text-danger">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="description" class="col-form-label">Description</label>
                        <textarea type="description" name="description" class="form-control" id="description" placeholder="Description of your product"></textarea>
                        @error('description')
                            <div class="text-danger">{{$message}}</div>
                          @enderror
                      </div>

                      <div class="form-group">
                        <label for="price" class="col-form-label">Price</label>
                        <input type="price" name="price" class="form-control" id="price" placeholder="0">
                        @error('description')
                            <div class="text-danger">{{$message}}</div>
                          @enderror
                      </div>


                  <div class="form-group">
                    <label for="status" id="status">Status</label>
                    <select  type="status" name="status" class="form-select form-control" id="status" >
                      <option value="active">Active</option>
                      <option value="inactive">Inactive</option>
                     </select>

                    @error('status')
                      <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                  <div class="form-group">
                    <a type="button" class="btn btn-secondary" href="{{url('/product')}}">Back</a>
                    <button type="submit" class="btn btn-info">Save</button>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layouts.components.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('/plugins')}}/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('/plugins')}}/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('/plugins')}}/jszip/jszip.min.js"></script>
<script src="{{asset('/plugins')}}/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('/plugins')}}/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('/plugins')}}/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('/dist')}}/js/adminlte.min.js"></script>
{{-- <!-- AdminLTE for demo purposes -->
<script src="{{asset('/dist')}}/js/demo.js"></script> --}}
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
