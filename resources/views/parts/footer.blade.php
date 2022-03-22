<footer class="p-4 bg-dark sm:p-6 sm:pt-12 mt-20">
    <div class="md:flex md:justify-between max-w-7xl mx-auto">
        <div class="mb-6 md:mb-0 text-gray-600">
            <a href="/" class="flex items-center justify-center md:justify-start mb-4">
                <x-logo class="h-8"></x-logo>
            </a>
            <ul class="text-sm">
                <li class="text-center md:text-left mb-4">
                    Endereço: Rua Clemente Martins Ré, 17 (Sala 1) - Itanhaém, SP 11740-000
                </li>
                <li class="text-center md:text-left mb-4">
                    Email de contato: dorsem@documentoemordem.com.br
                </li>
                <li class="text-center md:text-left ">
                    Ligue para nós: 0800 999 0123
                </li>
            </ul>
        </div>
        <div class="grid grid-cols-2 gap-8 sm:gap-6 justify-center sm:grid-cols-3">
            <div>
                <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Recursos</h3>
                <ul>
                    <li class="mb-4">
                        <a href="#beneficios" class="text-gray-600 hover:text-white">Beneficios</a>
                    </li>
                    <li class="mb-4">
                        <a href="#servicos-prestados" class="text-gray-600 hover:text-white">Serviços Prestados</a>
                    </li>
                    <li class="mb-4">
                        <a href="#contato" class="text-gray-600 hover:text-white">Contato</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Siga-nos</h3>
                <ul>
                    <li>
                        <a href="https://discord.gg/4eeurUVvTy" target="_blank"
                            class="text-gray-600 hover:text-white">Instagram</a>
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h3>
                <ul>
                    <li class="mb-4">
                        <button @click="open_privacity = true" type="button" class="text-gray-600 hover:text-white">Politica de Privacidade</button>
                    </li>
                    <li>
                        <button @click="open_terms = true" type="button" class="text-gray-600 hover:text-white">Termos &amp; Condições</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <div class="sm:flex sm:items-center sm:justify-between">
        <span class="text-sm text-gray-500 sm:tetext-white">
            © 2022 <a href="/" class="hover:text-blue-500">Dorsem</a>. Todos os direitos reservados.
        </span>
        <div class="flex mt-4 space-x-6 justify-center sm:mt-0">
            <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            <a href="https://api.whatsapp.com/send?phone=5513974153133&text=Ol%C3%A1%2C%20queria%20mais%20informa%C3%A7%C3%B5es%20sobre%20os%20servi%C3%A7os%20da%20Dorsem" class="text-gray-500 hover:text-gray-900 dark:hover:text-white" target="_blank">
                <svg class="h-5 w-5" viewBox="0 0 21 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10.6785 0.015625C8.8972 0.015625 7.24095 0.46875 5.7097 1.375C4.17845 2.25 2.9597 3.45312 2.05345 4.98438C1.17845 6.48438 0.740954 8.125 0.740954 9.90625C0.740954 11.6875 1.19408 13.3438 2.10033 14.875L0.694079 19.9844L5.94408 18.625C7.41283 19.4375 8.99095 19.8438 10.6785 19.8438C12.4597 19.8438 14.1003 19.4062 15.6003 18.5312C17.1316 17.625 18.3347 16.4219 19.2097 14.9219C20.116 13.3906 20.5691 11.7188 20.5691 9.90625C20.5691 8.59375 20.3191 7.34375 19.8191 6.15625C19.3191 4.9375 18.6003 3.85938 17.6628 2.92188C16.7566 1.98438 15.6941 1.26563 14.4753 0.765625C13.2566 0.265625 11.991 0.015625 10.6785 0.015625ZM10.6785 1.65625C11.7722 1.65625 12.8191 1.875 13.8191 2.3125C14.8191 2.71875 15.7097 3.3125 16.491 4.09375C17.2722 4.875 17.866 5.76563 18.2722 6.76562C18.7097 7.76562 18.9285 8.8125 18.9285 9.90625C18.9285 11.4062 18.5535 12.7969 17.8035 14.0781C17.0535 15.3281 16.0378 16.3281 14.7566 17.0781C13.5066 17.7969 12.1316 18.1562 10.6316 18.1562C9.13158 18.1562 7.74095 17.7656 6.4597 16.9844L6.17845 16.8438L3.0847 17.6406L3.88158 14.5938L3.69408 14.3125C2.85033 12.9688 2.42845 11.5 2.42845 9.90625C2.42845 8.40625 2.80345 7.03125 3.55345 5.78125C4.30345 4.53125 5.30345 3.53125 6.55345 2.78125C7.80345 2.03125 9.17845 1.65625 10.6785 1.65625ZM7.16283 5.3125C6.91283 5.3125 6.69408 5.42187 6.50658 5.64062L6.4597 5.6875C5.8972 6.28125 5.61595 6.95312 5.61595 7.70312C5.61595 8.45312 5.94408 9.28125 6.60033 10.1875L6.69408 10.375C7.97533 12.1562 9.36595 13.3594 10.866 13.9844C11.3035 14.2031 11.7566 14.3906 12.2253 14.5469C12.7253 14.6719 13.2722 14.7031 13.866 14.6406C14.116 14.5781 14.4285 14.4375 14.8035 14.2188C15.1785 13.9688 15.4128 13.7188 15.5066 13.4688C15.6003 13.1875 15.6628 12.9375 15.6941 12.7188C15.7253 12.5 15.7097 12.3594 15.6472 12.2969C15.616 12.2344 15.491 12.1406 15.2722 12.0156L14.3347 11.5469C13.8972 11.3281 13.616 11.2031 13.491 11.1719C13.366 11.1406 13.2566 11.125 13.1628 11.125C13.1003 11.125 13.0222 11.1875 12.9285 11.3125C12.8035 11.5 12.5535 11.8125 12.1785 12.25C12.0222 12.4062 11.8347 12.4375 11.616 12.3438L11.4753 12.25C10.7566 11.9688 10.1472 11.5938 9.6472 11.125C9.1472 10.6562 8.67845 10.0781 8.24095 9.39062C8.1472 9.20312 8.17845 9.03125 8.3347 8.875C8.49095 8.71875 8.61595 8.59375 8.7097 8.5C8.80345 8.375 8.88158 8.25 8.94408 8.125L8.99095 8.03125C9.05345 7.90625 9.03783 7.76562 8.94408 7.60938L8.19408 5.78125C8.10033 5.59375 8.0222 5.48438 7.9597 5.45312C7.8972 5.39063 7.80345 5.35938 7.67845 5.35938L7.16283 5.3125Z"
                        clip-rule="evenodd" />
                    <defs>
                        <linearGradient id="paint0_linear_43_1775" x1="21.2943" y1="3.35111" x2="6.77166" y2="21.2503"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#1FE7A9" />
                            <stop offset="1" stop-color="#1482FB" />
                        </linearGradient>
                    </defs>
                </svg>
            </a>
        </div>
    </div>
</footer>

@include('parts.legais')