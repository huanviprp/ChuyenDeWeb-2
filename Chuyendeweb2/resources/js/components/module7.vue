<template>
    <div class="container container-module7">
        <div class="header-title" :class="[isActive ? 'show' : 'hidden']">
            <div class="col-12 title-container">
                <div class="title1">
                    <h2>Truyen One</h2>
                </div>
                <div class="title2">[Cập nhật lúc : 23/7/2022 13:00]</div>
            </div>
            <div class="row title-info-containter">
                <div class="col-6 image-container">
                    <img src="//st.ntcdntempv3.com/data/comics/147/dung-si-nam.jpg" alt="" class="image-feature" />
                </div>
                <div class="col-6 info-container">
                    <div class="row info">
                        <div class="col-4 info-tag">
                            <i class="fa-solid fa-user tag-icon"></i> Tác Giả :
                        </div>
                        <div class="col-8">Nguyễn Văn a</div>
                    </div>
                    <div class="row info">
                        <div class="col-4 info-tag">
                            <i class="fa-solid fa-signal tag-icon"></i>Tình Trạng :
                        </div>
                        <div class="col-8">Đang tiến hành</div>
                    </div>
                    <div class="row info">
                        <div class="col-4 info-tag">
                            <i class="fa-sharp fa-solid fa-tags tag-icon"></i>Thể loại :
                        </div>
                        <div class="col-8">Phiêu lưu - Hành Động</div>
                    </div>
                    <div class="row info">
                        <div class="col-4 info-tag">
                            <i class="fa-solid fa-eye tag-icon"></i>Lượt xem :
                        </div>
                        <div class="col-8">13.298</div>
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                    possimus maxime eius aperiam numquam impedit hic, et atque alias sed
                    rerum, dolor culpa quasi odio! Possimus excepturi odit quidem
                    reprehenderit delectus recusandae officia labore voluptatum asperiores
                    sed quasi itaque quae officiis atque cupiditate, iste, quo, optio
                    similique dolorum pariatur accusantium laudantium nemo! Porro, ad
                    placeat cumque repellat dolor officiis a impedit nam molestiae?
                    Similique deleniti quo, est ullam commodi blanditiis ipsa, nesciunt
                    modi quibusdam repellat, ex rerum consectetur recusandae. Quisquam
                    pariatur modi ducimus eveniet ab minus, quas vitae maxime reiciendis
                    facilis delectus ipsa praesentium libero blanditiis fugit itaque,
                    nulla provident aspernatur harum officiis repudiandae tempore, quae
                    esse. Maiores qui nulla similique nesciunt. Totam quam ipsam, delectus
                    esse consequatur eveniet illum vitae ut harum, perferendis facere eos
                    maiores ipsa sunt aspernatur vero ratione, asperiores repellendus quo
                    enim aut dignissimos laborum incidunt pariatur? Atque delectus eveniet
                    nemo eum sit unde ex temporibus reprehenderit accusantium placeat
                    tempore, hic vero iure quaerat dolores nobis perspiciatis expedita
                    nesciunt blanditiis. Sed perspiciatis atque illum, eaque a doloribus
                    nemo alias enim voluptatum, consequuntur, rem reiciendis
                    exercitationem. Voluptate officiis quasi officia iusto, dignissimos
                    quos alias cum deserunt delectus, consectetur veniam! Sapiente soluta
                    minus, accusamus consequatur dolores corporis quo fugit nihil deleniti
                    error ut dolore esse, facilis ab quae, dolor laboriosam iusto? Eos
                    quis assumenda iusto voluptate, suscipit magni ad nam commodi facilis
                    vitae maxime hic dolorem rerum dolorum nesciunt ea exercitationem
                    distinctio iure dolor, laudantium libero tempora. Magni sed aliquam
                    suscipit, fugiat non accusamus nisi possimus voluptatibus tenetur
                    doloremque delectus dolore sint ea saepe quisquam voluptates eum. Sit
                    voluptates sequi quo ullam dolores eum doloribus repudiandae saepe ex
                    libero vitae, facere neque debitis numquam rerum ratione commodi atque
                    rem reprehenderit dicta dolor omnis molestiae esse. Nisi molestias ab
                    ea repellendus incidunt nam maiores iure ratione nostrum rem. Sed?
                </p>
                <p class="see-more" @click="toggleClass">Xem Thêm</p>

            </div>
        </div>
    </div>
</template>
  
<script>
import router from '../router';
import axios from 'axios';
export default {
    data() {
        return {
            isActive: false,
            Comic: [],
            // id: this.$router.query,
        };
    },
    created() {

        axios.get('api/getdetailtruyen/').then(
            res => {
                this.Comics = res.data;
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