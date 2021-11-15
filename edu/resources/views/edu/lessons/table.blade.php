<div class="table-responsive">
    <table class="table table-bordered table-hover" id="kt_datatable">
        <thead>
        <tr>
            <th> #</th>
            <th>إسم المعلم</th>
            <th>إسم الطالب</th>
            <th>المدة </th>
            <th>التاريخ </th>
            <th>الحالة </th>

            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lessons as $lesson)
            <tr class="deleted-row-{{$lesson->id}}">
                <td>{{$lesson->id}}</td>

                <td>{{$lesson->teacher->name}}</td>
                <td> {{$lesson->user->name}}</td>
                <td> {{$lesson->minute}}</td>
                <td> {{$lesson->date}}</td>
                <td>
                    <span class="label label-lg label-light-{{$lesson->span()}} label-inline">{{$lesson->status()}}</span>

                </td>                    <Td>


                    <a href="{{route('edu.show.lesson',$lesson)}}" data-href="{{route('edu.show.lesson',$lesson)}}" data-entity_id="{{$lesson->id}}"  class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="تعديل">
                        {{ Metronic::getSVG("media/svg/icons/Communication/Write.svg", "svg-icon-md svg-icon-primary") }}

                    </a>
                    <a href="javascript:;" data-href="{{route('edu.show.lesson',$lesson->id)}}" data-entity_id="{{$lesson->id}}" data-token="{{csrf_token()}}" class="btn delete-btn btn-sm btn-clean btn-icon" data-toggle="tooltip" title="حدف">
                        {{ Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary") }}
                    </a>
                </Td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$lessons->links()}}
</div>
