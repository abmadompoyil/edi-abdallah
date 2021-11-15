{{-- Nav --}}
<ul class="navi navi-hover py-4">
    {{-- Item --}}
    @if(\Illuminate\Support\Facades\App::getLocale()=="ar")
        <li class="navi-item">
            <a href="/greeting/ar" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="{{ asset('media/svg/flags/008-saudi-arabia.svg') }}" alt=""/>
            </span>
                <span class="navi-text">العربية</span>
            </a>
        </li>
        <li class="navi-item">
            <a href="/greeting/en" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="{{ asset('media/svg/flags/226-united-states.svg') }}" alt=""/>
            </span>
                <span class="navi-text">English</span>
            </a>
        </li>
    @else
        <li class="navi-item">
            <a href="/greeting/en" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="{{ asset('media/svg/flags/226-united-states.svg') }}" alt=""/>
            </span>
                <span class="navi-text">English</span>
            </a>
        </li>
        <li class="navi-item">
            <a href="/greeting/ar" class="navi-link">
            <span class="symbol symbol-20 mr-3">
                <img src="{{ asset('media/svg/flags/008-saudi-arabia.svg') }}" alt=""/>
            </span>
                <span class="navi-text">العربية</span>
            </a>
        </li>
@endif
{{--    --}}{{-- Item --}}
{{--    <li class="navi-item active">--}}
{{--        <a href="#" class="navi-link">--}}
{{--            <span class="symbol symbol-20 mr-3">--}}
{{--                <img src="{{ asset('media/svg/flags/128-spain.svg') }}" alt=""/>--}}
{{--            </span>--}}
{{--            <span class="navi-text">Spanish</span>--}}
{{--        </a>--}}
{{--    </li>--}}

{{--    --}}{{-- Item --}}
{{--    <li class="navi-item">--}}
{{--        <a href="#" class="navi-link">--}}
{{--            <span class="symbol symbol-20 mr-3">--}}
{{--                <img src="{{ asset('media/svg/flags/162-germany.svg') }}" alt=""/>--}}
{{--            </span>--}}
{{--            <span class="navi-text">German</span>--}}
{{--        </a>--}}
{{--    </li>--}}

{{--    --}}{{-- Item --}}
{{--    <li class="navi-item">--}}
{{--        <a href="#" class="navi-link">--}}
{{--            <span class="symbol symbol-20 mr-3">--}}
{{--                <img src="{{ asset('media/svg/flags/063-japan.svg') }}" alt=""/>--}}
{{--            </span>--}}
{{--            <span class="navi-text">Japanese</span>--}}
{{--        </a>--}}
{{--    </li>--}}

{{--    --}}{{-- Item --}}
{{--    <li class="navi-item">--}}
{{--        <a href="#" class="navi-link">--}}
{{--            <span class="symbol symbol-20 mr-3">--}}
{{--                <img src="{{ asset('media/svg/flags/195-france.svg') }}" alt=""/>--}}
{{--            </span>--}}
{{--            <span class="navi-text">French</span>--}}
{{--        </a>--}}
{{--    </li>--}}
</ul>
