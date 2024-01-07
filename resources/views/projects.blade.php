
@extends('components.layout')

@section('content')
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
        }

        .projects {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        article {
            width: 300px;
            height: 400px;
            margin: 20px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        article:hover {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        h2 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        img {
            width: 100%;
            height: auto;
            min-height: 20vh;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .technos {
            list-style: none;
            padding: 0;
            margin-bottom: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .technos li {
            margin: 5px;
            padding: 5px;
            border-radius: 5px;
        }

        .html { background-color: #e44d26; color: white; }
        .css { background-color: #264de4; color: white; }
        .php { background-color: #777bb3; color: white; }
        .laravel { background-color: #ff2d20; color: white; }
        .java { background-color: #007396; color: white; }
        .maven { background-color: #C71A36; color: white; }
        .minecraft { background-color: #5C7C8D; color: white; }
        .papermc { background-color: #6D82AD; color: white; }
        .ccc { background-color: #00599C; color: white; }
        .mysql { background-color: #4479A1; color: white; }

        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 14px;
            margin: auto auto 0;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        @media screen and (max-width: 600px) {
            article {
                width: 100%;
                height: auto;
            }
        }

        a {
            text-decoration: none;
            color: #fdfdfd;;
        }
    </style>

    <h1>Mes projets</h1>

    <section class="projects">
        <article>
            <h2>Portfolio</h2>
            <img src="{{ asset("images/projects/portfolio.jpg") }}" alt="portfolio image">
            <ul class="technos">
                <li class="html">HTML</li>
                <li class="css" >CSS</li>
                <li class="php" >PHP</li>
                <li class="laravel">Laravel</li>
            </ul>
            <button><a href="{{ route('portfolio') }}">En savoir plus</a></button>
        </article>
        <article>
            <h2>Marathon du web</h2>
            <img src="{{ asset("images/projects/marathon.jpg") }}" alt="Marathon image">
            <ul class="technos">
                <li class="html">HTML</li>
                <li class="css">CSS</li>
                <li class="php">PHP</li>
                <li class="laravel">Laravel</li>
            </ul>
            <button><a href="{{ route('marathon') }}">En savoir plus</a></button>
        </article>
        <article>
            <h2>Bingo</h2>
            <img src="{{ asset("images/projects/bingo.png") }}" alt="portfolio image">
            <ul class="technos">
                <li class="java">Java</li>
                <li class="maven" >Maven</li>
                <li class="minecraft">Minecraft</li>
                <li class="papermc">PaperMc</li>
            </ul>
            <button><a href="https://github.com/sny1411/Bingo" target="_blank">En savoir plus</a></button>
        </article>
        <article>
            <h2>Serveur Minecraft</h2>
            <img src="{{ asset("images/projects/minecraft.jpg") }}" alt="portfolio image">
            <ul class="technos">
                <li class="java">Java</li>
                <li class="maven">Maven</li>
                <li class="minecraft">Minecraft</li>
                <li class="papermc">PaperMc</li>
                <li class="mysql">Mysql</li>
            </ul>
            <button><a href="{{ route('minecraft') }}">En savoir plus</a></button>
        </article>
        <article>
            <h2>Plus ou moins</h2>
            <img src="{{ asset("images/projects/plusoumoins.png") }}" alt="portfolio image">
            <ul class="technos">
                <li class="ccc">C++</li>
            </ul>
            <button><a href="{{ route('plusoumoins') }}">En savoir plus</a></button>
        </article>
    </section>
@endsection
