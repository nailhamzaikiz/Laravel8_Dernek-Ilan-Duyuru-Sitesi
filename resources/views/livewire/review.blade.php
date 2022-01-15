
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0 d-flex flex-column ">
        <div class="card d-flex blur  shadow-lg my-sm-0 my-sm-0 mt-0 mb-0">
            <div class="card-body">
                <p class="pb-3">
                    Yorum Yapmak İster misiniz?
                </p>
                <form id="review-form" autocomplete="off" wire:submit.prevent="store">
                    <div class="card-body p-0 my-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-group input-group-static mb-4">
                                    <label>Konu</label>
                                    <input wire:model="subject"  class="form-control" placeholder="Konu">
                                    @error('subject') <span class="text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-0 mt-md-0 mt-4">
                            <div class="input-group input-group-static mb-4">
                                <label>Yorum Yapın</label>
                                <textarea wire:model="review"  class="form-control"  rows="6" placeholder="Yorumunuzu yazın."></textarea>
                                @error('review') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                        </div>
                        <div class="row">
                        @auth
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn bg-gradient-info mt-3 mb-0">Gönder</button>
                                </div>
                        </div>
                        @else
                            <a href="/login" class="btn bg-gradient-primary mt-3 mb-0">Yorum Yapmak İçin Kayıt Ol.</a>
                        @endauth
                    </div>
                </form>
            </div>
        </div>
    </div>

