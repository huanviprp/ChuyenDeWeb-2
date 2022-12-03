<template>
    <div class="container-fluid dashboard">
        <h3 class="text-center">Add Author</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addAuthor">
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
                    
                    <button type="submit" class="btn btn-primary">Add Author</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
import axios from 'axios';
export default {
    name: "AddAuthor",
    data() {
        return {
            author: {}
        }
    },
    methods: {
        addAuthor() {
            axios
                .post('api/author/add', this.author)
                .then(response => (
                    this.$router.push({ name: 'allauthor' })
                    // console.log(response.data)
                ))
                .catch(error => console.log(error))
                .finally(() => this.loading = false)
        }
    }
}
</script>
<style>
.dashboard {
    background-color: rgb(247, 247, 247);
    padding-right: 130px;
    padding-left: 130px;
    padding-top: 50px;
    padding-bottom: 50px;
    height: 600px;
    overflow-x: auto;
}
</style>