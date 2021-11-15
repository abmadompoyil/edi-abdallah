@extends('layout.default')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom">
                <!--begin::Card header-->
                <div class="card-header card-header-tabs-line nav-tabs-line-3x">
                    <!--begin::Toolbar-->
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
                            <!--begin::Item-->
                            <li class="nav-item mr-3">
                                <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1">
														<span class="nav-icon">
															<span class="svg-icon">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Layers.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24"></polygon>
																		<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																		<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
														</span>
                                    <span class="nav-text font-size-lg">حسابي</span>
                                </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mr-3">
                                <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_2">
														<span class="nav-icon">
															<span class="svg-icon">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Shield-user.svg-->
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3"></path>
																		<path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000"></path>
																	</g>
																</svg>                                                                <!--end::Svg Icon-->
															</span>
														</span>
                                    <span class="nav-text font-size-lg"> بيانات المعلم  </span>
                                </a>
                            </li>

                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="nav-item mr-3">
                                <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_3">
														<span class="nav-icon">
															<span class="svg-icon">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Shield-user.svg-->
															<span class="svg-icon svg-icon-primary svg-icon-2x">
                                                                <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-12-28-020759/theme/html/demo1/dist/../src/media/svg/icons/Home/Clock.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path style="
    fill: #B5B5C3!important;
" d="M12,22 C7.02943725,22 3,17.9705627 3,13 C3,8.02943725 7.02943725,4 12,4 C16.9705627,4 21,8.02943725 21,13 C21,17.9705627 16.9705627,22 12,22 Z" fill="#000000" opacity="0.3"/>
        <path d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg><!--end::Svg Icon--></span>

                                                                <!--end::Svg Icon-->
															</span>
														</span>
                                    <span class="nav-text font-size-lg">مواقيت العمل    </span>
                                </a>
                            </li>   <li class="nav-item mr-3">
                                <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_4">
														<span class="nav-icon">
															<span class="svg-icon">
																<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Shield-user.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"></path>
																		<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3"></path>
																		<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3"></path>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
														</span>
                                    <span class="nav-text font-size-lg">تغيير كلمة المرور </span>
                                </a>
                            </li>
                            <!--end::Item-->

                        </ul>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body">
                    <form  method="POST" action="{{route('teachers.update',$user)}}" class="formAction">
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">
                        @method('Patch')
                        <div class="tab-content">
                            <!--begin::Tab-->
                            <div class="tab-pane show px-7 active" id="kt_user_edit_tab_1" role="tabpanel">
                                <!--begin::Row-->
                                <div class="row">
                                    <div class="col-xl-2"></div>
                                    <div class="col-xl-7 my-2">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <label class="col-3"></label>
                                            <div class="col-9">
                                                <h6 class="text-dark font-weight-bold mb-10">بيانات العميل:</h6>
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">الصورة</label>
                                            <div class="col-9">
                                                <div class="image-input image-input-empty image-input-outline" id="kt_user_edit_avatar" style="background-image: url({{$user->img}})">
                                                    <div class="image-input-wrapper"></div>
                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                        <input type="file" name="img" id="profile_avatar" accept=".png, .jpg, .jpeg">
                                                        <input type="hidden" name="profile_avatar_remove">
                                                    </label>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
																			<i class="ki ki-bold-close icon-xs text-muted"></i>
																		</span>
                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
																			<i class="ki ki-bold-close icon-xs text-muted"></i>
																		</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left">الإسم</label>
                                            <div class="col-9">
                                                <input class="form-control form-control-lg form-control-solid" name="name"  type="text" value="{{$user->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-2">
                                            <label class="col-form-label col-3 text-lg-right text-left">الحالة </label>
                                            <div class="col-3">
																		<span class="switch">
																			<label>
																				<input type="checkbox" checked="checked" name="select">
																				<span></span>
																			</label>
																		</span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"> رقم الهاتف</label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-phone"></i>
																			</span>
                                                    </div>
                                                    <input type="text" name="phone"  class="form-control form-control-lg form-control-solid" value="{{$user->phone}}" placeholder="Phone">
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Group-->
                                        <!--begin::Group-->
                                        <div class="form-group row">
                                            <label class="col-form-label col-3 text-lg-right text-left"> البريد الإلكتروني </label>
                                            <div class="col-9">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
																			<span class="input-group-text">
																				<i class="la la-at"></i>
																			</span>
                                                    </div>
                                                    <input type="text" name="email" class="form-control form-control-lg form-control-solid" value="{{$user->email}}" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer pb-0">
                                            <div class="row">
                                                <div class="col-xl-2"></div>
                                                <div class="col-xl-7">
                                                    <div class="row">
                                                        <div class="col-3"></div>
                                                        <div class="col-9">
                                                            <a href="#" class="btn btn-light-primary btn-update font-weight-bold"> حفظ التغييرات</a>
                                                            <a href="#" class="btn btn-clean font-weight-bold">إلغاء</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!--end::Row-->
                            </div>
                            <div class="tab-pane px-7" id="kt_user_edit_tab_2" role="tabpanel">
                                <!--begin::Body-->
                                <div class="card-body">

                                    <div class="row">
                                        <label class="col-3"></label>
                                        <div class="col-9">
                                            <h6 class="text-dark font-weight-bold mb-10">بيانات المعلم:</h6>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <!--begin::Group-->
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">المواد </label>
                                        <div class="col-9">
                                            <select multiple="multiple" name="category_id[]" class="form-control" id="exampleSelect2">
                                                @foreach($cat as $item)
                                                    @if($user->Teacher->category_id != null)
                                                <option value="{{$item->id}}" @if(in_array($item->id,$user->Teacher->category_id) ) selected @endif> {{$item->name}}</option>
                                                @else
                                                        <option value="{{$item->id}}"  > {{$item->name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">الدولة</label>
                                        <div class="col-9">
                                            <select name="country" class="form-control  form-control-lg form-control-solid">
                                                <option> الدولة</option>
                                                <option value="1" @if($user->Teacher->country == 1 ) selected @endif>  السعودية </option>
                                                <option value="1" @if($user->Teacher->country == 2 ) selected @endif>خارج السعودية</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left">تحديد نوع الحساب</label>
                                        <div class="col-9">
                                            <select name="type" class="form-control  form-control-lg form-control-solid">
                                                <option> تحديد نوع الحساب</option>
                                                <option value="1" @if($user->Teacher->type == 1 ) selected @endif>  افراد </option>
                                                <option value="1" @if($user->Teacher->type == 2 ) selected @endif>معاهد </option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end::Group-->
                                    <!--begin::Group-->
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left"> الوصف  </label>
                                        <div class="col-9">
                                            <div class="input-group input-group-lg input-group-solid">

                                                <textarea class="form-control" name="description" id="exampleTextarea" rows="3">{{$user->Teacher->description}}</textarea>                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-3 text-lg-right text-left"> رابط اليوتيوب</label>
                                        <div class="col-9">
                                            <div class="input-group input-group-lg input-group-solid">

                                                <input type="text" name="video" class="form-control form-control-lg form-control-solid" value="{{$user->Teacher->video}}" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-2">
                                        <label class="col-form-label col-3 text-lg-right text-left"> الحالة</label>
                                        <div class="col-3">
																		<span class="switch">
																			<label>
																				<input type="checkbox" checked="checked" name="status" value="{{$user->Teacher->isAvailable}}">
																				<span></span>
																			</label>
																		</span>
                                        </div>
                                    </div>
                                    <div class="card-footer pb-0">
                                        <div class="row">
                                            <div class="col-xl-2"></div>
                                            <div class="col-xl-7">
                                                <div class="row">
                                                    <div class="col-3"></div>
                                                    <div class="col-9">
                                                        <a href="#" class="btn btn-light-primary btn-update font-weight-bold"> حفظ التغييرات</a>
                                                        <a href="#" class="btn btn-clean font-weight-bold">إلغاء</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Footer-->
                            </div>

                            <div class="tab-pane px-7" id="kt_user_edit_tab_3" role="tabpanel">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-7">
                                            <!--begin::Row-->
                                            <div class="row mb-5">
                                                <label class="col-3"></label>
                                                <div class="col-9">
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->

                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">السبت</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group timepicker">
                                                        @if($user->Teacher->days->sat )
                                                        <input class="form-control satStart" id="kt_timepicker_2 satStart" name="Sat[start]"  placeholder="Select time" type="time" value="{{$user->Teacher->days->sat->start}}">
                                                      <span style="margin: 10px"> إلى</span>
                                                            <input class="form-control satEnd" id="kt_timepicker_2 satEnd" name="Sat[end]"  placeholder="Select time" type="time" value="{{$user->Teacher->days->sat->end}}">

                                                        @else
                                                            <input class="form-control satStart" id="kt_timepicker_2 satStart" name="Sat[start]" disabled  placeholder="Select time" type="time" >
                                                            <span style="margin: 10px"> إلى</span>

                                                            <input class="form-control satEnd" id="kt_timepicker_2 satEnd" name="Sat[end]" disabled  placeholder="Select time" type="time" >
                                                     @endif
                                                        <span class="switch" style="margin-right: 40px;">
																			<label>
                                                                                <input type="hidden" @if($user->Teacher->days->Sat != 0) value="1" @else value="0"  @endif name="statusSat" class="statusSat">
																				<input type="checkbox" id="switch1" data-start="satStart" data-end="satEnd"  data-status="statusSat" @if($user->Teacher->days->Sat != 0) checked="checked" @endif name="SatSelect">
																	 			<span></span>
																			</label>
																		</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">الأحد</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group timepicker">
                                                        @if($user->Teacher->days->sun )
                                                        <input class="form-control sunStart" id="kt_timepicker_2 sunStart" name="Sun[start]"  placeholder="Select time" type="time" value="{{$user->Teacher->days->sun->start}}">
                                                      <span style="margin: 10px"> إلى</span>
                                                        <input class="form-control sunEnd" id="kt_timepicker_2 sunEnd" name="Sun[end]" placeholder="Select time" type="time" value="{{$user->Teacher->days->sun->end}}">
                                                         @else
                                                            <input class="form-control sunStart" id="kt_timepicker_2 sunStart" name="Sun[start]"  placeholder="Select time" type="time" disabled>
                                                            <span style="margin: 10px"> إلى</span>
                                                            <input class="form-control sunEnd" id="kt_timepicker_2 sunEnd" name="Sun[end]" placeholder="Select time" type="time" disabled>
                                                        @endif

                                                            <span class="switch" style="margin-right: 40px;">
																			<label>
                                                                                <input type="hidden" @if($user->Teacher->days->Sun != 0) value="1" @else value="0"  @endif name="statusSun" class="statusSun">
																				<input type="checkbox" id="switch1" data-start="sunStart" data-end="sunEnd" data-status="statusSun" @if($user->Teacher->days->Sun != 0) checked="checked" @endif name="SunSelect">
																				<span></span>
																			</label>
																		</span>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">الإثنين</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group timepicker">
                                                        @if($user->Teacher->days->mon )
                                                            <input class="form-control monStart" id="kt_timepicker_2 " name="Mon[start]"  placeholder="Select time" type="time" value="{{$user->Teacher->days->mon->start}}">
                                                            <span style="margin: 10px"> إلى</span>
                                                            <input class="form-control monEnd" id="kt_timepicker_2" name="Mon[end]" placeholder="Select time" type="time" value="{{$user->Teacher->days->mon->end}}">
                                                       @else
                                                            <input class="form-control monStart" id="kt_timepicker_2 " name="Mon[start]"  placeholder="Select time" type="time" disabled>
                                                            <span style="margin: 10px"> إلى</span>
                                                            <input class="form-control monEnd" id="kt_timepicker_2" name="Mon[end]" placeholder="Select time" type="time" disabled>

                                                        @endif

                                                        <span class="switch" style="margin-right: 40px;">
																			<label>
                                                                                <input type="hidden" @if($user->Teacher->days->Mon != 0) value="1" @else value="0"  @endif name="statusMon" class="statusMon">
																				<input id="switch1" type="checkbox" data-start="monStart" data-end="monEnd"  data-status="statusMon" @if($user->Teacher->days->Mon != 0) checked="checked" @endif  name="MonSelect">
																				<span></span>
																			</label>
																		</span>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">الثلاثاء</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group timepicker">
                                                        @if($user->Teacher->days->tue )
                                                            <input class="form-control tueStart" id="kt_timepicker_2" name="Tue[start]"  placeholder="Select time" type="time" value="{{$user->Teacher->days->tue->start}}">
                                                            <span style="margin: 10px"> إلى</span>
                                                            <input class="form-control tueEnd" id="kt_timepicker_2" name="Tue[end]" placeholder="Select time" type="time" value="{{$user->Teacher->days->tue->end}}">
                                                        @else
                                                            <input class="form-control tueStart" id="kt_timepicker_2" name="Tue[start]"  placeholder="Select time" type="time" disabled>
                                                            <span style="margin: 10px"> إلى</span>
                                                            <input class="form-control tueEnd" id="kt_timepicker_2" name="Tue[end]" placeholder="Select time" type="time" disabled>


                                                        @endif

                                                        <span class="switch" style="margin-right: 40px;">
																			<label>
									                                         <input type="hidden" @if($user->Teacher->days->Tue != 0) value="1" @else value="0"  @endif name="statusTue" class="statusTue">

																				<input type="checkbox" id="switch1" data-start="tueStart" data-end="tueEnd" data-status="statusTue" @if($user->Teacher->days->Tue != 0) checked="checked" @endif  name="TueSelect">
																				<span></span>
																			</label>
																		</span>



                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">الأربعاء</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group timepicker">
                                                        @if($user->Teacher->days->wed )
                                                            <input class="form-control wedStart" id="kt_timepicker_2" name="Wed[start]"  placeholder="Select time" type="time" value="{{$user->Teacher->days->wed->start}}">
                                                            <span style="margin: 10px"> إلى</span>
                                                            <input class="form-control wedEnd" id="kt_timepicker_2" name="Wed[end]" placeholder="Select time" type="time" value="{{$user->Teacher->days->wed->end}}">
                                                        @else
                                                            <input class="form-control wedStart" id="kt_timepicker_2" name="Wed[start]"  placeholder="Select time" type="time" disabled>
                                                            <span style="margin: 10px"> إلى</span>
                                                            <input class="form-control wedEnd" id="kt_timepicker_2" name="Wed[end]" placeholder="Select time" type="time" disabled>

                                                        @endif

                                                        <span class="switch" style="margin-right: 40px;">

																			<label>
									                                         <input type="hidden" @if($user->Teacher->days->Wed != 0) value="1" @else value="0"  @endif name="statusWed" class="statusWed">
																				<input type="checkbox" id="switch1" data-start="wedStart" data-end="wedEnd" data-status="statusWed" @if($user->Teacher->days->Wed != 0) checked="checked" @endif name="WedSelect">
																				<span></span>
																			</label>
																		</span>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">الخميس</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group timepicker">
                                                        @if($user->Teacher->days->thu )
                                                            <input class="form-control thuStart" id="kt_timepicker_2" name="Thu[start]"  placeholder="Select time" type="time" value="{{$user->Teacher->days->thu->start}}">
                                                            <span style="margin: 10px"> إلى</span>
                                                            <input class="form-control thuEnd" id="kt_timepicker_2" name="Thu[end]" placeholder="Select time" type="time" value="{{$user->Teacher->days->thu->end}}">
                                                        @else
                                                            <input class="form-control thuStart" id="kt_timepicker_2" name="Thu[start]"  placeholder="Select time" type="time" disabled>
                                                            <span style="margin: 10px"> إلى</span>
                                                            <input class="form-control thuEnd" id="kt_timepicker_2" name="Thu[end]" placeholder="Select time" type="time" disabled>

                                                        @endif

                                                        <span class="switch" style="margin-right: 40px;">
																			<label>
                                                                                <input type="hidden" @if($user->Teacher->days->Thu != 0) value="1" @else value="0"  @endif name="statusThu" class="statusThu">

																				<input type="checkbox" id="switch1" data-start="thuStart" data-end="thuEnd" data-status="statusThu" @if($user->Teacher->days->Thu != 0) checked="checked" @endif name="ThuSelect">
																				<span></span>
																			</label>
																		</span>



                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-form-label text-right col-lg-3 col-sm-12">الجمعة</label>
                                                <div class="col-lg-9 col-md-9 col-sm-12">
                                                    <div class="input-group timepicker">
                                                        @if($user->Teacher->days->fri )
                                                            <input class="form-control thuStart" id="kt_timepicker_2" name="Fri[start]"  placeholder="Select time" type="time" value="{{$user->Teacher->days->fri->start}}">
                                                            <span style="margin: 10px"> إلى</span>
                                                            <input class="form-control thuEnd" id="kt_timepicker_2" name="Fri[end]" placeholder="Select time" type="time" value="{{$user->Teacher->days->fri->end}}">
                                                        @else
                                                            <input class="form-control thuStart" id="kt_timepicker_2" name="Fri[start]"  placeholder="Select time" type="time" disabled>
                                                            <span style="margin: 10px"> إلى</span>
                                                            <input class="form-control thuEnd" id="kt_timepicker_2" name="Fri[end]" placeholder="Select time" type="time" disabled>

                                                        @endif

                                                        <span class="switch" style="margin-right: 40px;">
																			<label>
                                                                                <input type="hidden" @if($user->Teacher->days->Fri != 0) value="1" @else value="0"  @endif name="statusFri">
																				<input type="checkbox" id="switch1" data-start="friStart" data-end="friEnd" data-status="statusFri" @if($user->Teacher->days->Fri != 0) checked="checked" @endif name="FriSelect">
																				<span></span>
																			</label>
																		</span>



                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="card-footer pb-0">
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-7">
                                            <div class="row">
                                                <div class="col-3"></div>
                                                <div class="col-9">
                                                    <a href="#" class="btn btn-light-primary btn-update font-weight-bold"> حفظ التغييرات</a>
                                                    <a href="#" class="btn btn-clean font-weight-bold">إلغاء</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Footer-->
                            </div>
                            <div class="tab-pane px-7" id="kt_user_edit_tab_4" role="tabpanel">
                                <!--begin::Body-->
                                <div class="card-body">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-7">
                                            <!--begin::Row-->
                                            <div class="row mb-5">
                                                <label class="col-3"></label>
                                                <div class="col-9">
                                                </div>
                                            </div>
                                            <!--end::Row-->
                                            <!--begin::Row-->

                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left"> كلمة المرور الجديدة</label>
                                                <div class="col-9">
                                                    <input class="form-control form-control-lg form-control-solid" name="password" type="password" placeholder="كلمة المرور الجديدة">
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                            <!--begin::Group-->
                                            <div class="form-group row">
                                                <label class="col-form-label col-3 text-lg-right text-left"> تأكيد كلمة المرور</label>
                                                <div class="col-9">
                                                    <input class="form-control form-control-lg form-control-solid" type="password" placeholder=" تأكيد كلمة المرور">
                                                </div>
                                            </div>
                                            <!--end::Group-->
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->
                                <div class="card-footer pb-0">
                                    <div class="row">
                                        <div class="col-xl-2"></div>
                                        <div class="col-xl-7">
                                            <div class="row">
                                                <div class="col-3"></div>
                                                <div class="col-9">
                                                    <a href="#" class="btn btn-light-primary btn-update font-weight-bold"> حفظ التغييرات</a>
                                                    <a href="#" class="btn btn-clean font-weight-bold">إلغاء</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Footer-->
                            </div>
                            <!--end::Tab-->
                            <!--begin::Tab-->

                            <!--end::Tab-->
                        </div>
                    </form>
                </div>
                <!--begin::Card body-->
            </div>
        </div>

    </div>

        <div class="toast-container">
            <div class="alert alert-success d-none" role="alert"></div>
        </div>
        @endsection

        @section('scripts')


            <script src="{{asset('/js/ajax.js')}}"></script>
            <script>
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#kt_user_edit_avatar').css("background-image", "url(" +  e.target.result + ")");
                        }

                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }
                function readURLCar(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#car_img').css("background-image", "url(" +  e.target.result + ")");
                        }

                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }
                function readURLLicense(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $('#car_license').css("background-image", "url(" +  e.target.result + ")");
                        }

                        reader.readAsDataURL(input.files[0]); // convert to base64 string
                    }
                }
                $("#profile_avatar").change(function() {
                    readURL(this);
                });

                $("#carImg").change(function() {
                    readURLCar(this);
                });
                $("input:checked").change(function(){
                    var start =  $(this).data('start'); //getter
                    var end = $(this).data('end'); //getter
                    var status = $(this).data('status'); //getter

                    if($(this).is(':checked')){
                        $("."+start).removeAttr('disabled');
                        $("."+end).removeAttr('disabled');
                        $("."+status).attr('value',1);
                    }else{
                        $("."+start).attr('disabled','disabled');
                        $("."+end).attr('disabled','disabled');
                        $("."+status).attr('value',0);

                    }
                });
                $("#switch1").click(function(){
                    var start =  $(this).data('start'); //getter
                    var end = $(this).data('end'); //getter
                    var status = $(this).data('status'); //getter
                    if($(this).is(':checked')){
                        $("."+start).removeAttr('disabled');
                        $("."+end).removeAttr('disabled');
                        $("."+status).attr('value',1);
                    }else{
                        $("."+start).attr('disabled','disabled');
                        $("."+end).attr('disabled','disabled');
                        $("."+status).attr('value',0);
                    }
                });

            </script>
@endsection

