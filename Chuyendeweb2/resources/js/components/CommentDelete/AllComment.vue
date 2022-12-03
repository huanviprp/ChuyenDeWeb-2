<template>
    <div class="container-fluid dashboard">
        <h3 class="text-center">All Comment</h3><br />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nội dung</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="comment in Comments" :key="comment.Comment_id">
                    <td>{{ comment.Comment_id }}</td>
                    <td>{{ comment.Content }}</td>
                    <div class="btn" role="">
                        <button class="btn btn-danger" @click="deleteComment(comment.Comment_id)">Delete</button>
                        <label class="label label-success check-value" v-if="check">Xóa thành công comment
                         </label><br/>
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
            Comments: [],
            check: false
        }
    },
    created() {
        axios
            .get('http://127.0.0.1:8000/api/comments')
            .then(response => {
                this.Comments = response.data;
            });
    },
    methods: {
        deleteComment(id) {
            axios
                .delete(`http://127.0.0.1:8000/api/comment/delete/${id}`)
                .then(response => {
                    let i = this.Comments.map(item => item.id).indexOf(id); // find index of your object
                    // this.comics.splice(i, 1);
                    this.check = true;
                    window.location.href = "/allcomment";
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