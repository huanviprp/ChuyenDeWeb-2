<template>
    <div class="reading">
        <div class="container">
            <div class="top">
                <ul class="breadcrumb">
                    <li itemprop="itemListElement">
                        <a href="" class="crumb">
                            <span>
                                Trang chủ
                            </span>
                        </a>
                    </li>
                    <li itemprop="itemListElement">
                        <a href="" class="crumb">
                            <span>
                                Thể loại
                            </span>
                        </a>
                    </li>
                    <li itemprop="itemListElement">
                        <a href="" class="crumb">
                            <span>
                                Tên truyện
                            </span>
                        </a>
                    </li>
                    <li itemprop="itemListElement">
                        <a href="" class="crumb">
                            <span>
                                Chapter number
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="inf-comic text-center">
                    <h1 class="name-chapter-comic ">
                        <a href="#" class="name-comic">Siêu Nhân Điện Quang</a>
                        <span>- Chapter 1</span>
                    </h1>
                    <span class="time-update">[Cập nhật lúc: 13:50 30/10/2022]</span>
                </div>
                <div class="reading-control text-center pb-3 mb-3">
                    <div class="control-comic my-2">
                        <a href="/" class="go-home mr-2 align-middle" title="Trang chủ">
                            <i style="font-size: 1.5rem; color: red;" class="fa-solid fa-house"></i>
                        </a>
                        <a href="/" class="list-chapter mr-2 align-middle" title="Tên truyện">
                            <i style="font-size: 1.5rem; color: red;" class="fa-solid fa-bars"></i>
                        </a>
                        <a href="" class="follow-link btn btn-success">
                            <i class="fa-regular fa-heart pr-2"></i>
                            <span>Theo dõi</span>
                        </a>
                    </div>
                    <div class="nav-comic">
                        <a href="/" class="pre prev-chap" title="Trang chủ">
                            <i class="fa-solid fa-chevron-left"></i>
                        </a>
                        <select name="selectChapter" id="selectChapter" class="select-chapter" style="width:250px;">
                            <option value="/">Chapter 1</option>
                            <option value="/">Chapter 2</option>
                            <option value="/">Chapter 3</option>
                            <option value="/">Chapter 4</option>
                            <option value="/">Chapter 5</option>
                        </select>
                        <a href="/" class=" next next-chap" title="Tên truyện">
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
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
body {
    background-image: url("https://cdn.wallpapersafari.com/17/62/Mw5A6y.jpg");
}

.top {
    background-color: #dedede;
}
.top h1.name-chapter-comic a:hover,
ul.breadcrumb li a.crumb{
    text-decoration: none ;
}
.top ul.breadcrumb li{
    margin-right: 5px;
}
.top ul.breadcrumb li::before{
    content: "\f101";
    font-family: fontawesome;
    color: slategrey;
}
.top ul.breadcrumb li:nth-child(1)::before{
    content: "";
}
.nav-comic .pre i, .nav-comic .next i {
    width: 30px;
    font-size: 25px;
    color: slategrey;
    vertical-align: bottom;
}
</style>