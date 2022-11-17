<div class="search-component mt-3">
    <form action="/domainler/arama" method="POST" class="form-inline">
        @csrf
        <div class="col-lg-8 col-xs-8 p-0">

            <div class="input-group" style="display: contents">
                <input type="text" name="search" class="form-control me-3 border-dark"
                placeholder="Anahtar Kelimenizi Yazın..." value="" autocomplete="off">
            </div>
        </div>
        <div class="col-lg-4 col-xs-4 text-left">
            <button type="submit" class="btn btn-primary">Domain Ara</button>
        </div>
    </form>
</div>
