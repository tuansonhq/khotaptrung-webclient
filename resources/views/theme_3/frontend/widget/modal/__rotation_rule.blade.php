<div class="modal fade rotation-modal" id="rotationRule" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered animated" role="document">
        <div class="modal-content">
            <div class="modal-header rotation-modal-header">
                <h5 class="modal-title">Thể lệ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/close.png" alt="">
                </button>
            </div>
            <div class="modal-body rotation-rule-body">
                <div class="rotation-rule-img">
                    <img src="/assets/frontend/{{theme('')->theme_key}}/image/images_1/rotation-rule.png" alt="">
                </div>
                <div class="rotation-rule-text">
                    {!! $thele??null !!}
                </div>
                <div class="rotation-modal-btn row no-gutters">
                    <div class="col-6">
                        <button class="button-secondary">Chơi thử</button>
                    </div>
                    <div class="col-6" style="text-align: right;">
                        <button class="button-primary">Chơi ngay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
