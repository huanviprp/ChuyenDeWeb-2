<template>
    <div class="container">
        <div class="bottom">
            <div class="reading-control-bottom text-center pb-3 mb-3">
                <div class="nav-comic py-3">
                    <a href="/" class="pre prev-chap btn btn-danger mr-2" title="Trang chủ">
                        <i class="fa-solid fa-chevron-left"></i>Chap trước
                    </a>
                    <a href="/" class="next next-chap btn btn-danger" title="Tên truyện">
                        Chap sau<i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
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

.bottom {
    background-color: #dedede;
}

.bottom h1.name-chapter-comic a:hover,
ul.breadcrumb li a.crumb {
    text-decoration: none;
}

.bottom ul.breadcrumb li {
    margin-right: 5px;
}

.bottom ul.breadcrumb li::before {
    content: "\f101";
    font-family: fontawesome;
    color: slategrey;
}

.bottom ul.breadcrumb li:nth-child(1)::before {
    content: "";
}

.nav-comic .pre i,
.nav-comic .next i {
    width: 30px;
    font-size: 20px;
    color: white;
    vertical-align: bottom;
}
</style>