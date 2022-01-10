@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
            @if(isset($message))
            <div id="ajax-alert" class="alert" >
                @if($message==200)
                    <p class="alert">İşiniz Oluşturuldu</p>
                    @elseif($message==400)
                    <p class="alert">İşiniz Oluşturulmadı</p>
                @else
                    <p class="alert">Hay Aksi Bir Terslik Meydana Geldi</p>
                @endif

            </div>
            @endif
                @if (Session::has('message'))
                    <div class="alert alert-info">{{ Session::get('message') }}</div>
                @endif
            <div class="card">
				<div class="card-header">Görevler
					<a data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-plus"></i></a>
				</div>


				<div class="card-body">
					@foreach($task as $value)
					<div class="alert alert-success" role="alert">
						{{ $value->name }}
						<br>
						<a data-toggle="modal" data-target="#exampleModal{{$value->id}}"><i class="fa fa-pen"></i></a><br>
						<form action="{{ route('task.destroy', $value->id) }}" method="POST">
							@csrf
							@method('DELETE')

							<button onclick="return window.confirm('Silmek istediğinize eminmisiniz?');" style="border: none;" type="submit" class="btn-link"><i class="fa fa-trash"></i></button>
						</form>

					</div>
					<div class="modal fade" id="exampleModal{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalTitle" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Düzenlenecek</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form action="{{ route('task.update', $value->id) }}" method="post">
										@csrf
										@method('put')
										<div class="form-group">
											<label>İş</label>
											<input type="text" class="form-control" value="{{$value->name}}" name="name" id="name">
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary">Kaydet</button>
										</div>
									</form>
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


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Eklenecek Event</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="{{ route('task.store') }}" method="post">
					@csrf
					<div class="form-group">
						<label>İş</label>
						<input type="text" class="form-control" name="name" id="name">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Kaydet</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>




@endsection

