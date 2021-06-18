<template>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <table class="table table-dark table-hover table-bordered border-primary">
        <thead>
          <tr>
            <th scope="col" colspan="2" align="center">Informacion Personal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Codigo de Cliente</th>
            <td>{{ usuario.id }}</td>
          </tr>
          <tr>
            <th scope="row">Nombre</th>
            <td>{{ usuario.name_usuario }}</td>
          </tr>
          <tr>
            <th scope="row">Apellido</th>
            <td>{{ usuario.lastname_usuario }}</td>
          </tr>
          <tr>
            <th scope="row">Correo Electronico</th>
            <td>{{ usuario.email }}</td>
          </tr>
          <tr>
            <th scope="row">Fecha de Nacimiento</th>
            <td>{{ usuario.fecha_nacimiento }}</td>
          </tr>
          <tr>
            <th scope="row">Telefono</th>
            <td>{{ usuario.telefono }}</td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-warning btn-block btn-lg" @click="abrirModal">
        Modificar datos
      </button>
      <button class="btn btn-danger btn-block btn-lg" @click="eliminarCuenta">
        Eliminar Cuenta
      </button>
    </div>
  </div>
</template>
<script>
export default {
  props: ["usuario"],
  methods: {
    eliminarCuenta() {
      axios.delete(`user/${this.usuario.id}`).then((res) => {
        axios.post("logout").then(() => {
          setTimeout(() => {
            alert("Usuario Elimando");
            this.usuario = [];
            location.reload();
          }, 2000);
        });
      });
    },
    abrirModal() {
      this.$emit("abrirModal");
    },
  },
};
</script>
