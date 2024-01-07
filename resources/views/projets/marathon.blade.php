@extends("components.layout")

@section('content')
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            cursor: pointer;
            float: right; /* Aligne le bouton à droite */
        }

        h1 {
            text-align: center;
            color: #2ecc71; /* Nouvelle couleur pour le h1 */
        }

        div {
            max-width: 800px;
            background-color: rgba(255, 255, 255, 0.9); /* Couleur de fond légèrement transparente */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto 0;
            overflow: hidden; /* Pour que la div englobe le bouton à droite */
        }

        p {
            line-height: 1.6;
            color: #555;
            text-align: justify; /* Justifie le texte */
        }

        a {
            text-decoration: none;
            color: #fdfdfd;
        }

        button:hover {
            background-color: #2574a9;
        }

        div a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        div a:hover {
            text-decoration: underline;
        }
    </style>
    <button><a href="{{ route("projects") }}">Retour</a></button>
    <h1>Marathon du web</h1>
    <div>
        <p>
            Ce projet est un événement organisé par l'IUT de Lens.
            Il consiste à développer un site web complet en 36 heures.
        </p>
        <p>
            Pour cela, le département MMI (Métiers du Multimédia et de l'Internet) s'est joint à nous.
            Nous avons travaillé à quatre sur le backend et eux à cinq sur le frontend.
            C'était très intéressant car dans leur formation, ils approfondissent davantage les notions de design, etc.,
            tandis que nous avons plus de notions pour le backend. Nous étions donc complémentaires.
        </p>

        <p>
            Vous pouvez acceder au code de ce site <a href="https://github.com/sny1411/marathon-web" target="_blank">ici</a>.
        </p>
        <p>
            Si vous souhaitez me faire des retours sur ce projet, je serais heureux de les écouter,
            que ce soit positif ou négatif !</p>
    </div>
@endsection
