<template>
  <div>
    <h2
      class="text-center padding-bottom color-blanco"
      style="text-transform: uppercase; font-weight: 700"
    >
      Historial de citas
    </h2>
    <div v-if="response" class="alert alert-success" align-center role="alert">
      {{ response }}
    </div>
    <table class="table table-striped" style="text-align: center">
      <thead
        class=""
        style="
          background-color: transparent !important;
          color: white !important;
          font-weight: 800 !important;
        "
      >
        <tr>
          <!-- <th scope="col">ID</th> -->
          <th scope="col">Fecha</th>
          <th scope="col">Hora</th>
          <th scope="col">Detalle</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="detalle in detalles" :key="detalle.id">
          <!-- <th scope="row">{{ detalle.id }}</th> -->
          <td>{{ detalle.fecha_cita }}</td>
          <td>{{ detalle.jornada_id[0].hora_inicio }}</td>
          <td>
            <button
              @click="
                show(detalle.id);
                modificar = false;
                errors = {};
                response = '';
              "
              class="btn btn-primary"
            >
              Ver Cita
            </button>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- The Modal -->
    <div class="modal" :class="{ mostrar: modal == true }">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4
              class="modal-title"
              style="
                text-align: center !important;
                text-transform: uppercase !important;
              "
            >
              {{ tituloModal }}
            </h4>
            <button
              type="button"
              @click="cerrarModal()"
              class="close"
              data-dismiss="modal"
              style="color: white !important"
            >
              &times;
            </button>
          </div>

          <!-- Modal body -->
          <div class="modal-body">
            <form>
              <!-- MOSTRAR DETALLE DE CITA SIN MODIFICAR -->
              <div v-if="modificar == false">
                <div class="form-group row">
                  <label for="descripcion">Descripción</label>
                  <input
                    type="text"
                    class="form-control"
                    id="descripcion"
                    placeholder="Descripcion"
                    v-model="cita.descripcion"
                    autofocus
                    disabled
                  />
                </div>

                <div class="form-group row">
                  <label for="fecha">Fecha</label>
                  <input
                    type="text"
                    class="form-control"
                    id="fecha"
                    disabled
                    v-model="cita.fecha_cita"
                  />
                </div>

                <div class="form-group row">
                  <label for="descripcion">Hora</label>
                  <input
                    type="text"
                    class="form-control"
                    id="descripcion"
                    placeholder="Descripcion"
                    v-model="cita.jornada_id"
                    autofocus
                    disabled
                  />
                </div>

                <label for="servicios">Servicios</label>
                <select
                  class="custom-select"
                  multiple
                  disabled
                  id="servicios"
                  v-model="cita.serviciosSeleccionados"
                  style="
                    background-color: black !important;
                    color: white !important;
                  "
                >
                  <option
                    v-for="servicio in servicios"
                    :value="servicio.id"
                    :key="servicio.id"
                  >
                    {{ servicio.id }} - {{ servicio.descripcion }}
                  </option>
                </select>
              </div>
              <!-- MODIFICAR LA CITA -->
              <div v-if="modificar == true">
                <div class="form-group row">
                  <label
                    for="descripcion"
                    class="col-md-4 col-form-label text-md-right color-blanco"
                    >Descripción</label
                  >

                  <div class="col-md-6">
                    <input
                      id="descripcion"
                      v-model="cita.descripcion"
                      placeholder="Detalla tu cita"
                      type="text"
                      class="form-control"
                      name="name_usuario"
                      autofocus
                    />
                    <span
                      v-for="(pass, index) in errors.descripcion"
                      :key="index"
                      style="color: red"
                      role="alert"
                      >{{ pass }}</span
                    >
                  </div>
                </div>
                <div class="form-group row">
                  <label
                    for="fecha_cita"
                    class="col-md-4 col-form-label text-md-right color-blanco"
                    >Fecha de cita</label
                  >

                  <div class="col-md-6">
                    <input
                      v-model="cita.fecha_cita"
                      @input="getJornadas(cita.fecha_cita)"
                      id="fecha_cita"
                      type="date"
                      class="form-control"
                      name="lastname_usuario"
                    />
                    <span
                      v-for="(pass, index) in errors.fecha_cita"
                      :key="index"
                      style="color: red"
                      role="alert"
                      >{{ pass }}</span
                    >
                  </div>
                </div>
                <div class="form-group row">
                  <label
                    for="hora_cita"
                    class="col-md-4 col-form-label text-md-right color-blanco"
                    >Hora programada</label
                  >

                  <div class="col-md-6">
                    <select
                      class="custom-select"
                      id="servicios"
                      v-model="cita.jornada_id"
                      autofocus="autofocus"
                    >
                      <option disabled selected>--SELECCIONE UNA HORA--</option>

                      <option
                        v-for="jornada in jornadas"
                        :value="jornada.id"
                        :key="jornada.id"
                      >
                        {{ jornada.hora_inicio }}
                      </option>
                    </select>
                    <span
                      v-for="(pass, index) in errors.jornada_id"
                      :key="index"
                      style="color: red"
                      role="alert"
                      >{{ pass }}</span
                    >
                  </div>
                </div>

                <div class="form-group">
                  <h2 class="h1-inicio-reserva">
                    <span
                      style="
                        text-transform: uppercase;
                        color: #267d39 !important;
                      "
                    >
                      Nuestros </span
                    >servicios
                  </h2>
                  <br />

                  <div class="check-grid">
                    <div v-for="servicio in servicios" :key="servicio.id">
                      <input
                        type="checkbox"
                        id="servicio.descripcion"
                        :value="servicio.id"
                        v-model="cita.serviciosSeleccionados"
                      />
                      <label
                        for="servicio.descripcion"
                        class="color-blanco"
                        style="font-weight: 800"
                        >{{ servicio.descripcion }}</label
                      >
                    </div>
                    <span
                      v-for="(pass, index) in errors.serviciosSeleccionados"
                      :key="index"
                      style="color: red"
                      role="alert"
                      >{{ pass }}</span
                    >
                  </div>
                </div>

                <div class="form-group row mb-0"></div>
              </div>
            </form>
          </div>

          <!-- Modal footer -->
          <div class="modal-footer">
            <button
              @click="cerrarModal()"
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
              v-if="modificar == false"
            >
              Cancelar
            </button>
            <button
              @click="habilitar()"
              type="button"
              class="btn btn-success"
              data-dismiss="modal"
              v-if="modificar == false"
            >
              Modificar
            </button>

            <button
              @click="guardar(detalle.id)"
              type="button"
              class="btn btn-success"
              data-dismiss="modal"
              v-if="modificar == true"
            >
              Guardar Cambios
            </button>

            <button
              class="btn btn-danger"
              v-if="modificar == true"
              @click="
                errors = {};
                destroy(detalle.id);
              "
            >
              Cancelar Cita
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      modal: false,
      modificar: false,
      tituloModal: "Detalle de cita",
      response: "",
      detalle: {},
      jornadas: [],
      detalles: [],
      servicios: [],
      cita: {
        descripcion: "",
        fecha_cita: "",
        serviciosSeleccionados: [],
        user_id: 0,
        estado_cita_id: 1,
        jornada_id: 1,
      },
      errors: {},
    };
  },

  methods: {
    index() {
      axios.get("/detalle").then((res) => {
        this.detalles = res.data;
        console.log(this.detalles);
      });
    },

    async show(id) {
      const detalle = await axios.get("detalle/" + id);
      this.detalle = detalle.data[0];
      console.log(this.detalle);
      this.abrirModal(this.detalle);
      // this.$emit("detalle", this.detalle);
    },

    async destroy(id) {
      await axios.delete("detalle/" + id).then((res) => {
        this.response = res.data.messagge;
        this.modal = false;
        this.index();
      });
    },

    habilitar() {
      this.cita.fecha_cita = "";
      this.cita.jornada_id = "";
      this.cita.serviciosSeleccionados = [];
      axios.get("/servicios").then((res) => {
        this.servicios = res.data;
      });
      this.modificar = true;
    },

    guardar(id) {
      this.errors = {};
      axios
        .put("detalle/" + id, this.cita)
        .then((res) => {
          this.response = res.data.messagge;
          this.modal = false;
          this.index();
        })
        .catch((error) => {
          if (error.response.status == 422) {
            this.errors = error.response.data.errors;
            console.log(this.errors);
          }
        });
      // if(this.errors == {}){
      //     this.modal = false;
      //     this.index();
      // }
    },

    async getJornadas(fecha) {
      const res = await axios.get("/jornadas/" + this.cita.fecha_cita);
      this.jornadas = res.data;
    },

    cerrarModal() {
      this.modal = false;
    },

    abrirModal(data = {}) {
      this.modal = true;
      this.cita.descripcion = data.descripcion;
      this.cita.fecha_cita = data.fecha_cita;
      this.cita.jornada_id = data.jornada_id[0].hora_inicio;
      this.cita.user_id = data.user_id;
      this.servicios = data.servicios;
    },
  },

  created() {
    this.index();
  },
};
</script>

<style scoped>
.mostrar {
  display: list-item;
  opacity: 1;
  background: rgba(44, 38, 75, 0.489);
}
.modal-dialog {
  background-color: black;
}
</style>
