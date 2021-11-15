{{-- List Widget 1 --}}

<div class="card card-custom {{ @$class }}">
    {{-- Header --}}
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">{{__('admin.places')}}</span>
{{--            <span class="text-muted mt-3 font-weight-bold font-size-sm">Pending 10 tasks</span>--}}
        </h3>
        <div class="card-toolbar">
            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Quick actions" data-placement="left">
                <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ki ki-bold-more-ver"></i>
                </a>
{{--                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">--}}
{{--                    --}}{{-- Navigation--}}
{{--                    <ul class="navi navi-hover py-5">--}}
{{--                        <li class="navi-item">--}}
{{--                            <a href="#" class="navi-link">--}}
{{--                                <span class="navi-icon"><i class="navi-icon flaticon2-group"></i></span>--}}
{{--                                <span class="navi-text">New Group</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="navi-item">--}}
{{--                            <a href="#" class="navi-link">--}}
{{--                                <span class="navi-icon"><i class="flaticon2-open-text-book"></i></span>--}}
{{--                                <span class="navi-text">Contacts</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="navi-item">--}}
{{--                            <a href="#" class="navi-link">--}}
{{--                                <span class="navi-icon"><i class="navi-icon flaticon2-rocket-1"></i></span>--}}
{{--                                <span class="navi-text">Groups</span>--}}
{{--                                <span class="navi-link-badge">--}}
{{--                                    <span class="label label-primary label-inline">new</span>--}}
{{--                                </span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="navi-item">--}}
{{--                            <a href="#" class="navi-link">--}}
{{--                                <span class="navi-icon"><i class="navi-icon flaticon2-bell-2"></i></span>--}}
{{--                                <span class="navi-text">Calls</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="navi-item">--}}
{{--                            <a href="#" class="navi-link">--}}
{{--                                <span class="navi-icon"><i class="navi-icon flaticon2-dashboard"></i></span>--}}
{{--                                <span class="navi-text">Settings</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

{{--                        <li class="navi-separator my-3"></li>--}}

{{--                        <li class="navi-item">--}}
{{--                            <a href="#" class="navi-link">--}}
{{--                                <span class="navi-icon"><i class="navi-icon flaticon2-protected"></i></span>--}}
{{--                                <span class="navi-text">Help</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="navi-item">--}}
{{--                            <a href="#" class="navi-link">--}}
{{--                                <span class="navi-icon"><i class="navi-icon flaticon2-bell-2"></i></span>--}}
{{--                                <span class="navi-text">Privacy</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    {{-- Body --}}
    <div class="card-body pt-8">
        {{-- Item --}}
        @foreach($places as $place)
        <div class="d-flex align-items-center mb-10">
            {{-- Symbol --}}
            <div class="symbol symbol-40 symbol-light-primary mr-5">
                <div class="symbol-label" style="background-image: url('{{asset('Heart/storage/app/'.$place->image) }}')"></div>

            </div>

            {{-- Text --}}
            <div class="d-flex flex-column font-weight-bold">
                <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">
                {{$place->name}}
                </a>
                <span class="text-muted">{{$place->category->name ?? "التصنيف"}}</span>
            </div>
        </div>
        @endforeach
        {{-- Item --}}

    </div>
</div>
