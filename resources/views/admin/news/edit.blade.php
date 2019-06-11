@extends('admin.layout.main')
@section('title')
    تعديل الخبر
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
            {!!Form::model($new, ['route' => ['admin.news.update' ,$new->id] ,'class'=>'phone_validate','method' => 'PATCH','files'=>true]) !!}
            @include('admin.news.form')
            {!!Form::close() !!}
        </div>


    </div>
@endsection


