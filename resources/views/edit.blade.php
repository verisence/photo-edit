@extends('welcome')

@section('contenu')
    <div
        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-1/2">

        <div class="text-center w-2/3 mx-auto">
            <h2 class="photo-title font-arvo my-4">Edit photo</h2>

            <p class="photo-message font-lexend">The photo is too small. For your image to display well, we
                recommend at least 500 X 500 pixels.</p>
        </div>

        <div class="w-full mt-6 pt-6">
            <img id="image" src="{{ asset('images/initiative.png') }}" class="w-4/5 h-4/5 mx-auto my-auto" style="" alt="" srcset="">
        </div>

        <div class="w-full flex flex-row">
            <div class="w-2/12 py-4 border-r-2 border-b-2 border-gray-300">
                <a href="#!" id="rotate"><img src="{{ asset('assets/rotate.svg') }}" class="mx-auto my-auto" alt=""
                        srcset=""></a>
            </div>
            <div class="w-11/12 py-4 px-6 flex border-b-2 border-gray-300 justify-between items-center">
                <a href="#!" id="zoom-out"><img src="{{ asset('assets/minus.svg') }}" alt="" srcset=""></a>
                <a href="#!" id="zoom-in"><img src="{{ asset('assets/plus.svg') }}" alt="" srcset=""></a>
            </div>
        </div>

        <div class="items-center py-4 w-3/4 mx-auto" id="cropButton">
            <a href="#!" id="save-image"><img src="{{ asset('assets/save.svg') }}" class="" alt="" srcset=""></a>
        </div>
    </div>
@endsection
