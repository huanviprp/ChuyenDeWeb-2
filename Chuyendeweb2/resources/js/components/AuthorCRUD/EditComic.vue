<template>
    <div class="container-fluid dashboard">
        <h3 class="text-center">Edit Comic</h3>
        <div class="row">
            <div class="col-md-12">
                <form @submit.prevent="updateComic">
                    <!-- <div class="form-group">
                        <label>id</label>
                        <input type="text" class="form-control" v-model="comic.id">
                    </div> -->
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" v-model="comic.Name">
                    </div>
                    <div class="form-group">
                        <label>Descripsion</label>
                        <input type="text" class="form-control" v-model="comic.Descripsion">
                    </div>
                    <div class="form-group">
                        <label>Image Feature</label>
                        <input type="text" class="form-control" v-model="comic.Img_feature">
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="text" class="form-control" v-model="comic.Date">
                    </div>
                    <div class="form-group">
                        <label>View</label>
                        <input type="text" class="form-control" v-model="comic.View">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" class="form-control" v-model="comic.Status">
                    </div>
                    <div class="form-group">
                        <label>Author_id</label>
                        <input type="text" class="form-control" v-model="comic.author_id">
                    </div>
                    <div class="form-group">
                        <label>Nổi bật (Number: 1 or 2)</label>
                        <input type="text" class="form-control" v-model="comic.feature">
                    </div>
                    <div class="form-group">
                        <label>Category Id</label>
                        <input type="text" class="form-control" v-model="comic.Category_id">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Comic</button>
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
            comic: {}
        }
    },
    created() {
        axios
            .get(`http://127.0.0.1:8000/api/comic/edit/${this.$route.params.id}`)
            .then((response) => {
                this.comic = response.data;
                // console.log(response.data);
                // console.log(this.$route.params.id);
            });
    },
    methods: {
        updateComic() {
            axios
                .post(`http://127.0.0.1:8000/api/comic/update/${this.$route.params.id}`, this.comic)
                .then((response) => {
                    // console.log(response)
                    this.$router.push({ name: 'allcomic' });
                });
        }
    }
}
</script>
<style>
</style>