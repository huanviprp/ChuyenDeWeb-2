<template>
    <div class="container-fluid dashboard">

                        <div class="row scroll-main">
                            <div class="col-md-12">
                                <div class="monitor">
                                    <div class="clearfix">
                                        <div class="row">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>ID</th>
                                                        <th>Username</th>
                                                        <th>Email</th>
                                                        <th>Password</th>
                                                        <th>Tạo ngày</th>
                                                        <th>Comment</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr v-for="user in Users" :key="user.User_id">
                                                        <td></td>
                                                        <td>{{ user.User_id }}</td>
                                                        <td>{{ user.userName }}</td>
                                                        <td>{{ user.email }}</td>
                                                        <td>{{ user.Password }}</td>
                                                        <td>{{ user.created_at }}</td>
                                                        <td><a href="#comment" style="font-size:14px">Xem comment</a>
                                                        </td>
                                                        <td>
                                                            <button type="button" data-action="edit"><i
                                                                    class="fa-regular fa-pen-to-square"></i></button>
                                                            <button type="button" @click.prevent="deleteUser(user.User_id)" data-action="delete"><i
                                                                    class="fa-solid fa-ban"></i></button>
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
</template>
<script>
import axios from 'axios';
export default {
    name: "All",
    data() {
        return {
            Comics: []
        }
    },
    created() {
        axios
            .get('api/comics/')
            .then(response => {
                this.Comics = response.data;
            });
    },
    methods: {
        deletComic(id) {
            axios
                .delete(`api/comic/delete/${this.$route.params.id}`)
                .then(response => {
                    let i = this.Comics.map(item => item.id).indexOf(id); // find index of your object
                    this.comics.splice(i, 1)
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
.dashboard{
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
td:nth-child(6), th:nth-child(6){
    width: 250px;
}
.dashboard img {
    object-fit: cover;
    width: 100%;

}
</style>