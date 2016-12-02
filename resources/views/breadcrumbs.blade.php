@if ($breadcrumbs)
    <section class="container space-inside-down-md space-outside-up-md">
        
        <div class="row">
            
            <div class="col-lg-12">
                 
                <ul class="font-xs reset-padding text-color-main">

                    @foreach ($breadcrumbs as $breadcrumb)

                        @if (!$breadcrumb->last)

                            <li class="inline-block text-color-main text-bold"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }} > </a></li>

                        @elseif ($breadcrumb->last)

                            <li class="active-main inline-block text-color-secondary text-light"> {{ $breadcrumb->title }}  </li>

                        @endif

                       

                    @endforeach

                </ul>

            </div>

        </div>

    </section>

@endif