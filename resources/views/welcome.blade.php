<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Produto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <!-- Título da página -->
    <h2>Cadastrar Produto</h2>


    @if(session('success'))
        <div class="alert alert-success"> {{ session('success') }} </div>
    @endif


    <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data">
       
        @csrf

   
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>

  
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3"></textarea>
        </div>


        <div class="mb-3">
            <label for="tamanho" class="form-label">Tamanho</label>
            <input type="text" class="form-control" id="tamanho" name="tamanho">
        </div>

        <div class="mb-3">
            <label for="cor" class="form-label">Cor</label>
            <input type="text" class="form-control" id="cor" name="cor">
        </div>

 
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="number" class="form-control" id="preco" name="preco" step="0.01" required>
        </div>


        <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" required>
        </div>

   
        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem</label>
            <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*">
        </div>


        <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
    </form>
</div>

</body>
</html>
