<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
    <title>MyShop - Ecommerce</title>
</head>
<body>
  
<nav class="navbar navbar-light navbar-expand-md bg-light px-5 mb-5">
    <a href="#" class="navbar-brand">MyShop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="navbar-nav">
            <a class="nav-link" href="#">HOME</a>
            <a class="nav-link" href="#">Categorias</a>
            <a class="nav-link" href="#">Cadastrar</a>
        </div>
    </div>
    <a href="#" class="btn btn-md"><i class="bi bi-cart"></i></a>
</nav>

<div class="container">
    <div class="row">

    

        <div class="col-3 mb-3">
            <div class="card custom-card">
                <img src="{{ asset('img/camisa1.png') }}" class="card-img-top img-custom-size" alt="Exemplo de Sapato">
                <div class="card-body custom-card">
                    <h6 class="card-title">Produto 1</h6>
                    <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>

                </div>
            </div>
        </div>

        <div class="col-3 mb-3">
            <div class="card custom-card">
                <img src="{{ asset('img/camisa2.png') }}" class="card-img-top img-custom-size" alt="Exemplo de Sapato">
                <div class="card-body custom-card">
                    <h6 class="card-title">Produto 2</h6>
                   <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                </div>
            </div>
        </div>

        <div class="col-3 mb-3">
            <div class="card custom-card">
                <img src="{{ asset('img/camisa3.png') }}" class="card-img-top img-custom-size" alt="Exemplo de Sapato">
                <div class="card-body custom-card">
                    <h6 class="card-title">Produto 3</h6>
                   <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                </div>
            </div>
        </div>

        <div class="col-3 mb-3">
            <div class="card custom-card">
                <img src="{{ asset('img/camisa4.png') }}" class="card-img-top img-custom-size" alt="Exemplo de Sapato">
                <div class="card-body custom-card">
                    <h6 class="card-title">Produto 4</h6>
                   <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                </div>
            </div>
        </div>

        <div class="col-3 mb-3">
            <div class="card custom-card">
                <img src="{{ asset('img/camisa5.png') }}" class="card-img-top img-custom-size" alt="Exemplo de Sapato">
                <div class="card-body custom-card">
                    <h6 class="card-title">Produto 5</h6>
                   <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                </div>
            </div>
        </div>

        <div class="col-3 mb-3">
            <div class="card custom-card">
                <img src="{{ asset('img/camisa6.png') }}" class="card-img-top img-custom-size" alt="Exemplo de Sapato">
                <div class="card-body custom-card">
                    <h6 class="card-title">Produto 6</h6>
                   <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                </div>
            </div>
        </div>

        
        
    </div>
</div>

</body>
</html>
