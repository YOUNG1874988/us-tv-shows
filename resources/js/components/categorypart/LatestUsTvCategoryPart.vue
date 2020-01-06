<!--  -->
<template>
<div>

    <category-part-nav :head = 'title'></category-part-nav>
    <category-part-content></category-part-content>
</div>
</template>

<script>
// title切换实现思路，主要是在blade中如何使用vue 组件
import CategoryPartContent from './CategoryPartContent'
import CategoryPartNav from './CategoryPartNav'
export default {
data() {
return {

    title:'最新美剧'
}
},
methods:{
},
components:{
    CategoryPartContent,
    CategoryPartNav
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

</style>