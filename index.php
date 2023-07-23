<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>HP ToDo List JSON</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65' crossorigin='anonymous'>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body class="bg-dark">
    <div id="app">
        <div class="container">
            <h1 class="text-light text-center my-5">TO DO LIST php json</h1>
            <div class="d-flex flex-column gap-3">
                <div class="input-group">
                    <input type="text" class="form-control fs-4 py-3" id="addTaskInput" placeholder="Inserisci elemento..." v-model="inputTextTask" @keyup.enter="addTask(inputTextTask)">
                    <button class="btn btn-success fs-3 px-4" @click="addTask(inputTextTask)">AGGIUNGI</button>
                </div>
                <div class="d-flex flex-column gap-1 fs-4 rounded shadow overflow-hidden">
                    <div v-for="(toDo, index) in toDoList" class="bg-light p-3 d-flex justify-content-between align-items-center">
                        <p class="m-0 fs-4" :class="{'text-decoration-line-through' : toDo.did}" @click="modifyTask('sign', index)">
                            {{ toDo.text }}
                        </p>
                        <button class="btn btn-danger fs-3" @click="modifyTask('delete', index)"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./main.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4' crossorigin='anonymous'></script>
</body>

</html>