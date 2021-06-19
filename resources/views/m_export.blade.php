<div class="modal fade" id="export_excel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-judul"></h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form id="export_excel" name="export_excel" class="form-horizontal">
                        <div class="row">
                            <div class="col-sm-12">

                                <input type="hidden" name="id" id="id">

                                <div class="form-group">
                                    <label for="created_at" class="col-sm-12 control-label">Date From</label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" id="created_at" name="created_at"
                                            value="" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="created_at" class="col-sm-12 control-label">Date To</label>
                                    <div class="col-sm-12">
                                        <input type="date" class="form-control" id="created_at" name="created_at"
                                            value="" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-offset-2 col-sm-12">
                                <button type="submit" class="btn btn-success btn-block" id="tombol-export"
                                    value="create">Export
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>