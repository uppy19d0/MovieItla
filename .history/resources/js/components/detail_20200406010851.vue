<template>
    <div class="container">
        <div class="row">
            <div class="aja col-md-12 shadow p-3 mb-5">
                <iframe
                    width="1100"
                    height="500"
                    :src="movie.link_trailer"
                    frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                ></iframe>
            </div>

            <div class="contenido row">
                <div class="img">
                    <img
                        class="img-top"
                        :src="movie.image"
                        v-if="movie.image"
                    />
                </div>
                <div class="this col-md-7">
                    <h1 class="shadow p-3 mb-5">
                        {{ this.movie.title }}
                    </h1>
                    <hr />
                    <h4>Descripción</h4>
                    <p>{{ movie.description }}</p>
                    <div class="row">
                        <div class="col-md-3">
                            <span class="meta-title badge badge-pill badge-info"
                                >Release Date:</span
                            ><br />
                            <span class="meta-text">{{ movie.launcher }}</span>
                        </div>
                        <div class="col-md-7">
                            <span class="meta-title badge badge-pill badge-info"
                                >Category:</span
                            >
                            <br />
                            <span class="meta-text">{{ movie.category }}</span>
                        </div>
                        <div class="col-md-3">
                            <span class="meta-title badge badge-pill badge-info"
                                >Rating:</span
                            ><br />
                            <span class="meta-text">{{ movie.rating }}</span>
                        </div>
                        <div class="col-md-3">
                            <span class="meta-title badge badge-pill badge-info"
                                >Cast:</span
                            ><br />
                            <span class="meta-text">{{ movie.cast }}</span>
                        </div>
                    </div>
                    <hr />
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
    height: 800px;
    width: 2900px;
    color: white;
}

.contenido {
    background-color: #2e1b26;
    width: 2000px;
}

.aja {
    margin-top: 30px;
    background-color: #201d27;
}

.row img {
    margin-left: 30px;
    margin-bottom: 100px;
    height: 400px;
    width: 300px;
}

.img,
.this {
    display: inline;
}

.this {
    margin-top: 40px;
    margin-left: 100px;
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
