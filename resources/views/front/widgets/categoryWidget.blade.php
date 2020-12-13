<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Kategoriler
        </div>
        <div class="list-group">
            @foreach($categories as $category)
                <li class="list-group-item">
                    <a href="#">{{$category->name}} </a> <span class="badge bg-primary float-right">12</span>
                    <!--Veritabanından categorileri çekip anasayfada random bir şekilde gösterdik.-->
                </li>
            @endforeach

        </div>
    </div>
</div>
