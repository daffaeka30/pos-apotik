<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form">
    <div class="modal-dialog" role="document">
        <form action="" method="post" class="form-horizontal">
            @csrf
            @method('post')
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="nama" class="col-md-2 col-md-offset-1 control-label">Nama Member</label>
                        <div class="col-md-6">
                            <input type="text" name="nama" id="nama" class="form-control"
                                required autofocus>
                            <span class="help-blobk with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telepon" class="col-md-2 col-md-offset-1 control-label">No Telepon</label>
                        <div class="col-md-6">
                            <input type="text" name="telepon" id="telepon" class="form-control"
                                required>
                            <span class="help-blobk with-errors"></span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-md-2 col-md-offset-1 control-label">Alamat</label>
                        <div class="col-md-6">
                            <textarea name="alamat" id="alamat" rows="3" class="form-control"></textarea>
                            <span class="help-blobk with-errors"></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Simpan</button>
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Batal</button>
                </div>
            </div>
        </form>
    </div>
</div>