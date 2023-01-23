@if (session('success'))

    <script>
        new Noty({
            type: 'success',
            layout: 'topRight',
            text: "{{ session('success') }}",
            timeout: 2000,
            killer: true
        }).show();
    </script>

@endif
@if (session('danger'))

    <script>
        new Noty({
            type: 'error',
            layout: 'topRight',
            text: "{{ session('danger') }}",
            timeout: 2000,
            killer: true
        }).show();
    </script>

@endif
@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
