@extends('layout.default')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom  gutter-b example example-compact">
                <div class="card-header">
                    <div class="card-title"> تعديل الباقة  </div>
                </div>
                <form  method="POST" action="{{route('package.update',$package->id)}}" class="formAction">
                    @csrf
                    <input type="hidden" name="id" value="{{$package->id}}">
@method('Patch')
                    <div class="card-body">
                        <div class="form-group">
                            <label>إسم الباقة </label>
                            <input type="text" name="name" value="{{$package->name}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>عدد دقائق المتاحة في الباقة</label>
                            <input type="text" name="minute" value="{{$package->minute}}"  placeholder="عدد دقائق المتاحة في الباقة" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>المدة </label>
                            <select  name="days"  class="form-control">
                                <option value="30" @if($package->days  == 30) selected @endif>شهر</option>
                                <option value="90" @if($package->days  == 90) selected @endif> 3 أشهر</option>
                                <option value="180" @if($package->days  == 180) selected @endif>6 أشهر </option>
                                <option value="270" @if($package->days  == 270) selected @endif>9 أشهر</option>
                                <option value="365" @if($package->days  == 365) selected @endif>  سنة</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>السعر </label>
                            <input type="text" name="price" value="{{$package->price}}"  placeholder="السعر"  class="form-control">
                        </div>

                <button type="submit" class="btn btn-primary btn-update mr-2 w-100px p-4 " >حفظ</button>

            </div>
            </form>

            </div>
    </div>

        <div class="toast-container">
        <div class="alert alert-success d-none" role="alert"></div>
    </div>
@endsection

@section('scripts')

    <script src="{{asset('/js/ajax.js')}}"></script>
@endsection

