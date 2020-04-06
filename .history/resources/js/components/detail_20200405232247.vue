<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <iframe
                    width="600"
                    height="400"
                    :src="movie.link_trailer"
                    frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                ></iframe>
                <img
                    class="card-img-top"
                    :src="movie.image"
                    v-if="movie.image"
                />
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ this.movie.title }}</h2>
                        <hr />
                        <div class="row">
                            <div class="col-md-3">
                                <span class="meta-title">Release Date:</span>
                                <span class="meta-text">{{
                                    movie.launcher
                                }}</span>
                            </div>
                            <div class="col-md-3">
                                <span class="meta-title">Category:</span>
                                <span class="meta-text">{{
                                    movie.category
                                }}</span>
                            </div>
                            <div class="col-md-3">
                                <span class="meta-title">Rating:</span>
                                <span class="meta-text">{{
                                    movie.rating
                                }}</span>
                            </div>
                            <div class="col-md-3">
                                <span class="meta-title">Cast:</span>
                                <span class="meta-text">{{ movie.cast }}</span>
                            </div>
                        </div>
                        <hr />
                        <p>{{ movie.description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";
export default {
    data() {
        return {
            movie: [],
            errors: [],
        };
    },
    created() {
        let id = window.location.href.slice(28, 30);
        this.fetchFilm(id);
    },
    methods: {
        fetchFilm(id) {
            axios.get("http://localhost:8000/api/movie/" + id).then((res) => {
                console.log(res.data);
                console.log(this.movie.link_trailer, "youtube");
                this.movie = res.data;
            });
        },
    },
};
</script>

<style scoped>
.container {
    background-color: #1e1b26;
    margin-left: 250px;
    height: 800px;
    width: 2900px;
    color: white;
}

.card {
    box-shadow: rgba(0, 0, 0, 0.3) 1px 1px 20px;
}
.commenter-name {
    font-weight: bold;
}
span.moment-ago {
    font-style: italic;
}
</style>
