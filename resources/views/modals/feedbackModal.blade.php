<style>
    #feedbackButton {
        position: fixed;
        right: -40px;
        top: 45%;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        padding: 10px;
        cursor: pointer;
        border-radius: 5px 5px 0 0;
    }
</style>
<button id="feedbackButton" class="btn-pill btn-pill-primary btn-pill-lg" data-toggle="modal" data-target=".feedback-modal">@lang('messages.feedback')</button>
<div class="modal fade feedback-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="feedbackForm">
                <div class="modal-header">
                    <h5 class="modal-title">Geri Bildirim</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"><p>Taze Mürekkep'i her gün daha kullanıcı dostu yapmaya çalışıyoruz. Daha doğrusunu
                        yapabilmek için geribildirimlerinize her zaman açığız</p>
                    <div class="form-group"><label for="txtFeedbackMessage">Mesajınız *</label> <textarea
                                required="required" rows="3" id="txtFeedbackMessage"
                                placeholder="Ne söylerseniz dinlemeye hazırız, bu durumda okumaya dememiz gerekiyor tabii :)"
                                class="form-control"></textarea></div>
                    <div class="form-group"><label for="feedbackPageUrl">Bulunduğunuz Sayfa *</label> <input
                                id="feedbackPageUrl" type="text" value="{{url()->full()}}" disabled="disabled"
                                class="form-control">
                        <p class="help-block">Bunu hangi sayfadayken yazdığınızı bilelim diye biz ekledik, bunu
                            bileceğimizi bilin diye size de gösterelim dedik</p></div>
                    <div class="form-group">
                        <label for="feedbackEmail">E-Postanız</label>
                        @auth
                            <input id="feedbackEmail" type="email" value="{{Auth::user()->email}}" class="form-control">
                            <p class="help-block">Merak etmeyin giriş yaptığınız için biz sizin yerinize doldurduk :)</p>
                            @else
                                <input id="feedbackEmail" type="email" placeholder="E-Postanız" class="form-control">
                                <p class="help-block">Şart değil ama size yanıt vermemiz gerekiyorsa yazın tabii</p>
                                @endauth
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn-shadow btn-shadow-lg btn-shadow-default">Kapat</button>
                    <button type="submit" class="btn-shadow btn-shadow-lg btn-shadow-primary">Gönder</button>
                </div>
            </form>

        </div>
    </div>
</div>