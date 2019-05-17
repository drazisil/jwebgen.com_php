import Vue from 'vue'
import VueRouter from 'vue-router'
import App from './views/App.vue'
import Index from './views/Index.vue'
import Lookup from './views/Lookup.vue'
import VS2 from 'vue-script2'

Vue.use(VS2)

Vue.use(VueRouter)

// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.
const routes = [
  { path: '/', component: Index },
  { path: '/lookup', component: Lookup },
]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
  routes, // short for `routes: routes`
})

// 4. Create and mount the root instance.
// Make sure to inject the router with the router option to make the
// whole app router-aware.
var app = new Vue({
  el: '#app',
  components: {
    App,
  },
  router,
  template: '<App/>',
})
// Now the app has started!
