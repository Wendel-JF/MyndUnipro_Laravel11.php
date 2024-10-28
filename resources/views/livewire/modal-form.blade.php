<div>
    <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">{{ $title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="$emit('closeModal')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="submit">
                        @foreach ($inputs as $input)
                            <div class="form-group">
                                <label for="{{ $input['id'] }}">{{ $input['label'] }}</label>
                                <input type="{{ $input['type'] }}" class="form-control" id="{{ $input['id'] }}" wire:model.defer="inputs.{{ $loop->index }}.value" placeholder="{{ $input['placeholder'] }}">
                            </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('close-modal', event => {
            $('#modalForm').modal('hide');
        });
    </script>
</div>
