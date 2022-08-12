<div class="video-box">
    <div class="slicky-video">
        @foreach( $video as $row )
        <div class="item-video" data-toggle="modal" data-target="#modalVideo" data-video="{{ $row['slug'] }}">
            <div class="image">
                <img
                        data-lazy="{{ asset('/video/thumb/'.$row['thumb']) }}"
                         alt="{{ $row['slug'] }}">
            </div>
            <i class="mdi mdi-play-circle"></i>
        </div>
        @endforeach
    </div>
</div>