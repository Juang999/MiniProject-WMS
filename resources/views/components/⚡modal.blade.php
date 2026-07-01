<?php

use Livewire\Component;

new class extends Component
{
    public $modalId, $modalTitle;
};
?>

<div class="modal fade" id="{{ $modalId }}" tabindex="-1" aria-labelledby="NewMasterProductLabel" aria-hidden="true">
    {{-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Maria Skłodowska-Curie --}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="NewMasterProductLabel">{{ $modalTitle }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ $slots['body'] }}
            </div>
            <div class="modal-footer">
                {{ $slots['footer'] }}
            </div>
        </div>
    </div>
</div>
