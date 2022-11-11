<template>
    <div class="logo">
        <img src="../../images/logo2.png"
            alt="" width="150px" height="45px">
        <form class="d-flex search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <button class="btn btn-outline-success" type="submit"
            style=" margin-left:8cm;height:1cm;margin-top:3px;">Login</button>
    </div>
</template>
  
<script>
export default {

}
</script>
  
<style>
.logo {
    padding-left: 6.6em;
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
</style>