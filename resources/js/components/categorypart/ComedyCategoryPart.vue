<!--  -->
<template>
<div>

    <category-part-nav :head = 'title'></category-part-nav>
    <category-part-content></category-part-content>
</div>
</template>

<script>
// 各个分类板块的不同标题实现思路：各个分类板块有自己的组件，在里面定义不同的title，传入categorynav中进行使用即可
import CategoryPartContent from './CategoryPartContent'
import CategoryPartNav from './CategoryPartNav'
export default {
data() {
return {

    title:'喜剧'
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