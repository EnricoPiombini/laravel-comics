<div class="col h-100">
    <div class="card bg-dark">
        <a href="{{route('cards.show', $card['id'])}} " class="text-decoration-none">
            <img src=" {{ $card['thumb'] }} " alt="" srcset="" class="card-img w-100">
            <div class="title">
                <h6 class="text-uppercase text-white p-2 fw-bold"> {{ $card['title'] }} </h6>
            </div>
        </a>
    </div>
</div>
