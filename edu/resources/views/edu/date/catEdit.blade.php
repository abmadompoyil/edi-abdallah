@extends('layout.default')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom  gutter-b example example-compact">
                <div class="card-header">
                    <div class="card-title"> {{__("Edit Subject")}}  </div>
                </div>
                <form  method="POST" action="{{route('subjects.update',$category->id)}}" class="formAction">
                    @csrf
                    <input type="hidden" name="id" value="{{$category->id}}">
@method('Patch')
                    <div class="card-body">
                        <div class="form-group">
                            <label>{{__("Name")}} </label>
                            <input type="text" name="name" value="{{$category->name}}" class="form-control">
                        </div>








                <button type="submit" class="btn btn-primary btn-update mr-2 w-100px p-4 " >{{__("Save")}}</button>

            </div>
            </form>

            </div>
    </div>
        <div class="toast-container">
            <div class="alert alert-success d-none" role="alert"></div>
    </div>


    </div>
@endsection

@section('scripts')

    <script src="{{asset('/js/ajax.js')}}"></script>
@endsection

