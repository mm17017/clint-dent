<template>
    <div class="container">
        <div class="col-md-6">
            <div
                class="justify-content-center modal fade"  
                :class="{ mostrar: modificar == true }"
                id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"

            >
                <div class="card-body contenedor sombra gradiente-form">
                    <h2 class="text-center padding-bottom color-blanco">
                        Actualizar Datos
                    </h2>
                    <div
                        v-if="response"
                        class="alert alert-primary"
                        align-center
                        role="alert"
                    >
                        {{ response }}
                        <button
                            class="btn btn-danger right"
                            onclick="history.back()"
                        >
                            Volver a inicio
                        </button>
                    </div>
                    <!-- <form @submit.prevent="actualizar()" > -->
                    <div class="form-group row">
                        <label
                            for=""
                            class="col-md-4 col-form-label text-md-right color-blanco"
                            >Nombre</label
                        >
                        <div class="col-md-6">
                            <input
                                id="name_usuario"
                                placeholder="Tú nombre"
                                type="text"
                                class="form-control"
                                required
                                autocomplete="name_usuario"
                                autofocus
                                v-model="usuario.name_usuario"
                                disabled
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for=""
                            class="col-md-4 col-form-label text-md-right color-blanco"
                            >Apellido</label
                        >
                        <div class="col-md-6">
                            <input
                                id="lastname_usuario"
                                placeholder="Tú apellido"
                                type="text"
                                class="form-control"
                                name="lastname_usuario"
                                required
                                autocomplete="lastname_usuario"
                                v-model="usuario.lastname_usuario"
                                disabled
                            />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for="email"
                            class="col-md-4 col-form-label text-md-right color-blanco"
                            >Email</label
                        >
                        <div class="col-md-6">
                            <input
                                id="email"
                                type="email"
                                placeholder="Tú correo"
                                class="form-control"
                                name="email"
                                required
                                autocomplete="email"
                                v-model="usuario.email"
                            />
                            <span
                                style="color: red"
                                role="alert"
                                v-for="(pass, index) in errors.email"
                                :key="index"
                                >{{ pass }}</span
                            >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for=""
                            class="col-md-4 col-form-label text-md-right color-blanco"
                            >Fecha de Nacimiento</label
                        >
                        <div class="col-md-6">
                            <input
                                id="fecha_nacimiento"
                                type="date"
                                class="form-control"
                                name="fecha_nacimiento"
                                required
                                autocomplete="fecha_nacimiento"
                                autofocus
                                v-model="usuario.fecha_nacimiento"
                                disabled
                            />
                            <span
                                style="color: red"
                                role="alert"
                                v-for="(pass, index) in errors.fecha_nacimiento"
                                :key="index"
                                >{{ pass }}</span
                            >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for=""
                            class="col-md-4 col-form-label text-md-right color-blanco"
                            >Telefono</label
                        >
                        <div class="col-md-6">
                            <input
                                id="telefono"
                                type="tel"
                                placeholder="Tú número"
                                class="form-control"
                                name="telefono"
                                required
                                autocomplete="telefono"
                                autofocus
                                v-model="usuario.telefono"
                            />
                            <span
                                style="color: red"
                                role="alert"
                                v-for="(pass, index) in errors.telefono"
                                :key="index"
                                >{{ pass }}</span
                            >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for=""
                            class="col-md-4 col-form-label text-md-right color-blanco"
                            >Contraseña</label
                        >
                        <div class="col-md-6">
                            <input
                                id="password"
                                type="password"
                                placeholder="Ingresa tu contraseña"
                                class="form-control"
                                name="password"
                                required
                                autocomplete="password"
                                autofocus
                                v-model="usuario.password"
                            />
                            <span
                                style="color: red"
                                role="alert"
                                v-for="(pass, index) in errors.password"
                                :key="index"
                                >{{ pass }}</span
                            >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label
                            for=""
                            class="col-md-4 col-form-label text-md-right color-blanco"
                            >ConfirmarContraseña</label
                        >
                        <div class="col-md-6">
                            <input
                                id="password-confirm"
                                type="password"
                                placeholder="Confirma tu Contraseña"
                                class="form-control"
                                name="password_confirm"
                                required
                                autocomplete="password"
                                autofocus
                                v-model="confirmar"
                            />
                            <span
                                style="color: red"
                                role="alert"
                                v-for="(pass, index) in confirmacion"
                                :key="index"
                                >{{ pass }}</span
                            >
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4 text-right">
                            <button @click="actualizar" class="btn btn-warning">
                                Modificar Cuenta
                            </button>
                            <button
                                @click="cancelarActualizacion"
                                class="btn btn-danger"
                            >
                                Cancelar
                            </button>
                        </div>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
        <info-user-component :usuario="usuario" @abrirModal="mostrarModal" />
    </div>
    
</template>
<script>
export default {
    data() {
        return {
            usuario: [],
            errors: {},
            confirmacion: [],
            confirmar: "",
            response: "",
            modificar: false
        };
    },
    methods: {
        mostrarModal() {
            this.modificar = true;
        },
        cancelarActualizacion() {
            this.modificar = false;
        },
        actualizar() {
            if (
                this.usuario.password === this.confirmar &&
                this.usuario.password != "" &&
                this.confirmar != ""
            ) {
                axios
                    .put(`/user/${this.usuario.id}`, this.usuario)
                    .then(res => {
                        this.response = res.data.message;
                        this.limpiarErrores();
                    })
                    .catch(error => {
                        if (error.response.status === 422) {
                            const {
                                fecha_nacimiento,
                                password,
                                password_confirm,
                                telefono,
                                email
                            } = error.response.data.errors;
                            this.errors = {
                                fecha_nacimiento,
                                password_confirm,
                                telefono,
                                email,
                                password
                            };
                        }
                    });
                this.modificar = false;
            } else if (this.confirmar == "" && this.usuario.password == "") {
                this.confirmacion = [];
                this.confirmacion.push(
                    "Los campos Contraseña y Confirmar Contraseña son requeridos"
                );
            } else {
                this.confirmacion = [];
                this.confirmacion.push(
                    "No coincide la confirmacion de contrasena"
                );
            }
        },
        limpiarErrores() {
            this.errors = {};
            this.confirmar = "";
            this.confirmacion = [];
        }
    },

    created() {
        axios.get("/user").then(res => {
            this.usuario = res.data;
            this.usuario.password = "";
        });
    }
};
</script>
<style scoped>
.mostrar {
    margin-top: 1rem;
    display: list-item;
    opacity: 1;
    background: rgba(44, 38, 75, 0.489);
}
.container{
  height: 100vh;
}
</style>
