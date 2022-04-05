<div class="p-8">
    <div class="p-4 sm:px-6 sm:py-4"> <!-- Header -->
        <h1 class="text-4xl leading-6 font-light text-white">
           Settings
        </h1>
    </div>

    <div class="px-4 sm:p-6 text-white"> <!-- Main content -->

        <div class="mb-8">
            <p class="font-light pb-2"><label for="sitename">Sitename</label></p>
            <p><input class="input-text w-3/4" type="text" name="sitename" wire:model="tag.sitename"></p>
            <sub>The name that your visitors will see</sub>
        </div>

        <div class="mb-8">
            <p class="font-light pb-2"><label for="retention-delay">Views retention delay in minutes</label></p>
            <p><input class="input-text w-3/4" type="text" name="retention-delay" wire:model="tag.retentionDeleay"></p>
            <sub>This will be added on top lorem ipsum hoelahoep</sub>
        </div>

        <div class="mb-8">
            <p class="font-light pb-2">HLS streaming bitrates (in kb/s)</p>
            <div class="grid grid-cols-3 gap-y-5">
                <p>
                    <input class="input-text w-3/4" type="text"><br>
                    <sub class="text-brand-primary-500">360p</sub>
                </p>

                <p>
                    <input class="input-text w-3/4" type="text"><br>
                    <sub class="text-brand-primary-500">720p</sub>
                </p>

                <p>
                    <input class="input-text w-3/4" type="text"><br>
                    <sub class="text-brand-primary-500">1080p</sub>
                </p>

                <p>
                    <input class="input-text w-3/4" type="text"><br>
                    <sub class="text-brand-primary-500">1440p</sub>
                </p>

                <p>
                    <input class="input-text w-3/4" type="text"><br>
                    <sub class="text-brand-primary-500">2160p</sub>
                </p>
            </div>
        </div>
        

    </div>

    {{-- <div class="px-4 pb-5 sm:px-4 sm:flex">
        <button wire:click="$emit('closeModal')">Close Modal</button> -
        <button type="button" wire:click.prevent="update()">Save changes</button> -
        <button type="button" wire:click.prevent="delete()" value="delete"> Delete</button>
    </div> --}}

</div>