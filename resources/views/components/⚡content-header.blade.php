<?php

use Livewire\Component;

new class extends Component
{
    public $FeatureName, $Route, $RouteName;

    public function mount($FeatureName, $Route, $RouteName)
    {
        $this->FeatureName = $FeatureName;
        $this->Route = $Route;
        $this->RouteName = $RouteName;
    }
};
?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ $FeatureName }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ $Route }}">{{ $RouteName }}</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
