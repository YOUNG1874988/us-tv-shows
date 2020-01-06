<template>
<!--   当该组件被引用后，下面的wrapper标签就相当于scroll标签，所以当scroll组件被调用后会给scroll标签设置高度，以实现滚动-->
  <div ref="wrapper">
    <div>
      <slot></slot>
    </div>
  </div>
</template>

<script>
    import BScroll from 'better-scroll'
    export default {
        name: "Scroll",
        data(){
            return{
                scroll:{}
            }
        },
        props:{
            //在这里设置默认滚动监听类型，其他组件调用滚动时绑定该props，可以做到各个组件拥有的不同滚动类型
            probeType:{
                type:Number,
                default:3
            },
          //设置上拉是否进行加载
          pullUpLoad: {
            type: Boolean,
            default: false
          }

        },

        mounted() {
          //该组件挂载完成20ms后初始化该scroll
          setTimeout(this.__initScroll, 20)
        },
        methods: {
          __initScroll() {
            // 1.初始化BScroll对象
            if (!this.$refs.wrapper) return
            this.scroll = new BScroll(this.$refs.wrapper, {
              probeType: this.probeType,
              click: true,
              pullUpLoad: this.pullUpLoad
            })

            // 2.将监听事件回调
            this.scroll.on('scroll', pos => {
              console.log('正在监听滚动！！')
              this.$emit('scroll', pos)
            })

            // 3.监听上拉到底部
            this.scroll.on('pullingUp', () => {
              console.log('上拉加载');
              this.$emit('pullingUp')
            })
          },
          refresh() {
            this.scroll && this.scroll.refresh && this.scroll.refresh()
          },
          finishPullUp() {
            this.scroll && this.scroll.finishPullUp && this.scroll.finishPullUp()
          },
          scrollTo(x, y, time) {
            this.scroll && this.scroll.scrollTo && this.scroll.scrollTo(x, y, time)
          }

        }
    }
</script>

<style scoped>

</style>
