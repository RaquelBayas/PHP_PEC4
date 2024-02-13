<x-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New</title>
        <style>
            body{
                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
                align-items: center;
            }
            article {
                margin-left: 2rem;
                margin-right: 2rem;
                text-align: center;
                width: 80%;
            }

            article img {
                border-radius: 10px;
                box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
            }

            article p {
                font-size: 1.2rem;
            }

            button {
                margin-top: 1rem;
                padding: .8rem 1.8rem;
                outline: none;
                border: none;
                background-color: #007FFF;
                border-radius: 35px;
            }

            button:hover {
                cursor: pointer;
                background-color: #025ac9;
            }

            button a {
                font-size: 1rem;
                color: #FFFFFF;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <button><a href="http://localhost:8000/">Come back</a></button>
    <article>
        <h1> {{ $new->title }} </h1>
        <p> Author: {{ $new->author }} </p>
        <p> Published at: {{ $new->published_at }}</p>
        <img src="{{ $new->img }}" alt="Image">
        <p> {{ $new->content }} </p>        
    </article>
    </body>
    </html>
</x-layout>