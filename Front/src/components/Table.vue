<template>
  <div>
    
    <b-table-simple responsive>
      <b-thead>
        <b-tr>
          <b-th class="textoLeft" style="width: 15%;">Id</b-th>
          <b-th class="textoLeft" style="width: 30%;">Nombre</b-th>
          <b-th class="textoLeft" style="width: 30%;">Color</b-th>
          <b-th class="textoLeft" style="width: 30%;">Precio</b-th>
          <b-th class="textoLeft" style="width: 30%;">Fecha</b-th>

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
            <b-button type="button" class="btn-sm" variant="danger" @click="eliminar(item, index)">Eliminar</b-button>
          </b-td>
        </b-tr>
      </b-tbody>
      
    </b-table-simple>

  </div>
</template>

<script>
  
export default {
  props:{
    items: Array
  },
  methods:{
    eliminar(item, index){
      
      this.items.splice(index, 1);

    }
  }

}


</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

.textoLeft{
  text-align: left;
}
</style>