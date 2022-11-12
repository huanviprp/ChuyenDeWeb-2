<template>
    <div class="container">
        <div class="offset-md-3 col-md-6 login-detail">
            <h1 class="login-title">ĐĂNG NHẬP</h1>
            <div class="login-form">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">UserName/Email:</label>
                        <div class="input-email">
                            <input type="email" class="form-control email" name="email" placeholder="Email" autofocus=""
                                required>
                            <i class="fas fa-envelope" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Mật khẩu:</label>
                        <div class="input-password">
                            <input type="password" class="form-control password" name="password" placeholder="Password"
                                required>
                            <i class="fas fa-lock" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="dangky text-right mb-2">
                        <a href="/register">Đăng ký mới</a>
                    </div>

                    <div class="login-button mb-2">
                        <input type="submit" class="btn btn-warning" value="Đăng nhập">
                    </div>
                </form>
            </div>

            <div class="login-social text-center">
                <a href="/" class="btn btn-primary login-facebook mb-2">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    Đăng nhập bằng Facebook
                </a>
                <a href="/" class="btn btn-block login-google mb-2">
                    <i class="fab fa-google-plus-g" aria-hidden="true"></i>
                    Đăng nhập bằng Google
                </a>
            </div>
        </div>

    </div>
</template>
<script>

export default {

}

</script>
<style>
body {
    background-image: url("https://cdn.wallpapersafari.com/17/62/Mw5A6y.jpg");
}

h1.login-title {
    font-size: 2rem;
    font-weight: 700;
    text-shadow: 0px -2px 25px #ededed;
    /* border-bottom: 3px solid red; */
    margin-right: 57%;
}

label {
    color: white;
}

.login-detail {
    margin-top: 3rem;
    background-color: #dedede;
    padding: 30px 40px;
    background: rgba(222, 222, 219, 0.2);
    box-shadow: 0 4px 10px 0 rgba(222, 222, 219, 0.37);
    backdrop-filter: blur(10px);
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 219, 0.18);
}

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

.input-email i,
.input-password i {
    position: absolute;
    top: 10px;
    left: 20px;
    font-size: 20px;
    color: #aaa;
}

.input-email input,
.input-password input {
    border-radius: 4px;
    box-sizing: border-box;
    padding: 8px 40px 8px 50px;
    transition: .4s;
}

.login-button input {
    font-weight: 600;
    width: 100%;
    color: white;
}

.login-social i {
    float: left;
    padding: 5px 0 0 5px;
}

.login-facebook {
    width: 100%;
}

.login-google {
    background: rgb(218, 64, 13);
    background: linear-gradient(90deg, rgba(218, 64, 13, 1) 0%, rgba(237, 11, 0, 1) 3%, rgba(255, 63, 0, 0.8606793059020483) 100%);
    color: white;
}

.input-email>input:focus,
.input-pass>input:focus {
    border-color: #1e90ff;
    box-shadow: 0 0 8px 0 #1e90ff;
}

.input-email>input:focus+i,
.input-password>input:focus+i {
    color: #1e90ff;
    left: 13px;
    transition: .4s;
}
.login-facebook:hover{
    transition: .2s;
    color: black;
    font-weight: 600;
}
.login-google:hover {
    background: rgb(205, 8, 0);
    background: linear-gradient(328deg, rgba(205, 8, 0, 1) 2%, rgba(213, 9, 0, 1) 42%, rgba(199, 50, 0, 0.8606793059020483) 100%);
    transition: .2s;
    color: black;
    font-weight: 600;
}
</style>