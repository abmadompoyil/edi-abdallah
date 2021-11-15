<div class="row">
    <div class="col-xl-6">
        <!--begin::List Widget 12-->
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title font-weight-bolder text-dark">
                    {{__("Last School")}}

                </h3>
                <div class="card-toolbar">

                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-2">
                @php
                    $schools = \App\User::where('role_id',3)->get();

                    @endphp

            @foreach($schools as $ad)

                <!--begin::Item-->
                    <div class="d-flex flex-wrap align-items-center mb-10">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
                            <div class="symbol-label" style="background-image: url('{{$ad->img}}')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column ml-4 flex-grow-1 mr-2">
                            <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">{{$ad->name}}</a>
                            <span class="text-muted font-weight-bold">  </span>
                        </div>
                        <!--end::Title-->
                        <!--begin::btn-->
                        <span class="label label-lg label-light-primary label-inline mt-lg-0 mb-lg-0 my-2 font-weight-bold py-4">{{__("Count of job").' '.$ad->jobs->count()}}</span>
                        <!--end::Btn-->
                    </div>
                    <!--end::Item-->
            @endforeach
            <!--end::Item-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::List Widget 12-->
    </div>
    <div class="col-xl-6">
        <!--begin::List Widget 13-->
        <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header border-0">
                <h3 class="card-title font-weight-bolder text-dark">

                    {{__("Last Supervisor")}}
                </h3>
                <div class="card-toolbar">

                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            @php
                $supervisors = \App\User::where('role_id',2)->get();

            @endphp
            <div class="card-body pt-2">
            @foreach($supervisors as $order)
                <!--begin::Item-->
                    <div class="d-flex flex-wrap align-items-center mb-10">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-60 symbol-2by3 flex-shrink-0">
                            <div class="symbol-label" style="background-image: url('{{$ad->img}}')"></div>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Title-->
                        <div class="d-flex flex-column ml-4 flex-grow-1 mr-2">
                            <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">{{$ad->name}}</a>
                            <span class="text-muted font-weight-bold">  </span>
                        </div>
                        <!--end::Title-->
                        <!--begin::btn-->
                        <span class="label label-lg label-light-primary label-inline mt-lg-0 mb-lg-0 my-2 font-weight-bold py-4"></span>
                        <!--end::Btn-->
                    </div>
                    <!--end::Item-->
                @endforeach
            </div>
            <!--end::Body-->
        </div>
        <!--end::List Widget 13-->
    </div>
</div>

