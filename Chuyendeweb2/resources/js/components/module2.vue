<template>
    <div class="list">
        <div class="container">
            <div class="row">
                <div class="col-md-12 list-func">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-home"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Tìm Truyện</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Lịch Sử</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/follow">Theo Dõi</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Thể Loại
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Kinh Dị</a></li>
                                        <li><a class="dropdown-item" href="#">Trinh Thám</a></li>
                                        <li><a class="dropdown-item" href="#">Hài Hước</a></li>
                                        <li><a class="dropdown-item" href="#">Lãng Mạn</a></li>
                                        <li><a class="dropdown-item" href="#">Võ Thuật</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Xếp Hạng
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
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
.nav-item:hover {
    background: #dedede;
}

.list {
    background-color: #f8f9fa;
}

.list .list-func {
    padding-left: 0;
    background-color: #f8f9fa;
}
</style>