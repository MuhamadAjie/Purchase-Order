 @extends('layouts.master')
 @section('content')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form TambahVendor</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
       <!--Mulai buat form-->
       <form action="?m=siswa&s=simpan" method="post" enctype="multipart/form-data">
              <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                <tbody>
                   <tr>
            <td>Nama Vendor*</td>
            <td><input type="text" name="nama" placeholder="Nama Vendor" size="50px" maxlength="50px" required /></td>
          </tr>
           <tr>
            <td>Alamat Vendor*</td>
            <td><input type="text" name="nama" placeholder="Alamat Vendor" size="50px" maxlength="50px" required /></td>
          </tr>
           <tr>
            <td>Kontak Vendor*</td>
            <td><input type="text" name="nama" placeholder="No Telephone" size="50px" maxlength="50px" required /></td>
          </tr>
          <tr>
            <td>Email Vendor*</td>
            <td><input type="text" name="nama" placeholder="Email Vendor" size="50px" maxlength="50px" required /></td>
          </tr>
          <tr>
            <td colspan=3>
            <input type="submit" name="simpan" value="Save" class="btn btn-large btn-primary" />&nbsp;&nbsp;&nbsp;
            <input type="reset" name="reset" value="Reset" class="btn btn-large btn-warning" />&nbsp;&nbsp;&nbsp;
           <input type="submit" name="print" value="Print" class="btn btn-large btn-primary" />&nbsp;&nbsp;&nbsp;
           
            <a href="?m=siswa" class="btn btn-large btn-danger"><i class="fa fa-times"></i> Hapus</a></td>
             
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