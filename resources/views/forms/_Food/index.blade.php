<div class="row">
    <div class="mb-3">
        <label for="">Nome do Prato</label>
        <input name="prato" type="text" class="form-control input-default "
            value="{{ isset($prato->prato) ? $prato->prato : old('prato') }}"
            placeholder="Nome do Prato">
    </div>

    <div class="mb-3">
        <label for="">Preço do Prato</label>
        <input type="text" class="form-control input-rounded"
            placeholder="Preço do Prato" {{ isset($prato->preco) ? $prato->preco : old('preco') }}>
    </div>
    <div class="mb-3">
        <label for="">Imagem do Prato</label>
        <input type="text" class="form-control input-rounded"
            placeholder="Imagem do Prato">
    </div>
    <div class="mb-3">
        <label for="">Descrição do Prato</label>
        <textarea class="form-control" rows="7" id="comment">{{ isset($prato->descricao) ? $prato->descricao : old('descricao') }}</textarea>
    </div>
</div>
