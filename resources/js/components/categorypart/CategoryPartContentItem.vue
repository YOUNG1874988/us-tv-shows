<template>
<div class="movie-item">
    <article class="u-movie">
     <a title="movieItem.showtitle" href="https://91mjw.com/video/2763.htm">
     <div class="list-poster">
         <img data-original="https://imgcdn.91pic.org/img/poster/5c666561e537d337.jpg" class="thumb" :src="movieItem.image">
    <div class="state"><span>{{movieItem.state}}</span></div>

    </div>

    <h2 class="title">{{movieItem.title}}</h2>
    </a>
    <div class="pingfen"><span>{{movieItem.score}}</span></div>
    <div class="meta"><span class="tags">{{movieItem.updatetag}}</span></div>
    </article>
</div>
</template>

<script>
    export default {
        name: "GoodsListItem",
        props: {
            movieItem: {
                type: Object,
                default () {
                    return {}
                }
            }
        },
        methods: {
            //   itemClick(){
            //     // console.log('goods item been clicked!')
            //     // console.log(this.goodsItem)
            //       //使用query方式路由组件
            //       this.$router.push({
            //         //这里的path路径必须和目标组件的path一致
            //         path:'/detail/',
            //         //这里的id和router/index.js里面的路由配置中的冒号后面的id对应
            //         query:{id:this.goodsItem.iid}
            //       //  这样到时候id会展示到url中
            //       })
            //   }
        },
        computed: {
            //   //提供2中获取图片的方式，如果前者没有则返回后者
            //   showImage(){
            //     return this.goodsItem.image || this.goodsItem.show.img
            //   }
            // }
        }
    }
</script>

<style scoped>
    .movie-item {
        position: relative;
        width: 15%;
    }
    
    .u-movie {
        position: relative;
        width: 100%;
    }
    .list-poster{
        position: relative;
    }
    .list-poster img {
        width: 100%;
        border-radius: 5px;
    }
    .pingfen{
        width: 50px;
        height: 30px;
        position:absolute;
        right: 6px;
        top: 2px;
        line-height: 30px;
        text-align: center;
        background-color:#B5966E;
        font-size: 16px;
        color:white;
        border-radius:0 0 5px 5px;
    }
    .state{
        width: 80px;
        height: 30px;
        position:absolute;
        left: 0;
        bottom: 0;
        line-height: 30px;
        text-align: center;
        background-color:lightsalmon;
        font-size: 16px;
        color:white;
        border-radius:0 5px 0 4px;
    }
    .title{
        font-size: 14px;
        font-weight: 700;
        color: black;
        display: inline-block;
        text-align: center;
        text-indent: 5px;
        margin-bottom:0;
        margin-top:5px;
    }
    .meta{
        text-align: center;
        line-height: 24px;
        font-size: 14px;
    }
</style>