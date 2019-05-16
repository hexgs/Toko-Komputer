<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Input Resi Pembayaran</h3>
                <hr>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Gambar
                    </label>
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <input type="file" name="foto">
                        <small class="form-text text-danger"><?= form_error('foto'); ?></small>
                        <p class="help-text">* Ukuran Gambar Maximal 2 Mb.</p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-2">
                        <button type="submit" class="btn btn-success" name="submit" value="Submit">Submit</button>
                        <a href="<?= base_url('') ?>/admin/transaction" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>