<template>
    <div id="app" class="screen">
        <div class="card-header"><h3>Solicitud De Pelicula</h3></div>
        <form @submit.prevent="submit">
            <div class="form-group">
                <label for="name">Tu Nombre y Apellido</label>
                <input
                    type="text"
                    class="form-control"
                    name="name"
                    id="name"
                    v-model="fields.name"
                    required
                />
                <div v-if="errors && errors.name" class="text-danger">
                    {{ errors.name[0] }}
                </div>
            </div>

            <div class="form-group">
                <label for="name">Nombre de la Pelicula</label>
                <input
                    type="text"
                    class="form-control"
                    name="pelicula"
                    id="pelicula"
                    v-model="fields.pelicula"
                    required
                />
                <div v-if="errors && errors.pelicula" class="text-danger">
                    {{ errors.pelicula[0] }}
                </div>
            </div>

            <div class="form-group">
                <label for="message">Description</label>
                <textarea
                    class="form-control"
                    id="message"
                    name="message"
                    rows="5"
                    v-model="fields.message"
                    required
                ></textarea>
                <div v-if="errors && errors.message" class="text-danger">
                    {{ errors.message[0] }}
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Send message</button>
        </form>
        <div class="container">
            <mapa-component></mapa-component>
            <div class="rrss card shadow p-3 mb-5">
                <h4><kbd>Siguenos en: </kbd></h4>
                <div class="botones card-body">
                    <a class="btn" href="#">
                        Instagram:
                        <img src="/assets/instagram.png" alt="" />
                    </a>
                    <a class="btn" href="#">
                        Twitter:
                        <img src="/assets/twitter.png" alt="" />
                    </a>
                    <a class="btn" href="#">
                        Youtube:
                        <img src="/assets/youtube.png" alt="" />
                    </a>
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
            errors: {}
        };
    },
    methods: {
        submit() {
            this.errors = {};
            axios
                .post("/send-main", this.fields)
                .then(response => {
                    alert("Mensaje de solictud para colocar nueva pelicula!");
                })
                .catch(error => {
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }
                });
        }
    }
};
</script>

<style scoped>
/* .formulario {
    display: inline;
} */
/* .mapa {
    /* justify-content: flex-end; 
    margin-right: 100px;
} */
.card-header {
    color: cornsilk;
}
.screen {
    margin-left: 280px;
}
form {
    margin: 90px 0 0 60px;
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

.container {
    margin-left: 550px;
    margin-top: -485px;
    margin-bottom: 200px;
}

.rrss {
    margin-left: 15px;
    background-color: #222425;
    width: 601px;
}

.botones {
    background-color: white;
    border-radius: 5px;
}

.botones img {
    padding-left: 10px;
}
</style>
