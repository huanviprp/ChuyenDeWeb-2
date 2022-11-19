<template>
    <div class="admin-panel clearfix">
        <div class="module15 slidebar">
            <div class="logo">
                <a href=""></a>
            </div>
            <ul>
                <li><a href="#dashboard" id="targeted">dashboard</a></li>
                <li><a href="#user">User</a></li>
                <li><a href="#comic">Comic</a></li>
                <li><a href="#category">Thể loại</a></li>
                <li><a href="#author">Tác giả</a></li>
                <li><a href="#chapter">Chapter</a></li>
                <li><a href="#comment">Bình luận</a></li>
            </ul>
        </div>
        <div class="main">
            <div class="mainContent clearfix">
                <div id="dashboard">
                    <div class="topmain" style="display: flex; align-items: center; justify-content: space-between;">
                        <h2 class="header"><span class="icon"></span>Dashboard</h2>
                        <a href="/" title="Trang chủ"> <i class="fa-solid fa-house"></i></a>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="monitor">
                                    <div class="clearfix">
                                        <div class="row">
                                            <div class="col-md-4 db-user">
                                                <a href="#user"><i class="fa-solid fa-user"></i><br>User</a>
                                            </div>
                                            <div class="col-md-4 db-comic">
                                                <a href="#comic"><i class="fa-solid fa-book"></i><br>comic</a>
                                            </div>
                                            <div class="col-md-4 db-category">
                                                <a href="#category"><i class="fa-solid fa-bars"></i><br>category</a>
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
                                                <a href="#author"><i class="fa-solid fa-user-pen"></i><br>Tác giả</a>
                                            </div>
                                            <div class="col-md-6 db-comment">
                                                <a href="#comment"><i class="fa-solid fa-comment"></i><br>Bình luận</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div id="user">
                    <div class="topmain" style="display: flex; align-items: center; justify-content: space-between;">
                        <h2 class="header"><span class="icon"></span>User</h2>
                        <a href="/" title="Trang chủ"> <i class="fa-solid fa-house"></i></a>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="monitor">
                                    <div class="clearfix">
                                        <Search/>
                                        <div class="row">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>ID</th>
                                                        <th>Username</th>
                                                        <th>Password</th>
                                                        <th>Comment</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-userid="1">
                                                        <td></td>
                                                        <td >1</td>
                                                        <td>John Doe</td>
                                                        <td>*****************</td>
                                                        <td><a href="#comment" style="font-size:14px">Xem comment</a>
                                                        </td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr data-userid="2">
                                                        <td></td>
                                                        <td>2</td>
                                                        <td>John Doe</td>
                                                        <td>*****************</td>
                                                        <td><a href="#comment" style="font-size:14px">Xem comment</a>
                                                        </td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr data-userid="3">
                                                        <td></td>
                                                        <td>3</td>
                                                        <td>John Doe</td>
                                                        <td>*****************</td>
                                                        <td><a href="#comment" style="font-size:14px">Xem comment</a>
                                                        </td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr data-userid="4">
                                                        <td></td>
                                                        <td>4</td>
                                                        <td>John Doe</td>
                                                        <td>*****************</td>
                                                        <td><a href="#comment" style="font-size:14px">Xem comment</a>
                                                        </td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="comic">
                    <div class="topmain" style="display: flex; align-items: center; justify-content: space-between;">
                        <h2 class="header"><span class="icon"></span>Comic</h2>
                        <a href="/" title="Trang chủ"> <i class="fa-solid fa-house"></i></a>
                    </div>
                    <div class="container">
                        <div class="row scroll-main">
                            <div class="col-md-12">
                                <div class="monitor">
                                    <div class="clearfix">
                                        <Search/>
                                        <div class="row">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Tên truyện</th>
                                                        <th class="main-descr">Description</th>
                                                        <th>Thể loại</th>
                                                        <th>Chapter</th>
                                                        <th>Ảnh nổi bật</th>
                                                        <th>Ngày tạo</th>
                                                        <th>View</th>
                                                        <th>Status</th>
                                                        <th>Tác giả</th>
                                                        <th>Feature</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-comicid="1">
                                                        <td>1</td>
                                                        <td>Siêu nhân gao</td>
                                                        <td class="descr">Ở đây có 5 siêu nhân điện quang long lanh lung linh....... helloo every numbrere one heloooooooooooooooooo</td>
                                                        <td>Action</td>
                                                        <td><a href="#chapter">123</a> </td>
                                                        <td>img-link</td>
                                                        <td>12/11/2022</td>
                                                        <td>12.455</td>
                                                        <td>Đang hoàn thành</td>
                                                        <td>Ân Phan</td>
                                                        <td>Feature</td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr data-comicid="2">
                                                        <td>2</td>
                                                        <td>Siêu nhân gao</td>
                                                        <td class="descr">Ở đây có 5 siêu nhân</td>
                                                        <td>Action</td>
                                                        <td><a href="#chapter">123</a> </td>
                                                        <td>img-link</td>
                                                        <td>12/11/2022</td>
                                                        <td>12.455</td>
                                                        <td>Đang hoàn thành</td>
                                                        <td>Ân Phan</td>
                                                        <td>Feature</td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr data-comicid="3">
                                                        <td>3</td>
                                                        <td>Siêu nhân gao</td>
                                                        <td class="descr">Ở đây có 5 siêu nhân</td>
                                                        <td>Fantasy</td>
                                                        <td><a href="#chapter">20</a> </td>
                                                        <td>img-link</td>
                                                        <td>12/11/2022</td>
                                                        <td>12.455</td>
                                                        <td>Đang hoàn thành</td>
                                                        <td>Ân Phan</td>
                                                        <td>Feature</td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr data-comicid="4">
                                                        <td>4</td>
                                                        <td>Siêu nhân gao</td>
                                                        <td class="descr">Ở đây có 5 siêu nhân</td>
                                                        <td>Horror</td>
                                                        <td><a href="#chapter">2</a> </td>
                                                        <td>img-link</td>
                                                        <td>12/11/2022</td>
                                                        <td>12.455</td>
                                                        <td>Đang hoàn thành</td>
                                                        <td>Ân Phan</td>
                                                        <td>Feature</td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr data-comicid="4">
                                                        <td>4</td>
                                                        <td>Siêu nhân gao</td>
                                                        <td class="descr">Ở đây có 5 siêu nhân</td>
                                                        <td>Horror</td>
                                                        <td><a href="#chapter">5</a> </td>
                                                        <td>img-link</td>
                                                        <td>12/11/2022</td>
                                                        <td>12.455</td>
                                                        <td>Đang hoàn thành</td>
                                                        <td>Ân Phan</td>
                                                        <td>Feature</td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr data-comicid="4">
                                                        <td>4</td>
                                                        <td>Siêu nhân gao</td>
                                                        <td class="descr">Ở đây có 5 siêu nhân</td>
                                                        <td>Horror</td>
                                                        <td><a href="#chapter">123</a> </td>
                                                        <td>img-link</td>
                                                        <td>12/11/2022</td>
                                                        <td>12.455</td>
                                                        <td>Đang hoàn thành</td>
                                                        <td>Ân Phan</td>
                                                        <td>Feature</td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr data-comicid="4">
                                                        <td>4</td>
                                                        <td>Siêu nhân gao</td>
                                                        <td class="descr">Ở đây có 5 siêu nhân</td>
                                                        <td>Horror</td>
                                                        <td><a href="#chapter">21</a> </td>
                                                        <td>img-link</td>
                                                        <td>12/11/2022</td>
                                                        <td>12.455</td>
                                                        <td>Đang hoàn thành</td>
                                                        <td>Ân Phan</td>
                                                        <td>Feature</td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr data-comicid="4">
                                                        <td>4</td>
                                                        <td>Siêu nhân gao</td>
                                                        <td class="descr">Ở đây có 5 siêu nhân</td>
                                                        <td>Horror</td>
                                                        <td><a href="#chapter">4</a> </td>
                                                        <td>img-link</td>
                                                        <td>12/11/2022</td>
                                                        <td>12.455</td>
                                                        <td>Đang hoàn thành</td>
                                                        <td>Ân Phan</td>
                                                        <td>Feature</td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr data-comicid="4">
                                                        <td>4</td>
                                                        <td>Siêu nhân gao</td>
                                                        <td class="descr">Ở đây có 5 siêu nhân</td>
                                                        <td>Horror</td>
                                                        <td><a href="#chapter">32</a> </td>
                                                        <td>img-link</td>
                                                        <td>12/11/2022</td>
                                                        <td>12.455</td>
                                                        <td>Đang hoàn thành</td>
                                                        <td>Ân Phan</td>
                                                        <td>Feature</td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr data-comicid="4">
                                                        <td>4</td>
                                                        <td>Siêu nhân gao</td>
                                                        <td class="descr">Ở đây có 5 siêu nhân</td>
                                                        <td>Horror</td>
                                                        <td><a href="#chapter">123</a> </td>
                                                        <td>img-link</td>
                                                        <td>12/11/2022</td>
                                                        <td>12.455</td>
                                                        <td>Đang hoàn thành</td>
                                                        <td>Ân Phan</td>
                                                        <td>Feature</td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr data-comicid="4">
                                                        <td>4</td>
                                                        <td>Siêu nhân gao</td>
                                                        <td class="descr">Ở đây có 5 siêu nhân</td>
                                                        <td>Horror</td>
                                                        <td><a href="#chapter">123</a> </td>
                                                        <td>img-link</td>
                                                        <td>12/11/2022</td>
                                                        <td>12.455</td>
                                                        <td>Đang hoàn thành</td>
                                                        <td>Ân Phan</td>
                                                        <td>Feature</td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr data-comicid="4">
                                                        <td>4</td>
                                                        <td>Siêu nhân gao</td>
                                                        <td class="descr">Ở đây có 5 siêu nhân</td>
                                                        <td>Horror</td>
                                                        <td><a href="#chapter">32</a> </td>
                                                        <td>img-link</td>
                                                        <td>12/11/2022</td>
                                                        <td>12.455</td>
                                                        <td>Đang hoàn thành</td>
                                                        <td>Ân Phan</td>
                                                        <td>Feature</td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr data-comicid="4">
                                                        <td>4</td>
                                                        <td>Siêu nhân gao</td>
                                                        <td class="descr">Ở đây có 5 siêu nhân</td>
                                                        <td>Horror</td>
                                                        <td><a href="#chapter">12</a> </td>
                                                        <td>img-link</td>
                                                        <td>12/11/2022</td>
                                                        <td>12.455</td>
                                                        <td>Đang hoàn thành</td>
                                                        <td>Ân Phan</td>
                                                        <td>Feature</td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr data-comicid="4">
                                                        <td>4</td>
                                                        <td>Siêu nhân gao</td>
                                                        <td class="descr">Ở đây có 5 siêu nhân</td>
                                                        <td>Horror</td>
                                                        <td><a href="#chapter">21</a> </td>
                                                        <td>img-link</td>
                                                        <td>12/11/2022</td>
                                                        <td>12.455</td>
                                                        <td>Đang hoàn thành</td>
                                                        <td>Ân Phan</td>
                                                        <td>Feature</td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="category">
                    <div class="topmain" style="display: flex; align-items: center; justify-content: space-between;">
                        <h2 class="header"><span class="icon"></span>category</h2>
                        <a href="/" title="Trang chủ"> <i class="fa-solid fa-house"></i></a>
                    </div>
                    <div class="container">
                        <div class="row scroll-main">
                            <div class="col-md-12">
                                <div class="monitor">
                                    <div class="clearfix">
                                        <Search/>
                                        <div class="row">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>ID</th>
                                                        <th>Thể loại</th>
                                                        <th>Comic-id</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr data-comicid="1">
                                                        <td></td>
                                                        <td>1</td>
                                                        <td>action</td>
                                                        <td>2</td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" data-action="delete"><i class="fa-solid fa-ban"></i></button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div id="author">
                    <div class="topmain" style="display: flex; align-items: center; justify-content: space-between;">
                        <h2 class="header"><span class="icon"></span>Tác giả</h2>
                        <a href="/" title="Trang chủ"> <i class="fa-solid fa-house"></i></a>
                    </div>

                </div>
                <div id="chapter">
                    <div class="topmain" style="display: flex; align-items: center; justify-content: space-between;">
                        <h2 class="header"><span class="icon"></span>chapter</h2>
                        <a href="/" title="Trang chủ"> <i class="fa-solid fa-house"></i></a>
                    </div>

                </div>
                <div id="comment">
                    <div class="topmain" style="display: flex; align-items: center; justify-content: space-between;">
                        <h2 class="header"><span class="icon"></span>comment</h2>
                        <a href="/" title="Trang chủ"> <i class="fa-solid fa-house"></i></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default{
    data() {
       return{
        Comics:[]
       }
    },
    created() {
        axios.get('api/').then(
            res =>{
                this.Comics = res.data;
            }
        )
    },
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
    width: 90%;
    margin: 20px auto;
}

/*slidebar*/
.slidebar {
    width: 15%;
    min-height: 690px;
    float: left;
    border-right: 1px solid rgb(235, 235, 235);
    background-color: rgb(247, 247, 247);
}

.module15.slidebar .logo {
    height: 145px;
    border-bottom: 1px solid rgb(235, 235, 235);
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
    float: left;
    width: 85%;
    height: 690px;
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

    position: absolute;
    display: none;
    border: 1px solid rgb(235, 235, 235);
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
.topmain a{
    margin-right: 30px;
}
/*logo*/
.logo a {
    width: 88px;
    height: 88px;
    display: inline-block;
    position: relative;
    left: 50%;
    top: 50%;
    margin: -45px 0 0 -45px;
    border: 1px solid rgb(200, 200, 200);
    border-radius: 50%;
    background-color: rgb(214, 214, 214);
}

.logo a:before {
    content: "A";
    width: 70px;
    height: 70px;
    font: 50px/70px helvetica, verdana, sans-serif;
    text-align: center;
    position: absolute;
    top: 8px;
    left: 8px;
    border-radius: 35px;
    border: 1px solid rgb(210, 210, 210);
    display: inline-block;
    background: linear-gradient(top, rgb(255, 255, 255), rgb(245, 245, 245));
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
.monitor .clearfix td>a{
    font-size: 18px;
    color: black ;
}
.monitor .clearfix button i {
    font-size: 20px;
}
.monitor .clearfix button{
    margin-right: 15px;
}
tr:not(:last-of-type) {
    border-bottom: 1px solid #ddd;
}
.main-descr{
    width: 20%;
}
.descr {
  	display: -webkit-box;
  	height: calc( 16px*1.3*2.4);
  	font-size: 16px;
  	line-height: 1.3;
  	-webkit-line-clamp: 2;  /* số dòng hiển thị */
  	-webkit-box-orient: vertical;
  	overflow: hidden;
  	text-overflow: ellipsis;
  	margin-top:10px;
    margin-right: 0;
}
.scroll-main{
height: 550px;
overflow-x: auto;
}
</style>