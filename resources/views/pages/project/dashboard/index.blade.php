@extends('layouts.app')


@section('title', 'Project')

@section('style')
<style>
    .dimensioniCard{
        --gap: 1rem;
        --columns: 5;
        flex-basis: calc((100% / var(--columns)) - var(--gap) + (var(--gap) / var(--columns)));

    }
</style>
@endsection
@section('main')
    <h1 class="text-center">Progetti</h1>
    <a class="btn btn-primary" href="{{ route('dashboard.projects.create')}}">
       Nuovo progetto
    </a>

    <div class="d-flex flex-wrap align-items-center justify-content-center gap-3">
        @foreach($projects as $item)
            <div class="card dimensioniCard" style="width: 18rem;">
                <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$item['title']}}</h5>
                    <p class="card-text">{{$item['description']}}</p>
                    <p>{{$item['language']}}</p>
                    <a href="{{ route ( 'dashboard.projects.edit', $item->slug )}}" class="btn btn-primary">Modifica</a>
                    <form action="{{ route ( 'dashboard.projects.destroy', $item->slug )}}" method="POST">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger" type="submit">
                            Elimina
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection

