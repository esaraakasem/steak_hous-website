@extends("admin.layouts.main")

@section('content')
<div class="myDiv">






    <!-- start my-panel -->
    <div class="my-panel zz" id="tab2-content">


        <div class="col-xs-12">

            <div class="panel panel-default">

                <div class="panel-heading">Chiefs</div>

                <div style="padding-top:10px;padding-bottom:10px" class="btn-block">

                    <div class="xpanel-body">

                        <div class="table-responsive">
                            <a  class="pull-right" href="{{route("chiefs.create")}}" data-placement="top" data-toggle="tooltip" title="" data-original-title="Add">
                                <button class="btn btn-primary btn-xs" data-title="Add" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    Add New chief
                                </button>
                            </a>
                            <table class="table table-hover">
                                <thead>
                                <tr style="cursor:pointer">
                                    <th>ID</th>
                                    <th>Image</th>

                                    <th>Name</th>



                                    <th>salary</th>



                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>





                                <tbody>
                                        @foreach($chiefs as $chief)
                                <tr style="cursor:pointer">

                                    <td>{{$chief->id}}</td>
                                    <td class="hidden-xs hidden-sm">
                                        <img src="/images/{{$chief->file}}" height="100px"  width="100px" >
                                    </td>
                                    <td>{{$chief->Name}}</td>

                                    <td>{{$chief->salary}}</td>


                                    <td>
                                        <a href="/Admin/chiefs/{{$chief->id}}/edit">
                                            <button class="btn btn-success btn-xs" data-title="Edite" data-toggle="modal" data-target="#Edit"  >
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        {!!Form::open( ['route' =>['chiefs.destroy',$chief->id] , 'method' => 'DELETE']) !!}

                                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#Delete">
                                                <i class="fa fa-trash-o" aria-hidden="true" ></i>
                                            </button>
                                        {!! Form::close() !!}
                                    </td>

                                @endforeach
                                <!-- --------------------------------------------------------------------------- -->

                                </tr>
                         - --------------------------------------------------------------------------- -->




                                </tbody>


                                <!-- --------------------------------------------------------------------------- -->

                            </table>
                            <!-- End Table -->

                        </div>
                        <!-- /.table-responsive -->

                    </div>


                </div>
                <!-- End btn-block -->

            </div>
            <!-- End panel -->

        </div>
        <!-- End col -->



    </div>
    <! -- End My panel -->
    <!-- --------------------------------------------------------------------------- -->






    <!-- --------------------------------------------------------------------- -->

</div>

<!-- --------------------------------------------------------------------- -->

</div>
<!-- End dashboard-content -->

</div>
<!-- End Row -->


</div>
<!-- End right-side -->

<!-- --------------------------------------------------- -->

</div>
<!-- End big row -->

</div>
<!-- End container -->

@endsection
<!-- End All -->





<!-- ------------------------------------------------------------------------------- -->


