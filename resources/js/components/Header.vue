 <template>
        <div class="color">
            <div class="content">
                <div class="title m-b-md">
                    {{title}}
                </div>
                <div class="links">
                    <a href="">Contacto</a>
                    <a href="">Information</a>
                    <a href="" class="flex-container">Admin</a>
                </div>
            </div>
        </div>
    </template>
    <script>
        export default {
            props:['title']
        }
    </script>
    
    <style scoped>
        html, body {
            background-color: rgb(179, 144, 144);
            color: #044668;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }


        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #830a0a;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        div.color{
            background-color: #568d88;
            border:solid
        }
        *{
        margin: 0px;
        padding: 0px;
         }

    </style>