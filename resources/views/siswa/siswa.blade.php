  <!-- Navbar -->
  @includeIf('layouts.header')
  <title>User Siswa</title>
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
            <h1 class="m-0">Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">User</a></li>
              <li class="breadcrumb-item active">Data Siswa</li>
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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Tambah Data
        </button>
        <br><br>

        <center>
            <table border="5" class="table table-bordered">
                <tr>
                      <th class="tengah">Nama</th>
                      <th class="tengah">Email</th>
                      <th class="tengah">Aksi</th>
                  </tr>
                @foreach($users as $row)
                <tr>
                    <td class="tengah">{{ $row->name }}</td>
                    <td class="tengah">{{ $row->email }}</td>
                    <td class="tengah">
                        <a href="/siswa/edit/{{ $row->id }}"><i class="fa-solid fa-pencil" style="margin-right: 15px;"></i></a>
                        <b>|</b>
                        <a href="/siswa/delete/{{ $row->id }}" onclick="return confirm('Are you sure you want to delete?');"><i class="fa-solid fa-trash" style="color: red; margin-left: 15px;"></i></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </center>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <table class="table table-hover">
                <form action="/siswa/tambah_data" method="post">
                    {{ csrf_field() }}
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><input name="name" class="form-control" required></td>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="email" name="email" class="form-control" ></td>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="password" name="password" class="form-control" ></td>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </tr>
                    <tr>
                        <td>Level</td>
                        <td>:</td>
                        <td><select  name="level" id="" class="form-control">
                          <option>user</option>
                        </select></td>
                    </tr>
                    <!-- <tr>
                        <td>Level</td>
                        <td>:</td>
                        <td><input type="password" name="level" class="form-control" ></td>
                    </tr> -->
                </table>
            </div>
         <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" value="Simpan" class="btn btn-primary"></input>
            </form>
            </div> 
        </div>  
        </div>
    </div>
    </div>

    <!-- Footer -->
    @includeIf('layouts.footer')
