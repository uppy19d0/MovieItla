<template>
    <div class="all">
        <div class="formulario">
            <form action="" method="post">
                <div>
                    <label for="nombre">Nombre</label><br />
                    <input
                        class="campo"
                        type="text"
                        name="Nombre"
                        id="nombre"
                        placeholder="ej. Maria"
                    />
                </div>

                <div>
                    <label for="direc">Direccion</label><br />
                    <input
                        class="campo"
                        type="text"
                        name="Direccion"
                        id="direc"
                        placeholder="ej. calle lugar #00 Sector Lugar"
                    />
                </div>

                <div>
                    <label for="telef">Telefono</label><br />
                    <input
                        class="campo"
                        type="tel"
                        name="Telefono"
                        id="telef"
                        placeholder="ej. 809-000-0000"
                    />
                </div>

                <div>
                    <label for="email">E-mail</label><br />
                    <input
                        class="campo"
                        type="email"
                        name="Email"
                        id="email"
                        placeholder="ej. correo@gmail.com"
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

                <div>
                    <input
                        class="btn btn-primary"
                        type="submit"
                        value="Enviar datos"
                    />
                </div>
            </form>
        <!-- </div> -->

        <div class="mapa">
            <h4>Nuestra ubicacion</h4>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30273.451692760507!2d-69.95642808980402!3d18.47543788323274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf89e1db000001%3A0x2cfc83dbd085981d!2sPlaza%20Central!5e0!3m2!1ses-419!2sdo!4v1586096297124!5m2!1ses-419!2sdo"
                width="400"
                height="300"
                frameborder="0"
                style="border: 0;"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
            ></iframe>
        </div>
    </div>
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
