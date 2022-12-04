<template>
    <div class="container">
        <div class="offset-md-3 col-md-6 signout-detail">
            <h1 class="signout-title">ĐĂNG KÝ</h1>
            <div class="signout-form">
                <form autocomplete="off" @submit.prevent="handleSubmit">
                    <div class="form-group">
                        <label for="">UserName:</label>
                        <div class="input-email">
                            <input type="name" class="form-control email" name="name" placeholder="Nhập Username "
                                autofocus="" v-model="name">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Email:</label>
                        <div class="input-email">
                            <input type="email" class="form-control email" name="email" placeholder="Nhập Email"
                                autofocus="" required oninvalid="this.setCustomValidity('Enter Email Here')"
                                oninput="this.setCustomValidity('')" v-model="email">
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu:</label>
                        <div class="input-password">
                            <input type="password" class="form-control password" name="password" placeholder="Password"
                                required v-model="password">
                            <i class="fas fa-lock" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Nhập lại mật khẩu:</label>
                        <div class="input-password">
                            <input type="password" class="form-control password" name="password"
                                placeholder="Nhập lại Password" required v-model="password">
                            <i class="fas fa-lock" aria-hidden="true"></i>
                        </div>
                        <div class="dangnhap text-right my-3">
                            <a href="/login">Trờ về trang đăng nhập</a>
                        </div>
                        <div class="login-button mb-2">
                            <input type="submit" class="btn btn-warning" value="Đăng Ký">
                            <label class="label label-success check-value" v-if="check">Đăng ký thành công</label><br />
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</template>
<script>
import axios from 'axios';
export default {
    data() {
        return {
            name: "",
            email: "",
            password: ""
        }
    },
    created() {

    },
    methods: {
        handleSubmit(e) {
            e.preventDefault()
            console.log(this.name);
            console.log(this.email);
            console.log(this.password);
            axios.post('/api/createuser', {
                name: this.name,
                email: this.email,
                password: this.password
            })
                .then(response => {

                    if (response.data) {
                        // router.go('/dashboard');
                        // window.location.href = '/';
                        console.log(response.data);

                    } else {
                        this.error = response.data.message
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    }
}
</script>
<style>
body {
    background-image: url("https://cdn.wallpapersafari.com/17/62/Mw5A6y.jpg");
}

h1.signout-title {
    font-size: 2rem;
    font-weight: 700;
    text-shadow: 0px -2px 25px #ededed;
    /* border-bottom: 3px solid red; */
    margin-right: 57%;
}

label {
    color: white;
}

.signout-detail {
    margin-top: 3rem;
    background-color: #dedede;
    padding: 30px 40px;
    background: rgba(222, 222, 219, 0.2);
    box-shadow: 0 4px 10px 0 rgba(222, 222, 219, 0.37);
    backdrop-filter: blur(10px);
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 219, 0.18);
}

.input-username,
.input-email,
.input-password {
    color: #212529;
    text-align: left;
    font-size: 14px;
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    position: relative;
}

.input-username i,
.input-email i,
.input-password i {
    position: absolute;
    top: 10px;
    left: 20px;
    font-size: 20px;
    color: #aaa;
}

.input-username input,
.input-email input,
.input-password input {
    border-radius: 4px;
    box-sizing: border-box;
    padding: 8px 40px 8px 50px;
    transition: .4s;
}

.signout-button input {
    font-weight: 600;
    width: 100%;
    color: white;
}

.signout-social i {
    float: left;
    padding: 5px 0 0 5px;
}

.signout-facebook {
    width: 100%;
}

.signout-google {
    background: rgb(218, 64, 13);
    background: linear-gradient(90deg, rgba(218, 64, 13, 1) 0%, rgba(237, 11, 0, 1) 3%, rgba(255, 63, 0, 0.8606793059020483) 100%);
    color: white;
}

.input-username>input:focus,
.input-email>input:focus,
.input-pass>input:focus {
    border-color: #1e90ff;
    box-shadow: 0 0 8px 0 #1e90ff;
}

.input-username>input:focus+i,
.input-email>input:focus+i,
.input-password>input:focus+i {
    color: #1e90ff;
    left: 13px;
    transition: .4s;
}

.signout-google:hover {
    background: rgb(205, 8, 0);
    background: linear-gradient(328deg, rgba(205, 8, 0, 1) 2%, rgba(213, 9, 0, 1) 42%, rgba(199, 50, 0, 0.8606793059020483) 100%);
    transition: .2s;
    color: white;
}

.check-value {
    position: absolute;
    width: 45%;
    text-align: center;
    top: 18px;
    right: 34px;
    height: 35px;
    border-radius: 10px;
    font-size: 22px;
    font-weight: 600;
    transition: .3s;
    background-color: rgb(9, 199, 9);
}
</style>