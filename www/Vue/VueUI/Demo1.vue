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
<template>
    <div>
        <yd-button type="primary">primary</yd-button>
        <yd-button type="danger">danger</yd-button>
        <yd-button type="warning">warning</yd-button>
        <yd-button type="hollow">hollow</yd-button>
        <yd-button type="disabled" disabled>disabled</yd-button>
    </div>
</template>

<script type="text/babel">
    export default {

    }
</script>
</body>
</html>