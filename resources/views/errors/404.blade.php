@extends('layout')

@section('content')

<section class="moduler wrapper_404">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="text-center">
					<h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >404</h1>
					<h2 class="wow fadeInUp animated" data-wow-delay=".6s">
						Opps! Tienes algunos problemas</h2>
						<p class="wow fadeInUp animated" data-wow-delay=".9s">La página que está buscando fue movida, eliminada, renombrada o puede que nunca existiera.</p>
						<a href="{{ route('home') }}" class="btn btn-dafault btn-home wow fadeInUp animated" data-wow-delay="1.1s">VOLVER ATRAS</a>
						
					</div>
				</div>
			</div>
		</div>
	</section>

	@endsection