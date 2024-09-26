<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitação DEMUTRAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1>Solicitação DEMUTRAN</h1>

        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="/solicitacao" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="tipo_solicitacao" class="form-label">Tipo de Solicitação</label>
                <input type="text" class="form-control" id="tipo_solicitacao" name="tipo_solicitacao">
            </div>

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
            </div>

            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
                <label for="assunto" class="form-label">Assunto</label>
                <input type="text" class="form-control" id="assunto" name="assunto">
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao"></textarea>
            </div>

            <div class="mb-3">
                <label for="doc_requerimento_url" class="form-label">Documento de Requerimento (URL)</label>
                <input type="text" class="form-control" id="doc_requerimento_url" name="doc_requerimento_url">
            </div>

            <div class="mb-3">
                <label for="cnh_url" class="form-label">CNH (URL)</label>
                <input type="text" class="form-control" id="cnh_url" name="cnh_url">
            </div>

            <!-- Continue para os demais campos -->

            <button type="submit" class="btn btn-primary">Enviar Solicitação</button>
        </form>
    </div>
</body>

</html>