{{-- List Widget 3 --}}

<div class="card card-custom {{ @$class }}">
    {{-- Header --}}
    <div class="card-header border-0">
        <h3 class="card-title font-weight-bolder text-dark">{{__('Islamic files Library')}}</h3>

    </div>

    {{-- Body --}}
    <div class="card-body pt-2">
        {{-- Item --}}
        @php
            $files = \App\Edu\Library::where('type',2)->latest('created_at')->take(5)->get()
        @endphp
        @foreach($files as  $file)
            <div class="d-flex align-items-center mb-10">
                {{-- Symbol --}}
                <div class="symbol symbol-40 symbol-light-success mr-5">
                <span class="symbol-label">

                    <img src="{{ asset('assets/media/svg/icons/Files/Folder.svg') }}" class="h-75 align-self-end"/>
                </span>
                </div>

                {{-- Text --}}
                <div class="d-flex flex-column flex-grow-1 font-weight-bold">
                    <a href="{{asset($file->src)}}" download="" class="text-dark text-hover-primary mb-1 font-size-lg">{{$file->name}}</a>
                    <span class="text-muted"> {{$file->asd}} </span>
                </div>

                {{-- Dropdown --}}
                <div class="dropdown dropdown-inline ml-2"  data-placement="left">
                    <a href="{{asset($file->src)}}" download class="btn btn-hover-light-primary" >
                        <img src="{{asset('assets/media/svg/icons/Files/Download.svg')}}"/>
                    </a>
                    <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                        {{-- Navigation--}}
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
