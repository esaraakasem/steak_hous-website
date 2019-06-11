@extends('admin.layouts.main')
@section('content')
    <div class="myDiv">



        <!-- -------------------------------------------- -->


        <!-- start my-panel -->
        <div class="my-panel zz" id="tab2-content">


            <div class="col-xs-12">

                <div class="panel panel-default">

                    <div class="panel-heading">Contacts</div>

                    <div style="padding-top:10px;padding-bottom:10px" class="btn-block">

                        <div class="xpanel-body">

                            <div class="table-responsive">

                                <table class="table table-hover">
                                    <thead>
                                    <tr style="cursor:pointer">
                                        <th>ID</th>


                                        <th>Name</th>

                                        <th>Email</th>
                                        <th>message</th>



                                    </tr>
                                    </thead>

                                    <!-- -------------------------------------------------------------------------- -->





                                    <tbody>
                                    @foreach($contacts as $contact)
                                        <tr style="cursor:pointer">

                                            <td>{{$contact->id}}</td>

                                            <td>{{$contact->Name}}</td>
                                            <td class="hidden-xs hidden-sm">{{$contact->E_mail}}</td>

                                            <td>{{$contact->message}}</td>


                                        </tr>
                                    @endforeach
                                    <!-- --------------------------------------------------------------------------- -->


                                    <!-- --------------------------------------------------------------------------- -->




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

@endsection