  <!-- Navbar -->
  @includeIf('layouts.header')
  <title>Soal Grup Soal Edit</title>

  <!-- Main Sidebar Container -->
  @includeIf('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <a href="/grup_soal" class="btn btn-primary" style="margin-left: 10px;"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
	
	<br/>
	<br/>
	<table class="table table-hover">
		@foreach($grup_soal as $row)
		<form action="/grup_soal/edit_data" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id_grup_soal" value="{{ $row->id_grup_soal }}">
            <tr>
                <td>Nama Grup Soal</td>
                <td>:</td>
                <td><input type="text" name="nama_grup_soal" required="required" value="{{ $row->nama_grup_soal }}" class="form-control"></td>
            </tr>
				<td><input type="submit" value="Simpan Data" class="btn btn-success"></td>
			</tr>
		</form>
		@endforeach
	</table>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <!-- Footer -->
  @includeIf('layouts.footer')
