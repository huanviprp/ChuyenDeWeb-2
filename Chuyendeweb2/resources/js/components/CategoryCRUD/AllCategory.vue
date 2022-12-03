<template>
    <div class="container-fluid dashboard">
        <h3 class="text-center">All Category</h3><br />
        <button class="btn btn-success"><a style="text-decoration: none; color: white; margin-bottom: 20px;" href="/addcategory">Thêm mới Category</a></button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Thể loại</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="category in Categorys" :key="category.Category_id">
                    <td>{{ category.Category_id }}</td>
                    <td>{{ category.Category }}</td>
                    <div class="btn" role="">
                        <router-link :to="{ name: 'editcategory', params: { id: category.Category_id } }" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteCategory(category.Category_id)">Delete</button>
                        <label class="label label-success check-value" v-if="check">Xóa thành công truyện
                            {{ category.Category }}</label><br />
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
            Categorys: [],
            check: false
        }
    },
    created() {
        axios
            .get('http://127.0.0.1:8000/api/categorys')
            .then(response => {
                this.Categorys = response.data;
            });
    },
    methods: {
        deleteCategory(id) {
            axios
                .delete(`http://127.0.0.1:8000/api/category/delete/${id}`)
                .then(response => {
                    let i = this.Categorys.map(item => item.id).indexOf(id); // find index of your object
                    // this.comics.splice(i, 1);
                    this.check = true;
                    window.location.href = "/allcategory";
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
    height: 600px;
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