<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card-body contenedor sombra gradiente-form">
					<h2 class="text-center padding-bottom color-blanco">Actualizar Datos</h2>
					<!-- <form @submit.prevent="actualizar()" > -->
						<div class="form-group row">
							<label for="" class="col-md-4 col-form-label text-md-right color-blanco">Nombre</label>
							<div class="col-md-6">
								<input id="name_usuario" placeholder="Tú nombre" type="text" class="form-control" required autocomplete="name_usuario" autofocus v-model="usuario.name_usuario" disabled>

							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-md-4 col-form-label text-md-right color-blanco">Apellido</label>
							<div class="col-md-6">
								<input id="lastname_usuario" placeholder="Tú apellido" type="text" class="form-control" name="lastname_usuario"  required autocomplete="lastname_usuario" v-model="usuario.lastname_usuario" disabled>
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-md-4 col-form-label text-md-right color-blanco">Email</label>
							<div class="col-md-6">
								<input id="email" type="email" placeholder="Tú correo" class="form-control" name="email"  required autocomplete="email" v-model="usuario.email">
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-md-4 col-form-label text-md-right color-blanco">Fecha de Nacimiento</label>
							<div class="col-md-6">
								<input id="fecha_nacimiento" type="date" class="form-control" name="fecha_nacimiento"  required autocomplete="fecha_nacimiento" autofocus v-model="usuario.fecha_nacimiento" disabled>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-md-4 col-form-label text-md-right color-blanco">Telefono</label>
							<div class="col-md-6">
								<input id="telefono" type="tel" placeholder="Tú número" class="form-control" name="telefono"  required autocomplete="telefono" autofocus v-model="usuario.telefono">
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-md-4 col-form-label text-md-right color-blanco">Contraseña</label>
							<div class="col-md-6">
								<input id="password" type="password" placeholder="Ingresa tu contraseña" class="form-control" name="password"  required autocomplete="password" autofocus v-model='usuario.password'>
							</div>
						</div>
						<div class="form-group row">
							<label for="" class="col-md-4 col-form-label text-md-right color-blanco">ConfirmarContraseña</label>
							<div class="col-md-6">
								<input id="password-confirm" type="password" placeholder="Confirma tu Contraseña" class="form-control" name="password-confirm"  required autocomplete="password" autofocus>
							</div>
						</div>
						<div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4 text-right">
                                <button @click="actualizar" class="btn btn-default">
                                    Modificar Cuenta
                                </button>
                                <button type="submit" class="btn btn-danger">
                                    Eliminar Cuenta
                                </button>
                            </div>

						</div>
					<!-- </form> -->
				</div>
			</div>
		</div>
	</div>	

</template>
<script>
	export default {
		data(){
			return {
				usuario:[],
				error:[]
			}
		},
		methods:{
			actualizar(){
				axios.put(`/user/${this.usuario.id}`,this.usuario).then(res=>{
					console.log(res.data.user)
					this.usuario = res.data.user
				}).catch(e=>{
					this.error = e.data;
				})
			}
		}
		,
		created(){
			axios.get('/user').then(res=>{
				console.log(res.data)
				this.usuario = res.data
			})
			
		}

	}

</script>
<style scoped>
	
</style>