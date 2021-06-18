<template>
    <div class="container">
        <h2
            class="text-center padding-bottom color-blanco"
            style="text-transform: uppercase; font-weight:700;"
        >
            Reserva tu cita
        </h2>
        <div
            v-if="response"
            class="alert alert-success"
            align-center
            role="alert"
        >
            {{ response }}
        </div>
        <form method="POST" id="reserva">
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
                        <option disabled selected
                            >--SELECCIONE UNA HORA--</option
                        >

                        <option
                            v-for="jornada in jornadas"
                            :value="jornada.id"
                            :key="jornada.id"
                            >{{ jornada.hora_inicio }}</option
                        >
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
                        style="text-transform: uppercase; color: #267d39 !important"
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
                            style="font-weight: 800;"
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

            <div class="form-group row mb-0">
                <div
                    class="col-md-6 offset-md-4 text-right"
                    style="display: flex; justify-content: space-evenly;"
                >
                    <a href="#"
                        ><button class="btn btn-secondary">
                            Historial
                        </button>
                    </a>
                    <button
                        @click="store()"
                        class="btn btn-primary"
                        type="button"
                    >
                        Reservar
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    props: ["reserva"],
    data() {
        return {
            detalles: [],
            servicios: [],
            jornadas: [],
            cita: {
                descripcion: "",
                fecha_cita: "",
                serviciosSeleccionados: [],
                user_id: 0,
                estado_cita_id: 1,
                jornada_id: ""
            },
            detalle: {},
            errors: {},
            response: ""
        };
    },

    methods: {
        async store() {
            axios
                .post("detalle/", this.cita)
                .then(res => {
                    this.response = res.data.messagge;
                })
                .catch(error => {
                    if (error.response.status == 422) {
                        this.errors = error.response.data.errors;
                    }
                });
            this.errors = {};
            this.cita = {
                descripcion: "",
                fecha_cita: "",
                serviciosSeleccionados: [],
                user_id: 0,
                estado_cita_id: 1,
                jornada_id: ""
            };
        },
        async getJornadas(fecha) {
            const res = await axios.get("/jornadas/" + this.cita.fecha_cita);
            this.jornadas = res.data;
        }
    },

    created() {
        axios.get("/servicios").then(res => {
            this.servicios = res.data;
        });

        if (this.reserva) {
            console.log(this.reserva);
            this.cita.descripcion = this.reserva.descripcion;
            this.cita.fecha_cita = this.reserva.fecha_cita;
            this.cita.serviciosSeleccionados = this.reserva.servicios;
            this.cita.user_id = this.reserva.user_id;
            this.cita.estado_cita_id = this.reserva.estado_cita_id;
            this.cita.jornada_id = this.reserva.jornada_id[0].id;
        }
    }
};
</script>

<style scoped></style>
