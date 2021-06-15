<template>
    <form method="POST">
        <div class="form-group row">
            <label
                for="descripcion"
                class="col-md-4 col-form-label text-md-right color-blanco"
                >Descripcion</label
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
                >
                    <option
                        v-for="jornada in jornadas"
                        :value="jornada.id"
                        :key="jornada.id"
                        >{{ jornada.hora_inicio }}</option
                    >
                </select>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4 text-right">
                <button type="submit" class="btn btn-primary">
                    Reservar
                </button>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    data() {
        return {
            detalles: [],
            servicios: [],
            jornadas: [],
			fecha:"",
            cita: {
                descripcion: "",
                fecha_cita: "",
                serviciosSeleccionados: [],
                user_id: 0,
                estado_cita_id: 1,
                jornada_id: {}
            },
            detalle: {},
            errors: null
        };
    },

	methods: {

		async getJornadas(fecha){			
			console.log(this.fecha);
			const res = await axios.get("/jornadas/"+this.cita.fecha_cita);
			this.jornadas = res.data;
			console.log(this.jornadas);
		},
	},

    created() {
        axios.get("/servicios").then(res => {
            this.servicios = res.data;
        });        
    }
};
</script>

<style scoped></style>
