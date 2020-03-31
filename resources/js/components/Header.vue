<template>
    <div class="color">
        <div class="content">
            <img class="logo" src="https://image.flaticon.com/icons/svg/68/68207.svg" alt="" />
            <div class="title m-b-md">
                {{ title }} <br />
                {{ secondt }}
            </div>
            <div class="links">
                <a href="#">Catálogo</a>
                <a href="http://localhost:8000/api/documentation"
                    >Documentation Api</a
                >
                <a href="#">Contacto</a>
                <a href="http://localhost:8000/admin">Admin</a>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ["title", "secondt"]
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css?family=Karla|Pirata+One&display=swap");

.title,
.logo {
    display: inline;
    
}

.title,
.links {
    display: inline-block;
    vertical-align: middle;
}

.title {
    font-size: 40px;
    font-family: "Pirata One", cursive;
    margin: 0 400px 0 0px;
    padding-left: 10px;
}

.logo {
    height: 64px;
    width: 64px;
    
}

.links > a {
    color: #000;
    padding: 0 25px;
    font-size: 20px;
    font-weight: 200;
    text-decoration: none;
    font-family: "Karla", sans-serif;
}

.m-b-md {
    margin-bottom: 30px;
}

* {
    margin: 0px;
    padding: 0px;
}
</style>
