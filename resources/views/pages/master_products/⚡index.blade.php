<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="content-wrapper px-3">
    @push('styles')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </link>
    @endpush

    {{-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Master Products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Master Product</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
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
        <div class="card rounded-custom" style="width: 20rem;">
            <img src="{{asset('img/default-product.png')}}" class="card-img-top bg-white rounded-custom" alt="...">
            <div class="card-body">
                <h5 class="d-flex justify-content-between align-items-center">
                    <div style="font-size: 20px;">Psychology of Money</div>
                    <div style="font-size: 15px;">10 pcs</div>
                </h5>
                <p class="card-text">by Morgan Housel</p>
                <a href="#" class="btn btn-secondary">Detail</a>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="NewMasterProduct" tabindex="-1" aria-labelledby="NewMasterProductLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="NewMasterProductLabel">Create New Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="productName">Product Name</label>
                                <input type="Text" class="form-control" id="productName" placeholder="Enter Product Name">
                            </div>
                            <div class="form-group">
                                <label for="productSlug">Slug</label>
                                <input type="Text" class="form-control" id="productSlug" placeholder="Enter Product Slug, Slug must be unique">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" rows="10" placeholder="Enter Product Description"></textarea>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
