<template>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img
                        class="card-img-top"
                        alt="Thumbnail [100%x225]"
                        :src="'/images/' + movie.image"
                    />
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>{{ movie.title }}</h2>
                            <hr />
                            <div class="row">
                                <div class="col-md-3">
                                    <span class="meta-title">Laucher :</span>
                                    <span class="meta-text">{{
                                        movie.launcher
                                    }}</span>
                                </div>
                                <div class="col-md-3">
                                    <span class="meta-title">Cate:</span>
                                    <span class="meta-text">{{
                                        movie.category
                                    }}</span>
                                </div>
                                -->
                                <div class="col-md-3">
                                    <span class="meta-title">Link:</span>
                                    <span class="meta-text"
                                        >${{ film.link_url }}</span
                                    >
                                </div>
                            </div>
                            <hr />
                            <p>{{ film.description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import StarRate from "vue-cute-rate";
export default {
    data() {
        return {
            movie: []
        };
    },
    created() {
        let slug = this.$route.params.slug;
        this.fetchFilm(slug);
    },
    methods: {
        fetchFilm(slug) {
            api.call("get", process.env.MIX_APP_URL + "api/movie/" + slug).then(
                res => {
                    this.film = res.data.data;
                    this.rating = true;
                }
            );
        }
    },
    watch: {
        rating: function() {
            return this.rating;
        }
    },
    components: {
        StarRate
    }
};
</script>

<style></style>
