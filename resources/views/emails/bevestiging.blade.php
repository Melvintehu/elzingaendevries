@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Bedankt voor uw bericht.',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')

        <p>Wij proberen zo spoedig mogelijk contact op te nemen.</p>

        <p>Met vriendelijke groet,</p>

        <p>Team Mentor4you</p>

    @include('beautymail::templates.sunny.contentEnd')

@stop