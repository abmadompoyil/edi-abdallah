{{-- Advance Table Widget 2 --}}

<div class="card card-custom {{ @$class }}">
    {{-- Header --}}
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">{{__('Last Teacher transfer request')}}</span>
            {{--            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>--}}
        </h3>
    </div>

    {{-- Body --}}
    <div class="card-body pt-3 pb-0">
        {{-- Table --}}
        @php
            $jobs = \App\Edu\Job::where('school_id',Auth::user()->id)->where('type',2)->latest('created_at')->take(5)->get();
        @endphp
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="kt_datatable">
                <thead>
                <tr>
                    <th> #</th>
                    <th>{{__("Name Teacher")}}</th>
                    <th>{{__("Old specialization")}}</th>
                    <th>{{__("New specialization")}}</th>
                    <th>{{__("Old School")}}</th>
                    <th>{{__("new School")}}</th>
                    <th>{{__("Data meeting ")}}</th>
                    <th>{{__("exp")}} </th>
                    <th>{{__("Status")}} </th>

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

                        </td>                    <Td>


                            <a href="{{route('move.show1',$job)}}" data-href="{{route('move.show1',$job)}}" data-entity_id="{{$job->id}}"  class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="show">
                                {{ Metronic::getSVG("media/svg/icons/General/Expand-arrows.svg", "svg-icon-md svg-icon-primary") }}

                            </a>



                        </Td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
