<template>
  <div class="row justify-content-center">
    <div class="col-md-6">
      <table class="table table-bordered border-primary">
        <thead style="background-color: transparent !important; color: white !important;">
          <tr>
            <th style="background-color: #0f3443 !important; color: white !important; font-weight: 900 !important; font-size: 1.6rem !important; text-align: center !important;" scope="col" colspan="2" align="center">Información Personal</th>
          </tr>
        </thead>
        <tbody style="background-color: transparent !important; color: white !important; font-weight: 600 !important; text-align: center !important;">
          <tr>
            <th scope="row" style="font-weight: 900 !important;">Código de cliente</th>
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
            <th scope="row">E-mail</th>
            <td>{{ usuario.email }}</td>
          </tr>
          <tr>
            <th scope="row">Fecha de nacimiento</th>
            <td>{{ usuario.fecha_nacimiento }}</td>
          </tr>
          <tr>
            <th scope="row">Teléfono</th>
            <td>{{ usuario.telefono }}</td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-primary btn-block btn-lg" @click="abrirModal">
        Modificar datos
      </button>
      <button class="btn btn-danger btn-block btn-lg" @click="eliminarCuenta">
        Eliminar Cuenta
      </button>
    </div>
      
      
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
