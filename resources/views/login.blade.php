@extends('template')

@section('contenido')
    <div class="container mt-5 mb-5">
        <h3 class="text-center"> Iniciar sesión </h3>
        <form>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" />
                <label class="form-label" for="form2Example1">Email</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" />
                <label class="form-label" for="form2Example2">Contraseña</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Recordar cuenta </label>
                    </div>
                </div>

                <div class="col">
                    <!-- Simple link -->
                    <a href="restartpassword">Olvidé la contraseña</a>
                </div>
            </div>

            <!-- Submit button -->
            <button type="button" class="btn btn-primary btn-block mb-4">Iniciar sesión</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Aun no eres cliente? <a href="registeruser">Registar</a></p>
                
            </div>
        </form>
        <div>
@stop
