  @extends('layouts.app')

  @section('main_content')

 

      <div class="bg-dark">
          <div class="container">

              <div class="row row-cols-6">
                  @foreach ($cards as $card)
                      @include('partials.movie')
                  @endforeach

                  {{-- @dump($cards) --}}
              </div>

          </div>
      </div>
  @endsection
