<?php $this->load->view('header') ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajemen Kepegawaian
        <!-- <small>it all starts here</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li><a href="#">Here</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Pegawai</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped" width="100%">
                  <thead>
                    <tr>
                      <th>Nama Lengkap</th>
                      <th>Tempat, Tanggal Lahir</th>
                      <th>Alamat</th>
                      <th>No KTP</th>
                      <th>Riwayat Pendidikan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Muhammad Ilham</td>
                      <td>Jakarta, 29 Maret 1995</td>
                      <td>Jakarta Pusat</td>
                      <td>330221234567789</td>
                      <td>SMPN 18, SMK TELKOM, UGM</td>
                      <td>
                        <button class="btn btn-warning" type="edit">Edit</button>
                        <button class="btn btn-danger" type="delete">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>Jasmine Indah</td>
                      <td>Purwokerto, 14 Oktober 1997</td>
                      <td>Purwokerto</td>
                      <td>330225467385989</td>
                      <td>SMPN 5, SMAN 5, UGM</td>
                      <td>
                        <button class="btn btn-warning" type="edit">Edit</button>
                        <button class="btn btn-danger" type="delete">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>Lintang Muhammad</td>
                      <td>Jakarta, 29 Maret 1995</td>
                      <td>Jakarta Pusat</td>
                      <td>33022584567899</td>
                      <td>SMPN 18, SMK TELKOM, UGM</td>
                      <td>
                        <button class="btn btn-warning" type="edit">Edit</button>
                        <button class="btn btn-danger" type="delete">Delete</button>
                      </td>
                    </tr>
                    <tr>
                      <td>Elang Muhammad Irawan</td>
                      <td>Bekasi, 1 Januari 1994</td>
                      <td>Bekasi</td>
                      <td>3302243389399</td>
                      <td>SMPN 28, SMAN 13, UI</td>
                      <td>
                        <button class="btn btn-warning" type="edit">Edit</button>
                        <button class="btn btn-danger" type="delete">Delete</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

      <!-- Default box -->
      <!-- <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Data Pegawai</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div> -->
        <div class="box-body">
          Start creating your amazing application!
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('footer') ?>
<!-- nama lengkap pegawai
             tempat tanggal lahir
             alamat (text area)
             no ktp
             riwayat pendidikan (smp,sma,kuliah)
             upload cv
             upload riwayat hidup
             upload sertifikat -->
