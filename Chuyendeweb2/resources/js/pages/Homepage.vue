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
                            <input class="form-control me-2" v-model="search" type="search" placeholder="Search" aria-label="Search">
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
                                    <a class="nav-link active" aria-current="page" href="/"><i class="fa fa-home"
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
                                        <li v-for="Category in Categories" v-bind:key="Category.Category_id"><a class="dropdown-item" href="#" @click.prevent="showComicByCatgID(Category.Category_id)">{{ Category.Category}}</a></li>
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
        </header>
        <div v-if="showSearch==true">
        <div class="container resultsearch">
            <h3>
            <p style="color:#de6e98;padding-top:0.5cm"><b>Kết quả tìm kiếm cho " {{keySearch}}" <i class="fa fa-angle-right"
                    aria-hidden="true"></i></b></p>
            </h3>
            <div class="row  comicreslut">

                <div class="col-md-3 comic" v-for="comic in product" v-bind:key="comic.Comic_id">
            <a href="/detail"><img class="img-comic" v-bind:src="comic.Img_feature"></a>
            <div class=" infor-comic">
                <ul>
                    <li><i class="fa fa-eye" aria-hidden="true"></i>{{comic.View}}</li>
                    <li><i class="fa fa-comment" aria-hidden="true"></i> 123</li>
                    <li><i class="fa fa-heart" aria-hidden="true"></i> 123</li>
                </ul>
            </div>
            <div class="new-chapter">
                <a class="name-comic" href="/detail"><b>{{ comic.Name}}</b></a>
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
    <div v-if="showSearch==false" class="">
    <div v-if="showProductByCtgID==true">
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
                    <li><i class="fa fa-eye" aria-hidden="true"></i>{{comic.View}}</li>
                    <li><i class="fa fa-comment" aria-hidden="true"></i> 123</li>
                    <li><i class="fa fa-heart" aria-hidden="true"></i> 123</li>
                </ul>
            </div>
            <div class="new-chapter">
                <a class="name-comic" href="/detail"><b>{{ comic.Name}}</b></a>
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
        <div class="" v-if="(showProductByCtgID==false)">
        <div class="container home">
            <Module3></Module3>
            <div class="row">
                <div class="col-md-9">
                    <Module4></Module4>
                </div>
                <div class="col-md-3">
                    <Module6></Module6>
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
import Module1 from "../components/module1.vue"
import Module2 from "../components/module2.vue"
import Module3 from "../components/module3.vue"
import Module4 from "../components/module4.vue"
import Module5 from "../components/module5.vue"
import Module6 from "../components/module6.vue"
export default {
    data(){
        return{
            search:'',
            keySearch:'',
            showSearch: false,
            showProductByCtgID: false,
            Comics: [],
            Categories:[],
            product: []
        }
    },
    methods: {
        searchComic(){
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
        showComicByCatgID($id){
            this.showProductByCtgID = true;
            axios.get('http://127.0.0.1:8000/api/getcomicbyid/'+ $id).then(
            res => {
                this.Comics = res.data;
            }
        )
        }
    },

    components: {
        Module1,
        Module2,
        Module3,
        Module4,
        Module5,
        Module6,
    },
    created() {
        axios.get('api/category').then(
            res =>{
                this.Categories = res.data;
            }
        )
    }
}
</script>
<style>
.resultsearch{
    
    background-color:#dedede ;
}
.null{
    height: 584px;
}
.comicreslut{
    padding-left:10px;
}
.new-chapter a {
    text-decoration: none;
    color:black
}
</style>