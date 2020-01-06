<!--  -->
<template>
<div class="category-nav">
<div class="category-title">{{head}}</div>
<div class="category-more">更多>></div>

</div>
</template>

<script>
    export default {
        data() {
            return {

            }
        },
        props:['head'],
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
    
    .category-nav {
        height: 50px;
        background-color: orange;
        margin-bottom: 10px;
        position: relative;
        border-radius: 5px;
    }
    
    .category-title {
        position: absolute;
        left: 0;
        text-align: center;
        line-height: 50px;
        color: black;
        font-size: 24px;
        font-weight: bold;
        text-indent: 5px;
    }
    
    .category-more {
        position: absolute;
        right: 5px;
        text-align: center;
        line-height: 50px;
        color: black;
    }
</style>