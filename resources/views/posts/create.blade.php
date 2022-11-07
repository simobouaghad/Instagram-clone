@include('layouts.navigation')


<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf
        @method('GET')
        <div class="row">
            <div class="col-8 offset-2" style="font-size: 35px;">Add New Post</div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div>
                    <x-input-label for="caption" :value="__('Post caption')" />
                    <x-text-input id="caption" class="block mt-1 w-full" type="text" name="caption" :value="old('caption')" autofocus />
                    <x-input-error :messages="$errors->get('caption')" class="mt-2" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <label for="image">Post image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-8 offset-2">
                <button class="btn btn-primary">New post</button>
            </div>
        </div>
    </form>
</div>

