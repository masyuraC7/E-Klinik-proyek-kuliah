<?php if (isset($_GET['status']) && $_GET['status'] == 'sukses') { ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Perubahan Berhasil!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">Data Pasien anda berhasil diubah. </div>
                    <div class="col-md-12"><button data-bs-dismiss="modal" aria-label="Close" style="float: right;" class="btn btn-success">Close</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }else{ ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Perubahan Gagal!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">Data Pasien anda gagal diubah. </div>
                    <div class="col-md-12"><button data-bs-dismiss="modal" aria-label="Close" style="float: right;" class="btn btn-danger">Close</button></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
      $("#exampleModal").modal('show');
  }); 
</script>