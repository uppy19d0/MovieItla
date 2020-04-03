import Vue from 'vue'
import VueFire from 'vuefire'
import VueRouter from 'vue-router'
import NProgress from 'nprogress'
import App from './components/app.vue'
// import detail from 'resources\js\components\detail.vue'
// import EditBook from './components/EditBook.vue'
// import ListBook from './components/cre.vue'
import details from './components/details.vue'
import '../node_modules/nprogress/nprogress.css'
Vue.use(VueRouter)
Vue.config.productionTip = false
const routes = [{
    name: 'Home',
    path: '/nose',
    component: details
        // }, {
        //     name: 'Add',
        //     path: '/add',
        //     component: AddBook
        // }, {
        //     name: 'Edit',
        //     path: '/edit/:id',
        //     component: EditBook
        // }, {
        //     name: 'List',
        //     path: '/index',
        //     component: ListBook
}, ];
const router = new VueRouter({ mode: 'history', routes: routes });
router.beforeResolve((to, from, next) => {
    if(to.name) {
        NProgress.start()
    }
    next()
})
router.afterEach(() => {
    NProgress.done()
})
new Vue({
    render: h => h(App),
    router
}).$mount('#app')