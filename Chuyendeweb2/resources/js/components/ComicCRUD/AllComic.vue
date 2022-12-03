<template>
    <div class="container-fluid dashboard">
        <h3 class="text-center">All Comics</h3><br />
        <button class="btn btn-success"><a href="/add">Thêm Comic</a></button>
        <table class="table table-bordered">
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
                <tr v-for="comic in Comics" :key="comic.id">
                    <td>{{ comic.id }}</td>
                    <td>{{ comic.Name }}</td>
                    <td class="descr">{{ comic.Descripsion }}</td>
                    <td>Action</td>
                    <td><a href="#chapter">123</a> </td>
                    <td><img v-bind:src="comic.Img_feature" alt=""></td>
                    <td>{{ comic.Date }}</td>
                    <td>{{ comic.View }}</td>
                    <td>{{ comic.Status }}</td>
                    <td>{{ comic.author_id }}</td>
                    <td>Feature</td>
                    <div class="btn" role="">
                        <router-link :to="{ name: 'edit', params: { id: comic.id } }" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteComic(comic.id)">Delete</button>
                        <label class="label label-success check-value" v-if="check">Xóa thành công truyện
                            {{ comic.Name }}</label><br />
                    </div>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: "All",
    data() {
        return {
            Comics: [],
            check: false
        }
    },
    created() {
        axios
            .get('api/comics')
            .then(response => {
                this.Comics = response.data;
            });
    },
    methods: {
        deleteComic(id) {
            axios
                .delete(`api/comic/delete/${id}`)
                .then(response => {
                    let i = this.Comics.map(item => item.id).indexOf(id); // find index of your object
                    // this.comics.splice(i, 1);
                    this.check = true;
                    window.location.href = "/";
                });
        }
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

.dashboard {
    background-color: rgb(247, 247, 247);
    padding-right: 130px;
    padding-left: 130px;
    padding-top: 50px;
    height: 100%;
    overflow-x: auto;
}

.descr {
    display: -webkit-box;
    height: calc(39px*1.3*3.4);
    width: 200px;
    font-size: 16px;
    line-height: 1.4;
    -webkit-line-clamp: 7;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    border-bottom: none;
    margin-right: 0;
}

td:nth-child(6),
th:nth-child(6) {
    width: 250px;
}

.dashboard img {
    object-fit: cover;
    width: 100%;

}
</style>