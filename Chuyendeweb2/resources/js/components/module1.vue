<template>
    <div class="logo">
            <div class="container hd">
                <div class="row header1">
                    <div class="col-md-3 img-logo">
                        <a class="" href="/">
                            <img src="../../images/logo2.png" alt="" width="152px" height="84px">
                        </a>
                    </div>
                    <div class="col-md-6 search">
                        <form class="d-flex search1">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-md-3 login">
                        <form action="/module14" method="get">
                            <button class="btn btn-outline-success" type="submit">Đăng Nhập</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</template>

<script>
export default {
    
}
</script>

<style>
.header1 .img-logo img{
    width: 152px;
    height: 84px;
}
.header1 .img-logo{
    background-color:#2b3dab;
}
.header1 .search .me-2{
    margin-right: -0.3rem!important;
}
.header1 .search{
    padding-top:1.5em;
}
.header1 .search .btn-outline-success{
    color: #198754;
    border-color: #ffffff;
    background-color: #ffffff;
}
.header1 .search .btn-outline-success:hover{
    border-color: #ffffff;
    color:white;
    background-color:  #198754;;
}
.container .header1{
    background-image: url('https://wall.vn/wp-content/uploads/2019/11/hinh-anh-hoa-hong-xanh-8.jpg');
}
.logo{
    background-image: url('https://wall.vn/wp-content/uploads/2019/11/hinh-anh-hoa-hong-xanh-8.jpg');
}
.header1 .login .btn-outline-success{
    margin-top:1.7em;
    margin-left:12.5em;
    background-color: none;
    border: none;
    color: white;
}
.header1 .login .btn-outline-success:hover{
    color:#fd7e14;
    background-color: #421f3f;
}
</style>