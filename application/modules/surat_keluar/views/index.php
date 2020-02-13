<?php $this->load->view('header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      SURAT KELUAR
      <!-- <small>Optional description</small> -->
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      <li class="active">Here</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <a href=<?php echo site_url("http://getbootstrap.com/javascript/#modals")?>>Bootstrap documentation</a>

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">List Data Surat Keluar</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped" width="100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Asal surat</th>
                      <th>Tanggal masuk</th>
                      <th>Tanggal keluar</th>
                      <th>Asal surat/instansi</th>
                      <th>Tujuan surat</th>
                      <th>Judul surat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Semarang</td>
                      <td>09 febuari 2020</td>
                      <td>11 febuari 2020</td>
                      <td>Polines Semarang</td>
                      <td>Purwokerto</td>
                      <td>Daftar Ulang Polines</td>
                      <td>
                        <button class="btn btn-warning" type="edit"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</button>
                        <button class= "btn btn-danger"  type="delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete </button>
                        <!-- <button class="btn btn-primary" type="detail"><i class="fa fa-info" aria-hidden="true"></i>Detail</button> -->
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-info" aria-hidden="true"></i>
                        Detail
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Jakarta</td>
                      <td>12 januari 2020</td>
                      <td>14 januari 2020</td>
                      <td>Pos Indonesia</td>
                      <td>Surabaya</td>
                      <td>Panggilan kerja</td>
                      <td>
                        <button class="btn btn-warning" type="edit"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</button>
                        <button class="btn btn-danger" type="delete"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        <!-- <button class="btn btn-primary" type="detail"><i class="fa fa-info" aria-hidden="true"></i>Detail</button> -->
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-info" aria-hidden="true"></i>
                        Detail
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Jogja</td>
                      <td>12 maret 2019</td>
                      <td>15 maret 2019</td>
                      <td>Kantor Pajak</td>
                      <td>Jogja</td>
                      <td>Tagihan Pajak</td>
                      <td>
                        <button class="btn btn-warning" type="edit"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</button>

                        <button class="btn btn-danger" type="delete"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        <!-- <button class="btn btn-primary" type="detail"><i class="fa fa-info" aria-hidden="true"></i>Detail</button> -->
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-info" aria-hidden="true"></i>
                        Detail
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Purwokerto</td>
                      <td>25 januari 2020</td>
                      <td>26 januari 2020</td>
                      <td>SMK Telkom Purwokerto</td>
                      <td>Jogja</td>
                      <td>Tagihan SPP</td>
                      <td>
                        <button class="btn btn-warning" type="edit"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</button>
                        <button class="btn btn-danger" type="delete"> <i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        <!-- <button class="btn btn-primary" type="detail"><i class="fa fa-info" aria-hidden="true"></i>Detail</button> -->
                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-info" aria-hidden="true"></i>
                        Detail
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Jakarta</td>
                      <td>10 november 2020</td>
                      <td>12 november 2020</td>
                      <td>PT KAI</td>
                      <td>Malang</td>
                      <td>Panggilan kerja</td>
                      <td>
                        <button class="btn btn-warning" type="edit"><i class="fa fa-pencil" aria-hidden="true"></i>Edit</button>
                        <button class="btn btn-danger" type="delete"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                        <!-- <button class="btn btn-primary" type="detail"><i class="fa fa-info" aria-hidden="true"></i>Detail</button> -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-info" aria-hidden="true"></i>
                        Detail
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

          <!-- /.end-box-header -->

        </div>
      </div>

      <!-- /.end-row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php $this->load->view('footer') ?>