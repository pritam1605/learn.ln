<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign-Up: A Laravel Form</title>
    <style>
        label {
            display: block;
            padding-top: 1em;
        }
        input[type="submit"] {
            display: block;
            margin-top: 2em;
        }
        textarea {
            display: block;
            margin-bottom: 1em;
        }
        input[type="checkbox"] {
            display: inline-block;
            margin-top: 1em;
        }
        label[for="agree"] {
            display: inline;
        }

    </style>
</head>

<body>
<h1>Newsletter sign up</h1>
{{ Form::open(array('url' => 'thanks', 'method' => 'POST'))}}

    {{ Form::label('name', 'Name:') }}
    {{ Form::text('name') }}

    {{ Form::label('email', 'Email:') }}
    {{ Form::email('email') }}

    {{ Form::label('os', 'Operating System:') }}
    {{ Form::select('os', array('
        linux' => 'Linux',
        'mac' => 'Mac',
        'windows' => 'Windows',))
    }}

    {{ Form::label('comment', 'Comments:') }}
    {{ Form::textarea('comment', '', array('placeholder' => 'What are your interests?')) }}

    {{ Form::checkbox('agree', 'yes', FALSE) }}
    {{ Form::label('agree', 'I agree to your terms of service') }}

    {{ Form::submit('Sign up') }}

{{ Form::close() }}
</body>
</html>