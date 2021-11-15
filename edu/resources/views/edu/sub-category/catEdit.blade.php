@extends('layout.default')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom  gutter-b example example-compact">
                <div class="card-header">
                    <div class="card-title"> تعديل مستخدم  </div>
                </div>
                <form  method="POST" action="{{route('subCategory.update',$sub_Category)}}" class="formAction">
                    @csrf
                    <input type="hidden" name="id" value="{{$sub_Category->id}}">
@method('Patch')
                    <div class="card-body">
                        <div class="form-group">
                            <label>الإسم </label>
                            <input type="text" name="name" value="{{$sub_Category->name}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>التصنيف الرئيسي</label>
                            <select  name="category_id"  class="form-control">
                                <option value="{{$sub_Category->category->id}}">{{$sub_Category->category->name}}</option>

                            @foreach($categories as $item)
                                @if($item->id != $sub_Category->category->id)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>




                <button type="submit" class="btn btn-primary btn-update mr-2 w-100px p-4 " >حفظ</button>
                <div class="toast-container">
                    <div class="alert alert-success d-none" role="alert"></div>
                    <br>
                </div>
            </div>
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

