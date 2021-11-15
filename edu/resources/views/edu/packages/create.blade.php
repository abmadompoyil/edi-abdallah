@extends('layout.default')
@section('styles')
    <style>
        .ck.ck-content.ck-editor__editable.ck-rounded-corners.ck-editor__editable_inline.ck-blurred {
            text-align: right;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-custom  gutter-b example example-compact">
                <div class="card-header">
                    <div class="card-title">إضافة باقة جديد </div>
                </div>
                <form  method="POST" action="{{route('package.store')}}" class="formAction">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>إسم الباقة</label>
                            <input type="text" name="name" placeholder="إسم الباقة"  class="form-control">
                        </div>
                        <div class="form-group">
                            <label>عدد دقائق المتاحة في الباقة</label>
                            <input type="text" name="minute" placeholder="عدد دقائق المتاحة في الباقة" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>المدة </label>
                            <select  name="days"  class="form-control">
                                    <option value="30">شهر</option>
                                    <option value="90">3 أشهر</option>
                                    <option value="180">6 أشهر </option>
                                    <option value="270">9 أشهر</option>
                                    <option value="365">  سنة</option>
                            </select>
                        </div>
                <div class="form-group">
                            <label>السعر </label>
                            <input type="text" name="price" placeholder="السعر"  class="form-control">
                        </div>


                        <button type="submit" class="btn btn-primary btn-save mr-2 w-100px p-4 ">حفظ</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
        <div class="toast-container">
        <div class="alert alert-success d-none" role="alert"></div>
    </div>
@endsection

@section('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ), {


        } )

    .catch( error => {
            console.error( error );
        } );
</script>
    <script src="{{asset('/js/ajax.js')}}"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#imgInp").change(function() {
        readURL(this);
    });
</script>
@endsection

