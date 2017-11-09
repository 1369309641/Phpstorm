import Vue from 'vue'
import App from './App.vue'
import Header from './head.vue'
new Vue({
  el: '#app',
  render: h => h(App)
})

new Vue({
    el: '#header',
    render: h => h(App)
})