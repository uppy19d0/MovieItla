<template>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <h3>Edit Film</h3>
          <hr>
          <form @submit.prevent="saveFilm">
            <div class="form-group">
              <label for="Film Name">Movie Title</label>
              <input
                type="text"
                class="form-control"
                :class="errors.title ? 'is-invalid' : '' "
                placeholder="Film Name"
                v-model="movie.title"
              >
              <div class="invalid-feedback" v-if="errors.title">{{errors.title[0]}}</div>
            </div>

            <!-- <div class="form-group">
              <label for="Slug">Movie Slug</label>
              <input
                type="text"
                class="form-control"
                :class="errors.slug ? 'is-invalid' : '' "
                placeholder="Slug"
                v-model="film.slug"
                disabled
              >
              <div class="invalid-feedback" v-if="errors.slug">{{errors.slug[0]}}</div>
            </div> -->

            <div class="form-group">
              <label for="Movie Description">Movie Description</label>
              <textarea
                type="text"
                class="form-control"
                :class="errors.description ? 'is-invalid' : '' "
                placeholder="Movie Desription"
                v-model="movie.description"
                rows="6"
              ></textarea>
              <div class="invalid-feedback" v-if="errors.description">{{errors.description[0]}}</div>
            </div>

            <div class="form-group">
              <label for="Genre">Cast</label>
              <input
                type="text"
                class="form-control"
                :class="errors.cast ? 'is-invalid' : '' "
                placeholder="Genre"
                v-model="movie.cast"
              >
              <div class="invalid-feedback" v-if="errors.cast">{{errors.cast[0]}}</div>
            </div>

            <div class="form-group">
              <label for="Release Date">Launcher Date</label>
              <input
                type="date"
                class="form-control"
                :class="errors.launcher ? 'is-invalid' : '' "
                placeholder="Release Date"
                v-model="movie.launcher"
              >
              <div class="invalid-feedback" v-if="errors.launcher">{{errors.launcher[0]}}</div>
            </div>

            <div class="form-group">
              <label for="Ticket Price">Movie Trailer</label>
              <input
                type="text"
                class="form-control"
                :class="errors.link_trailer ? 'is-invalid' : '' "
                placeholder="Release Date"
                v-model="movie.link_trailer"
                @keydown="errors.link_trailer = ''"
              >
              <div class="invalid-feedback" v-if="errors.link_trailer">{{errors.link_trailer[0]}}</div>
            </div>

            <div class="form-group">
              <label for="Movie Rating">Movie Rating</label>
              <select
                class="form-control"
                :class="errors.rating ? 'is-invalid' : '' "
                name="rating"
                v-model="movie.rating"
              >
                <option value="movie.rating" selected v-if="movie.rating">{{movie.rating}}</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <div class="invalid-feedback" v-if="errors.rating">{{errors.rating[0]}}</div>
            </div>

            <!-- <div class="form-group">
              <label for="Country">Country</label>
              <input
                type="text"
                class="form-control"
                :class="errors.country ? 'is-invalid' : '' "
                placeholder="Country"
                v-model="film.country"
              >
              <div class="invalid-feedback" v-if="errors.country">{{errors.country[0]}}</div>
            </div> -->
            <div class="form-group">
              <label for>Movie Photo</label>
              <input type="file" v-on:change="onImageChange" class="form-control">
              <div
                :class="errors.image ? 'is-invalid' : '' "
                v-if="errors.image"
              >{{errors.image[0]}}</div>
            </div>
            <button class="btn btn-danger float-right">Save</button>
          </form>
          <div>
            <img v-if="temp_photo" :src="temp_photo" class="img-responsive film-image">
            <img v-else :src="'/images/'+movie.image" class="img-responsive film-image">
          </div>
          <div class="alert alert-success" v-if="status === 200">Movie updated successfully</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
export default {
  data() {
    return {
      movie: [],
      temp_photo: "",
      errors: [],
      status: ""
    };
  },
  created() {
    let id =window.location.href.slice(28,30)
    this.fetchFilm(id);
  },
  methods: {
    fetchFilm(id) {
      axios
        .get("http://localhost:8000/api/movi/"+ id)
        .then(res => {
          //console.log(res);
          this.movie = res.data;
        });
    },
    onImageChange(e) {
      let files = e.target.files || e.dataTransfer.files;
      if (!files.length) {
        return;
      }
      this.createImage(files[0]);
    },
    createImage(file) {
      let reader = new FileReader();
      reader.onload = e => {
        this.temp_photo = e.target.result;
      };
      reader.readAsDataURL(file);
    },
    saveFilm() {
      console.log(this.movie);
      axios
        .put("http://localhost:8000/api/movie/" + this.movie.id,this.movie)
        .then(res => {
          //console.log(res);
          this.status = res.status;
          console.log(this.status);
        })
        .catch(err => {
          console.log(err);
          this.errors = err.data.errors;
        });
    }
  },
  watch: {
    temp_photo: function() {
      this.movie.image = this.temp_photo;
      //return "/images/" + temp_photo;
    }
  }
};
</script>