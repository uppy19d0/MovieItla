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
                    <input class="btn" type="submit" value="Enviar datos" />
                </div>
            </form>
        </div>

        <div class="mapa"></div>
    </div>
</template>
<script>
export default {};
</script>
<style scoped></style>
