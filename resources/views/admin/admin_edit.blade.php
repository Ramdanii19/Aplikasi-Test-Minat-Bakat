  <!-- Navbar -->
  @includeIf('layouts.header')

  <!-- Main Sidebar Container -->
  @includeIf('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <a href="/admin" class="btn btn-primary" style="margin-left: 10px;"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
	<br/>
	<br/>
	<table class="table table-hover">
		@foreach($admin as $row)
		<form action="/admin/edit_data" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $row->id }}">
			<tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" required="required" value="{{ $row->name }}" class="form-control"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="email" required="required" value="{{ $row->email }}" class="form-control"></td>
            </tr>
            <!-- <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="text" name="password" required="required" value="" class="form-control"></input></td>
            </tr> -->
            <tr>
                <td>Level</td>
                <td>:</td>
                <td><input type="text" name="level" required="required" value="" class="form-control"></input></td>
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
