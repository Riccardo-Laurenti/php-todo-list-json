const { createApp } = Vue;

createApp({
    data() {
        return {
            toDoList: undefined,
            inputTextTask: ""
        }
    },
    mounted() {
        this.updateToDoList();
    },
    methods: {
        updateToDoList() {
            axios.get('api.php')
                .then(response => {
                    this.toDoList = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        modifyTask(action, id) {
            const data = {
                taskId: id,
                action: action
            }

            axios.post('api.php', data, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(response => {
                    this.toDoList = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        addTask(taskToAdd){
            const data = {
                taskText: taskToAdd,
                action: 'add'
            }

            axios.post('api.php', data, {
                headers: {
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then(response => {
                    this.toDoList = response.data;
                    this.inputTextTask = "";
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
}).mount('#app');
