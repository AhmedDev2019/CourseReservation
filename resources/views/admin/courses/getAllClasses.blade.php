<option value="">Select Class ...</option>
@foreach( $classes as $class )
    <option value="{{ $class->id }}">{{ $class->name }}</option>
@endforeach