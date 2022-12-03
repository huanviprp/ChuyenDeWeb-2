<template>
    <div class="admin-panel clearfix">
        <div class="main">
            <div class="mainContent clearfix">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="monitor">
                                <div class="clearfix">
                                    <div class="row">
                                        <div class="col-md-4 db-user">
                                            <a href="/alluser"><i class="fa-solid fa-user"></i><br>User</a>
                                        </div>
                                        <div class="col-md-4 db-comic">
                                            <a href="/allcomic"><i class="fa-solid fa-book"></i><br>comic</a>
                                        </div>
                                        <div class="col-md-4 db-category">
                                            <a href="/allcategory"><i class="fa-solid fa-bars"></i><br>category</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="monitor">
                                <div class="clearfix">
                                    <div class="row">
                                        <div class="col-md-6 db-author">
                                            <a href="/allauthor"><i class="fa-solid fa-user-pen"></i><br>Tác giả</a>
                                        </div>
                                        <div class="col-md-6 db-comment">
                                            <a href="/allcomment"><i class="fa-solid fa-comment"></i><br>Bình luận</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: 'Module15',
    data() {
    }

}
</script>
<style>
body {
    background-image: url('https://cdn.wallpapersafari.com/17/62/Mw5A6y.jpg');
    padding: 0;
    margin: 0;
    font-size: 16px;
    font-family: sans-serif;
}

.admin-panel {
    width: 100%;
    margin: 0px auto;
}

/*slidebar*/
.slidebar {
    width: 15%;
    min-height: 500px;
    float: left;
    border-right: 1px solid rgb(235, 235, 235);
    background-color: rgb(247, 247, 247);
}

.module15.slidebar .logo {
    height: 145px;
    border-bottom: 1px solid rgb(235, 235, 235);
    padding-left: 0 !important;
}

.module15.slidebar ul {
    padding: 0;
    margin: 0;
}

.module15.slidebar li {
    list-style-type: none;
    margin: 0;
    position: relative;
}

.module15.slidebar ul a {
    color: rgb(140, 140, 140);
    text-decoration: none;
    font: 16px/40px helvetica, verdana, sans-serif;
    box-sizing: border-box;
    border-bottom: 1px solid rgb(235, 235, 235);
    display: block;
    box-shadow: inset 0 1px 0 rgb(255, 255, 255);
    text-indent: 20px;
    text-transform: capitalize;
}

.module15.slidebar li:hover a {
    background-color: rgb(255, 255, 255);
    box-shadow: 1px 0 0 rgb(255, 255, 255), inset 5px 0 0 -1px rgb(234, 83, 63);
}

/*main*/
.main {
    background-color: rgb(255, 255, 255);
    position: relative;
    font-family: helvetica, verdana, sans-serif;
}

.main .topbar {
    border-bottom: 1px solid rgb(235, 235, 235);
    margin: 0;
    padding: 0;
}

/*mainContent*/

.mainContent>div {
    width: 100%;
    transition: opacity 200ms linear;
}


/*通过opacity来切换不同的选项卡*/
.mainContent>div:target {
    display: block;
}

.mainContent h2 {
    margin: 1em 30px;
    color: rgb(234, 83, 63);
    font-size: 20px;
    text-transform: uppercase;
    font-weight: 700;
}

.topmain {
    background-color: #F7F7F7;
    border: 1px solid rgb(235, 235, 235);
}

.topmain a {
    margin-right: 30px;
}


/* .monitor {
    margin-left: 30px;
    margin-top: 30px;
} */

/* .monitor ul {
    float: left;
    padding: 0;
    margin: 0 31px 0 17px;
} */

.monitor a {
    list-style: none;
    font: 600 14px/28px helvetica, verdana, sans-serif;
    color: rgb(102, 102, 102);
    text-transform: capitalize;
    /* padding: 10px 30px; */
    font-size: 27px;
}

.monitor li a {
    color: rgb(102, 102, 102);
    text-transform: capitalize;
    text-decoration: none;
}

.monitor li:first-child {
    border-bottom: 1px dotted rgb(153, 153, 153);
}

.monitor .clearfix div>div {
    margin: 40px 0px;
    padding: 30px 20px;
    text-align: center;
}

.monitor .clearfix i {
    font-size: 70px;
}

.monitor p {
    color: rgb(128, 128, 128);
    margin: 28px 0 18px 17px;
    display: block;
    font-weight: 600;
    font-size: 12px;
}

.monitor p a {
    text-decoration: none;
    color: rgb(27, 106, 173);
}

/* ----- TABLE --------- */
table {
    width: 100%;
    margin: auto;
    border-collapse: collapse;
}

th {
    text-align: left;
    padding: 10px;
    background-color: rgba(0, 0, 0, .15);
}

td {
    background-color: white;
    padding: 7px;
}

td>img {
    width: 65%;
}

.monitor .clearfix td>a {
    font-size: 18px;
    color: black;
}

.monitor .clearfix button i {
    font-size: 20px;
}

.monitor .clearfix button {
    margin-right: 15px;
}

tr:not(:last-of-type) {
    border-bottom: 1px solid #ddd;
}

.main-descr {
    width: 20%;
}

.scroll-main {
    height: 550px;
    overflow-x: auto;
}
</style>