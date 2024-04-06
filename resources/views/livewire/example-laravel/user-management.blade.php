
        <!-- Navbar -->
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                                <h6 class="text-uppercase text-white text-center text-lg mx-3">
                                    <strong>Tabla de empleados<strong>    
                                </h6>
                            </div>
                        </div>
                        <div class=" me-3 my-3 text-end">
                            <button class="btn bg-gradient-secondary mb-0" data-bs-toggle="modal" data-bs-target="#modal-open-form-employee">
                                <i class="material-icons text-md">add</i>
                                &nbsp;&nbsp;Agregar nuevo empleado
                            </button>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>                                            
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                ID
                                            </th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Nombre
                                            </th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Correo Electronico
                                            </th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($users as  $user)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <p class="mb-0 text-sm">{{ $user->rfid }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $user->username }}</h6>
                                                </div>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                            </td>                                        
                                            <td class="align-middle">
                                                <a rel="tooltip" class="btn btn-warning btn-link" href="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                                <button type="button" class="btn btn-danger btn-link" data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal-open-form-employee" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title font-weight-normal" id="exampleModalLabel">Crear Empleado</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form role="form text-left">
                            <div class="input-group input-group-dynamic mb-4">
                                <label class="form-label" for="basic-url">RFID</label>                                
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <div class="input-group input-group-dynamic mb-4">
                                <label class="form-label" for="basic-url">Nombre</label>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <div class="input-group input-group-dynamic mb-4">
                                <label class="form-label" for="basic-url">Correo Electronico</label>
                                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <div class="input-group input-group-dynamic mb-4">
                                <label class="form-label" for="basic-url">Puerta de Acceso</label>
                                
                            </div>
                            <br>
                            @foreach ($doors as $door)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $door->_id }}" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $loop->index+1 }}
                                </label>
                            </div>
                            @endforeach
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn bg-gradient-success">Guardar cambios</button>
                    </div>
                </div>
            </div>
        </div>

