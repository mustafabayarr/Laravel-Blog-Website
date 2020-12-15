@if(count($articles)>0)
    @foreach($articles as $article)
        <div class="post-preview">
            <a href="{{route('single',[$article->getCategory->slug,$article->slug])}}">
                <h2 class="post-title">
                    {{$article->title}}
                </h2>
                <h3 class="post-subtitle">
                    {{Str::limit($article->content,75)}}
                </h3>
            </a>
            <p class="post-meta"> Kategori :
                <a href="#">{{$article->getCategory->name}}</a>
                <span class="float-right">{{$article->created_at->diffForHumans()}}</span></p>
        </div>
        @if(!$loop->last)
            <hr>
        @endif
    @endforeach
@else
    <div class="alert alert-danger">Bu Kategoriye Ait Yazı Bulunamadı.</div>
@endif
{{$articles->links("pagination::bootstrap-4")}}  <!--Sayfalama 1 2 3 4 gibi-->
