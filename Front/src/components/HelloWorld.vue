<template>
  <div class="hello">
    
    <!--Formulario guardar-->
    <div class="mb-3" v-if="formEditar == false">
      <b-card title="Nuevo registro">
        <div>
          <b-form @submit.prevent="guardar()">

            <div class="row">
              <div class="col-md-3">
                <div class="row">

                  <div class="col-md-12">
                    <label style="float: left;">Nombre:</label>    
                  </div>
                  <div class="col-md-12">
                    <b-form-group id="input-group-2">
                      <b-form-input
                        id="nombre"
                        class="mb-3"
                        placeholder="Ingrese su nombre"
                        v-model="campos.nombre"
                      ></b-form-input>
                    </b-form-group>    
                  </div>

                </div>
              </div>
              <div class="col-md-3">
                <div class="row">
                  
                  <div class="col-md-12">
                    <label style="float: left;">Color:</label>    
                  </div>
                  <div class="col-md-12">
                    <b-form-group id="input-group-2">
                      <b-form-input
                        id="color"
                        class="mb-3"
                        placeholder="Ingrese su color"
                        v-model="campos.color"
                      ></b-form-input>
                    </b-form-group>    
                  </div>

                </div>
              </div>
              <div class="col-md-3">
                <div class="row">
                  
                  <div class="col-md-12">
                    <label style="float: left;">Precio:</label>    
                  </div>
                  <div class="col-md-12">
                    <b-form-group id="input-group-2">
                      <b-form-input
                        id="precio"
                        class="mb-3"
                        placeholder="Ingrese su precio"
                        v-model="campos.precio"
                      ></b-form-input>
                    </b-form-group>    
                  </div>

                </div>
              </div>

              <div class="col-md-3">
                <div class="row">
                  
                  <div class="col-md-12">
                    <label style="float: left;">Fecha:</label>    
                  </div>
                  <div class="col-md-12">
                    <b-form-group id="input-group-2">
                      <b-form-input
                        type="date"
                        id="fecha"
                        class="mb-3"
                        placeholder="Ingrese su color"
                        v-model="campos.fecha"
                      ></b-form-input>
                    </b-form-group>    
                  </div>

                </div>
              </div>

            </div>
            
            <b-button type="submit" variant="primary" style="margin-right: 10px;">Guardar</b-button>
            <b-button type="reset" variant="danger" @click="cancelar()">Cancelar</b-button>
          </b-form>
        </div>

      </b-card>
    </div>
    <!--Formulario guardar-->

    <!--Formulario editar-->
    <div class="mb-3" v-else>
      <b-card title="Editar registro">
        <div>
          <b-form @submit.prevent="editar()">

            <div class="row">
              <div class="col-md-3">
                <div class="row">

                  <div class="col-md-12">
                    <label style="float: left;">Nombre:</label>    
                  </div>
                  <div class="col-md-12">
                    <b-form-group id="input-group-2">
                      <b-form-input
                        id="nombreE"
                        class="mb-3"
                        placeholder="Ingrese su nombre"
                        v-model="campos.nombre"
                      ></b-form-input>
                    </b-form-group>    
                  </div>

                </div>
              </div>
              <div class="col-md-3">
                <div class="row">
                  
                  <div class="col-md-12">
                    <label style="float: left;">Color:</label>    
                  </div>
                  <div class="col-md-12">
                    <b-form-group id="input-group-2">
                      <b-form-input
                        id="colorE"
                        class="mb-3"
                        placeholder="Ingrese su color"
                        v-model="campos.color"
                      ></b-form-input>
                    </b-form-group>    
                  </div>

                </div>
              </div>
              <div class="col-md-3">
                <div class="row">
                  
                  <div class="col-md-12">
                    <label style="float: left;">Precio:</label>    
                  </div>
                  <div class="col-md-12">
                    <b-form-group id="input-group-2">
                      <b-form-input
                        id="precioE"
                        class="mb-3"
                        placeholder="Ingrese su precio"
                        v-model="campos.precio"
                      ></b-form-input>
                    </b-form-group>    
                  </div>

                </div>
              </div>
              <div class="col-md-3">
                <div class="row">
                  
                  <div class="col-md-12">
                    <label style="float: left;">Fecha:</label>    
                  </div>
                  <div class="col-md-12">
                    <b-form-group id="input-group-2">
                      <b-form-input
                        type="date"
                        id="colorE"
                        class="mb-3"
                        placeholder="Ingrese su colofecha"
                        v-model="campos.fecha"
                      ></b-form-input>
                    </b-form-group>    
                  </div>

                </div>
              </div>
            </div>
            
            <b-button type="submit" variant="primary" style="margin-right: 10px;">Guardar</b-button>
            <b-button type="reset" variant="danger" @click="cancelar()">Cancelar</b-button>
          </b-form>
        </div>

      </b-card>
    </div>
    <!--Formulario editar-->


    <b-table-simple responsive style="display:block;">
      <b-thead>
        <b-tr>
          <b-th class="textoLeft" style="width: 15%;">Id</b-th>
          <b-th class="textoLeft" style="width: 30%;">Nombre</b-th>
          <b-th class="textoLeft" style="width: 10%;">Color</b-th>
          <b-th class="textoLeft" style="width: 10%;">Precio</b-th>
          <b-th class="textoLeft" style="width: 10%;">Fecha</b-th>
          <b-th style="width: 25%;">Opciones</b-th>
        </b-tr>
      </b-thead>
      <b-tbody>
        <b-tr v-for="(item, index) in items" :key="index">
          <b-td class="textoLeft">{{item.id}}</b-td>
          <b-td class="textoLeft">{{item.nombre}}</b-td>
          <b-td class="textoLeft">{{item.color}}</b-td>
          <b-td class="textoLeft">{{item.precio}}</b-td>
          <b-td class="textoLeft">{{item.fecha}}</b-td>
          <b-td>
            <b-button type="button" class="btn-sm" variant="primary" @click="editarForm(item)" style="margin-right: 7px;">Editar</b-button>
            <b-button type="button" class="btn-sm" variant="danger" @click="eliminar(item, index)">Eliminar</b-button>
          </b-td>
        </b-tr>
      </b-tbody>
      
    </b-table-simple>

    <!--Envio de parametros via props
    <Table :items="items"/>-->

    <keep-alive></keep-alive><!--Al encerrar un componente aqui sucedera que el componente no se destruira-->
    <component :is="muestraComponente" :items="parametro"/>
    
  </div>
</template>

<script>

import store from '@/store'
import Services from '@/services/Services.js'
import Table from '@/components/Table.vue' //importanto componente
  
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  },
  store,
  components: {
    //Table //integrando el componente tabla para ser utilizado en la vista
  },
  data() {
    return {
      items: store.state.items2, //Llamando array desde la tienda
      formEditar: false,
      campos : { nombre: '', color: '', precio: 0, fecha: ""},
      muestraComponente: null,
      parametro: ''
    }
  },
  mounted(){
    //store.commit('listar'); //Llamando funcion desde la tienda

    this.listar();
    
    this.$nextTick(() => { //La función nextTick lo que hace es dejar pasar un pequeño intervalo de tiempo, el correspondiente a un tick.
      
    });
  },
  methods:{
     mostrarComponente(componente, propiedad){
      this.muestraComponente = componente;
      this.parametro = propiedad;
     },
     listar(){
      var self = this;
      Services.Listar().then( function (response) {
        //console.log(response.data);
        self.items =  response.data;
        self.mostrarComponente('Table', self.items);
      }).catch(error => {
        console.log(error);
      });
    },
    eliminar(item, index){
      //Se puede enviar el array item completo al backend, solo que es mejor ordenarlo para que viaje extrictamente lo que se desea, y no informacion adicional, ademas aca podriamos anexar mas elementos
      const params = { id: item.id, nombre: item.nombre, color: item.color, precio: item.precio, fecha: item.fecha };
      //console.log(params);

      var self = this;
      const form = new FormData();
      form.append('id', item.id);

      Services.Delete(form).then( function (response) {
  
        //console.log(response.data);
        
        if(response.data.result){
          self.items.splice(index, 1);
        }else{
          alert("No pudo ser eliminado");
        }

      }).catch(error => {
        console.log(error);
      });

      
    },
    editarForm(item){
      this.campos.nombre = item.nombre;
      this.campos.color = item.color;
      this.campos.precio = item.precio;
      this.campos.fecha = item.fecha;
      this.campos.id = item.id;
      this.formEditar = true;
    },
    cancelar(){
      this.campos.nombre = '';
      this.campos.color = '';
      this.campos.precio = '';
      this.campos.fecha = '';
      this.campos.id = '';
      this.formEditar = false;
    },
    guardar(){
      if(this.campos.nombre.trim() === '' || this.campos.color.trim() === '' || this.campos.precio.trim() === '' || this.campos.fecha.trim() === ''){
        alert("Faltan datos");
      }else if(parseFloat(this.campos.precio) <= 8 || parseFloat(this.campos.precio) >= 26){
        alert("El rango del precio debe estar entre 9 y 25");
      }else{
        
        var self = this;
        const form = new FormData();
        form.append('nombre', this.campos.nombre);
        form.append('color', this.campos.color);
        form.append('precio', this.campos.precio);
        form.append('fecha', this.campos.fecha);

        Services.Guardar(form).then( function (response) {
  
          //console.log(response.data);
          
          if(response.data.result){
            let id = response.data.id;
            var self2 = self;
/*            const params = { id: id, nombre: self.campos.nombre, color: self.campos.color, precio: self.campos.precio, fecha: self.campos.fecha };
            self.items.push(params);*/
            Services.Listar().then( function (response) {
              //console.log(response.data);
              self2.items =  response.data;
              self2.mostrarComponente('Table', self2.items);
            }).catch(error => {
              console.log(error);
            });

            self.campos.nombre = '';
            self.campos.color = '';
            self.campos.precio = '';
            self.campos.fecha = '';
            self.campos.id = '';
          }else{
            alert("No pudo ser guardado");
          }

        }).catch(error => {
          console.log(error);
        });

        
      }
    },
    editar(){
      if(this.campos.nombre.trim() === '' || this.campos.color.trim() === '' || this.campos.precio.trim() === '' || this.campos.fecha.trim() === ''){
        alert("Faltan datos");
      }else if(parseFloat(this.campos.precio) <= 8 || parseFloat(this.campos.precio) >= 26){
        alert("El rango del precio debe estar entre 9 y 25");
      }else{
        
//        const params = { id: this.campos.id, nombre: this.campos.nombre, color: this.campos.color, precio: this.campos.precio, fecha: this.campos.fecha };
        
        //Obteniendo la posicion del array
        /*const index = this.items.findIndex(
          buscar => buscar.id === this.campos.id
        );*/

        var self = this;
        const form = new FormData();
        form.append('id', this.campos.id);
        form.append('nombre', this.campos.nombre);
        form.append('color', this.campos.color);
        form.append('precio', this.campos.precio);
        form.append('fecha', this.campos.fecha);

        Services.Editar(form).then( function (response) {
  
          //console.log(response.data);
          
          if(response.data.result){
            
            //self.items[index] = params;

            self.campos.nombre = '';
            self.campos.color = '';
            self.campos.precio = '';
            self.campos.fecha = '';
            self.campos.id = '';
            self.formEditar = false;
            var self2 = self;
            Services.Listar().then( function (response) {
              //console.log(response.data);
              self2.items =  response.data;
              self2.mostrarComponente('Table', self2.items);
            }).catch(error => {
              console.log(error);
            });
          }else{
            alert("No pudo ser guardado");
          }

        }).catch(error => {
          console.log(error);
        });

      }
      
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

.textoLeft{
  text-align: left;
}

h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
