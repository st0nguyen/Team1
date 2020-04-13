<div id="addEditCategory" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <form id="formAddEditCategory" enctype="multipart/form-data">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tạo mới danh mục</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <input hidden id="Id" name="Id">
                <div class="modal-body">
                    <div style="text-align:center">
                        <div class="row form-group">
                            <label for="category_name">Tên</label>
                            <input type="text" class="form-control" id="category_name" name="category_name" placeholder="tên danh mục">
                        </div>
                        <div class="row form-group">
                            <label for="category_alias">Tên</label>
                            <input type="text" class="form-control" id="category_alias" name="category_alias" placeholder="Bí danh">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    <a href="javascript:;" class="btn btn-danger" onclick="category.save()">Save</a>
                </div>
            </div>
        </form>
    </div>