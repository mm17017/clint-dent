<template>
    <div class="container">
        <h1 class="text-center">Detalle Cita</h1>
        <br />
        <!-- Button to Open the Modal -->
        <button @click=" modificar = false; abrirModal();" type="button" class="btn btn-primary">
            Agregar
        </button>

        <!-- The Modal -->
        <div class="modal" :class="{ mostrar: modal }">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">{{ tituloModal }}</h4>
                        <button
                            type="button"
                            @click="cerrarModal()"
                            class="close"
                            data-dismiss="modal"
                        >
                            &times;
                        </button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        Modal body..
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
        <br />
        <br />
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
                    <td><button @click=" modificar = true; abrirModal(detalle.id);" class="btn btn-warning">Editar</button></td>
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
            modal: 0,
            modificar: false,
            tituloModal: "",
            detalles: []
        };
    },

    methods: {
        async index() {
            const res = await axios.get("detalle");
            this.detalles = res.data;
        },

        async destroy(id) {
            const res = await axios.delete("detalle/" + id);
            this.index();
        },

        abrirModal() {
            this.modal = 1;
            if(this.modificar){
                this.tituloModal = "Modificar";
            }else{
                this.tituloModal = "Reservar Cita";
            }
        },

        cerrarModal() {
            this.modal = 0;
        }
    },

    created() {
        this.index();
    }
};
</script>

<style>
.mostrar {
    display: list-item;
    opacity: 1;
    background: rgba(44, 38, 75, 0.489);
}
</style>
