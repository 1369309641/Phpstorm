/*Vue.component('alert',);*/
var Alert={
    template:'<button @click="on_click">弹弹弹</button>',
    methods:{
    on_click:function () {
        alert('Yo.') ;
    }
}};
new Vue({
    el:'#seg1',
    components:{
        alert:Alert
    }
});
new Vue({
    el:'#seg2'
})