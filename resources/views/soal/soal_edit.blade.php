  <!-- Navbar -->
  @includeIf('layouts.header')

  <!-- Main Sidebar Container -->
  @includeIf('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <a href="/soal" class="btn btn-primary" style="margin-left: 10px;"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
	
	<br/>
	<br/>
	<table class="table table-hover">
		@foreach($soal as $row)
		<form action="/soal/edit_data" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id_soal" value="{{ $row->id_soal }}">
      <tr>
                        <td>Grup Soal</td>
                        <td>:</td>
                        <td><select name="grup_soal" id="" class="form-control">
                          <option value="">- Pilih -</option>
                          @foreach($soal as $row)
                          <option value="{{ $row->id_grup_soal }}">{{ $row->nama_grup_soal }}</option>
                          @endforeach
                        </select></td>
                    </tr>
            <tr>
                <td>Soal</td>
                <td>:</td>
                <td><input type="text" name="soal" required="required" value="{{ $row->soal }}" class="form-control"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td><input type="text" name="gambar" required="required" value="{{ $row->gambar }}" class="form-control"></td>
            </tr>
            <tr>
                <td>A</td>
                <td>:</td>
                <td><input type="text" name="a" required="required" value="{{ $row->a }}" class="form-control"></td>
            </tr>
            <tr>
                <td>B</td>
                <td>:</td>
                <td><input type="text" name="b" required="required" value="{{ $row->b }}" class="form-control"></td>
            </tr>
            <tr>
                <td>C</td>
                <td>:</td>
                <td><input type="text" name="c" required="required" value="{{ $row->c }}" class="form-control"></td>
            </tr>
            <tr>
                <td>D</td>
                <td>:</td>
                <td><input type="text" name="d" required="required" value="{{ $row->d }}" class="form-control"></td>
            </tr>
            <tr>
                <td>Jawaban</td>
                <td>:</td>
                <td><input type="text" name="jawaban" required="required" value="{{ $row->jawaban }}" class="form-control"></td>
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
