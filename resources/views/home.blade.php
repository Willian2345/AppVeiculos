@extends('padrao')
@section('content')
<section>
    <img src="{{'/img/Design Sem Nome.gif'}}" class="card-img-top" alt="..."> />

    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="{{'/img/ferrari.jpg'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{'/img/ferrari.jpg'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="{{'/img/ferrari.jpg'}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
        <div class="text-center">
        <button type="button" class="btn btn-primary">Primary</button>
        </div>
      </div>
    </div>
  </div>
  
</section>
@endsection