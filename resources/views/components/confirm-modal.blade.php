@props(['id' => 'confirmModal', 'title' => 'Confirmar', 'message' => '¿Estás seguro?', 'confirmText' => 'Aceptar'])

<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">{{ $title }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <p id="{{ $id }}Message">{{ $message }}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <form id="{{ $id }}Form" method="POST" action="">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">{{ $confirmText }}</button>
        </form>
      </div>
    </div>
  </div>
</div>
