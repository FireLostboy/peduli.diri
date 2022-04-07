@extends('template.app')

@section('content')
<div class="container">
		<div class="row align-items-center">
            @foreach ( $user as $p)
            @if ($p->id == Auth::user()->id)
			<div class="col-md-6 order-2 order-md-1 text-center text-md-left">
				<h1 class="text-black font-weight-bold mb-4">Selamat Datang {{ $p->username }} <br> di Web Peduli Diri</h1>
			</div>
            @endif
            @endforeach
			<div class="col-md-6 text-center order-1 order-md-2">
				<img class="img-fluid" src={{asset("assetss/images/Globalization-cuate.svg")}} alt="screenshot">
			</div>
		</div>
	</div>
@endsection