<div class="p-8">
    <div class="p-4 sm:px-6 sm:py-4"> <!-- Header -->
        <h1 class="text-4xl leading-6 font-light text-white">
           Settings
        </h1>
    </div>

    <div class="px-4 sm:p-6 text-white"> <!-- Main content -->

        <div class="absolute top-5 right-5">
            <button wire:click="$emit('closeModal')"><i class="bx bx-x-circle text-3xl"></i></button>
        </div>

        <div class="mb-8">
            <p class="font-light pb-2"><label for="sitename">Sitename</label></p>
            <p><input class="input-text w-3/4" type="text" name="sitename" wire:model="tag.sitename"></p>
            <sub>The name that your visitors will see</sub>
        </div>

        <div class="flex flex-col items-start mb-8">
            <div class="flex mb-4">
                <div class="relative inline-block w-10 mr-2 align-middle select-none ">
                    <input type="checkbox" name="toggle_a" id="toggle_a" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-status-error-500 border-2 border-background-surface appearance-none cursor-pointer"/>
                    <label for="toggle_a" class="toggle-label block overflow-hidden h-6 rounded-full bg-background-surface cursor-pointer"></label>
                </div>
                <label for="toggle_a" class="font-light pb-2">Keep original file</label>
            </div>

            <div class="flex">
                <div class="relative inline-block w-10 mr-2 align-middle select-none ">
                    <input type="checkbox" name="toggle_b" id="toggle_b" class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-status-error-500 border-2 border-background-surface appearance-none cursor-pointer"/>
                    <label for="toggle_b" class="toggle-label block overflow-hidden h-6 rounded-full bg-background-surface cursor-pointer"></label>
                </div>
                <label for="toggle_b" class="font-light pb-2 ">Visitors can see video info</label>
            </div>
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

        <div class="button">
            <button type="button" wire:click.prevent="update()">SAVE CHANGES</button>
        </div>

    </div>
</div>
