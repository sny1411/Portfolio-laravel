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
    <h1>Plus ou moins</h1>
    <div>
        <p>
            Ce projet est tout simplement une reprise du jeu du juste prix.
            On lance le programme, l'ordinateur choisi un nombre puis vous devez faire des proposotion pour
            essayer de deviner le nombre. L'orinateur vous dit seulement si le nombre est plus grand ou plus petit.
        </p>
        <p>
            Bien que ce projet soit simple, il me tient à cœur, car c'est mon tout premier projet.
            En effet, je l'ai réalisé lorsque j'étais en 6ᵉ donc en 2015.
        </p>
        <p>
            Et comme pour tout le reste, un lien vers le code <a href="https://github.com/sny1411/plus-ou-moins" target="_blank">ici</a>
        </p>
    </div>
@endsection
