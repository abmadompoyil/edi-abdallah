@extends('layout.default')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom  gutter-b example example-compact">
                <div class="card-header">
                    <div class="card-title"> تعديل مستخدم  </div>
                </div>
                <form  method="POST" action="{{route('category.update',$category->id)}}" class="formAction">
                    @csrf
                    <input type="hidden" name="id" value="{{$category->id}}">
@method('Patch')
                    <div class="card-body">
                        <div class="form-group">
                            <label>الإسم </label>
                            <input type="text" name="name" value="{{$category->name}}" class="form-control">
                        </div>


                        <div class="form-group">
                            <label for="exampleTextarea" >ايقونة </label>
                            <img id="blah"  height="90" src="{{asset('public/storage/app/'.$category->icon)}}" alt="your image" />

                            <input type="file" name="icon"  id="imgInp" class="form-control">

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

