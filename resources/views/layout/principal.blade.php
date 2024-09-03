<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/custom.css">
    <title>Controle de estoque</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/produtos">
                        Estoque Laravel
                </a>
            </div>
            <ul class="nav navbar-right nav-menu">
                <div class="botao-listagem"><li><button type="button" class="btn btn-outline-primary"><a href="{{ route('produtos.lista') }}">Listagem</a></button></li></div>
                <li><button type="button" class="btn btn-outline-secondary"><a href="{{ route('produtos.novo') }}">Novo</a></button></li>
            </ul>
        </div>
        @yield('conteudo')
    </head>
        <footer class="footer">
        <p>© Livro de Laravel da Casa do Código.</p>
        </footer>
    </div>
</body>
</html>
