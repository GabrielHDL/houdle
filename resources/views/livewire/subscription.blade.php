<section class="subscription section">
    <div class="container">
      <img src="./assets/map.png" alt="" class="map">
      <div class="sub-box">
        <img src="./assets/square2.png" class="shape square">
        <div class="sub-info">
          <h3 class="sub-heading avenirBold">Suscríbete</h3>
          <h1 class="heading walsheimBold">Mantente al tanto de nuestros proyectos</h1>
          <p class="text">
            ¿Te encanta el diseño, desarrollo y marketing? suscríbete y recibe nuestras últimas noticias.
          </p>
        </div>
        <form wire:submit.prevent="submitForm">
          <input wire:model="email" name="email" type="email" placeholder="Correo" class="form-input">
          <input type="submit" value="Suscríbete" class="btn">
            @if ($successMessage)
                <div class="success-message">
                  <div class="close-message">
                    <i wire:click="$set('successMessage', null)" class="fa-solid fa-xmark"></i>
                  </div>
                    <p>{{ $successMessage }}</p>
                </div>
            @elseif($errorMessage)
                <div class="alert-form mt-2">
                    <p>{{ $errorMessage }}</p>
                </div>
            @endif
            @error('email')
                <div class="alert-form mt-2">
                    <p>{{ $message }}</p>
                </div>
            @enderror
        </form>
      </div>
    </div>
</section>