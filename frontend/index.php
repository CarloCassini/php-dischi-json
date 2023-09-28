<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- aggiungo bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"
        defer>
        </script>
    <!-- add vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js" defer></script>
    <!-- add vue -->
    <script src="./main.js" defer> </script>



</head>

<body>
    <div class="container mt-5">

        <!-- dove avviene la magia -->
        <div id="app">

            <div class="d-flex flex-wrap">


                <div v-for="(nome, index) in discList">
                    <div class="card m-3" style="width: 18rem;">
                        <img :src="discList[index].poster" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{discList[index].title}}</h5>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

</body>

</html>