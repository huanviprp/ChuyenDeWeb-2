<template>
    <h3 class="top-rank">Bảng xếp hạng</h3>
    <div class="tab">
        <button class="tablinks" :class="[b1Active ? 'active' : 'notacitve']" @click="showBlock(1, $event)"
            id="tabngay">
            Top View
        </button>
        <button class="tablinks" :class="[b2Active ? 'active' : 'notacitve']" @click="showBlock(2, $event)"
            id="tabtuan">
            Top Hot
        </button>
        <!-- <button class="tablinks" :class="[b3Active ? 'active' : 'notacitve']" @click="showBlock(3, $event)"
            id="tabthang">
            Top Follow
        </button> -->
    </div>

    <div id="ngay" class="tab-container" v-if="currentBlock == 1">
        <div class="tab-content 1" v-if="Comics && Comics.length">
            <div class="row" v-for="(Comic, index) in Comics" :key="Comic.Comic_id">
                <div class="col-1 rank">{{ index + 1 }}</div>
                <div class="col-11 rank-content">
                    <div class="row">
                        <div class="col-3">
                            <a v-bind:href="'/detail/' + Comic.Comic_id">
                                <img v-bind:src="Comic.Img_feature" alt="" class="rank-img" /></a>
                        </div>

                        <div class="col-9 rank-info">
                            <a v-bind:href="'/detail/' + Comic.Comic_id" class="name">{{ Comic.Name }}</a>
                            <div class="chapter">
                                Chap 1
                                <span class="icon-eyes"><i class="fa-solid fa-eye"></i> {{ Comic.View }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div id="tuan" class="tab-container" v-else-if="currentBlock == 2">
        <div class="tab-content 1" v-if="ComicsHot && ComicsHot.length">
            <div class="row" v-for="(Comic, index) in ComicsHot" :key="Comic.Comic_id">
                <div class="col-1 rank">{{ index + 1 }}</div>
                <div class="col-11 rank-content">
                    <div class="row">
                        <div class="col-3">
                            <a v-bind:href="'/detail/' + Comic.Comic_id">
                                <img v-bind:src="Comic.Img_feature" alt="" class="rank-img" /></a>
                        </div>

                        <div class="col-9 rank-info">
                            <a v-bind:href="'/detail/' + Comic.Comic_id" class="name">{{ Comic.Name }}</a>
                            <div class="chapter">
                                Chap 1
                                <span class="icon-eyes"><i class="fa-solid fa-eye"></i> {{ Comic.View }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- <div id="thang" class="tab-container" v-else>
        <div class="tab-content 1" v-if="Comics && Comics.length">
            <div class="row" v-for="(Comic, index) in ComicsHot" :key="Comic.Comic_id">
                <div class="col-1 rank">{{ index + 1 }}</div>
                <div class="col-11 rank-content">
                    <div class="row">
                        <div class="col-3">
                            <a v-bind:href="'/detail/' + Comic.Comic_id">
                                <img v-bind:src="Comic.Img_feature" alt="" class="rank-img" /></a>
                        </div>

                        <div class="col-9 rank-info">
                            <a v-bind:href="'/detail/' + Comic.Comic_id" class="name">{{ Comic.Name }}</a>
                            <div class="chapter">
                                Chap 1
                                <span class="icon-eyes"><i class="fa-solid fa-eye"></i> {{ Comic.View }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</template>
  
<script>
import axios from 'axios';
export default {
    data() {
        return {
            b1Active: true,
            b2Active: false,
            b3Active: false,
            currentBlock: 1,
            Comics: [],
            ComicsHot: [],
            Rank: 1,
        };
    },
    created() {
        axios.get('http://127.0.0.1:8000/api/gettopnam').then(
            res => {
                this.Comics = res.data;
                console.log(this.Comics);
            }
        ),
            axios.get('http://127.0.0.1:8000/api/gettophot').then(
                res => {
                    this.ComicsHot = res.data;
                    console.log(this.ComicsHot);
                }
            )


    },
    methods: {
        showBlock(number, e) {
            if (e.target.id == "tabngay") {
                this.b1Active = true;
                this.b2Active = false;
                this.b3Active = false;
            } else if (e.target.id == "tabtuan") {
                this.b1Active = false;
                this.b2Active = true;
                this.b3Active = false;
            } else {
                this.b1Active = false;
                this.b2Active = false;
                this.b3Active = true;
            }

            this.currentBlock = number;
        },
    },
};
</script>
  
<style>
* {
    padding: 0;
}

#module6 {
    position: sticky;
    top: 0;
}

.icon-eyes {
    margin-left: 36px;
}

h3.top-rank {
    color: #de6e98;
    font-weight: bolder;
}

.rank {
    padding-top: 25px;
}

.tab-content {
    border-bottom: 1px rgb(148, 145, 145) solid;
    padding-bottom: 10px;
    padding-top: 10px;
}

.name {
    font-weight: 600;
    text-decoration: none;
    color: black;
}

.chapter {
    margin-top: 20px;
}

.rank-img {
    width: 50px;
}

.tab-container {
    background-color: #dedede;
}

body {
    font-family: Arial;
}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 20px 43px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tab-container {
    /* display: none; */
    padding: 6px 12px;
    border: 4px solid #ccc;
    border-top: none;
}

.rank-content {
    margin-bottom: 20px;
}
</style>