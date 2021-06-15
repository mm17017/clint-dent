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
                    multiple
                    id="servicios"
                    v-model="cita.serviciosSeleccionados"
                >
                    <option
                        v-for="servicio in servicios"
                        :value="servicio.id"
                        :key="servicio.id"
                        >{{ servicio.id }} - {{ servicio.descripcion }}</option
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


</script>


<style scoped></style>
