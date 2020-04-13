var category = category || {};

category.drawTable = function () {
    $.ajax({
        url : '/api/admin/danhmuc/',
        method : 'GET',
        dataType : 'json',
        success : function(data) {
            $('#tbCategory').empty();
            $.each(data, function(i, v) {
                i += 1;
                $('#tbCategory').append(
                    "<tr>" +
                    "<td>" + i + "</td>" +
                    "<td>" + v.category_name +"</td>" +
                    "<td>" + v.category_alias +"</td>" +
                    "<td>" + 
                            "<a href='javascript:;' onclick=category.getDetail(" + v.id + ")><i class='fa fa-edit'></i></a> " +
                            "<a href='javascript:;' onclick=category.delete(" + v.id + ")><i class='fa fa-trash'></i></a>" +
                        "</td>" +
                    "</tr>"
                )
            })
        }
    })
};

category.save = function() {
    // if($('#formAddEditCategory').valid()){
        var dataObj = {};
        if($('#Id').val() == 0){
            dataObj.category_name = $('#category_name').val();
            dataObj.category_alias = $('#category_alias').val();
            $.ajax({
                url : '/api/admin/danhmuc/',
                method : 'POST',
                data : JSON.stringify(dataObj),
                dataType : 'json',
                contentType : 'application/json',
                success : function (data) {
                    $('#addEditCategory').modal('hide');
                    category.drawTable();
                }
            });
        } else {
            dataObj.category_name = $('#category_name').val();
            dataObj.category_alias = $('#category_alias').val();
            dataObj.id = $('#Id').val();
            $.ajax({
                url : '/api/admin/danhmuc/' + dataObj.id,
                method : 'PUT',
                data : JSON.stringify(dataObj),
                dataType : 'json',
                contentType : 'application/json',
                success : function (data) {
                    $('#addEditCategory').modal('hide');
                    category.drawTable();
                }
            });
        };
    // }
};

category.resetForm = function () {
    $('#category_name').val();
    $('category_alias').val();
    $('#Id').val();
    $('#addEditCategory').find('.modal-title').text('Tạo mới danh mục');
    // $('#formAddEditCategory').resetForm();
};

category.openAddEditCategory = function () {
    category.resetForm();
    $('#addEditCategory').modal('show');
};

category.getDetail = id => {
    category.resetForm();
    $.ajax({
        url : '/api/admin/danhmuc/' + id,
        method : 'GET',
        dataType : 'json',
        contentType : 'application/json',
        success : function (data) {
            console.log(data);  
            $('#category_name').val(data.category_name);
            $('#category_alias').val(data.category_alias);
            $('#Id').val(data.id);
            $('#addEditCategory').find('.modal-title').text('Cập nhật danh mục');
            $('#addEditCategory').modal('show');
        }
    });
};

category.delete = id => {
    bootbox.confirm({
        message : "Bạn có muốn xóa danh mục này?",
        buttons : {
            confirm : {
                label : 'Có',
                className : 'btn-success'
            },
            cancel : {
                label : 'Không',
                className : 'btn-danger'
            }
        },
        callback : function (result) {
            if (result) {
                $.ajax({
                    url : '/api/admin/danhmuc/' + id,
                    method : 'DELETE',
                    contentType : 'application/json',
                    success : function (data) {
                        $('#success').modal('show');
                        setTimeout(function () {
                           $('#success').modal('hide')
                        }, 2000
                    );
                        category.drawTable();
                    }
                });
            }
        }
    })
}

category.init = function () {
    category.drawTable();
};

$(document).ready(function(){
    category.init();
});