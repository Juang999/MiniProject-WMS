<?php

use Livewire\Attributes\Title;
use App\Models\MasterData\MasterProduct;
use Livewire\Component;

new #[Title('Master Product')] class extends Component
{
    public $productName, $slugProduct, $descriptionProduct, $imageProduct;
    public $products;

    public function mount()
    {
        $this->getProducts();
    }

    public function store()
    {
        $this->validate([
            'productName' => 'required',
            'slugProduct' => 'required|unique:master_products,slug',
            'descriptionProduct' => 'required',
            'imageProduct' => 'nullable',
        ]);

        MasterProduct::create([
            'name' => $this->productName,
            'slug' => $this->slugProduct,
            'description' => $this->descriptionProduct,
            // 'image' => ($this->imageProduct) ? $this->imageProduct->store('products', 'public') : null,
        ]);

        $this->reset();

        $this->dispatch('closeModal');

        $this->getProducts();
    }

    public function getProducts()
    {
        $this->products = MasterProduct::get();
    }
};
?>

<div class="content-wrapper px-3">
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
        </link>
    @endpush

    <livewire:content-header :FeatureName="'Master Products'" :Route="'/master-products'" :RouteName="'Master Products'" />
    <section class="content">
        <div class="d-flex justify-content-between mb-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#NewMasterProduct">
                Create New Product
            </button>
            <!-- Search form -->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        <!-- product card -->
        <div class="row">
            @foreach ($products as $product)
                <livewire:card id="{{ $product->id }}" imagePath="{{ $product->image ?? 'img/default-product.png' }}" productName="{{ $product->name }}" :quantity="10" :author="'Morgan Housel'" :style="'mx-3 mb-4'" />
            @endforeach
        </div>
        <!-- Modal -->
        <livewire:modal modalId="NewMasterProduct" modalTitle="Create New Product">
            <livewire:slot name="body">
                <form wire:submit="store">
                    <div class="form-group">
                        <label for="productName">Product Name</label>
                        <input type="Text" class="form-control" id="productName" placeholder="Enter Product Name" wire:model="productName">
                    </div>
                    <div class="form-group">
                        <label for="productSlug">Slug</label>
                        <input type="Text" class="form-control" id="productSlug" placeholder="Enter Product Slug, Slug must be unique"  wire:model="slugProduct">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" rows="10" placeholder="Enter Product Description" wire:model="descriptionProduct"></textarea>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" wire:model="imageProduct">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
            </livewire:slot>
            <livewire:slot name="footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" wire:click="$refresh">Save changes</button>
                </form>
            </livewire:slot>
        </livewire:modal>
    </section>

    @push('scripts')
    <script>
        Livewire.on('closeModal', () => {
            $('#NewMasterProduct').modal('hide');
        });
    </script>
    @endpush
</div>
