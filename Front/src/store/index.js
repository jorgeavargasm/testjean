import Vue from 'vue'
import Vuex from 'vuex'
import Services from '@/services/Services.js'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    items2: [{ id: 'id_test2', nombre: 'nombre_test', apellido: 'nombre_test' }],
  },
  mutations: {
    listar(){
      var self = this;
      Services.Listar().then( function (response) {
        //console.log(response.data);
        self.items2 =  response.data;
        console.log(self.items2);
      }).catch(error => {
        console.log(error);
      });
    }
  },
  actions: {
  },
  modules: {
  }
})
