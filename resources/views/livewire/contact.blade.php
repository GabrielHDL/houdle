<div>
    <form wire:submit.prevent="submitForm" action="{{route('contacto.store')}}" class="contact-form" method="POST">
        @csrf
        <h3>¡Escribenos!</h3>
        <input wire:model="name" name="name" type="text" class="form-input" placeholder="Nombre">
        @error('name')
            <div class="alert-form">
                <p>{{ $message }}</p>
            </div>
        @enderror
        <input wire:model="email" name="email" type="email" class="form-input" placeholder="Correo">
        @error('email')
        <div class="alert-form">
            <p>{{ $message }}</p>
        </div>
        @enderror
        <input wire:model="phone" name="phone" type="phone" class="form-input" placeholder="Teléfono">
        @error('phone')
        <div class="alert-form">
            <p>{{ $message }}</p>
        </div>
        @enderror
        <textarea wire:model="description" name="description" placeholder="¿Sí tu proyecto hablara que nos diría?" class="form-input">{{old('message')}}</textarea>
        @error('description')
        <div class="alert-form">
            <p>{{ $message }}</p>
        </div>
        @enderror
        <input type="submit" value="Enviar" class="btn">
        @if ($successMessage)
                <div class="success-message">
                    <p>{{ $successMessage }}</p>
                </div>
        @endif
    </form>
</div>
