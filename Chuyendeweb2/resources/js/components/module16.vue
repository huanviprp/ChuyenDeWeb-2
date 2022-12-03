<template>
    <h3>
        <p style="color:#de6e98;padding-top:0.5cm"><b>Truyện Đã Theo Dõi <i class="fa fa-angle-right"
                    aria-hidden="true"></i></b></p>
    </h3>
    <div class="row comic-new">
        <div class="row comic-new" v-if="Comics && Comics.length">
            <div class="col-md-3 comic" v-for="Comic in Comics" :key="Comic.Comic_id">
                <a v-bind:href="'/detail/' + Comic.Comic_id"><img class="img-comic" v-bind:src="Comic.Img_feature"></a>
                <div class=" infor-comic">
                    <ul>
                        <li><i class="fa fa-eye" aria-hidden="true"></i>123</li>
                        <li><i class="fa fa-comment" aria-hidden="true"></i> 123</li>
                        <li><i class="fa fa-heart" aria-hidden="true"></i> 123</li>
                    </ul>
                </div>
                <div class="new-chapter">
                    <a class="name-comic" v-bind:href="'/detail/' + Comic.Comic_id"><b>{{ Comic.Name }}</b></a>
                    <ul>
                        <li><a href="">Chapter 3</a></li>
                        <li><a href="">Chapter 2</a></li>
                        <li><a href="">Chapter 1</a></li>
                    </ul>
                </div>
            </div>
        </div>


    </div>
</template>
  
<script>
import axios from 'axios';

export default {
    data() {
        return {
            Comics: [],
            User: [],
            comicid: '',
            userid: '',
            check: 'out'
        }
    },
    created() {

        axios.get('http://127.0.0.1:8000/api/user').then(
            res => {
                if (res) {
                    this.check = 'in';
                    this.User = res.data;

                    axios.post('http://127.0.0.1:8000/api/getfollow', {
                        userid: this.User['id']
                    }).then(res => {
                        this.Comics = res.data;
                        console.log(this.Comics);
                    });

                }
                else {

                }
            }
        );
        if (this.check == "out") {
            alert('Bạn cần đăng nhập để xem được danh sách yêu thích');
            window.location.replace("/");
        }
    },
}
</script>
  
<style>
/*  */
</style>