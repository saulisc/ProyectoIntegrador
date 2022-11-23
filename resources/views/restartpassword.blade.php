@extends('template')

@section('contenido')

    <div class="container mt-5 mb-5">
        <div class="abs-center">
            <div class="card text-center" style="width: 300px;">
                <div class="card-header h5 text-white bg-primary">Reestablecer contraseña</div>
                <div class="card-body px-5">
                    <p class="card-text py-2">
                        Ingresa tu email para enviarte un correo y poder reestablecer la contraseña
                    </p>
                    <div class="form-outline">
                        <label class="form-label" for="typeEmail">Email</label>

                        <input type="email" id="typeEmail" class="form-control my-3" />
                    </div>
                    <a href="#" class="btn btn-primary w-100">Reestablecer contraseña</a>
                    <div class="d-flex justify-content-between mt-4">
                        <a class="" href="login">Ingresar</a>
                        <a class="" href="#">Registrar</a>
                    </div>
                </div>
            </div>
        </div>


    @stop
