@extends('layouts.app')

@section('content')

    <div class="container">
    <h2>JOB</h2>
        <form>
            <div class="form-group">
                <label for="job">Select the job:</label>
                <select class="form-control" id="job" name="job"></select>
            </div>
        </form>

        <div class="box" id="courses-container">
        </div>

        <div class="box" id="subjects-container">
            <!-- Subjects -->
        </div>

        <div class="box" id="ol-subjects-container">
            <!-- OL Subjects-->
        </div>
    </div>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WybBhKEIevD5SrhVOWKl65voNke0JgIx9M" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js" integrity="sha384-aic44HYLq0X2FCmKbOxUr5b5jowVQzZiKlf7dNEs5CojqlPXXkvLRZN+8EULRF5i" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-o7DPO9nt0l5l/HMvmz68ZNJ4pMCyZl8f5fFRxTa3fsY8JjOMqHZDpL2SF9tdRTfW" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script> 
@endsection
