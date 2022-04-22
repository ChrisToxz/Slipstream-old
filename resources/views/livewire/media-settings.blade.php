<div class="p-8">
    <div class="p-4 sm:px-6 sm:py-4"> <!-- Header -->
        <h1 class="text-4xl leading-6 font-light text-white">
           Settings
        </h1>
    </div>

    <div class="px-4 sm:p-6 text-white"> <!-- Main content -->

        <div class="flex gap-8 basis-3/5">
            <div class="flex flex-col basis-3/4"><!-- coll 1 -->
                <div>
                    <p class="font-light pb-2"><label for="mediaTitle">Media Title</label></p>
                    <p><input class="input-text w-3/4" type="text" name="mediaTitle" wire:model=""></p>
                    <sub>The title of your media</sub>
                </div>

                <div class="aspect-video py-8"><!-- Media frame -->
                    <img class="rounded-lg w-full" src="media/stock4.jpg" alt="">
                </div>
            </div>

            <div class="flex flex-col basis-2/5"><!-- coll 2 -->
                <div class="mb-8">
                    <p class="font-light pb-2"><label for="mediaTitle">Media Title</label></p>
                    <p><input class="input-text w-full" type="text" name="mediaTitle" wire:model=""></p>
                    <sub>The title of your media</sub>
                </div>

                <div class="mb-8">
                    <p class="font-light pb-2"><label for="mediaTitle">Media Title</label></p>
                    <p><input class="input-text w-full" type="text" name="mediaTitle" wire:model=""></p>
                    <sub>The title of your media</sub>
                </div>

                <div class="mb-8">
                    <p class="font-light pb-2"><label for="mediaTitle">Media Title</label></p>
                    <p><input class="input-text w-full" type="text" name="mediaTitle" wire:model=""></p>
                    <sub>The title of your media</sub>
                </div>

                <div class="mb-8">
                    <p class="font-light pb-2"><label for="mediaTitle">Media Title</label></p>
                    <p><input class="input-text w-full" type="text" name="mediaTitle" wire:model=""></p>
                    <sub>The title of your media</sub>
                </div>

                <div class="mb-8">
                    <p class="font-light pb-2"><label for="mediaTitle">Media Title</label></p>
                    <p><input class="input-text w-full" type="text" name="mediaTitle" wire:model=""></p>
                    <sub>The title of your media</sub>
                </div>
            </div>
        </div>

        <div class="button">
            <button type="button" wire:click.prevent="update()">SAVE CHANGES</button>
        </div>

    </div>
</div>
