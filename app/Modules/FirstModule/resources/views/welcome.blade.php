<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FirstModule</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
       
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-family: 'Roboto', sans-serif;
        }

    
        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

   
        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 15px;
        }


        .form-submit {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Style for form submit button on hover */
        .form-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="form-container">
                {!! Form::open(['route' => 'form-submit']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Name', ['class' => 'form-label']) !!}
                        {!! Form::text('name', null, ['class' => 'form-input']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
                        {!! Form::email('email', null, ['class' => 'form-input']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Submit', ['class' => 'form-submit']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</body>
</html>
