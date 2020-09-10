<template>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 ">
            <div class="col-md-8">
                <div class="card">
                    <img id="img" class="mt-5" src="images/logo.png"> 
                    <div class="card-body mx-5 mt-3">    
                        <h5 class="card-title font-weight-bold">Sistema de Administracion</h5>
                        <div class="md-form form-sm mt-4">
                            <label for="form2" class="">Correo electronico</label>
                            <input type="text" id="form2" v-model="admin.email" class="form-control form-control-sm">
                        </div>

                        <div class="md-form form-sm mt-4">
                        <i class="fas fa-lock prefix"></i>
                        <label for="form3" class="">Contraseña</label>
                        <input type="password" id="form3" v-model="admin.password" class="form-control form-control-sm">
                        </div>
                        <div  class="w-100 justify-content-end">
                            <small class="forgot">¿Olvidaste tu contraseña?</small>
                        </div>
                        <button href="#" type="button" class="btn btn-primary center mt-4 px-4">Ingresar</button>
                        
                    </div>
                        <div class="card-footer text-right">
                        Consultar Deuda</div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'app',
        data(){
            return{
                admin: {'email':'', 'password': ''},
            }
        }
    }
</script>

<style >
body{
    background-image: linear-gradient(90deg,#e97e13,#b0b0b0)
}
#img{
      max-width: 170px;
    margin-bottom: 20px;
  display: block;
  margin: auto;
}
.card{
    width: 100%;
    max-width: 420px;
    display: block;
  margin: auto;
}
.card-title{
    text-align: center!important;
    font-size: 1.25rem;
}
.form-control, label{
    font-size: 1rem;
}
.center{
    display: block;
  margin: auto;
}
</style>