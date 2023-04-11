<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{$label}}</label>

    @if ($type == "textarea")
    
    <textarea class="form-control {{ $errors->has($name) ? "is-invalid" : "" }}" name="{{ $name }}" id="{{ $id }}">{{ old($name) ? old($name) : $value }}</textarea>
    
    @else
    
    <input type="{{ $type }}" value="{{ old($name, $value) }}" class="form-control {{ $errors->has($name) ? "is-invalid" : "" }}" name="{{ $name }}" id="{{ $id }}">
    
    @endif

    @error($name)
        
    <div class="invalid-feedback">{{ $message }}</div>
    
    @enderror
</div>