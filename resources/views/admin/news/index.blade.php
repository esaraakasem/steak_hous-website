@extends('admin.layout.main')
@section('title')
   عرض الاخبار
@endsection
@section('content')
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title"></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">

        </div>

        <table class="table datatable-button-init-basic">
            <thead>
            <tr>
                <th>عنوان اول باللغه  العربيه</th>





                <th>  محتوى الخبر باللغه  العربيه</th>

                <th> الصوره</th>

                <th class="text-center">العمليات</th>
            </tr>
            </thead>
            <tbody>

@foreach($news as $new)
            <tr>
                <td>{{ $new->ar_title1}}</td>

                <td>{{ $new->ar_description}}</td>

                <td><img src="{{getimg( $new->image)}}" style="width:100px; height:100px"> </td>




                <td class="text-center">
                   <a href="{{route('admin.news.edit',['id'=>$new->id])}}" data-toggle="tooltip" data-original-title="تعديل"> <i class="icon-pencil7 text-inverse" style="margin-left: 10px"></i> </a>
                        <a href="#" onclick="Delete({{$new->id}})" data-toggle="tooltip" data-original-title="حذف"> <i class="icon-trash text-inverse text-danger" style="margin-left: 10px"></i> </a>

                    {!!Form::open( ['route' => ['admin.news.destroy',$new->id] ,'id'=>'delete-form'.$new->id, 'method' => 'Delete']) !!}
                    {!!Form::close() !!}

                </td>
            </tr>

@endforeach



            </tbody>
        </table>
    </div>



    <script>
        function Delete(id) {
            var item_id=id;
            console.log(item_id);
            swal({
                title: "هل أنت متأكد ",
                text: "هل تريد حذف هذا الخبر؟",
                icon: "warning",
                buttons: ["الغاء", "موافق"],
                dangerMode: true,

            }).then(function(isConfirm){
                if(isConfirm){
                    document.getElementById('delete-form'+item_id).submit();
                }
                else{
                    swal("تم االإلفاء", "حذف  الخبر تم الغاؤه",'info',{buttons:'موافق'});
                }
            });
        }
    </script>
@endsection

@include('admin.layout.data-table')
