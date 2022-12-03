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
                    <form class="d-flex search1" method="post">
                        <input class="form-control me-2" v-model="search" type="search" placeholder="Search"
                            aria-label="Search">
                        <button class="btn btn-outline-success" type="submit" @click.prevent="searchComic()">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
                <div class="col-md-3 login">
                    <form action="/login">
                        <button class="btn btn-success" type="submit"
                            v-bind:class="{ 'btn-danger': clicked, 'btn-primary': !clicked }" v-on:click="logout"> {{
                            
                                    button
                            }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div v-if="showSearch == true">
        <div class="container">
            <div class="row">
                <div class="col-md-3 comic" v-for="comic in product" v-bind:key="comic.Comic_id">
                    <a href="/detail"><img class="img-comic"
                            src="https://tse3.mm.bing.net/th?id=OIP.oJhAtynqCdcsrNOO0RAWYgHaMW&pid=Api&P=0"></a>
                    <div class=" infor-comic">
                        <ul>
                            <li><i class="fa fa-eye" aria-hidden="true"></i>123</li>
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
        </div>
    </div>
    <div v-if="showSearch == false">
    </div>
</template>

<script>
import axios from 'axios';
export default {
    data() {
        return {
            search: '',
            showSearch: true,
            product: [],
            clicked: false,
            button: "Đăng Nhập",
        }
    },
    created() {

        axios.get('http://127.0.0.1:8000/api/user').then(
            res => {
                if (res) {
                    this.button = "Đăng Xuất";
                }
                else {

                }
            }
        )
        console.log(this.button);

    },
    methods: {
        searchComic() {
            // fetch('/api/search')
            // .then(res => res.json())
            // .then(res => {
            //     this.Result = res;
            //     this.search = '';
            //     this.showSearch = true;
            // });
            axios.post('/resultsearch?key=' + this.search, {
                name: this.search
            })
                .then((response) => {
                    this.product = response.data;
                });
        },

        logout() {
            axios.get('http://127.0.0.1:8000/api/logout').then(
                res => {

                }
            )
        }
    }
}
</script>

<style>
.header1 .img-logo img {
    width: 100px;
    height: 70px;
}

.header1 .search .me-2 {
    margin-right: -0.3rem !important;
}

.header1 .search {
    padding-top: 1em;
}

.header1 .search .btn-outline-success {
    color: #198754;
    border-color: #ffffff;
    background-color: #ffffff;
}

.header1 .search .btn-outline-success:hover {
    border-color: #ffffff;
    color: white;
    background-color: #198754;
    ;
}

.logo {
    background-color: #292929;
}

.header1 .login .btn-outline-success {
    margin-top: 1.7em;
    margin-left: 12em;
}

.login>form {
    float: right;
    margin-top: 15px;
}
</style>