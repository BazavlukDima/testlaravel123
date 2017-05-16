<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>

    {{ HTML::style('../../bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('../../css/style.css') }}
</head>
<body>
    <h1>Select Form:</h1>
    <div class="container content">
        <div class="centered-top">
            {{ Form::open(['method' => 'POST', 'class' => 'form-horizontal', 'id' => 'form'])}}
                {{ csrf_field() }}
                <div class="form-group">
                    {{ Form::label('name', 'Type', ['class' => 'col-sm-2 control-label']) }}
                    <div class="col-sm-6">
                        {{ Form::select('country', ['class' => 'form-control', 'id' => 'country']) }}
                            <option disabled selected>Choose...</option>
                            @foreach($countries as $country):
                                <option value="{{ $country['Code'] }}">{{ $country['Name'] }}</option>
                            @endforeach
                    </div>
                </div>

                <div class="form-group city-select">
                    {{ Form::label('name', 'Subtype', ['class' => 'col-sm-2 control-label']) }}
                    <div class="col-sm-6">
                        {{ Form::select('city', ['class' => 'form-control', 'id' => 'city']) }}
                            <option disabled selected>Choose...</option>
                    </div>
                </div>

                <div class="form-group model-select">
                    {{ Form::label('name', 'Model', ['class' => 'col-sm-2 control-label']) }}
                    <div class="col-sm-6">
                        {{ Form::select('model', ['class' => 'form-control', 'id' => 'model']) }}
                            <option disabled selected>Choose...</option>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-6">
                        {{ Form::submit('Отправить', ['id' => 'submit', 'class' => 'btn btn-primary']) }}
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
    {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') }}
    {{ HTML::script('../../bootstrap/js/bootstrap.min.js') }}
    {{ HTML::script('../../js/main.js') }}
    </body>
</html>