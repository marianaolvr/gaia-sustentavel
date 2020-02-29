{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleCatalogo.css') }}">

<title>Higiene pessoal</title>

@section ('higiene')
    <div class="pagina container">
        {{-- @include('aside-catalogo') --}}
        
        <main>
            <div class="row">
                @foreach ($cosmeticos as $cosmetico)
                    <div class="col-4 mb-3">
                        <div class="card">
                            <img src="/img/produtos/{{$cosmetico['img_product']}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-dark text-decoration-none" href="/produto/{{$cosmetico['id']}}">{{$cosmetico['name']}}</a></h5>
                                <p class="card-text">{{$cosmetico['price']}}</p>
                                <div class="btn-produto">
                                    <a href="/produto/{{$cosmetico['id']}}" class="btn text-light">Comprar</a>
                                    <a href=""><i class="material-icons">
                                            favorite_border
                                    </i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </div>

@endsection    
    
    