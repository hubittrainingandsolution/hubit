@extends('backend.common.layout.app')
{{-- @section('title', 'Job Category') --}}
@push('styles')
   
@endpush
@section('content')
<div class="block">
    <!-- Form Validation Example Title -->
    <div class="block-title">
        <h2><strong>Curriculum</strong> Create</h2>
        
    </div>
   
    <form id="form-validation" action="{{route('admin.curriculum.store')}}" method="post" class="form-horizontal form-bordered" enctype='multipart/form-data'>
        @csrf
        @include('backend.course.curriculum.common')
    </form>
  
</div>

@push('scripts')    

 @endpush


@endsection


