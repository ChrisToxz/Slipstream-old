@extends('layouts.app')

@section('content')
            {{-- Dev --}}
                <div class="absolute bottom-0 right-0 w-10 h-10 2xl:bg-red-500 xl:bg-orange-500 lg:bg-yellow-500 md:bg-green-500 sm:bg-blue-500 "></div>
                <div class="absolute right-1/2 top-0 bg-green-500">
                    <button onclick="Livewire.emit('openModal', 'media-settings')">media Settings</button>
                </div>
            {{-- Dev --}}
            <div class="flex flex-col basis-full mb-10"> <!-- content area -->

                <header class="flex h-20 flex-row justify-between mt-5 mx-8"><!-- Header -->
                    <div class="self-center"><img src="media/logo.png" alt=""></div>
                    <nav class="basis-1/6 bg-background-secondary rounded-md self-center text-base text-gray-200 py-2 px-4">
                        <ul class="flex justify-around gap-8 sm:gap-2">
                            <li class="transition-all cursor-pointer hover:text-brand-primary-500">Dashboard</li>
                            <li class="transition-all cursor-pointer hover:text-brand-primary-500"
                            onclick="Livewire.emit('openModal', 'general-settings')">Settings</li>
                            <li class="transition-all cursor-pointer hover:text-brand-primary-500">Logout</li>
                            <li class="transition-all cursor-pointer hover:text-brand-primary-500" onclick="Livewire.emit('openModal', 'media.upload')">Upload</li>
                        </ul>
                    </nav>
                </header>

                <livewire:media.showcards />

                <script>
                    //TODO: Move to main js file
                    function copyToClipboard(text) {
                        var $temp = $("<input>");
                        $("body").append($temp);
                        $temp.val(text).select();
                        document.execCommand("copy");
                        $temp.remove();

                        $("#tooltip-copy").text("Copied!");
                        window.setTimeout(function() {
                            $("#tooltip-copy").text("Copy");
                        }, 2000);
                    }
                </script>

            </div>

                {{-- <div><!-- footer -->
                    <footer>
                        <div>
                            Version Nr
                        </div>
                    </footer>
                </div><!-- End Footer --> --}}
@endsection
