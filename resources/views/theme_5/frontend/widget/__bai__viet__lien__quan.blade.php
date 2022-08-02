<section class="related-posts">
    <div class="section-header c-mb-16">
        <div class="section-title title-color">Bài viết cùng chủ đề</div>
    </div>
    <div class="section-content">
        <div class="article-list mx-n2">
            @forelse($data as $article)
            <div class="article-item">
                <a href="/tin-tuc/{{ @$article->slug }}" class="scale-thumb">
                    <div class="card">
                        <div class="card-body c-p-16 c-p-lg-8">
                            <div class="article-thumb c-mb-16 c-mb-lg-0">
                                <img src="{{ @\App\Library\MediaHelpers::media($article->image)}}" class="article-thumb-image" alt="">
                            </div>
                            <div class="article-body">
                                <div class="article-title text-limit limit-2 limit-lg-3 fz-lg-13 lh-lg-20">
                                    {{ @$article->title }}
                                </div>
                                <div class="article-info c-mt-16 c-mt-lg-4">
                                    <div class="datetime">{{ date('d/m/Y',strtotime($article->created_at)) }}</div>
                                    <div class="author">{{ @$article->author->username }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</section>

