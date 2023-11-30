const { createApp } = Vue;

createApp({
  data() {
    return {
      title: "To Do list",
      newTodo: "",
      todos: [],
      classList: "small hidden",
    };
  },
  methods: {
    fetchData() {
      axios.get("server.php").then((res) => {
        console.log(res.data.results);
        this.todos = res.data.results;
      });
    },
    storeTodo() {
      const data = {
        todo: this.newTodo,
      };

      axios
        .post("./store.php", data, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((res) => {
          console.log(res.data);
          this.todos = res.data;
          this.newTodo = "";
        });

      //   console.log(this.newTodo);
    },
    destroyTodo(index) {
      const data = {
        id: index,
      };

      axios
        .post("./destroy.php", data, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((res) => {
          console.log(res.data);
          this.todos = res.data;
        });
    },
    doneTodo(index) {
      const data = {
        id: index,
      };

      axios
        .post("./done.php", data, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((res) => {
          console.log(res.data);
          this.todos = res.data;
        });
    },
    deleteAll() {
      axios
        .post("./deleteAll.php", {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((res) => {
          console.log(res.data);
          this.todos = res.data;
        });
    },
  },
  created() {
    this.fetchData();
  },
}).mount("#app");
