<x-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>News site</title>
        <style>

            body{
                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
                align-items: center;
            }
            .articles {
                margin-bottom: 2rem;
            }
            .articles {
                width:800px;
                padding: 2rem;
                background-color: #EDEAE0;
                border-radius: 8px;
                border: 2px solid #ada495;
                text-align: center;
            }

            article h1 {
                color: #808080;
                font-size: 1.55rem;
            }
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #929798;
            }
            li {
                float: left;
            }
            ul li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            article a {
                text-decoration: none;
            }

            .articles article img {
                border-radius: 10px;
                box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.75);
            }
        </style>
    </head>
    <body>
        <h1>NEWS</h1>
        <div class="collapse navbar-collapse"></div>
        <ul>
            <li><a href="http://localhost:8000/api/noticias/1">Noticias</a></li>
            <li><a href="http://localhost:8000/api/noticia/1">Noticia</a></li>
            <li><a href="http://localhost:8000/api/categoria/1/1">Categoria</a></li>
        </ul>
        
        @foreach ($news as $new) 
            <div class="articles">
                <article>
                    <a href="/news/{{$new->id}}">
                    <h1>
                        {{ $new->title }}
                    </h1>
                    </a>     
                    <p>
                        Date: {{ $new->published_at }}
                    </p>
                    <img src="{{ $new->img }}" alt="Image">
                </article>
            </div>
        @endforeach
        
    </body>
    </html>
</x-layout>