@extends('welcome')

@section('contenu')
    <div
        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-1/2">

        <div class="text-center w-2/3 mx-auto">
            <h2 class="photo-title font-arvo my-4">Choose photo</h2>

            <p class="text-primary text-xs font-lexend">A high-quality photo will help tell your story and build trust with
                donors. </p>
        </div>

        {{-- <div class="w-full mt-6 pt-6">
            <div x-data="{ files: null }" id="FileUpload"
                class="block w-full py-2 px-3 relative bg-white appearance-none rounded-md hover:shadow-outline-gray">
                <input type="file" multiple class="absolute inset-0 z-50 m-0 p-0 w-full h-full outline-none opacity-0"
                    x-on:change="files = $event.target.files; console.log($event.target.files);"
                    x-on:dragover="$el.classList.add('active')" x-on:dragleave="$el.classList.remove('active')"
                    x-on:drop="$el.classList.remove('active')">
                <template x-if="files !== null">
                    <div class="flex flex-col space-y-1">
                        <template x-for="(_,index) in Array.from({ length: files.length })">
                            <div class="flex flex-row items-center space-x-2">
                                <template x-if="files[index].type.includes('audio/')"><i
                                        class="far fa-file-audio fa-fw"></i></template>
                                <template x-if="files[index].type.includes('application/')"><i
                                        class="far fa-file-alt fa-fw"></i></template>
                                <template x-if="files[index].type.includes('image/')"><i
                                        class="far fa-file-image fa-fw"></i></template>
                                <template x-if="files[index].type.includes('video/')"><i
                                        class="far fa-file-video fa-fw"></i></template>
                                        <script>
                                            console.log(files[0].name);
                                        </script>
                                <span class="font-medium text-gray-900" x-text="files[0].name">Uploading</span>
                                <span class="text-xs self-end text-gray-500" x-text="filesize(files[0].size)">...</span>
                            </div>
                        </template>
                    </div>
                </template>
                <template x-if="files === null">
                    <div class="flex flex-col space-y-2 items-center p-6 m-4 rounded-lg justify-center border border-dashed border-primary">

        <a href="javascript:void(0)" class="flex items-center mx-auto mt-28 pb-2 px-4 text-white text-center font-medium">
            <img src="{{ asset('assets/plus.svg') }}" alt="" srcset="">
        </a>
        <p class="text-gray-700 font-arvo text-base text-center">Drag and drop or click the add symbol to upload a photo
        </p>

    </div>
    </template>
    </div>
    </div> --}}

    <form method="post" action="{{ route('files.store') }}" enctype="multipart/form-data"
          class="dropzone" id="dropzone">
        @csrf

        <div class="dz-message needsclick">
            Drop files here or click to upload.
          </div>
        </form>
        <a href="/edit"><button>Next</button></a>

    <script type="text/javascript">
        Dropzone.options.dropzone = {
            maxFilesize: 12,
            resizeQuality: 1.0,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 60000,
            removedfile: function(file) {
                var name = file.upzzload.filename;
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    type: 'POST',
                    url: '{{ url('files/destroy') }}',
                    data: {
                        filename: name
                    },
                    success: function(data) {
                        console.log("File has been successfully removed!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }
                });
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
            success: function(file, response) {
                console.log(response);
            },
            error: function(file, response) {
                return false;
            }
        };

    </script>



@endsection
