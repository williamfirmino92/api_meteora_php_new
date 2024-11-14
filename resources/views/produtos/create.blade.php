<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h2>Cadastrar Produto</h2>

        @if(session('success'))
            <div class="alert alert-success"> {{ session('success')}} </div>
        @endif

        <form action="{{ route('produtos.store') }}" method="post" enctype="multipart/form-data">
            
            @csrf

            {{-- Campo para o nome do produto --}}
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" id="nome" class="form-control" name="nome" required>
            </div>

            {{-- Campo para descricao do produto --}}
            <div class="mb-3">
                <label for="descricao">Descrição</label>
                <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control"></textarea>
            </div>

            {{-- Campo para o tamanho do produto --}}
            <div class="mb-3">
                <label for="tamanho" class="form-label">Tamanho</label>
                <input type="text" id="tamanho" class="form-control" name="tamanho" required>
            </div>

            {{-- Campo para a cor do produto --}}
            <div class="mb-3">
                <label for="cor" class="form-label">Cor</label>
                <input type="text" id="cor" class="form-control" name="cor" required>
            </div>

            {{-- Campo para o preço do produto --}}
            <div class="mb-3">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" id="preco" class="form-control" name="preco" required>
            </div>

            {{-- Campo para a quantidade do produto --}}
            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" id="quantidade" class="form-control" name="quantidade" required>
            </div>

            {{-- Campo para a imagem do produto --}}
            <div class="mb-3">
              <label for="imagem" class="form-label">Imagem</label>
              <input type="file" id="imagem" class="form-control" name="imagem" accept="image/*" required>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar Produto</button>

        </form>
    </div>
</body>
</html>