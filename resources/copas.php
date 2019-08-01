<div class="ibox ">
                <div class="ibox-title">
                    <h5>List Poduk</h5>

                </div>
                <div class="ibox-content">
                    <div class="text-right">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">
                                  +
                              </button>
                    </div>
                    <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                    <h4 class="modal-title">Insert Produk</h4>
                                </div>
                                <!-- <div class="modal-body">
                                  <form method="POST" action="{{url('/pengajuanpembelian')}}" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf

                                </div> -->

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <br>
                    <br>

                    <!-- <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Kode</th>
                        <th>Gudang</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach($item_planning_list as $item_planning)
                      <tr>
                      <td>1</td>
                      <td>{{ $item_planning->kode }}</td>
                      <td>{{ $item_planning->deskripsi }}</td>
                      <td></td>
                      <td>

                      </td>
                      @endforeach
                      </tr>
                    </tbody>
                    </table> -->

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                @foreach($item_planning_list as $item_planning)
                  <div class="col-md-4">
                   <div class="ibox">
                       <div class="ibox-content product-box">

                           <div class="product-imitation">
                               {{ $item_planning->deskripsi }}
                           </div>
                           <div class="product-desc">
                               <span class="product-price">
                                   {{ $item_planning->kode }}
                               </span>
                               <small class="text-muted">{{ $item_planning->kode }}</small>
                               <a href="#" class="product-name"><h4> {{ $item_planning->deskripsi }}</h4></a>
                               <div class="m-t text-righ">

                                   <a href="#" class="btn btn-xs btn-outline btn-primary">Detail <i class="fa fa-long-arrow-right"></i> </a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               @endforeach
          </div>
        </div>




                </div>
            </div>
