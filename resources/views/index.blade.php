<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ijabo Crop Tool x Laravel</title>
    <link rel="stylesheet" href="{{ asset('IjaboCropTool/css/ijaboCropTool.min.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <label for="_userAvatarFile">Change</label>
            </div>
        </div>
        <div class="row">
            <div class="col">
                {{-- <input type="file" name="_userAvatarFile" id="_userAvatarFile"> --}}
                <input type="file" name="file" id="file">
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('IjaboCropTool/js/ijaboCropTool.min.js') }}"></script>
    <script>
        // $('#_userAvatarFile').ijaboCropTool({});
        $('#file').ijaboCropTool({
            preview: '.image-previewer',
            setRatio: 1,
            allowedExtensions: ['jpg', 'jpeg', 'png'],
            buttonsText: ['CROP', 'QUIT'],
            buttonsColor: ['#30bf7d', '#ee5155', -15],
            processUrl: '{{ route('crop') }}',
            withCSRF: ['_token', '{{ csrf_token() }}'],
            onSuccess: function(message, element, status) {
                alert(message);
            },
            onError: function(message, element, status) {
                alert(message);
            }
        });
    </script>
</body>

</html>
