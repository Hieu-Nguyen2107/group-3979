function update(id){
    if(confirm("Bạn có muốn chỉnh sửa thông tin của sản phẩm này không !!!")){
        document.getElementById(id).setAttribute("contenteditable","true")
    }
}
function save(id){
    document.getElementById(id).setAttribute("contenteditable","false")
    alert("Cập nhật thông tin thành công !!!")
}
