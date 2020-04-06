<template>
    <form
  id="app"
  @submit="checkForm"
  action="https://vuejs.org/"
  method="post"
>

  <p v-if="errors.length">
    <b>Por favor, corrija el(los) siguiente(s) error(es):</b>
    <ul>
      <li v-for="error in errors">{{ error }}</li>
    </ul>
  </p>

  <p>
    <label for="name">Nombre</label>
    <input
      id="name"
      v-model="name"
      type="text"
      name="name"
    >
  </p>

  <p>
    <label for="age">Edad</label>
    <input
      id="age"
      v-model="age"
      type="number"
      name="age"
      min="0">
  </p>

  <p>
    <label for="movie">Película favorita</label>
    <select
      id="movie"
      v-model="movie"
      name="movie"
    >
      <option>Star Wars</option>
      <option>Vanilla Sky</option>
      <option>Atomic Blonde</option>
    </select>
  </p>

  <p>
    <input
      type="submit"
      value="Enviar"
    >
  </p>

</form>
</template>

<script>
export default {};
</script>

<style scoped>
.formulario,
.mapa {
    display: inline;
}

form {
    margin: 90px auto;
    padding: 50px;
    color: black;
    width: 300px;
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
</style>
