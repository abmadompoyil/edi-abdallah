<div class="table-responsive">
    <table class="table table-bordered table-hover" id="kt_datatable">
        <thead>
        <tr>
            <th> Id</th>
            <th>{{__("Name Teacher")}}</th>
            <th>{{__("Name School")}}</th>
            <th>{{__("Name of Supervisor")}}</th>

            <th>{{__("Specialization")}}</th>
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
                <td>
                    {{$job->Teacher->name}}
                </td>
                <td >
                    {{$job->school->name}}
                </td>
                <td >
                    {{$job->SuperVisor->name ?? 'there no supervisor right no '}}
                </td>
                <td>{{$job->Teacher->qualifcate()}}</td>
                <td> {{$job->data . " From: ".$job->start." To: ".$job->end}}</td>
                <td>{{$job->Teacher->exp()}}</td>

                <td>
                    <span class="label label-lg label-light-{{$job->span()}} label-inline" style="color:black;">{{$job->status}}</span>

                </td>
                <td>{{$job->created_at}}</td>

                <Td>


                    <a href="{{route('super.jobss.show1',$job)}}" data-href="{{route('super.jobss.show1',$job)}}" data-entity_id="{{$job->id}}"  class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="show">
                        {{ Metronic::getSVG("media/svg/icons/General/Expand-arrows.svg", "svg-icon-md svg-icon-primary") }}

                    </a>
                    <a href="javascript:;" data-href="{{route('admin.jobs.catDelete',$job->id)}}" data-entity_id="{{$job->id}}" data-token="{{csrf_token()}}" class="btn delete-btn btn-sm btn-clean btn-icon" data-toggle="tooltip" title="حدف">
                        {{ Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary") }}
                    </a>


                </Td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$jobs->links()}}
</div>
