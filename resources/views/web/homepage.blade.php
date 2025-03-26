<x-layouts.app title="Homepage">
  <h1 class="text-center my-4">Selamat Datang di Siber Store</h1>

  <div class="d-flex justify-content-center">
    <x-card 
      image="https://i.pinimg.com/474x/fe/34/6e/fe346e4d87e50bb2cb030e8981038a0d.jpg" 
      title="Produk Terbaru" 
      content="Ini adalah deskripsi produk terbaru kami." 
      link="/product"
    />
  </div>

  <div class="text-center mt-4">
    <button class="btn btn-warning" onclick="showAlert()">Tampilkan Alert</button>
  </div>

  <div id="alertContainer" class="mt-3"></div>

  <script>
    function showAlert() {
      let alertDiv = document.createElement("div");
      alertDiv.className = "alert alert-success alert-dismissible fade show";
      alertDiv.role = "alert";
      alertDiv.innerHTML = `Selamat datang di website kami!
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>`;
      document.getElementById("alertContainer").appendChild(alertDiv);
    }
  </script>
</x-layouts.app>