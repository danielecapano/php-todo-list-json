<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ToDo List</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./css/style.css" />
  </head>
  <body>
    <div class="container" id="app">
      <h1 class="title">TODO LIST</h1>
      <div class="new-task">
        <input
          type="text"
          placeholder="Scrivi qui le cose da fare"
          v-model="newTodo"
          @keyup.enter="storeTodo"
        />
        <button class="btn-add" @click="storeTodo">
          <i class="fa-solid fa-plus"></i>
        </button>
      </div>
      <p :class="classList">Inserire almeno 5 caratteri</p>
      <div class="list-wrapper" v-if="todos.length > 0">
        <ul class="list">
          <li class="item" v-for="(todo, i) in todos">
            <div class="task" :class="todo.done === true ? 'checked' : ''">
              {{todo.text}}
            </div>
            <div class="option-task">
              <span @click.stop="doneTodo(i)"
                ><i class="fa-solid fa-check"></i
              ></span>
              <span @click.stop="destroyTodo(i)"
                ><i class="fa-solid fa-trash"></i
              ></span>
            </div>
          </li>
        </ul>
        <button class="reset" @click="deleteAll">Cancella tutto</button>
      </div>
      <!-- <div class="task-empty" v-else>
        <h3>La tua lista è vuota</h3>
      </div> -->
    </div>
    
    <script src="./js/app.js"></script>
  </body>
</html>
