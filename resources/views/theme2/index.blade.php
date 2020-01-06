<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- 响应式自适应布局 -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Title</title>
    <!-- bootstrap 样式 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- basic style -->
     <link rel="stylesheet" href="{{asset('css/theme2/base.css')}}">
     <!-- common style -->
     <link rel="stylesheet" href="{{asset('css/theme2/common.css')}}">
     <style>
         body{
             background:#E3E2DD;
         }
     .container{
         padding-top:55px;
         /* position:relative; */
     }
     .topbanner{
      width:100% ;
      height:61px;  
     background-color:orange;
     position:fixed;
     z-index:200;
     }
     .nav_bar{
         position:fixed;
         z-index:300;
        left:200px;
     }
     .back_top{

         /* 返回顶部按钮相对于视口进行定位 */
         position:fixed;
         right:-110px;
         bottom:40px;
         /* 页面刚加载完成时处于最顶端位置，无需返回顶部，故返回顶部按钮默认为不显示 */
        display:none;

     }
     .back_top img{
        border-radius:50%;
        width:30%;
     }
     .content{



         /* right:auto; */
         /* left:auto; */
         /* 给better-scroll最外层都盒子要设置高度 */
           height: calc(100% - 61px);
            /* height:500px; */

        overflow-y:auto;
     }
        </style>
</head>
<body>
<!-- <div class="topbanner"></div> -->

<div id="app">
    <!-- 导航栏和其底部背景横幅 -->
<nav-bar class="nav_bar"></nav-bar>
<div class="topbanner"></div>
<!-- 这里 的header来自bootstrap框架，用于返回顶部 -->
<header class="bs-docs-nav navbar navbar-static-top" id="top"></header>

<div class="container">
            <!-- 把这些内容都放在滚动框中 -->

<scroll class="content">

<!-- 轮播图 -->
<welcome-swiper></welcome-swiper>
<!-- 网站公告 -->
<announcement></announcement>
<!-- 各个分类部分 -->
<category-part></category-part>
<latest-us-tv-category-part></latest-us-tv-category-part>
<scientific-category-part></scientific-category-part>
<scared-category-part></scared-category-part>
<comedy-category-part></comedy-category-part>
<feature-category-part></feature-category-part>
</scroll>

</div>


<home-foot></home-foot>


<!-- <el-backtop target=".content" :bottom="70" :right="20">
      <div class="back_top">
        <img src="{{asset('imgs/theme2/backtop.png')}}" alt />
      </div>
    </el-backtop> -->
<!-- 来自bootstrap框架，点击可以返回顶部 -->

<!--put back to top button in app box and make its position as fixd -->
 <a href="#top" class="back_top fr" id="scrollto"> <img src="{{asset('imgs/theme2/backtop.png')}}" alt=""> </a> 
</div>



<!-- 导入app.js ，这里的导入必须在app div盒子下面，才能正常渲染组件,否则无法渲染vue 组件-->
<script src="../../js/app.js"></script>

<!-- bootstrap 3 个 脚本文件 -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script !src="">

// 使用该方法可以监听滚动位置来决定返回按钮的显示和隐藏,下面代码为当从顶部开始滚动100px后显示，小于100px隐藏
window.onscroll = function () {
    console.log(document.body.scrollTop);
    // 这里的documentElement为html元素；只有html是滚动的；document.body.scrollTop在滚动过程中一只为0；
    if (document.documentElement.scrollTop  > 100) {
        document.getElementById("scrollto").style.display = "block";
    }
    else {
        document.getElementById("scrollto").style.display = "none";
    }
}
    // 通过data-toggle="dropdown"无法调用导致下拉菜单无效，需要在js中写如下的方法才能使下拉菜单有效
    $(function () {
        $(".dropdown-toggle").dropdown('toggle');
    });

</script>
</body>
</html>
