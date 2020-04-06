<!--col-md-4-->
<template>
    <main role="main" class="background">
        <div class="album py-5">
            <div class="container">
                <div class="row">
                    <div class="mov" v-for="movie in movies" :key="movie.id">
                        <div class="cardc">
                            <img
                                class="card-img-top"
                                :src="movie.image"
                                v-if="movie.image"
                            />
                            <img
                                src="https://via.placeholder.com/200"
                                alt="Placeholder"
                                v-else
                            />
                            <div class="card-body">
                                <div class="card-title">
                                    <h3>
                                        {{ movie.title }}
                                    </h3>
                                </div>
                                <div class="card-category">
                                    {{ movie.category }}
                                </div>
                                <div class="card-button">
                                    <button class="btn btn-outline-info btn-sm">
                                        <img src="/assets/jugar.png" alt="" />
                                        <a
                                            :href="`http://localhost:8000/movie/${movie.id}`"
                                            target="_blank"
                                        >
                                            VER TRAILER
                                        </a>
                                    </button>
                                </div>
                                <div class="btn-admin">
                                    <!-- <button
                                        class="btn btn-sm btn-outline-success"
                                    >
                                        View
                                    </button> -->
                                    <router-link
                                        :to="{
                                            name: 'editFilm',
                                            params: { slug: movie.id },
                                        }"
                                        tag="button"
                                        class="btn btn-sm btn-outline-success"
                                        >Edit</router-link
                                    >
                                    <button
                                        type="button"
                                        class="btn btn-sm btn-outline-danger"
                                        @click="deleteMovie(movie.id)"
                                    >
                                        Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                        <hr />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-center">
                                <li
                                    class="page-item"
                                    :class="[
                                        { disabled: !pagination.prev_page_url },
                                    ]"
                                >
                                    <span
                                        @click="
                                            getMovies(pagination.prev_page_url)
                                        "
                                        class="page-link"
                                        >Previous</span
                                    >
                                </li>
                                <li
                                    class="page-item"
                                    :class="{
                                        active: pagination.current_page == page,
                                    }"
                                    v-for="page in pages"
                                    :key="page"
                                >
                                    <span
                                        class="page-link"
                                        @click="
                                            getMovies(
                                                fetch_url +
                                                    'api/movies?page=' +
                                                    page
                                            )
                                        "
                                        >{{ page }}</span
                                    >
                                </li>
                                <li
                                    class="page-item"
                                    :class="[
                                        { disabled: !pagination.next_page_url },
                                    ]"
                                >
                                    <span
                                        @click="
                                            getMovies(pagination.next_page_url)
                                        "
                                        class="page-link"
                                        >Next</span
                                    >
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>
<script>
import axios from "axios";
export default {
    props: ["title"],
    data() {
        return {
            movies: [],
            pagination: {},
            fetch_url: "http://localhost:8000",
        };
    },
    created: function () {
        this.getMovies();
    },
    methods: {
        getMovies: function () {
            var urlmovie = "api/movies";
            console.log(urlmovie);
            axios.get(urlmovie).then((response) => {
                this.movies = response.data;
                // this.movies.makePginate(res.data.meta,res.data.links);
            });
        },
        makePginate(meta, links) {
            let pagination = {
                current_page: meta.current_page,
                last_page: meta.last_page,
                next_page_url: links.next,
                prev_page_url: links.prev,
            };
            this.pagination = pagination;
        },
        deleteMovie(movie_id) {
            if (confirm("Are you sure")) {
                axios
                    .delete("http://localhost:8000/api/movie/" + movie_id)
                    .then((res) => {
                        this.movies.splice(this.movies.indexOf(movie_id), 1);
                        alert("deleted successfully");
                        console.log(res.data.data);
                        this.getMovies();
                    })
                    .catch((err) => {
                        console.log(err);
                    });
            }
        },
    },
    computed: {
        pages() {
            let vm = this;
            let pages = [];
            for (let i = 1; i <= vm.pagination.last_page; i++) {
                pages.push(i);
            }
            return pages;
        },
    },
    filters: {
        truncate: (text, length, suffix) => {
            if (!text) return "";
            text = text.toString();
            return text.substring(0, length) + suffix;
        },
    },
};
</script>

<style scoped>
.main,
.album {
    background-color: #1e1b26;
}

hr {
    background-color: #242e37;
}

.page-item.active .page-link {
    background: #55595c;
}
.page-link {
    color: #55595c;
}
.box-movie {
    background-color: #212529;
}
.mov .cardc {
    display: inline-block;
}

.card-button img {
    height: 10px;
    width: 10px;
}

.mov {
    background-color: #1d1a26;
    color: #fff;
}

.card-category {
    color: #756a6a;
    margin: -15px 0 20px 0;
}

.card-button a {
    font-size: 13px;
    text-decoration: none;
}

.card-img-top {
    margin: 20px 0 0 20px;
    height: 340px;
    width: 240px;
    border-radius: 3px;
}
</style>
