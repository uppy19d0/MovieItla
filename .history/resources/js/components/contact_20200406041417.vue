<template lang="pug">
<div id="app">
        <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">VuejsFirebase</a>
        </nav>
        <div class="container">
        <div class="row mt-5">
            <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                <h3>Add a New Website</h3>
                </div>
                <div class="card-body">
                <form @submit.prevent="addWebsite">
                    <div class="form-group">
                    <input type="text" class="form-control" v-model="newWebsite.name" placeholder="Name">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" v-model="newWebsite.author" placeholder="Author">
                    </div>
                    <div class="form-group">
                    <input type="text" class="form-control" v-model="newWebsite.url" placeholder="URL">
                    </div>
                    <button type="submit" class="btn btn-primary">
                    Save
                    </button>
                </form>
                </div>
            </div>
            </div>
            <div class="col-sm-8 text-center">
                        <img src="./assets/logo.png" alt="">
            <div class="card">
                <div class="card-header">
                <h3>Websites List</h3>
                </div>
                <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Author</th>
                        <th>Operations</th>
                    </tr>
                    </thead>
                
                </table>
                </div>
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
      fields: {},
      errors: {},
    }
  },
  methods: {
    submit() {
      this.errors = {};
      axios.post('/send-main',this.fields).then(response => {
        alert('Message sent!');
      }).catch(error => {
        if (error.response.status === 422) {
          this.errors = error.response.data.errors || {};
        }
      });
    },
  },
}
</script>

<style scoped>

.formulario{
display: inline;
}
.mapa {
    /* justify-content: flex-end; */
    margin-right: 900px;
}

form {
    margin: 90px auto;
    padding: 50px;
    color: black;
    width: 400px;
    border-radius: 5px;
    background-color: white;
    font-size: 16px;
 
}

.campo {
    margin-top: 7px;
    margin-bottom: 7px;
    border: 0;
    outline: none;
    border-bottom: solid 2px #ccc;
    padding: 9px;
    width: 280px;
}
.container{
    background-color: black;
}
</style>
