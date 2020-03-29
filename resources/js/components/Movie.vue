 <template>
  <main role="main">
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4" v-for="movie in movies" :key="movie.id">
            <div class="card mb-2">
              <img class="card-img-top" :src="movie.image" height="500px" width="200px" v-if="movie.image">
              <img src="https://via.placeholder.com/200" alt="Placeholder" v-else>
              <div class="card-body">
                <h4>{{ movie.title | truncate(25, '...') }}</h4>
                <div class="container">
                    <div class="card">
                       {{movie.launcher}}
                    </div>
                    <div class="card">
                     {{movie.category}}
                    </div>
                    <div class="card">
                     {{movie.description}}
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <nav aria-label="...">
              <ul class="pagination justify-content-center">
                <li class="page-item" :class="[{disabled: !pagination.prev_page_url}]">
                  <span @click="getMovies(pagination.prev_page_url)" class="page-link">Previous</span>
                </li>
                <li
                  class="page-item"
                  :class="{active: pagination.current_page == page}"
                  v-for="page in pages"
                  :key="page"
                >
                  <span
                    class="page-link"
                    @click="getMovies(fetch_url + 'api/film?page='+page)"
                  >{{page}}</span>
                </li>
                <li class="page-item" :class="[{disabled: !pagination.next_page_url}]">
                  <span @click="getMovies(pagination.next_page_url)" class="page-link">Next</span>
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
        import axios from 'axios'
        export default {
            data(){
                return {
                    movies :[],
                    pagination: {},
                    fetch_url: process.env.MIX_APP_URL
                    }
            },
            created:function(){
                this.getMovies();
            },
            methods:{
                getMovies:function(){
                    var urlmovie = 'api/movies'
                    console.log(urlmovie)
                    axios.get(urlmovie).then(response =>{
                        this.movies = response.data
                        console.log(response.data,"waooo");
                    });
                }
            },
    makePginate(meta, links) {
      let pagination = {
        current_page: meta.current_page,
        last_page: meta.last_page,
        next_page_url: links.next,
        prev_page_url: links.prev
      };
      this.pagination = pagination;
    },
    deleteFilm(movie_id) {
      if (confirm("Are you sure")) {
        api
          .call("delete", this.fetch_url + "api/movie/" + movie_id)
          .then(res => {
            //console.log(res);
            this.films.splice(this.movies.indexOf(movie_id), 1);
            alert(res.data.data.title + "deleted successfully");
            this.getMovie();
          })
          .catch(err => {
            console.log(err);
          });
      }
    },
  computed: {
    pages() {
      let vm = this;
      let pages = [];
      for (let i = 1; i <= vm.pagination.last_page; i++) {
        pages.push(i);
      }
      return pages;
    }
  },
  filters: {
    truncate: (text, length, suffix) => {
      if (!text) return "";
      text = text.toString();
      return text.substring(0, length) + suffix;
    }
  }
        }
  
    </script>

<style scoped>
.page-item.active .page-link {
  background: #55595c;
  border-color: #212529;
}
.page-link {
  color: #55595c;
}
.box-movie{
    background-color: #212529;
}



</style>
