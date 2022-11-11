<template>
    <div class="tab">
        <button class="tablinks" :class="[b1Active ? 'active' : 'notacitve']" @click="showBlock(1, $event)"
            id="tabngay">
            Top Ngày
        </button>
        <button class="tablinks" :class="[b2Active ? 'active' : 'notacitve']" @click="showBlock(2, $event)"
            id="tabtuan">
            Top Tuần
        </button>
        <button class="tablinks" :class="[b3Active ? 'active' : 'notacitve']" @click="showBlock(3, $event)"
            id="tabthang">
            Top Tháng
        </button>
    </div>

    <div id="ngay" class="tab-container" v-if="currentBlock == 1">
        <div class="tab-content 1">
            <div class="row">
                <div class="col-1 rank">1</div>
                <div class="col-11 rank-content">
                    <div class="row">
                        <div class="col-3">
                            <a href="">
                                <img src="https://st.ntcdntempv3.com/data/comics/147/dung-si-nam.jpg" alt=""
                                    class="rank-img" /></a>
                        </div>

                        <div class="col-9 rank-info">
                            <a href="" class="name">Truyen one</a>
                            <div class="chapter">
                                Chap 1
                                <span class="icon-eyes"><i class="fa-solid fa-eye"></i> 20.123</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content 1">
            <div class="row">
                <div class="col-1 rank">1</div>
                <div class="col-11 rank-content">
                    <div class="row">
                        <div class="col-3">
                            <a href="">
                                <img src="https://st.ntcdntempv3.com/data/comics/147/dung-si-nam.jpg" alt=""
                                    class="rank-img" /></a>
                        </div>

                        <div class="col-9 rank-info">
                            <a href="" class="name">Truyen one</a>
                            <div class="chapter">
                                Chap 1
                                <span class="icon-eyes"><i class="fa-solid fa-eye"></i> 20.123</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content 1">
            <div class="row">
                <div class="col-1 rank">1</div>
                <div class="col-11 rank-content">
                    <div class="row">
                        <div class="col-3">
                            <a href="">
                                <img src="https://st.ntcdntempv3.com/data/comics/147/dung-si-nam.jpg" alt=""
                                    class="rank-img" /></a>
                        </div>

                        <div class="col-9 rank-info">
                            <a href="" class="name">Truyen one</a>
                            <div class="chapter">
                                Chap 1
                                <span class="icon-eyes"><i class="fa-solid fa-eye"></i> 20.123</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content 1">
            <div class="row">
                <div class="col-1 rank">1</div>
                <div class="col-11 rank-content">
                    <div class="row">
                        <div class="col-3">
                            <a href="">
                                <img src="https://st.ntcdntempv3.com/data/comics/147/dung-si-nam.jpg" alt=""
                                    class="rank-img" /></a>
                        </div>

                        <div class="col-9 rank-info">
                            <a href="" class="name">Truyen one</a>
                            <div class="chapter">
                                Chap 1
                                <span class="icon-eyes"><i class="fa-solid fa-eye"></i> 20.123</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content 1">
            <div class="row">
                <div class="col-1 rank">1</div>
                <div class="col-11 rank-content">
                    <div class="row">
                        <div class="col-3">
                            <a href="">
                                <img src="https://st.ntcdntempv3.com/data/comics/147/dung-si-nam.jpg" alt=""
                                    class="rank-img" /></a>
                        </div>

                        <div class="col-9 rank-info">
                            <a href="" class="name">Truyen one</a>
                            <div class="chapter">
                                Chap 1
                                <span class="icon-eyes"><i class="fa-solid fa-eye"></i> 20.123</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="tuan" class="tab-container" v-else-if="currentBlock == 2">
        <div class="tab-content 1">
            <div class="row">
                <div class="col-1 rank">1</div>
                <div class="col-11 rank-content">
                    <div class="row">
                        <div class="col-3">
                            <a href="">
                                <img src="https://st.ntcdntempv3.com/data/comics/147/dung-si-nam.jpg" alt=""
                                    class="rank-img" /></a>
                        </div>

                        <div class="col-9 rank-info">
                            <a href="" class="name">Truyen one</a>
                            <div class="chapter">
                                Chap 1
                                <span class="icon-eyes"><i class="fa-solid fa-eye"></i> 20.123</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content 1">
            <div class="row">
                <div class="col-1 rank">1</div>
                <div class="col-11 rank-content">
                    <div class="row">
                        <div class="col-3">
                            <a href="">
                                <img src="https://st.ntcdntempv3.com/data/comics/147/dung-si-nam.jpg" alt=""
                                    class="rank-img" /></a>
                        </div>

                        <div class="col-9 rank-info">
                            <a href="" class="name">Truyen one</a>
                            <div class="chapter">
                                Chap 1
                                <span class="icon-eyes"><i class="fa-solid fa-eye"></i> 20.123</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="thang" class="tab-container" v-else>
        <div class="tab-content 1">
            <div class="row">
                <div class="col-1 rank">1</div>
                <div class="col-11 rank-content">
                    <div class="row">
                        <div class="col-3">
                            <a href="">
                                <img src="https://st.ntcdntempv3.com/data/comics/147/dung-si-nam.jpg" alt=""
                                    class="rank-img" /></a>
                        </div>

                        <div class="col-9 rank-info">
                            <a href="" class="name">Truyen one</a>
                            <div class="chapter">
                                Chap 1
                                <span class="icon-eyes"><i class="fa-solid fa-eye"></i> 20.123</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
  
<script>
export default {
    data() {
        return {
            b1Active: true,
            b2Active: false,
            b3Active: false,
            currentBlock: 1,
        };
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
.icon-eyes {
    margin-left: 36px;
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
    padding: 20px 14px;
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
    border: 1px solid #ccc;
    border-top: none;
}
</style>