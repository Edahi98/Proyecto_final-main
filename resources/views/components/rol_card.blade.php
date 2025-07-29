<div class="{{ $cardClass ?? 'card h-100 border-primary shadow' }}">
    <div class="{{ $bodyClass ?? 'card-body' }}">
        @if(!empty($icon))
            @if(Str::contains($icon, 'fa-'))
                <i class="{!! $icon !!}"></i>
            @else
                {!! $icon !!}
            @endif
        @endif
        <h4 class="fw-bold mb-2">{{ $title }}</h4>
        <p class="mb-3">{{ $description }}</p>
        @if(isset($features) && is_array($features))
            <ul class="list-unstyled text-start mx-auto" style="max-width: 260px;">
                @foreach($features as $feature)
                    <li>{!! $feature !!}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
