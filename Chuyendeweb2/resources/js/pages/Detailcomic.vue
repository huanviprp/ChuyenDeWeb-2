<template>

    <div>
        <header>
            <div class="logo">
                <div class="container hd">
                    <div class="row header1">
                        <div class="col-md-3 img-logo">
                            <a class="" href="/">
                                <img src="../../images/logo3.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-6 search">
                            <form class="d-flex search1" method="post">
                                <input class="form-control me-2" v-model="search" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-outline-success" type="submit" @click.prevent="searchComic()">
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
                                            <a class="nav-link active" aria-current="page" href="/"><i
                                                    class="fa fa-home" aria-hidden="true"></i></a>
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
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Thể Loại
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li v-for="Category in Categories" v-bind:key="Category.Category_id"><a
                                                        class="dropdown-item" href="#"
                                                        @click.prevent="showComicByCatgID(Category.Category_id)">{{
                                                                Category.Category
                                                        }}</a></li>
                                            </ul>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li v-for="Category in Categories" v-bind:key="Category.Category_id"><a
                                                        class="dropdown-item"
                                                        v-bind:href="'/category?' + Category.Category">{{
                                                                Category.Category
                                                        }}</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        </header>
        <div v-if="showSearch == true">
            <div class="container resultsearch">
                <h3>
                    <p style="color:#de6e98;padding-top:0.5cm"><b>Kết quả tìm kiếm cho " {{ keySearch }}" <i
                                class="fa fa-angle-right" aria-hidden="true"></i></b></p>
                </h3>
                <div class="row  comicreslut">

                    <div class="col-md-3 comic" v-for="comic in product" v-bind:key="comic.Comic_id">
                        <a href="/detail"><img class="img-comic" v-bind:src="comic.Img_feature"></a>
                        <div class=" infor-comic">
                            <ul>
                                <li><i class="fa fa-eye" aria-hidden="true"></i>{{ comic.View }}</li>
                                <li><i class="fa fa-comment" aria-hidden="true"></i> 123</li>
                                <li><i class="fa fa-heart" aria-hidden="true"></i> 123</li>
                            </ul>
                        </div>
                        <div class="new-chapter">
                            <a class="name-comic" href="/detail"><b>{{ comic.Name }}</b></a>
                            <ul>
                                <li><a href="">Chapter 3</a></li>
                                <li><a href="">Chapter 2</a></li>
                                <li><a href="">Chapter 1</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row null"></div>
            </div>
        </div>
        <div v-if="showSearch == false" class="">
            <div v-if="showProductByCtgID == true">
                <div class="container resultsearch">
                    <h3>
                        <p style="color:#de6e98;padding-top:0.5cm"><b>Thể Loại <i class="fa fa-angle-right"
                                    aria-hidden="true"></i></b></p>
                    </h3>
                    <div class="row  comicreslut">

                        <div class="col-md-3 comic" v-for="comic in Comics" v-bind:key="comic.Comic_id">
                            <a href="/detail"><img class="img-comic" v-bind:src="comic.Img_feature"></a>
                            <div class=" infor-comic">
                                <ul>
                                    <li><i class="fa fa-eye" aria-hidden="true"></i>{{ comic.View }}</li>
                                    <li><i class="fa fa-comment" aria-hidden="true"></i> 123</li>
                                    <li><i class="fa fa-heart" aria-hidden="true"></i> 123</li>
                                </ul>
                            </div>
                            <div class="new-chapter">
                                <a class="name-comic" href="/detail"><b>{{ comic.Name }}</b></a>
                                <ul>
                                    <li><a href="">Chapter 3</a></li>
                                    <li><a href="">Chapter 2</a></li>
                                    <li><a href="">Chapter 1</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row null"></div>
                </div>
            </div>
            <div class="" v-if="(showProductByCtgID == false)">
                <div class="container detail" v-if="(showIMG == false)">
                    <div class="row" v-for="Comic of Comics" :key="Comic.Comic_id">
                        <div class="col-9">
                            <div class="container container-module7" v-if="Comics && Comics.length">
                                <div class="header-title" :class="[isActive ? 'show' : 'hidden']">
                                    <div class="col-12 title-container">
                                        <div class="title1">
                                            <h2>{{ Comic.Name }}</h2>
                                        </div>
                                        <div class="title2">[Cập nhật lúc : {{ Comic.Date }}]</div>
                                    </div>
                                    <div class="row title-info-containter">
                                        <div class="col-6 image-container">
                                            <img v-bind:src="Comic.Img_feature" alt="" class="image-feature" />
                                        </div>
                                        <div class="col-6 info-container">
                                            <div class="row info">
                                                <div class="col-4 info-tag">
                                                    <i class="fa-solid fa-user tag-icon"></i> Tác Giả :
                                                </div>
                                                <div class="col-8">{{ Authors[0].Author_name }}</div>
                                            </div>
                                            <div class="row info">
                                                <div class="col-4 info-tag">
                                                    <i class="fa-solid fa-signal tag-icon"></i>Tình Trạng :
                                                </div>
                                                <div class="col-8">{{ Comic.Status }}</div>
                                            </div>
                                            <div class="row info">
                                                <div class="col-4 info-tag">
                                                    <i class="fa-sharp fa-solid fa-tags tag-icon"></i>Thể loại :
                                                </div>
                                                <div class="col-8">{{ Categories[0].Category }}</div>
                                            </div>
                                            <div class="row info">
                                                <div class="col-4 info-tag">
                                                    <i class="fa-solid fa-eye tag-icon"></i>Lượt xem :
                                                </div>
                                                <div class="col-8">{{ Comic.View }}</div>
                                            </div>
                                            <a class="follow btn" :class="[b1Active ? 'factive' : 'fnotacitve']"
                                                @click="Follow">
                                                <i class="fa-solid fa-heart tag-icon heart"></i>{{
                                                        button
                                                }}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="col-12 des"></div>
                                        <h3 class="des-title">Tóm tắt</h3>
                                        <p class="des-content" :class="[isActive ? 'show' : 'hidden']">
                                            {{ Comic.Descripsion }}
                                        </p>
                                        <!-- <p class="see-more" @click="toggleClass">Xem Them</p> -->

                                    </div>
                                </div>
                            </div>
                            <div class="container module8-top">
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
                                            <div class="scrollbox-content" v-for=" (  Chapter, index) in Chapters"
                                                :key="index">
                                                <div class="row chapter-name">
                                                    <div class="col-8 chapter-container">
                                                        <div class="chapter-name">
                                                            <a href="#"
                                                                @click.prevent="showImgChapter(Chapter.Chapter_id, Chapter.Chapter_name, Comic.Comic_id, Comic.Name, Categories[0].Category, Comic.Date, Chapter.Chapter_name[index++])">{{
                                                                        Chapter.Chapter_name
                                                                }}</a>
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
                            <Module9></Module9>
                        </div>

                        <div class="col-3 module6">
                            <!-- module6 -->
                            <Module6></Module6>
                        </div>
                    </div>
                </div>
                <div class="" v-if="(showIMG == true)">
                    <div class="container">
                        <div class="reading">
                            <div class="container">
                                <div class="top">
                                    <ul class="breadcrumb">
                                        <li itemprop="itemListElement">
                                            <a href="/" class="crumb">
                                                <span>
                                                    Trang chủ
                                                </span>
                                            </a>
                                        </li>
                                        <li itemprop="itemListElement">
                                            <a href="/" class="crumb">
                                                <span>
                                                    {{ this.cateComic }}
                                                </span>
                                            </a>
                                        </li>
                                        <li itemprop="itemListElement">
                                            <a href="/detail" class="crumb">
                                                <span>
                                                    {{ this.nameComic }}
                                                </span>
                                            </a>
                                        </li>
                                        <li itemprop="itemListElement">
                                            <a href="/detail/ten-truyen-chapter" class="crumb">
                                                <span>
                                                    - {{ this.ChapterNumber }}
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="inf-comic text-center">
                                        <h1 class="name-chapter-comic ">
                                            <a href="#" class="name-comic">{{ this.nameComic }}</a>
                                            <span>-{{ this.ChapterNumber }}</span>
                                        </h1>
                                        <span class="time-update">[Cập nhật lúc: {{ this.comicDate }}]</span>
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
                                            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                    data-target="#navbarSupportedContent"
                                                    aria-controls="navbarSupportedContent" aria-expanded="false"
                                                    aria-label="Toggle navigation">
                                                    <span class="navbar-toggler-icon"></span>
                                                </button>
                                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                                        <li class="nav-item dropdown" style="margin-left:560px">
                                                            <a class="nav-link dropdown-toggle" href="#"
                                                                id="navbarDropdown" role="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                Chọn Chapter
                                                            </a>
                                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                                <li v-for=" (  Chapter, index) in Chapters" :key="index"
                                                                    @click.prevent="getIdChapter(Chapter.Chapter_id)"><a
                                                                        class="dropdown-item" href="#"
                                                                        @click.prevent="showImgChapterName(Chapter.Chapter_id, Chapter.Chapter_name)">{{
                                                                                Chapter.Chapter_name
                                                                        }}</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </nav>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="reading-comic text-center" v-if="(showIMGName == true)">
                            <div class="page-chapter" v-for=" (  img, index) in PageImgName" :key="index">
                                <img v-bind:src="img.Img">
                            </div>
                        </div>
                        <div class="reading-comic text-center" v-if="(showIMGName == false)">
                            <div class="page-chapter" v-for=" (  img, index) in PageImg" :key="index">
                                <img v-bind:src="img.Img">
                            </div>
                        </div>

                        <div class="container">
                            <div class="bottom">
                                <div class="reading-control-bottom text-center pb-3 mb-3">
                                    <div class="nav-comic py-3">
                                        <a href="" class="pre prev-chap btn btn-danger mr-2" title="Trang chủ"
                                            @click.prevent="pre()">
                                            <i class="fa-solid fa-chevron-left"></i>Chap trước
                                        </a>
                                        <a href="" class="next next-chap btn btn-danger" title="Tên truyện"
                                            @click.prevent="next()">
                                            Chap sau<i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li itemprop="itemListElement">
                                            <a href="/" class="crumb">
                                                <span>
                                                    Trang chủ
                                                </span>
                                            </a>
                                        </li>
                                        <li itemprop="itemListElement">
                                            <a href="" class="crumb">
                                                <span>
                                                    {{ this.cateComic }}
                                                </span>
                                            </a>
                                        </li>
                                        <li itemprop="itemListElement">
                                            <a href="/detail" class="crumb">
                                                <span>
                                                    {{ this.nameComic }}
                                                </span>
                                            </a>
                                        </li>
                                        <li itemprop="itemListElement">
                                            <a href="" class="crumb">
                                                <span>
                                                    {{ this.ChapterNumber }}
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <Module5></Module5>
        </footer>
    </div>
</template>
<script>
let params = new URLSearchParams(location.search);
import Module1 from "../components/module1.vue"
import Module2 from "../components/module2.vue"
import Module5 from "../components/module5.vue"
import Module6 from "../components/module6.vue"
import Module7 from "../components/module7.vue"
import Module8 from "../components/module8.vue"
import Module9 from "../components/module9.vue"
import Module10 from "../components/module10.vue"
import Module11 from "../components/module11.vue"
import Module12 from "../components/module12.vue"
export default {
    data() {
        return {
            ChapterNumber: '',
            showIMG: false,
            showIMGName: false,
            search: '',
            keySearch: '',
            showSearch: false,
            showProductByCtgID: false,
            Comics: [],
            Categories: [],
            product: [],
            Chapters: [],
            PageImg: [],
            PageImgName: [],
            id: this.$route.params.id,

            isActive: false,
            Comics: [],
            Authors: [],
            Categories: [],
            id: this.$route.params.id,
            User: [],
            comicid: '',
            userid: '',
            button: "Theo Dõi",
            b1Active: false,

            idChapter: 0,
            idComic: '',
            nameComic: '',
            cateComic: '',
            comicDate: '',
            chapterNumber: 0,
            ChapterPlus: '',
            ArrayIDChap: [],
            PhanTu: 0,
            p: 0,
            a: 0,

        }
    },
    methods: {
        showImgChapterName($id, $name) {
            this.showIMGName = true;
            console.log($id);
            this.showIMG = true;
            this.ChapterNumber = $name;
            this.chapterNumber = $id;
            console.log("test:" + $id);
            axios.get('http://127.0.0.1:8000/api/getpagebychapid/' + $id).then(
                res => {
                    this.PageImgName = res.data;

                })
        },
        showImgChapter($id, $name, $idComic, $nameComic, $cateComic, $dateComic, $chaplus) {
            console.log($id);
            this.showIMG = true;
            this.idChapter = $id;
            this.ChapterPlus = $chaplus;
            this.ChapterNumber = $name;
            this.idComic = $idComic;
            this.nameComic = $nameComic;
            this.cateComic = $cateComic;
            this.comicDate = $dateComic;

            axios.get('http://127.0.0.1:8000/api/getpagebychapid/' + $id).then(
                res => {
                    this.PageImg = res.data;
                })
        },
        searchComic() {
            // fetch('/api/search')
            // .then(res => res.json())
            // .then(res => {
            //     this.Result = res;

            // });
            axios.post('/resultsearch?key=' + this.search, {
                name: this.search
            })
                .then((response) => {
                    this.product = response.data;
                });

            this.keySearch = this.search;
            this.search = '';
            this.showSearch = true;
        },
        showComicByCatgID($id) {
            this.showProductByCtgID = true;
            axios.get('http://127.0.0.1:8000/api/getcomicbyid/' + $id).then(
                res => {
                    this.Comics = res.data;
                }
            )
        },

        toggleClass: function () {
            this.isActive = !this.isActive;
            // some code to filter users
        },
        Follow: function () {
            if (this.button == "Theo Dõi") {
                axios.post('http://127.0.0.1:8000/api/addfollow', {
                    userid: this.User['id'],
                    comicid: this.Comics[0].Comic_id

                }).then(res => {
                    this.b1Active = true;
                    this.button = "Bỏ Theo Dõi";
                })
            }
            else {
                axios.post('http://127.0.0.1:8000/api/delfollow', {
                    userid: this.User['id'],
                    comicid: this.Comics[0].Comic_id

                }).then(res => {
                    this.b1Active = false;
                    this.button = "Theo Dõi";
                })
            }

        },
    },
    components: {
        Module1,
        Module2,
        Module5,
        Module6,
        Module7,
        Module8,
        Module9,
        Module10,
        Module11,
        Module12,
    },
    created() {

        axios.get('http://127.0.0.1:8000/api/getdetailtruyen/' + this.id).then(
            res => {
                this.Comics = res.data;
                axios.get('http://127.0.0.1:8000/api/getdetailtheloai/' + this.Comics[0].Category_id).then(
                    res => {
                        this.Categories = res.data;

                    }
                );
                console.log(this.Comics);
                axios.get('http://127.0.0.1:8000/api/getdetailtacgia/' + this.Comics[0].author_id).then(
                    res => {
                        this.Authors = res.data;

                    }
                )

                axios.get('http://127.0.0.1:8000/api/tangview/' + this.id).then(
                    res => {


                    }
                )

                axios.get('http://127.0.0.1:8000/api/user').then(
                    res => {
                        if (res) {
                            this.User = res.data;
                            axios.post('http://127.0.0.1:8000/api/checkfollow', {
                                userid: this.User['id'],
                                comicid: this.Comics[0].Comic_id

                            }).then(res => {

                                if (res.data == 'yes') {
                                    this.button = "Đã Theo Dõi";
                                    this.b1Active = true;

                                }
                                else {
                                    this.b1Active = false;
                                }
                            });

                        }
                        else {

                        }
                    }
                )
            }
        )






        axios.get('api/category').then(
            res => {
                this.Categories = res.data;
            }
        ),
            axios.get('http://127.0.0.1:8000/api/getchapter/' + this.id).then(
                res => {
                    this.Chapters = res.data;
                    console.log(this.Chapters);

                }
            )
    }
}
</script>
<style>

</style>