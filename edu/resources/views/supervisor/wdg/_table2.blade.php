{{-- Advance Table Widget 2 --}}

<div class="card card-custom {{ @$class }}">
    {{-- Header --}}
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">{{__('Last Consults')}}</span>
            {{--            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>--}}
        </h3>
    </div>

    {{-- Body --}}
    <div class="card-body pt-3 pb-0">
        {{-- Table --}}
        @php
            $consults = \App\Edu\Consult::latest('created_at')->take(5)->get();
        @endphp
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


                            <a href="{{route('consults.show',$consult)}}" data-href="{{route('consult.show',$consult)}}" data-entity_id="{{$consult->id}}"  class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="show">
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
