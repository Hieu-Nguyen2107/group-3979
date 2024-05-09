function update(id){
    if(confirm("Bạn có muốn chỉnh sửa thông tin của sản phẩm này không !!!")){
        document.getElementById(id).setAttribute("contenteditable","true")
    }
}
function save(id){
    document.getElementById(id).setAttribute("contenteditable","false")
    alert("Cập nhật thông tin thành công !!!")
}
function deleteIMG(){
    var parent = document.getElementById("img-delete");
    var target1 = document.getElementById("nothing");
    var target2 = document.getElementById("trash");
    if (confirm ("Bạn có chắc chắn muốn xóa !!!")){
        document.getElementById("need-delete").style.display = "none";
        parent.classList.remove("delete");
        parent.classList.add("add");
        parent.setAttribute("onclick","document.getElementById('images').click()");
        document.getElementById("delete").style.visibility= "hidden";
        target1.classList.add("bgadd");
        target1.classList.remove("nothing");
        target2.classList.add("ti-plus");
        target2.classList.remove("ti-trash");
    }
}