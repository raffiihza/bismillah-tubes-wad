<div class="card card-compact bg-base-100 shadow-xl">
    <figure>
        <img src="{{ $cardImage }}" alt="Shoes" class="w-28 my-4"/>
    </figure>
    <div class="card-body">
        <a class="btn btn-error rounded-full text-white" href="{{$cardLink}}">
            {{ $cardTitle}}
        </a>
    </div>
</div>
