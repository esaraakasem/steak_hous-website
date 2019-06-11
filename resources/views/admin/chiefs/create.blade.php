 @extends('admin.layouts.main')

@section("content")


    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">Basic</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content mt-3">
        <div class="animated fadeIn">


            <div class="row">

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header"><strong>Add</strong><small> cheif</small></div>
                        <div class="card-body card-block">
                            {!!Form::open( ['route' => 'chiefs.store' , 'method' => 'Post','files' => true]) !!}


                            <div class="form-group"><label for="company" class=" form-control-label">Name : </label><input  name="Name" type="text" id="Name" placeholder="Enter Name name" class="form-control"></div>

                            <div class="col-8">
                                <div class="form-group"><label for="city" class=" form-control-label">salary:</label><input type="text" name="salary" placeholder="Enter price" class="form-control"></div>
                            </div>
                            <div class="col-8">
                                <div class="form-group"><label for="postal-code" class=" form-control-label">  File : </label><input type="file" name="file" ></div></div>

                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Create
                        </button>
                        {!!Form::close() !!}
                    </div>

                </div>


            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
    </div><!-- /#right-panel -->
    <!-- Right Panel -->
@endsection()