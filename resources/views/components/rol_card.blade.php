<div class="card h-100 border-primary shadow">
    <div class="card-header bg-primary text-white">
        <h5 class="card-title mb-0">
            <i class="{{ $icon }} me-2"></i>{{ $title }}
        </h5>
    </div>
    <div class="card-body">
        <p class="card-text">{{ $description }}</p>
        @if(isset($features) && is_array($features))
            <ul class="list-group list-group-flush">
                @foreach($features as $feature)
                    <li class="list-group-item">{{ $feature }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
