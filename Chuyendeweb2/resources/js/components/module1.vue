<template>
    <div class="logo">
            <div class="container hd">
                <div class="row header1">
                    <div class="col-md-3 img-logo">
                        <a class="" href="/">
                            <img src="../../images/logo3.png" alt="">
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
                        <form action="/login" method="get">
                            <button class="btn btn-success" type="submit">Đăng Nhập</button>
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
    width: 100px;
    height: 70px;
}
.header1 .search .me-2{
    margin-right: -0.3rem!important;
}
.header1 .search{
    padding-top:1em;
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
.logo{
    background-color: #292929;
}
.header1 .login .btn-outline-success{
    margin-top:1.7em;
    margin-left:12em;
}
.login>form{
    float: right;
    margin-top: 15px;
}
</style>