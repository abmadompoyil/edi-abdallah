{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">{{$page_title}}
                    <div class="text-muted pt-2 font-size-sm">{{$page_description}}</div>
                </h3>
            </div>
            <div class="card-toolbar">
                <!--begin::Dropdown-->
                <!--end::Dropdown-->
                <!--begin::Button-->


                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <form  method="POST" action="{{route('school.files.store')}}" class="formAction" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{$type}}" name="type">
                <div class="row ">
                    <div class="col-lg-3 ">
                        <input type="text" name="name" class="form-control datatable-input" placeholder="{{__("Name")}}" data-col-index="0"  >
                    </div>
                    <div class="col-lg-3 ">
                        <div class="custom-file">

                            <div class="input-group input-group-lg ">
                                <input required type="file" name="src" multiple class="custom-file-input"  id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3">
                        <button class="btn btn-primary btn-primary--icon btn-save" id="kt_search" >
													<span>
														<i class="la la-search"></i>
														<span>{{__("Upload new file")}}</span>
													</span>
                        </button>&nbsp;&nbsp;
                    </div>
                </div>
            </form>
        </div>

        <div class="card-body" id="card-body">


            @include('school.files.table')




        </div>



    </div>

@endsection

{{-- Styles Section --}}
@section('styles')
    <link href="{{ asset('plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection


{{-- Scripts Section --}}
@section('scripts')
    {{-- vendors --}}
    <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

    {{-- page scripts --}}
    <script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>
    <script src="{{asset('/js/ajax.js')}}"></script>
    <script type="text/javascript">
        $('#kt_search').on('click',function(){
            $value =$("#s_id").val();

            $.ajax({
                type : 'get',
                url : '{{URL::to('admin/user/teachers/')}}',
                data:{'value':$value},
                success:function(data){
                    $('#card-body').html(data)
                }
            });
        })
    </script>


@endsection
