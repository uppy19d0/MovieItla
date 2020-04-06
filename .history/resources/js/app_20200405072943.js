require("./bootstrap");
window.Vue = require("vue");
// import StarRating from "vue-star-rating";
// Vue.component("vue-stars", StarRating.default);
Vue.component("create-component", require("./components/create.vue").default);
Vue.component("header-component", require("./components/header.vue").default);
Vue.component("movies-component", require("./components/movies.vue").default);
Vue.component("details-component", require("./components/detail.vue").default);
Vue.component("update-component", require("./components/update.vue").default);
Vue.component(
    "adminmovies-component",
    require("./components/Auth/adminmovies.vue").default
);
Vue.component("app-component", require("./components/app.vue").default);
Vue.component("footer-component", require("./components/app.vue").default);
const app = new Vue({
    el: "#app",
});
