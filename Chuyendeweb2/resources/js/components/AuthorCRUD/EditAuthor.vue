<template>
    <div class="container-fluid dashboard">
        <h3 class="text-center">Edit Author</h3>
        <div class="row">
            <div class="col-md-12">
                <form @submit.prevent="updateAuthor">
                    <!-- <div class="form-group">
                        <label>id</label>
                        <input type="text" class="form-control" v-model="comic.id">
                    </div> -->
                    <div class="form-group">
                        <label>Tên tác giả</label>
                        <input type="text" class="form-control" v-model="author.Author_name">
                    </div>
                    <div class="form-group">
                        <label>Giới tính</label>
                        <input type="text" class="form-control" v-model="author.Gender">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Author</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: "Edit",
    data() {
        return {
            author: {}
        }
    },
    created() {
        axios
            .get(`http://127.0.0.1:8000/api/author/edit/${this.$route.params.id}`)
            .then((response) => {
                this.author = response.data;
                // console.log(response.data);
                // console.log(this.$route.params.id);
            });
    },
    methods: {
        updateAuthor() {
            axios
                .post(`http://127.0.0.1:8000/api/author/update/${this.$route.params.id}`, this.author)
                .then((response) => {
                    // console.log(response)
                    this.$router.push({ name: 'allauthor' });
                });
        }
    }
}
</script>
<style>
</style>