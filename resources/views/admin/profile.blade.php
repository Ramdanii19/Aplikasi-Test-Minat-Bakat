  <!-- Navbar -->
  @includeIf('layouts.header')
  <title>Profile</title>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @includeIf('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Beranda</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <!-- /.row -->
        <!-- Main row -->
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
        Edit Data
        </button> -->
        <br><br>

        <center>
         <table class="table table-hover">
			{{ csrf_field() }}
            <tr>
                <td><label>Nama Admin</label></td>
                <td><label>:</label></td>
                <td>{{ Auth::user()->name }}</td>
            </tr>
            <tr>
                <td><label>Email</label></td>
                <td><label>:</label></td>
                <td>{{ Auth::user()->email }}</td>
            </tr>
	        </table>
        </center>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <!-- Footer -->
    @includeIf('layouts.footer')
