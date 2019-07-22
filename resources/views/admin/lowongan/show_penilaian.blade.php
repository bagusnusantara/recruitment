@extends('template.index')

@section('main')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-12">
            <h2>Penerimaan Karyawan</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="active">
                    <strong>Dashboard</strong>
                </li>
            </ol>

        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Penerimaan Karyawan</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <h2>
                            Seleksi Penerimaan Karyawan
                        </h2>

                        <div class="row">
                        <form id="form" action="#" class="wizard-big">
                            @if($status[0])
                            <h1 class='col'>Administrasi</h1>
                            <fieldset>
                                <h2>Seleksi Administrasi</h2>
                                <div class="row">
                                        <div class="col-lg-8">
                                          <div class="form-group">
                                            <label>Status</label>
                                          <select class="form-control m-b  required" name="account">
                                              <option>Lolos</option>
                                              <option>Tidak Lolos</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                              <input id="userName" name="userName" type="textarea" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="text-center">
                                            <div style="margin-top: 20px">
                                                <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            @endif
                            <h1 class="col">Walk in Interview</h1>
                            <fieldset>
                                <h2>Seleksi Walk in Interview</h2>
                                <div class="row">
                                        <div class="col-lg-8">
                                          <div class="form-group">
                                            <label>Status</label>
                                          <select class="form-control m-b  required" name="account">
                                              <option>Lolos</option>
                                              <option>Tidak Lolos</option>
                                          </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Keterangan</label>
                                              <input id="userName" name="userName" type="textarea" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="text-center">
                                            <div style="margin-top: 20px">
                                                <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <h1 class='col'>TKD</h1>
                            <fieldset>
                              <div class="row">
                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <center>1</center>
                                          <input id="name" name="name" type="text" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <center>2</center>
                                          <input id="surname" name="surname" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <center>3</center>
                                          <input id="email" name="email" type="text" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <center>4</center>
                                          <input id="address" name="address" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <center>5</center>
                                          <input id="email" name="email" type="text" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <center>6</center>
                                          <input id="address" name="address" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <center>7</center>
                                          <input id="email" name="email" type="text" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <center>8</center>
                                          <input id="address" name="address" type="text" class="form-control">
                                      </div>
                                  </div>
                                  <div class="col-lg-2">
                                      <div class="form-group">
                                          <center>9</center>
                                          <input id="email" name="email" type="text" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <center>10</center>
                                          <input id="address" name="address" type="text" class="form-control">
                                      </div>
                                  </div>

                              </div>
                            </fieldset>

                            <h1 class='col'>Psikotes</h1>
                            <fieldset>
                                <h2>Hasil Seleksi Psikotes</h2>
                                <div class="row">
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <center>SE</center>
                                            <input id="name" name="name" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <center>WA</center>
                                            <input id="surname" name="surname" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <center>AN</center>
                                            <input id="email" name="email" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <center>GE</center>
                                            <input id="address" name="address" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <center>RA</center>
                                            <input id="email" name="email" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <center>ZR</center>
                                            <input id="address" name="address" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <center>FA</center>
                                            <input id="email" name="email" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <center>WU</center>
                                            <input id="address" name="address" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="form-group">
                                            <center>ME</center>
                                            <input id="email" name="email" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <center>IQ</center>
                                            <input id="address" name="address" type="text" class="form-control">
                                        </div>
                                    </div>

                                </div>
                            </fieldset>
                        </form>
                        </div>
                    </div>
                </div>
                </div>

            </div>
        </div>


</div>
</div>



</div>
</div>


@include('template.footer')
<!-- Page-Level Scripts -->
<script>
    $(document).ready(function(){
        $("#wizard").steps();
        $("#form").steps({
            bodyTag: "fieldset",
            onStepChanging: function (event, currentIndex, newIndex)
            {
                // Always allow going backward even if the current step contains invalid fields!
                if (currentIndex > newIndex)
                {
                    return true;
                }

                // Forbid suppressing "Warning" step if the user is to young
                if (newIndex === 3 && Number($("#age").val()) < 18)
                {
                    return false;
                }

                var form = $(this);

                // Clean up if user went backward before
                if (currentIndex < newIndex)
                {
                    // To remove error styles
                    $(".body:eq(" + newIndex + ") label.error", form).remove();
                    $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                }

                // Disable validation on fields that are disabled or hidden.
                form.validate().settings.ignore = ":disabled,:hidden";

                // Start validation; Prevent going forward if false
                return form.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex)
            {
                // Suppress (skip) "Warning" step if the user is old enough.
                if (currentIndex === 2 && Number($("#age").val()) >= 18)
                {
                    $(this).steps("next");
                }

                // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                if (currentIndex === 2 && priorIndex === 3)
                {
                    $(this).steps("previous");
                }
            },
            onFinishing: function (event, currentIndex)
            {
                var form = $(this);

                // Disable validation on fields that are disabled.
                // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                form.validate().settings.ignore = ":disabled";

                // Start validation; Prevent form submission if false
                return form.valid();
            },
            onFinished: function (event, currentIndex)
            {
                var form = $(this);

                // Submit form input
                form.submit();
            }
        }).validate({
                    errorPlacement: function (error, element)
                    {
                        element.before(error);
                    },
                    rules: {
                        confirm: {
                            equalTo: "#password"
                        }
                    }
                });
   });
</script>



@endsection
