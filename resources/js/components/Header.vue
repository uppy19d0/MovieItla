<template>
    <div class="color">
        <div class="content">
            <img
                class="logo"
                src="https://image.flaticon.com/icons/svg/747/747965.svg"
                alt=""
            />
            <div class="title m-b-md">
                {{ title }}
            </div>
            <div class="links">
                <ul>
                    <li>
                        <a href="#">Catálogo</a>
                    </li>
                    <li>
                        <a href="http://localhost:8000/api/documentation"
                            >Documentation Api</a
                        >
                    </li>
                    <li>
                        <a href="#">Contacto</a>
                    </li>
                    <li>
                        <a href="http://localhost:8000/admin">Admin</a>
                    </li>
                </ul>
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
@import url("https://fonts.googleapis.com/css?family=Karla|Oswald&display=swap");

.title,
.logo {
    margin-top: 20px;
    display: inline-block;
}

.title {
    font-size: 40px;
    font-family: "Oswald", sans-serif;
    margin: 0 200px 0 0px;
    padding-left: 10px;
    color: white;
}

.logo {
    height: 64px;
    width: 64px;
}

.links li a {
    margin: 0;
    padding: 0;
    list-style: none;
    color: #000;
    font-size: 20px;
    font-weight: 200;
    text-decoration: none;
    font-family: "Karla", sans-serif;
    color: white;
}

.m-b-md {
    margin-bottom: 30px;
}

* {
    margin: 0px;
    padding: 0px;
}
</style>
