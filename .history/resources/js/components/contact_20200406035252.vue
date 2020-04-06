<template>
<div class="container">
    <div class="all">
        <div class="formulario">
            <form @submit.prevent="submit">
                <div>
                    <label for="nombre">Nombre</label><br />
                    <input
                        class="campo"
                        type="text"
                        name="Nombre"
                        id="nombre"
                        v-model="fields.name"
                        placeholder="Ej:Maria"
                    />
                </div>

                <div>
                    <label for="direc">Direccion</label><br />
                    <input
                        class="campo"
                        type="text"
                        name="Direccion"
                        id="direc"
                        placeholder="Ej: calle lugar #00 Sector Lugar"
                    />
                </div>

                <div>
                    <label for="telef">Telefono</label><br />
                    <input
                        class="campo"
                        type="tel"
                        name="Telefono"
                        id="telef"
                        placeholder="ej: 809-000-0000"
                    />
                </div>

                <div>
                    <label for="email">E-mail</label><br />
                    <input
                        class="campo"
                        type="email"
                        name="Email"
                        id="email"
                        placeholder="ej: correo@gmail.com"
                    />
                </div>

                <div>
                    <label for="com">Comentarios</label><br />
                    <textarea
                        class="campo"
                        name="Comentarios"
                        id="com"
                        rows="10"
                        cols="30"
                        placeholder="Escribe aqui tu comentario"
                    ></textarea>
                </div>

               <button type="submit" class="btn btn-primary">Send message</button>
            </form>
        </div>
        <div class="container">
        <div class="mapa">
            <h4> <kbd>Nuestra ubicacion </kbd></h4>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30273.451692760507!2d-69.95642808980402!3d18.47543788323274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf89e1db000001%3A0x2cfc83dbd085981d!2sPlaza%20Central!5e0!3m2!1ses-419!2sdo!4v1586096297124!5m2!1ses-419!2sdo"
                width="600"
                height="300"
                frameborder="0"
                style="border: 0;"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
            ></iframe>
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
