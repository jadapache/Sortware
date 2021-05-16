<div class="modal fade" id="create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Añadir / Retirar Inventario</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>
                
            </div>
            <div class="modal-body">
                <form action="/productos/{{$producto->id}}" method="POST">
                    @csrf
                    @method('PUT')
                
                    <div class="mb-3">
                        <label for="codigo" class="form-label">Código</label>
                        <input id="codigo" name="codigo" type="text" readonly="readonly" class="form-control" value="{{$producto->codigo}}" tabindex="1" required>
                    </div>
                
                    <div class="mb-3">
                        <label for="nombreP" class="form-label">Nombre</label>
                        <input id="nombreP" name="nombreP" type="text" readonly="readonly" class="form-control" value="{{$producto->nombreP}}" tabindex="2" required>
                    </div>
                    <div class="mb-3">
                        <input id="descripcion" name="descripcion" type="text"  hidden class="form-control" value="{{$producto->descripcion}}" tabindex="3" required> 
                    </div>
                    <div class="mb-3">
                        <label for="unidades" class="form-label">Unidades Disponibles:</label>
                        <label for="unidades" class="form-label" >{{$producto->unidades}}</label>
                        <br/>
                        <label for="unidades" class="form-label">Unidades a mover</label>
                        <input id="unidades" name="unidades" type="number" stop="any" step="1" class="form-control" value="{{$producto->unidades}}" tabindex="4" required>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input id="precio" name="precio" type="number" readonly="readonly" stop="any"  step="1" class="form-control" value="{{$producto->precio}}" tabindex="5" required>
                    </div>
                        
                    <div class="modal-footer">
                        <a style="margin-left: 0px;" href="/movimientos" class="btn btn-secondary" tabindex="6">Cancelar</a>
                        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>