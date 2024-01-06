@extends('components.layout')

@section('content')
    <h1>Mattéo Humez</h1>
    <p>Je suis étudiant en deuxième année d'informatique et passionné par le développement d'applications.</p>
    <aside class="social-menu">
        <a href="https://github.com/sny1411" target="_blank">
            <img src="{{ Vite::asset('/resources/images/logos/github.svg') }}" alt="github logo"></a>
        <a href="https://www.linkedin.com/in/matteohumez/" target="_blank">
            <img src="{{ Vite::asset('/resources/images/logos/linkedin.svg') }}" alt="linkedin logo"></a>
    </aside>
@endsection
