<?php
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<div class="content-wrapper">
  <section class="content-header">
    <h1 class="title">
    <?php echo $title; ?>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo site_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active title"><?php echo $title; ?></li>
    </ol>
  </section>
  <div class="modal fade" id="modal-data" role="dialog" data-backdrop="static">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <div class="box-body pad">
          <form id="form-data">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Judul</label>
                  <input type="hidden" name="id">
                  <input type="text" class="form-control" name="judul" >
                </div>
                <div class="form-group">
                  <label>Teks</label>
                  <input type="text" class="form-control" name="teks">
                </div>
                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" class="form-control" name="ket" readonly="true">
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning btn-flat" data-dismiss="modal">Batal</button>
        <button type="button" id="btnSave" onclick="save()" class="btn btn-primary btn-flat">Simpan</button>
      </div>
    </div>
  </div>
  </div>  <!-- END MODAL INPUT-->
  <div id="modal-konfirmasi" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title"></h4></center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning btn-flat" data-dismiss="modal">Tidak</button>
          <button type="button" id="btnHapus"  class="btn btn-danger btn-flat">Ya</button>
        </div>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-info">
          <div class="box-header">
            <button class="btn btn-success btn-flat" onclick="refresh()"  title="Cek Data"><i class="glyphicon glyphicon-refresh"></i> Refresh</button>
            <!-- <button class="btn btn-warning btn-flat" onclick="add_data()" ><i class="fa fa-plus"></i> Tambah</button> -->
          </div>
          <div class="box-body">
            <div class="table-responsive mailbox-messages">
              <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Pesan</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div><!-- /.content-wrapper -->
  <?php
  $this->load->view('template/js');
  ?>
  <script type="text/javascript">
  var controller = 'kontak';
  var table;
  var idx = -1;
  var urlmaindata = "<?php echo site_url('') ?>" + controller + '/setView';
  var urledit = "<?php echo site_url('')?>" + controller + '/edit';
  var urlsave = "<?php echo site_url('')?>" + controller + '/tambah';
  var urlsavefile = "<?php echo site_url('')?>" + controller + '/tambahfile';
  var urlupdate = "<?php echo site_url('')?>" + controller + '/update';
  var urlupdatefile = "<?php echo site_url('')?>" + controller + '/updatefile';
  var urlhapus = "<?php echo site_url('')?>" + controller + '/hapus';
  var urlunduh = "<?php echo site_url('')?>" + controller + '/unduh';
  var urlaktif = "<?php echo site_url('')?>" + controller + '/aktif';

  $(document).ready(function() {
      table = $('#table').DataTable({
          "processing": true,
          "ajax": {
              "url": urlmaindata,
              "type": "POST",
              "data": {}
          },
          "columns": [{
                  "data": "no"
              }, 
              {
                  "data": "datei"
              },
              {
                  "data": "nama"
              }, 
              {
                  "data": "email"
              },
              {
                  "data": "alamat"
              },  
              {
                  "data": "pesan"
              }, 
              {
                  "data": "action"
              }
          ]
      });
  });


  function refresh() {
      table.ajax.reload(null, false);
      idx = -1;
  }

  function hapus_data(id) {
      $('.modal-title').text('Yakin Hapus Data ?');
      $('#modal-konfirmasi').modal('show');
      $('#btnHapus').attr('onclick', 'delete_data(' + id + ')');
  }

  function delete_data(id) {
      $.ajax({
          url: urlhapus,
          type: "POST",
          dataType: "JSON",
          data: {
              id: id,
          },
          success: function(data) {
              $('#modal-konfirmasi').modal('hide');
              if (data.sukses == 'success') {
                  refresh();
                  showNotif('Sukses', 'Data Berhasil Dihapus', 'success')
              } else if (data.sukses == 'fail') {
                  $('#modal-data').modal('hide');
                  refresh();
                  showNotif('Gagal', 'Data Gagal Dihapus', 'danger')
              }
              refresh();
          },
          error: function(jqXHR, textStatus, errorThrown) {
              alert('Error on process');
          }
      });
  }
  </script>
</body>
</html>