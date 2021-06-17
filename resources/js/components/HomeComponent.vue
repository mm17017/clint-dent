<template>
    <div class="container">
        <reserva-component v-if="codigo == 'reserva'" :reserva="cita"></reserva-component>
        <br />
        <citas-component v-if="codigo == 'citas'" @detalle="getCita"></citas-component>
    </div>
</template>

<script>
import CitasComponent from "./CitasComponent.vue";
import ReservaComponent from "./ReservaComponent.vue";
export default {
    props: ["codigo"],
    components: { CitasComponent, ReservaComponent },
    data() {
        return {
            cita: null,
        };
    },

    methods:{
        getCita(cita){
            // console.log(cita);
            this.cita = cita;
            console.log(this.cita);
            this.codigo = "reserva";            
        }
    },
};
</script>
