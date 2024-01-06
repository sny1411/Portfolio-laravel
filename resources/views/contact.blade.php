@extends('components.layout')

@section('content')
    <style>
        section {
            display: flex;
            flex-wrap: wrap; /* Permet le passage à la ligne sur les petits écrans */
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        article {
            width: 300px;
            height: 30rem;
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

        .matteohumez {
            max-width: 70%;
            border-radius: 50%;
            overflow: hidden;
            display: block;
            margin: 0 auto;
        }

        p {
            margin-top: 0;
            line-height: 1.6;
        }

        h1 {
            color: #fdfdfd;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .social-menu a {
            margin-right: 10px;
        }

        .social-menu a:hover {
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            article {
                width: 100%;
            }
        }

        a {
            color: #007bff; /* Couleur du lien */
            text-decoration: none; /* Supprimer le soulignement par défaut */
            font-weight: bold; /* Rendre le texte en gras */
        }

        a:hover {
            text-decoration: underline; /* Souligner le lien au survol */
        }
    </style>
    <h1>Contact</h1>
    <section>
        <article class="aticlestyle">
            <img class="matteohumez" src="{{ Vite::asset('/resources/images/matteohumez.jfif') }}" alt="matteo humez">
            <p>
                Je suis étudiant à l'iut de Lens en 2ème année d'informatique,
                passionné par le développement d'applications.
                J'aime apprendre de nouvelles choses et relever de nouveaux défis.
            </p>
        </article>
        <article>
            <p>Vous pouvez me contacter par mail à <a
                    href="mailto:humez.matteo24@gmail.com">humez.matteo24@gmail.com</a>
                ou via les réseaux sociaux.</p>
            <aside class="social-menu">
                <a href="https://github.com/sny1411" target="_blank">
                    <img src="{{ Vite::asset('/resources/images/logos/github.svg') }}" alt="github logo"></a>
                <a href="https://www.linkedin.com/in/matteohumez/" target="_blank">
                    <img src="{{ Vite::asset('/resources/images/logos/linkedin.svg') }}" alt="linkedin logo"></a>
            </aside>
        </article>
    </section>

@endsection
