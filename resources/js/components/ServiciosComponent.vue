<template>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Codigo de Servicio</th>
        <th scope="col">Descripcion del Servicio</th>
        <th scope="col">Precio  del Servicio</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="servicio in servicios" :key="servicio.id">
        <th scope="row">{{servicio.id}}</th>
        <td>{{servicio.descripcion}}</td>
        <td>${{servicio.precio}}</td>
      </tr>
    </tbody>
  </table>
</template>
<script>
export default {
  data() {
    return {
      servicios : []
      }
  },
  created() {
    axios.get("/servicios").then((res) => {
      this.servicios = res.data;
      console.log(this.servicios)
    });
  },
};
</script>
