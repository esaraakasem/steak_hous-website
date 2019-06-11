@extends('admin.layout.main')
@section('title')
اضافه خبر جديد
@endsection
@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">

            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
        {!!Form::open( ['route' => 'admin.news.store' ,'class'=>'form phone_validate', 'method' => 'Post','files' => true]) !!}
                    @include('admin.news.form')
                    {!!Form::close() !!}
        </div>


    </div>
@endsection


