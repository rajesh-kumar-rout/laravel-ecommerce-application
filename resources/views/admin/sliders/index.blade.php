@extends("admin.base")

@section("head")
    <title>Sliders</title>
@endsection

@section("content")
<div class="card">
    <div class="card-header flex items-center justify-between">
        <span class="card-header-title">Sliders</span>
        <a href="/admin/sliders/create" class="btn btn-sm btn-primary">Add New</a>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <div class="table min-w-[1024px]">
                <table>
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($sliders) == 0)
                            <tr>
                                <td colspan="3" class="text-center">No Sliders Found</td>
                            </tr>
                        @endif
    
                        @foreach ($sliders as $slider)
                            <tr>
                                <td>
                                    <img src="/uploads/{{ $slider->image }}" class="w-20 object-cover">
                                </td>
                            
                                <td>
                                    <div class="d-flex gap-1">
                                        <form action="/admin/sliders/{{ $slider->id }}" method="post">
                                            @csrf 
                                            @method("delete")
    
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection