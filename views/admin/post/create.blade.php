@extends('admin.layouts.master')

@section('title', 'افزودن پست')

@section('content')
    <div>
        <form action="{{ config('url') . '/admin/post' }}" method="post" class="row" enctype="multipart/form-data">
            <div class="col-4">
                <div class="white-box">
                    <div class="form-group">
                        <label for="title"  class="form-label">عنوان</label>
                        <input type="text" name="title" id="title" class="input block">
                    </div>

                    <div class="form-group">
                        <label for="image" class="form-label">عکس</label>
                        <input type="file" name="image" multiple id="image[]" class="input">
                    </div>
                </div>
            </div>

            <div class="white-box col-8">
                <div class="form-group">
                    <label for="body" class="form-label">محتوای پست</label>
                    <textarea name="body" id="body"></textarea>
                </div>
            </div>
            <div class="white-box col-12">
                <button type="submit">ارسال</button>
            </div>
        </form>

    </div>
@endsection

@section('script')
<script>
    CKEDITOR.replace( 'body' );
</script>

@endsection