@extends ('layouts.website.layout-website')
@section('content')
<div class='container' >
    <p>Page not found</p>
    <p>La page dont vous avez cliquez n'existe pas</p>
    <a href="{{route('products.index')}}">retour a l'accueil</a>
</div>
@endsection