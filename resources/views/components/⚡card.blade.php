<?php

use Livewire\Component;

new class extends Component
{
    public $id, $imagePath, $productName, $quantity, $author, $style;
};
?>

<div class="card rounded-custom {{ $style ?? '' }}" style="width: 18rem;">
    {{-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi --}}
    <img src="{{asset($imagePath)}}" class="card-img-top bg-white rounded-custom" alt="...">
    {{ $slots['image'] }}
    <div class="card-body">
        {{ $slots['card-body'] }}
        <h5 class="d-flex justify-content-between align-items-center">
            <div style="font-size: 20px;">{{ $productName }}</div>
            <div style="font-size: 15px;">{{ $quantity }} pcs</div>
        </h5>
        <p class="card-text">by {{ $author }}</p>
        <a href="#" class="btn btn-secondary">Detail</a>
    </div>
</div>
