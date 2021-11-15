<div class="table-responsive">
    <table class="table table-bordered table-hover" id="kt_datatable">
        <thead>
        <tr>
            <th> #</th>
            <th>{{__("Consult")}}</th>
            <th>{{__("Date ")}}</th>
            <th>{{__("Status")}} </th>

            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($consults as $consult)
            <tr class="deleted-row-{{$consult->id}}">
                <td>{{$consult->id}}</td>
                <td class="pl-0 py-4">
                    {{$consult->consult}}
                </td>
                <td> {{$consult->created_at}}</td>
                <td>
                    <span class="label label-lg label-light-{{$consult->span()}} label-inline" style="color:black;">{{$consult->status}}</span>

                </td>                    <Td>


                    <a href="{{route('consult.show',$consult)}}" data-href="{{route('consult.show',$consult)}}" data-entity_id="{{$consult->id}}"  class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="show">
                        {{ Metronic::getSVG("media/svg/icons/General/Expand-arrows.svg", "svg-icon-md svg-icon-primary") }}

                    </a>
                    <a href="javascript:;" data-href="{{route('consult.catDelete',$consult->id)}}" data-entity_id="{{$consult->id}}" data-token="{{csrf_token()}}" class="btn delete-btn btn-sm btn-clean btn-icon" data-toggle="tooltip" title="حدف">
                        {{ Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary") }}
                    </a>


                </Td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$consults->links()}}
</div>
