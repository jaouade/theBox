@extends('base')

@section('content')
	<div class="row" >
		<div class="col-md-8 offset-md-2">
			<div class="card" style="">
				<div class="card-body">
					<div class="card-block">
						<h4 class="card-title">Mes Caisses</h4>
					</div>

					<div class="card-block">
						@foreach($caisses as $caisse)

								<div class="card">
									<div class="card-body">
										<div class="media">
											<div class="media-left p-2 media-middle">
												<h1 class="teal">{{\Illuminate\Support\Facades\Session::get('client')->nom_societe}}</h1>
											</div>
											<div class="media-body p-2">
												<h4>{{$caisse->email}}</h4>
												<span>Id Caisse : {{$caisse->id_caisse}}</span>
											</div>
												<div class="media-right bg-teal p-2 media-middle">
													<a href="{{url('switch-caisse',$caisse->id_caisse)}}">
														<i class="icon-arrow-right font-large-2 white"></i>
													</a>
												</div>

										</div>
									</div>
								</div>

						@endforeach
					</div>
				</div>

			</div>


		</div>
	</div>


@endsection
