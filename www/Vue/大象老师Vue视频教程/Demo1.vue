<template id="tp1">
   <div>
       <h1>Hello world{{msg}}</h1>
   </div>
</template>

<script>
    /*Vue.component("child",{
      template:"<div>abcd</div>"
    })*/
    //导出一个模块
    export default{
        data:function () {
            return{
                msg:"消息测试"
            }
        }
    }
</script>

<style>
    h1{
        color: red;
    }
</style>