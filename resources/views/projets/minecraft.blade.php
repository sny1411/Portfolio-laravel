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
    <h1>Serveur Minecraft</h1>
    <div>
       <p>

           Comme on peut le comprendre, j'aime Minecraft.
           Ce jeu permet de créer ce que l'on souhaite et donc
           de laisser son imagination décider de ce que l'on va faire.
       </p>
       <p>

           Hors, après plusieurs années à jouer,
           parfois, on peut se sentir bloqué et dire "oh, ça serait super si telle chose était dans le jeu !".
           Eh bien, c'est ce que je fais de mon temps libre pour mes amis.
           Eux me donnent des idées, et moi, je les réalise.
       </p>

        <p>
            Le meilleur exemple que je peux donner est celui d'un serveur que j'ai ouvert début 2023
            pendant les vacances afin de faire profiter tous ceux qui avaient
            envie de jouer des ajouts que j'ai effectués.
        </p>
        <p>
            Vous pouvez acceder au code de ce projet <a href="https://github.com/sny1411/Tepakap-Plugin" target="_blank">ici</a>.
            Un ami m'a également fait une documentation qui explique les ajouts au jeu,
            vous pouvez la lire <a href="https://poulmouth.gitbook.io/tepakap/" target="_blank">ici</a>
        </p>
        <p>
            Si vous souhaitez me faire des retours sur ce projet, je serais heureux de les écouter,
            que ce soit positif ou négatif !</p>
    </div>
@endsection
