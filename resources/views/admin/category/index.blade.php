@extends('admin.layouts.admin')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Quản lý Danh Mục</h3>
                    </div>
                    <!-- thêm mới danh mục -->
                    <div class="card-body">
                        <div class="col-12 mb-3">
                            <a href="javascript:void(0);" class="btn btn-info" onclick="category.openAddEditCategory()">Thêm mới</a>
                        </div>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Danh Mục</th>
                                    <th>Bí Danh</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody id="tbCategory">
                                <!-- đỗ dữ liệu -->
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên Danh Mục</th>
                                    <th>Bí Danh</th>
                                    <th>action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    @include('admin.category.createCategory')
                </div>
                <div class="modal fade" id="success" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Đã xóa danh mục</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body text-center text-success">
                                <p>Xóa danh mục thành công</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('scripts')
<script src="/js/category.js"></script>
@endsection