<template>
    <div class="container">
        <div class="comment-container">
            <h3 class="comment-title">Bình Luận</h3>
            <form action="" method="post" class="comment-form">
                <input type="text" name="comment" id="comment" class="comment-area" />
                <input type="submit" value="Đăng" class="submit-comment" />
            </form>
            <div class="comment-show">
                <!-- Contenedor Principal -->
                <div class="comments-container">
                    <ul id="comments-list" class="comments-list">
                        <li>
                            <div class="comment-main-level">
                                <!-- Avatar -->
                                <div class="comment-avatar">
                                    <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg"
                                        alt="" />
                                </div>
                                <!-- Contenedor del Comentario -->
                                <div class="comment-box">
                                    <div class="comment-head">
                                        <h6 class="comment-name">
                                            <a href="http://creaticode.com/blog">Lorena Rojero</a>
                                        </h6>
                                        <span>hace 10 minutos</span>
                                        <i class="fa fa-reply"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="comment-content">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Velit omnis animi et iure laudantium vitae, praesentium
                                        optio, sapiente distinctio illo?
                                    </div>
                                </div>
                            </div>
                            <div class="comment-main-level">
                                <!-- Avatar -->
                                <div class="comment-avatar">
                                    <img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_2_zps7de12f8b.jpg"
                                        alt="" />
                                </div>
                                <!-- Contenedor del Comentario -->
                                <div class="comment-box">
                                    <div class="comment-head">
                                        <h6 class="comment-name">
                                            <a href="http://creaticode.com/blog">Lorena Rojero</a>
                                        </h6>
                                        <span>hace 10 minutos</span>
                                        <i class="fa fa-reply"></i>
                                        <i class="fa fa-heart"></i>
                                    </div>
                                    <div class="comment-content">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        Iusto, nemo tenetur? Pariatur esse fugit ad impedit, error
                                        similique aliquam distinctio accusamus mollitia dolorem
                                        quasi dignissimos explicabo modi, ea cum officia voluptate
                                        corporis consequuntur! Perferendis, quibusdam? Aperiam,
                                        soluta! Id incidunt voluptatum error asperiores veritatis
                                        expedita perferendis iste nostrum quaerat. Eveniet odio
                                        optio saepe et, architecto ad possimus praesentium! Magni,
                                        possimus amet. Nulla, earum culpa. Ratione quaerat
                                        necessitatibus repellat illo reprehenderit hic culpa? Vero
                                        nostrum ea, itaque illum, consequatur, exercitationem odio
                                        magnam similique provident minima veniam? Perspiciatis autem
                                        itaque rem. Dolorem animi consectetur facere soluta nesciunt
                                        quia. Vero earum fuga corrupti voluptatum quia autem vitae
                                        tempora modi. Modi ipsa adipisci ipsum? Odio esse non magni,
                                        quod qui, rem aliquid expedita reiciendis labore sapiente
                                        velit dolores accusantium ea hic delectus? Minima dolor quae
                                        excepturi! Necessitatibus, sequi provident, officiis amet
                                        adipisci veniam quos placeat cum animi nulla natus incidunt
                                        odit dicta veritatis repudiandae ut sit assumenda unde quam
                                        sed architecto suscipit a numquam! In expedita labore cum
                                        odio praesentium beatae exercitationem magnam alias, omnis
                                        nesciunt, repudiandae aperiam est, mollitia facilis. Optio
                                        velit nesciunt aliquam, ex placeat, neque nostrum, veniam
                                        asperiores delectus accusantium doloremque eius at. In
                                        similique, qui iste amet eveniet repellat. Iure, dolore.
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
  
<script>
export default {};
</script>
  
<style>
.submit-comment {
    padding: 4px 25px;
    margin-top: 20px;
    margin-left: 789px;
    background-color: rgb(41, 146, 41);
    color: white;
    border: none;
    border-radius: 4px;
}

.submit-comment:hover {
    background-color: rgb(1 86 1);
    color: white;
}

.comment-container {
    background-color: #dedede;
}

.comment-title {
    color: #de6e98;

    font-weight: bold;
    margin-left: 20px;
    padding-top: 20px;
}

.comment-form {
    margin-left: 20px;
}

.comment-area {
    width: 55rem;
    height: 8rem;
}

.comment-main-level {
    margin-bottom: 25px;
    width: 55rem;
}

.comments-container {
    margin: 0px 20px;
    width: 768px;
}

.comments-container h1 {
    font-size: 36px;
    color: #283035;
    font-weight: 400;
}

.comments-container h1 a {
    font-size: 18px;
    font-weight: 700;
}

.comments-list {
    margin-top: 30px;
    position: relative;
}

/**
   *Line
   -----------------------*/
/* .comments-list:before {
    content: "";
    width: 2px;
    height: 100%;
    background: #c7cacb;
    position: absolute;
    left: 32px;
    top: 0;
  } */

.comments-list:after {
    content: "";
    position: absolute;
    background: #c7cacb;
    bottom: 0;
    left: 27px;
    width: 7px;
    height: 7px;
    border: 3px solid #dee1e3;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
}

.reply-list:before,
.reply-list:after {
    display: none;
}

.reply-list li:before {
    content: "";
    width: 60px;
    height: 2px;
    background: #c7cacb;
    position: absolute;
    top: 25px;
    left: -55px;
}

.comments-list li {
    margin-bottom: 15px;
    display: block;
    position: relative;
}

.comments-list li:after {
    content: "";
    display: block;
    clear: both;
    height: 0;
    width: 0;
}

.reply-list {
    padding-left: 88px;
    clear: both;
    margin-top: 15px;
}

/**
   * Avatar
   ---------------------------*/
.comments-list .comment-avatar {
    margin-right: 20px;
    width: 87px;
    height: 87px;
    position: relative;
    z-index: 99;
    float: left;
    border: 3px solid #fff;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
    overflow: hidden;
}

.comments-list .comment-avatar img {
    width: 100%;
    height: 100%;
}

.reply-list .comment-avatar {
    width: 50px;
    height: 50px;
}

.comment-main-level:after {
    content: "";
    width: 0;
    height: 0;
    display: block;
    clear: both;
}

/**
   * Caja del Comentario
   ---------------------------*/
.comments-list .comment-box {
    width: 48rem;
    float: left;
    position: relative;
    -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
}

.comments-list .comment-box:before,
.comments-list .comment-box:after {
    content: "";
    height: 0;
    width: 0;
    position: absolute;
    display: block;
    border-width: 10px 12px 10px 0;
    border-style: solid;
    border-color: transparent #fcfcfc;
    top: 8px;
    left: -11px;
}

.comments-list .comment-box:before {
    border-width: 11px 13px 11px 0;
    border-color: transparent rgba(0, 0, 0, 0.05);
    left: -12px;
}

.reply-list .comment-box {
    width: 610px;
}

.comment-box .comment-head {
    background: #fcfcfc;
    padding: 10px 12px;
    border-bottom: 1px solid #e5e5e5;
    overflow: hidden;
    -webkit-border-radius: 4px 4px 0 0;
    -moz-border-radius: 4px 4px 0 0;
    border-radius: 4px 4px 0 0;
}

.comment-box .comment-head i {
    float: right;
    margin-left: 14px;
    position: relative;
    top: 2px;
    color: #a6a6a6;
    cursor: pointer;
    -webkit-transition: color 0.3s ease;
    -o-transition: color 0.3s ease;
    transition: color 0.3s ease;
}

.comment-box .comment-head i:hover {
    color: #03658c;
}

.comment-box .comment-name {
    color: #283035;
    font-size: 14px;
    font-weight: 700;
    float: left;
    margin-right: 10px;
}

.comment-box .comment-name a {
    color: #283035;
}

.comment-box .comment-head span {
    float: left;
    color: #999;
    font-size: 13px;
    position: relative;
    top: 1px;
}

.comment-box .comment-content {
    background: #fff;
    padding: 12px;
    font-size: 15px;
    color: #595959;
    -webkit-border-radius: 0 0 4px 4px;
    -moz-border-radius: 0 0 4px 4px;
    border-radius: 0 0 4px 4px;
}

.comment-box .comment-name.by-author,
.comment-box .comment-name.by-author a {
    color: #03658c;
}

.comment-box .comment-name.by-author:after {
    content: "autor";
    background: #03658c;
    color: #fff;
    font-size: 12px;
    padding: 3px 5px;
    font-weight: 700;
    margin-left: 10px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

/** =====================
   * Responsive
   ========================*/
@media only screen and (max-width: 766px) {
    .comments-container {
        width: 480px;
    }

    .comments-list .comment-box {
        width: 390px;
    }

    .reply-list .comment-box {
        width: 320px;
    }
}

#comments-list {
    padding-left: 0;
}
</style>