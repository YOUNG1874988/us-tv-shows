<!--  -->
<template>
<div class="bigbox">
    <category-part-content-item 
    v-for="(item,index) in movies" 
    :movie-item="item"
    :key="index"></category-part-content-item>
</div>
</template>

<script>
    // 导入分类板块内容区域各个具体影片
    import CategoryPartContentItem from './CategoryPartContentItem'
    export default {
        data() {
            return {
                // movies存放该板块的所有节目
                movies: [{
                    showtitle: '《叉叉问了一个问题 第一季》全集/Forky Asks a Question Season 1在线观看',
                    link: 'https://91mjw.com/video/2763.htm',
                    image: 'https://imgcdn.91pic.org/img/poster/5c666561e537d337.jpg',

                    title: '叉叉问了一个问题 第一季',
                    score: '9.1分',
                    state: '更新8集',
                    updatetag: '2019-12-21 更新'
                }, {
                    showtitle: '《叉叉问了一个问题 第一季》全集/Forky Asks a Question Season 1在线观看',
                    link: 'https://91mjw.com/video/2763.htm',
                    image: 'https://imgcdn.91pic.org/img/poster/5c666561e537d337.jpg',
                    title: '问了一个问题 第一季',
                    score: '9.1分',
                    state: '更新8集',
                    updatetag: '2019-12-21 更新'
                }, {
                    showtitle: '《叉叉问了一个问题 第一季》全集/Forky Asks a Question Season 1在线观看',
                    link: 'https://91mjw.com/video/2763.htm',
                    image: 'https://imgcdn.91pic.org/img/poster/5c666561e537d337.jpg',
                    title: '叉叉问了一个问题 第一季',

                    score: '9.1分',
                    state: '更新8集',
                    updatetag: '2019-12-21 更新'
                }, {
                    showtitle: '《叉叉问了一个问题 第一季》全集/Forky Asks a Question Season 1在线观看',
                    link: 'https://91mjw.com/video/2763.htm',
                    image: 'https://imgcdn.91pic.org/img/poster/5c666561e537d337.jpg',
                    title: '叉叉问了一个问题 第一季',

                    score: '9.1分',
                    state: '更新8集',
                    updatetag: '2019-12-21 更新'
                }, {
                    showtitle: '《叉叉问了一个问题 第一季》全集/Forky Asks a Question Season 1在线观看',
                    link: 'https://91mjw.com/video/2763.htm',
                    image: 'https://imgcdn.91pic.org/img/poster/5c666561e537d337.jpg',
                    title: '叉叉问了一个问题 第一季',

                    score: '9.1分',
                    state: '更新8集',
                    updatetag: '2019-12-21 更新'
                }, {
                    showtitle: '《叉叉问了一个问题 第一季》全集/Forky Asks a Question Season 1在线观看',
                    link: 'https://91mjw.com/video/2763.htm',
                    image: 'https://imgcdn.91pic.org/img/poster/5c666561e537d337.jpg',
                    title: '叉叉问了一个问题 第一季',

                    score: '9.1分',
                    state: '更新8集',
                    updatetag: '2019-12-21 更新'
                }, {
                    showtitle: '《叉叉问了一个问题 第一季》全集/Forky Asks a Question Season 1在线观看',
                    link: 'https://91mjw.com/video/2763.htm',
                    image: 'https://imgcdn.91pic.org/img/poster/5c666561e537d337.jpg',
                    title: '叉叉问了一个问题 第一季',

                    score: '9.1分',
                    state: '更新8集',
                    updatetag: '2019-12-21 更新'
                }, {
                    showtitle: '《叉叉问了一个问题 第一季》全集/Forky Asks a Question Season 1在线观看',
                    link: 'https://91mjw.com/video/2763.htm',
                    image: 'https://imgcdn.91pic.org/img/poster/5c666561e537d337.jpg',
                    title: '叉叉问了一个问题 第一季',

                    score: '9.1分',
                    state: '更新8集',
                    updatetag: '2019-12-21 更新'
                }, {
                    showtitle: '《叉叉问了一个问题 第一季》全集/Forky Asks a Question Season 1在线观看',
                    link: 'https://91mjw.com/video/2763.htm',
                    image: 'https://imgcdn.91pic.org/img/poster/5c666561e537d337.jpg',
                    title: '叉叉问了一个问题 第一季',

                    score: '9.1分',
                    state: '更新8集',
                    updatetag: '2019-12-21 更新'
                }, {
                    showtitle: '《叉叉问了一个问题 第一季》全集/Forky Asks a Question Season 1在线观看',
                    link: 'https://91mjw.com/video/2763.htm',
                    image: 'https://imgcdn.91pic.org/img/poster/5c666561e537d337.jpg',
                    title: '叉叉问了一个问题 第一季',

                    score: '9.1分',
                    state: '更新8集',
                    updatetag: '2019-12-21 更新'
                }, {
                    showtitle: '《叉叉问了一个问题 第一季》全集/Forky Asks a Question Season 1在线观看',
                    link: 'https://91mjw.com/video/2763.htm',
                    image: 'https://imgcdn.91pic.org/img/poster/5c666561e537d337.jpg',
                    title: '叉叉问了一个问题 第一季',

                    score: '9.1分',
                    state: '更新8集',
                    updatetag: '2019-12-21 更新'
                }, {
                    showtitle: '《叉叉问了一个问题 第一季》全集/Forky Asks a Question Season 1在线观看',
                    link: 'https://91mjw.com/video/2763.htm',
                    image: 'https://imgcdn.91pic.org/img/poster/5c666561e537d337.jpg',
                    title: '叉叉问了一个问题 第一季',

                    score: '9.1分',
                    state: '更新8集',
                    updatetag: '2019-12-21 更新'
                }]
            }
        },
        components: {
            CategoryPartContentItem
        },
        //生命周期 - 创建完成（访问当前this实例）
        created() {

        },
        //生命周期 - 挂载完成（访问DOM元素）
        mounted() {

        }
    }
</script>
<style scoped>
    /* @import url(); 引入css类 */
    
    .bigbox {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        padding-bottom: 10px;
    }
</style>