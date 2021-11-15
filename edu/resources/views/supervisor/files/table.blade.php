<div class="table-responsive">
    <table class="table table-bordered table-hover" id="kt_datatable">
        <thead>
        <tr>
            <th> Id</th>
            <th>{{__("Description File")}}</th>
            <th>{{__("Files")}}</th>
            <th>{{__("Status")}}</th>
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

                </td>
                <td> {{$file->created_at}}</td>
                                <Td>
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
