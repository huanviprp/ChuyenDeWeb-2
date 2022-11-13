<template>
    <div>
        <ul class="breadcrumb">
            <li itemprop="itemListElement">
                <a href="/" class="crumb">
                    <span>
                        Trang chủ
                    </span>
                </a>
            </li>
            <li itemprop="itemListElement">
                <a href="/" class="crumb">
                    <span>
                        Thể loại
                    </span>
                </a>
            </li>
            <li itemprop="itemListElement">
                <a href="/detail" class="crumb">
                    <span>
                        Tên truyện
                    </span>
                </a>
            </li>
            <li itemprop="itemListElement">
                <a href="" class="crumb">
                    <span>
                        Chapter number
                    </span>
                </a>
            </li>
        </ul>
    </div>
</template>
<script>
export default {

}
</script>
<style>
 ul.breadcrumb li {
    margin-right: 5px;
}

 ul.breadcrumb li::before {
    content: "\f101";
    font-family: fontawesome;
    color: slategrey;
}

ul.breadcrumb li:nth-child(1)::before {
    content: "";
}
</style>