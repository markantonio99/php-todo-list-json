const { createApp } = Vue

createApp({
  data() {
    return {
      todos: [],
      newTodo: '',
    }
  },
  methods:{
    fetchTodos(){
        axios.get('server.php')
        .then(res => {
        const { data } = res
        this.todos = data
        })

    },
    createTodo(){

       if(!this.newTodo.trim()){
          return
       }

       let data = {
        todo: this.newTodo.trim(),
       }
       
       axios.post('server.php', data, {
        headers: {
           'content-type': 'multipart/form-data'
        },
       })
        .then((res) => {
            const { data } = res 
            this.todos = data
        })

    },
  },
  mounted(){
      this.fetchTodos()
  },
}).mount('#app')
