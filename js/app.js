const { createApp } = Vue;

createApp({
  data() {
    return {
      title: "To Do list",
      newTodo: "",
      todos: [],
    };
  },
  methods: {
    fetchData() {
      axios.get("server.php").then((res) => {
        console.log(res.data);
        this.todos = res.data;
      });
    },
    storeTodo() {
      const data = {
        todo: this.newTodo,
      };

      axios.post("store.php", data, {
        headers: {
          "Content-Type": "multypart/form-data",
        },
      });

      //   console.log(this.newTodo);
    },
  },
  created() {
    this.fetchData();
  },
}).mount("#app");
