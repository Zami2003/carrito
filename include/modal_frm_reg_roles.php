 <!-- Large modal -->
 <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target=".registrar">+ Nuevoo</button>


<div class="modal fade registrar" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title h4" id="myLargeModalLabel">Lista de usuarios</h5>
                                                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="operaciones/registrar_roles.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label class="col-lg-2 col-md-2 col-sm-12" > Nombre: </label>
                                        <input type="text" name="nombre" class="form-control col-lg-4 col-md-4 col-sm-12" required>
                                    </div>
                                    

                                    <div class="form-group row">
                                    <label class="col-lg-2 col-md-2 col-sm-12"></label>
                                        <button type="submit" class="btn btn-danger">Guardar</button>
                                    </div>
                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>