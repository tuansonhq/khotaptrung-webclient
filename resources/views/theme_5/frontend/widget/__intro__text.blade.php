
@if(setting('sys_intro_text') != '')
<div class="c-mb-16 c-mt-16">
    <div class="card overflow-hidden detailViewBlock">
        <div class="card-body c-px-16">
            @if(substr($data->content, 1200))
                <div class="content-desc hide detailViewBlockContent">
                    {!! $data->content !!}
                </div>
            @else
                <div class="content-desc detailViewBlockContent">
                    {!! $data->content !!}
                </div>
            @endif
        </div>
    </div>
</div>
@endif
