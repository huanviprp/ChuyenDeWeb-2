<template>
    <h3>
        <p style="color:#de6e98;padding-top:0.5cm"><b>Truyện Hot <i class="fa fa-angle-right"
                    aria-hidden="true"></i></b></p>
    </h3>
    <section class="product"> 
        <button class="pre-btn" @click.prevent="pre()"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        <button class="nxt-btn" @click.prevent="next()"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
        <div class="product-container" v-if="Comics && Comics.length">
            <div class="product-card" v-for="Comic of Comics" :key="Comic.Comic_id">
                <div class="product-image">
                    <a href="/detail"><img v-bind:src="Comic.Img_feature" class="product-thumb" alt=""></a>
                </div>
                <div class="product-info">
                    <a href="/detail"><b><p class="product-short-description">{{Comic.Name}}</p></b></a>
                </div>
            </div>
        </div>
    </section>
</template>
  
<script>
import axios from 'axios';
export default {
    data() {
       return{
        Comics:[]
       }
    },
    created() {
        axios.get('api/hot').then(
            res =>{
                this.Comics = res.data;
            }
        ),
        this.interval = setInterval(() => this.next(), 3000);
    },
    methods: {
    next: function () {
      this.Comics.push(this.Comics.shift())
    },
    pre: function () {
      this.Comics.unshift(this.Comics.pop())
    }
  },
}
</script>
  
<style>
.img-comic {
    width: 100%;
    height: 200px;
}

.comic {
    width: 200px;
    padding: 0%;
    border: 2px solid black;
    margin-right: 10px;
    background: #f5f2f2;
    margin-bottom: 0.3cm;
}

.comic-new {
    margin-left: 1cm;
}

.infor-comic {
    background: black;

}

.infor-comic ul {
    padding-left: 0px;
    margin-bottom: 1px;
    text-align: center;
}

.infor-comic ul li {

    font-size: 11px;
    display: inline;
    color: white;
    padding-right: 10px
}

.new-chapter ul li {
    font-size: 13px;
    padding-right: 10px;
    list-style: none;
}

.new-chapter ul {
    padding-left: 0px;
    padding-left: 10px;
}

.name-comic {
    margin-bottom: 1px;
    padding-left: 3px; 
}
#module3 a{
    text-decoration: none;
    color:black;
}

.comic-hot {
    justify-content: center;
}

.container.home {
    background: #dedede;
}
/* HEADER */






/* PRODUCTS */
.product {
  position: relative;
  overflow: hidden;
  padding: 20px;
}

.product-category {
  padding: 0 10vw;
  font-size: 30px;
  font-weight: 500;
  margin-bottom: 40px;
  text-transform: capitalize;
}

.product-container {
  padding: -1px 10vw;
  display: flex;
  overflow-x: auto;
  scroll-behavior: smooth;
}

.product-container::-webkit-scrollbar {
  display: none;
}

.product-card {
  flex: 0 0 auto;
  width: 222px;
  height: 450px;
  margin-right: 40px;
}

.product-image {
  position: relative;
  width: 100%;
  height: 350px;
  overflow: hidden;
}

.product-thumb {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.card-btn {
  position: absolute;
  bottom: 10px;
  left: 50%;
  transform: translateX(-50%);
  padding: 10px;
  width: 90%;
  text-transform: capitalize;
  border: none;
  outline: none;
  background: #fff;
  border-radius: 5px;
  transition: 0.5s;
  cursor: pointer;
  opacity: 0;
}

.product-card:hover .card-btn {
  opacity: 1;
}

.card-btn:hover {
  background: #ff7d7d;
  color: #fff;
}

.product-info {
  width: 100%;
  height: 100px;
  padding-top: 10px;
}

.product-brand {
  text-transform: uppercase;
}

.product-short-description {
  width: 100%;
  height: 20px;
  line-height: 20px;
  overflow: hidden;
  opacity: 0.5;
  text-transform: capitalize;
  margin: 5px 0;
}
.pre-btn,
.nxt-btn {
  border: none;
  width: 10vw;
  height: 100%;
  position: absolute;
  top: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #fff 100%);
  cursor: pointer;
  z-index: 8;
}

.pre-btn {
  left: 0;
  transform: rotate(180deg);
}

.nxt-btn {
  right: 0;
}

.pre-btn img,
.nxt-btn img {
  opacity: 0.2;
}

.pre-btn:hover img,
.nxt-btn:hover img {
  opacity: 1;
}

.collection-container {
  width: 100%;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 10px;
}

.collection {
  position: relative;
}

.collection img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.collection p {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: #fff;
  font-size: 50px;
  text-transform: capitalize;
}

.collection:nth-child(3) {
  grid-column: span 2;
  margin-bottom: 10px;
}

</style>