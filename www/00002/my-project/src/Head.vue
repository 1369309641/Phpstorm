<template>
    <div id="header">
       <ul>
           <li><a href="index.html">首页</a></li>
           <li><a href="about.html">关于我们</a></li>
           <li><a href="product.html">产品中心</a></li>
       </ul>

        <ol>
            <li>{{msg}}</li>
        </ol>
    </div>
</template>

<script>
    export default {
        name: 'app',
        data () {
            return {
                /* msg: 'Welcome to Your Vue.js App'*/
                msg:'我是网站头部...'
            }
        }
    }
</script>

<style>
#header a{
  color: red;
}
</style>
