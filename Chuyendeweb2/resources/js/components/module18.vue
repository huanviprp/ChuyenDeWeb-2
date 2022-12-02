<template>
    <h3>
        <p style="color:#de6e98;padding-top:0.5cm"><b>Thể Loại <i class="fa fa-angle-right"
                    aria-hidden="true"></i></b></p>
    </h3>
    <div class="row comic-new" v-if="Comics && Comics.length">
        <div class="col-md-3 comic" v-for="Comic of Comics" :key="Comic.Comic_id">
            <img class="img-comic" v-bind:src="Comic.Img_feature">
            <div class=" infor-comic">
                <ul>
                    <li><i class="fa fa-eye" aria-hidden="true"></i>123</li>
                    <li><i class="fa fa-comment" aria-hidden="true"></i> 123</li>
                    <li><i class="fa fa-heart" aria-hidden="true"></i> 123</li>
                </ul>
            </div>
            <div class="new-chapter">
                <p class="name-comic"><b>Tên truyện</b></p>
                <ul>
                    <li>Chapter 3</li>
                    <li>Chapter 2</li>
                    <li>Chapter 1</li>
                </ul>
            </div>
        </div>
    </div>
</template>
  
<script>

import axios from 'axios';
let id = new URLSearchParams(location.search);
export default {
    data() {
        return {
            Comics: [],
        };
    },
    created() {
        axios.get('http://127.0.0.1:8000/api/getcomicbyid/'+ this.id).then(
            res => {
                this.Comics = res.data;
            }
        )
    }
    
};
</script>
  
<style>
.container .category{
    background-color: white;
}
</style>