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
    <h1>Portfolio</h1>
    <div>
    <p>
        J'ai réalisé ce portfolio à l'aide de Laravel.
        Ce projet n'est pas seulement la création du portfolio en lui-même,
        j'ai tenu à l'héberger moi-même. En effet, j'ai installé Ubuntu Server sur mon Raspberry Pi,
        puis à l'aide de Nginx, j'ai installé mon serveur web.
    </p>
    <p>
        Ensuite, j'ai acheté mon nom de domaine que j'ai dirigé vers ma machine.
        Pour terminer, j'ai un certificat SSL qui me permet d'utiliser le protocole HTTPS.
        D'ailleurs, toutes les requêtes HTTP sont automatiquement redirigées en HTTPS.
    </p>

        <p>
        Vous pouvez acceder au code de ce site <a href="https://github.com/sny1411/Portfolio-laravel" target="_blank">ici</a>.
        </p>
        <p>
            Si vous souhaitez me faire des retours sur ce projet, je serais heureux de les écouter,
            que ce soit positif ou négatif !</p>
    </div>
@endsection
