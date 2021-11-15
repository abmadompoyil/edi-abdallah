<div class="table-responsive">
    <table class="table table-bordered table-hover" id="kt_datatable">
        <thead>
        <tr>
            <th> #</th>
            <th>{{__("Img")}}</th>
            <th>{{__("Name")}}</th>
            <th>{{__("Phone")}} </th>
            <th>{{__("Status")}} </th>

            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr class="deleted-row-{{$user->id}}">
                <td>{{$user->id}}</td>
                <td class="pl-0 py-4">
                    <div class="symbol symbol-50 symbol-light mr-1">
                                <span class="symbol-label">
                                    <img src="{{$user->img}}" class="h-50 align-self-center"/>
                                </span>
                    </div>
                </td>
                <td>{{$user->name}}</td>
                <td> {{$user->phone}}</td>
                <td>
                    <span class="label label-lg label-light-{{$user->span()}} label-inline">{{$user->status}}</span>

                </td>                    <Td>


                    <a href="{{route('supervisor.edit',$user)}}" data-href="{{route('teachers.edit',$user)}}" data-entity_id="{{$user->id}}"  class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="تعديل">
                        {{ Metronic::getSVG("media/svg/icons/Communication/Write.svg", "svg-icon-md svg-icon-primary") }}

                    </a>
                    <a href="javascript:;" data-href="{{route('supervisor.catDelete',$user->id)}}" data-entity_id="{{$user->id}}" data-token="{{csrf_token()}}" class="btn delete-btn btn-sm btn-clean btn-icon" data-toggle="tooltip" title="حدف">
                        {{ Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary") }}
                    </a>

                    <a href="{{route('teacher.userLessons',$user)}}" class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="دروس المعلم">
                        {{ Metronic::getSVG("media/svg/icons/Text/Edit-text.svg", "svg-icon-md svg-icon-primary") }}
                    </a>
                </Td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$users->links()}}
</div>
