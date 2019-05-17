import Vue from 'vue'
import Hello from './components/Hello.vue'

var app = new Vue({
  el: '#app',
  components: {
    Hello,
  },
  template: '<Hello/>',
})
