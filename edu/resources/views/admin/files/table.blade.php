<div class="table-responsive">
    <table class="table table-bordered table-hover" id="kt_datatable">
        <thead>
        <tr>
            <th>Id</th>
            <th>{{__("Description File")}}</th>
            <th>{{__("Files")}}</th>
            <th>{{__("is Available")}}</th>
            <th>{{__("Date ")}}</th>

            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($files as $file)
            <tr class="deleted-row-{{$file->id}}">
                <td>{{$file->id}}</td>
                <td >
                    {{$file->name}}
                </td>
                <td >
                    <a href="{{asset($file->src)}}" download class="btn btn-primary font-weight-bold mr-2">Download file</a>

                </td>
                <td>
                    {{$file->status()}}
                    <br>
                <span class="text-muted">                    click edit icon to change status to ({{$file->statusRev()}})
</span>
                </td>
                <td> {{$file->created_at}}</td>
                                <Td>
                                    <a href="{{route('files.update',$file->id)}}" data-href="{{route('files.update',$file->id)}}" data-entity_id="{{$file->id}}"  class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="Make it {{$file->statusRev()}}">
                                        {{ Metronic::getSVG("media/svg/icons/Communication/Write.svg", "svg-icon-md svg-icon-primary") }}
                                    </a>
                                    <a href="javascript:;" data-href="{{route('files.catDelete',$file->id)}}" data-entity_id="{{$file->id}}" data-token="{{csrf_token()}}" class="btn delete-btn btn-sm btn-clean btn-icon" data-toggle="tooltip" title="حدف">
                        {{ Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary") }}
                    </a>


                </Td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$files->links()}}
</div>
