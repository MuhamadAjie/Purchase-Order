 @extends('layouts.master')
 @section('content')
    <!-- Content Header (Page header) -->
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Tambah Barang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
       <!--Mulai buat form-->
       <form action="?m=kelas&s=simpan" method="post" enctype="multipart/form-data">
              <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <tbody>
          <tr>
            <td width=174>Nama Barang*</td>
            <td><input type="text" name="kelas"  size="30px" maxlength="7px" required /></td>
          </tr>
           <tr>
            <td width=174>Jenis Barang*</td>
            <td><input type="text" name="kelas"  size="30px" maxlength="7px" required /></td>
          </tr>
          <tr>
            <td>Harga Barang</td>
            <td><input type="text" name="jumlah" placeholder="" size="30px" maxlength="2px" /></td>
          </tr>
          <tr>
            <td width=174>Jumlah Barang*</td>
            <td><input type="text" name="kelas"  size="30px" maxlength="7px" required /></td>
          </tr>
          <tr>
            <td colspan=3>
            <input type="submit" name="simpan" value="Save" class="btn btn-large btn-primary" />&nbsp;&nbsp;&nbsp;
            <input type="reset" name="reset" value="Reset" class="btn btn-large btn-warning" />&nbsp;&nbsp;&nbsp;
            <a href="?m=kelas" class="btn btn-large btn-danger"><i class="fa fa-times"></i> List</a></td>
          </tr>
                </tbody>
              </table>
       </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  @endsection