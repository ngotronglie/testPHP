<div class="post-entry-1 lg">
    <a href="/post/{{ $Post['p_id'] }}"><img style="width:100px, height:100px" src="{{ $Post['p_image'] }}" alt=""
            class="img-fluid"></a>
    <div class="post-meta">
        <span class="date">{{ $Post['c_name'] }}</span>
        <span class="mx-1">&bullet;</span>
        <span>Jul 5th '22</span>
    </div>
    <h2><a href="/post/{{ $Post['p_id'] }}">{{ $Post['p_title'] }}</a></h2>
    @if (!@isset($hiddenExcerpt))
        <p class="mb-4 d-block">{{ $Post['p_excerpt'] }}</p>
    @endif

    @if (!@isset($hiddenAuthor))
        <div class="d-flex align-items-center author">
            <div class="photo"><img src="/assets/client/assets/img/person-1.jpg" alt="" class="img-fluid">
            </div>
            <div class="name">
                <h3 class="m-0 p-0">Cameron Williamson</h3>
            </div>
        </div>
    @endif
</div>
