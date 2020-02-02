<!-- DataTables -->
<link rel="stylesheet" href="<?=base_url('assets/plugins/datatables/dataTables.bootstrap.min.css');  ?>">
<script src="<?=base_url('assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?=base_url('assets/plugins/datatables/dataTables.bootstrap.min.js') ?>"></script>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><i class="fa fa-dashboard"></i>
        Verifikasi
        <small>Control Panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?=base_url('administrator/main') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Verifikasi</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-tags"></i> Data Pendaftar</h3>
              <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
              </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class="box-body">
            <div id="pesan-sukses">
            </div>
              <div class="table-responsive">
                <table id="tabel_daftar" class="table table-hover table-bordered table-responsive">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Nisn</th>
                      <th>Sekolah</th>
                      <th>Prodi</th>
                      <th>FC Ijazah</th>
                      <th>FC Skhu</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody id="showdata">
                    
                  </tbody>
                </table>
              </div>

            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="modal fade" id="modalNews" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            <form id="form" action="javascript:void(0)">
                <!-- textarea -->
                <div class="form-group">
                  <textarea  class="form-control textarea" rows="3" name="info" id="info-data" placeholder="Masukan Informasi Terbaru ..."></textarea>
                  <input type="hidden" name="id" class="id-info">
                </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" id="btn-simpan-news">Simpan</button>
            <button type="button" class="btn btn-primary" id="btn-update-news">Ubah</button>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript" charset="utf-8" >

    function show_pendaftar() {
      
       $.ajax({
          type: 'GET',
          url: '<?php echo base_url() ?>administrator/verifikasi/show_pendaftaran',
          success: function(data){
             //console.log(data);
             $('#showdata').html(data);
             $('#tabel_daftar').DataTable();
          },
          error: function(){
            alert('Could not get Data from Database');
          }
        });
    }


      $(document).ready(function () {
        show_pendaftar();
      });

       

  </script>