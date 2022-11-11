<template>
    <div class="container">
        <div class="chapter-list-container">
            <h3 class="chapter-list-title chapter-list">Danh Sách Chương</h3>
            <div class="all-chapter-container">
                <div class="row">
                    <div class="col-8">
                        <div class="title-chapter">Tên Chương</div>
                    </div>
                    <div class="col-4">
                        <div class="title-chapter">Ngày Đăng</div>
                    </div>
                </div>

                <div class="scrollbox" tabindex="0" id="style-3">
                    <div class="scrollbox-content">
                        <div class="row chapter-name">
                            <div class="col-8 chapter-container">
                                <div class="chapter-name">
                                    <a href="">Chương 31 - Nhập Phẩm Lần Nữa, Nho Đạo Thập Phẩm (1)</a>
                                </div>
                            </div>
                            <div class="col-4 date-chapter-container">
                                <div class="ngaydang">17/09/2022 18:38</div>
                            </div>
                        </div>
                        <div class="row chapter-name">
                            <div class="col-8 chapter-container">
                                <div class="chapter-name">
                                    <a href="">Chương 31 - Nhập Phẩm Lần Nữa, Nho Đạo Thập Phẩm (1)</a>
                                </div>
                            </div>
                            <div class="col-4 date-chapter-container">
                                <div class="ngaydang">17/09/2022 18:38</div>
                            </div>
                        </div>
                        <div class="row chapter-name">
                            <div class="col-8 chapter-container">
                                <div class="chapter-name">
                                    <a href="">Chương 31 - Nhập Phẩm Lần Nữa, Nho Đạo Thập Phẩm (1)</a>
                                </div>
                            </div>
                            <div class="col-4 date-chapter-container">
                                <div class="ngaydang">17/09/2022 18:38</div>
                            </div>
                        </div>
                        <div class="row chapter-name">
                            <div class="col-8 chapter-container">
                                <div class="chapter-name">
                                    <a href="">Chương 31 - Nhập Phẩm Lần Nữa, Nho Đạo Thập Phẩm (1)</a>
                                </div>
                            </div>
                            <div class="col-4 date-chapter-container">
                                <div class="ngaydang">17/09/2022 18:38</div>
                            </div>
                        </div>
                        <div class="row chapter-name">
                            <div class="col-8 chapter-container">
                                <div class="chapter-name">
                                    <a href="">Chương 31 - Nhập Phẩm Lần Nữa, Nho Đạo Thập Phẩm (1)</a>
                                </div>
                            </div>
                            <div class="col-4 date-chapter-container">
                                <div class="ngaydang">17/09/2022 18:38</div>
                            </div>
                        </div>
                        <div class="row chapter-name">
                            <div class="col-8 chapter-container">
                                <div class="chapter-name">
                                    <a href="">Chương 31 - Nhập Phẩm Lần Nữa, Nho Đạo Thập Phẩm (1)</a>
                                </div>
                            </div>
                            <div class="col-4 date-chapter-container">
                                <div class="ngaydang">17/09/2022 18:38</div>
                            </div>
                        </div>
                        <div class="row chapter-name">
                            <div class="col-8 chapter-container">
                                <div class="chapter-name">
                                    <a href="">Chương 31 - Nhập Phẩm Lần Nữa, Nho Đạo Thập Phẩm (1)</a>
                                </div>
                            </div>
                            <div class="col-4 date-chapter-container">
                                <div class="ngaydang">17/09/2022 18:38</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
  
<script>
export default {};
</script>
  
<style>
* {
    font-family: Tahoma, sans-serif, Helvetica, Arial;
}

.chapter-name {
    margin-left: 0px;
}

.scrollbox {
    height: 9rem;
    overflow: auto;
    visibility: hidden;

    font-size: 17px;
    overflow-x: hidden;
    line-height: 40px;
}

.scrollbox-content,
.scrollbox:hover,
.scrollbox:focus {
    visibility: visible;
}

.chapter-list-container {
    background-color: #dedede;
    margin-top: -20px;
}

.chapter-list {
    margin-left: 20px;
}

.chapter-list-title {
    color: #de6e98;
    font-weight: bold;

    margin-right: 20px;
}

.title-chapter {
    text-align: center;
    font-size: 20px;
    font-weight: bold;
}

.ngaydang {
    text-align: center;
}

.chapter-name a {
    text-decoration: none;
    color: rgb(41, 146, 41);
}

.all-chapter-container {
    margin: 0px 20px;
    border: 2px solid #de6e98;
}
</style>