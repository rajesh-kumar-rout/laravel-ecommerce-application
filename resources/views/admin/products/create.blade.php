@extends("admin.base")

@section("content")
<div class="container my-4 px-3">

    <div class="card mx-auto" style="max-width:700px">

        <div class="card-header fw-bold text-primary">Create New Product</div>

        <form enctype="multipart/form-data" action="/admin/products/store" class="card-body" method="post">
            @csrf

            <x-form-control label="Name" type="text" id="name" name="name"/>

            <x-form-select label="Category" id="category_id" name="category_id" :options="$categories"/>

            <x-form-control label="Short Description" type="text" id="short_description" name="short_description"/>
            
            <x-form-control label="Description" type="textarea" id="description" name="description"/>

            <x-form-control label="Stock" type="number" id="stock" name="stock"/>

            <x-form-control label="Price" type="number" id="price" name="price"/>

            <x-form-control label="Image" type="text" id="image_url" name="image_url"/>

            <x-form-check id="is_featured" name="is_featured" value="1" label="Featured"/>

            <x-form-check id="is_active" name="is_active" value="1" label="Active"/>

            <x-form-check id="has_variations" name="has_variations" label="Has Variations"/>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>

<script>

    function setPriceStock() 
    {
        if($("input[name=has_variations]").is(":checked")) {
            $("input[name=price]").closest("div").hide()
            $("input[name=stock]").closest("div").hide()
        } else {
            $("input[name=price]").closest("div").show()
            $("input[name=stock]").closest("div").show()
        }
    }

    $("input[name=has_variations]").change(setPriceStock)
    
    setPriceStock()

</script>

@endsection