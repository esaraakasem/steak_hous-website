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
                        <div class="card-header"><strong>Company</strong><small> Form</small></div>
                        <div class="card-body card-block">
                            {!!Form::open( ['route' => 'Blates.store' , 'method' => 'Post','files' => true]) !!}


                            <div class="form-group"><label for="company" class=" form-control-label">Name : </label><input  name="Name" type="text" id="Name" placeholder="Enter Name name" class="form-control"></div>

                            <div class="form-group"><label for="vat" class=" form-control-label">Category: </label>  {!! Form::select("categories_id",$categories,null,['class'=>'form-control']) !!} </div>
                            <div class="row form-group">
                                <div class="col-8">
                                    <div class="form-group"><label for="city" class=" form-control-label">Price:</label><input type="text" name="price" placeholder="Enter price" class="form-control"></div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group"><label for="postal-code" class=" form-control-label">  Description : </label><div class="col-12 col-md-9"><textarea name="description" id="description" rows="9" placeholder="Content..." class="form-control"></textarea></div></div>
                                </div>
                                <div class="col-8">
                                    <div class="form-group"><div><label for="postal-code" class=" form-control-label">  File : </label></div><<div class="col-12 col-md-9"><input type="file" name="file" ></div></div>

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