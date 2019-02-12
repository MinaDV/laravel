<h1>Liste des articles</h1>


@foreach($articles as $article)
<h2>{{$article->name}}</h2>
<p>{{str_limit($article->body,200)}}</p>
@endforeach