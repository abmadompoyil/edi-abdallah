<div class="table-responsive">
    <table class="table table-bordered table-hover" id="kt_datatable">
        <thead>
        <tr>
            <th>Id</th>
            <th>{{__("Name Teacher")}}</th>
            <th>{{__("Old specialization")}}</th>
            <th>{{__("New specialization")}}</th>
            <th>{{__("Old School")}}</th>
            <th>{{__("new School")}}</th>
            <th>{{__("Data meeting ")}}</th>
            <th>{{__("exp")}} </th>
            <th>{{__("Status")}} </th>
            <th>{{__("Created at")}} </th>

            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jobs as $job)
            <tr class="deleted-row-{{$job->id}}">
                <td>{{$job->id}}</td>
                <td class="pl-0 py-4">
                    {{$job->Teacher->name}}
                </td>
                <td>{{$job->Teacher->other ?? $job->Teacher->subject()}}</td>
                <td>{{$job->other ?? $job->new_subject->name}}</td>
                <td>{{$job->Teacher->old_school->name}}</td>
                <td>{{$job->new_school->name}}</td>
                @if($job->date_id == null)
                    <td>No Meeting </td>
                @else
                <td> {{$job->data . " From: ".$job->start." To: ".$job->end }}</td>
                @endif
                    <td>{{$job->Teacher->exp()}}</td>

                <td>
                    <span class="label label-lg label-light-{{$job->span()}} label-inline" style="color:black;">{{$job->status}}</span>

                </td>
                <td>{{$job->created_at}}</td>

                <Td>


                    <a href="{{route('move.show1',$job)}}" data-href="{{route('move.show1',$job)}}" data-entity_id="{{$job->id}}"  class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="show">
                        {{ Metronic::getSVG("media/svg/icons/General/Expand-arrows.svg", "svg-icon-md svg-icon-primary") }}

                    </a>
                    <a href="javascript:;" data-href="{{route('move.catDelete',$job->id)}}" data-entity_id="{{$job->id}}" data-token="{{csrf_token()}}" class="btn delete-btn btn-sm btn-clean btn-icon" data-toggle="tooltip" title="حدف">
                        {{ Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary") }}
                    </a>


                </Td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$jobs->links()}}
</div>
