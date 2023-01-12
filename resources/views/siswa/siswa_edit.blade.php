  <!-- Navbar -->
  @includeIf('layouts.header')
  <title>User Siswa Edit</title>

  <!-- Main Sidebar Container -->
  @includeIf('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <a href="/siswa" class="btn btn-primary" style="margin-left: 10px;"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
	
	<br/>
	<br/>
	<table class="table table-hover">
		@foreach($siswa as $row)
		<form action="/siswa/edit_data" method="post">
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
                <td><input type="text" name="password" value="" class="form-control"></input></td>
            </tr> -->
            <tr>
                <td>Level</td>
                <td>:</td>
                <td><select  name="level" id="" class="form-control">
                    <option>user</option>
                    <option>admin</option>
                </select></td>
            </tr>
            <tr>
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
