<section id="mu-register">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mu-register-area">

                    <div class="mu-title-area">
                        <h2 class="mu-title">Regisztráció</h2>
                        <p>Add meg az adataid, hogy legközelebb se kelljen szarakodni semmivel!</p>
                    </div>

                    <div class="mu-register-content">
                        <form class="mu-register-form"  method="post" action="/reg">
                                {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Teljes név" id="mc-name" name="mc-name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="E-mail cím" id="mc-email" name="mc-email" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Telefonszám" id="mc-phone" name="mc-phone" required="">
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="mc-ticket" id="mc-ticket">
                                            <option value="Polo">Csak póló</option>
                                            <option value="Minden">Túra + póló</option>
                                            <option value="Tura">Csak túra</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="mc-polo" id="mc-polo">
                                            <option value="S">- póló méret -</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                            <option value="XXL">XXL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="MLSZ kártya szám" id="mc-mlsz" name="mc-mlsz" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="FTC Partner id" id="mc-partner" name="mc-partner" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="FTC Kártyaszám" id="mc-card" name="mc-card" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Születési idő" id="mc-birthday" name="mc-birthday" required="">
                                    </div>
                                    <div class="form-group">
                                        <img src="{{ asset('storage/card.png') }}" >
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="mu-reg-submit-btn">Jóváhagyás</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>