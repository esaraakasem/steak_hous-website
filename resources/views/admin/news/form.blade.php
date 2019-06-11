@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<div class="form-group col-md-6 pull-left">
    <label>عنوان اول باللغه العربيه  </label>
    {!! Form::text("ar_title1",null,['class'=>'form-control','placeholder'=>'الاسم باللغه العربيه  '])!!}
</div>


<div class="form-group col-md-6 pull-left">
    <label>عنوان اول باللغه الانجليزيه  </label>
    {!! Form::text("en_title1",null,['class'=>'form-control','placeholder'=>'الاسم باللغه الانجليزيه   '])!!}
</div>





<div class="form-group col-md-12 pull-left">
    <label>الوصف باللغه  العربيه </label>
    {!! Form::textarea("ar_description",null,['class'=>'form-control','id'=>'text'])!!}
</div>


<div class="form-group col-md-12 pull-left">
    <label>الوصف  بااللغه  الانجليزيه</label>
    {!! Form::textarea("en_description",null,['class'=>'form-control','id'=>'text1'])!!}
</div>





@if( isset($new))

    <div class="form-group col-md-6 pull-left">
        <label>الصوره السابقه: </label>
        <img src="{{getimg($new->image)}}" style="width:100px; height:100px">
    </div>


@endif


<div class="form-group col-md-6 pull-left">
    <label>الصوره </label>
    {!! Form::file("image",null,['class'=>'form-control'])!!}
</div>




<div class="text-center col-md-12">
    <div class="text-right">
        <button type="submit" id="register" class="btn btn-success">حفظ <i class="icon-arrow-left13 position-right"></i></button>
    </div>
</div>

@section('script')
    {{--<script src="{{asset('/dashboard/assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>--}}
    {!! Html::script('/dashboard/ckeditor/ckeditor.js') !!}
    <script>
        $(document).ready(function () {
            /*$('#text').summernote();*/
            CKEDITOR.replace('text');
            CKEDITOR.replace('text1');
        });
    </script>

@endsection