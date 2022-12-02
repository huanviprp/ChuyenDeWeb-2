<template>
    <div class="container container-module7" v-if="Comics && Comics.length">
        <div class="header-title" :class="[isActive ? 'show' : 'hidden']" v-for="Comic of Comics" :key="Comic.Comic_id">
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
                        <div class="col-8">{{  }}</div>
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
                    <a class="follow btn">
                        <i class="fa-solid fa-heart tag-icon heart"></i>Theo Dõi
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="col-12 des"></div>
                <h3 class="des-title">Tóm tắt</h3>
                <p class="des-content" :class="[isActive ? 'show' : 'hidden']">
                    {{ Comic.Descripsion }}
                </p>
                <p class="see-more" @click="toggleClass">Xem Them</p>

            </div>
        </div>
    </div>
</template>
  
<script>

import axios from 'axios';
let params = new URLSearchParams(location.search);
export default {
    data() {
        return {
            isActive: false,
            Comics: [],
            Authors: [],
            Categories: [],
            id: this.$route.params.id
        };
    },
    created() {


console.log(this.id);

        axios.get('http://127.0.0.1:8000/api/getdetailtruyen/' + this.id).then(
            res => {
                this.Comics = res.data;
                axios.get('http://127.0.0.1:8000/api/getdetailtheloai/' + this.Comics[0].Category_id).then(
                    res => {
                        this.Categories = res.data;
                        console.log(this.Categories);
                    }
                );
                console.log(this.Comics);
                axios.get('http://127.0.0.1:8000/api/getdetailtacgia/' + this.Comics[0].author_id).then(
                    res => {
                        this.Authors = res.data;
                        console.log(this.Authors);
                    }
                )
               
                axios.get('http://127.0.0.1:8000/api/tangview/' + this.id).then(
                    res => {

                        console.log(this.Comics[0].View);
                    }
                )



            }
        )




    },
    methods: {
        toggleClass: function () {
            this.isActive = !this.isActive;
            // some code to filter users
        },
    },
};
</script>
  
<style>
#Breadcrumb {
    padding-left: 15px;
    height: 45px;
    padding-top: 10px;
    background-color: #dedede;
}

.container-module7 {
    padding: 0;
}

.title-container {
    margin-bottom: 20px;
}

.chapter-name:hover {
    background-color: #adacac;
}

.follow:hover {
    background-color: rgb(1 86 1);
    color: white;
}

.see-more {
    cursor: pointer;
}

.des-content.hidden {
    height: 80px;
    overflow: hidden;
    transition: 1s;
}

.des-content.show {
    height: auto;
    overflow: hidden;
    transition: 1s;
}

.des-conent-more {
    height: auto;
}

.des {
    margin-top: 30px;
    margin-left: 20px;
}

.title-info-containter {
    margin-top: 10px;
    width: 75rem;
}

.tag-icon {
    padding-right: 10px;
    color: #de6e98;
}

.tag-icon.heart {
    color: white;
}

.header-title.hidden {
    background-color: #dedede;
    height: 35rem;
}

.header-title.show {
    background-color: #dedede;
    height: (100% +20px) !important;
}

.title1,
.title2 {
    text-align: center;
}

.image-feature {
    vertical-align: middle;
    width: 100%;
}

.image-container {
    width: 200px;
    box-shadow: 1px 1px 15px 1px #525252;
    padding: 0;

    margin-left: 40px;
    border: 0.5px #b0b0b0 solid;
}

.text-span {
    padding-left: 20px;
}

.info-container {
    margin-left: 55px;
    font-size: 18px;
}

.info {
    margin-bottom: 10px;
}

.follow {
    width: 130px;
    height: 40px;
    background-color: rgb(41, 146, 41);
    color: white;
}

.follow a {
    text-decoration: none;
    color: white;
}

body {
    background-image: url("https://cdn.wallpapersafari.com/17/62/Mw5A6y.jpg");
}

.des-title {
    color: #de6e98;
    border-bottom: 1px #f01264 solid;
    font-weight: bold;
}
</style>