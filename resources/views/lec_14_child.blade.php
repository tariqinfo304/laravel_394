<!-- Stored in resources/views/child.blade.php -->
@extends('lec_14_parent')

@section('title', $title)



@section('nav-bar')
    

    <button>Child</button>
    <p>This nav bar is appended to the master sidebar by child view .</p>
    <!-- it's parent code will copy here -->
     @parent
    
@endsection

@section("left-bar")
    
    @component("alert")
            <strong>{{ $error }}</strong>
            @slot("title")
                {{ $heading }} 
            @endslot
    @endcomponent


    <p>Here is child left-bar will show<p>
      
      {{-- @parent  --}}  
        
@endsection

