@extends("layouts.app")
          
@section("title")
    Laravel-app 
@endsection

@section("content")
@parent
    this is my first laravel project
    <button class="btn btn-info" id="btn-confirm" >Test</button>
@endsection

@push('scripts')
    @vite(['resources/js/helper.js'])
@endpush
    
@push('scripts')
<script>
document.getElementById('btn-confirm')
    .addEventListener('click', () => {
    swalcomfirmation()
});
</script>   
@endpush
                
