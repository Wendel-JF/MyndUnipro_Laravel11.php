<div>
    <!-- Modal de Cadastro -->
    <div class="modal fade" id="createAlunoModal" tabindex="-1" aria-labelledby="createAlunoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createAlunoModalLabel">Cadastrar Aluno</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="save">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" wire:model.defer="aluno.nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" wire:model.defer="aluno.email" required>
                        </div>
                        <div class="mb-3">
                            <label for="matricula" class="form-label">Matrícula</label>
                            <input type="text" class="form-control" id="matricula" wire:model.defer="aluno.matricula" required>
                        </div>
                        <div class="mb-3">
                            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="data_nascimento" wire:model.defer="aluno.data_nascimento" required>
                        </div>
                        <div class="mb-3">
                            <label for="curso" class="form-label">Curso</label>
                            <input type="text" class="form-control" id="curso" wire:model.defer="aluno.curso" required>
                        </div>
                        <div class="mb-3">
                            <label for="campus" class="form-label">Campus</label>
                            <input type="text" class="form-control" id="campus" wire:model.defer="aluno.campus" required>
                        </div>
                        <div class="mb-3">
                            <label for="sexo" class="form-label">Sexo</label>
                            <select class="form-select" id="sexo" wire:model.defer="aluno.sexo">
                                <option value="">Selecione</option>
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" wire:model.defer="aluno.telefone">
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Edição -->
    <div class="modal fade" id="editAlunoModal" tabindex="-1" aria-labelledby="editAlunoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editAlunoModalLabel">Editar Aluno</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="save">
                        <!-- Utilize os mesmos campos do modal de cadastro -->
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" wire:model.defer="aluno.nome" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" wire:model.defer="aluno.email" required>
                        </div>
                        <div class="mb-3">
                            <label for="matricula" class="form-label">Matrícula</label>
                            <input type="text" class="form-control" id="matricula" wire:model.defer="aluno.matricula" required>
                        </div>
                        <div class="mb-3">
                            <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control" id="data_nascimento" wire:model.defer="aluno.data_nascimento" required>
                        </div>
                        <div class="mb-3">
                            <label for="curso" class="form-label">Curso</label>
                            <input type="text" class="form-control" id="curso" wire:model.defer="aluno.curso" required>
                        </div>
                        <div class="mb-3">
                            <label for="campus" class="form-label">Campus</label>
                            <input type="text" class="form-control" id="campus" wire:model.defer="aluno.campus" required>
                        </div>
                        <div class="mb-3">
                            <label for="sexo" class="form-label">Sexo</label>
                            <select class="form-select" id="sexo" wire:model.defer="aluno.sexo">
                                <option value="">Selecione</option>
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                                <option value="Outro">Outro</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="telefone" wire:model.defer="aluno.telefone">
                        </div>
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('openCreateModal', event => {
            const modal = new bootstrap.Modal(document.getElementById('createAlunoModal'));
            modal.show();
        });

        window.addEventListener('openEditModal', event => {
            const modal = new bootstrap.Modal(document.getElementById('editAlunoModal'));
            modal.show();
        });

        window.addEventListener('closeModal', event => {
            const createModal = new bootstrap.Modal(document.getElementById('createAlunoModal'));
            const editModal = new bootstrap.Modal(document.getElementById('editAlunoModal'));
            createModal.hide();
            editModal.hide();
        });
    </script>
</div>


