  <!-- Navbar -->
  @includeIf('layouts.header')
  <title>Soal Grup Soal Edit</title>

  <!-- Main Sidebar Container -->
  @includeIf('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <a href="/grup_soal" class="btn btn-primary" style="margin-left: 10px;"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
    <a href="/grup_soal" class="btn btn-success" style="margin-left: 10px;"> Tambah Soal</a>
    <button type="button" class="btn btn-primary" style="margin-left: 10px;" data-toggle="modal" data-target="#exampleModalCenter">
                          Tambah Satu Soal
                        </button>
	<br/>
	<br/>
	<center>
            <table border="5" class="table table-bordered">
                <tr>
                      <th class="tengah">No</th>
                      <th class="tengah">Soal</th>
                      <th class="tengah">Gambar</th>
                      <th class="tengah">A</th>
                      <th class="tengah">B</th>
                      <th class="tengah">C</th>
                      <th class="tengah">D</th>
                      <th class="tengah">Jawaban</th>
                      <th class="tengah">Aksi</th>
                  </tr>
                @php $i=1 @endphp
                @foreach($soal as $row)
                <tr>
                    <td class="tengah">{{ $i++ }}</td>
                    <td class="tengah">{{ $row->soal }}</td>
                    <td class="tengah">{{ $row->gambar }}</td>
                    <td class="tengah">{{ $row->a }}</td>
                    <td class="tengah">{{ $row->b }}</td>
                    <td class="tengah">{{ $row->c }}</td>
                    <td class="tengah">{{ $row->d }}</td>
                    <td class="tengah">{{ $row->jawaban }}</td>
                    <td class="tengah">
                        <a href="/soal/edit/{{ $row->id_soal }}"><i class="fa-solid fa-pencil" style="margin-right: 15px;"></i></a>
                        <b>|</b>
                        <a href="/soal/delete/{{ $row->id_soal }}" onclick="return confirm('Are you sure you want to delete?');"><i class="fa-solid fa-trash" style="color: red; margin-left: 15px;"></i></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </center>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
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
                <form action="/grup_soal/tambah_data_soal" method="post">
                    {{ csrf_field() }}
                    <tr>
                        <td><input type="hidden" name="id_grup_soal" required="required" class="form-control" value="{{ $row->id_grup_soal }}" readonly></td>
                    </tr>
                    <tr>
                        <td>Soal</td>
                        <td>:</td>
                        <td><input type="text" name="soal" required="required" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Gambar</td>
                        <td>:</td>
                        <td><input type="text" name="gambar" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>:</td>
                        <td><input type="text" name="a" required="required" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>B</td>
                        <td>:</td>
                        <td><input type="text" name="b" required="required" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>C</td>
                        <td>:</td>
                        <td><input type="text" name="c" required="required" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>D</td>
                        <td>:</td>
                        <td><input type="text" name="d" required="required" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Jawaban</td>
                        <td>:</td>
                        <td><input type="text" name="jawaban" required="required" class="form-control"></td>
                    </tr>
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
