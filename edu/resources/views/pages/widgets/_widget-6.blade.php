{{-- Advance Table Widget 2 --}}

<div class="card card-custom {{ @$class }}">
    {{-- Header --}}
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">{{__('admin.Bouquets')}}</span>
{{--            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>--}}
        </h3>
    </div>

    {{-- Body --}}
    <div class="card-body pt-3 pb-0">
        {{-- Table --}}
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="kt_datatable">
                <thead>
                <tr>
                    <th> #</th>
                    <th>Name Teacher</th>
                    <th>السعر</th>
                    <th>عدد الدقائق</th>
                    <th>عدد الأيام</th>

                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($packages as $package)
                    <tr class="deleted-row-{{$package->id}}">
                        <td>{{$package->id}}</td>
                        <td>{{$package->name}}</td>
                        <td>{{$package->price}}</td>
                        <td>{{$package->minute}}</td>
                        <td>{{$package->days}}</td>
                        <Td>


                            <a href="{{route('package.edit',$package)}}" data-href="{{route('package.edit',$package)}}" data-entity_id="{{$package->id}}"  class="btn  btn-sm btn-clean btn-icon" data-toggle="tooltip" title="تعديل">
                                {{ Metronic::getSVG("media/svg/icons/Communication/Write.svg", "svg-icon-md svg-icon-primary") }}

                            </a>
                            <a href="javascript:;" data-href="{{route('package.destroy',$package->id)}}" data-entity_id="{{$package->id}}" data-token="{{csrf_token()}}" class="btn delete-btn btn-sm btn-clean btn-icon" data-toggle="tooltip" title="حدف">
                                {{ Metronic::getSVG("media/svg/icons/General/Trash.svg", "svg-icon-md svg-icon-primary") }}
                            </a>
                        </Td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
