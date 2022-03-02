<form class="w-11/12 lg:skew-x-6 lg:w-4/5 " wire:submit.prevent="submit" method="post">
    <p class="text-2xl md:text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary mb-2">
        Solicite sua reunião</p>
    <div class="relative mt-6">
        <input required id="nome" name="nome" wire:model="nome" type="text" class="peer h-10 w-full text-gray-900 placeholder-transparent focus:outline-none rounded px-2" placeholder="Rogerio Doutri" />
        <label for="nome" class="absolute font-medium left-2 -top-5 text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary text-sm transition-all peer-placeholder-shown:left-2 peer-placeholder-shown:font-medium peer-placeholder-shown:text-sm peer-placeholder-shown:text-transparent peer-placeholder-shown:bg-clip-text peer-placeholder-shown:bg-gradient-to-r peer-placeholder-shown:from-primary peer-placeholder-shown:to-secondary peer-placeholder-shown:top-2 peer-focus:left-0 peer-focus:text-sm peer-focus:-top-5">Nome @error('nome') <span class="text-sm text-red-500">{{$message}}</span> @enderror</label>
    </div>
    <div class="relative mt-6">
        <input required id="email" name="email" wire:model="email" type="email" class="peer h-10 w-full text-gray-900 placeholder-transparent focus:outline-none rounded px-2" placeholder="contato@dorsem.com.br" />
        <label for="email" class="absolute font-medium left-2 -top-5 text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary text-sm transition-all peer-placeholder-shown:left-2 peer-placeholder-shown:font-medium peer-placeholder-shown:text-transparent peer-placeholder-shown:bg-clip-text peer-placeholder-shown:bg-gradient-to-r peer-placeholder-shown:from-primary peer-placeholder-shown:to-secondary peer-placeholder-shown:top-2 peer-focus:left-0 peer-focus:text-sm peer-focus:-top-5">Email @error('email') <span class="text-sm text-red-500">{{$message}}</span> @enderror</label>
    </div>
    <div class="relative mt-6">
        <input required id="tel" name="celular" wire:model="celular" type="tel" class="peer h-10 w-full text-gray-900 placeholder-transparent focus:outline-none rounded px-2" placeholder="(13) 982473824" />
        <label for="tel" class="absolute font-medium left-2 -top-5 text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary text-sm transition-all peer-placeholder-shown:left-2 peer-placeholder-shown:font-medium peer-placeholder-shown:text-sm peer-placeholder-shown:text-transparent peer-placeholder-shown:bg-clip-text peer-placeholder-shown:bg-gradient-to-r peer-placeholder-shown:from-primary peer-placeholder-shown:to-secondary peer-placeholder-shown:top-2 peer-focus:left-0 peer-focus:text-sm peer-focus:-top-5">Celular @error('celular') <span class="text-sm text-red-500">{{$message}}</span> @enderror</label>
    </div>
    <div class="relative mt-8">
        <textarea required id="explicacao" name="explicacao" wire:model="explicacao" class="peer w-full text-gray-900 placeholder-transparent focus:outline-none rounded px-2" rows="3"></textarea>
        <label for="explicacao" class="absolute font-medium left-0 -top-6 text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary text-sm transition-all peer-placeholder-shown:left-0 peer-placeholder-shown:font-medium peer-placeholder-shown:text-sm peer-placeholder-shown:text-transparent peer-placeholder-shown:bg-clip-text peer-placeholder-shown:bg-gradient-to-r peer-placeholder-shown:from-primary peer-placeholder-shown:to-secondary peer-placeholder-shown:top-2">Explique
            sua situação @error('explicacao') <span class="text-sm text-red-500">{{$message}}</span> @enderror</label>
    </div>
    <div class="flex items-start mt-2 mr-4 mb-2">
        <input required type="checkbox" id="confirm" name="confirm" wire:model="confirm" class="opacity-0 absolute h-8 w-8" />
        <div class="bg-white border-2 rounded border-blue-400 w-4 h-4 flex flex-shrink-0 justify-center items-center mr-2 focus-within:border-blue-500">
            <svg class="fill-current hidden w-2 h-2 text-blue-600 pointer-events-none" version="1.1" viewBox="0 0 17 12" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" fill-rule="evenodd">
                    <g transform="translate(-9 -11)" fill="#1F73F1" fill-rule="nonzero">
                        <path d="m25.576 11.414c0.56558 0.55188 0.56558 1.4439 0 1.9961l-9.404 9.176c-0.28213 0.27529-0.65247 0.41385-1.0228 0.41385-0.37034 0-0.74068-0.13855-1.0228-0.41385l-4.7019-4.588c-0.56584-0.55188-0.56584-1.4442 0-1.9961 0.56558-0.55214 1.4798-0.55214 2.0456 0l3.679 3.5899 8.3812-8.1779c0.56558-0.55214 1.4798-0.55214 2.0456 0z" />
                    </g>
                </g>
            </svg>
        </div>
        <label for="confirm" class="select-none text-sm text-justify">Você concorda em ser contatado(a) por
            whatsapp, email
            ou qualquer outro meio de comunicação.</label>
    </div>
    <div class="w-full flex items-center justify-center">
        <button class="bg-gradient-to-r from-primary to-secondary p-2 w-60 font-bold rounded" type="submit">Solicite</button>
    </div>

    <!-- <div class="relative mt-2">
                <input type="checkbox" name="comfirm" id="confirm">
                <label for="confirm">Você concorda em ser contatado(a) por whatsapp, email ou qualquer outro meio de comunicação.</label>
            </div> -->
</form>