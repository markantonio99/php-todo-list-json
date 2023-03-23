<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.4/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>Document</title>
</head>
<body>
      
  
<div id="app">

<div class="container">
    <input type="text" v-model="newTodo" @keyup.enter="createTodo" placeholder="inserisci cose da fare">
</div>

<div class="container">
    <ul>
        <li class="items-group" v-for="todo in todos">{{todo.text}}</li>
    </ul>
</div>




  <script src="app.js"></script>
</body>
</html>