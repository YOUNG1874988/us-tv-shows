<template>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">934美剧网</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link home" href="#">首页<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
<!--                    这里的data-toggle="dropdown"无效，在welcome.blade.php中的script中的调用才是有效的-->
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        美剧
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">科幻片</a>
                        <a class="dropdown-item" href="#">剧情片</a>
                        <a class="dropdown-item" href="#">动作片</a>
                        <a class="dropdown-item" href="#">喜剧片</a>
                        <a class="dropdown-item" href="#">动画片</a>
                        <a class="dropdown-item" href="#">奇幻片</a>
                        <a class="dropdown-item" href="#">恐怖片</a>
                        <a class="dropdown-item" href="#">悬疑片</a>
                        <!--                        <div class="dropdown-divider"></div>-->
                        <!--                        <a class="dropdown-item" href="#">Advanced Search</a>-->
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">今日更新 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">排行榜<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">电影天堂 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">纪录片 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">真人秀 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">播出表 <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="输入关键词"
                       aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">搜索</button>
            </form>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "NavBar",
    }
</script>

<style scoped>
    .form-control {
        width: 180px;
        margin-left: -200px;
    }

    .nav-item {
        width: 90px;
    }

    .navbar {
        background-color:orange;
        color: white;
    }

    .nav-link.home {
        padding-left: 20px;
    }

    .dropdown-menu {
        background-color: orange;
    }

    .dropdown-item {
        text-align: center;
        padding: 4px 4px;
    }
</style>
