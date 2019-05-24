@extends('jobseeker.template.index')

@section('job')

<section class="employ-sec">
    <div class="container">
        <div class="title-sec-w3layouts_pvt text-center pb-4">
            <span class="title-wthree">Lowongan Pekerjaan</span>
            <h4 class="w3layouts_pvt-head">{{$lowongan->job_tittle}} - {{$lowongan->md_client->nama_client}}</h4>
        </div>
        <section class="employ-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9  mx-auto" id="job-desc">
                        <div class="e-left pt-lg-5">
                            <img src="{{asset('web/images/bg1.jpg') }}" alt="" class="img-fluid">
                            <hr>
                            <div class="e-desc">
                                <div class="job-desc-w3ls">
                                    <ul>
                                        <li>Role: <strong>{{$lowongan->job_tittle}}</strong></li>
                                        <li>Spesialisasi Pekerjaan: <strong>{{$lowongan->st_spesialisasi_pekerjaan_id}}</strong></li>
                                        <li>Tipe Pekerjaan: <strong>Permanent</strong></li>
                                        <li>Pengalaman Minimum: <strong>Mid-Level, Senior, Lead</strong></li>
                                        <li>Gaji: <strong>Negotiable</strong></li>
                                        <li>Lokasi Penempatan: <strong>Place 1 / Place 2</strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="job-role">
                            <h5 class="w3layouts_pvt-head">Persyaratan</h5>
                            <p>{!!$lowongan->persyaratan!!}</p>
                        </div>
                        <hr>
                        <div class="job-role">
                            <h5 class="w3layouts_pvt-head">Deskripsi Pekerjaan</h5>
                            {!!$lowongan->deskripsi_pekerjaan!!}
                        </div>

                        <form method="POST" id="postForm" action="{{url('/jobseeker/lamaran/store')}}" class="form-horizontal" enctype="multipart/form-data" onsubmit="return postForm()">
                            @csrf
                            <div class="col-sm-10"><input type="hidden" class="form-control" name="md_lowongan_pekerjaan_id" value="{{$lowongan->id}}"></div>
                            <div class="col-sm-10"><input type="hidden" class="form-control" name="users_id" value="{{ Auth::user()->id }}"></div>
                            <button class="btn wthree-bnr-btn text-capitalize" type="submit">Lamar Pekerjaan</button>
                        </form>

                    </div>

                </div>

            </div>
        </section>
    </div>
</section>

@endsection
