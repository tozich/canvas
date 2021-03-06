<form role="form" id="form-create" method="POST" action="{{ route('canvas.post.store') }}"
      enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" hidden value="{{ $data['id'] }}">

    <div class="form-group row my-3">
        <div class="col-lg-12">
            <textarea name="title" class="form-control-lg form-control border-0 pl-0 serif" rows="1"
                      placeholder="Post Title" style="font-size: 42px; resize: none;">{{ old('title') }}</textarea>
        </div>
    </div>

    <editor :unsplash="'{{ config('canvas.unsplash.access_key') }}'"></editor>

    @include('canvas::components.modals.post.create.settings')
    @include('canvas::components.modals.post.create.publish')
    @include('canvas::components.modals.post.create.image')
    @include('canvas::components.modals.post.create.seo')
</form>