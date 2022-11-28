<div class="container">
    <div class="card text-center">
        <h3>Anda menggunakan versi <?=master('version');?></h3>

        <form class="form-horizontal form-label-left" method="post" action="<?=site_url('patching')?>" enctype="multipart/form-data">

            <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Patch Sistem</label>
                <div class="col-md-9 col-sm-9 col-xs-9">
                    <input type="file" class="form-control" name="patching">
                    <span class="fa fa-puzzle-piece form-control-feedback right" aria-hidden="true"></span>
                </div>
            </div>
                      
            <div class="ln_solid"></div>

           
            <div class="form-group row">
                <div class="col-md-9 offset-md-3">
                    <!-- <button type="submit" class="btn btn-primary">Cancel</button> -->
                    <button type="submit" name="submit" class="btn btn-success btn-block"> <i class="fas fa-cog fa-spin"></i> Patching</button>
                </div>
            </div>

        </form>
    </div>
</div>