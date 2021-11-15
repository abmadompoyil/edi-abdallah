<div class="table-responsive">
    <table class="table table-bordered table-hover" id="kt_datatable">
        <thead>
        <tr>
            <th> Id</th>
            <th>{{__("Description File")}}</th>
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
                <a class="btn" href="{{asset($file->src)}}" download >                     {{$file->name}}
                </a>
                </td>

                <td>
                    {{$file->status()}}

                </td>
                <td> {{$file->created_at}}</td>
                                <Td>
                    <a href="{{asset($file->src)}}" download  data-href="{{asset($file->src)}}"   class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="Download">
                        {{ Metronic::getSVG("media/svg/icons/Files/Cloud-download.svg", "svg-icon-md svg-icon-primary") }}
                    </a>


                </Td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$files->links()}}
</div>
