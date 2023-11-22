<input type="file" name="images" class="dropify" id="dropify"  data-max-file-
       size="2M" data-height="{{$height ?? 300}}"
       data-default-file="{{ url($img) }}">
<input type="hidden" name="images_c" value="{{ $img }}">

