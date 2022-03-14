<!-- Dialog (full screen) -->
<div x-cloak class="fixed top-0 left-0 flex items-center justify-center w-full h-full" style="background-color: rgba(0,0,0,.5);"
    x-show="open_terms">
    <!-- A basic modal dialog with title, body and one button to close -->
    <div class="h-full overflow-y-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0"
        @click.away="open_terms = false">
        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg font-medium leading-6 text-blue-900">
                Termos &amp; Condições
            </h3>
            <div class="mt-2">
                <h2 class="text-lg font-medium leading-6 text-blue-900 mb-1">1. Termos</h2>
                <p class="text-sm text-gray-500 font-light mb-2">Ao acessar ao site <a class="text-blue-600" href='http://dorsem.documentoemordem.com.br'>Dorsem</a>, concorda em cumprir
                    estes termos de serviço, todas as leis e regulamentos aplicáveis ​​e concorda que é responsável pelo
                    cumprimento de todas as leis locais aplicáveis. Se você não concordar com algum desses termos, está
                    proibido de usar ou acessar este site. Os materiais contidos neste site são protegidos pelas leis de
                    direitos autorais e marcas comerciais aplicáveis.</p>
                <h2 class="text-lg font-medium leading-6 text-blue-900 mb-1">2. Uso de Licença</h2>
                <p class="text-sm text-gray-500 font-light mb-1">É concedida permissão para baixar temporariamente uma cópia dos materiais (informações ou software)
                    no site Dorsem , apenas para visualização transitória pessoal e não comercial. Esta é a concessão de
                    uma licença, não uma transferência de título e, sob esta licença, você não pode: </p>
                <ol class="text-sm text-gray-500 font-light list-decimal pl-8 mb-2">
                    <li class="mb-1">modificar ou copiar os materiais;  </li>
                    <li class="mb-1">usar os materiais para qualquer finalidade comercial ou para exibição pública (comercial ou não
                        comercial);  </li>
                    <li class="mb-1">tentar descompilar ou fazer engenharia reversa de qualquer software contido no site Dorsem;
                    </li>
                    <li class="mb-1">remover quaisquer direitos autorais ou outras notações de propriedade dos materiais; ou  </li>
                    <li class="mb-1">transferir os materiais para outra pessoa ou 'espelhe' os materiais em qualquer outro servidor.
                    </li>
                </ol>
                <p class="text-sm text-gray-500 font-light mb-2">Esta licença será automaticamente rescindida se você violar alguma dessas restrições e poderá ser
                    rescindida por Dorsem a qualquer momento. Ao encerrar a visualização desses materiais ou após o
                    término desta licença, você deve apagar todos os materiais baixados em sua posse, seja em formato
                    eletrónico ou impresso.</p>
                <h2 class="text-lg font-medium leading-6 text-blue-900 mb-1">3. Isenção de responsabilidade</h2>
                <ol class="text-sm text-gray-500 font-light list-decimal pl-8 mb-2">
                    <li class="mb-1">Os materiais no site da Dorsem são fornecidos 'como estão'. Dorsem não oferece garantias,
                        expressas ou implícitas, e, por este meio, isenta e nega todas as outras garantias, incluindo,
                        sem limitação, garantias implícitas ou condições de comercialização, adequação a um fim
                        específico ou não violação de propriedade intelectual ou outra violação de direitos. </li>
                    <li class="mb-1">Além disso, o Dorsem não garante ou faz qualquer representação relativa à precisão, aos
                        resultados prováveis ​​ou à confiabilidade do uso dos materiais em seu site ou de outra forma
                        relacionado a esses materiais ou em sites vinculados a este site.</li>
                </ol>
                <h2 class="text-lg font-medium leading-6 text-blue-900 mb-1">4. Limitações</h2>
                <p class="text-sm text-gray-500 font-light mb-2">Em nenhum caso o Dorsem ou seus fornecedores serão responsáveis ​​por quaisquer danos (incluindo, sem
                    limitação, danos por perda de dados ou lucro ou devido a interrupção dos negócios) decorrentes do
                    uso ou da incapacidade de usar os materiais em Dorsem, mesmo que Dorsem ou um representante
                    autorizado da Dorsem tenha sido notificado oralmente ou por escrito da possibilidade de tais danos.
                    Como algumas jurisdições não permitem limitações em garantias implícitas, ou limitações de
                    responsabilidade por danos conseqüentes ou incidentais, essas limitações podem não se aplicar a
                    você.</p>
                <h2 class="text-lg font-medium leading-6 text-blue-900 mb-1">5. Precisão dos materiais</h2>
                <p class="text-sm text-gray-500 font-light mb-2">Os materiais exibidos no site da Dorsem podem incluir erros técnicos, tipográficos ou fotográficos.
                    Dorsem não garante que qualquer material em seu site seja preciso, completo ou atual. Dorsem pode
                    fazer alterações nos materiais contidos em seu site a qualquer momento, sem aviso prévio. No
                    entanto, Dorsem não se compromete a atualizar os materiais.</p>
                <h2 class="text-lg font-medium leading-6 text-blue-900 mb-1">6. Links</h2>
                <p class="text-sm text-gray-500 font-light mb-2">O Dorsem não analisou todos os sites vinculados ao seu site e não é responsável pelo conteúdo de
                    nenhum site vinculado. A inclusão de qualquer link não implica endosso por Dorsem do site. O uso de
                    qualquer site vinculado é por conta e risco do usuário.</p>
                </p>
                <h3 class="text-lg font-medium leading-6 text-blue-900 mb-1">Modificações</h3>
                <p class="text-sm text-gray-500 font-light mb-2">O Dorsem pode revisar estes termos de serviço do site a qualquer momento, sem aviso prévio. Ao usar
                    este site, você concorda em ficar vinculado à versão atual desses termos de serviço.</p>
                <h3 class="text-lg font-medium leading-6 text-blue-900 mb-1">Lei aplicável</h3>
                <p class="text-sm text-gray-500 font-light mb-2">Estes termos e condições são regidos e interpretados de acordo com as leis do Dorsem e você se
                    submete irrevogavelmente à jurisdição exclusiva dos tribunais naquele estado ou localidade.</p>
            </div>
        </div>
        <!-- One big close button.  --->
        <div class="mt-5 sm:mt-6">
            <span class="flex w-full rounded-md shadow-sm">
            </span>
        </div>
    </div>
</div>

<!-- Dialog (full screen) -->
<div x-cloak class="fixed top-0 left-0 flex items-center justify-center w-full h-full py-2"
    style="background-color: rgba(0,0,0,.5);" x-show="open_privacity">
    <!-- A basic modal dialog with title, body and one button to close -->
    <div class="h-full overflow-y-auto p-4 mx-2 text-left bg-white rounded shadow-xl md:max-w-xl md:p-6 lg:p-8 md:mx-0"
        @click.away="open_privacity = false">
        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg font-medium leading-6 text-blue-900">
                Politica de Privacidade
            </h3>
            <div class="mt-2">
                <p class="text-sm text-gray-500 font-light mb-2">A sua privacidade é importante para nós. É política do Dorsem respeitar a sua privacidade em relação
                    a qualquer informação sua que possamos coletar no site <a class="text-blue-600"
                        href=http://dorsem.documentoemordem.com.br>Dorsem</a>, e outros sites que possuímos e operamos.
                </p>
                <p class="text-sm text-gray-500 font-light mb-2">Solicitamos informações pessoais apenas quando realmente precisamos delas para lhe fornecer um
                    serviço. Fazemo-lo por meios justos e legais, com o seu conhecimento e consentimento. Também
                    informamos por que estamos coletando e como será usado. </p>
                <p class="text-sm text-gray-500 font-light mb-2">Apenas retemos as informações coletadas pelo tempo necessário para fornecer o serviço solicitado.
                    Quando armazenamos dados, protegemos dentro de meios comercialmente aceitáveis ​​para evitar perdas
                    e roubos, bem como acesso, divulgação, cópia, uso ou modificação não autorizados.</p>
                <p class="text-sm text-gray-500 font-light mb-2">Não compartilhamos informações de identificação pessoal publicamente ou com terceiros, exceto quando
                    exigido por lei.</p>
                <p class="text-sm text-gray-500 font-light mb-2">O nosso site pode ter links para sites externos que não são operados por nós. Esteja ciente de que
                    não temos controle sobre o conteúdo e práticas desses sites e não podemos aceitar responsabilidade
                    por suas respectivas <a class="text-blue-600" href='https://politicaprivacidade.com' target='_BLANK'>políticas de
                        privacidade</a>. </p>
                <p class="text-sm text-gray-500 font-light mb-2">Você é livre para recusar a nossa solicitação de informações pessoais, entendendo que talvez não
                    possamos fornecer alguns dos serviços desejados.</p>
                <p class="text-sm text-gray-500 font-light mb-2">O uso continuado de nosso site será considerado como aceitação de nossas práticas em torno de
                    privacidade e informações pessoais. Se você tiver alguma dúvida sobre como lidamos com dados do
                    usuário e informações pessoais, entre em contacto connosco.</p>
                <h2 class="text-lg font-medium leading-6 text-blue-900 mb-1">Política de Cookies Dorsem</h2>
                <h3 class="text-lg font-medium leading-6 text-blue-900 mb-1">O que são cookies?</h3>
                <p class="text-sm text-gray-500 font-light mb-2">Como é prática comum em quase todos os sites profissionais, este site usa cookies, que são pequenos
                    arquivos baixados no seu computador, para melhorar sua experiência. Esta página descreve quais
                    informações eles coletam, como as usamos e por que às vezes precisamos armazenar esses cookies.
                    Também compartilharemos como você pode impedir que esses cookies sejam armazenados, no entanto, isso
                    pode fazer o downgrade ou 'quebrar' certos elementos da funcionalidade do site.</p>
                <h3 class="text-lg font-medium leading-6 text-blue-900 mb-1">Como usamos os cookies?</h3>
                <p class="text-sm text-gray-500 font-light mb-2">Utilizamos cookies por vários motivos, detalhados abaixo. Infelizmente, na maioria dos casos, não
                    existem opções padrão do setor para desativar os cookies sem desativar completamente a
                    funcionalidade e os recursos que eles adicionam a este site. É recomendável que você deixe todos os
                    cookies se não tiver certeza se precisa ou não deles, caso sejam usados ​​para fornecer um serviço
                    que você usa.</p>
                <h3 class="text-lg font-medium leading-6 text-blue-900 mb-1">Desativar cookies</h3>
                <p class="text-sm text-gray-500 font-light mb-2">Você pode impedir a configuração de cookies ajustando as configurações do seu navegador (consulte a
                    Ajuda do navegador para saber como fazer isso). Esteja ciente de que a desativação de cookies
                    afetará a funcionalidade deste e de muitos outros sites que você visita. A desativação de cookies
                    geralmente resultará na desativação de determinadas funcionalidades e recursos deste site. Portanto,
                    é recomendável que você não desative os cookies.</p>
                <h3 class="text-lg font-medium leading-6 text-blue-900 mb-1">Cookies que definimos</h3>
                <ul class="text-sm text-gray-500 font-light list-disc pl-8">
                    <li class="mb-1"> Cookies relacionados à conta<br> Se você criar uma conta connosco, usaremos cookies para o
                        gerenciamento do processo de inscrição e administração geral. Esses cookies geralmente serão
                        excluídos quando você sair do sistema, porém, em alguns casos, eles poderão permanecer
                        posteriormente para lembrar as preferências do seu site ao sair.<br> </li>
                    <li class="mb-1"> Cookies relacionados ao login<br> Utilizamos cookies quando você está logado, para que
                        possamos lembrar dessa ação. Isso evita que você precise fazer login sempre que visitar uma nova
                        página. Esses cookies são normalmente removidos ou limpos quando você efetua logout para
                        garantir que você possa acessar apenas a recursos e áreas restritas ao efetuar login.<br>
                    </li>
                    <li class="mb-1"> Cookies relacionados a boletins por e-mail<br> Este site oferece serviços de assinatura de
                        boletim informativo ou e-mail e os cookies podem ser usados ​​para lembrar se você já está
                        registrado e se deve mostrar determinadas notificações válidas apenas para usuários inscritos /
                        não inscritos.<br> </li>
                    <li class="mb-1"> Pedidos processando cookies relacionados<br> Este site oferece facilidades de comércio
                        eletrônico ou pagamento e alguns cookies são essenciais para garantir que seu pedido seja
                        lembrado entre as páginas, para que possamos processá-lo adequadamente.<br> </li>
                    <li class="mb-1"> Cookies relacionados a pesquisas<br> Periodicamente, oferecemos pesquisas e questionários
                        para fornecer informações interessantes, ferramentas úteis ou para entender nossa base de
                        usuários com mais precisão. Essas pesquisas podem usar cookies para lembrar quem já participou
                        numa pesquisa ou para fornecer resultados precisos após a alteração das páginas.<br> </li>
                    <li class="mb-1"> Cookies relacionados a formulários<br> Quando você envia dados por meio de um formulário
                        como os encontrados nas páginas de contacto ou nos formulários de comentários, os cookies podem
                        ser configurados para lembrar os detalhes do usuário para correspondência futura.<br> </li>
                    <li class="mb-1"> Cookies de preferências do site<br> Para proporcionar uma ótima experiência neste site,
                        fornecemos a funcionalidade para definir suas preferências de como esse site é executado quando
                        você o usa. Para lembrar suas preferências, precisamos definir cookies para que essas
                        informações possam ser chamadas sempre que você interagir com uma página for afetada por suas
                        preferências.<br> </li>
                </ul>
                <h3 class="text-lg font-medium leading-6 text-blue-900 mb-1">Cookies de Terceiros</h3>
                <p class="text-sm text-gray-500 font-light mb-2">Em alguns casos especiais, também usamos cookies fornecidos por terceiros confiáveis. A seção a
                    seguir detalha quais cookies de terceiros você pode encontrar através deste site.</p>
                <ul class="text-sm text-gray-500 font-light list-disc pl-8">
                    <li class="mb-1"> Este site usa o Google Analytics, que é uma das soluções de análise mais difundidas e
                        confiáveis ​​da Web, para nos ajudar a entender como você usa o site e como podemos melhorar sua
                        experiência. Esses cookies podem rastrear itens como quanto tempo você gasta no site e as
                        páginas visitadas, para que possamos continuar produzindo conteúdo atraente. </li>
                </ul>
                <p class="text-sm text-gray-500 font-light mb-2">Para mais informações sobre cookies do Google Analytics, consulte a página oficial do Google
                    Analytics.</p>
                <ul class="text-sm text-gray-500 font-light list-disc pl-8">
                    <li class="mb-1"> As análises de terceiros são usadas para rastrear e medir o uso deste site, para que possamos
                        continuar produzindo conteúdo atrativo. Esses cookies podem rastrear itens como o tempo que você
                        passa no site ou as páginas visitadas, o que nos ajuda a entender como podemos melhorar o site
                        para você.</li>
                    <li class="mb-1"> Periodicamente, testamos novos recursos e fazemos alterações subtis na maneira como o site se
                        apresenta. Quando ainda estamos testando novos recursos, esses cookies podem ser usados ​​para
                        garantir que você receba uma experiência consistente enquanto estiver no site, enquanto
                        entendemos quais otimizações os nossos usuários mais apreciam.</li>
                    <li class="mb-1"> À medida que vendemos produtos, é importante entendermos as estatísticas sobre quantos
                        visitantes de nosso site realmente compram e, portanto, esse é o tipo de dados que esses cookies
                        rastrearão. Isso é importante para você, pois significa que podemos fazer previsões de negócios
                        com precisão que nos permitem analizar nossos custos de publicidade e produtos para garantir o
                        melhor preço possível.</li>
                </ul>
                <h3 class="text-lg font-medium leading-6 text-blue-900 mb-1">Compromisso do Usuário</h3>
                <p class="text-sm text-gray-500 font-light mb-2">O usuário se compromete a fazer uso adequado dos conteúdos e da informação que o Dorsem oferece no
                    site e com caráter enunciativo, mas não limitativo:</p>
                <ul class="text-sm text-gray-500 font-light list-disc pl-8">
                    <li class="mb-1">A) Não se envolver em atividades que sejam ilegais ou contrárias à boa fé a à ordem pública;
                    </li>
                    <li class="mb-1">B) Não difundir propaganda ou conteúdo de natureza racista, xenofóbica, <a class="text-blue-600"
                            style='color: inherit !important; text-decoration:none !important;'
                            href='https://ondeapostar.pt/onde-da-a-bola/'>Onde ver a Bola</a> ou azar, qualquer tipo de
                        pornografia ilegal, de apologia ao terrorismo ou contra os direitos humanos;</li>
                    <li class="mb-1">C) Não causar danos aos sistemas físicos (hardwares) e lógicos (softwares) do Dorsem, de seus
                        fornecedores ou terceiros, para introduzir ou disseminar vírus informáticos ou quaisquer outros
                        sistemas de hardware ou software que sejam capazes de causar danos anteriormente mencionados.
                    </li>
                </ul>
                <h3 class="text-lg font-medium leading-6 text-blue-900 mb-1">Mais informações</h3>
                <p class="text-sm text-gray-500 font-light mb-2">Esperemos que esteja esclarecido e, como mencionado anteriormente, se houver algo que você não tem
                    certeza se precisa ou não, geralmente é mais seguro deixar os cookies ativados, caso interaja com um
                    dos recursos que você usa em nosso site.</p>
                <p class="text-sm text-gray-500 font-light mb-2">Esta política é efetiva a partir de <strong>Março</strong>/<strong>2022</strong>.</p>
            </div>
        </div>
        <!-- One big close button.  --->
        <div class="mt-5 sm:mt-6">
            <span class="flex w-full rounded-md shadow-sm">
            </span>
        </div>
    </div>
</div>
