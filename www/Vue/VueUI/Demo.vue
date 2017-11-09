<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vue-ydui Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 引入样式 -->
    <link rel="stylesheet" href="//unpkg.com/vue-ydui/dist/ydui.rem.css">
    <!-- 引入rem自适应类库 -->
    <script src="//unpkg.com/vue-ydui/dist/ydui.flexible.js"></script>
</head>
<body>
<div id="app">
    <yd-button type="primary" @click.native="handleClick">Click Me!</yd-button>
</div>
<!-- 引入 Vue -->
<script src="//unpkg.com/vue"></script>
<!-- 引入组件库 -->
<script src="//unpkg.com/vue-ydui/dist/ydui.js"></script>
<script>
    new Vue({
        el: '#app',
        methods: {
            handleClick: function () {
                this.$dialog.alert({mes: 'Hello World!'});
            }
        }
    })
</script>
</body>
</html>