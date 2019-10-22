@section('styles')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
@endsection

<input type="file" name="bulletins[]" multiple="true">

@section('scripts')
    <script>        
        const inputElement = document.querySelector('input[type="file"]');
        const pond = FilePond.create( inputElement );

        FilePond.setOptions({
            server: {
                url: 'http://localhost:8000',
                process: {
                    url: '/admin/releases/store',
                    method: 'POST',
                    withCredentials: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    timeout: 7000,
                    onload: null,
                    onerror: null,
                    ondata: null
                }
            }
        });
    </script>
@endsection