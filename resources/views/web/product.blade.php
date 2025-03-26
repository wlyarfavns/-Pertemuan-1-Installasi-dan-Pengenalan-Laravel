<x-layouts.app title="Product">
  <div class="container text-center">
    <h1>Daftar Produk</h1>

    @php
      $category = request()->get('category');
    @endphp

    <div class="row justify-content-center mt-4">
      @if(!$category || $category == 'pria')
        <div class="col-md-4">
          <x-card 
            image="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//113/MTA-91998176/no_brand_sepatu_new_balance_ml574_574_steel_grey_full06_ozmjettv.jpg"
            title="NEW BALLANCE" 
            content="Sepatu pria elegan dan nyaman untuk aktivitas sehari-hari."
            link="#"
          />
        </div>
      @endif

      @if(!$category || $category == 'wanita')
        <div class="col-md-4">
          <x-card 
            image="https://images.tokopedia.net/img/cache/700/VqbcmM/2025/1/29/22362774-d9a0-461c-ac8e-8a2cbd20db4e.png"
            title="CONVERSE" 
            content="Sepatu wanita trendy untuk tampilan fashionable."
            link="#"
          />
        </div>
      @endif

      @if(!$category || $category == 'anak-anak')
        <div class="col-md-4">
          <x-card 
            image="https://images.tokopedia.net/img/cache/700/VqbcmM/2024/2/21/08f05a49-2295-4561-b299-6c99a7530a15.jpg"
            title="NIKE" 
            content="Sepatu Olahraga dan nyaman dipakai saat beraktivitas."
            link="#"
          />
        </div>
      @endif
    </div>
  </div>
</x-layouts.app>