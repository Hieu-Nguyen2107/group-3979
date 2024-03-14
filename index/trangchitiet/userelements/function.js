let isLogin = !!localStorage.getItem("token");
function checkLogin() {
  if (isLogin) {
    window.location.href = "../../index.htm";
  }
}
function checkLogOut() {
  if (isLogin) {
    alert("Đăng xuất thành công");
    localStorage.removeItem("token");
    document.getElementById("linkLogOut").href = "index.htm";
    //window.location.href = "../../index.htm";
  }
}
function checkLogOut2() {
  if (isLogin) {
    alert("Đăng xuất thành công");
    localStorage.removeItem("token");
    document.getElementById("linkLogOut2").href = "../../index.htm";
    //window.location.href = "../../index.htm";
  }
}
function checkLogOut3() {
  if (isLogin) {
    alert("Đăng xuất thành công");
    localStorage.removeItem("token");
    document.getElementById("linkLogOut2").href = "../../../index.htm";
    //window.location.href = "../../index.htm";
  }
}
function Login() {
  localStorage.setItem("token", "user");
  isLogin = true;
  alert("Bạn đã đăng nhập thành công !!!");
  checkLogin();
}
function changeName() {
  if (isLogin) {
    document.getElementById("taikhoan").innerHTML = "ĐỨC ANH";
    document.getElementById("dangxuat").innerHTML = "Đăng xuất";
  }
}
function checkOrder(){
  if (isLogin){
    alert("Mua hàng thành công !!!");
  }else{
    alert("Bạn cần phải đăng nhập !!!");
  }
}
function checkAddCart(){
  if (isLogin){
    alert("Thêm vào giỏ hàng thành công !!!");
  }else{
    alert("Bạn cần phải đăng nhập !!!");
  }
}
function changeLinkIndex(){
  if(isLogin){
    document.getElementById("login-link").href = "trangchitiet/userelements/accountinform.htm";
  }else{
    document.getElementById("login-link").href = "trangchitiet/userelements/login.htm";
  }
}
function changeLinkProduct(){
  if(isLogin){
    document.getElementById("login-link").href = "../userelements/accountinform.htm";
  }else{
    document.getElementById("login-link").href = "../userelements/login.htm";
  }
}
function changeLinkIndex2(){
  if(isLogin){
    document.getElementById("login-link").href = "accountinform.htm";
  }else{
    document.getElementById("login-link").href = "login.htm";
  }
}
function changeLinkReceiptHistory(){
  if(isLogin){
    document.getElementById("login-link").href = "../accountinform.htm";
  }else{
    document.getElementById("login-link").href = "../login.htm";
  }
}
function check(){
  if(!isLogin){
    alert("Bạn cần phải đăng nhập !!!");
    return false;
  }else{
    alert("Thanh toán thành công");
    return true;
  }
}