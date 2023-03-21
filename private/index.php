<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<dashboard class="dashboard">
    <dashboard-header title="Datacenter">
        <dashboard-clock digital="true" binary="true" />
    </dashboard-header>
    <server-list>
        <server v-for="(server, index) in servers" :class="{ 'has-failed': !server.status }" :type="server.type" @click.native="updateServerStatus(index)">
            <span slot="name" class="data">{{server.name}}</span>
            <span slot="status" class="data signal">{{server.status ? 'ONLINE' : 'OFFLINE'}}</span>
            <span slot="adr" class="data">{{server.adr}}</span>
        </server>
    </server-list>
</dashboard>
<style>
    @import url("https://fonts.googleapis.com/css?family=Lato:300,300italic");
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css");
* {
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  cursor: default;
}

html {
  font-size: 62.5%;
  color: #c1c6cb;
  background-color: #15202e;
}

body {
  padding: 20px 50px;
}

body::-webkit-scrollbar {
  width: 5px;
}

::-webkit-scrollbar-track {
  background: #110d0d;
}

::-webkit-scrollbar-thumb {
  background: #888;
}

.dashboard {
  display: block;
  max-width: 1024px;
  margin: 0 auto;
}
.dashboard-header {
  display: flex;
  align-items: center;
  font-family: "Lato", sans-serif;
  text-transform: uppercase;
}
.dashboard-title {
  flex: 1;
  font-size: 2.5rem;
}
.dashboard-clock {
  display: flex;
  align-items: center;
}
.dashboard-clock-digital {
  font-weight: bold;
  font-size: 2.5rem;
}
.dashboard-clock-binary {
  margin-left: 8px;
  border-collapse: separate;
}
.dashboard-clock-binary td {
  height: 0.4rem;
  width: 0.4rem;
  background-color: rgba(255, 255, 255, 0.2);
  border-radius: 50%;
}
.dashboard-clock-binary .num1 {
  background-color: #2eb35a;
}

.server {
  display: flex;
  align-items: center;
  padding: 10px 0;
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 4px;
  white-space: nowrap;
  background-color: rgba(255, 255, 255, 0.1);
}
.server-icon {
  display: inline-block;
  font-size: 2.5rem;
  margin: 0 2rem;
}
.server-details {
  flex: 1;
  display: block;
  list-style: none;
  margin: 0;
  padding: 0;
}
.server-details li {
  display: block;
  font-size: 1.2rem;
  line-height: 1.5;
  color: #7e8794;
}
.server-details li:last-child .data {
  font-weight: normal;
  color: rgba(230, 245, 255, 0.32);
}
.server-details .data {
  display: block;
  margin: -1.7rem 0 0 0;
  padding: 0 1rem 0 0;
  font-weight: 600;
  text-align: right;
  color: #c1c6cb;
}
.server-details .signal {
  color: #2eb35a;
}
.server-details .signal::before {
  content: "";
  display: inline-block;
  width: 0.6rem;
  height: 0.6rem;
  background-color: currentColor;
  border-radius: 50%;
  margin-right: 0.5rem;
  margin-top: -0.2rem;
  vertical-align: middle;
}
.server-list {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(25rem, 1fr));
  grid-gap: 2rem;
}
.server.has-failed {
  box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
  border-color: #d22c32;
  -webkit-animation: alertblink 2s ease-in-out infinite;
          animation: alertblink 2s ease-in-out infinite;
}
.server.has-failed .server-icon,
.server.has-failed .signal {
  color: #d22c32;
}
.server.has-failed:hover {
  background-color: rgba(210, 44, 50, 0.2);
  -webkit-animation: none;
          animation: none;
}

@-webkit-keyframes alertblink {
  0% {
    background: rgba(210, 44, 50, 0);
  }
  50% {
    background: rgba(210, 44, 50, 0.2);
  }
  100% {
    background: rgba(210, 44, 50, 0);
  }
}

@keyframes alertblink {
  0% {
    background: rgba(210, 44, 50, 0);
  }
  50% {
    background: rgba(210, 44, 50, 0.2);
  }
  100% {
    background: rgba(210, 44, 50, 0);
  }
}
</style>
<script>
    const store = new Vuex.Store({
  state: {
    // initial state
    servers: [
    { name: 'Lorem', status: true, adr: '192.168.0.24' },
    { name: 'Ipsum', status: true, adr: '192.168.0.25', type: 'database' },
    { name: 'Dolor', status: true, adr: '192.168.0.26', type: 'database' },
    { name: 'Adipiscing', status: true, adr: '192.168.0.37' },
    { name: 'Eiusmod', status: true, adr: '192.168.0.17' },
    { name: 'Cupidatat', status: true, adr: '192.168.0.23' },
    { name: 'Reprehenderit', status: true, adr: '192.168.0.47' },
    { name: 'Typhoon', status: true, adr: '192.168.0.127' }] },


  mutations: {
    UPDATE_SERVER_STATUS(state, payload) {
      state.servers[payload].status ^= true;
    } },

  actions: {
    serverStatus({ commit }, server) {
      commit('UPDATE_SERVER_STATUS', server);
    } } });



Vue.component('dashboard-clock', {
  props: {
    digital: {
      default: true,
      type: Boolean },

    binary: {
      default: false,
      type: Boolean } },


  data() {
    return {
      time: '' };

  },
  template: `
    <div class='dashboard-clock'>
        <div v-if="digital" class="dashboard-clock-digital">{{time}}</div>
        <table v-if="binary" class="dashboard-clock-binary">
            <tr class='hours'>
                <td v-for='n in 6'></td>
            </tr>
            <tr class='minutes'>
                <td v-for='n in 6'></td>
            </tr>
            <tr class='seconds'>
                <td v-for='n in 6'></td>
            </tr>
        </table>
    </div>
    `,
  mounted: function () {
    window.setInterval(this.render, 1000);
  },
  methods: {
    render() {
      const d = new Date();
      const h = d.getHours();
      const m = d.getMinutes();
      const s = d.getSeconds();

      this.time = `${this.addZero(h)} : ${this.addZero(m)} : ${this.addZero(s)}`;

      this.light(this.convert(s), '.seconds');
      this.light(this.convert(m), '.minutes');
      this.light(this.convert(h), '.hours');
    },
    convert(num) {
      let bin = "";
      let conv = [];

      while (num > 0) {
        bin = num % 2 + bin;
        num = Math.floor(num / 2);
      }

      conv = bin.split('');

      while (conv.length < 6) {
        conv.unshift("0");
      }

      return conv;
    },
    light(array, type) {
      $(type + ' td').attr('class', 'num0');
      for (var i = 0; i < array.length; i++) {
        $(type + ' td:eq(' + i + ')').attr('class', 'num' + array[i]);
      }
    },
    addZero(i) {
      if (i < 10) {
        i = "0" + i;
      }
      return i;
    } } });



Vue.component('dashboard-header', {
  props: ['title'],
  template: `
    <header class="dashboard-header">
        <h1 class="dashboard-title">{{title}}</h1>
        <slot></slot>
    </header>
    ` });


Vue.component('server-list', {
  template: '<div class="server-list"><slot></slot></div>' });


Vue.component('server', {
  props: ['type'],
  template: `
    <div class="server">
        <div class="server-icon fa" 
            :class="'fa-' + (type === 'database' ? 'tasks' : 'globe')">
        </div>
        <ul class="server-details">
            <li>Hostname:<slot name="name"></slot></li>                         
            <li>Status:<slot name="status"></slot></li>
            <li>Address:<slot name="adr"></slot></li>
        </ul>
    </div>` });


//Vue.use(Vuex);
const dashboard = new Vue({
  el: 'dashboard',
  data: () => {
    return {
      servers: store.state.servers };

  },
  methods: {
    updateServerStatus(server) {
      store.dispatch('serverStatus', server);
    } },

  mounted() {
    setInterval(() =>
    store.dispatch('serverStatus',
    Math.floor(Math.random() * (this.servers.length - 0) + 0)),
    5000);
  } });
</script>
</body>
</html>