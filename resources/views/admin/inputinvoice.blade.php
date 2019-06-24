 @extends('layouts.master')
 @section('content')
    <!-- Content Header (Page header) -->
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Form Tambah Invoice</h3>
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
            <td><input type="text" name="nama" placeholder="Email" size="50px" maxlength="50px" required /></td>
          </tr>

            <tr>
            <td>Nomer Invoice*</td>
            <td><input type="text" name="nama" placeholder="Nomer PO" size="50px" maxlength="50px" required /></td>
          </tr>
           <tr>
            <td>Tanggal Invoice</td>
            <td><input type="date" name="tanggall" placeholder="Tanggal Lahir" value="<?php $thn=date('Y');$t=$thn-16;$tgl=$t."-".date('m-d'); echo $tgl; ?>" /></td>
          </tr>

          <tr>
            <td>Nama Pelanggan*</td>
            <td><input type="text" name="nama" placeholder="Nama Perusahaan" size="50px" maxlength="50px" required /></td>
          </tr>
          <tr>
            <td>Alamat Perusahaan*</td>
            <td><input type="text" name="nama" placeholder="Alamat Perusaan" size="50px" maxlength="50px" required /></td>
          </tr>
           <tr>
            <td>Kontak Perusahaan*</td>
            <td><input type="text" name="nama" placeholder="No Telephone" size="50px" maxlength="50px" required /></td>
          </tr>
          <tr>
            <td>Email Perusahaan*</td>
            <td><input type="text" name="nama" placeholder="Email" size="50px" maxlength="50px" required /></td>
          </tr>
          
           <tr>
            <td>Nama Barang*</td>
            <td><input type="text" name="nama" placeholder="Nama Barang" size="50px" maxlength="50px" required /></td>
          </tr>
          <tr>
          <tr>
            <td width=174>Jumlah Barang*</td>
            <td><input type="number" name="nis" placeholder="Jumlah Barang" size="10px" maxlength="9px" required /><small> INI OTOMATIS</small></td>
          </tr>
          <tr>
            <td width=174>Harga Barang*</td>
            <td><input type="number" name="nis" placeholder="Harga Barang" size="10px" maxlength="9px" required /><small> INI OTOMATIS</small></td>
          </tr>
          <tr>
            <td width=174>Subtotal*</td>
            <td><input type="number" name="nis" placeholder="Harga Barang" size="10px" maxlength="9px" required /><small> INI OTOMATIS</small></td>
          </tr>
          
          
          
          <tr>
            <td>Pajak</td>
            <td><input type="text" name="hp" placeholder="HP" size="15px" maxlength="15px" /></td>
          </tr>
          <tr>
            <td> Total Harga</td>
            <td><input type="email" name="surel" placeholder="Total Harga" size="30px" maxlength="30px" /><small> INI OTOMATIS</small></td>
          </tr>
          
            

            
         
          
          <tr>
            <td colspan=3>
            <input type="submit" name="simpan" value="Save" class="btn btn-large btn-primary" />&nbsp;&nbsp;&nbsp;
            <input type="" name="reset" value="Reset" class="btn btn-large btn-warning" />&nbsp;&nbsp;&nbsp;
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