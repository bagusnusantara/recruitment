@extends('template.index')

@section('main')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Setting Profile</h2>
        <ol class="breadcrumb">
            <li>
                <a href="#">Dashboard</a>
            </li>
            <li>
                <a>Setting Profile</a>
            </li>
        </ol>
    </div>
	            
</div>

        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">

                <div class="col-lg-12">
				
					@if ($message = Session::get('success'))

						<div class="alert alert-success alert-block">

							<button type="button" class="close" data-dismiss="alert">×</button>

							<strong>{{ $message }}</strong>

						</div>

					@endif

					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

                    <div class="ibox">
                        <div class="ibox-content">
                           
						<div class="profile-info">
							<div class="text-center">
								<div>
									<h1 class="no-margins"><b>
									   Profil {{ Auth::user()->name }}</b>
									</h1><br>
									<img class="rounded-circle circle-border m-b-md" src="/storage/avatars/{{ $user->avatar }}" style="width: 275px; height: 275px"/>
									
									<h4>{{ Auth::user()->roles }}</h4>
									<small>
										Email : {{ Auth::user()->email }}
									</small>
									
															<form action="/admin/profile" method="post" enctype="multipart/form-data">
								@csrf
								<div class="form-group"><center>
									<input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp">
									<small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
								</center>
								</div>
								<button type="submit" class="btn btn-primary">Ganti Foto Profil</button>
							</form>
								</div>
							</div>
						</div>

                        </div>
                    </div>


                </div>



            </div>

        </div>


@include('template.footer')


@endsection
