<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Autocomplete Search</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <style>
        .container {
            max-width: 600px;
        }

    </style>
</head>

<body>

    <div class="container mt-5">
        <div classs="form-group">
            <input type="text" id="search" name="search" placeholder="Search" class="form-control" />

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    </script>
    <script type="text/javascript">
        var path = "{{ url('autocomplete-search') }}";

        $( "#search" ).autocomplete({
            source: function( request, response ) {
                $.ajax({
                    url: path,
                    type: 'GET',
                    dataType: "json",
                    data: {
                        search: request.term
                    },
                    success: function( data ) {
                        response( data );
                    }
                });
            },
            select: function (event, ui) {
                $('#search').val(ui.item.label);
                console.log(ui.item);
                return false;
            }
        });


    </script>

</body>

</html>
