<template>
    <div class="logo">
        <img src="../../images/logo2.png"
            alt="" width="150px" height="45px">
        <form class="d-flex search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
        </form>
        <form action="/login" method="get">
            <button class="login" type="submit">Đăng Nhập</button>
        </form>
    </div>
</template>
  
<script>
export default {

}
</script>
  
<style>
.logo {
    padding-left: 18.6em;
    background-image: url('https://wall.vn/wp-content/uploads/2019/11/hinh-anh-hoa-hong-xanh-8.jpg');
    display: flex;
}

.search {
    margin-top: 3px;
    padding-left: 5.6cm;
    width: 50%;
    height: 1cm;
}

.btn-outline-success {
    color: #198754;
    border-color: #198754;
    background-color: #f3efea;
}
.me-2 {
    margin-right: -0.3rem!important;
}
.btn-outline-success {
    color: #198754;
    border-color: #ffffff;
    background-color: #ffffff;
}
.login{
    margin-left:16em;
    height:1cm;
    margin-top:3px;
    background-color: #54284b;
    border: none;
    color: white;
}
.login:hover{
    color:#fd7e14;
}
</style>