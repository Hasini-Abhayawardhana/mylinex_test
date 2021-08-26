@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form id="search_form">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="name" name="name" type="text" class="form-control " autocomplete="name" autofocus>
                            </div>
                            <button type="button" class="btn btn-primary"  id="search_btn" >
                                {{ __('Search') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div id="result_content"></div>

        </div>
    </div>
</div>
@endsection
@push('scripts')
<script type="text/javascript">
$(document).ready(function() {

    load_details();

    $('#search_btn').click(function () {
        load_details();
    });

});

function load_details() {

    form_data = $("#search_form").find(":input").serializeArray();
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ url('/post/search') }}",
        method: 'POST',
        data: form_data,
        success: function (data) {
            $('#result_content').html(data);
        }

    });
}
</script>
@endpush
