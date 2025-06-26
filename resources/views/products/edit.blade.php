<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 12 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>

    <div class="bg-dark text-white py-2 text-center">
        <h2 class="">Laravel 12 CRUD</h2>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="d-flex justify-content-end p-0 mt-3">
                <a href="{{ route("products.index") }}" class="btn btn-dark">Back</a>
            </div>

            <div class="card p-0 mt-3">

                <div class="card-header bg-dark text-white">
                    <h4>Edit Product</h4>
                </div>

                <div class="card-body shadow-lg">

                    <form action="{{ route('products.update', parameters: $product->id) }}" enctype="multipart/form-data" method="post">
                        @csrf
                        @method("PUT")
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input value="{{ old("name", $product->name) }}" type="text" class="form-control @error("name") is-invalid @enderror" id="name" name="name" placeholder="Name">
                            @error("name")
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control @error("image") is-invalid @enderror" id="image" name="image">
                            @error("image")
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror

                            @if (!empty($product->image))
                                <img class="rounded mt-3" src="{{ asset('uploads/products/'.$product->image)}}" width="150" />
                            @endif
                        </div>  

                        <div class="mb-3">
                            <label for="sku" class="form-label">SKU</label>
                            <input value="{{ old("sku", $product->sku) }}" type="text" class="form-control @error("sku") is-invalid @enderror" id="sku" name="sku" placeholder="SKU">
                            @error("sku")
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input value="{{ old("price", $product->price) }}" type="text" class="form-control @error("price") is-invalid @enderror" id="price" name="price" placeholder="Price">
                            @error("price")
                                <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select">
                                <option {{  ($product->status == "Active") ? "selected" : " " }} value="Active">Active</option>
                                <option {{  ($product->status == "Inactive") ? "selected" : " " }} value="Inactive">Inactive</option>
                            </select>
                        </div>

                        <button class="btn btn-dark">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html> 