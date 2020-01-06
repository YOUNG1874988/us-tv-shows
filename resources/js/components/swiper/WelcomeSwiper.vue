<template>
    <swiper>
        <swiper-item v-for="item in banners" v-bind:key="item.id">
            <a :href="item.link">
                <!--                @load表示资源全部加载完成时触发load事件-->
                <img :src="item.image" alt="" @load="imgLoaded">
            </a>
        </swiper-item>

    </swiper>
</template>

<script>
    // <!--    导入轮播图小组件-->
    import {Swiper, SwiperItem} from './index.js'
    //导入轮播图数据请求
    import {getWelcomeSwiper} from "../../../../public/js/theme2/network/index";


    export default {
        name: "WelcomeSwiper",
        data() {
            return {
                isLoad: false,
                //现在就差把轮播图数据请求到之后放到banners里了
                banners: [
                    {
                        //这里的link暂时用其他链接代替后面再修改
                        link: 'https://91mjw.com/video/2778.htm',
                        image: 'https://tva1.sinaimg.cn/large/007UW77jly1g9ywng504yj30p00b4gmj.jpg'
                    },
                    {
                        link: 'https://91mjw.com/video/2729.htm',
                        image: 'https://tva4.sinaimg.cn/large/007UW77jly1g9oj4n0uq2j30p00b4jt7.jpg'
                    },
                    {
                        link: 'https://91mjw.com/video/2628.htm',
                        image: 'https://tva4.sinaimg.cn/large/007UW77jly1g8zty9vlnij30p00b4aam.jpg'
                    },
                    {
                        link: 'https://91mjw.com/video/2625.htm',
                        image: 'https://tva3.sinaimg.cn/large/007UW77jly1g8xhazbu0fj30p00b4418.jpg'
                    },
                    {
                        link: 'https://91mjw.com/video/2609.htm',
                        image: 'https://tva2.sinaimg.cn/large/007UW77jly1g8u9wc4fdyj30p00b4di7.jpg'
                    }
                ]
            }

        },
        components: {
            Swiper,
            SwiperItem
        },
        created() {
            this.getSwiper()
        },
        methods: {
            imgLoaded() {

                if (!this.isLoad) {
                    console.log('images have been loaded!!')
                    // this.$emit('imgLoaded')
                    this.isLoad = true
                }

            },
            getSwiper() {
                getWelcomeSwiper().then(res => {
                    //将请求到的结果给banners
                    this.banners = res
                })
            }
        }
    }
</script>

<style scoped>

</style>
