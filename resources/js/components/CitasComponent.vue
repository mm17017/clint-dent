<template>
    <div>
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Detalle</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="detalle in detalles" :key="detalle.id">
                    <th scope="row">{{ detalle.id }}</th>
                    <td>{{ detalle.fecha_cita }}</td>
                    <td>{{ detalle.jornada_id }}</td>
                    <td>
                        <button
                            @click="
                                modificar = true;
                                errors = null;
                                show(detalle.id);
                            "
                            class="btn btn-warning"
                        >
                            Ver Cita
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
            response: "",
            detalle: {},
            detalles: [],
        };
    },

    methods: {
        async show(id) {
            const detalle = await axios.get("detalle/" + id);
            this.detalle = detalle.data[0];            
            this.$emit('detalle', this.detalle);            
        },   
    },

    created() {
        axios.get("/detalle").then(res => {
            this.detalles = res.data;            
        });
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
