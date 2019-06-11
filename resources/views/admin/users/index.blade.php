@extends("admin.layouts.main")

@section('content')
    <div class="myDiv">



        <!-- -------------------------------------------- -->


        <!-- start my-panel -->
        <div class="my-panel zz" id="tab2-content">


            <div class="col-xs-12">

                <div class="panel panel-default">

                    <div class="panel-heading">Latest Products</div>

                    <div style="padding-top:10px;padding-bottom:10px" class="btn-block">

                        <div class="xpanel-body">

                            <div class="table-responsive">

                                <table class="table table-hover">
                                    <thead>
                                    <tr style="cursor:pointer">
                                        <th>ID</th>


                                        <th>Name</th>

                                        <th>Email</th>



                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>

                                    <!-- -------------------------------------------------------------------------- -->





                                    <tbody>
                                    @foreach($users as $user)
                                        <tr style="cursor:pointer">

                                            <td>{{$user->id}}</td>

                                            <td>{{$user->Name}}</td>
                                            <td class="hidden-xs hidden-sm">{{$user->Email}}</td>

                                            <td>
                                                <a  href="/Blates/{{$user->id}}/edit" data-placement="top" data-toggle="tooltip" title="" data-original-title="Edit">
                                                    <button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#Edit">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                                <a  href="/Admin/User/{{$user->id}}" data-placement="top" data-toggle="tooltip" title="" data-original-title="Delete">
                                                    <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#Delete">
                                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                    </button>
                                                </a>
                                            </td>

                                        @endforeach
                                        <!-- --------------------------------------------------------------------------- -->

                                        </tr>
                                            <!-- --------------------------------------------------------------------------- -->




                                    </tbody>


                                    <!-- --------------------------------------------------------------------------- -->

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection