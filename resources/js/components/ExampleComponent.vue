<template>
    <div class="container">
        <h1 class="text-center">Detalle Cita</h1>
        <br />
        <!-- Button to Open the Modal -->
        <button
            @click="
                modificar = false;
                abrirModal();
            "
            type="button"
            class="btn btn-primary my-4"
        >
            Agregar
        </button>

        <!-- The Modal -->
        <div class="modal" :class="{ mostrar : modal==true }">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">{{ tituloModal }}</h4>
                        <button
                            type="button"
                            @click="cerrarModal()"
                            class="close"
                            data-dismiss="modal">
                            &times;
                        </button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form>
                            <label for="descripcion">Descripcion</label>
                            <input
                                type="text"
                                class="form-control"
                                id="descripcion"
                                placeholder="Descripcion"
                                v-model="cita.descripcion"
                            />

                            <label for="fecha">Fecha</label>
                            <input
                                type="date"
                                class="form-control"
                                id="fecha"
                                v-model="cita.fecha_cita"
                            />

                            <!-- <label for="hora">Hora</label>
                            <input
                                type="time"
                                step="1"
                                class="form-control"
                                id="hora"
                                v-model="cita.hora_cita"
                            /> -->

                            <label for="servicios">Servicios</label>
                            <select
                                class="custom-select"
                                multiple
                                id="servicios"
                                v-model="cita.serviciosSeleccionados"
                            >
                                <option
                                    v-for="servicio in servicios"
                                    :value="servicio.id"
                                    :key="servicio.id"
                                    >{{ servicio.id }} -
                                    {{ servicio.descripcion }}</option
                                >
                            </select>
                        </form>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button
                            @click="cerrarModal()"
                            type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal"
                        >
                            Cancelar
                        </button>
                        <button
                            @click="guardar(detalle.id)"
                            type="button"
                            class="btn btn-success"
                            data-dismiss="modal"
                        >
                            Guardar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col" colspan="2" class="text-center">Accion</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="detalle in detalles" :key="detalle.id">
                    <th scope="row">{{ detalle.id }}</th>
                    <td>{{ detalle.fecha_cita }}</td>
                    <td>{{ detalle.hora_cita }}</td>
                    <td>
                        <button
                            @click="
                                modificar = true;
                                show(detalle.id);
                            "
                            class="btn btn-warning"
                        >
                            Editar
                        </button>
                    </td>
                    <td>
                        <button
                            class="btn btn-danger"
                            @click="destroy(detalle.id)"
                        >
                            Eliminar
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            modal: false,
            modificar: false,
            tituloModal: "",
            detalles: [],
            servicios: [],
            cita: {
                descripcion: "",
                fecha_cita: "",
                // hora_cita: "",
                serviciosSeleccionados: [],
                user_id: 0,
                estado_cita_id: 1,
                jornada_id: 1
            },
            detalle: {}
        };
    },

    methods: {
        async index() {
            const res = await axios.get("detalle/");
            this.detalles = res.data;
            this.cita.user_id = this.detalles[0].user_id;
        },

        async guardar(id) {
            if (this.modificar) {
                console.log(this.detalle.id);
                const res = await axios.put('detalle/'+id, this.cita);
                console.log(res.data);
            } else {
                const res = await axios.post("detalle", this.cita);
                console.log(res.data);
            }
            this.cerrarModal();
            this.index();
        },

        async show(id) {
            const detalle = await axios.get("detalle/" + id);
            this.detalle = detalle.data[0];
            this.abrirModal(this.detalle);
        },

        async destroy(id) {
            const res = await axios.delete("detalle/" + id);
            this.index();
        },

        abrirModal(data = {}) {
            
            this.modal = true;
            if (this.modificar) {
                this.tituloModal = "Modificar";
                this.cita.descripcion = data.descripcion;
                this.cita.fecha_cita = data.fecha_cita;
                this.cita.hora_cita = data.hora_cita;
                this.cita.user_id = data.user_id;
                this.servicios = data.servicios;
            } else {
                this.tituloModal = "Reservar Cita";
                this.cita.descripcion = "";
                this.cita.fecha_cita = "";
                this.cita.hora_cita = "";
                console.log('holiss')
                axios.get('/servicios').then((res)=>{
                this.servicios=res.data
                })

            }
        },

        cerrarModal() {
            this.modal = false;
        }
    },

    created() {
        
        axios.get('/detalle').then((res)=>{
            this.detalles=res.data
        
        })
    }
};
</script>

<style scoped>
.mostrar {
    display: list-item;
    opacity: 1;
    background: rgba(44, 38, 75, 0.489);
}
</style>
