
<x-app-layout>

    <div class="container" style="width: 70%;">

        <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">
                    <div>
                        <h1 style="font-size: 35px;">Edit profile</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div>
                        <label for="title">title</label>
                        <input type="text" id="title"  class="form-control" value="{{ old('title') ?? $user->profile->title}}" name="title" autocomplete="title" autofocus>
                        @error('cotitle')
                            <div class="form-error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div>
                        <label for="description">description</label>
                        <input type="text" id="description" class="form-control" value="{{ old('description') ?? $user->profile->description}}" name="description" autocomplete="description" autofocus>
                        @error('description')
                            <div class="form-error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2">
                    <div>
                        <label for="url">url</label>
                        <input type="text" id="url" class="form-control" value="{{ old('url') ?? $user->profile->url}}" name="url" autocomplete="url" autofocus>
                        @error('url')
                            <div class="form-error">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-8 offset-2">
                    <label for="image">Profile image</label>
                    <input type="file" class="form-control-file" id="image" name="image" autocomplete="image" autofocus>
                    @error('image')
                        <div class="form-error">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-8 offset-2">
                    <button class="btn btn-primary">Save Profile</button>
                </div>
            </div>
        </form>
    </div>

</x-app-layout>
