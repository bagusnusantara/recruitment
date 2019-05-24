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
                                        <li>Industry: <strong>{{$lowongan->st_spesialisasi_pekerjaan_id}}</strong></li>
                                        <li>Company size: <strong> 5k-10k People</strong></li>
                                        <li>Job type: <strong>Permanent</strong></li>
                                        <li>Experience level: <strong>Mid-Level, Senior, Lead</strong></li>
                                        <li>Salary: <strong>Negotiable</strong></li>
                                        <li>Location: <strong>Place 1 / Place 2</strong></li>

                                    </ul>
                                </div>
                                <hr>
                                <div class="tech-job">
                                    <h5 class="w3layouts_pvt-head">technologies included.</h5>
                                    <ul class="e-tags">
                                        <li>javascript</li>
                                        <li>php</li>
                                        <li>computer vision</li>
                                        <li>angular js</li>
                                        <li>c++</li>
                                    </ul>
                                </div>
                                <hr>
                            </div>
                        </div>

                        <div class="job-role">
                            <h5 class="w3layouts_pvt-head">Persyaratan</h5>
                            {{$lowongan->persyaratan}}
                        </div>
                        <div class="job-role">
                            <h5 class="w3layouts_pvt-head">Deskripsi Pekerjaan</h5>
                            {{$lowongan->deskripsi_pekerjaan}}
                        </div>




                        <a href="#exampleModal" class="btn wthree-bnr-btn text-capitalize" data-toggle="modal" aria-pressed="false"
                            data-target="#exampleModal" role="button">Lamar Pekerjaan</a>
                    </div>

                </div>

            </div>
        </section>
    </div>
</section>

@endsection
